<?php

namespace Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Endpoint;

class ExportCatalogCSV extends \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Runtime\Client\Endpoint
{
    /**
    * Export a catalog in CSV (Comma Separated Values). Specific parameters are described here
    * @param array{
    *    "delimiter"?: string, //Sets the field delimiter of the CSV export
    *    "list_separator"?: string, //Sets the separator character used for multivalued strings
    *    "quote_all"?: bool, //Set it to true to force quoting all strings, i.e. surrounding all strings with quote characters
    *    "with_bom"?: bool, //Set it to true to force the first characters of the CSV file to be a Unicode Byte Order Mask (0xFEFF). It usually makes Excel correctly open the output CSV file without warning.
    **Warning:** the default value of this parameter is `false` in v2.0 and `true` starting with v2.1
    * } $queryParameters
    */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/catalog/exports/csv';
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
        $optionsResolver->setDefaults(['delimiter' => ';', 'list_separator' => ',', 'quote_all' => false, 'with_bom' => false]);
        $optionsResolver->addAllowedTypes('delimiter', ['string']);
        $optionsResolver->addAllowedTypes('list_separator', ['string']);
        $optionsResolver->addAllowedTypes('quote_all', ['bool']);
        $optionsResolver->addAllowedTypes('with_bom', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Exception\ExportCatalogCSVUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Exception\ExportCatalogCSVInternalServerErrorException
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
            throw new \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Exception\ExportCatalogCSVUnauthorizedException($response);
        }
        if (429 === $status) {
        }
        if (500 === $status) {
            throw new \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Exception\ExportCatalogCSVInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['apikey'];
    }
}