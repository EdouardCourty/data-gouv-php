#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * Example: Searching a company in the INSEE SIRENE directory.
 *
 * Requires an INSEE API key (X-INSEE-Api-Key-Integration).
 * Register at: https://portail-api.insee.fr
 */

require __DIR__ . '/../vendor/autoload.php';

use Ecourty\DataGouv\DataServices\Sirene\SireneClient;

$apiKey = getenv('INSEE_API_KEY') ?: null;

if ($apiKey === null) {
    echo "Note: Running without API key — access may be limited.\n\n";
}

$client = new SireneClient(apiKey: $apiKey);

// Search for a legal unit (unité légale) by SIREN number.
$siren = '552 032 534'; // INSEE itself

echo "Fetching unité légale for SIREN {$siren}...\n";

try {
    $result = $client->uniteLegale->findBySiren(siren: str_replace(' ', '', $siren));
    echo 'Name: ' . ($result->getUniteLegale()?->getDenominationUniteLegale() ?? 'N/A') . "\n";
    echo 'Status: ' . ($result->getUniteLegale()?->getEtatAdministratifUniteLegale() ?? 'N/A') . "\n";
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . "\n";
}
