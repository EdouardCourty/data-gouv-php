<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataServices\JoursFeries\Api;

use Ecourty\DataGouv\DataServices\JoursFeries\Client\Client;
use Ecourty\DataGouv\DataServices\JoursFeries\Client\Exception\ClientException;
use Ecourty\DataGouv\DataServices\JoursFeries\Exception\ApiException;
use Ecourty\DataGouv\DataServices\JoursFeries\Exception\AuthenticationException;
use Ecourty\DataGouv\DataServices\JoursFeries\Exception\JoursFeriesException;
use Ecourty\DataGouv\DataServices\JoursFeries\Exception\ForbiddenException;
use Ecourty\DataGouv\DataServices\JoursFeries\Exception\NotFoundException;

/**
 * Sub-client for the "JoursFeries" tag.
 */
final class JoursFeriesApi
{
    public function __construct(private readonly Client $client)
    {
    }

    /**
     * @param string $zone Le nom de la zone
     *
     */
        public function getByZone(string $zone): null
    {
        try {
            return $this->client->getByZone($zone, \Ecourty\DataGouv\DataServices\JoursFeries\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataServices\JoursFeries\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $zone Le nom de la zone
     * @param int $annee L'année pour les jours fériés
     *
     */
        public function getByZoneByAnnee(string $zone, int $annee): null
    {
        try {
            return $this->client->getByZoneByAnnee($zone, $annee, \Ecourty\DataGouv\DataServices\JoursFeries\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataServices\JoursFeries\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    private function convertException(ClientException $e): JoursFeriesException
    {
        return match ($e->getCode()) {
            401 => new AuthenticationException($e->getMessage(), $e),
            403 => new ForbiddenException($e->getMessage(), $e),
            404, 410 => new NotFoundException($e->getMessage(), $e),
            default => new ApiException($e->getMessage(), $e->getCode(), $e),
        };
    }
}