<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DatasetRead
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
    protected $ext;
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
     * @var bool|null
     */
    protected $private;
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

    public function getArchived(): ?\DateTime
    {
        return $this->archived;
    }

    public function setArchived(?\DateTime $archived): self
    {
        $this->initialized['archived'] = true;
        $this->archived = $archived;

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

    /**
     * @return list<DatasetReadBadgesItem>
     */
    public function getBadges(): array
    {
        return $this->badges;
    }

    /**
     * @param list<DatasetReadBadgesItem> $badges
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
     */
    public function setContactPoints(array $contactPoints): self
    {
        $this->initialized['contactPoints'] = true;
        $this->contactPoints = $contactPoints;

        return $this;
    }

    public function getCreatedAtInternal(): \DateTime
    {
        return $this->createdAtInternal;
    }

    public function setCreatedAtInternal(\DateTime $createdAtInternal): self
    {
        $this->initialized['createdAtInternal'] = true;
        $this->createdAtInternal = $createdAtInternal;

        return $this;
    }

    public function getDeleted(): ?\DateTime
    {
        return $this->deleted;
    }

    public function setDeleted(?\DateTime $deleted): self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getDescriptionShort(): ?string
    {
        return $this->descriptionShort;
    }

    public function setDescriptionShort(?string $descriptionShort): self
    {
        $this->initialized['descriptionShort'] = true;
        $this->descriptionShort = $descriptionShort;

        return $this;
    }

    public function getExt()
    {
        return $this->ext;
    }

    public function setExt($ext): self
    {
        $this->initialized['ext'] = true;
        $this->ext = $ext;

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

    public function getFeatured(): bool
    {
        return $this->featured;
    }

    public function setFeatured(bool $featured): self
    {
        $this->initialized['featured'] = true;
        $this->featured = $featured;

        return $this;
    }

    public function getFrequency(): ?string
    {
        return $this->frequency;
    }

    public function setFrequency(?string $frequency): self
    {
        $this->initialized['frequency'] = true;
        $this->frequency = $frequency;

        return $this;
    }

    public function getFrequencyDate(): ?\DateTime
    {
        return $this->frequencyDate;
    }

    public function setFrequencyDate(?\DateTime $frequencyDate): self
    {
        $this->initialized['frequencyDate'] = true;
        $this->frequencyDate = $frequencyDate;

        return $this;
    }

    public function getHarvest(): HarvestDatasetMetadataRead
    {
        return $this->harvest;
    }

    public function setHarvest(HarvestDatasetMetadataRead $harvest): self
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

    public function getLastModifiedInternal(): \DateTime
    {
        return $this->lastModifiedInternal;
    }

    public function setLastModifiedInternal(\DateTime $lastModifiedInternal): self
    {
        $this->initialized['lastModifiedInternal'] = true;
        $this->lastModifiedInternal = $lastModifiedInternal;

        return $this;
    }

    public function getLastUpdate(): \DateTime
    {
        return $this->lastUpdate;
    }

    public function setLastUpdate(\DateTime $lastUpdate): self
    {
        $this->initialized['lastUpdate'] = true;
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    public function getLicense(): ?string
    {
        return $this->license;
    }

    public function setLicense(?string $license): self
    {
        $this->initialized['license'] = true;
        $this->license = $license;

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

    public function getPrivate(): ?bool
    {
        return $this->private;
    }

    public function setPrivate(?bool $private): self
    {
        $this->initialized['private'] = true;
        $this->private = $private;

        return $this;
    }

    public function getQualityCached()
    {
        return $this->qualityCached;
    }

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
     */
    public function setResources(array $resources): self
    {
        $this->initialized['resources'] = true;
        $this->resources = $resources;

        return $this;
    }

    public function getSchema(): SchemaRead
    {
        return $this->schema;
    }

    public function setSchema(SchemaRead $schema): self
    {
        $this->initialized['schema'] = true;
        $this->schema = $schema;

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

    public function getSpatial(): SpatialCoverage
    {
        return $this->spatial;
    }

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
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;

        return $this;
    }

    public function getTemporalCoverage(): TemporalCoverage
    {
        return $this->temporalCoverage;
    }

    public function setTemporalCoverage(TemporalCoverage $temporalCoverage): self
    {
        $this->initialized['temporalCoverage'] = true;
        $this->temporalCoverage = $temporalCoverage;

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
