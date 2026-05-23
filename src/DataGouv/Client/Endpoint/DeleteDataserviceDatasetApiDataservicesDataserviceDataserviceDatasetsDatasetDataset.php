<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class DeleteDataserviceDatasetApiDataservicesDataserviceDataserviceDatasetsDatasetDataset extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    protected $dataservice;
    protected $dataset;

    /**
     * @param string $dataservice The dataservice ID or slug
     */
    public function __construct(string $dataservice, string $dataset)
    {
        $this->dataservice = $dataservice;
        $this->dataset = $dataset;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{dataservice}', '{dataset}'], [$this->dataservice, $this->dataset], '/dataservices/{dataservice}/datasets/{dataset}/');
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteDataserviceDatasetApiDataservicesDataserviceDataserviceDatasetsDatasetDatasetNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (404 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteDataserviceDatasetApiDataservicesDataserviceDataserviceDatasetsDatasetDatasetNotFoundException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
