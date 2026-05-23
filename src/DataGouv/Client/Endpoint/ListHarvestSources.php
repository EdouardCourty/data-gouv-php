<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class ListHarvestSources extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;

    /**
     * @param array $queryParameters {
     *
     * @var int    $page The page to fetch
     * @var int    $page_size The page size to fetch
     * @var string $owner The organization or user ID to filter on
     * @var bool   $deleted Include sources flaggued as deleted
     * @var string $q The search query
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     */
    public function __construct(array $queryParameters = [], array $headerParameters = [])
    {
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/harvest/sources/';
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
        $optionsResolver->setDefined(['page', 'page_size', 'owner', 'deleted', 'q']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1, 'page_size' => 20, 'deleted' => false]);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('page_size', ['int']);
        $optionsResolver->addAllowedTypes('owner', ['string']);
        $optionsResolver->addAllowedTypes('deleted', ['bool']);
        $optionsResolver->addAllowedTypes('q', ['string']);

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
     * @return null|\Ecourty\DataGouv\DataGouv\Client\Model\HarvestSourcePage[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataGouv\Client\Model\HarvestSourcePage[]', 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
