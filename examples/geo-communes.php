#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * Example: Searching communes (cities) in France using the API Géo.
 *
 * No API key required — this is a fully open API.
 *
 * @see https://geo.api.gouv.fr
 */

require __DIR__ . '/../vendor/autoload.php';

use Ecourty\DataGouv\DataServices\Geo\GeoClient;

$client = new GeoClient();

// Search communes by name.
$query = 'Lyon';
echo "Searching communes matching '{$query}'...\n\n";

try {
    $communes = $client->communes->getCommunes(['nom' => $query, 'fields' => ['nom', 'code', 'codesPostaux', 'population']]);

    if (empty($communes)) {
        echo "No communes found.\n";
        exit(0);
    }

    foreach ($communes as $commune) {
        $cp = implode(', ', $commune->getCodesPostaux() ?? []);
        echo \sprintf(
            "  %s (code: %s) — CP: %s — Population: %s\n",
            $commune->getNom() ?? 'N/A',
            $commune->getCode() ?? 'N/A',
            $cp ?: 'N/A',
            number_format((int) ($commune->getPopulation() ?? 0), 0, ',', ' '),
        );
    }
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . "\n";
}

echo "\nFetching a specific département (69 — Rhône)...\n";
try {
    $dept = $client->departements->getDepartementsByCode(code: '69');
    echo \sprintf("  %s (code: %s)\n", $dept?->getNom() ?? 'N/A', $dept?->getCode() ?? 'N/A');
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . "\n";
}
