<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Unit\Generator;

use Ecourty\DataGouv\Generator\ApiConfigRegistry;
use Ecourty\DataGouv\Generator\RegistryValidator;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(RegistryValidator::class)]
#[CoversClass(ApiConfigRegistry::class)]
final class ApiConfigRegistryConsistencyTest extends TestCase
{
    #[Test]
    public function registryIsFullyConsistent(): void
    {
        $errors = RegistryValidator::validate();

        self::assertSame(
            [],
            $errors,
            'ApiConfigRegistry has consistency errors: ' . implode('; ', $errors),
        );
    }

    #[Test]
    public function allNamesResolveInGet(): void
    {
        foreach (ApiConfigRegistry::all() as $name) {
            $config = ApiConfigRegistry::get($name);

            self::assertSame($name, $config->name);
        }
    }

    #[Test]
    public function specUrlsKeysAreSubsetOfAll(): void
    {
        $allNames = ApiConfigRegistry::all();

        foreach (array_keys(ApiConfigRegistry::specUrls()) as $urlKey) {
            self::assertContains(
                $urlKey,
                $allNames,
                "specUrls() key '{$urlKey}' is not listed in all()",
            );
        }
    }

    #[Test]
    public function allNamesHaveSpecUrl(): void
    {
        $specUrls = ApiConfigRegistry::specUrls();

        foreach (ApiConfigRegistry::all() as $name) {
            self::assertArrayHasKey(
                $name,
                $specUrls,
                "API '{$name}' is missing from specUrls()",
            );
        }
    }

    #[Test]
    public function getThrowsForUnknownApi(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        ApiConfigRegistry::get('does-not-exist');
    }
}
