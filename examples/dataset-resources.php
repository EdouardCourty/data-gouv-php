#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * Fetch a single dataset by its ID or slug and display its resources.
 *
 * Usage:
 *   php examples/dataset-resources.php 5906c1ed88ee386cdb3873a4
 */

require __DIR__ . '/../vendor/autoload.php';

use Ecourty\DataGouv\DataGouv\DataGouvClient;
use Ecourty\DataGouv\DataGouv\Exception\NotFoundException;

$id = $argv[1] ?? null;

if ($id === null) {
    echo "Usage: php examples/dataset-resources.php <dataset-id-or-slug>\n";
    exit(1);
}

$client = new DataGouvClient();

try {
    $dataset = $client->datasets->getDataset($id);
} catch (NotFoundException $e) {
    echo "Dataset \"{$id}\" not found.\n";
    exit(1);
}

echo 'Dataset : ' . $dataset->getTitle() . "\n";
echo 'License : ' . ($dataset->getLicense() ?? 'N/A') . "\n";
echo 'Created : ' . ($dataset->getCreatedAt()?->format('Y-m-d') ?? 'N/A') . "\n\n";

$resources = $dataset->getResources() ?? [];
echo \count($resources) . " resource(s):\n\n";

foreach ($resources as $resource) {
    echo '• ' . $resource->getTitle() . "\n";
    echo '  Format : ' . ($resource->getFormat() ?? 'N/A') . "\n";
    echo '  URL    : ' . $resource->getUrl() . "\n";
    echo "\n";
}
