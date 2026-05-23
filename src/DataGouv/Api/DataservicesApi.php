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
 * Sub-client for the "dataservices" tag.
 */
final class DataservicesApi
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
     *     @var string $topic
     *     @var string $reuse
     *     @var string $owner
     *     @var string $organization
     *     @var string $organization_badge
     *     @var string $access_type
     *     @var string $tag
     *     @var bool $featured
     *     @var string $contact_point
     *     @var string $dataset
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function listDataservices(array $queryParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\DataservicePage
    {
        try {
            return $this->client->listDataservices($queryParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CreateDataserviceBadRequestException
     *
     */
        public function createDataservice(\Ecourty\DataGouv\DataGouv\Client\Model\DataserviceWrite $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\DataserviceRead
    {
        try {
            return $this->client->createDataservice($payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     *
     */
        public function recentDataservicesAtomFeed(): null
    {
        try {
            return $this->client->recentDataservicesAtomFeed(\Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $dataservice
     * @param array $queryParameters {
     *     @var bool $send_legal_notice Send formal legal notice with appeal information to owner (admin only)
     * }
     *
     */
        public function deleteDataservice(string $dataservice, array $queryParameters = []): null
    {
        try {
            return $this->client->deleteDataservice($dataservice, $queryParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $dataservice
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function getDataservice(string $dataservice, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\DataserviceRead
    {
        try {
            return $this->client->getDataservice($dataservice, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $dataservice
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateDataserviceBadRequestException
     *
     */
        public function updateDataservice(string $dataservice, \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceWrite $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\DataserviceRead
    {
        try {
            return $this->client->updateDataservice($dataservice, $payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $dataservice The dataservice ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceDatasetsAdd[] $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DataserviceDatasetsCreateBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DataserviceDatasetsCreateForbiddenException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DataserviceDatasetsCreateNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DataserviceDatasetsCreateGoneException
     *
     */
        public function dataserviceDatasetsCreate(string $dataservice, array $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\DataserviceRead
    {
        try {
            return $this->client->dataserviceDatasetsCreate($dataservice, $payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $dataservice The dataservice ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function unfeatureDataservice(string $dataservice, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\DataserviceRead
    {
        try {
            return $this->client->unfeatureDataservice($dataservice, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $dataservice The dataservice ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function featureDataservice(string $dataservice, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\DataserviceRead
    {
        try {
            return $this->client->featureDataservice($dataservice, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $dataservice The dataservice ID or slug
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDataserviceNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDataserviceGoneException
     *
     */
        public function rdfDataservice(string $dataservice): null
    {
        try {
            return $this->client->rdfDataservice($dataservice, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $dataservice The dataservice ID or slug
     * @param string $format
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDataserviceFormatNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDataserviceFormatGoneException
     *
     */
        public function rdfDataserviceFormat(string $dataservice, string $format): null
    {
        try {
            return $this->client->rdfDataserviceFormat($dataservice, $format, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * Returns the number of followers left after the operation
     * @param string $id
     *
     */
        public function unfollowDataservice(string $id): null
    {
        try {
            return $this->client->unfollowDataservice($id, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
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
        public function listDataserviceFollowers(string $id, array $queryParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\FollowPage
    {
        try {
            return $this->client->listDataserviceFollowers($id, $queryParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * Returns the number of followers left after the operation
     * @param string $id
     *
     */
        public function followDataservice(string $id): null
    {
        try {
            return $this->client->followDataservice($id, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
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