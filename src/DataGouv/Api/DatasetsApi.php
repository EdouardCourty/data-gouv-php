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
 * Sub-client for the "datasets" tag.
 */
final class DatasetsApi
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
     *     @var array $tag
     *     @var string $license
     *     @var bool $featured If set to true, it will filter on featured datasets only. If set to false, it will exclude featured datasets.
     *     @var string $geozone
     *     @var string $granularity
     *     @var string $temporal_coverage
     *     @var string $access_type
     *     @var string $organization
     *     @var string $badge
     *     @var string $organization_badge
     *     @var string $owner
     *     @var string $followed_by (beta, subject to change/be removed)
     *     @var string $format
     *     @var string $schema
     *     @var string $schema_version
     *     @var string $topic
     *     @var string $credit
     *     @var string $dataservice
     *     @var string $reuse
     *     @var bool $archived If set to true, it will filter on archived datasets only. If set to false, it will exclude archived datasets. User must be authenticated and results are limited to user visibility
     *     @var bool $deleted If set to true, it will filter on deleted datasets only. If set to false, it will exclude deleted datasets. User must be authenticated and results are limited to user visibility
     *     @var bool $private If set to true, it will filter on private datasets only. If set to false, it will exclude private datasets. User must be authenticated and results are limited to user visibility
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function listDatasets(array $queryParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\DatasetPage
    {
        try {
            return $this->client->listDatasets($queryParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\Dataset $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CreateDatasetBadRequestException
     *
     */
        public function createDataset(\Ecourty\DataGouv\DataGouv\Client\Model\Dataset $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\Dataset
    {
        try {
            return $this->client->createDataset($payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     *
     */
        public function availableDatasetBadges(): mixed
    {
        try {
            return $this->client->availableDatasetBadges(\Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param array $queryParameters {
     *     @var string $sort The sorting attribute
     *     @var int $page The page to fetch
     *     @var int $page_size The page size to fetch
     *     @var string $organization Filter activities for that particular organization
     *     @var string $dataset Filter activities for that particular dataset
     *     @var string $owner Filter activities for that particular user
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function listCommunityResources(array $queryParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\CommunityResourcePage
    {
        try {
            return $this->client->listCommunityResources($queryParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\CommunityResource $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CreateCommunityResourceBadRequestException
     *
     */
        public function createCommunityResource(\Ecourty\DataGouv\DataGouv\Client\Model\CommunityResource $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\CommunityResource
    {
        try {
            return $this->client->createCommunityResource($payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $community The community resource unique identifier
     * @param array $queryParameters {
     *     @var string $dataset The dataset ID or slug
     * }
     *
     */
        public function deleteCommunityResource(string $community, array $queryParameters = []): mixed
    {
        try {
            return $this->client->deleteCommunityResource($community, $queryParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $community The community resource unique identifier
     * @param array $queryParameters {
     *     @var string $dataset The dataset ID or slug
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function retrieveCommunityResource(string $community, array $queryParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\CommunityResource
    {
        try {
            return $this->client->retrieveCommunityResource($community, $queryParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $community The community resource unique identifier
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\CommunityResource $payload
     * @param array $queryParameters {
     *     @var string $dataset The dataset ID or slug
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateCommunityResourceBadRequestException
     *
     */
        public function updateCommunityResource(string $community, \Ecourty\DataGouv\DataGouv\Client\Model\CommunityResource $payload, array $queryParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\CommunityResource
    {
        try {
            return $this->client->updateCommunityResource($community, $payload, $queryParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $community The community resource unique identifier
     * @param array $queryParameters {
     *     @var string $dataset The dataset ID or slug
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UploadCommunityResourceBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UploadCommunityResourceUnsupportedMediaTypeException
     *
     */
        public function uploadCommunityResource(string $community, array $queryParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\UploadedCommunityResource
    {
        try {
            return $this->client->uploadCommunityResource($community, $queryParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     *
     */
        public function allowedExtensions(): mixed
    {
        try {
            return $this->client->allowedExtensions(\Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
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
        public function listFrequencies(array $headerParameters = []): null|array
    {
        try {
            return $this->client->listFrequencies($headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
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
        public function listLicenses(array $headerParameters = []): null|array
    {
        try {
            return $this->client->listLicenses($headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $id
     * @param array $queryParameters {
     *     @var string $dataset The dataset ID or slug
     * }
     *
     */
        public function redirectResource(string $id, array $queryParameters = []): mixed
    {
        try {
            return $this->client->redirectResource($id, $queryParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param array $queryParameters {
     *     @var string $q The search query
     *     @var string $sort The field (and direction) on which sorting apply
     *     @var int $page The page to display
     *     @var int $page_size The page size
     *     @var array $tag
     *     @var string $license
     *     @var bool $featured If set to true, it will filter on featured datasets only. If set to false, it will exclude featured datasets.
     *     @var string $geozone
     *     @var string $granularity
     *     @var string $temporal_coverage
     *     @var string $access_type
     *     @var string $organization
     *     @var string $badge
     *     @var string $organization_badge
     *     @var string $owner
     *     @var string $followed_by (beta, subject to change/be removed)
     *     @var string $format
     *     @var string $schema
     *     @var string $schema_version
     *     @var string $topic
     *     @var string $credit
     *     @var string $dataservice
     *     @var string $reuse
     *     @var bool $archived If set to true, it will filter on archived datasets only. If set to false, it will exclude archived datasets. User must be authenticated and results are limited to user visibility
     *     @var bool $deleted If set to true, it will filter on deleted datasets only. If set to false, it will exclude deleted datasets. User must be authenticated and results are limited to user visibility
     *     @var bool $private If set to true, it will filter on private datasets only. If set to false, it will exclude private datasets. User must be authenticated and results are limited to user visibility
     * }
     *
     */
        public function recentDatasetsAtomFeed(array $queryParameters = []): mixed
    {
        try {
            return $this->client->recentDatasetsAtomFeed($queryParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
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
        public function resourceTypes(array $headerParameters = []): null|array
    {
        try {
            return $this->client->resourceTypes($headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
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
        public function schemas(array $headerParameters = []): null|array
    {
        try {
            return $this->client->schemas($headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
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
        public function suggestDatasets(array $queryParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\DatasetSuggestion
    {
        try {
            return $this->client->suggestDatasets($queryParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param array $queryParameters {
     *     @var string $q The string to autocomplete/suggest
     *     @var int $size The amount of suggestion to fetch
     * }
     *
     */
        public function suggestFormats(array $queryParameters = []): mixed
    {
        try {
            return $this->client->suggestFormats($queryParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param array $queryParameters {
     *     @var string $q The string to autocomplete/suggest
     *     @var int $size The amount of suggestion to fetch
     * }
     *
     */
        public function suggestMime(array $queryParameters = []): mixed
    {
        try {
            return $this->client->suggestMime($queryParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $dataset The dataset ID or slug
     * @param array $queryParameters {
     *     @var bool $send_legal_notice Send formal legal notice with appeal information to owner (admin only)
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteDatasetNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteDatasetGoneException
     *
     */
        public function deleteDataset(string $dataset, array $queryParameters = []): mixed
    {
        try {
            return $this->client->deleteDataset($dataset, $queryParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $dataset The dataset ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetDatasetNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetDatasetGoneException
     *
     */
        public function getDataset(string $dataset, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\Dataset
    {
        try {
            return $this->client->getDataset($dataset, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $dataset The dataset ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\Dataset $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateDatasetBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateDatasetNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateDatasetGoneException
     *
     */
        public function updateDataset(string $dataset, \Ecourty\DataGouv\DataGouv\Client\Model\Dataset $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\Dataset
    {
        try {
            return $this->client->updateDataset($dataset, $payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $dataset The dataset ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\BadgeWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function addDatasetBadge(string $dataset, \Ecourty\DataGouv\DataGouv\Client\Model\BadgeWrite $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\BadgeRead
    {
        try {
            return $this->client->addDatasetBadge($dataset, $payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $badgeKind
     * @param string $dataset The dataset ID or slug
     *
     */
        public function deleteDatasetBadge(string $badgeKind, string $dataset): mixed
    {
        try {
            return $this->client->deleteDatasetBadge($badgeKind, $dataset, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $dataset The dataset ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function unfeatureDataset(string $dataset, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\Dataset
    {
        try {
            return $this->client->unfeatureDataset($dataset, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $dataset The dataset ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function featureDataset(string $dataset, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\Dataset
    {
        try {
            return $this->client->featureDataset($dataset, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $dataset The dataset ID or slug
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDatasetNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDatasetGoneException
     *
     */
        public function rdfDataset(string $dataset): mixed
    {
        try {
            return $this->client->rdfDataset($dataset, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $dataset The dataset ID or slug
     * @param string $format
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDatasetFormatNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDatasetFormatGoneException
     *
     */
        public function rdfDatasetFormat(string $dataset, string $format): mixed
    {
        try {
            return $this->client->rdfDatasetFormat($dataset, $format, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $dataset The dataset ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\Resource $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CreateResourceBadRequestException
     *
     */
        public function createResource(string $dataset, \Ecourty\DataGouv\DataGouv\Client\Model\Resource $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\Resource
    {
        try {
            return $this->client->createResource($dataset, $payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $dataset The dataset ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\Resource[] $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateResourcesBadRequestException
     *
     */
        public function updateResources(string $dataset, array $payload, array $headerParameters = []): null|array
    {
        try {
            return $this->client->updateResources($dataset, $payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $rid The resource unique identifier
     * @param string $dataset The dataset ID or slug
     *
     */
        public function deleteResource(string $rid, string $dataset): mixed
    {
        try {
            return $this->client->deleteResource($rid, $dataset, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $rid The resource unique identifier
     * @param string $dataset The dataset ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function getResource(string $rid, string $dataset, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\Resource
    {
        try {
            return $this->client->getResource($rid, $dataset, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $rid The resource unique identifier
     * @param string $dataset The dataset ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\Resource $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateResourceBadRequestException
     *
     */
        public function updateResource(string $rid, string $dataset, \Ecourty\DataGouv\DataGouv\Client\Model\Resource $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\Resource
    {
        try {
            return $this->client->updateResource($rid, $dataset, $payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $rid The resource unique identifier
     * @param string $dataset The dataset ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UploadDatasetResourceBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UploadDatasetResourceUnsupportedMediaTypeException
     *
     */
        public function uploadDatasetResource(string $rid, string $dataset, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\UploadedResource
    {
        try {
            return $this->client->uploadDatasetResource($rid, $dataset, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $dataset The dataset ID or slug
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $file
     *     @var string $uuid
     *     @var string $filename
     *     @var int $partindex
     *     @var int $partbyteoffset
     *     @var int $totalparts
     *     @var int $chunksize
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UploadNewDatasetResourceBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UploadNewDatasetResourceUnsupportedMediaTypeException
     *
     */
        public function uploadNewDatasetResource(string $dataset, array $formParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\UploadedResource
    {
        try {
            return $this->client->uploadNewDatasetResource($dataset, $formParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $dataset The dataset ID or slug
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $file
     *     @var string $uuid
     *     @var string $filename
     *     @var int $partindex
     *     @var int $partbyteoffset
     *     @var int $totalparts
     *     @var int $chunksize
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UploadNewCommunityResourceBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UploadNewCommunityResourceUnsupportedMediaTypeException
     *
     */
        public function uploadNewCommunityResource(string $dataset, array $formParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\UploadedCommunityResource
    {
        try {
            return $this->client->uploadNewCommunityResource($dataset, $formParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * Returns the number of followers left after the operation
     * @param string $id
     *
     */
        public function unfollowDataset(string $id): mixed
    {
        try {
            return $this->client->unfollowDataset($id, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
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
        public function listDatasetFollowers(string $id, array $queryParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\FollowPage
    {
        try {
            return $this->client->listDatasetFollowers($id, $queryParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * Returns the number of followers left after the operation
     * @param string $id
     *
     */
        public function followDataset(string $id): mixed
    {
        try {
            return $this->client->followDataset($id, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
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