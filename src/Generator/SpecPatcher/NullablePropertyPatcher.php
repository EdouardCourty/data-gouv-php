<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Generator\SpecPatcher;

/**
 * Adds x-nullable: true to every non-required scalar property in Swagger 2.0 definitions.
 *
 * Jane PHP generates non-nullable getters for properties that are absent from the `required`
 * array unless x-nullable is set — this causes type errors when the API returns null.
 */
final class NullablePropertyPatcher implements SpecPatcherInterface
{
    private const array SCALAR_TYPES = ['string', 'integer', 'number', 'boolean'];

    public function patch(array &$spec): void
    {
        $patched = 0;

        /** @var array<string, mixed> $definitions */
        $definitions = \is_array($spec['definitions'] ?? null) ? $spec['definitions'] : [];

        foreach ($definitions as &$definition) {
            if (!\is_array($definition) || !\is_array($definition['properties'] ?? null)) {
                continue;
            }

            /** @var list<string> $requiredList */
            $requiredList = \is_array($definition['required'] ?? null) ? $definition['required'] : [];
            $required = array_flip($requiredList);

            foreach ($definition['properties'] as $propName => &$prop) {
                if (!\is_array($prop) || !isset($prop['type']) || !\is_string($prop['type'])) {
                    continue;
                }

                if (isset($required[$propName])) {
                    continue;
                }

                if (\in_array($prop['type'], self::SCALAR_TYPES, true) && ($prop['x-nullable'] ?? false) !== true) {
                    $prop['x-nullable'] = true;
                    ++$patched;
                }
            }
            unset($prop);
        }
        unset($definition);

        echo "NullablePropertyPatcher: marked {$patched} non-required scalar properties as x-nullable.\n";
    }
}
