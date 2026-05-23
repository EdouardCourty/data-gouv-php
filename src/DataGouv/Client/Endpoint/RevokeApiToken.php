<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class RevokeApiToken extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    protected $api_token;
    /**
     * @param string $apiToken
     */
    public function __construct(string $apiToken)
    {
        $this->api_token = $apiToken;
    }
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{api_token}'], [$this->api_token], '/me/api_tokens/{api_token}/');
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RevokeApiTokenNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RevokeApiTokenGoneException
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
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\RevokeApiTokenNotFoundException($response);
        }
        if (410 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\RevokeApiTokenGoneException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}