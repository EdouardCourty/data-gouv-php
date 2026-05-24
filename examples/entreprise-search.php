#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * Example: Searching companies via the Recherche d'entreprises API.
 *
 * This API is public and requires no API key.
 *
 * @see https://recherche-entreprises.api.gouv.fr
 */

require __DIR__ . '/../vendor/autoload.php';

use Ecourty\DataGouv\DataServices\Entreprise\EntrepriseClient;

$client = new EntrepriseClient();

$query = 'La Poste';

echo "Searching for companies matching '{$query}'...\n\n";

try {
    $result = $client->rechercheTextuelle->getSearch([
        'q' => $query,
        'per_page' => 3,
    ]);

    $results = $result->getResults() ?? [];
    echo \sprintf("Found %d result(s):\n\n", \count($results));

    foreach ($results as $company) {
        echo '- ' . ($company->getNomComplet() ?? 'N/A')
            . ' (SIREN: ' . ($company->getSiren() ?? 'N/A') . ')' . "\n";
    }
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . "\n";
}
