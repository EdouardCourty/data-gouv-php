<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Generator\Command;

use Ecourty\DataGouv\Generator\ApiConfigRegistry;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(name: 'add-api', description: 'Register a new API domain and scaffold its generation config')]
final class AddApiCommand extends Command
{
    private const array VALID_AUTH_TYPES = ['none', 'api-key-header', 'bearer-header', 'query-param'];

    protected function configure(): void
    {
        $this
            ->addOption('name', null, InputOption::VALUE_REQUIRED, 'Lowercase alphanumeric identifier (e.g. myapi)')
            ->addOption('spec-url', null, InputOption::VALUE_REQUIRED, 'Public URL of the OpenAPI/Swagger spec')
            ->addOption('namespace', null, InputOption::VALUE_REQUIRED, 'PHP namespace (e.g. "Ecourty\\DataGouv\\DataServices\\MyApi")')
            ->addOption('base-url', null, InputOption::VALUE_REQUIRED, 'API base URL (e.g. https://api.example.com)')
            ->addOption('auth', null, InputOption::VALUE_REQUIRED, 'Auth strategy: ' . implode(' | ', self::VALID_AUTH_TYPES))
            ->addOption('auth-key', null, InputOption::VALUE_OPTIONAL, 'Header or query-param name (required for api-key-header and query-param)')
            ->addOption('generate', null, InputOption::VALUE_NONE, 'Run the generation pipeline after registration')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $name = $input->getOption('name');
        $specUrl = $input->getOption('spec-url');
        $namespace = $input->getOption('namespace');
        $baseUrl = $input->getOption('base-url');
        $auth = $input->getOption('auth');
        $authKey = $input->getOption('auth-key');
        $generate = (bool) $input->getOption('generate');

        \assert(\is_string($name) || $name === null);
        \assert(\is_string($specUrl) || $specUrl === null);
        \assert(\is_string($namespace) || $namespace === null);
        \assert(\is_string($baseUrl) || $baseUrl === null);
        \assert(\is_string($auth) || $auth === null);
        \assert(\is_string($authKey) || $authKey === null);

        if ($name === null || $specUrl === null || $namespace === null || $baseUrl === null || $auth === null) {
            $io->error('Missing required options. Run with --help for usage.');

            return Command::FAILURE;
        }

        if (!\in_array($auth, self::VALID_AUTH_TYPES, true)) {
            $io->error('--auth must be one of: ' . implode(', ', self::VALID_AUTH_TYPES));

            return Command::FAILURE;
        }

        if (\in_array($auth, ['api-key-header', 'query-param'], true) && $authKey === null) {
            $io->error("--auth={$auth} requires --auth-key=<name>");

            return Command::FAILURE;
        }

        if (!preg_match('/^[a-z][a-z0-9]*$/', $name)) {
            $io->error("--name must be lowercase alphanumeric (e.g. 'myapi', 'geo2').");

            return Command::FAILURE;
        }

        $root = \dirname(__DIR__, 3);
        $registryFile = "{$root}/src/Generator/ApiConfigRegistry.php";

        if (!file_exists($registryFile)) {
            $io->error("Cannot find ApiConfigRegistry.php at {$registryFile}");

            return Command::FAILURE;
        }

        $registryContent = file_get_contents($registryFile);
        if ($registryContent === false) {
            $io->error("Cannot read {$registryFile}");

            return Command::FAILURE;
        }

        if (str_contains($registryContent, "'{$name}' =>")) {
            $io->error("API '{$name}' is already registered.");

            return Command::FAILURE;
        }

        $existingUrls = ApiConfigRegistry::specUrls();
        $conflictingApi = array_search($specUrl, $existingUrls, true);
        if ($conflictingApi !== false) {
            $io->error("Spec URL '{$specUrl}' is already registered for API '{$conflictingApi}'.");

            return Command::FAILURE;
        }

        // ─── Download spec ────────────────────────────────────────────────────

        $io->writeln("Downloading spec from {$specUrl} ...");

        $context = stream_context_create([
            'http' => [
                'timeout' => 30,
                'header' => "User-Agent: ecourty/data-gouv-client add-api\r\n",
            ],
        ]);
        $specContent = @file_get_contents($specUrl, false, $context);

        if ($specContent === false) {
            $io->error("Could not download spec from {$specUrl}");

            return Command::FAILURE;
        }

        $io->writeln('Downloaded ' . \strlen($specContent) . ' bytes.');

        $specFormat = $this->detectSpecFormat($specUrl, $specContent);
        $specFilename = "{$name}.spec.{$specFormat}";
        $specPath = "{$root}/specs/{$specFilename}";

        file_put_contents($specPath, $specContent);
        $io->writeln("Saved spec to {$specPath}");

        // ─── Create config/jane/{name}.php ───────────────────────────────────

        $namespaceRoot = 'Ecourty\\DataGouv\\';
        $relPath = str_replace('\\', '/', str_replace($namespaceRoot, '', $namespace));
        $janeConfigPath = "{$root}/config/jane/{$name}.php";

        if (file_exists($janeConfigPath)) {
            $io->warning("{$janeConfigPath} already exists; skipping.");
        } else {
            $janeConfig = <<<PHP
            <?php

            declare(strict_types=1);

            return [
                'openapi-file' => __DIR__ . '/../../specs/{$specFilename}',
                'namespace' => '{$namespace}\\Client',
                'directory' => __DIR__ . '/../../src/{$relPath}/Client',
                'use-fixer' => false,
            ];
            PHP;
            file_put_contents($janeConfigPath, $janeConfig . "\n");
            $io->writeln("Created {$janeConfigPath}");
        }

        // ─── Patch ApiConfigRegistry.php ─────────────────────────────────────

        $constName = strtoupper($name) . '_SPEC_URL';
        $authLine = $this->buildAuthConfigLine($auth, $authKey);

        $registryContent = str_replace(
            "\n\n    public static function get(",
            "\n    private const string {$constName} = '{$specUrl}';\n\n    public static function get(",
            $registryContent,
        );

        $matchArm = <<<PHP
                    '{$name}' => new ApiConfig(
                        name: '{$name}',
                        specLocalPath: self::root() . '/specs/{$specFilename}',
                        libNamespace: '{$namespace}',
                        baseUrl: '{$baseUrl}',
                        auth: {$authLine},
                    ),

        PHP;
        $registryContent = str_replace(
            '            default => throw new',
            $matchArm . '            default => throw new',
            $registryContent,
        );

        $registryContent = preg_replace(
            '/(public static function all\(\): array\s*\{\s*return \[)(.*?)(\];)/s',
            "$1$2, '{$name}'$3",
            $registryContent,
        );

        if ($registryContent === null) {
            $io->error('Could not patch all() in ApiConfigRegistry.');

            return Command::FAILURE;
        }

        $registryContent = str_replace(
            "        ];\n    }\n\n    private static function root",
            "            '{$name}' => self::{$constName},\n        ];\n    }\n\n    private static function root",
            $registryContent,
        );

        file_put_contents($registryFile, $registryContent);
        $io->writeln('Patched ApiConfigRegistry.php');

        // ─── Create docs/{name}.md stub ──────────────────────────────────────

        $docsDir = "{$root}/docs";
        $docsFile = "{$docsDir}/{$name}.md";

        if (!is_dir($docsDir) && !mkdir($docsDir, 0755, true)) {
            $io->error("Could not create directory {$docsDir}");

            return Command::FAILURE;
        }

        if (file_exists($docsFile)) {
            $io->warning("{$docsFile} already exists; skipping.");
        } else {
            file_put_contents($docsFile, $this->generateDocsStub($name, $namespace, $auth, $authKey, $baseUrl));
            $io->writeln("Created {$docsFile}");
        }

        // ─── Run generation ───────────────────────────────────────────────────

        if ($generate) {
            $io->writeln("\nRunning generation for '{$name}'...");
            $php = \PHP_BINARY;
            passthru("{$php} {$root}/bin/console generate --api={$name}", $exitCode);

            if ($exitCode !== 0) {
                $io->error('Generation failed.');

                return Command::FAILURE;
            }
        }

        $io->success("API '{$name}' registered successfully.");

        if (!$generate) {
            $io->note("Run  composer generate -- --api={$name}  (or  php bin/console generate --api={$name})  to generate the code.");
        }

        return Command::SUCCESS;
    }

