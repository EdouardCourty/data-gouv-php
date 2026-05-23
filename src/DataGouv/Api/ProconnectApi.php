<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Api;

use Ecourty\DataGouv\DataGouv\Client\Client;
use Ecourty\DataGouv\DataGouv\Client\Exception\ClientException;
use Ecourty\DataGouv\DataGouv\Exception\ApiException;
use Ecourty\DataGouv\DataGouv\Exception\AuthenticationException;
use Ecourty\DataGouv\DataGouv\Exception\DataGouvException;
use Ecourty\DataGouv\DataGouv\Exception\ForbiddenException;
use Ecourty\DataGouv\DataGouv\Exception\NotFoundException;

/**
 * Sub-client for the "proconnect" tag.
 */
final class ProconnectApi
{
    public function __construct(private readonly Client $client)
    {
    }

    /**
     *
     */
        public function getProconnectAuthApi(): null
    {
        try {
            return $this->client->getProconnectAuthApi(\Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     *
     */
        public function getProconnectLoginApi(): null
    {
        try {
            return $this->client->getProconnectLoginApi(\Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     *
     */
        public function getProconnectLogoutApi(): null
    {
        try {
            return $this->client->getProconnectLogoutApi(\Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     *
     */
        public function getProconnectLogoutOAuthApi(): null
    {
        try {
            return $this->client->getProconnectLogoutOAuthApi(\Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    private function convertException(ClientException $e): DataGouvException
    {
        return match ($e->getCode()) {
            401 => new AuthenticationException($e->getMessage(), $e),
            403 => new ForbiddenException($e->getMessage(), $e),
            404, 410 => new NotFoundException($e->getMessage(), $e),
            default => new ApiException($e->getMessage(), $e->getCode(), $e),
        };
    }
}