#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * Downloads and (optionally) patches an OpenAPI/Swagger spec for a non-DataGouv API.
 *
 * Usage: php bin/scripts/download-spec.php --api=<name>
 *
 * - Fetches the spec from the URL defined in ApiConfigRegistry.
 * - If bin/scripts/patches/{name}.php exists, loads and applies it (a SpecPatcherInterface).
 * - Saves the result to the path defined in ApiConfig::$specLocalPath.
 *
 * Patch files live in bin/scripts/patches/ — one per API, returning a SpecPatcherInterface.
 * Format detection (JSON vs YAML) is automatic, based on the spec URL file extension.
 */

require __DIR__ . '/../../vendor/autoload.php';

use Ecourty\DataGouv\Generator\ApiConfigRegistry;
use Ecourty\DataGouv\Generator\SpecPatcher\SpecPatcherInterface;
use Symfony\Component\Yaml\Yaml;

// ─── Parse --api= argument ────────────────────────────────────────────────────

$apiName = null;
foreach ($argv as $arg) {
    if (str_starts_with($arg, '--api=')) {
        $apiName = substr($arg, 6);
        break;
    }
}

$available = array_keys(ApiConfigRegistry::specUrls());
$availableStr = implode('|', $available);

if ($apiName === null) {
    fwrite(\STDERR, "Usage: php bin/scripts/download-spec.php --api=<{$availableStr}>\n");
    exit(1);
}

if (!\in_array($apiName, $available, true)) {
    fwrite(\STDERR, "ERROR: Unknown API '{$apiName}'. Available: {$availableStr}\n");
    exit(1);
}

$config = ApiConfigRegistry::get($apiName);
$urls = ApiConfigRegistry::specUrls();
$url = $urls[$apiName];

// ─── Download ─────────────────────────────────────────────────────────────────

echo "Downloading {$config->name} spec from {$url} ...\n";

$context = stream_context_create([
    'http' => [
        'timeout' => 30,
        'header' => "User-Agent: ecourty/data-gouv-client spec-downloader\r\n",
    ],
]);

$content = @file_get_contents($url, false, $context);
if ($content === false) {
    fwrite(\STDERR, "ERROR: Could not download spec from {$url}\n");
    exit(1);
}

echo 'Downloaded ' . \strlen($content) . " bytes.\n";

// ─── Apply patch file if one exists for this API ──────────────────────────────

$patchFile = __DIR__ . '/patches/' . $apiName . '.php';

if (file_exists($patchFile)) {
    $urlPath = parse_url($url, \PHP_URL_PATH) ?? '';
    $isYaml = str_ends_with($urlPath, '.yaml') || str_ends_with($urlPath, '.yml');

    /** @var array<string, mixed> $spec */
    $spec = $isYaml
        ? Yaml::parse($content)
        : json_decode($content, true, 512, \JSON_THROW_ON_ERROR);

    $patcher = require $patchFile;

    if (!$patcher instanceof SpecPatcherInterface) {
        fwrite(\STDERR, "ERROR: patches/{$apiName}.php must return a SpecPatcherInterface instance.\n");
        exit(1);
    }

    $patcher->patch($spec);

    $content = json_encode($spec, \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES | \JSON_UNESCAPED_UNICODE | \JSON_THROW_ON_ERROR);
}

// ─── Save ─────────────────────────────────────────────────────────────────────

$specDir = \dirname($config->specLocalPath);
if (!is_dir($specDir)) {
    mkdir($specDir, 0755, true);
}

file_put_contents($config->specLocalPath, $content);
echo "Saved to {$config->specLocalPath}\n";

echo "\nDone.\n";
