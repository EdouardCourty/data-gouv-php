<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Generator;

/**
 * Validates that every registered API domain has at least one integration test file.
 *
 * Convention: the integration test directory for API 'foo' (with libNamespace ending in 'Bar')
 * is tests/Integration/Bar/. The directory must exist and contain at least one *Test.php file.
 */
final class IntegrationCoverageValidator
{
    private const string TESTS_INTEGRATION_DIR = '/tests/Integration';

    /**
     * Runs the coverage check for all registered APIs.
     * Returns a list of human-readable error messages; empty means all covered.
     *
     * @return list<string>
     */
    public static function validate(): array
    {
        $root = \dirname(__DIR__, 2);
        $baseDir = $root . self::TESTS_INTEGRATION_DIR;
        $errors = [];

        foreach (ApiConfigRegistry::all() as $name) {
            $config = ApiConfigRegistry::get($name);
            $domainDir = $baseDir . '/' . self::domainDirName($config);

            if (!is_dir($domainDir)) {
                $errors[] = \sprintf(
                    "'%s': integration test directory '%s/' is missing.",
                    $name,
                    'tests/Integration/' . self::domainDirName($config),
                );
                continue;
            }

            $testFiles = glob($domainDir . '/*Test.php');
            if ($testFiles === false || $testFiles === []) {
                $errors[] = \sprintf(
                    "'%s': integration test directory '%s/' exists but contains no *Test.php files.",
                    $name,
                    'tests/Integration/' . self::domainDirName($config),
                );
            }
        }

        return $errors;
    }

    /**
     * Derives the integration test directory name from an ApiConfig.
     * Matches the last segment of the libNamespace (e.g. 'Sirene', 'DataGouv').
     */
    private static function domainDirName(ApiConfig $config): string
    {
        return substr($config->libNamespace, strrpos($config->libNamespace, '\\') + 1);
    }
}
