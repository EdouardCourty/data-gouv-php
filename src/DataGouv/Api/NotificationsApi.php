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
 * Sub-client for the "notifications" tag of the data.gouv.fr API.
 *
 * @see https://www.data.gouv.fr/api/1/swagger.json
 */
final class NotificationsApi
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
     * @var bool   $handled
     * @var string $user
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     */
    public function listNotifications(array $queryParameters = [], array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\NotificationPage
    {
        try {
            return $this->client->listNotifications($queryParameters, $headerParameters, Client::FETCH_OBJECT);
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\ReadNotificationBadRequestException
     */
    public function readNotification(string $notification, array $headerParameters = []): ?\Ecourty\DataGouv\DataGouv\Client\Model\NotificationRead
    {
        try {
            return $this->client->readNotification($notification, $headerParameters, Client::FETCH_OBJECT);
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
