<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class HarvestItemPreviewDataset
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
     * An optional dataset acronym
     *
     * @var string|null
     */
    protected $acronym;
    /**
     * The archival date if archived
     *
     * @var \DateTime|null
     */
    protected $archived;
    /**
     * @var string|null
     */
    protected $authorizationRequestUrl;
    /**
     * The dataset badges
     *
     * @var list<BadgeRead>
     */
    protected $badges;
    /**
     * @var list<mixed>
     */
    protected $communityResources;
    /**
     * @var list<DatasetPreviewContactPointsItem>
     */
    protected $contactPoints;
    /**
     * This date is computed between harvested creation date if any and site's internal creation date
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * The deletion date if deleted
     *
     * @var \DateTime|null
     */
    protected $deleted;
    /**
     * The dataset description in markdown
     *
     * @var string
     */
    protected $description;
    /**
     * The dataset short description
     *
     * @var string|null
     */
    protected $descriptionShort;
    /**
     * Extras attributes as key-value pairs
     *
     * @var mixed
     */
    protected $extras;
    /**
     * Is the dataset featured
     *
     * @var bool|null
     */
    protected $featured;
    /**
     * The update frequency
     *
     * @var string
     */
    protected $frequency = 'unknown';
    /**
     * Next expected update date, you will be notified once that date is reached.
     *
     * @var \DateTime|null
     */
    protected $frequencyDate;
    /**
     * Dataset harvest metadata attributes
     *
     * @var DatasetPreviewHarvest
     */
    protected $harvest;
    /**
     * The dataset identifier
     *
     * @var string|null
     */
    protected $id;
    /**
     * Site internal and specific object's data
     *
     * @var DatasetPreviewInternal
     */
    protected $internal;
    /**
     * The dataset last modification date
     *
     * @var \DateTime
     */
    protected $lastModified;
    /**
     * The resources last modification date
     *
     * @var \DateTime
     */
    protected $lastUpdate;
    /**
     * The dataset license
     *
     * @var string|null
     */
    protected $license = 'notspecified';
    /**
     * The dataset metrics
     *
     * @var mixed
     */
    protected $metrics;
    /**
     * The producer organization
     *
     * @var mixed
     */
    protected $organization;
    /**
     * The user information
     *
     * @var mixed
     */
    protected $owner;
    /**
     * The dataset page URL (fake)
     *
     * @var mixed
     */
    protected $page;
    /**
     * @var DatasetPermissions
     */
    protected $permissions;
    /**
     * Is the dataset private to the owner or the organization
     *
     * @var bool|null
     */
    protected $private;
    /**
     * The dataset quality
     *
     * @var mixed
     */
    protected $quality;
    /**
     * @var list<DatasetPreviewResourcesItem>
     */
    protected $resources;
    /**
     * Reference to the associated schema
     *
     * @var DatasetPreviewSchema
     */
    protected $schema;
    /**
     * The dataset permalink string
     *
     * @var string|null
     */
    protected $slug;
    /**
     * The spatial coverage
     *
     * @var DatasetPreviewSpatial
     */
    protected $spatial;
    /**
     * @var list<string>
     */
    protected $tags;
    /**
     * The temporal coverage
     *
     * @var DatasetPreviewTemporalCoverage
     */
    protected $temporalCoverage;
    /**
     * The dataset title
     *
     * @var string
     */
    protected $title;
    /**
     * The dataset API URL (fake)
     *
     * @var mixed
     */
    protected $uri;
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
     * An optional dataset acronym
     *
     * @return string|null
     */
    public function getAcronym(): ?string
    {
        return $this->acronym;
    }
    /**
     * An optional dataset acronym
     *
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
     * The archival date if archived
     *
     * @return \DateTime|null
     */
    public function getArchived(): ?\DateTime
    {
        return $this->archived;
    }
    /**
     * The archival date if archived
     *
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
     * The dataset badges
     *
     * @return list<BadgeRead>
     */
    public function getBadges(): array
    {
        return $this->badges;
    }
    /**
     * The dataset badges
     *
     * @param list<BadgeRead> $badges
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
     * @return list<mixed>
     */
    public function getCommunityResources(): array
    {
        return $this->communityResources;
    }
    /**
     * @param list<mixed> $communityResources
     *
     * @return self
     */
    public function setCommunityResources(array $communityResources): self
    {
        $this->initialized['communityResources'] = true;
        $this->communityResources = $communityResources;
        return $this;
    }
    /**
     * @return list<DatasetPreviewContactPointsItem>
     */
    public function getContactPoints(): array
    {
        return $this->contactPoints;
    }
    /**
     * @param list<DatasetPreviewContactPointsItem> $contactPoints
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
     * This date is computed between harvested creation date if any and site's internal creation date
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * This date is computed between harvested creation date if any and site's internal creation date
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * The deletion date if deleted
     *
     * @return \DateTime|null
     */
    public function getDeleted(): ?\DateTime
    {
        return $this->deleted;
    }
    /**
     * The deletion date if deleted
     *
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
     * The dataset description in markdown
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * The dataset description in markdown
     *
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
     * The dataset short description
     *
     * @return string|null
     */
    public function getDescriptionShort(): ?string
    {
        return $this->descriptionShort;
    }
    /**
     * The dataset short description
     *
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
     * Extras attributes as key-value pairs
     *
     * @return mixed
     */
    public function getExtras()
    {
        return $this->extras;
    }
    /**
     * Extras attributes as key-value pairs
     *
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
     * Is the dataset featured
     *
     * @return bool|null
     */
    public function getFeatured(): ?bool
    {
        return $this->featured;
    }
    /**
     * Is the dataset featured
     *
     * @param bool|null $featured
     *
     * @return self
     */
    public function setFeatured(?bool $featured): self
    {
        $this->initialized['featured'] = true;
        $this->featured = $featured;
        return $this;
    }
    /**
     * The update frequency
     *
     * @return string
     */
    public function getFrequency(): string
    {
        return $this->frequency;
    }
    /**
     * The update frequency
     *
     * @param string $frequency
     *
     * @return self
     */
    public function setFrequency(string $frequency): self
    {
        $this->initialized['frequency'] = true;
        $this->frequency = $frequency;
        return $this;
    }
    /**
     * Next expected update date, you will be notified once that date is reached.
     *
     * @return \DateTime|null
     */
    public function getFrequencyDate(): ?\DateTime
    {
        return $this->frequencyDate;
    }
    /**
     * Next expected update date, you will be notified once that date is reached.
     *
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
     * Dataset harvest metadata attributes
     *
     * @return DatasetPreviewHarvest
     */
    public function getHarvest(): DatasetPreviewHarvest
    {
        return $this->harvest;
    }
    /**
     * Dataset harvest metadata attributes
     *
     * @param DatasetPreviewHarvest $harvest
     *
     * @return self
     */
    public function setHarvest(DatasetPreviewHarvest $harvest): self
    {
        $this->initialized['harvest'] = true;
        $this->harvest = $harvest;
        return $this;
    }
    /**
     * The dataset identifier
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The dataset identifier
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Site internal and specific object's data
     *
     * @return DatasetPreviewInternal
     */
    public function getInternal(): DatasetPreviewInternal
    {
        return $this->internal;
    }
    /**
     * Site internal and specific object's data
     *
     * @param DatasetPreviewInternal $internal
     *
     * @return self
     */
    public function setInternal(DatasetPreviewInternal $internal): self
    {
        $this->initialized['internal'] = true;
        $this->internal = $internal;
        return $this;
    }
    /**
     * The dataset last modification date
     *
     * @return \DateTime
     */
    public function getLastModified(): \DateTime
    {
        return $this->lastModified;
    }
    /**
     * The dataset last modification date
     *
     * @param \DateTime $lastModified
     *
     * @return self
     */
    public function setLastModified(\DateTime $lastModified): self
    {
        $this->initialized['lastModified'] = true;
        $this->lastModified = $lastModified;
        return $this;
    }
    /**
     * The resources last modification date
     *
     * @return \DateTime
     */
    public function getLastUpdate(): \DateTime
    {
        return $this->lastUpdate;
    }
    /**
     * The resources last modification date
     *
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
     * The dataset license
     *
     * @return string|null
     */
    public function getLicense(): ?string
    {
        return $this->license;
    }
    /**
     * The dataset license
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
     * The dataset metrics
     *
     * @return mixed
     */
    public function getMetrics()
    {
        return $this->metrics;
    }
    /**
     * The dataset metrics
     *
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
     * The producer organization
     *
     * @return mixed
     */
    public function getOrganization()
    {
        return $this->organization;
    }
    /**
     * The producer organization
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
     * The user information
     *
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }
    /**
     * The user information
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
     * The dataset page URL (fake)
     *
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }
    /**
     * The dataset page URL (fake)
     *
     * @param mixed $page
     *
     * @return self
     */
    public function setPage($page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;
        return $this;
    }
    /**
     * @return DatasetPermissions
     */
    public function getPermissions(): DatasetPermissions
    {
        return $this->permissions;
    }
    /**
     * @param DatasetPermissions $permissions
     *
     * @return self
     */
    public function setPermissions(DatasetPermissions $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;
        return $this;
    }
    /**
     * Is the dataset private to the owner or the organization
     *
     * @return bool|null
     */
    public function getPrivate(): ?bool
    {
        return $this->private;
    }
    /**
     * Is the dataset private to the owner or the organization
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
     * The dataset quality
     *
     * @return mixed
     */
    public function getQuality()
    {
        return $this->quality;
    }
    /**
     * The dataset quality
     *
     * @param mixed $quality
     *
     * @return self
     */
    public function setQuality($quality): self
    {
        $this->initialized['quality'] = true;
        $this->quality = $quality;
        return $this;
    }
    /**
     * @return list<DatasetPreviewResourcesItem>
     */
    public function getResources(): array
    {
        return $this->resources;
    }
    /**
     * @param list<DatasetPreviewResourcesItem> $resources
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
     * Reference to the associated schema
     *
     * @return DatasetPreviewSchema
     */
    public function getSchema(): DatasetPreviewSchema
    {
        return $this->schema;
    }
    /**
     * Reference to the associated schema
     *
     * @param DatasetPreviewSchema $schema
     *
     * @return self
     */
    public function setSchema(DatasetPreviewSchema $schema): self
    {
        $this->initialized['schema'] = true;
        $this->schema = $schema;
        return $this;
    }
    /**
     * The dataset permalink string
     *
     * @return string|null
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }
    /**
     * The dataset permalink string
     *
     * @param string|null $slug
     *
     * @return self
     */
    public function setSlug(?string $slug): self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;
        return $this;
    }
    /**
     * The spatial coverage
     *
     * @return DatasetPreviewSpatial
     */
    public function getSpatial(): DatasetPreviewSpatial
    {
        return $this->spatial;
    }
    /**
     * The spatial coverage
     *
     * @param DatasetPreviewSpatial $spatial
     *
     * @return self
     */
    public function setSpatial(DatasetPreviewSpatial $spatial): self
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
     * The temporal coverage
     *
     * @return DatasetPreviewTemporalCoverage
     */
    public function getTemporalCoverage(): DatasetPreviewTemporalCoverage
    {
        return $this->temporalCoverage;
    }
    /**
     * The temporal coverage
     *
     * @param DatasetPreviewTemporalCoverage $temporalCoverage
     *
     * @return self
     */
    public function setTemporalCoverage(DatasetPreviewTemporalCoverage $temporalCoverage): self
    {
        $this->initialized['temporalCoverage'] = true;
        $this->temporalCoverage = $temporalCoverage;
        return $this;
    }
    /**
     * The dataset title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * The dataset title
     *
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
    /**
     * The dataset API URL (fake)
     *
     * @return mixed
     */
    public function getUri()
    {
        return $this->uri;
    }
    /**
     * The dataset API URL (fake)
     *
     * @param mixed $uri
     *
     * @return self
     */
    public function setUri($uri): self
    {
        $this->initialized['uri'] = true;
        $this->uri = $uri;
        return $this;
    }
}