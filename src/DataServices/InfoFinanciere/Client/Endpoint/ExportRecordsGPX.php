<?php

namespace Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Endpoint;

class ExportRecordsGPX extends \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Runtime\Client\Endpoint
{
    protected $dataset_id;
    /**
    * Export a dataset in GPX. Specific parameters are described here
    * @param string $datasetId The identifier of the dataset to be queried.
    
    You can find it in the "Information" tab of the dataset page or in the dataset URL, right after `/datasets/`.
    * @param array{
    *    "name_field"?: string, //Sets the field that is used as the 'name' attribute in the GPX output
    *    "description_field_list"?: string, //Sets the fields to use in the 'description' attribute of the GPX output
    *    "use_extension"?: bool, //Set it to true to use the `<extension>` tag for attributes (as GDAL does). Set it to false to use the `<desc>` tag for attributes.
    **Warning:** the default value of this parameter is `false` in v2.0 and `true` starting with v2.1
    * } $queryParameters
    */
    public function __construct(string $datasetId, array $queryParameters = [])
    {
        $this->dataset_id = $datasetId;
        $this->queryParameters = $queryParameters;
    }
    use \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{dataset_id}'], [$this->dataset_id], '/catalog/datasets/{dataset_id}/exports/gpx');
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
        $optionsResolver->setDefined(['name_field', 'description_field_list', 'use_extension']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['use_extension' => false]);
        $optionsResolver->addAllowedTypes('name_field', ['string']);
        $optionsResolver->addAllowedTypes('description_field_list', ['string']);
        $optionsResolver->addAllowedTypes('use_extension', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Exception\ExportRecordsGPXUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Exception\ExportRecordsGPXInternalServerErrorException
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
            throw new \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Exception\ExportRecordsGPXUnauthorizedException($response);
        }
        if (429 === $status) {
        }
        if (500 === $status) {
            throw new \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Exception\ExportRecordsGPXInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['apikey'];
    }
}