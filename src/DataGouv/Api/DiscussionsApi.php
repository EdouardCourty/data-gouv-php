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
 * Sub-client for the "discussions" tag of the data.gouv.fr API.
 *
 * @see https://www.data.gouv.fr/api/1/swagger.json
 */
final class DiscussionsApi
{
    public function __construct(private readonly Client $client)
    {
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $q The search query
     * @var string $sort The field (and direction) on which sorting apply
     * @var bool   $closed Filters discussions on their closed status if specified
     * @var array  $for Filter discussions for a given subject
     * @var string $org Filter discussions for a given organization
     * @var string $user Filter discussions created by a user
     * @var int    $page The page to fetch
     * @var int    $page_size The page size to fetch
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     */
    public function listDiscussions(array $queryParameters = [], array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\DiscussionPage
    {
        try {
            return $this->client->listDiscussions($queryParameters, $headerParameters, Client::FETCH_OBJECT);
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
    public function createDiscussion(\Ecourty\DataGouv\DataGouv\Client\Model\DiscussionStart $payload, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\Discussion
    {
        try {
            return $this->client->createDiscussion($payload, $headerParameters, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param array $queryParameters {
     *
     * @var bool $send_legal_notice Send formal legal notice with appeal information to owner (admin only)
     *           }
     *
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteDiscussionForbiddenException
     */
    public function deleteDiscussion(string $id, array $queryParameters = []): null
    {
        try {
            return $this->client->deleteDiscussion($id, $queryParameters, Client::FETCH_OBJECT);
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
    public function getDiscussion(string $id, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\Discussion
    {
        try {
            return $this->client->getDiscussion($id, $headerParameters, Client::FETCH_OBJECT);
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CommentDiscussionForbiddenException
     */
    public function commentDiscussion(string $id, \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionResponse $payload, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\Discussion
    {
        try {
            return $this->client->commentDiscussion($id, $payload, $headerParameters, Client::FETCH_OBJECT);
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateDiscussionForbiddenException
     */
    public function updateDiscussion(string $id, \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionEditComment $payload, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\Discussion
    {
        try {
            return $this->client->updateDiscussion($id, $payload, $headerParameters, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param array $queryParameters {
     *
     * @var bool $send_legal_notice Send formal legal notice with appeal information to owner (admin only)
     *           }
     *
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteDiscussionCommentForbiddenException
     */
    public function deleteDiscussionComment(string $id, string $cidx, array $queryParameters = []): null
    {
        try {
            return $this->client->deleteDiscussionComment($id, $cidx, $queryParameters, Client::FETCH_OBJECT);
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\EditDiscussionCommentForbiddenException
     */
    public function editDiscussionComment(string $id, string $cidx, \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionEditComment $payload, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\Discussion
    {
        try {
            return $this->client->editDiscussionComment($id, $cidx, $payload, $headerParameters, Client::FETCH_OBJECT);
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
