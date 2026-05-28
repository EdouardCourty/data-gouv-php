<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class RdfDataset extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    protected $dataset;
    /**
     * @param string $dataset The dataset ID or slug
     */
    public function __construct(string $dataset)
    {
        $this->dataset = $dataset;
    }
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{dataset}'], [$this->dataset], '/datasets/{dataset}/rdf');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDatasetNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDatasetGoneException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (404 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDatasetNotFoundException($response);
        }
        if (410 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDatasetGoneException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}