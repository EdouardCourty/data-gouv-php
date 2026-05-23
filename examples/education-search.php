#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * Example: Searching schools in the French Education directory (Annuaire de l'éducation).
 *
 * No API key required — this is a fully open API.
 *
 * @see https://data.education.gouv.fr/api/v2
 */

require __DIR__ . '/../vendor/autoload.php';

use Ecourty\DataGouv\DataServices\Education\EducationClient;

$client = new EducationClient();

// Fetch records from the education directory with a search query.
$query = 'Paris';
echo "Searching schools in '{$query}'...\n\n";

try {
    $records = $client->dataset->getRecords(['where' => "nom_commune_pep like '{$query}'", 'limit' => 5]);

    if ($records === null || empty($records)) {
        echo "No records found.\n";
        exit(0);
    }

    foreach ($records as $record) {
        $fields = $record->getFields();
        echo \sprintf(
            "  %s — %s (%s)\n",
            $fields?->getAppelation() ?? 'N/A',
            $fields?->getNomCommunePep() ?? 'N/A',
            $fields?->getTypeEtablissement() ?? 'N/A',
        );
    }
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . "\n";
}
