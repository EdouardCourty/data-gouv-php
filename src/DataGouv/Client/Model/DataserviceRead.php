<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DataserviceRead
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<AccessAudienceRead>
     */
    protected $accessAudiences;
    /**
     * @var string|null
     */
    protected $accessType;
    /**
     * @var string|null
     */
    protected $accessTypeReason;
    /**
     * @var string|null
     */
    protected $accessTypeReasonCategory;
    /**
     * @var string|null
     */
    protected $acronym;
    /**
     * @var \DateTime|null
     */
    protected $archivedAt;
    /**
     * @var string|null
     */
    protected $authorizationRequestUrl;
    /**
     * @var float|null
     */
    protected $availability;
    /**
     * @var string|null
     */
    protected $availabilityUrl;
    /**
     * @var list<DataserviceReadBadgesItem>
     */
    protected $badges;
    /**
     * @var string|null
     */
    protected $baseApiUrl;
    /**
     * @var string|null
     */
    protected $businessDocumentationUrl;
    /**
     * @var list<ContactPointRead>
     */
    protected $contactPoints;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Visit this API link to see the list.
     */
    protected $datasets;
    /**
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * @var string|null
     */
    protected $description;
    protected $extras;
    /**
     * @var bool|null
     */
    protected $featured;
    /**
     * @var string|null
     */
    protected $format;
    /**
     * @var DataserviceReadHarvest
     */
    protected $harvest;
    /**
     * @var string
     */
    protected $id;
    /**
     * The ID of the license
     *
     * @var string|null
     */
    protected $license;
    /**
     * Swagger link, OpenAPI format, WMS XML…
     *
     * @var string|null
     */
    protected $machineDocumentationUrl;
    /**
     * @var \DateTime
     */
    protected $metadataModifiedAt;
    protected $metrics;
    /**
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     */
    protected $organization;
    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
     */
    protected $owner;
    /**
     * @var DataserviceReadPermissions
     */
    protected $permissions;
    /**
     * Is the dataservice private to the owner or the organization
     *
     * @var bool|null
     */
    protected $private;
    /**
     * @var string|null
     */
    protected $rateLimiting;
    /**
     * @var string|null
     */
    protected $rateLimitingUrl;
    /**
     * Link to the API endpoint for this dataservice
     *
     * @var string|null
     */
    protected $selfApiUrl;
    /**
     * Link to the udata web page for this dataservice
     *
     * @var string|null
     */
    protected $selfWebUrl;
    /**
     * @var string
     */
    protected $slug;
    /**
     * @var list<string>
     */
    protected $tags;
    /**
     * HTML version of a Swagger…
     *
     * @var string|null
     */
    protected $technicalDocumentationUrl;
    /**
     * @var string
     */
    protected $title;

    /**
     * @return list<AccessAudienceRead>
     */
    public function getAccessAudiences(): array
    {
        return $this->accessAudiences;
    }

    /**
     * @param list<AccessAudienceRead> $accessAudiences
     */
    public function setAccessAudiences(array $accessAudiences): self
    {
        $this->initialized['accessAudiences'] = true;
        $this->accessAudiences = $accessAudiences;

        return $this;
    }

    public function getAccessType(): ?string
    {
        return $this->accessType;
    }

    public function setAccessType(?string $accessType): self
    {
        $this->initialized['accessType'] = true;
        $this->accessType = $accessType;

        return $this;
    }

    public function getAccessTypeReason(): ?string
    {
        return $this->accessTypeReason;
    }

    public function setAccessTypeReason(?string $accessTypeReason): self
    {
        $this->initialized['accessTypeReason'] = true;
        $this->accessTypeReason = $accessTypeReason;

        return $this;
    }

    public function getAccessTypeReasonCategory(): ?string
    {
        return $this->accessTypeReasonCategory;
    }

    public function setAccessTypeReasonCategory(?string $accessTypeReasonCategory): self
    {
        $this->initialized['accessTypeReasonCategory'] = true;
        $this->accessTypeReasonCategory = $accessTypeReasonCategory;

        return $this;
    }

    public function getAcronym(): ?string
    {
        return $this->acronym;
    }

    public function setAcronym(?string $acronym): self
    {
        $this->initialized['acronym'] = true;
        $this->acronym = $acronym;

        return $this;
    }

    public function getArchivedAt(): ?\DateTime
    {
        return $this->archivedAt;
    }

    public function setArchivedAt(?\DateTime $archivedAt): self
    {
        $this->initialized['archivedAt'] = true;
        $this->archivedAt = $archivedAt;

        return $this;
    }

    public function getAuthorizationRequestUrl(): ?string
    {
        return $this->authorizationRequestUrl;
    }

    public function setAuthorizationRequestUrl(?string $authorizationRequestUrl): self
    {
        $this->initialized['authorizationRequestUrl'] = true;
        $this->authorizationRequestUrl = $authorizationRequestUrl;

        return $this;
    }

    public function getAvailability(): ?float
    {
        return $this->availability;
    }

    public function setAvailability(?float $availability): self
    {
        $this->initialized['availability'] = true;
        $this->availability = $availability;

        return $this;
    }

    public function getAvailabilityUrl(): ?string
    {
        return $this->availabilityUrl;
    }

    public function setAvailabilityUrl(?string $availabilityUrl): self
    {
        $this->initialized['availabilityUrl'] = true;
        $this->availabilityUrl = $availabilityUrl;

        return $this;
    }

    /**
     * @return list<DataserviceReadBadgesItem>
     */
    public function getBadges(): array
    {
        return $this->badges;
    }

    /**
     * @param list<DataserviceReadBadgesItem> $badges
     */
    public function setBadges(array $badges): self
    {
        $this->initialized['badges'] = true;
        $this->badges = $badges;

        return $this;
    }

    public function getBaseApiUrl(): ?string
    {
        return $this->baseApiUrl;
    }

    public function setBaseApiUrl(?string $baseApiUrl): self
    {
        $this->initialized['baseApiUrl'] = true;
        $this->baseApiUrl = $baseApiUrl;

        return $this;
    }

    public function getBusinessDocumentationUrl(): ?string
    {
        return $this->businessDocumentationUrl;
    }

    public function setBusinessDocumentationUrl(?string $businessDocumentationUrl): self
    {
        $this->initialized['businessDocumentationUrl'] = true;
        $this->businessDocumentationUrl = $businessDocumentationUrl;

        return $this;
    }

    /**
     * @return list<ContactPointRead>
     */
    public function getContactPoints(): array
    {
        return $this->contactPoints;
    }

    /**
     * @param list<ContactPointRead> $contactPoints
     */
    public function setContactPoints(array $contactPoints): self
    {
        $this->initialized['contactPoints'] = true;
        $this->contactPoints = $contactPoints;

        return $this;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Visit this API link to see the list.
     */
    public function getDatasets()
    {
        return $this->datasets;
    }

    /**
     * Visit this API link to see the list.
     */
    public function setDatasets($datasets): self
    {
        $this->initialized['datasets'] = true;
        $this->datasets = $datasets;

        return $this;
    }

    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(?\DateTime $deletedAt): self
    {
        $this->initialized['deletedAt'] = true;
        $this->deletedAt = $deletedAt;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getExtras()
    {
        return $this->extras;
    }

    public function setExtras($extras): self
    {
        $this->initialized['extras'] = true;
        $this->extras = $extras;

        return $this;
    }

    public function getFeatured(): ?bool
    {
        return $this->featured;
    }

    public function setFeatured(?bool $featured): self
    {
        $this->initialized['featured'] = true;
        $this->featured = $featured;

        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(?string $format): self
    {
        $this->initialized['format'] = true;
        $this->format = $format;

        return $this;
    }

    public function getHarvest(): DataserviceReadHarvest
    {
        return $this->harvest;
    }

    public function setHarvest(DataserviceReadHarvest $harvest): self
    {
        $this->initialized['harvest'] = true;
        $this->harvest = $harvest;

        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The ID of the license
     */
    public function getLicense(): ?string
    {
        return $this->license;
    }

    /**
     * The ID of the license
     */
    public function setLicense(?string $license): self
    {
        $this->initialized['license'] = true;
        $this->license = $license;

        return $this;
    }

    /**
     * Swagger link, OpenAPI format, WMS XML…
     */
    public function getMachineDocumentationUrl(): ?string
    {
        return $this->machineDocumentationUrl;
    }

    /**
     * Swagger link, OpenAPI format, WMS XML…
     */
    public function setMachineDocumentationUrl(?string $machineDocumentationUrl): self
    {
        $this->initialized['machineDocumentationUrl'] = true;
        $this->machineDocumentationUrl = $machineDocumentationUrl;

        return $this;
    }

    public function getMetadataModifiedAt(): \DateTime
    {
        return $this->metadataModifiedAt;
    }

    public function setMetadataModifiedAt(\DateTime $metadataModifiedAt): self
    {
        $this->initialized['metadataModifiedAt'] = true;
        $this->metadataModifiedAt = $metadataModifiedAt;

        return $this;
    }

    public function getMetrics()
    {
        return $this->metrics;
    }

    public function setMetrics($metrics): self
    {
        $this->initialized['metrics'] = true;
        $this->metrics = $metrics;

        return $this;
    }

    /**
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     */
    public function setOrganization($organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }

    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
     */
    public function setOwner($owner): self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;

        return $this;
    }

    public function getPermissions(): DataserviceReadPermissions
    {
        return $this->permissions;
    }

    public function setPermissions(DataserviceReadPermissions $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;

        return $this;
    }

    /**
     * Is the dataservice private to the owner or the organization
     */
    public function getPrivate(): ?bool
    {
        return $this->private;
    }

    /**
     * Is the dataservice private to the owner or the organization
     */
    public function setPrivate(?bool $private): self
    {
        $this->initialized['private'] = true;
        $this->private = $private;

        return $this;
    }

    public function getRateLimiting(): ?string
    {
        return $this->rateLimiting;
    }

    public function setRateLimiting(?string $rateLimiting): self
    {
        $this->initialized['rateLimiting'] = true;
        $this->rateLimiting = $rateLimiting;

        return $this;
    }

    public function getRateLimitingUrl(): ?string
    {
        return $this->rateLimitingUrl;
    }

    public function setRateLimitingUrl(?string $rateLimitingUrl): self
    {
        $this->initialized['rateLimitingUrl'] = true;
        $this->rateLimitingUrl = $rateLimitingUrl;

        return $this;
    }

    /**
     * Link to the API endpoint for this dataservice
     */
    public function getSelfApiUrl(): ?string
    {
        return $this->selfApiUrl;
    }

    /**
     * Link to the API endpoint for this dataservice
     */
    public function setSelfApiUrl(?string $selfApiUrl): self
    {
        $this->initialized['selfApiUrl'] = true;
        $this->selfApiUrl = $selfApiUrl;

        return $this;
    }

    /**
     * Link to the udata web page for this dataservice
     */
    public function getSelfWebUrl(): ?string
    {
        return $this->selfWebUrl;
    }

    /**
     * Link to the udata web page for this dataservice
     */
    public function setSelfWebUrl(?string $selfWebUrl): self
    {
        $this->initialized['selfWebUrl'] = true;
        $this->selfWebUrl = $selfWebUrl;

        return $this;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param list<string> $tags
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;

        return $this;
    }

    /**
     * HTML version of a Swagger…
     */
    public function getTechnicalDocumentationUrl(): ?string
    {
        return $this->technicalDocumentationUrl;
    }

    /**
     * HTML version of a Swagger…
     */
    public function setTechnicalDocumentationUrl(?string $technicalDocumentationUrl): self
    {
        $this->initialized['technicalDocumentationUrl'] = true;
        $this->technicalDocumentationUrl = $technicalDocumentationUrl;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }
}
