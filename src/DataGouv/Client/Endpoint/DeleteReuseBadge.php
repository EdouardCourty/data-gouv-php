<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class DeleteReuseBadge extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    protected $badge_kind;
    protected $reuse;
    /**
     * @param string $badgeKind
     * @param string $reuse The reuse ID or slug
     */
    public function __construct(string $badgeKind, string $reuse)
    {
        $this->badge_kind = $badgeKind;
        $this->reuse = $reuse;
    }
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{badge_kind}', '{reuse}'], [$this->badge_kind, $this->reuse], '/reuses/{reuse}/badges/{badge_kind}/');
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