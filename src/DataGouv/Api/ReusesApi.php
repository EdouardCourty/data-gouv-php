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
 * Sub-client for the "reuses" tag.
 */
final class ReusesApi
{
    public function __construct(private readonly Client $client)
    {
    }

    /**
     * @param array $queryParameters {
     *     @var int $page The page to display
     *     @var int $page_size The page size
     *     @var string $sort The field (and direction) on which sorting apply
     *     @var string $q
     *     @var string $owner
     *     @var string $organization
     *     @var string $organization_badge
     *     @var string $type
     *     @var string $dataset
     *     @var string $dataservice
     *     @var string $tag
     *     @var string $topic
     *     @var bool $private
     *     @var bool $featured
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function listReuses(array $queryParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\ReusePage
    {
        try {
            return $this->client->listReuses($queryParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\ReuseWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CreateReuseBadRequestException
     *
     */
        public function createReuse(\Ecourty\DataGouv\DataGouv\Client\Model\ReuseWrite $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\ReuseRead
    {
        try {
            return $this->client->createReuse($payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     *
     */
        public function availableReuseBadges(): mixed
    {
        try {
            return $this->client->availableReuseBadges(\Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     *
     */
        public function recentReusesAtomFeed(): mixed
    {
        try {
            return $this->client->recentReusesAtomFeed(\Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param array $queryParameters {
     *     @var string $q The string to autocomplete/suggest
     *     @var int $size The amount of suggestion to fetch
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function suggestReuses(array $queryParameters = [], array $headerParameters = []): null|array
    {
        try {
            return $this->client->suggestReuses($queryParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
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
        public function reuseTopics(array $headerParameters = []): null|array
    {
        try {
            return $this->client->reuseTopics($headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
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
        public function reuseTypes(array $headerParameters = []): null|array
    {
        try {
            return $this->client->reuseTypes($headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * Returns the number of followers left after the operation
     * @param string $id
     *
     */
        public function unfollowReuse(string $id): mixed
    {
        try {
            return $this->client->unfollowReuse($id, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $id
     * @param array $queryParameters {
     *     @var int $page The page to fetch
     *     @var int $page_size The page size to fetch
     *     @var string $user Filter follower by user, it allows to check if a user is following the object
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function listReuseFollowers(string $id, array $queryParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\FollowPage
    {
        try {
            return $this->client->listReuseFollowers($id, $queryParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * Returns the number of followers left after the operation
     * @param string $id
     *
     */
        public function followReuse(string $id): mixed
    {
        try {
            return $this->client->followReuse($id, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $reuse The reuse ID or slug
     * @param array $queryParameters {
     *     @var bool $send_legal_notice Send formal legal notice with appeal information to owner (admin only)
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteReuseNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteReuseGoneException
     *
     */
        public function deleteReuse(string $reuse, array $queryParameters = []): mixed
    {
        try {
            return $this->client->deleteReuse($reuse, $queryParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $reuse The reuse ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetReuseNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetReuseGoneException
     *
     */
        public function getReuse(string $reuse, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\ReuseRead
    {
        try {
            return $this->client->getReuse($reuse, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $reuse The reuse ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\ReuseWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateReuseBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateReuseNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateReuseGoneException
     *
     */
        public function updateReuse(string $reuse, \Ecourty\DataGouv\DataGouv\Client\Model\ReuseWrite $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\ReuseRead
    {
        try {
            return $this->client->updateReuse($reuse, $payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $reuse The reuse ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\BadgeWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function addReuseBadge(string $reuse, \Ecourty\DataGouv\DataGouv\Client\Model\BadgeWrite $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\BadgeRead
    {
        try {
            return $this->client->addReuseBadge($reuse, $payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $badgeKind
     * @param string $reuse The reuse ID or slug
     *
     */
        public function deleteReuseBadge(string $badgeKind, string $reuse): mixed
    {
        try {
            return $this->client->deleteReuseBadge($badgeKind, $reuse, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $reuse The reuse ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceReference $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\ReuseAddDataserviceForbiddenException
     *
     */
        public function reuseAddDataservice(string $reuse, \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceReference $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\ReuseRead
    {
        try {
            return $this->client->reuseAddDataservice($reuse, $payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $reuse The reuse ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\DatasetReference $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\ReuseAddDatasetForbiddenException
     *
     */
        public function reuseAddDataset(string $reuse, \Ecourty\DataGouv\DataGouv\Client\Model\DatasetReference $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\ReuseRead
    {
        try {
            return $this->client->reuseAddDataset($reuse, $payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $reuse The reuse ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function unfeatureReuse(string $reuse, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\ReuseRead
    {
        try {
            return $this->client->unfeatureReuse($reuse, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $reuse The reuse ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function featureReuse(string $reuse, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\ReuseRead
    {
        try {
            return $this->client->featureReuse($reuse, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $reuse The reuse ID or slug
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $file
     *     @var string $bbox
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function reuseImage(string $reuse, array $formParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\UploadedImage
    {
        try {
            return $this->client->reuseImage($reuse, $formParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
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