<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class DeletePost extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    protected $post;

    /**
     * @param string $post The post ID or slug
     */
    public function __construct(string $post)
    {
        $this->post = $post;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{post}'], [$this->post], '/posts/{post}/');
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeletePostNotFoundException
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
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\DeletePostNotFoundException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
