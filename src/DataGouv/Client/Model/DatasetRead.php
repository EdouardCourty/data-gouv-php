<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DatasetRead
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
    protected $archived;
    /**
     * @var string|null
     */
    protected $authorizationRequestUrl;
    /**
     * @var list<DatasetReadBadgesItem>
     */
    protected $badges;
    /**
     * @var list<ContactPointReference>
     */
    protected $contactPoints;
    /**
     * @var \DateTime
     */
    protected $createdAtInternal;
    /**
     * @var \DateTime|null
     */
    protected $deleted;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string|null
     */
    protected $descriptionShort;
    /**
     * @var mixed
     */
    protected $ext;
    /**
     * @var mixed
     */
    protected $extras;
    /**
     * @var bool
     */
    protected $featured;
    /**
     * @var string|null
     */
    protected $frequency;
    /**
     * @var \DateTime|null
     */
    protected $frequencyDate;
    /**
     * @var HarvestDatasetMetadataRead
     */
    protected $harvest;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var \DateTime
     */
    protected $lastModifiedInternal;
    /**
     * @var \DateTime
     */
    protected $lastUpdate;
    /**
     * @var string|null
     */
    protected $license;
    /**
     * @var mixed
     */
    protected $metrics;
    /**
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     *
     * @var mixed
     */
    protected $organization;
    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
     *
     * @var mixed
     */
    protected $owner;
    /**
     * @var bool|null
     */
    protected $private;
    /**
     * @var mixed
     */
    protected $qualityCached;
    /**
     * @var list<ResourceRead>
     */
    protected $resources;
    /**
     * @var SchemaRead
     */
    protected $schema;
    /**
     * @var string
     */
    protected $slug;
    /**
     * @var SpatialCoverage
     */
    protected $spatial;
    /**
     * @var list<string>
     */
    protected $tags;
    /**
     * @var TemporalCoverage
     */
    protected $temporalCoverage;
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
    public function getArchived(): ?\DateTime
    {
        return $this->archived;
    }
    /**
     * @param \DateTime|null $archived
     *
     * @return self
     */
    public function setArchived(?\DateTime $archived): self
    {
        $this->initialized['archived'] = true;
        $this->archived = $archived;
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
     * @return list<DatasetReadBadgesItem>
     */
    public function getBadges(): array
    {
        return $this->badges;
    }
    /**
     * @param list<DatasetReadBadgesItem> $badges
     *
     * @return self
     */
    public function setBadges(array $badges): self
    {
        $this->initialized['badges'] = true;
        $this->badges = $badges;
        return $this;
    }
    /**
     * @return list<ContactPointReference>
     */
    public function getContactPoints(): array
    {
        return $this->contactPoints;
    }
    /**
     * @param list<ContactPointReference> $contactPoints
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
     * @return \DateTime
     */
    public function getCreatedAtInternal(): \DateTime
    {
        return $this->createdAtInternal;
    }
    /**
     * @param \DateTime $createdAtInternal
     *
     * @return self
     */
    public function setCreatedAtInternal(\DateTime $createdAtInternal): self
    {
        $this->initialized['createdAtInternal'] = true;
        $this->createdAtInternal = $createdAtInternal;
        return $this;
    }
    /**
     * @return \DateTime|null
     */
    public function getDeleted(): ?\DateTime
    {
        return $this->deleted;
    }
    /**
     * @param \DateTime|null $deleted
     *
     * @return self
     */
    public function setDeleted(?\DateTime $deleted): self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getDescriptionShort(): ?string
    {
        return $this->descriptionShort;
    }
    /**
     * @param string|null $descriptionShort
     *
     * @return self
     */
    public function setDescriptionShort(?string $descriptionShort): self
    {
        $this->initialized['descriptionShort'] = true;
        $this->descriptionShort = $descriptionShort;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getExt()
    {
        return $this->ext;
    }
    /**
     * @param mixed $ext
     *
     * @return self
     */
    public function setExt($ext): self
    {
        $this->initialized['ext'] = true;
        $this->ext = $ext;
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
     * @return bool
     */
    public function getFeatured(): bool
    {
        return $this->featured;
    }
    /**
     * @param bool $featured
     *
     * @return self
     */
    public function setFeatured(bool $featured): self
    {
        $this->initialized['featured'] = true;
        $this->featured = $featured;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getFrequency(): ?string
    {
        return $this->frequency;
    }
    /**
     * @param string|null $frequency
     *
     * @return self
     */
    public function setFrequency(?string $frequency): self
    {
        $this->initialized['frequency'] = true;
        $this->frequency = $frequency;
        return $this;
    }
    /**
     * @return \DateTime|null
     */
    public function getFrequencyDate(): ?\DateTime
    {
        return $this->frequencyDate;
    }
    /**
     * @param \DateTime|null $frequencyDate
     *
     * @return self
     */
    public function setFrequencyDate(?\DateTime $frequencyDate): self
    {
        $this->initialized['frequencyDate'] = true;
        $this->frequencyDate = $frequencyDate;
        return $this;
    }
    /**
     * @return HarvestDatasetMetadataRead
     */
    public function getHarvest(): HarvestDatasetMetadataRead
    {
        return $this->harvest;
    }
    /**
     * @param HarvestDatasetMetadataRead $harvest
     *
     * @return self
     */
    public function setHarvest(HarvestDatasetMetadataRead $harvest): self
    {
        $this->initialized['harvest'] = true;
        $this->harvest = $harvest;
        return $this;
    }
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getLastModifiedInternal(): \DateTime
    {
        return $this->lastModifiedInternal;
    }
    /**
     * @param \DateTime $lastModifiedInternal
     *
     * @return self
     */
    public function setLastModifiedInternal(\DateTime $lastModifiedInternal): self
    {
        $this->initialized['lastModifiedInternal'] = true;
        $this->lastModifiedInternal = $lastModifiedInternal;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getLastUpdate(): \DateTime
    {
        return $this->lastUpdate;
    }
    /**
     * @param \DateTime $lastUpdate
     *
     * @return self
     */
    public function setLastUpdate(\DateTime $lastUpdate): self
    {
        $this->initialized['lastUpdate'] = true;
        $this->lastUpdate = $lastUpdate;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getLicense(): ?string
    {
        return $this->license;
    }
    /**
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
     * @return mixed
     */
    public function getMetrics()
    {
        return $this->metrics;
    }
    /**
     * @param mixed $metrics
     *
     * @return self
     */
    public function setMetrics($metrics): self
    {
        $this->initialized['metrics'] = true;
        $this->metrics = $metrics;
        return $this;
    }
    /**
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     *
     * @return mixed
     */
    public function getOrganization()
    {
        return $this->organization;
    }
    /**
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     *
     * @param mixed $organization
     *
     * @return self
     */
    public function setOrganization($organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;
        return $this;
    }
    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
     *
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }
    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
     *
     * @param mixed $owner
     *
     * @return self
     */
    public function setOwner($owner): self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getPrivate(): ?bool
    {
        return $this->private;
    }
    /**
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
     * @return mixed
     */
    public function getQualityCached()
    {
        return $this->qualityCached;
    }
    /**
     * @param mixed $qualityCached
     *
     * @return self
     */
    public function setQualityCached($qualityCached): self
    {
        $this->initialized['qualityCached'] = true;
        $this->qualityCached = $qualityCached;
        return $this;
    }
    /**
     * @return list<ResourceRead>
     */
    public function getResources(): array
    {
        return $this->resources;
    }
    /**
     * @param list<ResourceRead> $resources
     *
     * @return self
     */
    public function setResources(array $resources): self
    {
        $this->initialized['resources'] = true;
        $this->resources = $resources;
        return $this;
    }
    /**
     * @return SchemaRead
     */
    public function getSchema(): SchemaRead
    {
        return $this->schema;
    }
    /**
     * @param SchemaRead $schema
     *
     * @return self
     */
    public function setSchema(SchemaRead $schema): self
    {
        $this->initialized['schema'] = true;
        $this->schema = $schema;
        return $this;
    }
    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }
    /**
     * @param string $slug
     *
     * @return self
     */
    public function setSlug(string $slug): self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;
        return $this;
    }
    /**
     * @return SpatialCoverage
     */
    public function getSpatial(): SpatialCoverage
    {
        return $this->spatial;
    }
    /**
     * @param SpatialCoverage $spatial
     *
     * @return self
     */
    public function setSpatial(SpatialCoverage $spatial): self
    {
        $this->initialized['spatial'] = true;
        $this->spatial = $spatial;
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
     * @return TemporalCoverage
     */
    public function getTemporalCoverage(): TemporalCoverage
    {
        return $this->temporalCoverage;
    }
    /**
     * @param TemporalCoverage $temporalCoverage
     *
     * @return self
     */
    public function setTemporalCoverage(TemporalCoverage $temporalCoverage): self
    {
        $this->initialized['temporalCoverage'] = true;
        $this->temporalCoverage = $temporalCoverage;
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