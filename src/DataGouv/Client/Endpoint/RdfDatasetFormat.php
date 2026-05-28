<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class RdfDatasetFormat extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    protected $dataset;
    protected $_format;
    /**
     * @param string $dataset The dataset ID or slug
     * @param string $format
     */
    public function __construct(string $dataset, string $format)
    {
        $this->dataset = $dataset;
        $this->_format = $format;
    }
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{dataset}', '{_format}'], [$this->dataset, $this->_format], '/datasets/{dataset}/rdf.{_format}');
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDatasetFormatNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDatasetFormatGoneException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (404 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDatasetFormatNotFoundException($response);
        }
        if (410 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDatasetFormatGoneException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}