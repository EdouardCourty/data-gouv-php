<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Unit\Generator;

use Ecourty\DataGouv\Generator\SpecPatcher\NullablePropertyPatcher;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(NullablePropertyPatcher::class)]
final class NullablePropertyPatcherTest extends TestCase
{
    private NullablePropertyPatcher $patcher;

    protected function setUp(): void
    {
        $this->patcher = new NullablePropertyPatcher();
    }

    #[Test]
    public function itMarksNonRequiredSwagger2ScalarPropertiesAsXNullable(): void
    {
        $spec = [
            'definitions' => [
                'MyModel' => [
                    'required' => ['id'],
                    'properties' => [
                        'id' => ['type' => 'string'],
                        'name' => ['type' => 'string'],
                        'count' => ['type' => 'integer'],
                    ],
                ],
            ],
        ];

        $this->patcher->patch($spec);

        /** @var array<string, mixed> $definitions */
        $definitions = $spec['definitions'];
        /** @var array<string, mixed> $model */
        $model = $definitions['MyModel'];
        /** @var array<string, array<string, mixed>> $props */
        $props = $model['properties'];
        self::assertArrayNotHasKey('x-nullable', $props['id'], 'required field must not be marked x-nullable');
        self::assertTrue($props['name']['x-nullable'], 'non-required string must be marked x-nullable');
        self::assertTrue($props['count']['x-nullable'], 'non-required integer must be marked x-nullable');
    }

    #[Test]
    public function itMarksNonRequiredOpenapi3ScalarPropertiesAsNullable(): void
    {
        $spec = [
            'components' => [
                'schemas' => [
                    'Company' => [
                        'required' => ['siren'],
                        'properties' => [
                            'siren' => ['type' => 'string'],
                            'nom' => ['type' => 'string'],
                            'score' => ['type' => 'number'],
                            'actif' => ['type' => 'boolean'],
                        ],
                    ],
                ],
            ],
        ];

        $this->patcher->patch($spec);

        /** @var array<string, mixed> $components */
        $components = $spec['components'];
        /** @var array<string, mixed> $schemas */
        $schemas = $components['schemas'];
        /** @var array<string, mixed> $company */
        $company = $schemas['Company'];
        /** @var array<string, array<string, mixed>> $props */
        $props = $company['properties'];
        self::assertArrayNotHasKey('nullable', $props['siren'], 'required field must not be marked nullable');
        self::assertTrue($props['nom']['nullable'], 'non-required string must be nullable');
        self::assertTrue($props['score']['nullable'], 'non-required number must be nullable');
        self::assertTrue($props['actif']['nullable'], 'non-required boolean must be nullable');
    }

    #[Test]
    public function itDoesNotMarkArrayOrObjectProperties(): void
    {
        $spec = [
            'components' => [
                'schemas' => [
                    'Entity' => [
                        'properties' => [
                            'tags' => ['type' => 'array'],
                            'address' => ['type' => 'object'],
                            'label' => ['type' => 'string'],
                        ],
                    ],
                ],
            ],
        ];

        $this->patcher->patch($spec);

        /** @var array<string, mixed> $components */
        $components = $spec['components'];
        /** @var array<string, mixed> $schemas */
        $schemas = $components['schemas'];
        /** @var array<string, mixed> $entity */
        $entity = $schemas['Entity'];
        /** @var array<string, array<string, mixed>> $props */
        $props = $entity['properties'];
        self::assertArrayNotHasKey('nullable', $props['tags'], 'array type must not be marked nullable');
        self::assertArrayNotHasKey('nullable', $props['address'], 'object type must not be marked nullable');
        self::assertTrue($props['label']['nullable']);
    }

    #[Test]
    public function itSkipsAlreadyNullableProperties(): void
    {
        $spec = [
            'definitions' => [
                'Model' => [
                    'properties' => [
                        'name' => ['type' => 'string', 'x-nullable' => true],
                    ],
                ],
            ],
        ];

        $this->patcher->patch($spec);

        /** @var array<string, mixed> $definitions */
        $definitions = $spec['definitions'];
        /** @var array<string, mixed> $model */
        $model = $definitions['Model'];
        /** @var array<string, array<string, mixed>> $props */
        $props = $model['properties'];
        self::assertTrue($props['name']['x-nullable']);
    }

    #[Test]
    public function itHandlesSpecWithNoDefinitionsOrComponents(): void
    {
        $spec = ['info' => ['title' => 'Empty API']];
        $this->patcher->patch($spec);
        $this->addToAssertionCount(1);
    }
}
