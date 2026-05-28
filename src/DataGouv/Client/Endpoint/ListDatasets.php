<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class ListDatasets extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    /**
     * @param array $queryParameters {
     *     @var string $q The search query
     *     @var string $sort The field (and direction) on which sorting apply
     *     @var int $page The page to display
     *     @var int $page_size The page size
     *     @var array $tag
     *     @var string $license
     *     @var bool $featured If set to true, it will filter on featured datasets only. If set to false, it will exclude featured datasets.
     *     @var string $geozone
     *     @var string $granularity
     *     @var string $temporal_coverage
     *     @var string $access_type
     *     @var string $organization
     *     @var string $badge
     *     @var string $organization_badge
     *     @var string $owner
     *     @var string $followed_by (beta, subject to change/be removed)
     *     @var string $format
     *     @var string $schema
     *     @var string $schema_version
     *     @var string $topic
     *     @var string $credit
     *     @var string $dataservice
     *     @var string $reuse
     *     @var bool $archived If set to true, it will filter on archived datasets only. If set to false, it will exclude archived datasets. User must be authenticated and results are limited to user visibility
     *     @var bool $deleted If set to true, it will filter on deleted datasets only. If set to false, it will exclude deleted datasets. User must be authenticated and results are limited to user visibility
     *     @var bool $private If set to true, it will filter on private datasets only. If set to false, it will exclude private datasets. User must be authenticated and results are limited to user visibility
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     */
    public function __construct(array $queryParameters = [], array $headerParameters = [])
    {
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/datasets/';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['q', 'sort', 'page', 'page_size', 'tag', 'license', 'featured', 'geozone', 'granularity', 'temporal_coverage', 'access_type', 'organization', 'badge', 'organization_badge', 'owner', 'followed_by', 'format', 'schema', 'schema_version', 'topic', 'credit', 'dataservice', 'reuse', 'archived', 'deleted', 'private']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1, 'page_size' => 20]);
        $optionsResolver->addAllowedTypes('q', ['string']);
        $optionsResolver->addAllowedTypes('sort', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('page_size', ['int']);
        $optionsResolver->addAllowedTypes('tag', ['array']);
        $optionsResolver->addAllowedTypes('license', ['string']);
        $optionsResolver->addAllowedTypes('featured', ['bool']);
        $optionsResolver->addAllowedTypes('geozone', ['string']);
        $optionsResolver->addAllowedTypes('granularity', ['string']);
        $optionsResolver->addAllowedTypes('temporal_coverage', ['string']);
        $optionsResolver->addAllowedTypes('access_type', ['string']);
        $optionsResolver->addAllowedTypes('organization', ['string']);
        $optionsResolver->addAllowedTypes('badge', ['string']);
        $optionsResolver->addAllowedTypes('organization_badge', ['string']);
        $optionsResolver->addAllowedTypes('owner', ['string']);
        $optionsResolver->addAllowedTypes('followed_by', ['string']);
        $optionsResolver->addAllowedTypes('format', ['string']);
        $optionsResolver->addAllowedTypes('schema', ['string']);
        $optionsResolver->addAllowedTypes('schema_version', ['string']);
        $optionsResolver->addAllowedTypes('topic', ['string']);
        $optionsResolver->addAllowedTypes('credit', ['string']);
        $optionsResolver->addAllowedTypes('dataservice', ['string']);
        $optionsResolver->addAllowedTypes('reuse', ['string']);
        $optionsResolver->addAllowedTypes('archived', ['bool']);
        $optionsResolver->addAllowedTypes('deleted', ['bool']);
        $optionsResolver->addAllowedTypes('private', ['bool']);
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['X-Fields']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('X-Fields', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Ecourty\DataGouv\DataGouv\Client\Model\DatasetPage
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataGouv\Client\Model\DatasetPage', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}