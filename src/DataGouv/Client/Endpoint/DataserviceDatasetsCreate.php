<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class DataserviceDatasetsCreate extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    protected $dataservice;
    /**
     * @param string $dataservice The dataservice ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceDatasetsAdd[] $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     */
    public function __construct(string $dataservice, array $payload, array $headerParameters = [])
    {
        $this->dataservice = $dataservice;
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
        return str_replace(['{dataservice}'], [$this->dataservice], '/dataservices/{dataservice}/datasets/');
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DataserviceDatasetsCreateBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DataserviceDatasetsCreateForbiddenException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DataserviceDatasetsCreateNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DataserviceDatasetsCreateGoneException
     *
     * @return null|\Ecourty\DataGouv\DataGouv\Client\Model\DataserviceRead
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataGouv\Client\Model\DataserviceRead', 'json');
        }
        if (400 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\DataserviceDatasetsCreateBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\DataserviceDatasetsCreateForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\DataserviceDatasetsCreateNotFoundException($response);
        }
        if (410 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\DataserviceDatasetsCreateGoneException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}