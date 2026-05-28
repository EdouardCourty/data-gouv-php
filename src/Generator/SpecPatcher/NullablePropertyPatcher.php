<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Generator\SpecPatcher;

/**
 * Marks every non-required scalar property as nullable in OpenAPI/Swagger specs.
 *
 * - Swagger 2.0 (`definitions`): sets `x-nullable: true` on non-required scalar props
 * - OpenAPI 3.0/3.1 (`components/schemas`): sets `nullable: true` on non-required scalar props
 *
 * Jane PHP generates non-nullable getters for properties absent from `required`, which causes
 * type errors when the API returns null for optional fields.
 */
final class NullablePropertyPatcher implements SpecPatcherInterface
{
    private const array SCALAR_TYPES = ['string', 'integer', 'number', 'boolean'];

    public function patch(array &$spec): void
    {
        $patched = 0;

        // Swagger 2.0
        /** @var array<string, mixed>|null $definitions */
        $definitions = \is_array($spec['definitions'] ?? null) ? $spec['definitions'] : null;
        if ($definitions !== null) {
            $patched += $this->patchSchemas($definitions, useXNullable: true);
            $spec['definitions'] = $definitions;
        }

        // OpenAPI 3.0 / 3.1
        /** @var array<string, mixed> $components */
        $components = \is_array($spec['components'] ?? null) ? $spec['components'] : [];
        /** @var array<string, mixed>|null $schemas */
        $schemas = \is_array($components['schemas'] ?? null) ? $components['schemas'] : null;
        if ($schemas !== null) {
            $patched += $this->patchSchemas($schemas, useXNullable: false);
            $components['schemas'] = $schemas;
            $spec['components'] = $components;
        }

        echo "NullablePropertyPatcher: marked {$patched} non-required scalar properties as nullable.\n";
    }

    /**
     * @param array<string, mixed> $schemas
     */
    private function patchSchemas(array &$schemas, bool $useXNullable): int
    {
        $patched = 0;

        foreach ($schemas as &$schema) {
            if (!\is_array($schema) || !\is_array($schema['properties'] ?? null)) {
                continue;
            }

            /** @var list<string> $requiredList */
            $requiredList = \is_array($schema['required'] ?? null) ? $schema['required'] : [];
            $required = array_flip($requiredList);

            foreach ($schema['properties'] as $propName => &$prop) {
                if (!\is_array($prop) || !isset($prop['type']) || !\is_string($prop['type'])) {
                    continue;
                }

                if (isset($required[$propName])) {
                    continue;
                }

                if (!\in_array($prop['type'], self::SCALAR_TYPES, true)) {
                    continue;
                }

                if ($useXNullable) {
                    if (($prop['x-nullable'] ?? false) !== true) {
                        $prop['x-nullable'] = true;
                        ++$patched;
                    }
                } else {
                    if (($prop['nullable'] ?? false) !== true) {
                        $prop['nullable'] = true;
                        ++$patched;
                    }
                }
            }
            unset($prop);
        }
        unset($schema);

        return $patched;
    }
}
