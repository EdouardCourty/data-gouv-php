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
 * Sub-client for the "contacts" tag.
 */
final class ContactsApi
{
    public function __construct(private readonly Client $client)
    {
    }

    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\ContactPointWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CreateContactPointBadRequestException
     *
     */
        public function createContactPoint(\Ecourty\DataGouv\DataGouv\Client\Model\ContactPointWrite $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\ContactPointRead
    {
        try {
            return $this->client->createContactPoint($payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function contactPointRoles(array $headerParameters = []): null|array
    {
        try {
            return $this->client->contactPointRoles($headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $contactPoint
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteContactPointNotFoundException
     *
     */
        public function deleteContactPoint(string $contactPoint): mixed
    {
        try {
            return $this->client->deleteContactPoint($contactPoint, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $contactPoint
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetContactPointNotFoundException
     *
     */
        public function getContactPoint(string $contactPoint, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\ContactPointRead
    {
        try {
            return $this->client->getContactPoint($contactPoint, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $contactPoint
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\ContactPointWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateContactPointBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateContactPointNotFoundException
     *
     */
        public function updateContactPoint(string $contactPoint, \Ecourty\DataGouv\DataGouv\Client\Model\ContactPointWrite $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\ContactPointRead
    {
        try {
            return $this->client->updateContactPoint($contactPoint, $payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
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