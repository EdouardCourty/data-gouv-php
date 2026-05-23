<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class ListDataservices extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    /**
     * @param array $queryParameters {
     *     @var int $page The page to display
     *     @var int $page_size The page size
     *     @var string $sort The field (and direction) on which sorting apply
     *     @var string $q
     *     @var string $topic
     *     @var string $reuse
     *     @var string $owner
     *     @var string $organization
     *     @var string $organization_badge
     *     @var string $access_type
     *     @var string $tag
     *     @var bool $featured
     *     @var string $contact_point
     *     @var string $dataset
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
        return '/dataservices/';
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
        $optionsResolver->setDefined(['page', 'page_size', 'sort', 'q', 'topic', 'reuse', 'owner', 'organization', 'organization_badge', 'access_type', 'tag', 'featured', 'contact_point', 'dataset']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1, 'page_size' => 20]);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('page_size', ['int']);
        $optionsResolver->addAllowedTypes('sort', ['string']);
        $optionsResolver->addAllowedTypes('q', ['string']);
        $optionsResolver->addAllowedTypes('topic', ['string']);
        $optionsResolver->addAllowedTypes('reuse', ['string']);
        $optionsResolver->addAllowedTypes('owner', ['string']);
        $optionsResolver->addAllowedTypes('organization', ['string']);
        $optionsResolver->addAllowedTypes('organization_badge', ['string']);
        $optionsResolver->addAllowedTypes('access_type', ['string']);
        $optionsResolver->addAllowedTypes('tag', ['string']);
        $optionsResolver->addAllowedTypes('featured', ['bool']);
        $optionsResolver->addAllowedTypes('contact_point', ['string']);
        $optionsResolver->addAllowedTypes('dataset', ['string']);
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
     * @return null|\Ecourty\DataGouv\DataGouv\Client\Model\DataservicePage
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataGouv\Client\Model\DataservicePage', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}