    private function detectSpecFormat(string $url, string $content): string
    {
        $ext = strtolower(pathinfo((string) parse_url($url, \PHP_URL_PATH), \PATHINFO_EXTENSION));

        if (\in_array($ext, ['yaml', 'yml'], true)) {
            return 'yaml';
        }

        if ($ext === 'json') {
            return 'json';
        }

        return str_starts_with(ltrim($content), '{') || str_starts_with(ltrim($content), '[')
            ? 'json'
            : 'yaml';
    }

    private function buildAuthConfigLine(string $auth, ?string $authKey): string
    {
        return match ($auth) {
            'none' => 'AuthConfig::none()',
            'api-key-header' => "AuthConfig::apiKeyHeader('{$authKey}')",
            'bearer-header' => $authKey !== null
                ? "AuthConfig::bearerHeader('{$authKey}')"
                : 'AuthConfig::bearerHeader()',
            'query-param' => "AuthConfig::queryParam('{$authKey}')",
            default => throw new \InvalidArgumentException("Unknown auth type: {$auth}"),
        };
    }

    private function generateDocsStub(string $name, string $namespace, string $auth, ?string $authKey, string $baseUrl): string
    {
        $facadeClass = implode('', array_map('ucfirst', explode('-', $name))) . 'Client';
        $authNote = match ($auth) {
            'api-key-header' => "An API key is required, passed as the `{$authKey}` header.",
            'bearer-header' => 'An optional Bearer token can be passed for authentication.',
            'query-param' => "An API key is optional, passed as the `{$authKey}` query parameter.",
            default => 'No authentication required.',
        };
        $constructorExample = match ($auth) {
            'api-key-header' => "\$client = new {$facadeClass}(apiKey: 'your-key');",
            'bearer-header' => "\$client = new {$facadeClass}(bearerToken: 'your-token');",
            'query-param' => "\$client = new {$facadeClass}(apiKey: 'your-key'); // optional",
            default => "\$client = new {$facadeClass}();",
        };

        $namespaceFull = rtrim($namespace, '\\');

        return <<<MD
        # {$name}

        > **TODO**: Add a description of this API and a link to its official documentation.

        - **Official API**: {$baseUrl}

        ---

        ## Authentication

        {$authNote}

        ```php
        use {$namespaceFull}\\{$facadeClass};

        {$constructorExample}
        ```

        ---

        ## Sub-clients

        > **TODO**: List the sub-clients and their descriptions after running `php bin/console generate --api={$name}`.

        | Property | Description |
        |---|---|
        | `\$client->example` | Example sub-client |

        ---

        ## Usage Examples

        ```php
        use {$namespaceFull}\\{$facadeClass};

        \$client = new {$facadeClass}();
        // TODO: add usage examples
        ```

        ---

        ## Constants

        ```php
        {$facadeClass}::BASE_URL; // '{$baseUrl}'
        ```
        MD . "\n";
    }
}
