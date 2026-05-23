#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * List public organizations matching a search query.
 *
 * Usage:
 *   php examples/list-organizations.php
 *   php examples/list-organizations.php "ministère"
 */

require __DIR__ . '/../vendor/autoload.php';

use Ecourty\DataGouv\DataGouv\DataGouvClient;

$query = $argv[1] ?? 'ministère';

$client = new DataGouvClient();

echo "Searching organizations for: \"{$query}\"\n\n";

$page = $client->organizations->listOrganizations(['q' => $query, 'page_size' => 5]);

if ($page === null || $page->getData() === null) {
    echo "No results.\n";
    exit(0);
}

foreach ($page->getData() as $org) {
    echo '• ' . $org->getName() . "\n";
    echo '  ID   : ' . $org->getId() . "\n";
    echo '  Slug : ' . $org->getSlug() . "\n";
    echo "\n";
}

echo 'Total: ' . $page->getTotal() . " organizations found.\n";
