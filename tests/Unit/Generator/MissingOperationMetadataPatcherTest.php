<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Unit\Generator;

use Ecourty\DataGouv\Generator\SpecPatcher\MissingOperationMetadataPatcher;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(MissingOperationMetadataPatcher::class)]
final class MissingOperationMetadataPatcherTest extends TestCase
{
    /**
     * @param array<string, array<string, mixed>> $paths
     * @param list<string>                        $stripSuffixes
     *
     * @return array<string, array<string, mixed>>
     */
    private function patch(array $paths, string $defaultTag = 'Api', array $stripSuffixes = []): array
    {
        $spec = ['paths' => $paths];
        (new MissingOperationMetadataPatcher($defaultTag, $stripSuffixes))->patch($spec);

        /* @var array<string, array<string, mixed>> */
        /** @var array<string, array<string, mixed>> $paths */
        $paths = $spec['paths'];

        return $paths;
    }

    #[Test]
    #[DataProvider('operationIdCases')]
    public function operationIdIsDerivedFromMethodAndPath(string $method, string $path, string $expected): void
    {
        /** @var array<string, array<string, mixed>> $paths */
        $paths = [$path => [$method => []]];
        $result = $this->patch($paths);

        /** @var array<string, mixed> $operation */
        $operation = $result[$path][$method];
        self::assertSame($expected, $operation['operationId']);
    }

    /** @return array<string, array{string, string, string}> */
    public static function operationIdCases(): array
    {
        return [
            'simple GET' => ['get',    '/communes',                 'getCommunes'],
            'GET with path param' => ['get',    '/communes/{code}',          'getCommunesByCode'],
            'nested with param' => ['get',    '/epcis/{code}/communes',    'getEpcisByCodeCommunes'],
            'POST simple' => ['post',   '/datasets',                 'postDatasets'],
            'DELETE with param' => ['delete', '/users/{id}',               'deleteUsersById'],
            'hyphenated segment' => ['get',    '/some-endpoint',            'getSomeEndpoint'],
            'underscored segment' => ['get',    '/some_endpoint',            'getSomeEndpoint'],
            'multi-segment no param' => ['get',    '/a/b/c',                    'getABC'],
        ];
    }

    #[Test]
    public function operationIdIsNotOverwrittenWhenAlreadySet(): void
    {
        /** @var array<string, array<string, mixed>> $paths */
        $paths = ['/foo' => ['get' => ['operationId' => 'existingId']]];
        $result = $this->patch($paths);

        /** @var array<string, mixed> $operation */
        $operation = $result['/foo']['get'];
        self::assertSame('existingId', $operation['operationId']);
    }

    #[Test]
    public function tagIsDerivedFromFirstNonParameterSegment(): void
    {
        /** @var array<string, array<string, mixed>> $paths */
        $paths = ['/communes/{code}' => ['get' => []]];
        $result = $this->patch($paths);

        /** @var array<string, mixed> $operation */
        $operation = $result['/communes/{code}']['get'];
        self::assertSame(['Communes'], $operation['tags']);
    }

    #[Test]
    public function tagFallsBackToDefaultWhenAllSegmentsAreParams(): void
    {
        /** @var array<string, array<string, mixed>> $paths */
        $paths = ['/{zone}' => ['get' => []]];
        $result = $this->patch($paths, 'MyDefault');

        /** @var array<string, mixed> $operation */
        $operation = $result['/{zone}']['get'];
        self::assertSame(['MyDefault'], $operation['tags']);
    }

    #[Test]
    public function tagIsNotOverwrittenWhenAlreadySet(): void
    {
        /** @var array<string, array<string, mixed>> $paths */
        $paths = ['/foo' => ['get' => ['tags' => ['ExistingTag']]]];
        $result = $this->patch($paths);

        /** @var array<string, mixed> $operation */
        $operation = $result['/foo']['get'];
        self::assertSame(['ExistingTag'], $operation['tags']);
    }

    #[Test]
    public function stripSuffixesAreRemovedFromPathBeforeDerivation(): void
    {
        /** @var array<string, array<string, mixed>> $paths */
        $paths = ['/{zone}.json' => ['get' => []]];
        $result = $this->patch($paths, 'Api', ['.json']);

        /** @var array<string, mixed> $operation */
        $operation = $result['/{zone}.json']['get'];
        self::assertSame('getByZone', $operation['operationId']);
    }

    #[Test]
    public function nonArrayOperationsAreSkipped(): void
    {
        /** @var array<string, array<string, mixed>> $paths */
        $paths = ['/foo' => ['x-meta' => 'some string', 'get' => []]];
        $result = $this->patch($paths);

        self::assertIsString($result['/foo']['x-meta']);

        /** @var array<string, mixed> $operation */
        $operation = $result['/foo']['get'];
        self::assertArrayHasKey('operationId', $operation);
    }

    #[Test]
    public function emptySpecProducesNoErrors(): void
    {
        $spec = [];
        (new MissingOperationMetadataPatcher())->patch($spec);

        self::assertSame([], $spec['paths'] ?? []);
    }
}
