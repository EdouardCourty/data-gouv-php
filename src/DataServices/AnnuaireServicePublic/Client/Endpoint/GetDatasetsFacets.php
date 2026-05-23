<?php

namespace Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Endpoint;

class GetDatasetsFacets extends \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Runtime\Client\Endpoint
{
    /**
    * Enumerate facet values for datasets and returns a list of values for each facet.
    * Can be used to implement guided navigation in large result sets.
    * @param array{
    *    "facet"?: string, //A facet is a field used for simple filtering (through the `refine` and `exclude` parameters) or exploration (with the `/facets` endpoint).
    
    It can also be a function such as `facet=facet(name="field_name")` which is identical to `facet=field_name`. But this `facet()` function
    can also take some optional arguments such as `disjunctive`, `hierarchical`, `separator`, `sort` and `limit`.
    
    * `disjunctive`: a boolean `true/false`, whether multiple values can be selected for the facet
    * `hierarchical`: a boolean `true/false` if the field is hierarchical. The separator must be given as the argument.
      For instance, you can do `facet=facet(name="filepath", hierarchical=true, separator="/")` to retrieve facets related to this field which might look like `"/home/user/file.txt"`
    * `separator`: a string, e.g. `/`, `-`, `;`
    * `sort`: a string which describes how to sort the facets. Possible arguments are `count` and `-count` for all field types, `alphanum` and `-alphanum` for `date`, `datetime` and `text`, `num` and `-num` for `decimal` and `int`
    * `limit`: an integer to limit the number of results
    *    "refine"?: string, //Example: `refine=modified:2020` - Return only the value `2020` from the `modified` facet.
    
    A facet filter used to limit the result set.
    Using this parameter, you can refine your query to display only the selected facet value in the response.
    
    Refinement uses the following syntax: `refine=<FACETNAME>:<FACETVALUE>`
    
    For date, and other hierarchical facets, when refining on one value, all second-level values related to that entry will appear in facets enumeration. For example, after refining on the year 2019, the related second-level month will appear. And when refining on August 2019, the third-level day will appear.
    
    **`refine` must not be confused with a `where` filter. Refining with a facet is equivalent to selecting an entry in the left navigation panel.**
    *    "exclude"?: string, //Examples:
    - `exclude=city:Paris` - Exclude the value `Paris` from the `city` facet. Facets enumeration will display `Paris` as `excluded` without any count information.
    - `exclude=modified:2019/12` - Exclude the value `2019/12` from the `modified` facet. Facets enumeration will display `2020` as `excluded` without any count information.
    
    A facet filter used to exclude a facet value from the result set.
    Using this parameter, you can filter your query to exclude the selected facet value in the response.
    
    `exclude` uses the following syntax: `exclude=<FACETNAME>:<FACETVALUE>`
    
    **`exclude` must not be confused with a `where` filter. Excluding a facet value is equivalent to removing an entry in the left navigation panel.**
    *    "where"?: string, //A `where` filter is a text expression performing a simple full-text search that can also include logical operations
    (NOT, AND, OR...) and lots of other functions to perform complex and precise search operations.
    
    For more information, see [Opendatasoft Query Language (ODSQL)](<https://help.huwise.com/apis/ods-explore-v2/#section/Opendatasoft-Query-Language-(ODSQL)/Where-clause>) reference documentation.
    *    "timezone"?: string, //Set the timezone for datetime fields.
    
    Timezone IDs are defined by the [Unicode CLDR project](https://github.com/unicode-org/cldr). The list of timezone IDs is available in [timezone.xml](https://github.com/unicode-org/cldr/blob/master/common/bcp47/timezone.xml).
    * } $queryParameters
    */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/catalog/facets';
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
        $optionsResolver->setDefined(['facet', 'refine', 'exclude', 'where', 'timezone']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['timezone' => 'UTC']);
        $optionsResolver->addAllowedTypes('facet', ['string']);
        $optionsResolver->addAllowedTypes('refine', ['string']);
        $optionsResolver->addAllowedTypes('exclude', ['string']);
        $optionsResolver->addAllowedTypes('where', ['string']);
        $optionsResolver->addAllowedTypes('timezone', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Exception\GetDatasetsFacetsUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Exception\GetDatasetsFacetsInternalServerErrorException
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
            throw new \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Exception\GetDatasetsFacetsUnauthorizedException($response);
        }
        if (429 === $status) {
        }
        if (500 === $status) {
            throw new \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Exception\GetDatasetsFacetsInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['apikey'];
    }
}