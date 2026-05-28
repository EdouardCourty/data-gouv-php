<?php

namespace Ecourty\DataGouv\DataServices\CalendrierScolaire\Client;

class Client extends \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Runtime\Client\Client
{
    /**
    * Retrieve available datasets.
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
    *    "where"?: string, //A `where` filter is a text expression performing a simple full-text search that can also include logical operations
    (NOT, AND, OR...) and lots of other functions to perform complex and precise search operations.
    
    For more information, see [Opendatasoft Query Language (ODSQL)](<https://help.huwise.com/apis/ods-explore-v2/#section/Opendatasoft-Query-Language-(ODSQL)/Where-clause>) reference documentation.
    *    "order_by"?: string, //Example: `order_by=sum(age) desc, name asc`
    
    A comma-separated list of field names or aggregations to sort on, followed by an order (`asc` or `desc`).
    
    Results are sorted in ascending order by default. To sort results in descending order, use the `desc` keyword.
    *    "limit"?: int, //Number of items to return.
    
    To use with the `offset` parameter to implement pagination.
    
    The maximum possible value depends on whether the query contains a `group_by` clause or not.
    
    For a query **without** a `group_by`:
     - the maximum value for `limit` is 100,
     - `offset+limit` should be less than 10000
    
    For a query **with** a `group_by`:
     - the maximum value for `limit` is 20000,
     - `offset+limit` should be less than 20000
    
    **Note:** If you need more results, please use the /exports endpoint.
    *    "offset"?: int, //Index of the first item to return (starting at 0).
    
    To use with the `limit` parameter to implement pagination.
    
    **Note:** the maximum value depends on the type of query, see the note on `limit` for the details
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
    *    "lang"?: string, //A language value.
    
    If specified, the `lang` value override the default language, which is "fr".
    The language is used to format string, for example in the `date_format` function.
    *    "timezone"?: string, //Set the timezone for datetime fields.
    
    Timezone IDs are defined by the [Unicode CLDR project](https://github.com/unicode-org/cldr). The list of timezone IDs is available in [timezone.xml](https://github.com/unicode-org/cldr/blob/master/common/bcp47/timezone.xml).
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\GetDatasetsUnauthorizedException
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\GetDatasetsInternalServerErrorException
    *
    * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
    */
    public function getDatasets(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Endpoint\GetDatasets($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\ListExportFormatsUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\ListExportFormatsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function listExportFormats(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Endpoint\ListExportFormats(), $fetch);
    }
    /**
    * Export a catalog in the desired format.
    * @param string $format
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
    *    "where"?: string, //A `where` filter is a text expression performing a simple full-text search that can also include logical operations
    (NOT, AND, OR...) and lots of other functions to perform complex and precise search operations.
    
    For more information, see [Opendatasoft Query Language (ODSQL)](<https://help.huwise.com/apis/ods-explore-v2/#section/Opendatasoft-Query-Language-(ODSQL)/Where-clause>) reference documentation.
    *    "order_by"?: string, //Example: `order_by=sum(age) desc, name asc`
    
    A comma-separated list of field names or aggregations to sort on, followed by an order (`asc` or `desc`).
    
    Results are sorted in ascending order by default. To sort results in descending order, use the `desc` keyword.
    *    "limit"?: int, //Number of items to return in export.
    
    Use -1 (default) to retrieve all records
    *    "offset"?: int, //Index of the first item to return (starting at 0).
    
    To use with the `limit` parameter to implement pagination.
    
    **Note:** the maximum value depends on the type of query, see the note on `limit` for the details
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
    *    "lang"?: string, //A language value.
    
    If specified, the `lang` value override the default language, which is "fr".
    The language is used to format string, for example in the `date_format` function.
    *    "timezone"?: string, //Set the timezone for datetime fields.
    
    Timezone IDs are defined by the [Unicode CLDR project](https://github.com/unicode-org/cldr). The list of timezone IDs is available in [timezone.xml](https://github.com/unicode-org/cldr/blob/master/common/bcp47/timezone.xml).
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\ExportDatasetsUnauthorizedException
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\ExportDatasetsInternalServerErrorException
    *
    * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
    */
    public function exportDatasets(string $format, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Endpoint\ExportDatasets($format, $queryParameters), $fetch);
    }
    /**
    * Export a catalog in CSV (Comma Separated Values). Specific parameters are described here
    * @param array{
    *    "delimiter"?: string, //Sets the field delimiter of the CSV export
    *    "list_separator"?: string, //Sets the separator character used for multivalued strings
    *    "quote_all"?: bool, //Set it to true to force quoting all strings, i.e. surrounding all strings with quote characters
    *    "with_bom"?: bool, //Set it to true to force the first characters of the CSV file to be a Unicode Byte Order Mask (0xFEFF). It usually makes Excel correctly open the output CSV file without warning.
    **Warning:** the default value of this parameter is `false` in v2.0 and `true` starting with v2.1
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\ExportCatalogCSVUnauthorizedException
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\ExportCatalogCSVInternalServerErrorException
    *
    * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
    */
    public function exportCatalogCSV(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Endpoint\ExportCatalogCSV($queryParameters), $fetch);
    }
    /**
     * Export a catalog in RDF/XML described with DCAT (Data Catalog Vocabulary). Specific parameters are described here
     * @param string $dcatApFormat
     * @param array{
     *    "include_exports"?: string, //Sets the datasets exports exposed in the DCAT export. By default, all exports are exposed.
     *    "use_labels_in_exports"?: bool, //If set to `true`, this parameter will make distributions output the label of each field rather than its name. This parameter only applies on distributions that contain a list of the fields in their output (e.g., CSV, XLSX).
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\ExportCatalogDCATUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\ExportCatalogDCATInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function exportCatalogDCAT(string $dcatApFormat, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Endpoint\ExportCatalogDCAT($dcatApFormat, $queryParameters), $fetch);
    }
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
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\GetDatasetsFacetsUnauthorizedException
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\GetDatasetsFacetsInternalServerErrorException
    *
    * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
    */
    public function getDatasetsFacets(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Endpoint\GetDatasetsFacets($queryParameters), $fetch);
    }
    /**
    * Perform a query on dataset records.
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
    *    "where"?: string, //A `where` filter is a text expression performing a simple full-text search that can also include logical operations
    (NOT, AND, OR...) and lots of other functions to perform complex and precise search operations.
    
    For more information, see [Opendatasoft Query Language (ODSQL)](<https://help.huwise.com/apis/ods-explore-v2/#section/Opendatasoft-Query-Language-(ODSQL)/Where-clause>) reference documentation.
    *    "group_by"?: string, //Example: `group_by=city_field as city`
    
    A group by expression defines a grouping function for an aggregation.
    It can be:
    - a field name: group result by each value of this field
    - a range function: group result by range
    - a date function: group result by date
    
    It is possible to specify a custom name with the 'as name' notation.
    *    "order_by"?: string, //Example: `order_by=sum(age) desc, name asc`
    
    A comma-separated list of field names or aggregations to sort on, followed by an order (`asc` or `desc`).
    
    Results are sorted in ascending order by default. To sort results in descending order, use the `desc` keyword.
    *    "limit"?: int, //Number of items to return.
    
    To use with the `offset` parameter to implement pagination.
    
    The maximum possible value depends on whether the query contains a `group_by` clause or not.
    
    For a query **without** a `group_by`:
     - the maximum value for `limit` is 100,
     - `offset+limit` should be less than 10000
    
    For a query **with** a `group_by`:
     - the maximum value for `limit` is 20000,
     - `offset+limit` should be less than 20000
    
    **Note:** If you need more results, please use the /exports endpoint.
    *    "offset"?: int, //Index of the first item to return (starting at 0).
    
    To use with the `limit` parameter to implement pagination.
    
    **Note:** the maximum value depends on the type of query, see the note on `limit` for the details
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
    *    "lang"?: string, //A language value.
    
    If specified, the `lang` value override the default language, which is "fr".
    The language is used to format string, for example in the `date_format` function.
    *    "timezone"?: string, //Set the timezone for datetime fields.
    
    Timezone IDs are defined by the [Unicode CLDR project](https://github.com/unicode-org/cldr). The list of timezone IDs is available in [timezone.xml](https://github.com/unicode-org/cldr/blob/master/common/bcp47/timezone.xml).
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\GetRecordsUnauthorizedException
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\GetRecordsInternalServerErrorException
    *
    * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
    */
    public function getRecords(string $datasetId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Endpoint\GetRecords($datasetId, $queryParameters), $fetch);
    }
    /**
    * List available export formats
    * @param string $datasetId The identifier of the dataset to be queried.
    
    You can find it in the "Information" tab of the dataset page or in the dataset URL, right after `/datasets/`.
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\ListDatasetExportFormatsUnauthorizedException
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\ListDatasetExportFormatsInternalServerErrorException
    *
    * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
    */
    public function listDatasetExportFormats(string $datasetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Endpoint\ListDatasetExportFormats($datasetId), $fetch);
    }
    /**
    * Export a dataset in the desired format.
    * **Note:** The `group_by` parameter is only available on exports starting with the v2.1
    * @param string $datasetId The identifier of the dataset to be queried.
    
    You can find it in the "Information" tab of the dataset page or in the dataset URL, right after `/datasets/`.
    * @param string $format
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
    *    "where"?: string, //A `where` filter is a text expression performing a simple full-text search that can also include logical operations
    (NOT, AND, OR...) and lots of other functions to perform complex and precise search operations.
    
    For more information, see [Opendatasoft Query Language (ODSQL)](<https://help.huwise.com/apis/ods-explore-v2/#section/Opendatasoft-Query-Language-(ODSQL)/Where-clause>) reference documentation.
    *    "order_by"?: string, //Example: `order_by=sum(age) desc, name asc`
    
    A comma-separated list of field names or aggregations to sort on, followed by an order (`asc` or `desc`).
    
    Results are sorted in ascending order by default. To sort results in descending order, use the `desc` keyword.
    *    "limit"?: int, //Number of items to return in export.
    
    Use -1 (default) to retrieve all records
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
    *    "lang"?: string, //A language value.
    
    If specified, the `lang` value override the default language, which is "fr".
    The language is used to format string, for example in the `date_format` function.
    *    "timezone"?: string, //Set the timezone for datetime fields.
    
    Timezone IDs are defined by the [Unicode CLDR project](https://github.com/unicode-org/cldr). The list of timezone IDs is available in [timezone.xml](https://github.com/unicode-org/cldr/blob/master/common/bcp47/timezone.xml).
    *    "use_labels"?: bool, //If set to `true`, this parameter will make exports output the label of each field rather than its name.
    
    This parameter only makes sense for formats that contain a list of the fields in their output.
    *    "compressed"?: bool, //If set to `true`, this parameter can compress the output file of a specific export format with GZIP, e.g. `.csv.gzip`.
    *    "epsg"?: int, //This parameter sets the EPSG code to project shapes into for formats that support geometric features.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\ExportRecordsUnauthorizedException
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\ExportRecordsInternalServerErrorException
    *
    * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
    */
    public function exportRecords(string $datasetId, string $format, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Endpoint\ExportRecords($datasetId, $format, $queryParameters), $fetch);
    }
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
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\ExportRecordsCSVUnauthorizedException
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\ExportRecordsCSVInternalServerErrorException
    *
    * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
    */
    public function exportRecordsCSV(string $datasetId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Endpoint\ExportRecordsCSV($datasetId, $queryParameters), $fetch);
    }
    /**
    * Export a dataset in Parquet. Specific parameters are described here
    * @param string $datasetId The identifier of the dataset to be queried.
    
    You can find it in the "Information" tab of the dataset page or in the dataset URL, right after `/datasets/`.
    * @param array{
    *    "parquet_compression"?: string, //Sets the compression parameter for the Parquet export file
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\ExportRecordsParquetUnauthorizedException
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\ExportRecordsParquetInternalServerErrorException
    *
    * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
    */
    public function exportRecordsParquet(string $datasetId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Endpoint\ExportRecordsParquet($datasetId, $queryParameters), $fetch);
    }
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
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\ExportRecordsGPXUnauthorizedException
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\ExportRecordsGPXInternalServerErrorException
    *
    * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
    */
    public function exportRecordsGPX(string $datasetId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Endpoint\ExportRecordsGPX($datasetId, $queryParameters), $fetch);
    }
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
    * } $queryParameters
    * @param array $accept Accept content header application/json; charset=utf-8json|application/json; charset=utf-8
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\GetDatasetUnauthorizedException
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\GetDatasetInternalServerErrorException
    *
    * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
    */
    public function getDataset(string $datasetId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Endpoint\GetDataset($datasetId, $queryParameters, $accept), $fetch);
    }
    /**
    * Enumerates facet values for records and returns a list of values for each facet.
    * Can be used to implement guided navigation in large result sets.
    *
    * @param string $datasetId The identifier of the dataset to be queried.
    
    You can find it in the "Information" tab of the dataset page or in the dataset URL, right after `/datasets/`.
    * @param array{
    *    "where"?: string, //A `where` filter is a text expression performing a simple full-text search that can also include logical operations
    (NOT, AND, OR...) and lots of other functions to perform complex and precise search operations.
    
    For more information, see [Opendatasoft Query Language (ODSQL)](<https://help.huwise.com/apis/ods-explore-v2/#section/Opendatasoft-Query-Language-(ODSQL)/Where-clause>) reference documentation.
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
    *    "facet"?: string, //A facet is a field used for simple filtering (through the `refine` and `exclude` parameters) or exploration (with the `/facets` endpoint).
    
    It can also be a function such as `facet=facet(name="field_name")` which is identical to `facet=field_name`. But this `facet()` function
    can also take some optional arguments such as `disjunctive`, `hierarchical`, `separator`, `sort` and `limit`.
    
    * `disjunctive`: a boolean `true/false`, whether multiple values can be selected for the facet
    * `hierarchical`: a boolean `true/false` if the field is hierarchical. The separator must be given as the argument.
      For instance, you can do `facet=facet(name="filepath", hierarchical=true, separator="/")` to retrieve facets related to this field which might look like `"/home/user/file.txt"`
    * `separator`: a string, e.g. `/`, `-`, `;`
    * `sort`: a string which describes how to sort the facets. Possible arguments are `count` and `-count` for all field types, `alphanum` and `-alphanum` for `date`, `datetime` and `text`, `num` and `-num` for `decimal` and `int`
    * `limit`: an integer to limit the number of results
    *    "lang"?: string, //A language value.
    
    If specified, the `lang` value override the default language, which is "fr".
    The language is used to format string, for example in the `date_format` function.
    *    "timezone"?: string, //Set the timezone for datetime fields.
    
    Timezone IDs are defined by the [Unicode CLDR project](https://github.com/unicode-org/cldr). The list of timezone IDs is available in [timezone.xml](https://github.com/unicode-org/cldr/blob/master/common/bcp47/timezone.xml).
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\GetRecordsFacetsUnauthorizedException
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\GetRecordsFacetsInternalServerErrorException
    *
    * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
    */
    public function getRecordsFacets(string $datasetId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Endpoint\GetRecordsFacets($datasetId, $queryParameters), $fetch);
    }
    /**
    * Returns a list of all available attachments for a dataset.
    *
    * @param string $datasetId The identifier of the dataset to be queried.
    
    You can find it in the "Information" tab of the dataset page or in the dataset URL, right after `/datasets/`.
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\GetDatasetAttachmentsUnauthorizedException
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\GetDatasetAttachmentsInternalServerErrorException
    *
    * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
    */
    public function getDatasetAttachments(string $datasetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Endpoint\GetDatasetAttachments($datasetId), $fetch);
    }
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
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\GetRecordUnauthorizedException
    * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\GetRecordInternalServerErrorException
    *
    * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
    */
    public function getRecord(string $datasetId, string $recordId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Endpoint\GetRecord($datasetId, $recordId, $queryParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://data.education.gouv.fr/api/explore/v2.0');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}