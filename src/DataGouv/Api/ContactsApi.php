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
 * Sub-client for the "contacts" tag of the data.gouv.fr API.
 *
 * @see https://www.data.gouv.fr/api/1/swagger.json
 */
final class ContactsApi
{
    public function __construct(private readonly Client $client)
    {
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CreateContactPointBadRequestException
     */
    public function createContactPoint(\Ecourty\DataGouv\DataGouv\Client\Model\ContactPointWrite $payload, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\ContactPointRead
    {
        try {
            return $this->client->createContactPoint($payload, $headerParameters, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     */
    public function contactPointRoles(array $headerParameters = []): ?array
    {
        try {
            return $this->client->contactPointRoles($headerParameters, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteContactPointNotFoundException
     */
    public function deleteContactPoint(string $contactPoint): null
    {
        try {
            return $this->client->deleteContactPoint($contactPoint, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetContactPointNotFoundException
     */
    public function getContactPoint(string $contactPoint, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\ContactPointRead
    {
        try {
            return $this->client->getContactPoint($contactPoint, $headerParameters, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateContactPointBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateContactPointNotFoundException
     */
    public function updateContactPoint(string $contactPoint, \Ecourty\DataGouv\DataGouv\Client\Model\ContactPointWrite $payload, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\ContactPointRead
    {
        try {
            return $this->client->updateContactPoint($contactPoint, $payload, $headerParameters, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
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
