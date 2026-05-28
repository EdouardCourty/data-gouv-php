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
 * Sub-client for the "reports" tag.
 */
final class ReportsApi
{
    public function __construct(private readonly Client $client)
    {
    }

    /**
     * @param array $queryParameters {
     *     @var int $page The page to display
     *     @var int $page_size The page size
     *     @var string $sort The field (and direction) on which sorting apply
     *     @var bool $handled
     *     @var string $subject_type
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function listReports(array $queryParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\ReportPage
    {
        try {
            return $this->client->listReports($queryParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\ReportWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CreateReportBadRequestException
     *
     */
        public function createReport(\Ecourty\DataGouv\DataGouv\Client\Model\ReportWrite $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\ReportRead
    {
        try {
            return $this->client->createReport($payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     *
     */
        public function listReportsReasons(): mixed
    {
        try {
            return $this->client->listReportsReasons(\Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $report
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function getReport(string $report, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\ReportRead
    {
        try {
            return $this->client->getReport($report, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $report
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\ReportWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateReportBadRequestException
     *
     */
        public function updateReport(string $report, \Ecourty\DataGouv\DataGouv\Client\Model\ReportWrite $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\ReportRead
    {
        try {
            return $this->client->updateReport($report, $payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
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