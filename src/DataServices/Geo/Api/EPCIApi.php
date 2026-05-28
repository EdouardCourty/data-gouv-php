<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataServices\Geo\Api;

use Ecourty\DataGouv\DataServices\Geo\Client\Client;
use Ecourty\DataGouv\DataServices\Geo\Client\Exception\ClientException;
use Ecourty\DataGouv\DataServices\Geo\Exception\ApiException;
use Ecourty\DataGouv\DataServices\Geo\Exception\AuthenticationException;
use Ecourty\DataGouv\DataServices\Geo\Exception\GeoException;
use Ecourty\DataGouv\DataServices\Geo\Exception\ForbiddenException;
use Ecourty\DataGouv\DataServices\Geo\Exception\NotFoundException;

/**
 * Sub-client for the "EPCI" tag.
 */
final class EPCIApi
{
    public function __construct(private readonly Client $client)
    {
    }

    /**
     * @param array $queryParameters {
     *     @var string $nom Nom de l'EPCI
     *     @var string $boost Mode de boost de la recherche par nom
     *     @var string $codeEpci Code de l'EPCI associé
     *     @var string $codeDepartement Code du département associé
     *     @var string $codeRegion Code de la région associée
     *     @var array $zone Zone permettant de filtrer à la métropole, aux DROM et aux COM. Défaut à metro,drom sauf pour les communes à metro,drom,com pour conserver le comportement historique.
     *     @var array $fields Liste des champs souhaités dans la réponse
     *     @var string $format Format de réponse attendu
     *     @var string $geometry Géométrie à utiliser pour la sortie géographique
     * }
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetEpcisBadRequestException
     *
     */
        public function getEpcis(array $queryParameters = []): null|array
    {
        try {
            return $this->client->getEpcis($queryParameters, \Ecourty\DataGouv\DataServices\Geo\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataServices\Geo\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $code Code INSEE de l'EPCI
     * @param array $queryParameters {
     *     @var array $fields Liste des champs souhaités dans la réponse
     *     @var string $format Format de réponse attendu
     *     @var string $geometry Géométrie à utiliser pour la sortie géographique
     * }
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetEpcisByCodeBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetEpcisByCodeNotFoundException
     *
     */
        public function getEpcisByCode(string $code, array $queryParameters = []): null|\Ecourty\DataGouv\DataServices\Geo\Client\Model\Epci
    {
        try {
            return $this->client->getEpcisByCode($code, $queryParameters, \Ecourty\DataGouv\DataServices\Geo\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataServices\Geo\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $code Code de l'EPCI
     * @param array $queryParameters {
     *     @var array $fields Liste des champs souhaités dans la réponse
     *     @var string $format Format de réponse attendu
     *     @var string $geometry Géométrie à utiliser pour la sortie géographique
     * }
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetEpcisByCodeCommunesBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetEpcisByCodeCommunesNotFoundException
     *
     */
        public function getEpcisByCodeCommunes(string $code, array $queryParameters = []): null|array
    {
        try {
            return $this->client->getEpcisByCodeCommunes($code, $queryParameters, \Ecourty\DataGouv\DataServices\Geo\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataServices\Geo\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    private function convertException(ClientException $e): GeoException
    {
        return match ($e->getCode()) {
            401 => new AuthenticationException($e->getMessage(), $e),
            403 => new ForbiddenException($e->getMessage(), $e),
            404, 410 => new NotFoundException($e->getMessage(), $e),
            default => new ApiException($e->getMessage(), $e->getCode(), $e),
        };
    }
}