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
 * Sub-client for the "Départements" tag.
 */
final class DepartementsApi
{
    public function __construct(private readonly Client $client)
    {
    }

    /**
     * @param array $queryParameters {
     *     @var string $code Code du département
     *     @var string $codeRegion Code région associé
     *     @var string $nom Nom du département
     *     @var array $zone Zone permettant de filtrer à la métropole, aux DROM et aux COM. Défaut à metro,drom sauf pour les communes à metro,drom,com pour conserver le comportement historique.
     *     @var array $fields Liste des champs souhaités dans la réponse
     * }
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetDepartementsBadRequestException
     *
     */
        public function getDepartements(array $queryParameters = []): null|array
    {
        try {
            return $this->client->getDepartements($queryParameters, \Ecourty\DataGouv\DataServices\Geo\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataServices\Geo\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $code Code du département
     * @param array $queryParameters {
     *     @var array $fields Liste des champs souhaités dans la réponse
     * }
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetDepartementsByCodeBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetDepartementsByCodeNotFoundException
     *
     */
        public function getDepartementsByCode(string $code, array $queryParameters = []): null|\Ecourty\DataGouv\DataServices\Geo\Client\Model\Departement
    {
        try {
            return $this->client->getDepartementsByCode($code, $queryParameters, \Ecourty\DataGouv\DataServices\Geo\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataServices\Geo\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $code Code du département
     * @param array $queryParameters {
     *     @var array $fields Liste des champs souhaités dans la réponse
     *     @var string $format Format de réponse attendu
     *     @var string $geometry Géométrie à utiliser pour la sortie géographique
     * }
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetDepartementsByCodeCommunesBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetDepartementsByCodeCommunesNotFoundException
     *
     */
        public function getDepartementsByCodeCommunes(string $code, array $queryParameters = []): null|array
    {
        try {
            return $this->client->getDepartementsByCodeCommunes($code, $queryParameters, \Ecourty\DataGouv\DataServices\Geo\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataServices\Geo\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $code Code de la région
     * @param array $queryParameters {
     *     @var array $fields Liste des champs souhaités dans la réponse
     * }
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetRegionsByCodeDepartementsBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetRegionsByCodeDepartementsNotFoundException
     *
     */
        public function getRegionsByCodeDepartements(string $code, array $queryParameters = []): null|array
    {
        try {
            return $this->client->getRegionsByCodeDepartements($code, $queryParameters, \Ecourty\DataGouv\DataServices\Geo\Client\Client::FETCH_OBJECT);
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