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
 * Sub-client for the "posts" tag.
 */
final class PostsApi
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
     *     @var string $kind
     *     @var bool $with_drafts `True` also returns the unpublished posts (only for super-admins)
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function listPosts(array $queryParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\PostPage
    {
        try {
            return $this->client->listPosts($queryParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\PostWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CreatePostBadRequestException
     *
     */
        public function createPost(\Ecourty\DataGouv\DataGouv\Client\Model\PostWrite $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\PostRead
    {
        try {
            return $this->client->createPost($payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     *
     */
        public function recentPostsAtomFeed(): null
    {
        try {
            return $this->client->recentPostsAtomFeed(\Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $post The post ID or slug
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeletePostNotFoundException
     *
     */
        public function deletePost(string $post): null
    {
        try {
            return $this->client->deletePost($post, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $post The post ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetPostNotFoundException
     *
     */
        public function getPost(string $post, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\PostRead
    {
        try {
            return $this->client->getPost($post, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $post The post ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\PostWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdatePostBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdatePostNotFoundException
     *
     */
        public function updatePost(string $post, \Ecourty\DataGouv\DataGouv\Client\Model\PostWrite $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\PostRead
    {
        try {
            return $this->client->updatePost($post, $payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $post
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $file
     *     @var string $bbox
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function postImage(string $post, array $formParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\UploadedImage
    {
        try {
            return $this->client->postImage($post, $formParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $post
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $file
     *     @var string $bbox
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function resizePostImage(string $post, array $formParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\UploadedImage
    {
        try {
            return $this->client->resizePostImage($post, $formParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $post
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function unpublishPost(string $post, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\PostRead
    {
        try {
            return $this->client->unpublishPost($post, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $post
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function publishPost(string $post, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\PostRead
    {
        try {
            return $this->client->publishPost($post, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
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