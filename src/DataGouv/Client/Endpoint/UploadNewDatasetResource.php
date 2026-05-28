<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class UploadNewDatasetResource extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    protected $dataset;
    /**
     * @param string $dataset The dataset ID or slug
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $file
     *     @var string $uuid
     *     @var string $filename
     *     @var int $partindex
     *     @var int $partbyteoffset
     *     @var int $totalparts
     *     @var int $chunksize
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     */
    public function __construct(string $dataset, array $formParameters = [], array $headerParameters = [])
    {
        $this->dataset = $dataset;
        $this->formParameters = $formParameters;
        $this->headerParameters = $headerParameters;
    }
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{dataset}'], [$this->dataset], '/datasets/{dataset}/upload/');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getMultipartBody($streamFactory);
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getFormOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getFormOptionsResolver();
        $optionsResolver->setDefined(['file', 'uuid', 'filename', 'partindex', 'partbyteoffset', 'totalparts', 'chunksize']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('file', ['string', 'resource', '\Psr\Http\Message\StreamInterface']);
        $optionsResolver->addAllowedTypes('uuid', ['string']);
        $optionsResolver->addAllowedTypes('filename', ['string']);
        $optionsResolver->addAllowedTypes('partindex', ['int']);
        $optionsResolver->addAllowedTypes('partbyteoffset', ['int']);
        $optionsResolver->addAllowedTypes('totalparts', ['int']);
        $optionsResolver->addAllowedTypes('chunksize', ['int']);
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UploadNewDatasetResourceBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UploadNewDatasetResourceUnsupportedMediaTypeException
     *
     * @return null|\Ecourty\DataGouv\DataGouv\Client\Model\UploadedResource
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataGouv\Client\Model\UploadedResource', 'json');
        }
        if (400 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\UploadNewDatasetResourceBadRequestException($response);
        }
        if (415 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\UploadNewDatasetResourceUnsupportedMediaTypeException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}