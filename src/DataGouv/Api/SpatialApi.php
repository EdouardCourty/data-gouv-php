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
 * Sub-client for the "spatial" tag of the data.gouv.fr API.
 *
 * @see https://www.data.gouv.fr/api/1/swagger.json
 */
final class SpatialApi
{
    public function __construct(private readonly Client $client)
    {
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     */
    public function spatialCoverage(string $level, array $headerParameters = []): ?array
    {
        try {
            return $this->client->spatialCoverage($level, $headerParameters, Client::FETCH_OBJECT);
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
    public function spatialGranularities(array $headerParameters = []): ?array
    {
        try {
            return $this->client->spatialGranularities($headerParameters, Client::FETCH_OBJECT);
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
    public function spatialLevels(array $headerParameters = []): ?array
    {
        try {
            return $this->client->spatialLevels($headerParameters, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $id A zone identifier
     */
    public function spatialZone(string $id): null
    {
        try {
            return $this->client->spatialZone($id, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $id              A zone identifier
     * @param array  $queryParameters {
     *
     * @var bool $dynamic Append dynamic datasets
     * @var int  $size The amount of datasets to fetch
     *           }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     */
    public function spatialZoneDatasets(string $id, array $queryParameters = [], array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\DatasetReference
    {
        try {
            return $this->client->spatialZoneDatasets($id, $queryParameters, $headerParameters, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $q The string to autocomplete/suggest
     * @var int    $size The amount of suggestion to fetch
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     */
    public function suggestZones(array $queryParameters = [], array $headerParameters = []): ?array
    {
        try {
            return $this->client->suggestZones($queryParameters, $headerParameters, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $ids              A zone identifiers list (comma separated)
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     */
    public function spatialZones(string $ids, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\GeoJSONFeatureCollection
    {
        try {
            return $this->client->spatialZones($ids, $headerParameters, Client::FETCH_OBJECT);
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
