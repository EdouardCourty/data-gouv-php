<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class RotateUserPassword extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    protected $user;

    public function __construct(string $user)
    {
        $this->user = $user;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{user}'], [$this->user], '/users/{user}/rotate_password/');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RotateUserPasswordNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\RotateUserPasswordNotFoundException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
