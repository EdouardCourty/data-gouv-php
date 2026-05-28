#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * Facade generator — Phase 2 of `composer generate:{api}`.
 *
 * Reads the Jane PHP generated Client.php, groups its methods by OpenAPI tag,
 * and produces:
 *   - src/{Api}/Exception/{Name}Exception.php + 4 subclasses  (generated exception hierarchy)
 *   - src/{Api}/Api/{Tag}Api.php  (one sub-client per tag)
 *   - src/{Api}/{Name}Client.php  (main facade with lazy sub-client hooks)
 *
 * Usage: php bin/scripts/generate-facade.php --api=<datagouv|sirene|entreprise|geoplateforme|...>
 */

require __DIR__ . '/../../vendor/autoload.php';

use Ecourty\DataGouv\Generator\ApiConfigRegistry;
use Ecourty\DataGouv\Generator\ClientReflector;
use Ecourty\DataGouv\Generator\Renderer\ApiClassRenderer;
use Ecourty\DataGouv\Generator\Renderer\ExceptionRenderer;
use Ecourty\DataGouv\Generator\Renderer\FacadeRenderer;
use Ecourty\DataGouv\Generator\SwaggerSpecParser;

function tagToClassName(string $tag): string
{
    $tag = transliterator_transliterate('Any-Latin; Latin-ASCII', $tag) ?: $tag;
    $tag = preg_replace('/[^a-zA-Z0-9_]/', '_', $tag) ?? $tag;
    $tag = preg_replace('/_+/', '_', $tag) ?? $tag;
    $tag = trim($tag, '_');

    return implode('', array_map('ucfirst', explode('_', $tag)));
}

// ─── Parse --api= argument ────────────────────────────────────────────────────

$apiName = null;
foreach ($argv as $arg) {
    if (str_starts_with($arg, '--api=')) {
        $apiName = substr($arg, 6);
        break;
    }
}

if ($apiName === null) {
    $available = implode('|', ApiConfigRegistry::all());
    fwrite(\STDERR, "Usage: php bin/scripts/generate-facade.php --api=<{$available}>\n");
    exit(1);
}

try {
    $config = ApiConfigRegistry::get($apiName);
} catch (InvalidArgumentException $e) {
    fwrite(\STDERR, 'ERROR: ' . $e->getMessage() . "\n");
    exit(1);
}

// ─── Parse spec ───────────────────────────────────────────────────────────────

echo "Parsing spec for {$config->name} from {$config->specLocalPath} ...\n";
try {
    $operationTags = (new SwaggerSpecParser())->parseOperationTags($config);
} catch (RuntimeException $e) {
    fwrite(\STDERR, 'ERROR: ' . $e->getMessage() . "\n");
    exit(1);
}

// ─── Reflect on Jane Client ───────────────────────────────────────────────────

echo "Reflecting on generated Client ...\n";
$methods = (new ClientReflector())->reflect($config->janeNamespace . '\\Client', $operationTags, $config->janeNamespace);

echo \sprintf("Found %d API methods.\n", \count($methods));

// ─── Group by tag ─────────────────────────────────────────────────────────────

/** @var array<string, list<Ecourty\DataGouv\Generator\MethodInfo>> $tagMethods */
$tagMethods = [];
foreach ($methods as $info) {
    foreach ($info->tags as $tag) {
        $tagMethods[$tag][] = $info;
    }
}
ksort($tagMethods);

// ─── Generate Exception hierarchy ────────────────────────────────────────────

if (!is_dir($config->exceptionDir) && !mkdir($config->exceptionDir, 0755, true)) {
    fwrite(\STDERR, "ERROR: Could not create directory {$config->exceptionDir}\n");
    exit(1);
}

$exceptionRenderer = new ExceptionRenderer();
foreach ($exceptionRenderer->renderAll($config) as $filename => $content) {
    file_put_contents($config->exceptionDir . '/' . $filename, $content);
}
echo 'Generated Exception/' . $config->exceptionBaseClass . ".php (+ 4 subclasses)\n";

// ─── Generate Api/ sub-clients ────────────────────────────────────────────────

if (!is_dir($config->apiDir) && !mkdir($config->apiDir, 0755, true)) {
    fwrite(\STDERR, "ERROR: Could not create directory {$config->apiDir}\n");
    exit(1);
}

$apiRenderer = new ApiClassRenderer();
foreach ($tagMethods as $tag => $tagMethodList) {
    $className = tagToClassName($tag) . 'Api';
    $file = $config->apiDir . '/' . $className . '.php';
    file_put_contents($file, $apiRenderer->render($config, $className, $tag, $tagMethodList));
    echo "  Generated Api/{$className}.php (" . \count($tagMethodList) . " methods)\n";
}

// ─── Generate facade ──────────────────────────────────────────────────────────

file_put_contents($config->facadeFile, (new FacadeRenderer())->render($config, $tagMethods));
echo "Generated {$config->facadeClass}.php (" . \count($tagMethods) . " sub-clients)\n";

echo "\nDone.\n";
