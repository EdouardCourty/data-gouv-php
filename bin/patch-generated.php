#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * Post-processes Jane PHP generated normalizer files to fix DateTime parsing.
 *
 * Jane generates: \DateTime::createFromFormat('Y-m-d\TH:i:sP', $value)
 * This strict format fails when the real API returns microseconds (e.g. "2019-12-06T16:57:07.469000+00:00").
 *
 * This script replaces all such calls with: (new \DateTime($value))
 * which accepts any valid ISO 8601 string regardless of microseconds.
 *
 * Run via: composer generate:patch-generated
 */
const NORMALIZER_DIR = __DIR__ . '/../src/DataGouv/Client/Normalizer';

$files = glob(NORMALIZER_DIR . '/*.php');

if ($files === false || $files === []) {
    fwrite(\STDERR, 'ERROR: No normalizer files found in ' . NORMALIZER_DIR . "\n");
    exit(1);
}

$patched = 0;
$filesPatched = 0;

foreach ($files as $file) {
    $original = file_get_contents($file);

    $fixed = preg_replace(
        '/\\\\DateTime::createFromFormat\(\'[^\']+\',\s*(\$[^)]+)\)/',
        '(new \\\\DateTime($1))',
        $original,
        -1,
        $count,
    );

    if ($fixed === null) {
        fwrite(\STDERR, "ERROR: preg_replace failed on {$file}\n");
        exit(1);
    }

    if ($count > 0) {
        file_put_contents($file, $fixed);
        $patched += $count;
        ++$filesPatched;
    }
}

echo "Patched {$patched} DateTime::createFromFormat() call(s) across {$filesPatched} normalizer file(s).\n";
