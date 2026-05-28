<?php

namespace Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Endpoint;

class GetDataset extends \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Runtime\Client\Endpoint
{
    protected $dataset_id;
    protected $accept;
    /**
    * Returns a list of available endpoints for the specified dataset, with metadata and endpoints.
    *
    * The response includes the following links:
    * * the attachments endpoint
    * * the files endpoint
    * * the records endpoint
    * * the catalog endpoint.
    * @param string $datasetId The identifier of the dataset to be queried.
    
    You can find it in the "Information" tab of the dataset page or in the dataset URL, right after `/datasets/`.
    * @param array{
    *    "select"?: string, //Examples:
    - `select=size` - Example of select, which only return the "size" field.
    - `select=size * 2 as bigger_size` - Example of a complex expression with a label, which returns a new field named "bigger_size" and containing the double of size field value.
    - `select=dataset_id, fields` - Example of a select in catalog ODSQL query to only retrieve dataset_id and schema of datasets.
    
    A select expression can be used to add, remove or change the fields to return.
    An expression can be:
     - a wildcard ('*'): all fields are returned.
     - A field name: only the specified field is returned.
     - An include/exclude function: All fields matching the include or exclude expression are included or excluded. This expression can contain wildcard.
     - A complex expression. The result of the expression is returned. A label can be set for this expression, and in that case, the field will be named after this label.
    *    "lang"?: string, //A language value.
    
    If specified, the `lang` value override the default language, which is "fr".
    The language is used to format string, for example in the `date_format` function.
    *    "timezone"?: string, //Set the timezone for datetime fields.
    
    Timezone IDs are defined by the [Unicode CLDR project](https://github.com/unicode-org/cldr). The list of timezone IDs is available in [timezone.xml](https://github.com/unicode-org/cldr/blob/master/common/bcp47/timezone.xml).
    *    "include_links"?: bool, //If set to `true`, this parameter will add HATEOAS links in the response.
    *    "include_app_metas"?: bool, //If set to `true`, this parameter will add application metadata to the response.
    * } $queryParameters
    * @param array $accept Accept content header application/json; charset=utf-8json|application/json; charset=utf-8
    */
    public function __construct(string $datasetId, array $queryParameters = [], array $accept = [])
    {
        $this->dataset_id = $datasetId;
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{dataset_id}'], [$this->dataset_id], '/catalog/datasets/{dataset_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json; charset=utf-8json', 'application/json; charset=utf-8']];
        }
        return $this->accept;
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['select', 'lang', 'timezone', 'include_links', 'include_app_metas']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['timezone' => 'UTC', 'include_links' => false, 'include_app_metas' => false]);
        $optionsResolver->addAllowedTypes('select', ['string']);
        $optionsResolver->addAllowedTypes('lang', ['string']);
        $optionsResolver->addAllowedTypes('timezone', ['string']);
        $optionsResolver->addAllowedTypes('include_links', ['bool']);
        $optionsResolver->addAllowedTypes('include_app_metas', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Exception\GetDatasetUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Exception\GetDatasetInternalServerErrorException
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
            throw new \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Exception\GetDatasetUnauthorizedException($response);
        }
        if (429 === $status) {
        }
        if (500 === $status) {
            throw new \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Exception\GetDatasetInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['apikey'];
    }
}