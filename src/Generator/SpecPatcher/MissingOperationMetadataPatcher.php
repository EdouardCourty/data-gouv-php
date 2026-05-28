<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Generator\SpecPatcher;

/**
 * Fills in missing `operationId` and `tags` for every operation in an OpenAPI/Swagger spec.
 *
 * Both fields are required by Jane PHP to generate usable PHP code. When the upstream spec
 * omits them (which is invalid but common in the wild), this patcher derives them dynamically
 * from the HTTP method and path URL — no hardcoded endpoint lists needed.
 *
 * ## operationId derivation
 *
 * Each non-parameter path segment is converted to PascalCase (splitting on `_` and `-`).
 * Each path-parameter segment `{foo}` becomes `ByFoo`.
 * The HTTP method is prepended in lowercase.
 *
 * Examples:
 *   GET /communes            → getCommunes
 *   GET /communes/{code}     → getCommunesByCode
 *   GET /epcis/{code}/communes → getEpcisByCodeCommunes
 *   GET /{zone}.json         → getByZone   (with stripSuffixes: ['.json'])
 *
 * ## tag derivation
 *
 * The tag is the PascalCase of the first non-parameter path segment.
 * If all segments are parameters (e.g. `/{zone}.json`), $defaultTag is used as fallback.
 */
final class MissingOperationMetadataPatcher implements SpecPatcherInterface
{
    /**
     * @param list<string> $stripSuffixes Strings to remove from path segments before derivation (e.g. ['.json']).
     */
    public function __construct(
        private readonly string $defaultTag = 'Api',
        private readonly array $stripSuffixes = [],
    ) {
    }

    public function patch(array &$spec): void
    {
        $injected = 0;

        /** @var array<string, mixed> $paths */
        $paths = \is_array($spec['paths'] ?? null) ? $spec['paths'] : [];

        foreach ($paths as $path => &$pathItem) {
            if (!\is_array($pathItem)) {
                continue;
            }

            $normalizedPath = $this->normalizePath((string) $path);

            foreach ($pathItem as $method => &$operation) {
                if (!\is_array($operation)) {
                    continue;
                }

                if (!isset($operation['operationId'])) {
                    $operation['operationId'] = $this->deriveOperationId((string) $method, $normalizedPath);
                    ++$injected;
                }

                if (!isset($operation['tags'])) {
                    $operation['tags'] = [$this->deriveTag($normalizedPath)];
                }
            }
            unset($operation);
        }
        unset($pathItem);

        $spec['paths'] = $paths;

        echo "MissingOperationMetadataPatcher: injected operationId/tags on {$injected} operation(s).\n";
    }

    private function normalizePath(string $path): string
    {
        foreach ($this->stripSuffixes as $suffix) {
            $path = str_replace($suffix, '', $path);
        }

        return $path;
    }

    private function deriveOperationId(string $method, string $path): string
    {
        $segments = array_values(array_filter(explode('/', ltrim($path, '/'))));
        $parts = [];

        foreach ($segments as $segment) {
            if (str_starts_with($segment, '{') && str_ends_with($segment, '}')) {
                $parts[] = 'By' . ucfirst(trim($segment, '{}'));
            } else {
                $parts[] = $this->toPascalCase($segment);
            }
        }

        return lcfirst($method) . implode('', $parts);
    }

    private function deriveTag(string $path): string
    {
        $segments = array_values(array_filter(explode('/', ltrim($path, '/'))));

        foreach ($segments as $segment) {
            if (!str_starts_with($segment, '{')) {
                return $this->toPascalCase($segment);
            }
        }

        return $this->defaultTag;
    }

    private function toPascalCase(string $segment): string
    {
        $parts = preg_split('/[_\-]/', $segment);

        return implode('', array_map('ucfirst', $parts !== false ? $parts : [$segment]));
    }
}
