<?php

namespace Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Endpoint;

class ExportRecordsParquet extends \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Runtime\Client\Endpoint
{
    protected $dataset_id;
    /**
    * Export a dataset in Parquet. Specific parameters are described here
    * @param string $datasetId The identifier of the dataset to be queried.
    
    You can find it in the "Information" tab of the dataset page or in the dataset URL, right after `/datasets/`.
    * @param array{
    *    "parquet_compression"?: string, //Sets the compression parameter for the Parquet export file
    * } $queryParameters
    */
    public function __construct(string $datasetId, array $queryParameters = [])
    {
        $this->dataset_id = $datasetId;
        $this->queryParameters = $queryParameters;
    }
    use \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{dataset_id}'], [$this->dataset_id], '/catalog/datasets/{dataset_id}/exports/parquet');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json; charset=utf-8']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['parquet_compression']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['parquet_compression' => 'snappy']);
        $optionsResolver->addAllowedTypes('parquet_compression', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\ExportRecordsParquetUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\ExportRecordsParquetInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
        }
        if (401 === $status) {
            throw new \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\ExportRecordsParquetUnauthorizedException($response);
        }
        if (429 === $status) {
        }
        if (500 === $status) {
            throw new \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\ExportRecordsParquetInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['apikey'];
    }
}