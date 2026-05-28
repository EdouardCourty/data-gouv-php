<?php

namespace Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Endpoint;

class ExportCatalogDCAT extends \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Runtime\Client\Endpoint
{
    protected $dcat_ap_format;
    /**
     * Export a catalog in RDF/XML described with DCAT (Data Catalog Vocabulary). Specific parameters are described here
     * @param string $dcatApFormat
     * @param array{
     *    "include_exports"?: string, //Sets the datasets exports exposed in the DCAT export. By default, all exports are exposed.
     *    "use_labels_in_exports"?: bool, //If set to `true`, this parameter will make distributions output the label of each field rather than its name. This parameter only applies on distributions that contain a list of the fields in their output (e.g., CSV, XLSX).
     * } $queryParameters
     */
    public function __construct(string $dcatApFormat, array $queryParameters = [])
    {
        $this->dcat_ap_format = $dcatApFormat;
        $this->queryParameters = $queryParameters;
    }
    use \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{dcat_ap_format}'], [$this->dcat_ap_format], '/catalog/exports/dcat{dcat_ap_format}');
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
        $optionsResolver->setDefined(['include_exports', 'use_labels_in_exports']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['use_labels_in_exports' => true]);
        $optionsResolver->addAllowedTypes('include_exports', ['string']);
        $optionsResolver->addAllowedTypes('use_labels_in_exports', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Exception\ExportCatalogDCATUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Exception\ExportCatalogDCATInternalServerErrorException
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
            throw new \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Exception\ExportCatalogDCATUnauthorizedException($response);
        }
        if (429 === $status) {
        }
        if (500 === $status) {
            throw new \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Exception\ExportCatalogDCATInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['apikey'];
    }
}