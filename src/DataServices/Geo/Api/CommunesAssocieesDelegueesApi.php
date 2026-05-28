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
 * Sub-client for the "CommunesAssocieesDeleguees" tag.
 */
final class CommunesAssocieesDelegueesApi
{
    public function __construct(private readonly Client $client)
    {
    }

    /**
     * @param array $queryParameters {
     *     @var float $lat Latitude (en degrés)
     *     @var float $lon Longitude (en degrés)
     *     @var string $nom Nom de la commune
     *     @var string $code Code de la commune
     *     @var string $codeEpci Code de l'EPCI associé
     *     @var string $codeDepartement Code du département associé
     *     @var string $codeRegion Code de la région associée
     *     @var array $type Type permettant de filtrer si on retourne les communes, les arrondissements ou les 2. Par défaut à commune-actuelle.
     *     @var array $fields Liste des champs souhaités dans la réponse
     *     @var string $format Format de réponse attendu
     *     @var string $geometry Géométrie à utiliser pour la sortie géographique
     * }
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetCommunesAssocieesDelegueesBadRequestException
     *
     */
        public function getCommunesAssocieesDeleguees(array $queryParameters = []): null|array
    {
        try {
            return $this->client->getCommunesAssocieesDeleguees($queryParameters, \Ecourty\DataGouv\DataServices\Geo\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataServices\Geo\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $code Code INSEE de la commune associée ou déléguée
     * @param array $queryParameters {
     *     @var array $fields Liste des champs souhaités dans la réponse
     *     @var string $format Format de réponse attendu
     *     @var string $geometry Géométrie à utiliser pour la sortie géographique
     * }
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetCommunesAssocieesDelegueeByCodeBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetCommunesAssocieesDelegueeByCodeNotFoundException
     *
     */
        public function getCommunesAssocieesDelegueeByCode(string $code, array $queryParameters = []): null|\Ecourty\DataGouv\DataServices\Geo\Client\Model\Commune
    {
        try {
            return $this->client->getCommunesAssocieesDelegueeByCode($code, $queryParameters, \Ecourty\DataGouv\DataServices\Geo\Client\Client::FETCH_OBJECT);
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