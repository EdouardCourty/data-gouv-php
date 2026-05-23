#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * List public datasets matching a search query.
 *
 * Usage:
 *   php examples/list-datasets.php
 *   php examples/list-datasets.php "budget"
 */

require __DIR__ . '/../vendor/autoload.php';

use Ecourty\DataGouv\DataGouv\DataGouvClient;

$query = $argv[1] ?? 'open data';

$client = new DataGouvClient();

echo "Searching datasets for: \"{$query}\"\n\n";

$page = $client->datasets->listDatasets(['q' => $query, 'page_size' => 5]);

if ($page === null || $page->getData() === null) {
    echo "No results.\n";
    exit(0);
}

foreach ($page->getData() as $dataset) {
    echo '• ' . $dataset->getTitle() . "\n";
    echo '  ID      : ' . $dataset->getId() . "\n";
    echo '  Slug    : ' . $dataset->getSlug() . "\n";
    echo '  Resources: ' . \count($dataset->getResources() ?? []) . "\n";
    echo "\n";
}

echo 'Total: ' . $page->getTotal() . " datasets found.\n";
