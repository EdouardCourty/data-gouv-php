#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * Example: Querying the Info Financière API (French public financial data).
 *
 * An API key is optional for basic access.
 * Register at: https://www.info-financiere.gouv.fr
 *
 * Note: The Info Financière API response format is not fully typed in the generated client.
 * We use FETCH_RESPONSE to get the raw PSR-7 response and decode it manually.
 *
 * @see https://www.info-financiere.gouv.fr/api/explore/v2.0
 */

require __DIR__ . '/../vendor/autoload.php';

use Ecourty\DataGouv\DataServices\InfoFinanciere\InfoFinanciereClient;
use Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Client;

$apiKey = getenv('INFO_FINANCIERE_API_KEY') ?: null;

if ($apiKey === null) {
    echo "Note: Running without API key — access may be limited.\n\n";
}

$client = new InfoFinanciereClient(apiKey: $apiKey);

echo "Listing available financial datasets...\n\n";

try {
    /** @var \Psr\Http\Message\ResponseInterface $response */
    $response = $client->getClient()->getDatasets(
        queryParameters: ['limit' => 5],
        fetch: Client::FETCH_RESPONSE,
    );

    /** @var array{total_count?: int, datasets?: list<array{dataset?: array{dataset_id?: string, has_records?: bool}}>} $body */
    $body = json_decode((string) $response->getBody(), true) ?? [];
    $datasets = $body['datasets'] ?? [];
    $total = $body['total_count'] ?? 0;

    if (empty($datasets)) {
        echo "No datasets returned.\n";
        exit(0);
    }

    echo \sprintf("Total: %d dataset(s). Showing first %d:\n\n", $total, \count($datasets));
    foreach ($datasets as $item) {
        $dataset = $item['dataset'] ?? [];
        echo \sprintf(
            "  %s (has records: %s)\n",
            $dataset['dataset_id'] ?? 'N/A',
            ($dataset['has_records'] ?? false) ? 'yes' : 'no',
        );
    }
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . "\n";
}
