#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * Example: Geocoding an address via the IGN Géoplateforme Géocodage API.
 *
 * This API is public and requires no API key for basic usage.
 *
 * @see https://data.geopf.fr/geocodage
 */

require __DIR__ . '/../vendor/autoload.php';

use Ecourty\DataGouv\DataServices\Geoplateforme\GeoplatformeClient;

$client = new GeoplatformeClient();

$address = '20 avenue de Ségur, Paris';

echo "Geocoding address: '{$address}'...\n\n";

try {
    $result = $client->search->search([
        'q' => $address,
        'limit' => 3,
        'type' => 'housenumber',
    ]);

    $features = $result->features ?? [];
    echo \sprintf("Found %d result(s):\n\n", \count($features));

    foreach ($features as $feature) {
        $props = $feature->properties ?? null;
        $coords = $feature->geometry->coordinates ?? null;

        echo '- ' . ($props?->label ?? 'N/A') . "\n";
        echo '  Score: ' . ($props?->score ?? 'N/A') . "\n";

        if ($coords !== null && \count($coords) >= 2) {
            echo \sprintf("  Coords: %s, %s\n", $coords[1], $coords[0]);
        }
        echo "\n";
    }
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . "\n";
}
