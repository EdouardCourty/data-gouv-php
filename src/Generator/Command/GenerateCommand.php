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

#[AsCommand(name: 'generate', description: 'Generate PHP clients from OpenAPI specs')]
final class GenerateCommand extends Command
{
    protected function configure(): void
    {
        $this->addOption(
            'api',
            null,
            InputOption::VALUE_OPTIONAL,
            'Name of the API to generate (generates all if omitted). Available: ' . implode(', ', ApiConfigRegistry::all()),
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $filter = $input->getOption('api');
        \assert($filter === null || \is_string($filter));

        if ($filter !== null && !\in_array($filter, ApiConfigRegistry::all(), true)) {
            $io->error("Unknown API '{$filter}'. Available: " . implode(', ', ApiConfigRegistry::all()));

            return Command::FAILURE;
        }

        $apis = $filter !== null ? [$filter] : ApiConfigRegistry::all();
        $root = \dirname(__DIR__, 3);
        $php = \PHP_BINARY;
        $jane = $root . '/vendor/bin/jane-openapi';

        foreach ($apis as $apiName) {
            $config = ApiConfigRegistry::get($apiName);
            $io->section("Generating: {$apiName}");

            try {
                $this->runProcess("{$php} {$root}/bin/scripts/download-spec.php --api={$apiName}", $output);

                $this->runProcess("{$php} {$jane} generate --config-file {$root}/config/jane/{$apiName}.php", $output);
                $this->runProcess("{$php} {$root}/bin/scripts/patch-generated.php {$config->clientDir}", $output);
                $this->runProcess("{$php} {$root}/bin/scripts/generate-facade.php --api={$apiName}", $output);
            } catch (\RuntimeException $e) {
                $io->error($e->getMessage());

                return Command::FAILURE;
            }
        }

        $io->success('All APIs generated.');

        return Command::SUCCESS;
    }

    private function runProcess(string $command, OutputInterface $output): void
    {
        $output->writeln("  → {$command}");
        passthru($command, $exitCode);

        if ($exitCode !== 0) {
            throw new \RuntimeException("Command failed (exit {$exitCode}): {$command}");
        }
    }
}
