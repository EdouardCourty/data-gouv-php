<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Generator;

final class Config
{
    public const SWAGGER_URL = 'https://www.data.gouv.fr/api/1/swagger.json';
    public const CLIENT_FILE = __DIR__ . '/../../src/DataGouv/Client/Client.php';
    public const API_DIR = __DIR__ . '/../../src/DataGouv/Api';
    public const FACADE_FILE = __DIR__ . '/../../src/DataGouv/DataGouvClient.php';
    public const JANE_NAMESPACE = 'Ecourty\\DataGouv\\DataGouv\\Client';
    public const LIB_NAMESPACE = 'Ecourty\\DataGouv\\DataGouv';
}
