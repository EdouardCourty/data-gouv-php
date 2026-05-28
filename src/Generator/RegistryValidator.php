<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Generator;

/**
 * Validates consistency between the three registry methods: all(), get(), and specUrls().
 *
 * Rules enforced:
 *   1. Every name listed in all() must resolve without error in get().
 *   2. Every name listed in all() must have an entry in specUrls().
 *   3. Every key in specUrls() must be listed in all() (no orphaned URLs).
 */
final class RegistryValidator
{
    /**
     * Runs all consistency checks and returns a list of error messages.
     * An empty list means the registry is fully consistent.
     *
     * @return list<string>
     */
    public static function validate(): array
    {
        $errors = [];
        $allNames = ApiConfigRegistry::all();
        $specUrls = ApiConfigRegistry::specUrls();

        foreach ($allNames as $name) {
            // Rule 1: every name in all() must resolve in get()
            try {
                ApiConfigRegistry::get($name);
            } catch (\InvalidArgumentException) {
                $errors[] = \sprintf("'%s' is listed in all() but has no match arm in get().", $name);
            }

            // Rule 2: every name must have a URL in specUrls()
            if (!\array_key_exists($name, $specUrls)) {
                $errors[] = \sprintf("'%s' is listed in all() but has no entry in specUrls().", $name);
            }
        }

        // Rule 3: no orphaned URL in specUrls()
        foreach (array_keys($specUrls) as $urlKey) {
            if (!\in_array($urlKey, $allNames, true)) {
                $errors[] = \sprintf("'%s' has an entry in specUrls() but is not listed in all().", $urlKey);
            }
        }

        return $errors;
    }
}
