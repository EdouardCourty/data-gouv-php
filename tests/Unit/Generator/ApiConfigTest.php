<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Unit\Generator;

use Ecourty\DataGouv\Generator\ApiConfig;
use Ecourty\DataGouv\Generator\AuthConfig;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(ApiConfig::class)]
final class ApiConfigTest extends TestCase
{
    private static function makeConfig(string $libNamespace, string $specLocalPath = '/tmp/spec.json'): ApiConfig
    {
        return new ApiConfig(
            name: 'test',
            specLocalPath: $specLocalPath,
            libNamespace: $libNamespace,
            baseUrl: 'https://example.com',
            auth: AuthConfig::none(),
        );
    }

    #[Test]
    public function facadeClassIsDerivedFromLastNamespaceSegment(): void
    {
        $config = self::makeConfig('Ecourty\\DataGouv\\DataServices\\Sirene');

        self::assertSame('SireneClient', $config->facadeClass);
    }

    #[Test]
    public function facadeClassWorksForDataGouv(): void
    {
        $config = self::makeConfig('Ecourty\\DataGouv\\DataGouv');

        self::assertSame('DataGouvClient', $config->facadeClass);
    }

    #[Test]
    #[DataProvider('yamlExtensions')]
    public function specIsYamlForYamlExtensions(string $path): void
    {
        $config = self::makeConfig('Ecourty\\DataGouv\\DataServices\\Test', $path);

        self::assertTrue($config->specIsYaml);
    }

    /** @return array<string, array{string}> */
    public static function yamlExtensions(): array
    {
        return [
            '.yaml' => ['/tmp/spec.yaml'],
            '.yml' => ['/tmp/spec.yml'],
        ];
    }

    #[Test]
    public function specIsNotYamlForJson(): void
    {
        $config = self::makeConfig('Ecourty\\DataGouv\\DataServices\\Test', '/tmp/spec.json');

        self::assertFalse($config->specIsYaml);
    }

    #[Test]
    public function janeNamespaceSuffixesClientOnLibNamespace(): void
    {
        $config = self::makeConfig('Ecourty\\DataGouv\\DataServices\\Sirene');

        self::assertSame('Ecourty\\DataGouv\\DataServices\\Sirene\\Client', $config->janeNamespace);
    }

    #[Test]
    public function exceptionBaseClassStripsClientSuffix(): void
    {
        $config = self::makeConfig('Ecourty\\DataGouv\\DataServices\\Sirene');

        self::assertSame('SireneException', $config->exceptionBaseClass);
    }

    #[Test]
    public function exceptionNamespaceIsLibNamespacePlusException(): void
    {
        $config = self::makeConfig('Ecourty\\DataGouv\\DataServices\\Sirene');

        self::assertSame('Ecourty\\DataGouv\\DataServices\\Sirene\\Exception', $config->exceptionNamespace);
    }

    #[Test]
    public function apiDirIsInsideSrcRelativeToNamespace(): void
    {
        $config = self::makeConfig('Ecourty\\DataGouv\\DataServices\\Sirene');

        self::assertStringEndsWith('/src/DataServices/Sirene/Api', $config->apiDir);
    }

    #[Test]
    public function facadeFileEndsWithFacadeClassPhp(): void
    {
        $config = self::makeConfig('Ecourty\\DataGouv\\DataServices\\Sirene');

        self::assertStringEndsWith('/src/DataServices/Sirene/SireneClient.php', $config->facadeFile);
    }

    #[Test]
    public function exceptionDirIsInsideSrcRelativeToNamespace(): void
    {
        $config = self::makeConfig('Ecourty\\DataGouv\\DataServices\\Sirene');

        self::assertStringEndsWith('/src/DataServices/Sirene/Exception', $config->exceptionDir);
    }

    #[Test]
    public function clientDirIsInsideSrcRelativeToNamespace(): void
    {
        $config = self::makeConfig('Ecourty\\DataGouv\\DataServices\\Sirene');

        self::assertStringEndsWith('/src/DataServices/Sirene/Client', $config->clientDir);
    }
}
