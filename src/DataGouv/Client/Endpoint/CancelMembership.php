<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class CancelMembership extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    protected $id;
    protected $org;
    /**
     * @param string $id
     * @param string $org The organization ID or slug
     */
    public function __construct(string $id, string $org)
    {
        $this->id = $id;
        $this->org = $org;
    }
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{id}', '{org}'], [$this->id, $this->org], '/organizations/{org}/membership/{id}/cancel/');
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CancelMembershipBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (400 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\CancelMembershipBadRequestException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}