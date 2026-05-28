<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class RefuseMembership extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    protected $id;
    protected $org;
    /**
     * @param string $id
     * @param string $org The organization ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\RefuseMembership $payload
     */
    public function __construct(string $id, string $org, \Ecourty\DataGouv\DataGouv\Client\Model\RefuseMembership $payload)
    {
        $this->id = $id;
        $this->org = $org;
        $this->body = $payload;
    }
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{id}', '{org}'], [$this->id, $this->org], '/organizations/{org}/membership/{id}/refuse/');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}