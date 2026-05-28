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
 * Sub-client for the "Communes" tag.
 */
final class CommunesApi
{
    public function __construct(private readonly Client $client)
    {
    }

    /**
     * @param array $queryParameters {
     *     @var string $codePostal Code postal associé
     *     @var float $lat Latitude (en degrés)
     *     @var float $lon Longitude (en degrés)
     *     @var string $nom Nom de la commune
     *     @var string $boost Mode de boost de la recherche par nom
     *     @var string $code Code de la commune
     *     @var string $siren Code SIREN de la commune
     *     @var string $codeEpci Code de l'EPCI associé
     *     @var string $codeDepartement Code du département associé
     *     @var string $codeRegion Code de la région associée
     *     @var string $codeParent Code de la commune si on a un arrondissement
     *     @var string $ancienCode Code INSEE ancien de la commune
     *     @var array $zone Zone permettant de filtrer à la métropole, aux DROM et aux COM. Défaut à metro,drom sauf pour les communes à metro,drom,com pour conserver le comportement historique.
     *     @var array $type Type permettant de filtrer si on retourne les communes, les arrondissements ou les 2. Par défaut à commune-actuelle.
     *     @var array $fields Liste des champs souhaités dans la réponse
     *     @var string $format Format de réponse attendu
     *     @var string $geometry Géométrie à utiliser pour la sortie géographique
     * }
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetCommunesBadRequestException
     *
     */
        public function getCommunes(array $queryParameters = []): null|array
    {
        try {
            return $this->client->getCommunes($queryParameters, \Ecourty\DataGouv\DataServices\Geo\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataServices\Geo\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $code Code INSEE de la commune
     * @param array $queryParameters {
     *     @var array $fields Liste des champs souhaités dans la réponse
     *     @var string $format Format de réponse attendu
     *     @var string $geometry Géométrie à utiliser pour la sortie géographique
     * }
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetCommunesByCodeBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetCommunesByCodeNotFoundException
     *
     */
        public function getCommunesByCode(string $code, array $queryParameters = []): null|\Ecourty\DataGouv\DataServices\Geo\Client\Model\Commune
    {
        try {
            return $this->client->getCommunesByCode($code, $queryParameters, \Ecourty\DataGouv\DataServices\Geo\Client\Client::FETCH_OBJECT);
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