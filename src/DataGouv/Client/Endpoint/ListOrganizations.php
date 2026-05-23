<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class ListOrganizations extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    /**
     * @param array $queryParameters {
     *     @var string $q The search query
     *     @var string $sort The field (and direction) on which sorting apply
     *     @var int $page The page to display
     *     @var int $page_size The page size
     *     @var string $badge
     *     @var string $name
     *     @var string $business_number_id
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
        return '/organizations/';
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
        $optionsResolver->setDefined(['q', 'sort', 'page', 'page_size', 'badge', 'name', 'business_number_id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1, 'page_size' => 20]);
        $optionsResolver->addAllowedTypes('q', ['string']);
        $optionsResolver->addAllowedTypes('sort', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('page_size', ['int']);
        $optionsResolver->addAllowedTypes('badge', ['string']);
        $optionsResolver->addAllowedTypes('name', ['string']);
        $optionsResolver->addAllowedTypes('business_number_id', ['string']);
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
     * @return null|\Ecourty\DataGouv\DataGouv\Client\Model\OrganizationPage
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataGouv\Client\Model\OrganizationPage', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}