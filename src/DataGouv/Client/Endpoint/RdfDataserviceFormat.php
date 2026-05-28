<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class RdfDataserviceFormat extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    protected $dataservice;
    protected $_format;
    /**
     * @param string $dataservice The dataservice ID or slug
     * @param string $format
     */
    public function __construct(string $dataservice, string $format)
    {
        $this->dataservice = $dataservice;
        $this->_format = $format;
    }
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{dataservice}', '{_format}'], [$this->dataservice, $this->_format], '/dataservices/{dataservice}/rdf.{_format}');
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDataserviceFormatNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDataserviceFormatGoneException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (404 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDataserviceFormatNotFoundException($response);
        }
        if (410 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDataserviceFormatGoneException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}