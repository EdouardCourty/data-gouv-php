<?php

namespace Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Endpoint;

class ListDatasetExportFormats extends \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Runtime\Client\Endpoint
{
    protected $dataset_id;
    /**
    * List available export formats
    * @param string $datasetId The identifier of the dataset to be queried.
    
    You can find it in the "Information" tab of the dataset page or in the dataset URL, right after `/datasets/`.
    */
    public function __construct(string $datasetId)
    {
        $this->dataset_id = $datasetId;
    }
    use \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{dataset_id}'], [$this->dataset_id], '/catalog/datasets/{dataset_id}/exports');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json; charset=utf-8']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Exception\ListDatasetExportFormatsUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Exception\ListDatasetExportFormatsInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (400 === $status) {
        }
        if (401 === $status) {
            throw new \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Exception\ListDatasetExportFormatsUnauthorizedException($response);
        }
        if (429 === $status) {
        }
        if (500 === $status) {
            throw new \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Exception\ListDatasetExportFormatsInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['apikey'];
    }
}