<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Generator;

final class SwaggerSpecParser
{
    /**
     * Fetches the Swagger spec and returns a map of operationId → tags.
     *
     * @return array<string, list<string>>
     */
    public function fetchOperationTags(string $url): array
    {
        $json = @file_get_contents($url);
        if ($json === false) {
            throw new \RuntimeException("Could not fetch Swagger spec from {$url}");
        }

        $spec = json_decode($json, true, 512, \JSON_THROW_ON_ERROR);

        $opTags = [];
        foreach ($spec['paths'] as $methods) {
            foreach ($methods as $op) {
                if (\is_array($op) && isset($op['operationId'], $op['tags'])) {
                    $opTags[$op['operationId']] = $op['tags'];
                }
            }
        }

        return $opTags;
    }
}
