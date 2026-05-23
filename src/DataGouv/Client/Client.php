<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client;

class Client extends Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function reasonCategories(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ReasonCategories(), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int    $page The page to fetch
     * @var int    $page_size The page size to fetch
     * @var string $user Filter activities for that particular user
     * @var string $organization Filter activities for that particular organization
     * @var string $related_to Filter activities for that particular object id (ex : reuse, dataset, etc.)
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\ActivityPage : \Psr\Http\Message\ResponseInterface)
     */
    public function activity(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\Activity($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function avatars(string $identifier, int $size, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\Avatars($identifier, $size), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\CreateContactPointBadRequestException
     *
     * @return ($fetch is 'object' ? null|Model\ContactPointRead : \Psr\Http\Message\ResponseInterface)
     */
    public function createContactPoint(Model\ContactPointWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateContactPoint($payload, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\ContactPointRoles[] : \Psr\Http\Message\ResponseInterface)
     */
    public function contactPointRoles(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ContactPointRoles($headerParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\DeleteContactPointNotFoundException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteContactPoint(string $contactPoint, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteContactPoint($contactPoint), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetContactPointNotFoundException
     *
     * @return ($fetch is 'object' ? null|Model\ContactPointRead : \Psr\Http\Message\ResponseInterface)
     */
    public function getContactPoint(string $contactPoint, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetContactPoint($contactPoint, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\UpdateContactPointBadRequestException
     * @throws Exception\UpdateContactPointNotFoundException
     *
     * @return ($fetch is 'object' ? null|Model\ContactPointRead : \Psr\Http\Message\ResponseInterface)
     */
    public function updateContactPoint(string $contactPoint, Model\ContactPointWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateContactPoint($contactPoint, $payload, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int    $page The page to display
     * @var int    $page_size The page size
     * @var string $sort The field (and direction) on which sorting apply
     * @var string $q
     * @var string $topic
     * @var string $reuse
     * @var string $owner
     * @var string $organization
     * @var string $organization_badge
     * @var string $access_type
     * @var string $tag
     * @var bool   $featured
     * @var string $contact_point
     * @var string $dataset
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\DataservicePage : \Psr\Http\Message\ResponseInterface)
     */
    public function listDataservices(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListDataservices($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\CreateDataserviceBadRequestException
     *
     * @return ($fetch is 'object' ? null|Model\DataserviceRead : \Psr\Http\Message\ResponseInterface)
     */
    public function createDataservice(Model\DataserviceWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateDataservice($payload, $headerParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function recentDataservicesAtomFeed(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RecentDataservicesAtomFeed(), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var bool $send_legal_notice Send formal legal notice with appeal information to owner (admin only)
     *           }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteDataservice(string $dataservice, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteDataservice($dataservice, $queryParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\DataserviceRead : \Psr\Http\Message\ResponseInterface)
     */
    public function getDataservice(string $dataservice, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetDataservice($dataservice, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\UpdateDataserviceBadRequestException
     *
     * @return ($fetch is 'object' ? null|Model\DataserviceRead : \Psr\Http\Message\ResponseInterface)
     */
    public function updateDataservice(string $dataservice, Model\DataserviceWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateDataservice($dataservice, $payload, $headerParameters), $fetch);
    }

    /**
     * @param string                         $dataservice      The dataservice ID or slug
     * @param Model\DataserviceDatasetsAdd[] $payload
     * @param array                          $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\DataserviceDatasetsCreateBadRequestException
     * @throws Exception\DataserviceDatasetsCreateForbiddenException
     * @throws Exception\DataserviceDatasetsCreateNotFoundException
     * @throws Exception\DataserviceDatasetsCreateGoneException
     *
     * @return ($fetch is 'object' ? null|Model\DataserviceRead : \Psr\Http\Message\ResponseInterface)
     */
    public function dataserviceDatasetsCreate(string $dataservice, array $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DataserviceDatasetsCreate($dataservice, $payload, $headerParameters), $fetch);
    }

    /**
     * @param string $dataservice The dataservice ID or slug
     * @param string $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\DeleteDataserviceDatasetApiDataservicesDataserviceDataserviceDatasetsDatasetDatasetNotFoundException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteDataserviceDatasetApiDataservicesDataserviceDataserviceDatasetsDatasetDataset(string $dataservice, string $dataset, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteDataserviceDatasetApiDataservicesDataserviceDataserviceDatasetsDatasetDataset($dataservice, $dataset), $fetch);
    }

    /**
     * @param string $dataservice      The dataservice ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\DataserviceRead : \Psr\Http\Message\ResponseInterface)
     */
    public function unfeatureDataservice(string $dataservice, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UnfeatureDataservice($dataservice, $headerParameters), $fetch);
    }

    /**
     * @param string $dataservice      The dataservice ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\DataserviceRead : \Psr\Http\Message\ResponseInterface)
     */
    public function featureDataservice(string $dataservice, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\FeatureDataservice($dataservice, $headerParameters), $fetch);
    }

    /**
     * @param string $dataservice The dataservice ID or slug
     * @param string $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\RdfDataserviceNotFoundException
     * @throws Exception\RdfDataserviceGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function rdfDataservice(string $dataservice, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RdfDataservice($dataservice), $fetch);
    }

    /**
     * @param string $dataservice The dataservice ID or slug
     * @param string $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\RdfDataserviceFormatNotFoundException
     * @throws Exception\RdfDataserviceFormatGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function rdfDataserviceFormat(string $dataservice, string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RdfDataserviceFormat($dataservice, $format), $fetch);
    }

    /**
     * Returns the number of followers left after the operation
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function unfollowDataservice(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UnfollowDataservice($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int    $page The page to fetch
     * @var int    $page_size The page size to fetch
     * @var string $user Filter follower by user, it allows to check if a user is following the object
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\FollowPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listDataserviceFollowers(string $id, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListDataserviceFollowers($id, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Returns the number of followers left after the operation
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function followDataservice(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\FollowDataservice($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $q The search query
     * @var string $sort The field (and direction) on which sorting apply
     * @var int    $page The page to display
     * @var int    $page_size The page size
     * @var array  $tag
     * @var string $license
     * @var bool   $featured If set to true, it will filter on featured datasets only. If set to false, it will exclude featured datasets.
     * @var string $geozone
     * @var string $granularity
     * @var string $temporal_coverage
     * @var string $access_type
     * @var string $organization
     * @var string $badge
     * @var string $organization_badge
     * @var string $owner
     * @var string $followed_by (beta, subject to change/be removed)
     * @var string $format
     * @var string $schema
     * @var string $schema_version
     * @var string $topic
     * @var string $credit
     * @var string $dataservice
     * @var string $reuse
     * @var bool   $archived If set to true, it will filter on archived datasets only. If set to false, it will exclude archived datasets. User must be authenticated and results are limited to user visibility
     * @var bool   $deleted If set to true, it will filter on deleted datasets only. If set to false, it will exclude deleted datasets. User must be authenticated and results are limited to user visibility
     * @var bool   $private If set to true, it will filter on private datasets only. If set to false, it will exclude private datasets. User must be authenticated and results are limited to user visibility
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\DatasetPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listDatasets(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListDatasets($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\CreateDatasetBadRequestException
     *
     * @return ($fetch is 'object' ? null|Model\Dataset : \Psr\Http\Message\ResponseInterface)
     */
    public function createDataset(Model\Dataset $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateDataset($payload, $headerParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function availableDatasetBadges(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\AvailableDatasetBadges(), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $sort The sorting attribute
     * @var int    $page The page to fetch
     * @var int    $page_size The page size to fetch
     * @var string $organization Filter activities for that particular organization
     * @var string $dataset Filter activities for that particular dataset
     * @var string $owner Filter activities for that particular user
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\CommunityResourcePage : \Psr\Http\Message\ResponseInterface)
     */
    public function listCommunityResources(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListCommunityResources($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\CreateCommunityResourceBadRequestException
     *
     * @return ($fetch is 'object' ? null|Model\CommunityResource : \Psr\Http\Message\ResponseInterface)
     */
    public function createCommunityResource(Model\CommunityResource $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateCommunityResource($payload, $headerParameters), $fetch);
    }

    /**
     * @param string $community       The community resource unique identifier
     * @param array  $queryParameters {
     *
     * @var string $dataset The dataset ID or slug
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteCommunityResource(string $community, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteCommunityResource($community, $queryParameters), $fetch);
    }

    /**
     * @param string $community       The community resource unique identifier
     * @param array  $queryParameters {
     *
     * @var string $dataset The dataset ID or slug
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\CommunityResource : \Psr\Http\Message\ResponseInterface)
     */
    public function retrieveCommunityResource(string $community, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RetrieveCommunityResource($community, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param string $community       The community resource unique identifier
     * @param array  $queryParameters {
     *
     * @var string $dataset The dataset ID or slug
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\UpdateCommunityResourceBadRequestException
     *
     * @return ($fetch is 'object' ? null|Model\CommunityResource : \Psr\Http\Message\ResponseInterface)
     */
    public function updateCommunityResource(string $community, Model\CommunityResource $payload, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateCommunityResource($community, $payload, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param string $community       The community resource unique identifier
     * @param array  $queryParameters {
     *
     * @var string $dataset The dataset ID or slug
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\UploadCommunityResourceBadRequestException
     * @throws Exception\UploadCommunityResourceUnsupportedMediaTypeException
     *
     * @return ($fetch is 'object' ? null|Model\UploadedCommunityResource : \Psr\Http\Message\ResponseInterface)
     */
    public function uploadCommunityResource(string $community, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UploadCommunityResource($community, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function allowedExtensions(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\AllowedExtensions(), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\Frequency[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listFrequencies(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListFrequencies($headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\License[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listLicenses(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListLicenses($headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $dataset The dataset ID or slug
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function redirectResource(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RedirectResource($id, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $q The search query
     * @var string $sort The field (and direction) on which sorting apply
     * @var int    $page The page to display
     * @var int    $page_size The page size
     * @var array  $tag
     * @var string $license
     * @var bool   $featured If set to true, it will filter on featured datasets only. If set to false, it will exclude featured datasets.
     * @var string $geozone
     * @var string $granularity
     * @var string $temporal_coverage
     * @var string $access_type
     * @var string $organization
     * @var string $badge
     * @var string $organization_badge
     * @var string $owner
     * @var string $followed_by (beta, subject to change/be removed)
     * @var string $format
     * @var string $schema
     * @var string $schema_version
     * @var string $topic
     * @var string $credit
     * @var string $dataservice
     * @var string $reuse
     * @var bool   $archived If set to true, it will filter on archived datasets only. If set to false, it will exclude archived datasets. User must be authenticated and results are limited to user visibility
     * @var bool   $deleted If set to true, it will filter on deleted datasets only. If set to false, it will exclude deleted datasets. User must be authenticated and results are limited to user visibility
     * @var bool   $private If set to true, it will filter on private datasets only. If set to false, it will exclude private datasets. User must be authenticated and results are limited to user visibility
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function recentDatasetsAtomFeed(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RecentDatasetsAtomFeed($queryParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\ResourceType[] : \Psr\Http\Message\ResponseInterface)
     */
    public function resourceTypes(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ResourceTypes($headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\CatalogSchema[] : \Psr\Http\Message\ResponseInterface)
     */
    public function schemas(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\Schemas($headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $q The string to autocomplete/suggest
     * @var int    $size The amount of suggestion to fetch
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\DatasetSuggestion : \Psr\Http\Message\ResponseInterface)
     */
    public function suggestDatasets(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\SuggestDatasets($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $q The string to autocomplete/suggest
     * @var int    $size The amount of suggestion to fetch
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function suggestFormats(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\SuggestFormats($queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $q The string to autocomplete/suggest
     * @var int    $size The amount of suggestion to fetch
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function suggestMime(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\SuggestMime($queryParameters), $fetch);
    }

    /**
     * @param string $dataset         The dataset ID or slug
     * @param array  $queryParameters {
     *
     * @var bool $send_legal_notice Send formal legal notice with appeal information to owner (admin only)
     *           }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\DeleteDatasetNotFoundException
     * @throws Exception\DeleteDatasetGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteDataset(string $dataset, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteDataset($dataset, $queryParameters), $fetch);
    }

    /**
     * @param string $dataset          The dataset ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetDatasetNotFoundException
     * @throws Exception\GetDatasetGoneException
     *
     * @return ($fetch is 'object' ? null|Model\Dataset : \Psr\Http\Message\ResponseInterface)
     */
    public function getDataset(string $dataset, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetDataset($dataset, $headerParameters), $fetch);
    }

    /**
     * @param string $dataset          The dataset ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\UpdateDatasetBadRequestException
     * @throws Exception\UpdateDatasetNotFoundException
     * @throws Exception\UpdateDatasetGoneException
     *
     * @return ($fetch is 'object' ? null|Model\Dataset : \Psr\Http\Message\ResponseInterface)
     */
    public function updateDataset(string $dataset, Model\Dataset $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateDataset($dataset, $payload, $headerParameters), $fetch);
    }

    /**
     * @param string $dataset          The dataset ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\BadgeRead : \Psr\Http\Message\ResponseInterface)
     */
    public function addDatasetBadge(string $dataset, Model\BadgeWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\AddDatasetBadge($dataset, $payload, $headerParameters), $fetch);
    }

    /**
     * @param string $dataset The dataset ID or slug
     * @param string $fetch   Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteDatasetBadge(string $badgeKind, string $dataset, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteDatasetBadge($badgeKind, $dataset), $fetch);
    }

    /**
     * @param string $dataset          The dataset ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\Dataset : \Psr\Http\Message\ResponseInterface)
     */
    public function unfeatureDataset(string $dataset, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UnfeatureDataset($dataset, $headerParameters), $fetch);
    }

    /**
     * @param string $dataset          The dataset ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\Dataset : \Psr\Http\Message\ResponseInterface)
     */
    public function featureDataset(string $dataset, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\FeatureDataset($dataset, $headerParameters), $fetch);
    }

    /**
     * @param string $dataset The dataset ID or slug
     * @param string $fetch   Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\RdfDatasetNotFoundException
     * @throws Exception\RdfDatasetGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function rdfDataset(string $dataset, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RdfDataset($dataset), $fetch);
    }

    /**
     * @param string $dataset The dataset ID or slug
     * @param string $fetch   Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\RdfDatasetFormatNotFoundException
     * @throws Exception\RdfDatasetFormatGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function rdfDatasetFormat(string $dataset, string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RdfDatasetFormat($dataset, $format), $fetch);
    }

    /**
     * @param string $dataset          The dataset ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\CreateResourceBadRequestException
     *
     * @return ($fetch is 'object' ? null|Model\Resource : \Psr\Http\Message\ResponseInterface)
     */
    public function createResource(string $dataset, Model\Resource $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateResource($dataset, $payload, $headerParameters), $fetch);
    }

    /**
     * @param string           $dataset          The dataset ID or slug
     * @param Model\Resource[] $payload
     * @param array            $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\UpdateResourcesBadRequestException
     *
     * @return ($fetch is 'object' ? null|Model\Resource[] : \Psr\Http\Message\ResponseInterface)
     */
    public function updateResources(string $dataset, array $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateResources($dataset, $payload, $headerParameters), $fetch);
    }

    /**
     * @param string $rid     The resource unique identifier
     * @param string $dataset The dataset ID or slug
     * @param string $fetch   Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteResource(string $rid, string $dataset, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteResource($rid, $dataset), $fetch);
    }

    /**
     * @param string $rid              The resource unique identifier
     * @param string $dataset          The dataset ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\Resource : \Psr\Http\Message\ResponseInterface)
     */
    public function getResource(string $rid, string $dataset, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetResource($rid, $dataset, $headerParameters), $fetch);
    }

    /**
     * @param string $rid              The resource unique identifier
     * @param string $dataset          The dataset ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\UpdateResourceBadRequestException
     *
     * @return ($fetch is 'object' ? null|Model\Resource : \Psr\Http\Message\ResponseInterface)
     */
    public function updateResource(string $rid, string $dataset, Model\Resource $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateResource($rid, $dataset, $payload, $headerParameters), $fetch);
    }

    /**
     * @param string $rid              The resource unique identifier
     * @param string $dataset          The dataset ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\UploadDatasetResourceBadRequestException
     * @throws Exception\UploadDatasetResourceUnsupportedMediaTypeException
     *
     * @return ($fetch is 'object' ? null|Model\UploadedResource : \Psr\Http\Message\ResponseInterface)
     */
    public function uploadDatasetResource(string $rid, string $dataset, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UploadDatasetResource($rid, $dataset, $headerParameters), $fetch);
    }

    /**
     * @param string $dataset        The dataset ID or slug
     * @param array  $formParameters {
     *
     * @var string|resource|\Psr\Http\Message\StreamInterface $file
     * @var string                                            $uuid
     * @var string                                            $filename
     * @var int                                               $partindex
     * @var int                                               $partbyteoffset
     * @var int                                               $totalparts
     * @var int                                               $chunksize
     *                                                        }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\UploadNewDatasetResourceBadRequestException
     * @throws Exception\UploadNewDatasetResourceUnsupportedMediaTypeException
     *
     * @return ($fetch is 'object' ? null|Model\UploadedResource : \Psr\Http\Message\ResponseInterface)
     */
    public function uploadNewDatasetResource(string $dataset, array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UploadNewDatasetResource($dataset, $formParameters, $headerParameters), $fetch);
    }

    /**
     * @param string $dataset        The dataset ID or slug
     * @param array  $formParameters {
     *
     * @var string|resource|\Psr\Http\Message\StreamInterface $file
     * @var string                                            $uuid
     * @var string                                            $filename
     * @var int                                               $partindex
     * @var int                                               $partbyteoffset
     * @var int                                               $totalparts
     * @var int                                               $chunksize
     *                                                        }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\UploadNewCommunityResourceBadRequestException
     * @throws Exception\UploadNewCommunityResourceUnsupportedMediaTypeException
     *
     * @return ($fetch is 'object' ? null|Model\UploadedCommunityResource : \Psr\Http\Message\ResponseInterface)
     */
    public function uploadNewCommunityResource(string $dataset, array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UploadNewCommunityResource($dataset, $formParameters, $headerParameters), $fetch);
    }

    /**
     * Returns the number of followers left after the operation
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function unfollowDataset(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UnfollowDataset($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int    $page The page to fetch
     * @var int    $page_size The page size to fetch
     * @var string $user Filter follower by user, it allows to check if a user is following the object
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\FollowPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listDatasetFollowers(string $id, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListDatasetFollowers($id, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Returns the number of followers left after the operation
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function followDataset(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\FollowDataset($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $q The search query
     * @var string $sort The field (and direction) on which sorting apply
     * @var bool   $closed Filters discussions on their closed status if specified
     * @var array  $for Filter discussions for a given subject
     * @var string $org Filter discussions for a given organization
     * @var string $user Filter discussions created by a user
     * @var int    $page The page to fetch
     * @var int    $page_size The page size to fetch
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\DiscussionPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listDiscussions(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListDiscussions($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\Discussion : \Psr\Http\Message\ResponseInterface)
     */
    public function createDiscussion(Model\DiscussionStart $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateDiscussion($payload, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var bool $send_legal_notice Send formal legal notice with appeal information to owner (admin only)
     *           }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\DeleteDiscussionForbiddenException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteDiscussion(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteDiscussion($id, $queryParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\Discussion : \Psr\Http\Message\ResponseInterface)
     */
    public function getDiscussion(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetDiscussion($id, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\CommentDiscussionForbiddenException
     *
     * @return ($fetch is 'object' ? null|Model\Discussion : \Psr\Http\Message\ResponseInterface)
     */
    public function commentDiscussion(string $id, Model\DiscussionResponse $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CommentDiscussion($id, $payload, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\UpdateDiscussionForbiddenException
     *
     * @return ($fetch is 'object' ? null|Model\Discussion : \Psr\Http\Message\ResponseInterface)
     */
    public function updateDiscussion(string $id, Model\DiscussionEditComment $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateDiscussion($id, $payload, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var bool $send_legal_notice Send formal legal notice with appeal information to owner (admin only)
     *           }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\DeleteDiscussionCommentForbiddenException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteDiscussionComment(string $id, string $cidx, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteDiscussionComment($id, $cidx, $queryParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\EditDiscussionCommentForbiddenException
     *
     * @return ($fetch is 'object' ? null|Model\Discussion : \Psr\Http\Message\ResponseInterface)
     */
    public function editDiscussionComment(string $id, string $cidx, Model\DiscussionEditComment $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\EditDiscussionComment($id, $cidx, $payload, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\HarvestBackend : \Psr\Http\Message\ResponseInterface)
     */
    public function harvestBackends(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\HarvestBackends($headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int $page The page to fetch
     * @var int $page_size The page size to fetch
     *          }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\HarvestJob : \Psr\Http\Message\ResponseInterface)
     */
    public function getHarvestJob(string $ident, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetHarvestJob($ident, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\HarvestJobPreview : \Psr\Http\Message\ResponseInterface)
     */
    public function previewHarvestSourceConfig(Model\HarvestSource $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PreviewHarvestSourceConfig($payload, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\HarvestSource : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteHarvestSource(string $source, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteHarvestSource($source, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\HarvestSource : \Psr\Http\Message\ResponseInterface)
     */
    public function getHarvestSource(string $source, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetHarvestSource($source, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\HarvestSource : \Psr\Http\Message\ResponseInterface)
     */
    public function updateHarvestSource(string $source, Model\HarvestSource $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateHarvestSource($source, $payload, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int $page The page to fetch
     * @var int $page_size The page size to fetch
     *          }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\HarvestJobPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listHarvestJobs(string $source, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListHarvestJobs($source, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\HarvestJobPreview : \Psr\Http\Message\ResponseInterface)
     */
    public function previewHarvestSource(string $source, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PreviewHarvestSource($source, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\HarvestSource : \Psr\Http\Message\ResponseInterface)
     */
    public function runHarvestSource(string $source, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RunHarvestSource($source, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\HarvestSource : \Psr\Http\Message\ResponseInterface)
     */
    public function unscheduleHarvestSource(string $source, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UnscheduleHarvestSource($source, $headerParameters), $fetch);
    }

    /**
     * @param string $payload          A cron expression
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\HarvestSource : \Psr\Http\Message\ResponseInterface)
     */
    public function scheduleHarvestSource(string $source, string $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ScheduleHarvestSource($source, $payload, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\HarvestSource : \Psr\Http\Message\ResponseInterface)
     */
    public function validateHarvestSource(string $source, Model\HarvestSourceValidation $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ValidateHarvestSource($source, $payload, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int    $page The page to fetch
     * @var int    $page_size The page size to fetch
     * @var string $owner The organization or user ID to filter on
     * @var bool   $deleted Include sources flaggued as deleted
     * @var string $q The search query
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\HarvestSourcePage[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listHarvestSources(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListHarvestSources($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\HarvestSource : \Psr\Http\Message\ResponseInterface)
     */
    public function createHarvestSource(Model\HarvestSource $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateHarvestSource($payload, $headerParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteMe(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteMe(), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\User : \Psr\Http\Message\ResponseInterface)
     */
    public function getMe(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetMe($headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\UpdateMeBadRequestException
     *
     * @return ($fetch is 'object' ? null|Model\User : \Psr\Http\Message\ResponseInterface)
     */
    public function updateMe(Model\User $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateMe($payload, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\ApiTokenRead[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listApiTokens(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListApiTokens($headerParameters), $fetch);
    }

    /**
     * The plaintext token is returned only once.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\ApiTokenCreated : \Psr\Http\Message\ResponseInterface)
     */
    public function createApiToken(Model\ApiTokenWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateApiToken($payload, $headerParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\RevokeApiTokenNotFoundException
     * @throws Exception\RevokeApiTokenGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function revokeApiToken(string $apiToken, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RevokeApiToken($apiToken), $fetch);
    }

    /**
     * @param array $formParameters {
     *
     * @var string|resource|\Psr\Http\Message\StreamInterface $file
     * @var string                                            $bbox
     *                                                        }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\UploadedImage : \Psr\Http\Message\ResponseInterface)
     */
    public function myAvatar(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\MyAvatar($formParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\Dataset[] : \Psr\Http\Message\ResponseInterface)
     */
    public function myDatasets(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\MyDatasets($headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\MyMetrics[] : \Psr\Http\Message\ResponseInterface)
     */
    public function myMetrics(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\MyMetrics($headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $q The string to filter items
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\CommunityResource[] : \Psr\Http\Message\ResponseInterface)
     */
    public function myOrgCommunityResources(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\MyOrgCommunityResources($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $q The string to filter items
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\Dataset[] : \Psr\Http\Message\ResponseInterface)
     */
    public function myOrgDatasets(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\MyOrgDatasets($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $q The string to filter items
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\Discussion[] : \Psr\Http\Message\ResponseInterface)
     */
    public function myOrgDiscussions(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\MyOrgDiscussions($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\PendingInvitation[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listOrgInvitations(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListOrgInvitations($headerParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\AcceptOrgInvitationBadRequestException
     * @throws Exception\AcceptOrgInvitationNotFoundException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function acceptOrgInvitation(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\AcceptOrgInvitation($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\RefuseOrgInvitationBadRequestException
     * @throws Exception\RefuseOrgInvitationNotFoundException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function refuseOrgInvitation(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RefuseOrgInvitation($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $q The string to filter items
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\ReuseRead[] : \Psr\Http\Message\ResponseInterface)
     */
    public function myOrgReuses(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\MyOrgReuses($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\ReuseRead[] : \Psr\Http\Message\ResponseInterface)
     */
    public function myReuses(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\MyReuses($headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int    $page The page to display
     * @var int    $page_size The page size
     * @var string $sort The field (and direction) on which sorting apply
     * @var bool   $handled
     * @var string $user
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\NotificationPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listNotifications(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListNotifications($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\ReadNotificationBadRequestException
     *
     * @return ($fetch is 'object' ? null|Model\NotificationRead : \Psr\Http\Message\ResponseInterface)
     */
    public function readNotification(string $notification, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ReadNotification($notification, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $q The search query
     * @var string $sort The field (and direction) on which sorting apply
     * @var int    $page The page to display
     * @var int    $page_size The page size
     * @var string $badge
     * @var string $name
     * @var string $business_number_id
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\OrganizationPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listOrganizations(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListOrganizations($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\CreateOrganizationBadRequestException
     *
     * @return ($fetch is 'object' ? null|Model\OrganizationRead : \Psr\Http\Message\ResponseInterface)
     */
    public function createOrganization(Model\OrganizationWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateOrganization($payload, $headerParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function availableOrganizationBadges(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\AvailableOrganizationBadges(), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\OrganizationRole[] : \Psr\Http\Message\ResponseInterface)
     */
    public function orgRoles(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\OrgRoles($headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $q The string to autocomplete/suggest
     * @var int    $size The amount of suggestion to fetch
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\OrganizationSuggestion[] : \Psr\Http\Message\ResponseInterface)
     */
    public function suggestOrganizations(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\SuggestOrganizations($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Returns the number of followers left after the operation
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function unfollowOrganization(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UnfollowOrganization($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int    $page The page to fetch
     * @var int    $page_size The page size to fetch
     * @var string $user Filter follower by user, it allows to check if a user is following the object
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\FollowPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listOrganizationFollowers(string $id, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListOrganizationFollowers($id, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Returns the number of followers left after the operation
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function followOrganization(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\FollowOrganization($id), $fetch);
    }

    /**
     * @param string $org             The organization ID or slug
     * @param array  $queryParameters {
     *
     * @var bool $send_legal_notice Send formal legal notice with appeal information to owner (admin only)
     *           }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\DeleteOrganizationNotFoundException
     * @throws Exception\DeleteOrganizationGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteOrganization(string $org, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteOrganization($org, $queryParameters), $fetch);
    }

    /**
     * @param string $org              The organization ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetOrganizationNotFoundException
     * @throws Exception\GetOrganizationGoneException
     *
     * @return ($fetch is 'object' ? null|Model\OrganizationRead : \Psr\Http\Message\ResponseInterface)
     */
    public function getOrganization(string $org, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetOrganization($org, $headerParameters), $fetch);
    }

    /**
     * @param string $org              The organization ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\UpdateOrganizationBadRequestException
     * @throws Exception\UpdateOrganizationForbiddenException
     * @throws Exception\UpdateOrganizationNotFoundException
     * @throws Exception\UpdateOrganizationGoneException
     *
     * @return ($fetch is 'object' ? null|Model\OrganizationRead : \Psr\Http\Message\ResponseInterface)
     */
    public function updateOrganization(string $org, Model\OrganizationWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateOrganization($org, $payload, $headerParameters), $fetch);
    }

    /**
     * @param string $org              The organization ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\AssignmentRead[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listOrganizationAssignments(string $org, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListOrganizationAssignments($org, $headerParameters), $fetch);
    }

    /**
     * @param string $org              The organization ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\BadgeRead : \Psr\Http\Message\ResponseInterface)
     */
    public function addOrganizationBadge(string $org, Model\BadgeWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\AddOrganizationBadge($org, $payload, $headerParameters), $fetch);
    }

    /**
     * @param string $org   The organization ID or slug
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteOrganizationBadge(string $badgeKind, string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteOrganizationBadge($badgeKind, $org), $fetch);
    }

    /**
     * @param string $org   The organization ID or slug
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\RdfOrganizationNotFoundException
     * @throws Exception\RdfOrganizationGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function rdfOrganization(string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RdfOrganization($org), $fetch);
    }

    /**
     * @param string $org             The organization ID or slug
     * @param array  $queryParameters {
     *
     * @var string $q The search query
     * @var string $sort The field (and direction) on which sorting apply
     * @var int    $page The page to display
     * @var array  $tag
     * @var string $license
     * @var bool   $featured If set to true, it will filter on featured datasets only. If set to false, it will exclude featured datasets.
     * @var string $geozone
     * @var string $granularity
     * @var string $temporal_coverage
     * @var string $access_type
     * @var string $organization
     * @var string $badge
     * @var string $organization_badge
     * @var string $owner
     * @var string $followed_by (beta, subject to change/be removed)
     * @var string $format
     * @var string $schema
     * @var string $schema_version
     * @var string $topic
     * @var string $credit
     * @var string $dataservice
     * @var string $reuse
     * @var bool   $archived If set to true, it will filter on archived datasets only. If set to false, it will exclude archived datasets. User must be authenticated and results are limited to user visibility
     * @var bool   $deleted If set to true, it will filter on deleted datasets only. If set to false, it will exclude deleted datasets. User must be authenticated and results are limited to user visibility
     * @var bool   $private If set to true, it will filter on private datasets only. If set to false, it will exclude private datasets. User must be authenticated and results are limited to user visibility
     * @var int    $page_size The page size
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\RdfOrganizationFormatNotFoundException
     * @throws Exception\RdfOrganizationFormatGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function rdfOrganizationFormat(string $org, string $format, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RdfOrganizationFormat($org, $format, $queryParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\ContactPointPage : \Psr\Http\Message\ResponseInterface)
     */
    public function getOrganizationContactPoint(string $org, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetOrganizationContactPoint($org, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $q The string to autocomplete/suggest
     * @var int    $size The amount of suggestion to fetch
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\ContactPointRead[] : \Psr\Http\Message\ResponseInterface)
     */
    public function suggestOrgContactPoints(string $org, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\SuggestOrgContactPoints($org, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetDataservicesCsvNotFoundException
     * @throws Exception\GetDataservicesCsvGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getDataservicesCsv(string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetDataservicesCsv($org), $fetch);
    }

    /**
     * @param string $org   The organization ID or slug
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetDatasetsResourcesCsvApiOrganizationsOrgOrgDatasetsResourcesCsvNotFoundException
     * @throws Exception\GetDatasetsResourcesCsvApiOrganizationsOrgOrgDatasetsResourcesCsvGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getDatasetsResourcesCsvApiOrganizationsOrgOrgDatasetsResourcesCsv(string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetDatasetsResourcesCsvApiOrganizationsOrgOrgDatasetsResourcesCsv($org), $fetch);
    }

    /**
     * @param string $org   The organization ID or slug
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetDatasetsCsvApiOrganizationsOrgOrgDatasetsCsvNotFoundException
     * @throws Exception\GetDatasetsCsvApiOrganizationsOrgOrgDatasetsCsvGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getDatasetsCsvApiOrganizationsOrgOrgDatasetsCsv(string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetDatasetsCsvApiOrganizationsOrgOrgDatasetsCsv($org), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $q The search query
     * @var string $sort The field (and direction) on which sorting apply
     * @var int    $page The page to display
     * @var int    $page_size The page size
     * @var array  $tag
     * @var string $license
     * @var bool   $featured If set to true, it will filter on featured datasets only. If set to false, it will exclude featured datasets.
     * @var string $geozone
     * @var string $granularity
     * @var string $temporal_coverage
     * @var string $access_type
     * @var string $organization
     * @var string $badge
     * @var string $organization_badge
     * @var string $owner
     * @var string $followed_by (beta, subject to change/be removed)
     * @var string $format
     * @var string $schema
     * @var string $schema_version
     * @var string $topic
     * @var string $credit
     * @var string $dataservice
     * @var string $reuse
     * @var bool   $archived If set to true, it will filter on archived datasets only. If set to false, it will exclude archived datasets. User must be authenticated and results are limited to user visibility
     * @var bool   $deleted If set to true, it will filter on deleted datasets only. If set to false, it will exclude deleted datasets. User must be authenticated and results are limited to user visibility
     * @var bool   $private If set to true, it will filter on private datasets only. If set to false, it will exclude private datasets. User must be authenticated and results are limited to user visibility
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\DatasetPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listOrganizationDatasets(string $org, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListOrganizationDatasets($org, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param string $org   The organization ID or slug
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetDiscussionsCsvApiOrganizationsOrgOrgDiscussionsCsvNotFoundException
     * @throws Exception\GetDiscussionsCsvApiOrganizationsOrgOrgDiscussionsCsvGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getDiscussionsCsvApiOrganizationsOrgOrgDiscussionsCsv(string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetDiscussionsCsvApiOrganizationsOrgOrgDiscussionsCsv($org), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\Discussion[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listOrganizationDiscussions(string $org, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListOrganizationDiscussions($org, $headerParameters), $fetch);
    }

    /**
     * @param string $org            The organization ID or slug
     * @param array  $formParameters {
     *
     * @var string|resource|\Psr\Http\Message\StreamInterface $file
     * @var string                                            $bbox
     *                                                        }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\UploadedImage : \Psr\Http\Message\ResponseInterface)
     */
    public function organizationLogo(string $org, array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\OrganizationLogo($org, $formParameters, $headerParameters), $fetch);
    }

    /**
     * @param string $org            The organization ID or slug
     * @param array  $formParameters {
     *
     * @var string|resource|\Psr\Http\Message\StreamInterface $file
     * @var string                                            $bbox
     *                                                        }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\UploadedImage : \Psr\Http\Message\ResponseInterface)
     */
    public function resizeOrganizationLogo(string $org, array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ResizeOrganizationLogo($org, $formParameters, $headerParameters), $fetch);
    }

    /**
     * @param string $org              The organization ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\InviteOrganizationMemberBadRequestException
     * @throws Exception\InviteOrganizationMemberForbiddenException
     *
     * @return ($fetch is 'object' ? null|Model\MembershipRequest : \Psr\Http\Message\ResponseInterface)
     */
    public function inviteOrganizationMember(string $org, Model\MembershipInvite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\InviteOrganizationMember($org, $payload, $headerParameters), $fetch);
    }

    /**
     * @param string $org   The organization ID or slug
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\DeleteOrganizationMemberForbiddenException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteOrganizationMember(string $org, string $user, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteOrganizationMember($org, $user), $fetch);
    }

    /**
     * @param string $org              The organization ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\UpdateOrganizationMemberForbiddenException
     *
     * @return ($fetch is 'object' ? null|Model\MemberRead : \Psr\Http\Message\ResponseInterface)
     */
    public function updateOrganizationMember(string $org, string $user, Model\MemberWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateOrganizationMember($org, $user, $payload, $headerParameters), $fetch);
    }

    /**
     * Replaces all current assignments with the provided list.
     *
     * @param string $org              The organization ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\SyncMemberAssignmentsForbiddenException
     *
     * @return ($fetch is 'object' ? null|Model\AssignmentRead[] : \Psr\Http\Message\ResponseInterface)
     */
    public function syncMemberAssignments(string $org, string $user, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\SyncMemberAssignments($org, $user, $headerParameters), $fetch);
    }

    /**
     * @param string $org             The organization ID or slug
     * @param array  $queryParameters {
     *
     * @var string $status If provided, only return requests in a given status
     * @var string $user If provided, only return requests for this user
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\ListMembershipRequestsForbiddenException
     *
     * @return ($fetch is 'object' ? null|Model\MembershipRequest[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listMembershipRequests(string $org, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListMembershipRequests($org, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param string $org              The organization ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\MembershipRequest : \Psr\Http\Message\ResponseInterface)
     */
    public function postMembershipRequestApiOrganizationsOrgOrgMembership(string $org, Model\MembershipRequestWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PostMembershipRequestApiOrganizationsOrgOrgMembership($org, $payload, $headerParameters), $fetch);
    }

    /**
     * @param string $org              The organization ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\MemberRead : \Psr\Http\Message\ResponseInterface)
     */
    public function acceptMembership(string $id, string $org, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\AcceptMembership($id, $org, $headerParameters), $fetch);
    }

    /**
     * @param string $org   The organization ID or slug
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\CancelMembershipBadRequestException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function cancelMembership(string $id, string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CancelMembership($id, $org), $fetch);
    }

    /**
     * @param string $org   The organization ID or slug
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function refuseMembership(string $id, string $org, Model\RefuseMembership $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RefuseMembership($id, $org, $payload), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\ReuseRead[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listOrganizationReuses(string $org, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListOrganizationReuses($org, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int    $page The page to display
     * @var int    $page_size The page size
     * @var string $sort The field (and direction) on which sorting apply
     * @var string $q
     * @var string $kind
     * @var bool   $with_drafts `True` also returns the unpublished posts (only for super-admins)
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\PostPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listPosts(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListPosts($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\CreatePostBadRequestException
     *
     * @return ($fetch is 'object' ? null|Model\PostRead : \Psr\Http\Message\ResponseInterface)
     */
    public function createPost(Model\PostWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreatePost($payload, $headerParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function recentPostsAtomFeed(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RecentPostsAtomFeed(), $fetch);
    }

    /**
     * @param string $post  The post ID or slug
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\DeletePostNotFoundException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deletePost(string $post, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeletePost($post), $fetch);
    }

    /**
     * @param string $post             The post ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetPostNotFoundException
     *
     * @return ($fetch is 'object' ? null|Model\PostRead : \Psr\Http\Message\ResponseInterface)
     */
    public function getPost(string $post, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetPost($post, $headerParameters), $fetch);
    }

    /**
     * @param string $post             The post ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\UpdatePostBadRequestException
     * @throws Exception\UpdatePostNotFoundException
     *
     * @return ($fetch is 'object' ? null|Model\PostRead : \Psr\Http\Message\ResponseInterface)
     */
    public function updatePost(string $post, Model\PostWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdatePost($post, $payload, $headerParameters), $fetch);
    }

    /**
     * @param array $formParameters {
     *
     * @var string|resource|\Psr\Http\Message\StreamInterface $file
     * @var string                                            $bbox
     *                                                        }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\UploadedImage : \Psr\Http\Message\ResponseInterface)
     */
    public function postImage(string $post, array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PostImage($post, $formParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $formParameters {
     *
     * @var string|resource|\Psr\Http\Message\StreamInterface $file
     * @var string                                            $bbox
     *                                                        }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\UploadedImage : \Psr\Http\Message\ResponseInterface)
     */
    public function resizePostImage(string $post, array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ResizePostImage($post, $formParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\PostRead : \Psr\Http\Message\ResponseInterface)
     */
    public function unpublishPost(string $post, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UnpublishPost($post, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\PostRead : \Psr\Http\Message\ResponseInterface)
     */
    public function publishPost(string $post, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PublishPost($post, $headerParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getProconnectAuthApi(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetProconnectAuthApi(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getProconnectLoginApi(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetProconnectLoginApi(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getProconnectLogoutApi(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetProconnectLogoutApi(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getProconnectLogoutOAuthApi(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetProconnectLogoutOAuthApi(), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int    $page The page to display
     * @var int    $page_size The page size
     * @var string $sort The field (and direction) on which sorting apply
     * @var bool   $handled
     * @var string $subject_type
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\ReportPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listReports(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListReports($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\CreateReportBadRequestException
     *
     * @return ($fetch is 'object' ? null|Model\ReportRead : \Psr\Http\Message\ResponseInterface)
     */
    public function createReport(Model\ReportWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateReport($payload, $headerParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function listReportsReasons(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListReportsReasons(), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\ReportRead : \Psr\Http\Message\ResponseInterface)
     */
    public function getReport(string $report, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetReport($report, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\UpdateReportBadRequestException
     *
     * @return ($fetch is 'object' ? null|Model\ReportRead : \Psr\Http\Message\ResponseInterface)
     */
    public function updateReport(string $report, Model\ReportWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateReport($report, $payload, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int    $page The page to display
     * @var int    $page_size The page size
     * @var string $sort The field (and direction) on which sorting apply
     * @var string $q
     * @var string $owner
     * @var string $organization
     * @var string $organization_badge
     * @var string $type
     * @var string $dataset
     * @var string $dataservice
     * @var string $tag
     * @var string $topic
     * @var bool   $private
     * @var bool   $featured
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\ReusePage : \Psr\Http\Message\ResponseInterface)
     */
    public function listReuses(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListReuses($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\CreateReuseBadRequestException
     *
     * @return ($fetch is 'object' ? null|Model\ReuseRead : \Psr\Http\Message\ResponseInterface)
     */
    public function createReuse(Model\ReuseWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateReuse($payload, $headerParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function availableReuseBadges(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\AvailableReuseBadges(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function recentReusesAtomFeed(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RecentReusesAtomFeed(), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $q The string to autocomplete/suggest
     * @var int    $size The amount of suggestion to fetch
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\ReuseSuggestion[] : \Psr\Http\Message\ResponseInterface)
     */
    public function suggestReuses(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\SuggestReuses($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\ReuseTopic[] : \Psr\Http\Message\ResponseInterface)
     */
    public function reuseTopics(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ReuseTopics($headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\ReuseType[] : \Psr\Http\Message\ResponseInterface)
     */
    public function reuseTypes(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ReuseTypes($headerParameters), $fetch);
    }

    /**
     * Returns the number of followers left after the operation
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function unfollowReuse(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UnfollowReuse($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int    $page The page to fetch
     * @var int    $page_size The page size to fetch
     * @var string $user Filter follower by user, it allows to check if a user is following the object
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\FollowPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listReuseFollowers(string $id, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListReuseFollowers($id, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * Returns the number of followers left after the operation
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function followReuse(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\FollowReuse($id), $fetch);
    }

    /**
     * @param string $reuse           The reuse ID or slug
     * @param array  $queryParameters {
     *
     * @var bool $send_legal_notice Send formal legal notice with appeal information to owner (admin only)
     *           }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\DeleteReuseNotFoundException
     * @throws Exception\DeleteReuseGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteReuse(string $reuse, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteReuse($reuse, $queryParameters), $fetch);
    }

    /**
     * @param string $reuse            The reuse ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetReuseNotFoundException
     * @throws Exception\GetReuseGoneException
     *
     * @return ($fetch is 'object' ? null|Model\ReuseRead : \Psr\Http\Message\ResponseInterface)
     */
    public function getReuse(string $reuse, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetReuse($reuse, $headerParameters), $fetch);
    }

    /**
     * @param string $reuse            The reuse ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\UpdateReuseBadRequestException
     * @throws Exception\UpdateReuseNotFoundException
     * @throws Exception\UpdateReuseGoneException
     *
     * @return ($fetch is 'object' ? null|Model\ReuseRead : \Psr\Http\Message\ResponseInterface)
     */
    public function updateReuse(string $reuse, Model\ReuseWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateReuse($reuse, $payload, $headerParameters), $fetch);
    }

    /**
     * @param string $reuse            The reuse ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\BadgeRead : \Psr\Http\Message\ResponseInterface)
     */
    public function addReuseBadge(string $reuse, Model\BadgeWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\AddReuseBadge($reuse, $payload, $headerParameters), $fetch);
    }

    /**
     * @param string $reuse The reuse ID or slug
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteReuseBadge(string $badgeKind, string $reuse, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteReuseBadge($badgeKind, $reuse), $fetch);
    }

    /**
     * @param string $reuse            The reuse ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\ReuseAddDataserviceForbiddenException
     *
     * @return ($fetch is 'object' ? null|Model\ReuseRead : \Psr\Http\Message\ResponseInterface)
     */
    public function reuseAddDataservice(string $reuse, Model\DataserviceReference $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ReuseAddDataservice($reuse, $payload, $headerParameters), $fetch);
    }

    /**
     * @param string $reuse            The reuse ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\ReuseAddDatasetForbiddenException
     *
     * @return ($fetch is 'object' ? null|Model\ReuseRead : \Psr\Http\Message\ResponseInterface)
     */
    public function reuseAddDataset(string $reuse, Model\DatasetReference $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ReuseAddDataset($reuse, $payload, $headerParameters), $fetch);
    }

    /**
     * @param string $reuse            The reuse ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\ReuseRead : \Psr\Http\Message\ResponseInterface)
     */
    public function unfeatureReuse(string $reuse, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UnfeatureReuse($reuse, $headerParameters), $fetch);
    }

    /**
     * @param string $reuse            The reuse ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\ReuseRead : \Psr\Http\Message\ResponseInterface)
     */
    public function featureReuse(string $reuse, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\FeatureReuse($reuse, $headerParameters), $fetch);
    }

    /**
     * @param string $reuse          The reuse ID or slug
     * @param array  $formParameters {
     *
     * @var string|resource|\Psr\Http\Message\StreamInterface $file
     * @var string                                            $bbox
     *                                                        }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\UploadedImage : \Psr\Http\Message\ResponseInterface)
     */
    public function reuseImage(string $reuse, array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ReuseImage($reuse, $formParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\SiteRead : \Psr\Http\Message\ResponseInterface)
     */
    public function getSite(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetSite($headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\SiteRead : \Psr\Http\Message\ResponseInterface)
     */
    public function setSite(Model\SiteWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\SetSite($payload, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $q The search query
     * @var string $sort The field (and direction) on which sorting apply
     * @var int    $page The page to display
     * @var array  $tag
     * @var string $license
     * @var bool   $featured If set to true, it will filter on featured datasets only. If set to false, it will exclude featured datasets.
     * @var string $geozone
     * @var string $granularity
     * @var string $temporal_coverage
     * @var string $access_type
     * @var string $organization
     * @var string $badge
     * @var string $organization_badge
     * @var string $owner
     * @var string $followed_by (beta, subject to change/be removed)
     * @var string $format
     * @var string $schema
     * @var string $schema_version
     * @var string $topic
     * @var string $credit
     * @var string $dataservice
     * @var string $reuse
     * @var bool   $archived If set to true, it will filter on archived datasets only. If set to false, it will exclude archived datasets. User must be authenticated and results are limited to user visibility
     * @var bool   $deleted If set to true, it will filter on deleted datasets only. If set to false, it will exclude deleted datasets. User must be authenticated and results are limited to user visibility
     * @var bool   $private If set to true, it will filter on private datasets only. If set to false, it will exclude private datasets. User must be authenticated and results are limited to user visibility
     * @var int    $page_size The page size
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getSiteRdfCatalog(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetSiteRdfCatalog($queryParameters), $fetch);
    }

    /**
     * Filtering, sorting and paginating abilities apply to the datasets elements.
     *
     * @param array $queryParameters {
     *
     * @var string $q The search query
     * @var string $sort The field (and direction) on which sorting apply
     * @var int    $page The page to display
     * @var array  $tag
     * @var string $license
     * @var bool   $featured If set to true, it will filter on featured datasets only. If set to false, it will exclude featured datasets.
     * @var string $geozone
     * @var string $granularity
     * @var string $temporal_coverage
     * @var string $access_type
     * @var string $organization
     * @var string $badge
     * @var string $organization_badge
     * @var string $owner
     * @var string $followed_by (beta, subject to change/be removed)
     * @var string $format
     * @var string $schema
     * @var string $schema_version
     * @var string $topic
     * @var string $credit
     * @var string $dataservice
     * @var string $reuse
     * @var bool   $archived If set to true, it will filter on archived datasets only. If set to false, it will exclude archived datasets. User must be authenticated and results are limited to user visibility
     * @var bool   $deleted If set to true, it will filter on deleted datasets only. If set to false, it will exclude deleted datasets. User must be authenticated and results are limited to user visibility
     * @var bool   $private If set to true, it will filter on private datasets only. If set to false, it will exclude private datasets. User must be authenticated and results are limited to user visibility
     * @var int    $page_size The page size
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getSiteRdfCatalogFormat(string $format, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetSiteRdfCatalogFormat($format, $queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getSiteJsonLdContext(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetSiteJsonLdContext(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getSiteDataPortal(string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetSiteDataPortal($format), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getSiteDataservicesCsv(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetSiteDataservicesCsv(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getSiteDatasetsCsv(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetSiteDatasetsCsv(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getSiteHarvestsCsv(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetSiteHarvestsCsv(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getSiteOrganizationsCsv(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetSiteOrganizationsCsv(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getSiteResourcesCsv(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetSiteResourcesCsv(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getSiteReusesCsv(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetSiteReusesCsv(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getSiteTagsCsv(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetSiteTagsCsv(), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\GeoJSONFeatureCollection[] : \Psr\Http\Message\ResponseInterface)
     */
    public function spatialCoverage(string $level, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\SpatialCoverage($level, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\GeoGranularity[] : \Psr\Http\Message\ResponseInterface)
     */
    public function spatialGranularities(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\SpatialGranularities($headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\GeoLevel[] : \Psr\Http\Message\ResponseInterface)
     */
    public function spatialLevels(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\SpatialLevels($headerParameters), $fetch);
    }

    /**
     * @param string $id    A zone identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function spatialZone(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\SpatialZone($id), $fetch);
    }

    /**
     * @param string $id              A zone identifier
     * @param array  $queryParameters {
     *
     * @var bool $dynamic Append dynamic datasets
     * @var int  $size The amount of datasets to fetch
     *           }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\DatasetReference : \Psr\Http\Message\ResponseInterface)
     */
    public function spatialZoneDatasets(string $id, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\SpatialZoneDatasets($id, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $q The string to autocomplete/suggest
     * @var int    $size The amount of suggestion to fetch
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\TerritorySuggestion[] : \Psr\Http\Message\ResponseInterface)
     */
    public function suggestZones(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\SuggestZones($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param string $ids              A zone identifiers list (comma separated)
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\GeoJSONFeatureCollection : \Psr\Http\Message\ResponseInterface)
     */
    public function spatialZones(string $ids, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\SpatialZones($ids, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $q The string to autocomplete/suggest
     * @var int    $size The amount of suggestion to fetch
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function suggestTags(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\SuggestTags($queryParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\Transfer[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listTransfers(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListTransfers($headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\Transfer : \Psr\Http\Message\ResponseInterface)
     */
    public function requestTransfer(Model\TransferRequest $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RequestTransfer($payload, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\Transfer : \Psr\Http\Message\ResponseInterface)
     */
    public function getTransfer(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetTransfer($id, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\Transfer : \Psr\Http\Message\ResponseInterface)
     */
    public function respondToTransfer(string $id, Model\TransferResponse $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RespondToTransfer($id, $payload, $headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $q The search query
     * @var string $sort The field (and direction) on which sorting apply
     * @var int    $page The page to display
     * @var int    $page_size The page size
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\UserPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listUsers(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListUsers($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\CreateUserBadRequestException
     *
     * @return ($fetch is 'object' ? null|Model\User : \Psr\Http\Message\ResponseInterface)
     */
    public function createUser(Model\User $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateUser($payload, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\UserRole[] : \Psr\Http\Message\ResponseInterface)
     */
    public function userRoles(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UserRoles($headerParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var string $q The string to autocomplete/suggest
     * @var string $size The amount of suggestion to fetch (between 1 and 20)
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\UserSuggestion[] : \Psr\Http\Message\ResponseInterface)
     */
    public function suggestUsers(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\SuggestUsers($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Returns the number of followers left after the operation
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function unfollowUser(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UnfollowUser($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int    $page The page to fetch
     * @var int    $page_size The page size to fetch
     * @var string $user Filter follower by user, it allows to check if a user is following the object
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\FollowPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listUserFollowers(string $id, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListUserFollowers($id, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\FollowUserForbiddenException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function followUser(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\FollowUser($id), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var bool $send_legal_notice Send formal legal notice with appeal information to owner (admin only)
     * @var bool $no_mail Do not send the simple deletion notification email. Note: automatically set to True when send_legal_notice=True to avoid sending duplicate emails.
     * @var bool $delete_comments Delete comments posted by the user upon user deletion
     *           }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\DeleteUserForbiddenException
     * @throws Exception\DeleteUserNotFoundException
     * @throws Exception\DeleteUserGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteUser(string $user, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteUser($user, $queryParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\GetUserNotFoundException
     * @throws Exception\GetUserGoneException
     *
     * @return ($fetch is 'object' ? null|Model\User : \Psr\Http\Message\ResponseInterface)
     */
    public function getUser(string $user, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetUser($user, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\UpdateUserBadRequestException
     * @throws Exception\UpdateUserNotFoundException
     * @throws Exception\UpdateUserGoneException
     *
     * @return ($fetch is 'object' ? null|Model\User : \Psr\Http\Message\ResponseInterface)
     */
    public function updateUser(string $user, Model\User $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateUser($user, $payload, $headerParameters), $fetch);
    }

    /**
     * @param array $formParameters {
     *
     * @var string|resource|\Psr\Http\Message\StreamInterface $file
     * @var string                                            $bbox
     *                                                        }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\UploadedImage : \Psr\Http\Message\ResponseInterface)
     */
    public function userAvatar(string $user, array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UserAvatar($user, $formParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\ContactPointPage : \Psr\Http\Message\ResponseInterface)
     */
    public function getUserContactPoint(string $user, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetUserContactPoint($user, $headerParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\RotateUserPasswordNotFoundException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function rotateUserPassword(string $user, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\RotateUserPassword($user), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     * @var int    $page The page to display
     * @var int    $page_size The page size
     * @var string $sort The field (and direction) on which sorting apply
     * @var string $owner
     * @var string $organization
     * @var bool   $private
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\ChartPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listVisualizations(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListVisualizations($queryParameters, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\CreateVisualizationBadRequestException
     *
     * @return ($fetch is 'object' ? null|Model\ChartRead : \Psr\Http\Message\ResponseInterface)
     */
    public function createVisualization(Model\ChartWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\CreateVisualization($payload, $headerParameters), $fetch);
    }

    /**
     * @param string $visualization The visualization ID or slug
     * @param string $fetch         Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteVisualization(string $visualization, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteVisualization($visualization), $fetch);
    }

    /**
     * @param string $visualization    The visualization ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\ChartRead : \Psr\Http\Message\ResponseInterface)
     */
    public function getVisualization(string $visualization, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetVisualization($visualization, $headerParameters), $fetch);
    }

    /**
     * @param string $visualization    The visualization ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws Exception\UpdateVisualizationBadRequestException
     *
     * @return ($fetch is 'object' ? null|Model\ChartRead : \Psr\Http\Message\ResponseInterface)
     */
    public function updateVisualization(string $visualization, Model\ChartWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\UpdateVisualization($visualization, $payload, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\Job[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listJobs(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\ListJobs($headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\Job : \Psr\Http\Message\ResponseInterface)
     */
    public function postJobsApi(Model\Job $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PostJobsApi($payload, $headerParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getJobsReferenceApi(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetJobsReferenceApi(), $fetch);
    }

    /**
     * @param string $id    A job ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteJobApi(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\DeleteJobApi($id), $fetch);
    }

    /**
     * @param string $id               A job ID
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\Job : \Psr\Http\Message\ResponseInterface)
     */
    public function getJobApi(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetJobApi($id, $headerParameters), $fetch);
    }

    /**
     * @param string $id               A job ID
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\Job : \Psr\Http\Message\ResponseInterface)
     */
    public function putJobApi(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\PutJobApi($id, $headerParameters), $fetch);
    }

    /**
     * @param array $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|Model\Task : \Psr\Http\Message\ResponseInterface)
     */
    public function getTaskApi(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\GetTaskApi($id, $headerParameters), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://www.data.gouv.fr/api/1');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (\count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new Normalizer\JaneObjectNormalizer()];
        if (\count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
