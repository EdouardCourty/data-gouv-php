<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Api;

use Ecourty\DataGouv\DataServices\Geoplateforme\Client\Client;
use Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\ClientException;
use Ecourty\DataGouv\DataServices\Geoplateforme\Exception\ApiException;
use Ecourty\DataGouv\DataServices\Geoplateforme\Exception\AuthenticationException;
use Ecourty\DataGouv\DataServices\Geoplateforme\Exception\GeoplateformeException;
use Ecourty\DataGouv\DataServices\Geoplateforme\Exception\ForbiddenException;
use Ecourty\DataGouv\DataServices\Geoplateforme\Exception\NotFoundException;

/**
 * Sub-client for the "batch" tag.
 */
final class BatchApi
{
    public function __construct(private readonly Client $client)
    {
    }

    /**
     * Géocodage direct en masse d’un fichier CSV. Les paramètres de la requête permettent de spécifier les colonnes à utiliser pour le géocodage, les index à utiliser, les filtres à appliquer et les colonnes à conserver dans le fichier CSV de sortie.
     *
     * Le fichier soumis doit faire une taille maximale de 50 Mo.
     *
     * @param \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\SearchCsvPostBody $requestBody
     * @param array $accept Accept content header text/csv|application/json
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\SearchCsvBadRequestException
     *
     */
        public function searchCsv(\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\SearchCsvPostBody $requestBody, array $accept = []): mixed
    {
        try {
            return $this->client->searchCsv($requestBody, \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Client::FETCH_OBJECT, $accept);
        } catch (\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * Géocodage inversé en masse d’un fichier CSV. Les paramètres de la requête permettent de spécifier les colonnes à utiliser pour le géocodage, les index à utiliser, les filtres à appliquer et les colonnes à conserver dans le fichier CSV de sortie.
     *
     * Le fichier soumis doit faire une taille maximale de 50 Mo.
     *
     * @param \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\ReverseCsvPostBody $requestBody
     * @param array $accept Accept content header text/csv|application/json
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\ReverseCsvBadRequestException
     *
     */
        public function reverseCsv(\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\ReverseCsvPostBody $requestBody, array $accept = []): mixed
    {
        try {
            return $this->client->reverseCsv($requestBody, \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Client::FETCH_OBJECT, $accept);
        } catch (\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    private function convertException(ClientException $e): GeoplateformeException
    {
        return match ($e->getCode()) {
            401 => new AuthenticationException($e->getMessage(), $e),
            403 => new ForbiddenException($e->getMessage(), $e),
            404, 410 => new NotFoundException($e->getMessage(), $e),
            default => new ApiException($e->getMessage(), $e->getCode(), $e),
        };
    }
}