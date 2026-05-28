#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * Example: Searching public services in the Annuaire des services publics.
 *
 * No API key required — this is a fully open API.
 *
 * Note: The Annuaire API response format is not fully typed in the generated client.
 * We use FETCH_RESPONSE to get the raw PSR-7 response and decode it manually.
 *
 * @see https://api-lannuaire.service-public.gouv.fr
 */

require __DIR__ . '/../vendor/autoload.php';

use Ecourty\DataGouv\DataServices\AnnuaireServicePublic\AnnuaireServicePublicClient;
use Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Client;

$client = new AnnuaireServicePublicClient();

$datasetId = 'api-lannuaire-administration';
echo "Fetching public services from dataset '{$datasetId}'...\n\n";

try {
    /** @var \Psr\Http\Message\ResponseInterface $response */
    $response = $client->getClient()->getRecords(
        datasetId: $datasetId,
        queryParameters: ['limit' => 5, 'select' => 'nom,type_organisme,adresse_courriel'],
        fetch: Client::FETCH_RESPONSE,
    );

    /** @var array{total_count?: int, results?: list<array<string, mixed>>} $body */
    $body = json_decode((string) $response->getBody(), true) ?? [];
    $results = $body['results'] ?? [];
    $total = $body['total_count'] ?? 0;

    echo \sprintf("Total: %d public services. Showing first %d:\n\n", $total, \count($results));
    foreach ($results as $record) {
        echo \sprintf(
            "  %s (%s)\n",
            $record['nom'] ?? 'N/A',
            $record['type_organisme'] ?? 'N/A',
        );
    }
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . "\n";
}

echo "\nListing available datasets...\n";
try {
    /** @var \Psr\Http\Message\ResponseInterface $response */
    $response = $client->getClient()->getDatasets(
        queryParameters: ['limit' => 3],
        fetch: Client::FETCH_RESPONSE,
    );

    /** @var array{total_count?: int, results?: list<array{dataset_id?: string}>} $body */
    $body = json_decode((string) $response->getBody(), true) ?? [];
    $datasets = $body['results'] ?? [];

    foreach ($datasets as $dataset) {
        echo '  - ' . ($dataset['dataset_id'] ?? 'N/A') . "\n";
    }
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . "\n";
}
