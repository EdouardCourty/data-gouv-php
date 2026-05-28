<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Generator\Command;

use Ecourty\DataGouv\Generator\IntegrationCoverageValidator;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'validate-integration-coverage',
    description: 'Verify that every registered API domain has at least one integration test file',
)]
final class ValidateIntegrationCoverageCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $errors = IntegrationCoverageValidator::validate();

        if ($errors === []) {
            $io->success('All API domains have integration test coverage.');

            return Command::SUCCESS;
        }

        $io->error(\sprintf('Integration test coverage is incomplete (%d issue(s)):', \count($errors)));
        foreach ($errors as $error) {
            $io->writeln("  - {$error}");
        }
        $io->note('Add at least one *Test.php file to tests/Integration/{Domain}/ for each missing API.');

        return Command::FAILURE;
    }
}
