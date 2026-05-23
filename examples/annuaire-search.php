#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * Example: Searching public services in the Annuaire des services publics.
 *
 * No API key required — this is a fully open API.
 *
 * @see https://api-lannuaire.service-public.gouv.fr
 */

require __DIR__ . '/../vendor/autoload.php';

use Ecourty\DataGouv\DataServices\AnnuaireServicePublic\AnnuaireServicePublicClient;

$client = new AnnuaireServicePublicClient();

// The Annuaire uses Opendatasoft — retrieve public service records.
$datasetId = 'api-lannuaire-administration';
echo "Fetching public services from dataset '{$datasetId}'...\n\n";

try {
    $result = $client->dataset->getRecords(datasetId: $datasetId, queryParameters: ['limit' => 5]);

    if ($result === null) {
        echo "No records returned.\n";
        exit(0);
    }

    echo "Records retrieved successfully.\n";
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . "\n";
}

echo "\nListing available datasets...\n";
try {
    $client->catalog->getDatasets(['limit' => 5]);
    echo "Catalog queried successfully.\n";
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . "\n";
}
