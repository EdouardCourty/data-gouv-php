<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Generator\Renderer;

use Ecourty\DataGouv\Generator\ApiConfig;

final class FacadeRenderer
{
    /** @param array<string, list<\Ecourty\DataGouv\Generator\MethodInfo>> $tagMethods */
    public function render(ApiConfig $config, array $tagMethods): string
    {
        $ns = $config->libNamespace;
        $janeNs = $config->janeNamespace;

        $apiUseLines = [];
        $hooks = [];

        foreach (array_keys($tagMethods) as $tag) {
            $className = $this->tagToClassName($tag) . 'Api';
            $propName = lcfirst($this->tagToClassName($tag));

            $apiUseLines[] = "use {$ns}\\Api\\{$className};";
            $hooks[] = "    public {$className} \${$propName} {\n        get => new {$className}(\$this->janeClient);\n    }";
        }

        $allUseLines = array_merge(
            $apiUseLines,
            ["use {$janeNs}\\Client;"],
            $this->buildPluginUseLines($config),
        );
        usort($allUseLines, static fn (string $a, string $b) => strcasecmp($a, $b));
        $useBlock = implode("\n", $allUseLines);

        $hooksBlock = implode("\n\n", $hooks);

        $authConstBlock = $config->auth->constName !== null
            ? "\n    public const string {$config->auth->constName} = '{$config->auth->key}';\n"
            : '';

        [$constructorParams, $pluginBlock] = $this->buildAuthBlocks($config);

        $className = $config->facadeClass;
        $baseUrl = $config->baseUrl;

        $constructorSignature = $constructorParams !== ''
            ? "    public function __construct(\n        {$constructorParams}?ClientInterface \$httpClient = null,\n    ) {"
            : "    public function __construct(\n        ?ClientInterface \$httpClient = null,\n    ) {";

        $output = <<<PHP
        <?php

        declare(strict_types=1);

        namespace {$ns};

        {$useBlock}

        /**
         * @see {$baseUrl}
         */
        final class {$className}
        {
            public const string BASE_URL = '{$baseUrl}';{$authConstBlock}
            private readonly Client \$janeClient;

        {$hooksBlock}

        {$constructorSignature}
                \$httpClient ??= Psr18ClientDiscovery::find();

                \$uri = Psr17FactoryDiscovery::findUriFactory()
                    ->createUri(self::BASE_URL);

                \$plugins = [
                    new AddHostPlugin(\$uri),
                ];

                if (\$uri->getPath() !== '' && \$uri->getPath() !== '/') {
                    \$plugins[] = new AddPathPlugin(\$uri);
                }

        {$pluginBlock}        /** @var Client \$janeClient */
                \$janeClient = Client::create(new PluginClient(\$httpClient, \$plugins));
                \$this->janeClient = \$janeClient;
            }

            /**
             * Returns the underlying Jane-generated client for advanced usage (e.g. FETCH_RESPONSE).
             */
            public function getClient(): Client
            {
                return \$this->janeClient;
            }
        }
        PHP;

        return $output . "\n";
    }

    /** @return list<string> */
    private function buildPluginUseLines(ApiConfig $config): array
    {
        $lines = [
            'use Http\\Client\\Common\\Plugin\\AddHostPlugin;',
            'use Http\\Client\\Common\\Plugin\\AddPathPlugin;',
            'use Http\\Client\\Common\\PluginClient;',
            'use Http\\Discovery\\Psr17FactoryDiscovery;',
            'use Http\\Discovery\\Psr18ClientDiscovery;',
            'use Psr\\Http\\Client\\ClientInterface;',
        ];

        if ($config->auth->key !== null) {
            if ($config->auth->isQueryParam) {
                $lines[] = 'use Http\\Client\\Common\\Plugin\\QueryDefaultsPlugin;';
            } else {
                $lines[] = 'use Http\\Client\\Common\\Plugin\\HeaderSetPlugin;';
            }
        }

        return $lines;
    }

    /** @return array{string, string} [constructorParams, pluginBlock] */
    private function buildAuthBlocks(ApiConfig $config): array
    {
        if ($config->auth->key === null) {
            return ['', ''];
        }

        $param = "?string \${$config->auth->paramName} = null,\n        ";

        if ($config->auth->isQueryParam) {
            $plugin = <<<PHP
                    if (\${$config->auth->paramName} !== null) {
                        \$plugins[] = new QueryDefaultsPlugin([self::{$config->auth->constName} => \${$config->auth->paramName}]);
                    }

            PHP;
        } elseif ($config->auth->isBearer) {
            $value = "'Bearer ' . \${$config->auth->paramName}";
            $plugin = <<<PHP
                    if (\${$config->auth->paramName} !== null) {
                        \$plugins[] = new HeaderSetPlugin([self::{$config->auth->constName} => {$value}]);
                    }

            PHP;
        } else {
            $plugin = <<<PHP
                    if (\${$config->auth->paramName} !== null) {
                        \$plugins[] = new HeaderSetPlugin([self::{$config->auth->constName} => \${$config->auth->paramName}]);
                    }

            PHP;
        }

        return [$param, $plugin];
    }

    private function tagToClassName(string $tag): string
    {
        $tag = transliterator_transliterate('Any-Latin; Latin-ASCII', $tag) ?: $tag;
        $tag = preg_replace('/[^a-zA-Z0-9_]/', '_', $tag) ?? $tag;
        $tag = preg_replace('/_+/', '_', $tag) ?? $tag;
        $tag = trim($tag, '_');

        return implode('', array_map('ucfirst', explode('_', $tag)));
    }
}
