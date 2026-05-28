<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Api;

use Ecourty\DataGouv\DataGouv\Client\Client;
use Ecourty\DataGouv\DataGouv\Client\Exception\ClientException;
use Ecourty\DataGouv\DataGouv\Exception\ApiException;
use Ecourty\DataGouv\DataGouv\Exception\AuthenticationException;
use Ecourty\DataGouv\DataGouv\Exception\DataGouvException;
use Ecourty\DataGouv\DataGouv\Exception\ForbiddenException;
use Ecourty\DataGouv\DataGouv\Exception\NotFoundException;

/**
 * Sub-client for the "organizations" tag.
 */
final class OrganizationsApi
{
    public function __construct(private readonly Client $client)
    {
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
     *
     */
        public function listOrganizations(array $queryParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\OrganizationPage
    {
        try {
            return $this->client->listOrganizations($queryParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CreateOrganizationBadRequestException
     *
     */
        public function createOrganization(\Ecourty\DataGouv\DataGouv\Client\Model\OrganizationWrite $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\OrganizationRead
    {
        try {
            return $this->client->createOrganization($payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     *
     */
        public function availableOrganizationBadges(): mixed
    {
        try {
            return $this->client->availableOrganizationBadges(\Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function orgRoles(array $headerParameters = []): null|array
    {
        try {
            return $this->client->orgRoles($headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param array $queryParameters {
     *     @var string $q The string to autocomplete/suggest
     *     @var int $size The amount of suggestion to fetch
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function suggestOrganizations(array $queryParameters = [], array $headerParameters = []): null|array
    {
        try {
            return $this->client->suggestOrganizations($queryParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * Returns the number of followers left after the operation
     * @param string $id
     *
     */
        public function unfollowOrganization(string $id): mixed
    {
        try {
            return $this->client->unfollowOrganization($id, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
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
     *
     */
        public function listOrganizationFollowers(string $id, array $queryParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\FollowPage
    {
        try {
            return $this->client->listOrganizationFollowers($id, $queryParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * Returns the number of followers left after the operation
     * @param string $id
     *
     */
        public function followOrganization(string $id): mixed
    {
        try {
            return $this->client->followOrganization($id, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $org The organization ID or slug
     * @param array $queryParameters {
     *     @var bool $send_legal_notice Send formal legal notice with appeal information to owner (admin only)
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteOrganizationNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteOrganizationGoneException
     *
     */
        public function deleteOrganization(string $org, array $queryParameters = []): mixed
    {
        try {
            return $this->client->deleteOrganization($org, $queryParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $org The organization ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetOrganizationNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetOrganizationGoneException
     *
     */
        public function getOrganization(string $org, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\OrganizationRead
    {
        try {
            return $this->client->getOrganization($org, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $org The organization ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateOrganizationBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateOrganizationForbiddenException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateOrganizationNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateOrganizationGoneException
     *
     */
        public function updateOrganization(string $org, \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationWrite $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\OrganizationRead
    {
        try {
            return $this->client->updateOrganization($org, $payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $org The organization ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function listOrganizationAssignments(string $org, array $headerParameters = []): null|array
    {
        try {
            return $this->client->listOrganizationAssignments($org, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $org The organization ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\BadgeWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function addOrganizationBadge(string $org, \Ecourty\DataGouv\DataGouv\Client\Model\BadgeWrite $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\BadgeRead
    {
        try {
            return $this->client->addOrganizationBadge($org, $payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $badgeKind
     * @param string $org The organization ID or slug
     *
     */
        public function deleteOrganizationBadge(string $badgeKind, string $org): mixed
    {
        try {
            return $this->client->deleteOrganizationBadge($badgeKind, $org, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $org The organization ID or slug
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfOrganizationNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfOrganizationGoneException
     *
     */
        public function rdfOrganization(string $org): mixed
    {
        try {
            return $this->client->rdfOrganization($org, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfOrganizationFormatNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\RdfOrganizationFormatGoneException
     *
     */
        public function rdfOrganizationFormat(string $org, string $format, array $queryParameters = []): mixed
    {
        try {
            return $this->client->rdfOrganizationFormat($org, $format, $queryParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $org
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function getOrganizationContactPoint(string $org, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\ContactPointPage
    {
        try {
            return $this->client->getOrganizationContactPoint($org, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
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
     *
     */
        public function suggestOrgContactPoints(string $org, array $queryParameters = [], array $headerParameters = []): null|array
    {
        try {
            return $this->client->suggestOrgContactPoints($org, $queryParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $org
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetDataservicesCsvNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetDataservicesCsvGoneException
     *
     */
        public function getDataservicesCsv(string $org): mixed
    {
        try {
            return $this->client->getDataservicesCsv($org, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
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
     *
     */
        public function listOrganizationDatasets(string $org, array $queryParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\DatasetPage
    {
        try {
            return $this->client->listOrganizationDatasets($org, $queryParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $org
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function listOrganizationDiscussions(string $org, array $headerParameters = []): null|array
    {
        try {
            return $this->client->listOrganizationDiscussions($org, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
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
     *
     */
        public function organizationLogo(string $org, array $formParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\UploadedImage
    {
        try {
            return $this->client->organizationLogo($org, $formParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
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
     *
     */
        public function resizeOrganizationLogo(string $org, array $formParameters = [], array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\UploadedImage
    {
        try {
            return $this->client->resizeOrganizationLogo($org, $formParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $org The organization ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\MembershipInvite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\InviteOrganizationMemberBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\InviteOrganizationMemberForbiddenException
     *
     */
        public function inviteOrganizationMember(string $org, \Ecourty\DataGouv\DataGouv\Client\Model\MembershipInvite $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\MembershipRequest
    {
        try {
            return $this->client->inviteOrganizationMember($org, $payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $org The organization ID or slug
     * @param string $user
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteOrganizationMemberForbiddenException
     *
     */
        public function deleteOrganizationMember(string $org, string $user): mixed
    {
        try {
            return $this->client->deleteOrganizationMember($org, $user, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $org The organization ID or slug
     * @param string $user
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\MemberWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateOrganizationMemberForbiddenException
     *
     */
        public function updateOrganizationMember(string $org, string $user, \Ecourty\DataGouv\DataGouv\Client\Model\MemberWrite $payload, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\MemberRead
    {
        try {
            return $this->client->updateOrganizationMember($org, $user, $payload, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * Replaces all current assignments with the provided list.
     * @param string $org The organization ID or slug
     * @param string $user
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\SyncMemberAssignmentsForbiddenException
     *
     */
        public function syncMemberAssignments(string $org, string $user, array $headerParameters = []): null|array
    {
        try {
            return $this->client->syncMemberAssignments($org, $user, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\ListMembershipRequestsForbiddenException
     *
     */
        public function listMembershipRequests(string $org, array $queryParameters = [], array $headerParameters = []): null|array
    {
        try {
            return $this->client->listMembershipRequests($org, $queryParameters, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $id
     * @param string $org The organization ID or slug
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function acceptMembership(string $id, string $org, array $headerParameters = []): null|\Ecourty\DataGouv\DataGouv\Client\Model\MemberRead
    {
        try {
            return $this->client->acceptMembership($id, $org, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $id
     * @param string $org The organization ID or slug
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\CancelMembershipBadRequestException
     *
     */
        public function cancelMembership(string $id, string $org): mixed
    {
        try {
            return $this->client->cancelMembership($id, $org, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $id
     * @param string $org The organization ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\RefuseMembership $payload
     *
     */
        public function refuseMembership(string $id, string $org, \Ecourty\DataGouv\DataGouv\Client\Model\RefuseMembership $payload): mixed
    {
        try {
            return $this->client->refuseMembership($id, $org, $payload, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param string $org
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     *
     */
        public function listOrganizationReuses(string $org, array $headerParameters = []): null|array
    {
        try {
            return $this->client->listOrganizationReuses($org, $headerParameters, \Ecourty\DataGouv\DataGouv\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataGouv\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    private function convertException(ClientException $e): DataGouvException
    {
        return match ($e->getCode()) {
            401 => new AuthenticationException($e->getMessage(), $e),
            403 => new ForbiddenException($e->getMessage(), $e),
            404, 410 => new NotFoundException($e->getMessage(), $e),
            default => new ApiException($e->getMessage(), $e->getCode(), $e),
        };
    }
}