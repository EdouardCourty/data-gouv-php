<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class MyAvatar extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    /**
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $file
     *     @var string $bbox
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     */
    public function __construct(array $formParameters = [], array $headerParameters = [])
    {
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
        return '/me/avatar/';
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
        $optionsResolver->setDefined(['file', 'bbox']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('file', ['string', 'resource', '\Psr\Http\Message\StreamInterface']);
        $optionsResolver->addAllowedTypes('bbox', ['string']);
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
     * @return null|\Ecourty\DataGouv\DataGouv\Client\Model\UploadedImage
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataGouv\Client\Model\UploadedImage', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}