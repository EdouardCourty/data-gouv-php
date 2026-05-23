#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * Example: Querying the Info Financière API (French public financial data).
 *
 * An API key is optional for basic access.
 * Register at: https://www.info-financiere.gouv.fr
 *
 * @see https://www.info-financiere.gouv.fr/api/explore/v2.0
 */

require __DIR__ . '/../vendor/autoload.php';

use Ecourty\DataGouv\DataServices\InfoFinanciere\InfoFinanciereClient;

$apiKey = getenv('INFO_FINANCIERE_API_KEY') ?: null;

if ($apiKey === null) {
    echo "Note: Running without API key — access may be limited.\n\n";
}

$client = new InfoFinanciereClient(apiKey: $apiKey);

// List available financial datasets.
echo "Listing available financial datasets...\n\n";

try {
    $result = $client->catalog->getDatasets(['limit' => 5]);

    if ($result === null) {
        echo "No datasets returned.\n";
        exit(0);
    }

    // The response is untyped (null return type) — parse the raw array.
    echo "Datasets retrieved successfully. Check the raw response for details.\n";
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . "\n";
}
