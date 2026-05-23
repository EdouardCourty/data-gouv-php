#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * List public dataservices (APIs) and display details for the first one.
 *
 * Usage:
 *   php examples/list-dataservices.php
 *   php examples/list-dataservices.php "statistiques"
 */

require __DIR__ . '/../vendor/autoload.php';

use Ecourty\DataGouv\DataGouv\DataGouvClient;

$query = $argv[1] ?? 'données';

$client = new DataGouvClient();

echo "Searching dataservices for: \"{$query}\"\n\n";

$page = $client->dataservices->listDataservices(['q' => $query, 'page_size' => 5]);

if ($page === null || \count($page->getData()) === 0) {
    echo "No results.\n";
    exit(0);
}

foreach ($page->getData() as $dataservice) {
    echo '• ' . $dataservice->getTitle() . "\n";
    echo '  ID     : ' . $dataservice->getId() . "\n";

    $org = $dataservice->getOrganization();
    if (\is_array($org) && isset($org['name'])) {
        echo '  Org    : ' . $org['name'] . "\n";
    }

    $apiUrl = $dataservice->getBaseApiUrl();
    if ($apiUrl !== null) {
        echo '  API URL: ' . $apiUrl . "\n";
    }

    echo "\n";
}

echo 'Total: ' . $page->getTotal() . " dataservice(s) found.\n\n";

// Fetch the first dataservice individually for full details
$firstId = $page->getData()[0]->getId();
echo "--- Fetching details for first dataservice ({$firstId}) ---\n\n";

$dataservice = $client->dataservices->getDataservice($firstId);

if ($dataservice === null) {
    echo "Could not fetch dataservice details.\n";
    exit(1);
}

echo 'Title      : ' . $dataservice->getTitle() . "\n";
echo 'Description: ' . ($dataservice->getDescription() ?? 'N/A') . "\n";
echo 'API URL    : ' . ($dataservice->getBaseApiUrl() ?? 'N/A') . "\n";
echo 'Availability: ' . ($dataservice->getAvailability() !== null ? $dataservice->getAvailability() . '%' : 'N/A') . "\n";
