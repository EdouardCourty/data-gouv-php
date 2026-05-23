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
 * Sub-client for the "site" tag.
 */
final class SiteApi
{
    public function __construct(private readonly Client $client)
    {
    }

    /**
     * @param array $queryParameters {
     *     @var int $page The page to fetch
     *     @var int $page_size The page size to fetch
     *     @var string $user Filter activities for that particular user
     *     @var string $organization Filter activities for that particular organization
     *     @var string $related_to Filter activities for that particular object id (ex : reuse, dataset, etc.)
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function activity(array $queryParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\ActivityPage
    {
        try {
            return $this->client->activity($queryParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
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
        public function getSite(array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\SiteRead
    {
        try {
            return $this->client->getSite($headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\SiteWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function setSite(\Ecourty\DataGouv\DataGouv\Client\Model\SiteWrite $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\SiteRead
    {
        try {
            return $this->client->setSite($payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param array $queryParameters {
     *     @var string $q The search query
     *     @var string $sort The field (and direction) on which sorting apply
     *     @var int $page The page to display
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
     *     @var int $page_size The page size
     * }
     *
     */
        public function getSiteRdfCatalog(array $queryParameters = []): null
    {
        try {
            return $this->client->getSiteRdfCatalog($queryParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * Filtering, sorting and paginating abilities apply to the datasets elements.
     * @param string $format
     * @param array $queryParameters {
     *     @var string $q The search query
     *     @var string $sort The field (and direction) on which sorting apply
     *     @var int $page The page to display
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
     *     @var int $page_size The page size
     * }
     *
     */
        public function getSiteRdfCatalogFormat(string $format, array $queryParameters = []): null
    {
        try {
            return $this->client->getSiteRdfCatalogFormat($format, $queryParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     *
     */
        public function getSiteJsonLdContext(): null
    {
        try {
            return $this->client->getSiteJsonLdContext(\Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $format
     *
     */
        public function getSiteDataPortal(string $format): null
    {
        try {
            return $this->client->getSiteDataPortal($format, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     *
     */
        public function getSiteDataservicesCsv(): null
    {
        try {
            return $this->client->getSiteDataservicesCsv(\Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     *
     */
        public function getSiteDatasetsCsv(): null
    {
        try {
            return $this->client->getSiteDatasetsCsv(\Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     *
     */
        public function getSiteHarvestsCsv(): null
    {
        try {
            return $this->client->getSiteHarvestsCsv(\Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     *
     */
        public function getSiteOrganizationsCsv(): null
    {
        try {
            return $this->client->getSiteOrganizationsCsv(\Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     *
     */
        public function getSiteResourcesCsv(): null
    {
        try {
            return $this->client->getSiteResourcesCsv(\Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     *
     */
        public function getSiteReusesCsv(): null
    {
        try {
            return $this->client->getSiteReusesCsv(\Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     *
     */
        public function getSiteTagsCsv(): null
    {
        try {
            return $this->client->getSiteTagsCsv(\Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
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