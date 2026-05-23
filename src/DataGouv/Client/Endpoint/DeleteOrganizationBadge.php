<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class DeleteOrganizationBadge extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    protected $badge_kind;
    protected $org;
    /**
     * @param string $badgeKind
     * @param string $org The organization ID or slug
     */
    public function __construct(string $badgeKind, string $org)
    {
        $this->badge_kind = $badgeKind;
        $this->org = $org;
    }
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{badge_kind}', '{org}'], [$this->badge_kind, $this->org], '/organizations/{org}/badges/{badge_kind}/');
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