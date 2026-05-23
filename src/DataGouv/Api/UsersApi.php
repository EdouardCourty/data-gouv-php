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
 * Sub-client for the "users" tag.
 */
final class UsersApi
{
    public function __construct(private readonly Client $client)
    {
    }

    /**
     * @param array $queryParameters {
     *     @var string $q The search query
     *     @var string $sort The field (and direction) on which sorting apply
     *     @var int $page The page to display
     *     @var int $page_size The page size
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function listUsers(array $queryParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\UserPage
    {
        try {
            return $this->client->listUsers($queryParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\User $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CreateUserBadRequestException
     *
     */
        public function createUser(\Ecourty\DataGouv\DataGouv\Client\Model\User $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\User
    {
        try {
            return $this->client->createUser($payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
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
        public function userRoles(array $headerParameters = []): null|array
    {
        try {
            return $this->client->userRoles($headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param array $queryParameters {
     *     @var string $q The string to autocomplete/suggest
     *     @var string $size The amount of suggestion to fetch (between 1 and 20)
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function suggestUsers(array $queryParameters = [], array $headerParameters = []): null|array
    {
        try {
            return $this->client->suggestUsers($queryParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * Returns the number of followers left after the operation
     * @param string $id
     *
     */
        public function unfollowUser(string $id): null
    {
        try {
            return $this->client->unfollowUser($id, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
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
        public function listUserFollowers(string $id, array $queryParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\FollowPage
    {
        try {
            return $this->client->listUserFollowers($id, $queryParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $id
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\FollowUserForbiddenException
     *
     */
        public function followUser(string $id): null
    {
        try {
            return $this->client->followUser($id, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $user
     * @param array $queryParameters {
     *     @var bool $send_legal_notice Send formal legal notice with appeal information to owner (admin only)
     *     @var bool $no_mail Do not send the simple deletion notification email. Note: automatically set to True when send_legal_notice=True to avoid sending duplicate emails.
     *     @var bool $delete_comments Delete comments posted by the user upon user deletion
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteUserForbiddenException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteUserNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteUserGoneException
     *
     */
        public function deleteUser(string $user, array $queryParameters = []): null
    {
        try {
            return $this->client->deleteUser($user, $queryParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $user
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetUserNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetUserGoneException
     *
     */
        public function getUser(string $user, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\User
    {
        try {
            return $this->client->getUser($user, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $user
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\User $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateUserBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateUserNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateUserGoneException
     *
     */
        public function updateUser(string $user, \Ecourty\DataGouv\DataGouv\Client\Model\User $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\User
    {
        try {
            return $this->client->updateUser($user, $payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $user
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $file
     *     @var string $bbox
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function userAvatar(string $user, array $formParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\UploadedImage
    {
        try {
            return $this->client->userAvatar($user, $formParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $user
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function getUserContactPoint(string $user, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\ContactPointPage
    {
        try {
            return $this->client->getUserContactPoint($user, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $user
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RotateUserPasswordNotFoundException
     *
     */
        public function rotateUserPassword(string $user): null
    {
        try {
            return $this->client->rotateUserPassword($user, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
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