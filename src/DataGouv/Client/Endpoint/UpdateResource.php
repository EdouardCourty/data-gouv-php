<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class UpdateResource extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    protected $rid;
    protected $dataset;
    /**
     * @param string $rid The resource unique identifier
     * @param string $dataset The dataset ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\Resource $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     */
    public function __construct(string $rid, string $dataset, \Ecourty\DataGouv\DataGouv\Client\Model\Resource $payload, array $headerParameters = [])
    {
        $this->rid = $rid;
        $this->dataset = $dataset;
        $this->body = $payload;
        $this->headerParameters = $headerParameters;
    }
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{rid}', '{dataset}'], [$this->rid, $this->dataset], '/datasets/{dataset}/resources/{rid}/');
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateResourceBadRequestException
     *
     * @return null|\Ecourty\DataGouv\DataGouv\Client\Model\Resource
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataGouv\Client\Model\Resource', 'json');
        }
        if (400 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateResourceBadRequestException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}