<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DataserviceWrite
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<AccessAudienceWrite>
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
     * @var string|null
     */
    protected $baseApiUrl;
    /**
     * @var string|null
     */
    protected $businessDocumentationUrl;
    /**
     * @var list<string>
     */
    protected $contactPoints;
    /**
     * @var list<string>
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
    /**
     * @var mixed
     */
    protected $extras;
    /**
     * @var string|null
     */
    protected $format;
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
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     *
     * @var string|null
     */
    protected $organization;
    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
     *
     * @var string|null
     */
    protected $owner;
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
     * @return list<AccessAudienceWrite>
     */
    public function getAccessAudiences(): array
    {
        return $this->accessAudiences;
    }
    /**
     * @param list<AccessAudienceWrite> $accessAudiences
     *
     * @return self
     */
    public function setAccessAudiences(array $accessAudiences): self
    {
        $this->initialized['accessAudiences'] = true;
        $this->accessAudiences = $accessAudiences;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getAccessType(): ?string
    {
        return $this->accessType;
    }
    /**
     * @param string|null $accessType
     *
     * @return self
     */
    public function setAccessType(?string $accessType): self
    {
        $this->initialized['accessType'] = true;
        $this->accessType = $accessType;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getAccessTypeReason(): ?string
    {
        return $this->accessTypeReason;
    }
    /**
     * @param string|null $accessTypeReason
     *
     * @return self
     */
    public function setAccessTypeReason(?string $accessTypeReason): self
    {
        $this->initialized['accessTypeReason'] = true;
        $this->accessTypeReason = $accessTypeReason;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getAccessTypeReasonCategory(): ?string
    {
        return $this->accessTypeReasonCategory;
    }
    /**
     * @param string|null $accessTypeReasonCategory
     *
     * @return self
     */
    public function setAccessTypeReasonCategory(?string $accessTypeReasonCategory): self
    {
        $this->initialized['accessTypeReasonCategory'] = true;
        $this->accessTypeReasonCategory = $accessTypeReasonCategory;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getAcronym(): ?string
    {
        return $this->acronym;
    }
    /**
     * @param string|null $acronym
     *
     * @return self
     */
    public function setAcronym(?string $acronym): self
    {
        $this->initialized['acronym'] = true;
        $this->acronym = $acronym;
        return $this;
    }
    /**
     * @return \DateTime|null
     */
    public function getArchivedAt(): ?\DateTime
    {
        return $this->archivedAt;
    }
    /**
     * @param \DateTime|null $archivedAt
     *
     * @return self
     */
    public function setArchivedAt(?\DateTime $archivedAt): self
    {
        $this->initialized['archivedAt'] = true;
        $this->archivedAt = $archivedAt;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getAuthorizationRequestUrl(): ?string
    {
        return $this->authorizationRequestUrl;
    }
    /**
     * @param string|null $authorizationRequestUrl
     *
     * @return self
     */
    public function setAuthorizationRequestUrl(?string $authorizationRequestUrl): self
    {
        $this->initialized['authorizationRequestUrl'] = true;
        $this->authorizationRequestUrl = $authorizationRequestUrl;
        return $this;
    }
    /**
     * @return float|null
     */
    public function getAvailability(): ?float
    {
        return $this->availability;
    }
    /**
     * @param float|null $availability
     *
     * @return self
     */
    public function setAvailability(?float $availability): self
    {
        $this->initialized['availability'] = true;
        $this->availability = $availability;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getAvailabilityUrl(): ?string
    {
        return $this->availabilityUrl;
    }
    /**
     * @param string|null $availabilityUrl
     *
     * @return self
     */
    public function setAvailabilityUrl(?string $availabilityUrl): self
    {
        $this->initialized['availabilityUrl'] = true;
        $this->availabilityUrl = $availabilityUrl;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getBaseApiUrl(): ?string
    {
        return $this->baseApiUrl;
    }
    /**
     * @param string|null $baseApiUrl
     *
     * @return self
     */
    public function setBaseApiUrl(?string $baseApiUrl): self
    {
        $this->initialized['baseApiUrl'] = true;
        $this->baseApiUrl = $baseApiUrl;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getBusinessDocumentationUrl(): ?string
    {
        return $this->businessDocumentationUrl;
    }
    /**
     * @param string|null $businessDocumentationUrl
     *
     * @return self
     */
    public function setBusinessDocumentationUrl(?string $businessDocumentationUrl): self
    {
        $this->initialized['businessDocumentationUrl'] = true;
        $this->businessDocumentationUrl = $businessDocumentationUrl;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getContactPoints(): array
    {
        return $this->contactPoints;
    }
    /**
     * @param list<string> $contactPoints
     *
     * @return self
     */
    public function setContactPoints(array $contactPoints): self
    {
        $this->initialized['contactPoints'] = true;
        $this->contactPoints = $contactPoints;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getDatasets(): array
    {
        return $this->datasets;
    }
    /**
     * @param list<string> $datasets
     *
     * @return self
     */
    public function setDatasets(array $datasets): self
    {
        $this->initialized['datasets'] = true;
        $this->datasets = $datasets;
        return $this;
    }
    /**
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * @param \DateTime|null $deletedAt
     *
     * @return self
     */
    public function setDeletedAt(?\DateTime $deletedAt): self
    {
        $this->initialized['deletedAt'] = true;
        $this->deletedAt = $deletedAt;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getExtras()
    {
        return $this->extras;
    }
    /**
     * @param mixed $extras
     *
     * @return self
     */
    public function setExtras($extras): self
    {
        $this->initialized['extras'] = true;
        $this->extras = $extras;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }
    /**
     * @param string|null $format
     *
     * @return self
     */
    public function setFormat(?string $format): self
    {
        $this->initialized['format'] = true;
        $this->format = $format;
        return $this;
    }
    /**
     * The ID of the license
     *
     * @return string|null
     */
    public function getLicense(): ?string
    {
        return $this->license;
    }
    /**
     * The ID of the license
     *
     * @param string|null $license
     *
     * @return self
     */
    public function setLicense(?string $license): self
    {
        $this->initialized['license'] = true;
        $this->license = $license;
        return $this;
    }
    /**
     * Swagger link, OpenAPI format, WMS XML…
     *
     * @return string|null
     */
    public function getMachineDocumentationUrl(): ?string
    {
        return $this->machineDocumentationUrl;
    }
    /**
     * Swagger link, OpenAPI format, WMS XML…
     *
     * @param string|null $machineDocumentationUrl
     *
     * @return self
     */
    public function setMachineDocumentationUrl(?string $machineDocumentationUrl): self
    {
        $this->initialized['machineDocumentationUrl'] = true;
        $this->machineDocumentationUrl = $machineDocumentationUrl;
        return $this;
    }
    /**
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     *
     * @return string|null
     */
    public function getOrganization(): ?string
    {
        return $this->organization;
    }
    /**
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     *
     * @param string|null $organization
     *
     * @return self
     */
    public function setOrganization(?string $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;
        return $this;
    }
    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
     *
     * @return string|null
     */
    public function getOwner(): ?string
    {
        return $this->owner;
    }
    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
     *
     * @param string|null $owner
     *
     * @return self
     */
    public function setOwner(?string $owner): self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;
        return $this;
    }
    /**
     * Is the dataservice private to the owner or the organization
     *
     * @return bool|null
     */
    public function getPrivate(): ?bool
    {
        return $this->private;
    }
    /**
     * Is the dataservice private to the owner or the organization
     *
     * @param bool|null $private
     *
     * @return self
     */
    public function setPrivate(?bool $private): self
    {
        $this->initialized['private'] = true;
        $this->private = $private;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getRateLimiting(): ?string
    {
        return $this->rateLimiting;
    }
    /**
     * @param string|null $rateLimiting
     *
     * @return self
     */
    public function setRateLimiting(?string $rateLimiting): self
    {
        $this->initialized['rateLimiting'] = true;
        $this->rateLimiting = $rateLimiting;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getRateLimitingUrl(): ?string
    {
        return $this->rateLimitingUrl;
    }
    /**
     * @param string|null $rateLimitingUrl
     *
     * @return self
     */
    public function setRateLimitingUrl(?string $rateLimitingUrl): self
    {
        $this->initialized['rateLimitingUrl'] = true;
        $this->rateLimitingUrl = $rateLimitingUrl;
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
     *
     * @return self
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
    /**
     * HTML version of a Swagger…
     *
     * @return string|null
     */
    public function getTechnicalDocumentationUrl(): ?string
    {
        return $this->technicalDocumentationUrl;
    }
    /**
     * HTML version of a Swagger…
     *
     * @param string|null $technicalDocumentationUrl
     *
     * @return self
     */
    public function setTechnicalDocumentationUrl(?string $technicalDocumentationUrl): self
    {
        $this->initialized['technicalDocumentationUrl'] = true;
        $this->technicalDocumentationUrl = $technicalDocumentationUrl;
        return $this;
    }
    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
}