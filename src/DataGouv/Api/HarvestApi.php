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
 * Sub-client for the "harvest" tag of the data.gouv.fr API.
 *
 * @see https://www.data.gouv.fr/api/1/swagger.json
 */
final class HarvestApi
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
    public function harvestBackends(array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\HarvestBackend
    {
        try {
            return $this->client->harvestBackends($headerParameters, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param array $queryParameters {
     *
     * @var int $page The page to fetch
     * @var int $page_size The page size to fetch
     *          }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     */
    public function getHarvestJob(string $ident, array $queryParameters = [], array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\HarvestJob
    {
        try {
            return $this->client->getHarvestJob($ident, $queryParameters, $headerParameters, Client::FETCH_OBJECT);
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
    public function previewHarvestSourceConfig(\Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource $payload, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\HarvestJobPreview
    {
        try {
            return $this->client->previewHarvestSourceConfig($payload, $headerParameters, Client::FETCH_OBJECT);
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
    public function deleteHarvestSource(string $source, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource
    {
        try {
            return $this->client->deleteHarvestSource($source, $headerParameters, Client::FETCH_OBJECT);
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
    public function getHarvestSource(string $source, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource
    {
        try {
            return $this->client->getHarvestSource($source, $headerParameters, Client::FETCH_OBJECT);
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
    public function updateHarvestSource(string $source, \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource $payload, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource
    {
        try {
            return $this->client->updateHarvestSource($source, $payload, $headerParameters, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param array $queryParameters {
     *
     * @var int $page The page to fetch
     * @var int $page_size The page size to fetch
     *          }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     */
    public function listHarvestJobs(string $source, array $queryParameters = [], array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\HarvestJobPage
    {
        try {
            return $this->client->listHarvestJobs($source, $queryParameters, $headerParameters, Client::FETCH_OBJECT);
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
    public function previewHarvestSource(string $source, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\HarvestJobPreview
    {
        try {
            return $this->client->previewHarvestSource($source, $headerParameters, Client::FETCH_OBJECT);
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
    public function runHarvestSource(string $source, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource
    {
        try {
            return $this->client->runHarvestSource($source, $headerParameters, Client::FETCH_OBJECT);
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
    public function unscheduleHarvestSource(string $source, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource
    {
        try {
            return $this->client->unscheduleHarvestSource($source, $headerParameters, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $payload          A cron expression
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     */
    public function scheduleHarvestSource(string $source, string $payload, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource
    {
        try {
            return $this->client->scheduleHarvestSource($source, $payload, $headerParameters, Client::FETCH_OBJECT);
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
    public function validateHarvestSource(string $source, \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSourceValidation $payload, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource
    {
        try {
            return $this->client->validateHarvestSource($source, $payload, $headerParameters, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param array $queryParameters {
     *
     * @var int    $page The page to fetch
     * @var int    $page_size The page size to fetch
     * @var string $owner The organization or user ID to filter on
     * @var bool   $deleted Include sources flaggued as deleted
     * @var string $q The search query
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     */
    public function listHarvestSources(array $queryParameters = [], array $headerParameters = []): ?array
    {
        try {
            return $this->client->listHarvestSources($queryParameters, $headerParameters, Client::FETCH_OBJECT);
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
    public function createHarvestSource(\Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource $payload, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource
    {
        try {
            return $this->client->createHarvestSource($payload, $headerParameters, Client::FETCH_OBJECT);
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
