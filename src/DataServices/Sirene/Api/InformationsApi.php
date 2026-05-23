<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataServices\Sirene\Api;

use Ecourty\DataGouv\DataServices\Sirene\Client\Client;
use Ecourty\DataGouv\DataServices\Sirene\Client\Exception\ClientException;
use Ecourty\DataGouv\DataServices\Sirene\Exception\ApiException;
use Ecourty\DataGouv\DataServices\Sirene\Exception\AuthenticationException;
use Ecourty\DataGouv\DataServices\Sirene\Exception\SireneException;
use Ecourty\DataGouv\DataServices\Sirene\Exception\ForbiddenException;
use Ecourty\DataGouv\DataServices\Sirene\Exception\NotFoundException;

/**
 * Sub-client for the "Informations" tag.
 */
final class InformationsApi
{
    public function __construct(private readonly Client $client)
    {
    }

    /**
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\InformationsServiceUnavailableException
     *
     */
        public function informations(): null|\Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseInformations
    {
        try {
            return $this->client->informations(\Ecourty\DataGouv\DataServices\Sirene\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataServices\Sirene\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    private function convertException(ClientException $e): SireneException
    {
        return match ($e->getCode()) {
            401 => new AuthenticationException($e->getMessage(), $e),
            403 => new ForbiddenException($e->getMessage(), $e),
            404, 410 => new NotFoundException($e->getMessage(), $e),
            default => new ApiException($e->getMessage(), $e->getCode(), $e),
        };
    }
}