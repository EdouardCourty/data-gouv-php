#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * Post-processes Jane PHP generated normalizer files to fix DateTime parsing.
 *
 * Jane generates: \DateTime::createFromFormat('Y-m-d\TH:i:sP', $value)
 * This strict format fails when the real API returns microseconds.
 *
 * This script replaces all such calls with: (new \DateTime($value))
 * which accepts any valid ISO 8601 string regardless of microseconds.
 *
 * Usage: php bin/scripts/patch-generated.php <client-directory>
 *
 * Example: php bin/scripts/patch-generated.php src/DataGouv/Client
 */
$clientDir = isset($argv[1])
    ? (str_starts_with($argv[1], '/') ? $argv[1] : __DIR__ . '/../../' . ltrim($argv[1], '/'))
    : __DIR__ . '/../../src/DataGouv/Client';

$normalizerDir = rtrim($clientDir, '/') . '/Normalizer';

if (!is_dir($normalizerDir)) {
    echo "No Normalizer directory found at {$normalizerDir}, skipping.\n";
    exit(0);
}

$files = glob($normalizerDir . '/*.php');

if ($files === false || $files === []) {
    echo "No normalizer files found in {$normalizerDir}, skipping.\n";
    exit(0);
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
