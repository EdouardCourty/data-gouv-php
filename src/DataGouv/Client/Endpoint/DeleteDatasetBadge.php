<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class DeleteDatasetBadge extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    protected $badge_kind;
    protected $dataset;
    /**
     * @param string $badgeKind
     * @param string $dataset The dataset ID or slug
     */
    public function __construct(string $badgeKind, string $dataset)
    {
        $this->badge_kind = $badgeKind;
        $this->dataset = $dataset;
    }
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{badge_kind}', '{dataset}'], [$this->badge_kind, $this->dataset], '/datasets/{dataset}/badges/{badge_kind}/');
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