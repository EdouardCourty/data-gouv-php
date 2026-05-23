#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * Fetch the authenticated user's profile and datasets.
 * Requires an API key (set via DATA_GOUV_API_KEY environment variable).
 *
 * Usage:
 *   DATA_GOUV_API_KEY=your-key php examples/authenticated-user.php
 */

require __DIR__ . '/../vendor/autoload.php';

use Ecourty\DataGouv\DataGouv\DataGouvClient;
use Ecourty\DataGouv\DataGouv\Exception\AuthenticationException;

$apiKey = getenv('DATA_GOUV_API_KEY') ?: null;

if ($apiKey === null) {
    echo "Set the DATA_GOUV_API_KEY environment variable to use this example.\n";
    echo "  export DATA_GOUV_API_KEY=your-key\n";
    exit(1);
}

$client = new DataGouvClient(apiKey: $apiKey);

try {
    $user = $client->me->getMe();

    echo 'Authenticated as: ' . $user->getFirstName() . ' ' . $user->getLastName() . "\n";
    echo 'Username : ' . $user->getSlug() . "\n";
    echo 'Avatar   : ' . ($user->getAvatar() ?? '(none)') . "\n\n";

    $datasets = $client->me->myDatasets();
    $count = \is_array($datasets) ? \count($datasets) : 0;
    echo "Your datasets ({$count}):\n";

    foreach (($datasets ?? []) as $dataset) {
        echo '  • ' . $dataset->getTitle() . ' (' . $dataset->getId() . ")\n";
    }
} catch (AuthenticationException $e) {
    echo 'Authentication failed: ' . $e->getMessage() . "\n";
    exit(1);
}
