<?php

namespace Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Endpoint;

class GetRecord extends \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Runtime\Client\Endpoint
{
    protected $dataset_id;
    protected $record_id;
    /**
    * Reads a single dataset record based on its identifier.
    *
    * @param string $datasetId The identifier of the dataset to be queried.
    
    You can find it in the "Information" tab of the dataset page or in the dataset URL, right after `/datasets/`.
    * @param string $recordId Record identifier
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
    * } $queryParameters
    */
    public function __construct(string $datasetId, string $recordId, array $queryParameters = [])
    {
        $this->dataset_id = $datasetId;
        $this->record_id = $recordId;
        $this->queryParameters = $queryParameters;
    }
    use \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{dataset_id}', '{record_id}'], [$this->dataset_id, $this->record_id], '/catalog/datasets/{dataset_id}/records/{record_id}');
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
        $optionsResolver->setDefined(['select', 'lang', 'timezone']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['timezone' => 'UTC']);
        $optionsResolver->addAllowedTypes('select', ['string']);
        $optionsResolver->addAllowedTypes('lang', ['string']);
        $optionsResolver->addAllowedTypes('timezone', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Exception\GetRecordUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Exception\GetRecordInternalServerErrorException
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
            throw new \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Exception\GetRecordUnauthorizedException($response);
        }
        if (429 === $status) {
        }
        if (500 === $status) {
            throw new \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Exception\GetRecordInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['apikey'];
    }
}