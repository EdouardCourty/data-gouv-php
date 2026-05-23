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
 * Sub-client for the "visualizations" tag of the data.gouv.fr API.
 *
 * @see https://www.data.gouv.fr/api/1/swagger.json
 */
final class VisualizationsApi
{
    public function __construct(private readonly Client $client)
    {
    }

    /**
     * @param array $queryParameters {
     *
     * @var int    $page The page to display
     * @var int    $page_size The page size
     * @var string $sort The field (and direction) on which sorting apply
     * @var string $owner
     * @var string $organization
     * @var bool   $private
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     */
    public function listVisualizations(array $queryParameters = [], array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\ChartPage
    {
        try {
            return $this->client->listVisualizations($queryParameters, $headerParameters, Client::FETCH_OBJECT);
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CreateVisualizationBadRequestException
     */
    public function createVisualization(\Ecourty\DataGouv\DataGouv\Client\Model\ChartWrite $payload, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\ChartRead
    {
        try {
            return $this->client->createVisualization($payload, $headerParameters, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $visualization The visualization ID or slug
     */
    public function deleteVisualization(string $visualization): null
    {
        try {
            return $this->client->deleteVisualization($visualization, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $visualization    The visualization ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     */
    public function getVisualization(string $visualization, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\ChartRead
    {
        try {
            return $this->client->getVisualization($visualization, $headerParameters, Client::FETCH_OBJECT);
        } catch (ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $visualization    The visualization ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateVisualizationBadRequestException
     */
    public function updateVisualization(string $visualization, \Ecourty\DataGouv\DataGouv\Client\Model\ChartWrite $payload, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\ChartRead
    {
        try {
            return $this->client->updateVisualization($visualization, $payload, $headerParameters, Client::FETCH_OBJECT);
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
