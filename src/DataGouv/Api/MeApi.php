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
 * Sub-client for the "me" tag of the data.gouv.fr API.
 *
 * @see https://www.data.gouv.fr/api/1/swagger.json
 */
final class MeApi
{
    public function __construct(private readonly Client $client)
    {
    }

    public function deleteMe(): null
    {
        try {
            return $this->client->deleteMe(Client::FETCH_OBJECT);
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
    public function getMe(array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\User
    {
        try {
            return $this->client->getMe($headerParameters, Client::FETCH_OBJECT);
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateMeBadRequestException
     */
    public function updateMe(\Ecourty\DataGouv\DataGouv\Client\Model\User $payload, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\User
    {
        try {
            return $this->client->updateMe($payload, $headerParameters, Client::FETCH_OBJECT);
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
    public function listApiTokens(array $headerParameters = []): ?array
    {
        try {
            return $this->client->listApiTokens($headerParameters, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * The plaintext token is returned only once.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     */
    public function createApiToken(\Ecourty\DataGouv\DataGouv\Client\Model\ApiTokenWrite $payload, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\ApiTokenCreated
    {
        try {
            return $this->client->createApiToken($payload, $headerParameters, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RevokeApiTokenNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RevokeApiTokenGoneException
     */
    public function revokeApiToken(string $apiToken): null
    {
        try {
            return $this->client->revokeApiToken($apiToken, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param array $formParameters {
     *
     * @var string|resource|\Psr\Http\Message\StreamInterface $file
     * @var string                                            $bbox
     *                                                        }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     */
    public function myAvatar(array $formParameters = [], array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\UploadedImage
    {
        try {
            return $this->client->myAvatar($formParameters, $headerParameters, Client::FETCH_OBJECT);
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
    public function myDatasets(array $headerParameters = []): ?array
    {
        try {
            return $this->client->myDatasets($headerParameters, Client::FETCH_OBJECT);
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
    public function myMetrics(array $headerParameters = []): ?array
    {
        try {
            return $this->client->myMetrics($headerParameters, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $q The string to filter items
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     */
    public function myOrgCommunityResources(array $queryParameters = [], array $headerParameters = []): ?array
    {
        try {
            return $this->client->myOrgCommunityResources($queryParameters, $headerParameters, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $q The string to filter items
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     */
    public function myOrgDatasets(array $queryParameters = [], array $headerParameters = []): ?array
    {
        try {
            return $this->client->myOrgDatasets($queryParameters, $headerParameters, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $q The string to filter items
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     */
    public function myOrgDiscussions(array $queryParameters = [], array $headerParameters = []): ?array
    {
        try {
            return $this->client->myOrgDiscussions($queryParameters, $headerParameters, Client::FETCH_OBJECT);
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
    public function listOrgInvitations(array $headerParameters = []): ?array
    {
        try {
            return $this->client->listOrgInvitations($headerParameters, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\AcceptOrgInvitationBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\AcceptOrgInvitationNotFoundException
     */
    public function acceptOrgInvitation(string $id): null
    {
        try {
            return $this->client->acceptOrgInvitation($id, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RefuseOrgInvitationBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RefuseOrgInvitationNotFoundException
     */
    public function refuseOrgInvitation(string $id): null
    {
        try {
            return $this->client->refuseOrgInvitation($id, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $q The string to filter items
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     */
    public function myOrgReuses(array $queryParameters = [], array $headerParameters = []): ?array
    {
        try {
            return $this->client->myOrgReuses($queryParameters, $headerParameters, Client::FETCH_OBJECT);
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
    public function myReuses(array $headerParameters = []): ?array
    {
        try {
            return $this->client->myReuses($headerParameters, Client::FETCH_OBJECT);
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
