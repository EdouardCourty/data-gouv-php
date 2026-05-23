#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * Downloads the data.gouv.fr Swagger spec and makes all non-required scalar
 * properties nullable (x-nullable: true).
 *
 * This is necessary because the real API often returns null for optional fields
 * that the Swagger spec declares as non-nullable strings/integers.
 *
 * Outputs: swagger.patched.json (git-ignored)
 *
 * Run via: composer generate:patch-spec
 */
const SWAGGER_SOURCE_URL = 'https://www.data.gouv.fr/api/1/swagger.json';
const PATCHED_SPEC_FILE = __DIR__ . '/../swagger.patched.json';
const NULLABLE_TYPES = ['string', 'integer', 'number', 'boolean'];

echo 'Downloading Swagger spec from ' . SWAGGER_SOURCE_URL . " ...\n";

$raw = @file_get_contents(SWAGGER_SOURCE_URL);
if ($raw === false) {
    fwrite(\STDERR, "ERROR: Failed to download Swagger spec.\n");
    exit(1);
}

$spec = json_decode($raw, true, 512, \JSON_THROW_ON_ERROR);

$patched = 0;

foreach ($spec['definitions'] as $defName => &$definition) {
    if (!isset($definition['properties'])) {
        continue;
    }

    $required = array_flip($definition['required'] ?? []);
    $properties = &$definition['properties'];

    foreach ($properties as $propName => &$prop) {
        if (isset($required[$propName])) {
            continue;
        }

        $type = $prop['type'] ?? null;
        if (!\in_array($type, NULLABLE_TYPES, true)) {
            continue;
        }

        if (($prop['x-nullable'] ?? false) === true) {
            continue;
        }

        $prop['x-nullable'] = true;
        ++$patched;
    }
}

unset($definition, $properties, $prop);

file_put_contents(PATCHED_SPEC_FILE, json_encode($spec, \JSON_PRETTY_PRINT | \JSON_UNESCAPED_UNICODE | \JSON_UNESCAPED_SLASHES));

echo "Patched {$patched} non-required properties to nullable.\n";
echo 'Saved to ' . realpath(\dirname(PATCHED_SPEC_FILE)) . "/swagger.patched.json\n";
