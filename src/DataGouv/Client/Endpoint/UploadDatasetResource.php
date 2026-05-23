<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class UploadDatasetResource extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    protected $rid;
    protected $dataset;
    /**
     * @param string $rid The resource unique identifier
     * @param string $dataset The dataset ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     */
    public function __construct(string $rid, string $dataset, array $headerParameters = [])
    {
        $this->rid = $rid;
        $this->dataset = $dataset;
        $this->headerParameters = $headerParameters;
    }
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{rid}', '{dataset}'], [$this->rid, $this->dataset], '/datasets/{dataset}/resources/{rid}/upload/');
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UploadDatasetResourceBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UploadDatasetResourceUnsupportedMediaTypeException
     *
     * @return null|\Ecourty\DataGouv\DataGouv\Client\Model\UploadedResource
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataGouv\Client\Model\UploadedResource', 'json');
        }
        if (400 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\UploadDatasetResourceBadRequestException($response);
        }
        if (415 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\UploadDatasetResourceUnsupportedMediaTypeException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}