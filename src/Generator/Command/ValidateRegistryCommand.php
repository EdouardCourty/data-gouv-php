<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Generator\Command;

use Ecourty\DataGouv\Generator\RegistryValidator;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(name: 'validate-registry', description: 'Verify that ApiConfigRegistry is internally consistent')]
final class ValidateRegistryCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $errors = RegistryValidator::validate();

        if ($errors === []) {
            $io->success('ApiConfigRegistry is consistent.');

            return Command::SUCCESS;
        }

        $io->error(\sprintf('ApiConfigRegistry has %d consistency error(s):', \count($errors)));
        foreach ($errors as $error) {
            $io->writeln("  - {$error}");
        }

        return Command::FAILURE;
    }
}
