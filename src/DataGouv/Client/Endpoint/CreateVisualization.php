<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class CreateVisualization extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\ChartWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     */
    public function __construct(\Ecourty\DataGouv\DataGouv\Client\Model\ChartWrite $payload, array $headerParameters = [])
    {
        $this->body = $payload;
        $this->headerParameters = $headerParameters;
    }
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/visualizations/';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CreateVisualizationBadRequestException
     *
     * @return null|\Ecourty\DataGouv\DataGouv\Client\Model\ChartRead
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataGouv\Client\Model\ChartRead', 'json');
        }
        if (400 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\CreateVisualizationBadRequestException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}