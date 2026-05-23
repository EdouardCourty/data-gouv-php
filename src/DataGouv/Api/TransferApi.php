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
 * Sub-client for the "transfer" tag of the data.gouv.fr API.
 *
 * @see https://www.data.gouv.fr/api/1/swagger.json
 */
final class TransferApi
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
    public function listTransfers(array $headerParameters = []): ?array
    {
        try {
            return $this->client->listTransfers($headerParameters, Client::FETCH_OBJECT);
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
    public function requestTransfer(\Ecourty\DataGouv\DataGouv\Client\Model\TransferRequest $payload, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\Transfer
    {
        try {
            return $this->client->requestTransfer($payload, $headerParameters, Client::FETCH_OBJECT);
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
    public function getTransfer(string $id, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\Transfer
    {
        try {
            return $this->client->getTransfer($id, $headerParameters, Client::FETCH_OBJECT);
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
    public function respondToTransfer(string $id, \Ecourty\DataGouv\DataGouv\Client\Model\TransferResponse $payload, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\Transfer
    {
        try {
            return $this->client->respondToTransfer($id, $payload, $headerParameters, Client::FETCH_OBJECT);
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
