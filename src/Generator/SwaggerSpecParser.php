<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Generator;

use Symfony\Component\Yaml\Yaml;

final class SwaggerSpecParser
{
    /**
     * Reads the local spec file configured in $config and returns a map of operationId → tags.
     * Supports both JSON and YAML specs.
     *
     * @return array<string, list<string>>
     */
    public function parseOperationTags(ApiConfig $config): array
    {
        $content = @file_get_contents($config->specLocalPath);
        if ($content === false) {
            throw new \RuntimeException(\sprintf(
                'Could not read spec file: %s — run composer generate:%s first.',
                $config->specLocalPath,
                $config->name,
            ));
        }

        /** @var array{paths?: array<string, array<string, mixed>>} $spec */
        $spec = $config->specIsYaml
            ? Yaml::parse($content)
            : json_decode($content, true, 512, \JSON_THROW_ON_ERROR);

        $opTags = [];
        foreach ($spec['paths'] ?? [] as $methods) {
            foreach ($methods as $op) {
                if (\is_array($op) && isset($op['operationId'], $op['tags']) && \is_string($op['operationId']) && \is_array($op['tags'])) {
                    /** @var list<string> $tags */
                    $tags = $op['tags'];
                    $opTags[(string) $op['operationId']] = $tags;
                }
            }
        }

        return $opTags;
    }
}
