#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * Example: Searching schools in the French Education directory (Annuaire de l'éducation).
 *
 * No API key required — this is a fully open API.
 *
 * Note: The Education API response format is not fully typed in the generated client.
 * We use FETCH_RESPONSE to get the raw PSR-7 response and decode it manually.
 *
 * @see https://data.education.gouv.fr/api/v2
 */

require __DIR__ . '/../vendor/autoload.php';

use Ecourty\DataGouv\DataServices\Education\EducationClient;
use Ecourty\DataGouv\DataServices\Education\Client\Client;

$client = new EducationClient();

$query = 'Paris';
echo "Searching schools in '{$query}'...\n\n";

try {
    /** @var \Psr\Http\Message\ResponseInterface $response */
    $response = $client->getClient()->getRecords(
        queryParameters: ['where' => ["nom_commune like '{$query}'"], 'limit' => 5],
        fetch: Client::FETCH_RESPONSE,
    );

    /** @var array{records?: list<array{record?: array{fields?: array<string, mixed>}}>} $body */
    $body = json_decode((string) $response->getBody(), true) ?? [];
    $records = $body['records'] ?? [];

    if (empty($records)) {
        echo "No records found.\n";
        exit(0);
    }

    echo \sprintf("Found %d record(s):\n\n", \count($records));
    foreach ($records as $item) {
        $fields = $item['record']['fields'] ?? [];
        echo \sprintf(
            "  %s — %s (%s)\n",
            $fields['nom_etablissement'] ?? 'N/A',
            $fields['nom_commune'] ?? 'N/A',
            $fields['type_etablissement'] ?? 'N/A',
        );
    }
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . "\n";
}
