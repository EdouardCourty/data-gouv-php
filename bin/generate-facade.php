#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * Facade generator — Phase 2 of `composer generate`.
 *
 * Reads the Jane PHP generated Client.php, groups its methods by Swagger tag,
 * and produces:
 *   - src/DataGouv/Api/{Tag}Api.php  (one sub-client per tag)
 *   - src/DataGouv/DataGouvClient.php (main facade with lazy sub-client access)
 *
 * Run via: composer generate:facade
 */

require __DIR__ . '/../vendor/autoload.php';

use Ecourty\DataGouv\Generator\ClientReflector;
use Ecourty\DataGouv\Generator\Config;
use Ecourty\DataGouv\Generator\Renderer\ApiClassRenderer;
use Ecourty\DataGouv\Generator\Renderer\FacadeRenderer;
use Ecourty\DataGouv\Generator\SwaggerSpecParser;

// ─── Fetch spec ───────────────────────────────────────────────────────────────

echo 'Fetching Swagger spec from ' . Config::SWAGGER_URL . " ...\n";
try {
    $operationTags = (new SwaggerSpecParser())->fetchOperationTags(Config::SWAGGER_URL);
} catch (RuntimeException $e) {
    fwrite(\STDERR, 'ERROR: ' . $e->getMessage() . "\n");
    exit(1);
}

// ─── Reflect on Jane Client ───────────────────────────────────────────────────

echo "Reflecting on generated Client …\n";
$methods = (new ClientReflector())->reflect(Config::JANE_NAMESPACE . '\\Client', $operationTags);

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

// ─── Generate Api/ sub-clients ────────────────────────────────────────────────

if (!is_dir(Config::API_DIR)) {
    mkdir(Config::API_DIR, 0755, true);
}

$apiRenderer = new ApiClassRenderer();
foreach ($tagMethods as $tag => $tagMethodList) {
    $className = implode('', array_map('ucfirst', explode('_', $tag))) . 'Api';
    $file = Config::API_DIR . '/' . $className . '.php';
    file_put_contents($file, $apiRenderer->render($className, $tag, $tagMethodList));
    echo "  Generated Api/{$className}.php (" . \count($tagMethodList) . " methods)\n";
}

// ─── Generate DataGouvClient facade ───────────────────────────────────────────

file_put_contents(Config::FACADE_FILE, (new FacadeRenderer())->render($tagMethods));
echo 'Generated DataGouvClient.php (' . \count($tagMethods) . " sub-clients)\n";

echo "\nDone.\n";
