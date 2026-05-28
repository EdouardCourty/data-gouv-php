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
 * Sub-client for the "getCapabilities" tag.
 */
final class GetCapabilitiesApi
{
    public function __construct(private readonly Client $client)
    {
    }

    /**
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\GetCapabilitiesNotFoundException
     *
     */
        public function getCapabilities(): null|\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Getcapabilities
    {
        try {
            return $this->client->getCapabilities(\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Client::FETCH_OBJECT);
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