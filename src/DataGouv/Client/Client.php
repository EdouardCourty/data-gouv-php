<?php

namespace Ecourty\DataGouv\DataGouv\Client;

class Client extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function reasonCategories(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ReasonCategories(), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var int $page The page to fetch
     *     @var int $page_size The page size to fetch
     *     @var string $user Filter activities for that particular user
     *     @var string $organization Filter activities for that particular organization
     *     @var string $related_to Filter activities for that particular object id (ex : reuse, dataset, etc.)
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ActivityPage : \Psr\Http\Message\ResponseInterface)
     */
    public function activity(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\Activity($queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param string $identifier
     * @param int $size
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function avatars(string $identifier, int $size, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\Avatars($identifier, $size), $fetch);
    }
    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\ContactPointWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CreateContactPointBadRequestException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ContactPointRead : \Psr\Http\Message\ResponseInterface)
     */
    public function createContactPoint(\Ecourty\DataGouv\DataGouv\Client\Model\ContactPointWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\CreateContactPoint($payload, $headerParameters), $fetch);
    }
    /**
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ContactPointRoles[] : \Psr\Http\Message\ResponseInterface)
     */
    public function contactPointRoles(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ContactPointRoles($headerParameters), $fetch);
    }
    /**
     * @param string $contactPoint
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteContactPointNotFoundException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteContactPoint(string $contactPoint, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\DeleteContactPoint($contactPoint), $fetch);
    }
    /**
     * @param string $contactPoint
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetContactPointNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ContactPointRead : \Psr\Http\Message\ResponseInterface)
     */
    public function getContactPoint(string $contactPoint, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetContactPoint($contactPoint, $headerParameters), $fetch);
    }
    /**
     * @param string $contactPoint
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\ContactPointWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateContactPointBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateContactPointNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ContactPointRead : \Psr\Http\Message\ResponseInterface)
     */
    public function updateContactPoint(string $contactPoint, \Ecourty\DataGouv\DataGouv\Client\Model\ContactPointWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UpdateContactPoint($contactPoint, $payload, $headerParameters), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var int $page The page to display
     *     @var int $page_size The page size
     *     @var string $sort The field (and direction) on which sorting apply
     *     @var string $q
     *     @var string $topic
     *     @var string $reuse
     *     @var string $owner
     *     @var string $organization
     *     @var string $organization_badge
     *     @var string $access_type
     *     @var string $tag
     *     @var bool $featured
     *     @var string $contact_point
     *     @var string $dataset
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\DataservicePage : \Psr\Http\Message\ResponseInterface)
     */
    public function listDataservices(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListDataservices($queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CreateDataserviceBadRequestException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\DataserviceRead : \Psr\Http\Message\ResponseInterface)
     */
    public function createDataservice(\Ecourty\DataGouv\DataGouv\Client\Model\DataserviceWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\CreateDataservice($payload, $headerParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function recentDataservicesAtomFeed(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\RecentDataservicesAtomFeed(), $fetch);
    }
    /**
     * @param string $dataservice
     * @param array $queryParameters {
     *     @var bool $send_legal_notice Send formal legal notice with appeal information to owner (admin only)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteDataservice(string $dataservice, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\DeleteDataservice($dataservice, $queryParameters), $fetch);
    }
    /**
     * @param string $dataservice
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\DataserviceRead : \Psr\Http\Message\ResponseInterface)
     */
    public function getDataservice(string $dataservice, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetDataservice($dataservice, $headerParameters), $fetch);
    }
    /**
     * @param string $dataservice
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateDataserviceBadRequestException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\DataserviceRead : \Psr\Http\Message\ResponseInterface)
     */
    public function updateDataservice(string $dataservice, \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UpdateDataservice($dataservice, $payload, $headerParameters), $fetch);
    }
    /**
     * @param string $dataservice The dataservice ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceDatasetsAdd[] $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DataserviceDatasetsCreateBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DataserviceDatasetsCreateForbiddenException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DataserviceDatasetsCreateNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DataserviceDatasetsCreateGoneException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\DataserviceRead : \Psr\Http\Message\ResponseInterface)
     */
    public function dataserviceDatasetsCreate(string $dataservice, array $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\DataserviceDatasetsCreate($dataservice, $payload, $headerParameters), $fetch);
    }
    /**
     * @param string $dataservice The dataservice ID or slug
     * @param string $dataset
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteDataserviceDatasetApiDataservicesDataserviceDataserviceDatasetsDatasetDatasetNotFoundException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteDataserviceDatasetApiDataservicesDataserviceDataserviceDatasetsDatasetDataset(string $dataservice, string $dataset, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\DeleteDataserviceDatasetApiDataservicesDataserviceDataserviceDatasetsDatasetDataset($dataservice, $dataset), $fetch);
    }
    /**
     * @param string $dataservice The dataservice ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\DataserviceRead : \Psr\Http\Message\ResponseInterface)
     */
    public function unfeatureDataservice(string $dataservice, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UnfeatureDataservice($dataservice, $headerParameters), $fetch);
    }
    /**
     * @param string $dataservice The dataservice ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\DataserviceRead : \Psr\Http\Message\ResponseInterface)
     */
    public function featureDataservice(string $dataservice, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\FeatureDataservice($dataservice, $headerParameters), $fetch);
    }
    /**
     * @param string $dataservice The dataservice ID or slug
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDataserviceNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDataserviceGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function rdfDataservice(string $dataservice, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\RdfDataservice($dataservice), $fetch);
    }
    /**
     * @param string $dataservice The dataservice ID or slug
     * @param string $format
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDataserviceFormatNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDataserviceFormatGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function rdfDataserviceFormat(string $dataservice, string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\RdfDataserviceFormat($dataservice, $format), $fetch);
    }
    /**
     * Returns the number of followers left after the operation
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function unfollowDataservice(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UnfollowDataservice($id), $fetch);
    }
    /**
     * @param string $id
     * @param array $queryParameters {
     *     @var int $page The page to fetch
     *     @var int $page_size The page size to fetch
     *     @var string $user Filter follower by user, it allows to check if a user is following the object
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\FollowPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listDataserviceFollowers(string $id, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListDataserviceFollowers($id, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Returns the number of followers left after the operation
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function followDataservice(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\FollowDataservice($id), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var string $q The search query
     *     @var string $sort The field (and direction) on which sorting apply
     *     @var int $page The page to display
     *     @var int $page_size The page size
     *     @var array $tag
     *     @var string $license
     *     @var bool $featured If set to true, it will filter on featured datasets only. If set to false, it will exclude featured datasets.
     *     @var string $geozone
     *     @var string $granularity
     *     @var string $temporal_coverage
     *     @var string $access_type
     *     @var string $organization
     *     @var string $badge
     *     @var string $organization_badge
     *     @var string $owner
     *     @var string $followed_by (beta, subject to change/be removed)
     *     @var string $format
     *     @var string $schema
     *     @var string $schema_version
     *     @var string $topic
     *     @var string $credit
     *     @var string $dataservice
     *     @var string $reuse
     *     @var bool $archived If set to true, it will filter on archived datasets only. If set to false, it will exclude archived datasets. User must be authenticated and results are limited to user visibility
     *     @var bool $deleted If set to true, it will filter on deleted datasets only. If set to false, it will exclude deleted datasets. User must be authenticated and results are limited to user visibility
     *     @var bool $private If set to true, it will filter on private datasets only. If set to false, it will exclude private datasets. User must be authenticated and results are limited to user visibility
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\DatasetPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listDatasets(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListDatasets($queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\Dataset $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CreateDatasetBadRequestException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Dataset : \Psr\Http\Message\ResponseInterface)
     */
    public function createDataset(\Ecourty\DataGouv\DataGouv\Client\Model\Dataset $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\CreateDataset($payload, $headerParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function availableDatasetBadges(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\AvailableDatasetBadges(), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var string $sort The sorting attribute
     *     @var int $page The page to fetch
     *     @var int $page_size The page size to fetch
     *     @var string $organization Filter activities for that particular organization
     *     @var string $dataset Filter activities for that particular dataset
     *     @var string $owner Filter activities for that particular user
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\CommunityResourcePage : \Psr\Http\Message\ResponseInterface)
     */
    public function listCommunityResources(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListCommunityResources($queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\CommunityResource $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CreateCommunityResourceBadRequestException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\CommunityResource : \Psr\Http\Message\ResponseInterface)
     */
    public function createCommunityResource(\Ecourty\DataGouv\DataGouv\Client\Model\CommunityResource $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\CreateCommunityResource($payload, $headerParameters), $fetch);
    }
    /**
     * @param string $community The community resource unique identifier
     * @param array $queryParameters {
     *     @var string $dataset The dataset ID or slug
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteCommunityResource(string $community, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\DeleteCommunityResource($community, $queryParameters), $fetch);
    }
    /**
     * @param string $community The community resource unique identifier
     * @param array $queryParameters {
     *     @var string $dataset The dataset ID or slug
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\CommunityResource : \Psr\Http\Message\ResponseInterface)
     */
    public function retrieveCommunityResource(string $community, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\RetrieveCommunityResource($community, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param string $community The community resource unique identifier
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\CommunityResource $payload
     * @param array $queryParameters {
     *     @var string $dataset The dataset ID or slug
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateCommunityResourceBadRequestException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\CommunityResource : \Psr\Http\Message\ResponseInterface)
     */
    public function updateCommunityResource(string $community, \Ecourty\DataGouv\DataGouv\Client\Model\CommunityResource $payload, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UpdateCommunityResource($community, $payload, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param string $community The community resource unique identifier
     * @param array $queryParameters {
     *     @var string $dataset The dataset ID or slug
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UploadCommunityResourceBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UploadCommunityResourceUnsupportedMediaTypeException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\UploadedCommunityResource : \Psr\Http\Message\ResponseInterface)
     */
    public function uploadCommunityResource(string $community, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UploadCommunityResource($community, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function allowedExtensions(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\AllowedExtensions(), $fetch);
    }
    /**
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Frequency[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listFrequencies(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListFrequencies($headerParameters), $fetch);
    }
    /**
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\License[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listLicenses(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListLicenses($headerParameters), $fetch);
    }
    /**
     * @param string $id
     * @param array $queryParameters {
     *     @var string $dataset The dataset ID or slug
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function redirectResource(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\RedirectResource($id, $queryParameters), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var string $q The search query
     *     @var string $sort The field (and direction) on which sorting apply
     *     @var int $page The page to display
     *     @var int $page_size The page size
     *     @var array $tag
     *     @var string $license
     *     @var bool $featured If set to true, it will filter on featured datasets only. If set to false, it will exclude featured datasets.
     *     @var string $geozone
     *     @var string $granularity
     *     @var string $temporal_coverage
     *     @var string $access_type
     *     @var string $organization
     *     @var string $badge
     *     @var string $organization_badge
     *     @var string $owner
     *     @var string $followed_by (beta, subject to change/be removed)
     *     @var string $format
     *     @var string $schema
     *     @var string $schema_version
     *     @var string $topic
     *     @var string $credit
     *     @var string $dataservice
     *     @var string $reuse
     *     @var bool $archived If set to true, it will filter on archived datasets only. If set to false, it will exclude archived datasets. User must be authenticated and results are limited to user visibility
     *     @var bool $deleted If set to true, it will filter on deleted datasets only. If set to false, it will exclude deleted datasets. User must be authenticated and results are limited to user visibility
     *     @var bool $private If set to true, it will filter on private datasets only. If set to false, it will exclude private datasets. User must be authenticated and results are limited to user visibility
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function recentDatasetsAtomFeed(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\RecentDatasetsAtomFeed($queryParameters), $fetch);
    }
    /**
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ResourceType[] : \Psr\Http\Message\ResponseInterface)
     */
    public function resourceTypes(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ResourceTypes($headerParameters), $fetch);
    }
    /**
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\CatalogSchema[] : \Psr\Http\Message\ResponseInterface)
     */
    public function schemas(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\Schemas($headerParameters), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var string $q The string to autocomplete/suggest
     *     @var int $size The amount of suggestion to fetch
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\DatasetSuggestion : \Psr\Http\Message\ResponseInterface)
     */
    public function suggestDatasets(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\SuggestDatasets($queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var string $q The string to autocomplete/suggest
     *     @var int $size The amount of suggestion to fetch
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function suggestFormats(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\SuggestFormats($queryParameters), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var string $q The string to autocomplete/suggest
     *     @var int $size The amount of suggestion to fetch
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function suggestMime(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\SuggestMime($queryParameters), $fetch);
    }
    /**
     * @param string $dataset The dataset ID or slug
     * @param array $queryParameters {
     *     @var bool $send_legal_notice Send formal legal notice with appeal information to owner (admin only)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteDatasetNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteDatasetGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteDataset(string $dataset, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\DeleteDataset($dataset, $queryParameters), $fetch);
    }
    /**
     * @param string $dataset The dataset ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetDatasetNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetDatasetGoneException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Dataset : \Psr\Http\Message\ResponseInterface)
     */
    public function getDataset(string $dataset, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetDataset($dataset, $headerParameters), $fetch);
    }
    /**
     * @param string $dataset The dataset ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\Dataset $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateDatasetBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateDatasetNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateDatasetGoneException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Dataset : \Psr\Http\Message\ResponseInterface)
     */
    public function updateDataset(string $dataset, \Ecourty\DataGouv\DataGouv\Client\Model\Dataset $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UpdateDataset($dataset, $payload, $headerParameters), $fetch);
    }
    /**
     * @param string $dataset The dataset ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\BadgeWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\BadgeRead : \Psr\Http\Message\ResponseInterface)
     */
    public function addDatasetBadge(string $dataset, \Ecourty\DataGouv\DataGouv\Client\Model\BadgeWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\AddDatasetBadge($dataset, $payload, $headerParameters), $fetch);
    }
    /**
     * @param string $badgeKind
     * @param string $dataset The dataset ID or slug
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteDatasetBadge(string $badgeKind, string $dataset, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\DeleteDatasetBadge($badgeKind, $dataset), $fetch);
    }
    /**
     * @param string $dataset The dataset ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Dataset : \Psr\Http\Message\ResponseInterface)
     */
    public function unfeatureDataset(string $dataset, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UnfeatureDataset($dataset, $headerParameters), $fetch);
    }
    /**
     * @param string $dataset The dataset ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Dataset : \Psr\Http\Message\ResponseInterface)
     */
    public function featureDataset(string $dataset, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\FeatureDataset($dataset, $headerParameters), $fetch);
    }
    /**
     * @param string $dataset The dataset ID or slug
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDatasetNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDatasetGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function rdfDataset(string $dataset, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\RdfDataset($dataset), $fetch);
    }
    /**
     * @param string $dataset The dataset ID or slug
     * @param string $format
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDatasetFormatNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfDatasetFormatGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function rdfDatasetFormat(string $dataset, string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\RdfDatasetFormat($dataset, $format), $fetch);
    }
    /**
     * @param string $dataset The dataset ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\Resource $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CreateResourceBadRequestException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Resource : \Psr\Http\Message\ResponseInterface)
     */
    public function createResource(string $dataset, \Ecourty\DataGouv\DataGouv\Client\Model\Resource $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\CreateResource($dataset, $payload, $headerParameters), $fetch);
    }
    /**
     * @param string $dataset The dataset ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\Resource[] $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateResourcesBadRequestException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Resource[] : \Psr\Http\Message\ResponseInterface)
     */
    public function updateResources(string $dataset, array $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UpdateResources($dataset, $payload, $headerParameters), $fetch);
    }
    /**
     * @param string $rid The resource unique identifier
     * @param string $dataset The dataset ID or slug
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteResource(string $rid, string $dataset, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\DeleteResource($rid, $dataset), $fetch);
    }
    /**
     * @param string $rid The resource unique identifier
     * @param string $dataset The dataset ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Resource : \Psr\Http\Message\ResponseInterface)
     */
    public function getResource(string $rid, string $dataset, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetResource($rid, $dataset, $headerParameters), $fetch);
    }
    /**
     * @param string $rid The resource unique identifier
     * @param string $dataset The dataset ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\Resource $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateResourceBadRequestException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Resource : \Psr\Http\Message\ResponseInterface)
     */
    public function updateResource(string $rid, string $dataset, \Ecourty\DataGouv\DataGouv\Client\Model\Resource $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UpdateResource($rid, $dataset, $payload, $headerParameters), $fetch);
    }
    /**
     * @param string $rid The resource unique identifier
     * @param string $dataset The dataset ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UploadDatasetResourceBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UploadDatasetResourceUnsupportedMediaTypeException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\UploadedResource : \Psr\Http\Message\ResponseInterface)
     */
    public function uploadDatasetResource(string $rid, string $dataset, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UploadDatasetResource($rid, $dataset, $headerParameters), $fetch);
    }
    /**
     * @param string $dataset The dataset ID or slug
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $file
     *     @var string $uuid
     *     @var string $filename
     *     @var int $partindex
     *     @var int $partbyteoffset
     *     @var int $totalparts
     *     @var int $chunksize
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UploadNewDatasetResourceBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UploadNewDatasetResourceUnsupportedMediaTypeException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\UploadedResource : \Psr\Http\Message\ResponseInterface)
     */
    public function uploadNewDatasetResource(string $dataset, array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UploadNewDatasetResource($dataset, $formParameters, $headerParameters), $fetch);
    }
    /**
     * @param string $dataset The dataset ID or slug
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $file
     *     @var string $uuid
     *     @var string $filename
     *     @var int $partindex
     *     @var int $partbyteoffset
     *     @var int $totalparts
     *     @var int $chunksize
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UploadNewCommunityResourceBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UploadNewCommunityResourceUnsupportedMediaTypeException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\UploadedCommunityResource : \Psr\Http\Message\ResponseInterface)
     */
    public function uploadNewCommunityResource(string $dataset, array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UploadNewCommunityResource($dataset, $formParameters, $headerParameters), $fetch);
    }
    /**
     * Returns the number of followers left after the operation
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function unfollowDataset(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UnfollowDataset($id), $fetch);
    }
    /**
     * @param string $id
     * @param array $queryParameters {
     *     @var int $page The page to fetch
     *     @var int $page_size The page size to fetch
     *     @var string $user Filter follower by user, it allows to check if a user is following the object
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\FollowPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listDatasetFollowers(string $id, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListDatasetFollowers($id, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Returns the number of followers left after the operation
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function followDataset(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\FollowDataset($id), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var string $q The search query
     *     @var string $sort The field (and direction) on which sorting apply
     *     @var bool $closed Filters discussions on their closed status if specified
     *     @var array $for Filter discussions for a given subject
     *     @var string $org Filter discussions for a given organization
     *     @var string $user Filter discussions created by a user
     *     @var int $page The page to fetch
     *     @var int $page_size The page size to fetch
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\DiscussionPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listDiscussions(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListDiscussions($queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionStart $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Discussion : \Psr\Http\Message\ResponseInterface)
     */
    public function createDiscussion(\Ecourty\DataGouv\DataGouv\Client\Model\DiscussionStart $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\CreateDiscussion($payload, $headerParameters), $fetch);
    }
    /**
     * @param string $id
     * @param array $queryParameters {
     *     @var bool $send_legal_notice Send formal legal notice with appeal information to owner (admin only)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteDiscussionForbiddenException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteDiscussion(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\DeleteDiscussion($id, $queryParameters), $fetch);
    }
    /**
     * @param string $id
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Discussion : \Psr\Http\Message\ResponseInterface)
     */
    public function getDiscussion(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetDiscussion($id, $headerParameters), $fetch);
    }
    /**
     * @param string $id
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionResponse $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CommentDiscussionForbiddenException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Discussion : \Psr\Http\Message\ResponseInterface)
     */
    public function commentDiscussion(string $id, \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionResponse $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\CommentDiscussion($id, $payload, $headerParameters), $fetch);
    }
    /**
     * @param string $id
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionEditComment $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateDiscussionForbiddenException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Discussion : \Psr\Http\Message\ResponseInterface)
     */
    public function updateDiscussion(string $id, \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionEditComment $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UpdateDiscussion($id, $payload, $headerParameters), $fetch);
    }
    /**
     * @param string $id
     * @param string $cidx
     * @param array $queryParameters {
     *     @var bool $send_legal_notice Send formal legal notice with appeal information to owner (admin only)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteDiscussionCommentForbiddenException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteDiscussionComment(string $id, string $cidx, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\DeleteDiscussionComment($id, $cidx, $queryParameters), $fetch);
    }
    /**
     * @param string $id
     * @param string $cidx
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionEditComment $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\EditDiscussionCommentForbiddenException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Discussion : \Psr\Http\Message\ResponseInterface)
     */
    public function editDiscussionComment(string $id, string $cidx, \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionEditComment $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\EditDiscussionComment($id, $cidx, $payload, $headerParameters), $fetch);
    }
    /**
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\HarvestBackend : \Psr\Http\Message\ResponseInterface)
     */
    public function harvestBackends(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\HarvestBackends($headerParameters), $fetch);
    }
    /**
     * @param string $ident
     * @param array $queryParameters {
     *     @var int $page The page to fetch
     *     @var int $page_size The page size to fetch
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\HarvestJob : \Psr\Http\Message\ResponseInterface)
     */
    public function getHarvestJob(string $ident, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetHarvestJob($ident, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\HarvestJobPreview : \Psr\Http\Message\ResponseInterface)
     */
    public function previewHarvestSourceConfig(\Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\PreviewHarvestSourceConfig($payload, $headerParameters), $fetch);
    }
    /**
     * @param string $source
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteHarvestSource(string $source, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\DeleteHarvestSource($source, $headerParameters), $fetch);
    }
    /**
     * @param string $source
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource : \Psr\Http\Message\ResponseInterface)
     */
    public function getHarvestSource(string $source, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetHarvestSource($source, $headerParameters), $fetch);
    }
    /**
     * @param string $source
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource : \Psr\Http\Message\ResponseInterface)
     */
    public function updateHarvestSource(string $source, \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UpdateHarvestSource($source, $payload, $headerParameters), $fetch);
    }
    /**
     * @param string $source
     * @param array $queryParameters {
     *     @var int $page The page to fetch
     *     @var int $page_size The page size to fetch
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\HarvestJobPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listHarvestJobs(string $source, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListHarvestJobs($source, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param string $source
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\HarvestJobPreview : \Psr\Http\Message\ResponseInterface)
     */
    public function previewHarvestSource(string $source, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\PreviewHarvestSource($source, $headerParameters), $fetch);
    }
    /**
     * @param string $source
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource : \Psr\Http\Message\ResponseInterface)
     */
    public function runHarvestSource(string $source, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\RunHarvestSource($source, $headerParameters), $fetch);
    }
    /**
     * @param string $source
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource : \Psr\Http\Message\ResponseInterface)
     */
    public function unscheduleHarvestSource(string $source, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UnscheduleHarvestSource($source, $headerParameters), $fetch);
    }
    /**
     * @param string $source
     * @param string $payload A cron expression
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource : \Psr\Http\Message\ResponseInterface)
     */
    public function scheduleHarvestSource(string $source, string $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ScheduleHarvestSource($source, $payload, $headerParameters), $fetch);
    }
    /**
     * @param string $source
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSourceValidation $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource : \Psr\Http\Message\ResponseInterface)
     */
    public function validateHarvestSource(string $source, \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSourceValidation $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ValidateHarvestSource($source, $payload, $headerParameters), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var int $page The page to fetch
     *     @var int $page_size The page size to fetch
     *     @var string $owner The organization or user ID to filter on
     *     @var bool $deleted Include sources flaggued as deleted
     *     @var string $q The search query
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\HarvestSourcePage[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listHarvestSources(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListHarvestSources($queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource : \Psr\Http\Message\ResponseInterface)
     */
    public function createHarvestSource(\Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\CreateHarvestSource($payload, $headerParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteMe(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\DeleteMe(), $fetch);
    }
    /**
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\User : \Psr\Http\Message\ResponseInterface)
     */
    public function getMe(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetMe($headerParameters), $fetch);
    }
    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\User $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateMeBadRequestException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\User : \Psr\Http\Message\ResponseInterface)
     */
    public function updateMe(\Ecourty\DataGouv\DataGouv\Client\Model\User $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UpdateMe($payload, $headerParameters), $fetch);
    }
    /**
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ApiTokenRead[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listApiTokens(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListApiTokens($headerParameters), $fetch);
    }
    /**
     * The plaintext token is returned only once.
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\ApiTokenWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ApiTokenCreated : \Psr\Http\Message\ResponseInterface)
     */
    public function createApiToken(\Ecourty\DataGouv\DataGouv\Client\Model\ApiTokenWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\CreateApiToken($payload, $headerParameters), $fetch);
    }
    /**
     * @param string $apiToken
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RevokeApiTokenNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RevokeApiTokenGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function revokeApiToken(string $apiToken, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\RevokeApiToken($apiToken), $fetch);
    }
    /**
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $file
     *     @var string $bbox
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\UploadedImage : \Psr\Http\Message\ResponseInterface)
     */
    public function myAvatar(array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\MyAvatar($formParameters, $headerParameters), $fetch);
    }
    /**
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Dataset[] : \Psr\Http\Message\ResponseInterface)
     */
    public function myDatasets(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\MyDatasets($headerParameters), $fetch);
    }
    /**
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\MyMetrics[] : \Psr\Http\Message\ResponseInterface)
     */
    public function myMetrics(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\MyMetrics($headerParameters), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var string $q The string to filter items
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\CommunityResource[] : \Psr\Http\Message\ResponseInterface)
     */
    public function myOrgCommunityResources(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\MyOrgCommunityResources($queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var string $q The string to filter items
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Dataset[] : \Psr\Http\Message\ResponseInterface)
     */
    public function myOrgDatasets(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\MyOrgDatasets($queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var string $q The string to filter items
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Discussion[] : \Psr\Http\Message\ResponseInterface)
     */
    public function myOrgDiscussions(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\MyOrgDiscussions($queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\PendingInvitation[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listOrgInvitations(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListOrgInvitations($headerParameters), $fetch);
    }
    /**
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\AcceptOrgInvitationBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\AcceptOrgInvitationNotFoundException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function acceptOrgInvitation(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\AcceptOrgInvitation($id), $fetch);
    }
    /**
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RefuseOrgInvitationBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RefuseOrgInvitationNotFoundException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function refuseOrgInvitation(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\RefuseOrgInvitation($id), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var string $q The string to filter items
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ReuseRead[] : \Psr\Http\Message\ResponseInterface)
     */
    public function myOrgReuses(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\MyOrgReuses($queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ReuseRead[] : \Psr\Http\Message\ResponseInterface)
     */
    public function myReuses(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\MyReuses($headerParameters), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var int $page The page to display
     *     @var int $page_size The page size
     *     @var string $sort The field (and direction) on which sorting apply
     *     @var bool $handled
     *     @var string $user
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\NotificationPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listNotifications(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListNotifications($queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param string $notification
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\ReadNotificationBadRequestException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\NotificationRead : \Psr\Http\Message\ResponseInterface)
     */
    public function readNotification(string $notification, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ReadNotification($notification, $headerParameters), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var string $q The search query
     *     @var string $sort The field (and direction) on which sorting apply
     *     @var int $page The page to display
     *     @var int $page_size The page size
     *     @var string $badge
     *     @var string $name
     *     @var string $business_number_id
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\OrganizationPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listOrganizations(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListOrganizations($queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CreateOrganizationBadRequestException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\OrganizationRead : \Psr\Http\Message\ResponseInterface)
     */
    public function createOrganization(\Ecourty\DataGouv\DataGouv\Client\Model\OrganizationWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\CreateOrganization($payload, $headerParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function availableOrganizationBadges(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\AvailableOrganizationBadges(), $fetch);
    }
    /**
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\OrganizationRole[] : \Psr\Http\Message\ResponseInterface)
     */
    public function orgRoles(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\OrgRoles($headerParameters), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var string $q The string to autocomplete/suggest
     *     @var int $size The amount of suggestion to fetch
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\OrganizationSuggestion[] : \Psr\Http\Message\ResponseInterface)
     */
    public function suggestOrganizations(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\SuggestOrganizations($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Returns the number of followers left after the operation
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function unfollowOrganization(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UnfollowOrganization($id), $fetch);
    }
    /**
     * @param string $id
     * @param array $queryParameters {
     *     @var int $page The page to fetch
     *     @var int $page_size The page size to fetch
     *     @var string $user Filter follower by user, it allows to check if a user is following the object
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\FollowPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listOrganizationFollowers(string $id, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListOrganizationFollowers($id, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Returns the number of followers left after the operation
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function followOrganization(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\FollowOrganization($id), $fetch);
    }
    /**
     * @param string $org The organization ID or slug
     * @param array $queryParameters {
     *     @var bool $send_legal_notice Send formal legal notice with appeal information to owner (admin only)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteOrganizationNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteOrganizationGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteOrganization(string $org, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\DeleteOrganization($org, $queryParameters), $fetch);
    }
    /**
     * @param string $org The organization ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetOrganizationNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetOrganizationGoneException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\OrganizationRead : \Psr\Http\Message\ResponseInterface)
     */
    public function getOrganization(string $org, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetOrganization($org, $headerParameters), $fetch);
    }
    /**
     * @param string $org The organization ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateOrganizationBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateOrganizationForbiddenException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateOrganizationNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateOrganizationGoneException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\OrganizationRead : \Psr\Http\Message\ResponseInterface)
     */
    public function updateOrganization(string $org, \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UpdateOrganization($org, $payload, $headerParameters), $fetch);
    }
    /**
     * @param string $org The organization ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\AssignmentRead[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listOrganizationAssignments(string $org, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListOrganizationAssignments($org, $headerParameters), $fetch);
    }
    /**
     * @param string $org The organization ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\BadgeWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\BadgeRead : \Psr\Http\Message\ResponseInterface)
     */
    public function addOrganizationBadge(string $org, \Ecourty\DataGouv\DataGouv\Client\Model\BadgeWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\AddOrganizationBadge($org, $payload, $headerParameters), $fetch);
    }
    /**
     * @param string $badgeKind
     * @param string $org The organization ID or slug
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteOrganizationBadge(string $badgeKind, string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\DeleteOrganizationBadge($badgeKind, $org), $fetch);
    }
    /**
     * @param string $org The organization ID or slug
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfOrganizationNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfOrganizationGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function rdfOrganization(string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\RdfOrganization($org), $fetch);
    }
    /**
     * @param string $org The organization ID or slug
     * @param string $format
     * @param array $queryParameters {
     *     @var string $q The search query
     *     @var string $sort The field (and direction) on which sorting apply
     *     @var int $page The page to display
     *     @var array $tag
     *     @var string $license
     *     @var bool $featured If set to true, it will filter on featured datasets only. If set to false, it will exclude featured datasets.
     *     @var string $geozone
     *     @var string $granularity
     *     @var string $temporal_coverage
     *     @var string $access_type
     *     @var string $organization
     *     @var string $badge
     *     @var string $organization_badge
     *     @var string $owner
     *     @var string $followed_by (beta, subject to change/be removed)
     *     @var string $format
     *     @var string $schema
     *     @var string $schema_version
     *     @var string $topic
     *     @var string $credit
     *     @var string $dataservice
     *     @var string $reuse
     *     @var bool $archived If set to true, it will filter on archived datasets only. If set to false, it will exclude archived datasets. User must be authenticated and results are limited to user visibility
     *     @var bool $deleted If set to true, it will filter on deleted datasets only. If set to false, it will exclude deleted datasets. User must be authenticated and results are limited to user visibility
     *     @var bool $private If set to true, it will filter on private datasets only. If set to false, it will exclude private datasets. User must be authenticated and results are limited to user visibility
     *     @var int $page_size The page size
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfOrganizationFormatNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfOrganizationFormatGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function rdfOrganizationFormat(string $org, string $format, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\RdfOrganizationFormat($org, $format, $queryParameters), $fetch);
    }
    /**
     * @param string $org
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ContactPointPage : \Psr\Http\Message\ResponseInterface)
     */
    public function getOrganizationContactPoint(string $org, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetOrganizationContactPoint($org, $headerParameters), $fetch);
    }
    /**
     * @param string $org
     * @param array $queryParameters {
     *     @var string $q The string to autocomplete/suggest
     *     @var int $size The amount of suggestion to fetch
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ContactPointRead[] : \Psr\Http\Message\ResponseInterface)
     */
    public function suggestOrgContactPoints(string $org, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\SuggestOrgContactPoints($org, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param string $org
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetDataservicesCsvNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetDataservicesCsvGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getDataservicesCsv(string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetDataservicesCsv($org), $fetch);
    }
    /**
     * @param string $org The organization ID or slug
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetDatasetsResourcesCsvApiOrganizationsOrgOrgDatasetsResourcesCsvNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetDatasetsResourcesCsvApiOrganizationsOrgOrgDatasetsResourcesCsvGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getDatasetsResourcesCsvApiOrganizationsOrgOrgDatasetsResourcesCsv(string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetDatasetsResourcesCsvApiOrganizationsOrgOrgDatasetsResourcesCsv($org), $fetch);
    }
    /**
     * @param string $org The organization ID or slug
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetDatasetsCsvApiOrganizationsOrgOrgDatasetsCsvNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetDatasetsCsvApiOrganizationsOrgOrgDatasetsCsvGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getDatasetsCsvApiOrganizationsOrgOrgDatasetsCsv(string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetDatasetsCsvApiOrganizationsOrgOrgDatasetsCsv($org), $fetch);
    }
    /**
     * @param string $org
     * @param array $queryParameters {
     *     @var string $q The search query
     *     @var string $sort The field (and direction) on which sorting apply
     *     @var int $page The page to display
     *     @var int $page_size The page size
     *     @var array $tag
     *     @var string $license
     *     @var bool $featured If set to true, it will filter on featured datasets only. If set to false, it will exclude featured datasets.
     *     @var string $geozone
     *     @var string $granularity
     *     @var string $temporal_coverage
     *     @var string $access_type
     *     @var string $organization
     *     @var string $badge
     *     @var string $organization_badge
     *     @var string $owner
     *     @var string $followed_by (beta, subject to change/be removed)
     *     @var string $format
     *     @var string $schema
     *     @var string $schema_version
     *     @var string $topic
     *     @var string $credit
     *     @var string $dataservice
     *     @var string $reuse
     *     @var bool $archived If set to true, it will filter on archived datasets only. If set to false, it will exclude archived datasets. User must be authenticated and results are limited to user visibility
     *     @var bool $deleted If set to true, it will filter on deleted datasets only. If set to false, it will exclude deleted datasets. User must be authenticated and results are limited to user visibility
     *     @var bool $private If set to true, it will filter on private datasets only. If set to false, it will exclude private datasets. User must be authenticated and results are limited to user visibility
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\DatasetPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listOrganizationDatasets(string $org, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListOrganizationDatasets($org, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param string $org The organization ID or slug
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetDiscussionsCsvApiOrganizationsOrgOrgDiscussionsCsvNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetDiscussionsCsvApiOrganizationsOrgOrgDiscussionsCsvGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getDiscussionsCsvApiOrganizationsOrgOrgDiscussionsCsv(string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetDiscussionsCsvApiOrganizationsOrgOrgDiscussionsCsv($org), $fetch);
    }
    /**
     * @param string $org
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Discussion[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listOrganizationDiscussions(string $org, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListOrganizationDiscussions($org, $headerParameters), $fetch);
    }
    /**
     * @param string $org The organization ID or slug
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $file
     *     @var string $bbox
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\UploadedImage : \Psr\Http\Message\ResponseInterface)
     */
    public function organizationLogo(string $org, array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\OrganizationLogo($org, $formParameters, $headerParameters), $fetch);
    }
    /**
     * @param string $org The organization ID or slug
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $file
     *     @var string $bbox
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\UploadedImage : \Psr\Http\Message\ResponseInterface)
     */
    public function resizeOrganizationLogo(string $org, array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ResizeOrganizationLogo($org, $formParameters, $headerParameters), $fetch);
    }
    /**
     * @param string $org The organization ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\MembershipInvite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\InviteOrganizationMemberBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\InviteOrganizationMemberForbiddenException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\MembershipRequest : \Psr\Http\Message\ResponseInterface)
     */
    public function inviteOrganizationMember(string $org, \Ecourty\DataGouv\DataGouv\Client\Model\MembershipInvite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\InviteOrganizationMember($org, $payload, $headerParameters), $fetch);
    }
    /**
     * @param string $org The organization ID or slug
     * @param string $user
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteOrganizationMemberForbiddenException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteOrganizationMember(string $org, string $user, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\DeleteOrganizationMember($org, $user), $fetch);
    }
    /**
     * @param string $org The organization ID or slug
     * @param string $user
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\MemberWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateOrganizationMemberForbiddenException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\MemberRead : \Psr\Http\Message\ResponseInterface)
     */
    public function updateOrganizationMember(string $org, string $user, \Ecourty\DataGouv\DataGouv\Client\Model\MemberWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UpdateOrganizationMember($org, $user, $payload, $headerParameters), $fetch);
    }
    /**
     * Replaces all current assignments with the provided list.
     * @param string $org The organization ID or slug
     * @param string $user
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\SyncMemberAssignmentsForbiddenException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\AssignmentRead[] : \Psr\Http\Message\ResponseInterface)
     */
    public function syncMemberAssignments(string $org, string $user, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\SyncMemberAssignments($org, $user, $headerParameters), $fetch);
    }
    /**
     * @param string $org The organization ID or slug
     * @param array $queryParameters {
     *     @var string $status If provided, only return requests in a given status
     *     @var string $user If provided, only return requests for this user
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\ListMembershipRequestsForbiddenException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\MembershipRequest[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listMembershipRequests(string $org, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListMembershipRequests($org, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param string $org The organization ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\MembershipRequestWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\MembershipRequest : \Psr\Http\Message\ResponseInterface)
     */
    public function postMembershipRequestApiOrganizationsOrgOrgMembership(string $org, \Ecourty\DataGouv\DataGouv\Client\Model\MembershipRequestWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\PostMembershipRequestApiOrganizationsOrgOrgMembership($org, $payload, $headerParameters), $fetch);
    }
    /**
     * @param string $id
     * @param string $org The organization ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\MemberRead : \Psr\Http\Message\ResponseInterface)
     */
    public function acceptMembership(string $id, string $org, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\AcceptMembership($id, $org, $headerParameters), $fetch);
    }
    /**
     * @param string $id
     * @param string $org The organization ID or slug
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CancelMembershipBadRequestException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function cancelMembership(string $id, string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\CancelMembership($id, $org), $fetch);
    }
    /**
     * @param string $id
     * @param string $org The organization ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\RefuseMembership $payload
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function refuseMembership(string $id, string $org, \Ecourty\DataGouv\DataGouv\Client\Model\RefuseMembership $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\RefuseMembership($id, $org, $payload), $fetch);
    }
    /**
     * @param string $org
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ReuseRead[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listOrganizationReuses(string $org, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListOrganizationReuses($org, $headerParameters), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var int $page The page to display
     *     @var int $page_size The page size
     *     @var string $sort The field (and direction) on which sorting apply
     *     @var string $q
     *     @var string $kind
     *     @var bool $with_drafts `True` also returns the unpublished posts (only for super-admins)
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\PostPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listPosts(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListPosts($queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\PostWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CreatePostBadRequestException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\PostRead : \Psr\Http\Message\ResponseInterface)
     */
    public function createPost(\Ecourty\DataGouv\DataGouv\Client\Model\PostWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\CreatePost($payload, $headerParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function recentPostsAtomFeed(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\RecentPostsAtomFeed(), $fetch);
    }
    /**
     * @param string $post The post ID or slug
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeletePostNotFoundException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deletePost(string $post, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\DeletePost($post), $fetch);
    }
    /**
     * @param string $post The post ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetPostNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\PostRead : \Psr\Http\Message\ResponseInterface)
     */
    public function getPost(string $post, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetPost($post, $headerParameters), $fetch);
    }
    /**
     * @param string $post The post ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\PostWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdatePostBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdatePostNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\PostRead : \Psr\Http\Message\ResponseInterface)
     */
    public function updatePost(string $post, \Ecourty\DataGouv\DataGouv\Client\Model\PostWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UpdatePost($post, $payload, $headerParameters), $fetch);
    }
    /**
     * @param string $post
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $file
     *     @var string $bbox
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\UploadedImage : \Psr\Http\Message\ResponseInterface)
     */
    public function postImage(string $post, array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\PostImage($post, $formParameters, $headerParameters), $fetch);
    }
    /**
     * @param string $post
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $file
     *     @var string $bbox
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\UploadedImage : \Psr\Http\Message\ResponseInterface)
     */
    public function resizePostImage(string $post, array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ResizePostImage($post, $formParameters, $headerParameters), $fetch);
    }
    /**
     * @param string $post
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\PostRead : \Psr\Http\Message\ResponseInterface)
     */
    public function unpublishPost(string $post, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UnpublishPost($post, $headerParameters), $fetch);
    }
    /**
     * @param string $post
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\PostRead : \Psr\Http\Message\ResponseInterface)
     */
    public function publishPost(string $post, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\PublishPost($post, $headerParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getProconnectAuthApi(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetProconnectAuthApi(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getProconnectLoginApi(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetProconnectLoginApi(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getProconnectLogoutApi(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetProconnectLogoutApi(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getProconnectLogoutOAuthApi(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetProconnectLogoutOAuthApi(), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var int $page The page to display
     *     @var int $page_size The page size
     *     @var string $sort The field (and direction) on which sorting apply
     *     @var bool $handled
     *     @var string $subject_type
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ReportPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listReports(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListReports($queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\ReportWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CreateReportBadRequestException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ReportRead : \Psr\Http\Message\ResponseInterface)
     */
    public function createReport(\Ecourty\DataGouv\DataGouv\Client\Model\ReportWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\CreateReport($payload, $headerParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function listReportsReasons(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListReportsReasons(), $fetch);
    }
    /**
     * @param string $report
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ReportRead : \Psr\Http\Message\ResponseInterface)
     */
    public function getReport(string $report, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetReport($report, $headerParameters), $fetch);
    }
    /**
     * @param string $report
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\ReportWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateReportBadRequestException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ReportRead : \Psr\Http\Message\ResponseInterface)
     */
    public function updateReport(string $report, \Ecourty\DataGouv\DataGouv\Client\Model\ReportWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UpdateReport($report, $payload, $headerParameters), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var int $page The page to display
     *     @var int $page_size The page size
     *     @var string $sort The field (and direction) on which sorting apply
     *     @var string $q
     *     @var string $owner
     *     @var string $organization
     *     @var string $organization_badge
     *     @var string $type
     *     @var string $dataset
     *     @var string $dataservice
     *     @var string $tag
     *     @var string $topic
     *     @var bool $private
     *     @var bool $featured
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ReusePage : \Psr\Http\Message\ResponseInterface)
     */
    public function listReuses(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListReuses($queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\ReuseWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CreateReuseBadRequestException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ReuseRead : \Psr\Http\Message\ResponseInterface)
     */
    public function createReuse(\Ecourty\DataGouv\DataGouv\Client\Model\ReuseWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\CreateReuse($payload, $headerParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function availableReuseBadges(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\AvailableReuseBadges(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function recentReusesAtomFeed(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\RecentReusesAtomFeed(), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var string $q The string to autocomplete/suggest
     *     @var int $size The amount of suggestion to fetch
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ReuseSuggestion[] : \Psr\Http\Message\ResponseInterface)
     */
    public function suggestReuses(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\SuggestReuses($queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ReuseTopic[] : \Psr\Http\Message\ResponseInterface)
     */
    public function reuseTopics(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ReuseTopics($headerParameters), $fetch);
    }
    /**
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ReuseType[] : \Psr\Http\Message\ResponseInterface)
     */
    public function reuseTypes(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ReuseTypes($headerParameters), $fetch);
    }
    /**
     * Returns the number of followers left after the operation
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function unfollowReuse(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UnfollowReuse($id), $fetch);
    }
    /**
     * @param string $id
     * @param array $queryParameters {
     *     @var int $page The page to fetch
     *     @var int $page_size The page size to fetch
     *     @var string $user Filter follower by user, it allows to check if a user is following the object
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\FollowPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listReuseFollowers(string $id, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListReuseFollowers($id, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Returns the number of followers left after the operation
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function followReuse(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\FollowReuse($id), $fetch);
    }
    /**
     * @param string $reuse The reuse ID or slug
     * @param array $queryParameters {
     *     @var bool $send_legal_notice Send formal legal notice with appeal information to owner (admin only)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteReuseNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteReuseGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteReuse(string $reuse, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\DeleteReuse($reuse, $queryParameters), $fetch);
    }
    /**
     * @param string $reuse The reuse ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetReuseNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetReuseGoneException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ReuseRead : \Psr\Http\Message\ResponseInterface)
     */
    public function getReuse(string $reuse, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetReuse($reuse, $headerParameters), $fetch);
    }
    /**
     * @param string $reuse The reuse ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\ReuseWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateReuseBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateReuseNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateReuseGoneException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ReuseRead : \Psr\Http\Message\ResponseInterface)
     */
    public function updateReuse(string $reuse, \Ecourty\DataGouv\DataGouv\Client\Model\ReuseWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UpdateReuse($reuse, $payload, $headerParameters), $fetch);
    }
    /**
     * @param string $reuse The reuse ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\BadgeWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\BadgeRead : \Psr\Http\Message\ResponseInterface)
     */
    public function addReuseBadge(string $reuse, \Ecourty\DataGouv\DataGouv\Client\Model\BadgeWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\AddReuseBadge($reuse, $payload, $headerParameters), $fetch);
    }
    /**
     * @param string $badgeKind
     * @param string $reuse The reuse ID or slug
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteReuseBadge(string $badgeKind, string $reuse, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\DeleteReuseBadge($badgeKind, $reuse), $fetch);
    }
    /**
     * @param string $reuse The reuse ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceReference $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\ReuseAddDataserviceForbiddenException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ReuseRead : \Psr\Http\Message\ResponseInterface)
     */
    public function reuseAddDataservice(string $reuse, \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceReference $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ReuseAddDataservice($reuse, $payload, $headerParameters), $fetch);
    }
    /**
     * @param string $reuse The reuse ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\DatasetReference $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\ReuseAddDatasetForbiddenException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ReuseRead : \Psr\Http\Message\ResponseInterface)
     */
    public function reuseAddDataset(string $reuse, \Ecourty\DataGouv\DataGouv\Client\Model\DatasetReference $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ReuseAddDataset($reuse, $payload, $headerParameters), $fetch);
    }
    /**
     * @param string $reuse The reuse ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ReuseRead : \Psr\Http\Message\ResponseInterface)
     */
    public function unfeatureReuse(string $reuse, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UnfeatureReuse($reuse, $headerParameters), $fetch);
    }
    /**
     * @param string $reuse The reuse ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ReuseRead : \Psr\Http\Message\ResponseInterface)
     */
    public function featureReuse(string $reuse, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\FeatureReuse($reuse, $headerParameters), $fetch);
    }
    /**
     * @param string $reuse The reuse ID or slug
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $file
     *     @var string $bbox
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\UploadedImage : \Psr\Http\Message\ResponseInterface)
     */
    public function reuseImage(string $reuse, array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ReuseImage($reuse, $formParameters, $headerParameters), $fetch);
    }
    /**
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\SiteRead : \Psr\Http\Message\ResponseInterface)
     */
    public function getSite(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetSite($headerParameters), $fetch);
    }
    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\SiteWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\SiteRead : \Psr\Http\Message\ResponseInterface)
     */
    public function setSite(\Ecourty\DataGouv\DataGouv\Client\Model\SiteWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\SetSite($payload, $headerParameters), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var string $q The search query
     *     @var string $sort The field (and direction) on which sorting apply
     *     @var int $page The page to display
     *     @var array $tag
     *     @var string $license
     *     @var bool $featured If set to true, it will filter on featured datasets only. If set to false, it will exclude featured datasets.
     *     @var string $geozone
     *     @var string $granularity
     *     @var string $temporal_coverage
     *     @var string $access_type
     *     @var string $organization
     *     @var string $badge
     *     @var string $organization_badge
     *     @var string $owner
     *     @var string $followed_by (beta, subject to change/be removed)
     *     @var string $format
     *     @var string $schema
     *     @var string $schema_version
     *     @var string $topic
     *     @var string $credit
     *     @var string $dataservice
     *     @var string $reuse
     *     @var bool $archived If set to true, it will filter on archived datasets only. If set to false, it will exclude archived datasets. User must be authenticated and results are limited to user visibility
     *     @var bool $deleted If set to true, it will filter on deleted datasets only. If set to false, it will exclude deleted datasets. User must be authenticated and results are limited to user visibility
     *     @var bool $private If set to true, it will filter on private datasets only. If set to false, it will exclude private datasets. User must be authenticated and results are limited to user visibility
     *     @var int $page_size The page size
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getSiteRdfCatalog(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetSiteRdfCatalog($queryParameters), $fetch);
    }
    /**
     * Filtering, sorting and paginating abilities apply to the datasets elements.
     * @param string $format
     * @param array $queryParameters {
     *     @var string $q The search query
     *     @var string $sort The field (and direction) on which sorting apply
     *     @var int $page The page to display
     *     @var array $tag
     *     @var string $license
     *     @var bool $featured If set to true, it will filter on featured datasets only. If set to false, it will exclude featured datasets.
     *     @var string $geozone
     *     @var string $granularity
     *     @var string $temporal_coverage
     *     @var string $access_type
     *     @var string $organization
     *     @var string $badge
     *     @var string $organization_badge
     *     @var string $owner
     *     @var string $followed_by (beta, subject to change/be removed)
     *     @var string $format
     *     @var string $schema
     *     @var string $schema_version
     *     @var string $topic
     *     @var string $credit
     *     @var string $dataservice
     *     @var string $reuse
     *     @var bool $archived If set to true, it will filter on archived datasets only. If set to false, it will exclude archived datasets. User must be authenticated and results are limited to user visibility
     *     @var bool $deleted If set to true, it will filter on deleted datasets only. If set to false, it will exclude deleted datasets. User must be authenticated and results are limited to user visibility
     *     @var bool $private If set to true, it will filter on private datasets only. If set to false, it will exclude private datasets. User must be authenticated and results are limited to user visibility
     *     @var int $page_size The page size
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getSiteRdfCatalogFormat(string $format, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetSiteRdfCatalogFormat($format, $queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getSiteJsonLdContext(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetSiteJsonLdContext(), $fetch);
    }
    /**
     * @param string $format
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getSiteDataPortal(string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetSiteDataPortal($format), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getSiteDataservicesCsv(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetSiteDataservicesCsv(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getSiteDatasetsCsv(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetSiteDatasetsCsv(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getSiteHarvestsCsv(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetSiteHarvestsCsv(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getSiteOrganizationsCsv(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetSiteOrganizationsCsv(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getSiteResourcesCsv(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetSiteResourcesCsv(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getSiteReusesCsv(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetSiteReusesCsv(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getSiteTagsCsv(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetSiteTagsCsv(), $fetch);
    }
    /**
     * @param string $level
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\GeoJSONFeatureCollection[] : \Psr\Http\Message\ResponseInterface)
     */
    public function spatialCoverage(string $level, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\SpatialCoverage($level, $headerParameters), $fetch);
    }
    /**
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\GeoGranularity[] : \Psr\Http\Message\ResponseInterface)
     */
    public function spatialGranularities(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\SpatialGranularities($headerParameters), $fetch);
    }
    /**
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\GeoLevel[] : \Psr\Http\Message\ResponseInterface)
     */
    public function spatialLevels(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\SpatialLevels($headerParameters), $fetch);
    }
    /**
     * @param string $id A zone identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function spatialZone(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\SpatialZone($id), $fetch);
    }
    /**
     * @param string $id A zone identifier
     * @param array $queryParameters {
     *     @var bool $dynamic Append dynamic datasets
     *     @var int $size The amount of datasets to fetch
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\DatasetReference : \Psr\Http\Message\ResponseInterface)
     */
    public function spatialZoneDatasets(string $id, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\SpatialZoneDatasets($id, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var string $q The string to autocomplete/suggest
     *     @var int $size The amount of suggestion to fetch
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\TerritorySuggestion[] : \Psr\Http\Message\ResponseInterface)
     */
    public function suggestZones(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\SuggestZones($queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param string $ids A zone identifiers list (comma separated)
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\GeoJSONFeatureCollection : \Psr\Http\Message\ResponseInterface)
     */
    public function spatialZones(string $ids, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\SpatialZones($ids, $headerParameters), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var string $q The string to autocomplete/suggest
     *     @var int $size The amount of suggestion to fetch
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function suggestTags(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\SuggestTags($queryParameters), $fetch);
    }
    /**
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Transfer[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listTransfers(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListTransfers($headerParameters), $fetch);
    }
    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\TransferRequest $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Transfer : \Psr\Http\Message\ResponseInterface)
     */
    public function requestTransfer(\Ecourty\DataGouv\DataGouv\Client\Model\TransferRequest $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\RequestTransfer($payload, $headerParameters), $fetch);
    }
    /**
     * @param string $id
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Transfer : \Psr\Http\Message\ResponseInterface)
     */
    public function getTransfer(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetTransfer($id, $headerParameters), $fetch);
    }
    /**
     * @param string $id
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\TransferResponse $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Transfer : \Psr\Http\Message\ResponseInterface)
     */
    public function respondToTransfer(string $id, \Ecourty\DataGouv\DataGouv\Client\Model\TransferResponse $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\RespondToTransfer($id, $payload, $headerParameters), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var string $q The search query
     *     @var string $sort The field (and direction) on which sorting apply
     *     @var int $page The page to display
     *     @var int $page_size The page size
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\UserPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listUsers(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListUsers($queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\User $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CreateUserBadRequestException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\User : \Psr\Http\Message\ResponseInterface)
     */
    public function createUser(\Ecourty\DataGouv\DataGouv\Client\Model\User $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\CreateUser($payload, $headerParameters), $fetch);
    }
    /**
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\UserRole[] : \Psr\Http\Message\ResponseInterface)
     */
    public function userRoles(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UserRoles($headerParameters), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var string $q The string to autocomplete/suggest
     *     @var string $size The amount of suggestion to fetch (between 1 and 20)
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\UserSuggestion[] : \Psr\Http\Message\ResponseInterface)
     */
    public function suggestUsers(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\SuggestUsers($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Returns the number of followers left after the operation
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function unfollowUser(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UnfollowUser($id), $fetch);
    }
    /**
     * @param string $id
     * @param array $queryParameters {
     *     @var int $page The page to fetch
     *     @var int $page_size The page size to fetch
     *     @var string $user Filter follower by user, it allows to check if a user is following the object
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\FollowPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listUserFollowers(string $id, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListUserFollowers($id, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param string $id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\FollowUserForbiddenException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function followUser(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\FollowUser($id), $fetch);
    }
    /**
     * @param string $user
     * @param array $queryParameters {
     *     @var bool $send_legal_notice Send formal legal notice with appeal information to owner (admin only)
     *     @var bool $no_mail Do not send the simple deletion notification email. Note: automatically set to True when send_legal_notice=True to avoid sending duplicate emails.
     *     @var bool $delete_comments Delete comments posted by the user upon user deletion
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteUserForbiddenException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteUserNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteUserGoneException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteUser(string $user, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\DeleteUser($user, $queryParameters), $fetch);
    }
    /**
     * @param string $user
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetUserNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetUserGoneException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\User : \Psr\Http\Message\ResponseInterface)
     */
    public function getUser(string $user, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetUser($user, $headerParameters), $fetch);
    }
    /**
     * @param string $user
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\User $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateUserBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateUserNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateUserGoneException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\User : \Psr\Http\Message\ResponseInterface)
     */
    public function updateUser(string $user, \Ecourty\DataGouv\DataGouv\Client\Model\User $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UpdateUser($user, $payload, $headerParameters), $fetch);
    }
    /**
     * @param string $user
     * @param array $formParameters {
     *     @var string|resource|\Psr\Http\Message\StreamInterface $file
     *     @var string $bbox
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\UploadedImage : \Psr\Http\Message\ResponseInterface)
     */
    public function userAvatar(string $user, array $formParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UserAvatar($user, $formParameters, $headerParameters), $fetch);
    }
    /**
     * @param string $user
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ContactPointPage : \Psr\Http\Message\ResponseInterface)
     */
    public function getUserContactPoint(string $user, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetUserContactPoint($user, $headerParameters), $fetch);
    }
    /**
     * @param string $user
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RotateUserPasswordNotFoundException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function rotateUserPassword(string $user, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\RotateUserPassword($user), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var int $page The page to display
     *     @var int $page_size The page size
     *     @var string $sort The field (and direction) on which sorting apply
     *     @var string $owner
     *     @var string $organization
     *     @var bool $private
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ChartPage : \Psr\Http\Message\ResponseInterface)
     */
    public function listVisualizations(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListVisualizations($queryParameters, $headerParameters), $fetch);
    }
    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\ChartWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CreateVisualizationBadRequestException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ChartRead : \Psr\Http\Message\ResponseInterface)
     */
    public function createVisualization(\Ecourty\DataGouv\DataGouv\Client\Model\ChartWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\CreateVisualization($payload, $headerParameters), $fetch);
    }
    /**
     * @param string $visualization The visualization ID or slug
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteVisualization(string $visualization, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\DeleteVisualization($visualization), $fetch);
    }
    /**
     * @param string $visualization The visualization ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ChartRead : \Psr\Http\Message\ResponseInterface)
     */
    public function getVisualization(string $visualization, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetVisualization($visualization, $headerParameters), $fetch);
    }
    /**
     * @param string $visualization The visualization ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\ChartWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateVisualizationBadRequestException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\ChartRead : \Psr\Http\Message\ResponseInterface)
     */
    public function updateVisualization(string $visualization, \Ecourty\DataGouv\DataGouv\Client\Model\ChartWrite $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\UpdateVisualization($visualization, $payload, $headerParameters), $fetch);
    }
    /**
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Job[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listJobs(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\ListJobs($headerParameters), $fetch);
    }
    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\Job $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Job : \Psr\Http\Message\ResponseInterface)
     */
    public function postJobsApi(\Ecourty\DataGouv\DataGouv\Client\Model\Job $payload, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\PostJobsApi($payload, $headerParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getJobsReferenceApi(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetJobsReferenceApi(), $fetch);
    }
    /**
     * @param string $id A job ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteJobApi(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\DeleteJobApi($id), $fetch);
    }
    /**
     * @param string $id A job ID
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Job : \Psr\Http\Message\ResponseInterface)
     */
    public function getJobApi(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetJobApi($id, $headerParameters), $fetch);
    }
    /**
     * @param string $id A job ID
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Job : \Psr\Http\Message\ResponseInterface)
     */
    public function putJobApi(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\PutJobApi($id, $headerParameters), $fetch);
    }
    /**
     * @param string $id
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataGouv\Client\Model\Task : \Psr\Http\Message\ResponseInterface)
     */
    public function getTaskApi(string $id, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataGouv\Client\Endpoint\GetTaskApi($id, $headerParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://www.data.gouv.fr/api/1');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Ecourty\DataGouv\DataGouv\Client\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}