<?php

namespace Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Endpoint;

class ExportRecordsCSV extends \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Runtime\Client\Endpoint
{
    protected $dataset_id;
    /**
    * Export a dataset in CSV (Comma Separated Values). Specific parameters are described here
    * @param string $datasetId The identifier of the dataset to be queried.
    
    You can find it in the "Information" tab of the dataset page or in the dataset URL, right after `/datasets/`.
    * @param array{
    *    "delimiter"?: string, //Sets the field delimiter of the CSV export
    *    "list_separator"?: string, //Sets the separator character used for multivalued strings
    *    "quote_all"?: bool, //Set it to true to force quoting all strings, i.e. surrounding all strings with quote characters
    *    "with_bom"?: bool, //Set it to true to force the first characters of the CSV file to be a Unicode Byte Order Mask (0xFEFF). It usually makes Excel correctly open the output CSV file without warning.
    **Warning:** the default value of this parameter is `false` in v2.0 and `true` starting with v2.1
    * } $queryParameters
    */
    public function __construct(string $datasetId, array $queryParameters = [])
    {
        $this->dataset_id = $datasetId;
        $this->queryParameters = $queryParameters;
    }
    use \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{dataset_id}'], [$this->dataset_id], '/catalog/datasets/{dataset_id}/exports/csv');
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
        $optionsResolver->setDefined(['delimiter', 'list_separator', 'quote_all', 'with_bom']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['delimiter' => ';', 'list_separator' => ',', 'quote_all' => false, 'with_bom' => true]);
        $optionsResolver->addAllowedTypes('delimiter', ['string']);
        $optionsResolver->addAllowedTypes('list_separator', ['string']);
        $optionsResolver->addAllowedTypes('quote_all', ['bool']);
        $optionsResolver->addAllowedTypes('with_bom', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Exception\ExportRecordsCSVUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Exception\ExportRecordsCSVInternalServerErrorException
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
            throw new \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Exception\ExportRecordsCSVUnauthorizedException($response);
        }
        if (429 === $status) {
        }
        if (500 === $status) {
            throw new \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Exception\ExportRecordsCSVInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['apikey'];
    }
}