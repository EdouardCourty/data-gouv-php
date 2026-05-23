<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class GetDataset extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    protected $dataset;
    /**
     * @param string $dataset The dataset ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     */
    public function __construct(string $dataset, array $headerParameters = [])
    {
        $this->dataset = $dataset;
        $this->headerParameters = $headerParameters;
    }
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{dataset}'], [$this->dataset], '/datasets/{dataset}/');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetDatasetNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetDatasetGoneException
     *
     * @return null|\Ecourty\DataGouv\DataGouv\Client\Model\Dataset
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataGouv\Client\Model\Dataset', 'json');
        }
        if (404 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\GetDatasetNotFoundException($response);
        }
        if (410 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\GetDatasetGoneException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}