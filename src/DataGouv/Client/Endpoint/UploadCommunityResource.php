<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class UploadCommunityResource extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    protected $community;
    /**
     * @param string $community The community resource unique identifier
     * @param array $queryParameters {
     *     @var string $dataset The dataset ID or slug
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     */
    public function __construct(string $community, array $queryParameters = [], array $headerParameters = [])
    {
        $this->community = $community;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{community}'], [$this->community], '/datasets/community_resources/{community}/upload/');
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
        $optionsResolver->setDefined(['dataset']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UploadCommunityResourceBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UploadCommunityResourceUnsupportedMediaTypeException
     *
     * @return null|\Ecourty\DataGouv\DataGouv\Client\Model\UploadedCommunityResource
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataGouv\Client\Model\UploadedCommunityResource', 'json');
        }
        if (400 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\UploadCommunityResourceBadRequestException($response);
        }
        if (415 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\UploadCommunityResourceUnsupportedMediaTypeException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}