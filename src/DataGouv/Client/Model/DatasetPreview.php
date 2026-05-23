<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DatasetPreview
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
     */
    protected $metrics;
    /**
     * The producer organization
     */
    protected $organization;
    /**
     * The user information
     */
    protected $owner;
    /**
     * The dataset page URL (fake)
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

    /**
     * An optional dataset acronym
     */
    public function getAcronym(): ?string
    {
        return $this->acronym;
    }

    /**
     * An optional dataset acronym
     */
    public function setAcronym(?string $acronym): self
    {
        $this->initialized['acronym'] = true;
        $this->acronym = $acronym;

        return $this;
    }

    /**
     * The archival date if archived
     */
    public function getArchived(): ?\DateTime
    {
        return $this->archived;
    }

    /**
     * The archival date if archived
     */
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
     */
    public function setContactPoints(array $contactPoints): self
    {
        $this->initialized['contactPoints'] = true;
        $this->contactPoints = $contactPoints;

        return $this;
    }

    /**
     * This date is computed between harvested creation date if any and site's internal creation date
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * This date is computed between harvested creation date if any and site's internal creation date
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * The deletion date if deleted
     */
    public function getDeleted(): ?\DateTime
    {
        return $this->deleted;
    }

    /**
     * The deletion date if deleted
     */
    public function setDeleted(?\DateTime $deleted): self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * The dataset description in markdown
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * The dataset description in markdown
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * The dataset short description
     */
    public function getDescriptionShort(): ?string
    {
        return $this->descriptionShort;
    }

    /**
     * The dataset short description
     */
    public function setDescriptionShort(?string $descriptionShort): self
    {
        $this->initialized['descriptionShort'] = true;
        $this->descriptionShort = $descriptionShort;

        return $this;
    }

    /**
     * Extras attributes as key-value pairs
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * Extras attributes as key-value pairs
     */
    public function setExtras($extras): self
    {
        $this->initialized['extras'] = true;
        $this->extras = $extras;

        return $this;
    }

    /**
     * Is the dataset featured
     */
    public function getFeatured(): ?bool
    {
        return $this->featured;
    }

    /**
     * Is the dataset featured
     */
    public function setFeatured(?bool $featured): self
    {
        $this->initialized['featured'] = true;
        $this->featured = $featured;

        return $this;
    }

    /**
     * The update frequency
     */
    public function getFrequency(): string
    {
        return $this->frequency;
    }

    /**
     * The update frequency
     */
    public function setFrequency(string $frequency): self
    {
        $this->initialized['frequency'] = true;
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * Next expected update date, you will be notified once that date is reached.
     */
    public function getFrequencyDate(): ?\DateTime
    {
        return $this->frequencyDate;
    }

    /**
     * Next expected update date, you will be notified once that date is reached.
     */
    public function setFrequencyDate(?\DateTime $frequencyDate): self
    {
        $this->initialized['frequencyDate'] = true;
        $this->frequencyDate = $frequencyDate;

        return $this;
    }

    /**
     * Dataset harvest metadata attributes
     */
    public function getHarvest(): DatasetPreviewHarvest
    {
        return $this->harvest;
    }

    /**
     * Dataset harvest metadata attributes
     */
    public function setHarvest(DatasetPreviewHarvest $harvest): self
    {
        $this->initialized['harvest'] = true;
        $this->harvest = $harvest;

        return $this;
    }

    /**
     * The dataset identifier
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The dataset identifier
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Site internal and specific object's data
     */
    public function getInternal(): DatasetPreviewInternal
    {
        return $this->internal;
    }

    /**
     * Site internal and specific object's data
     */
    public function setInternal(DatasetPreviewInternal $internal): self
    {
        $this->initialized['internal'] = true;
        $this->internal = $internal;

        return $this;
    }

    /**
     * The dataset last modification date
     */
    public function getLastModified(): \DateTime
    {
        return $this->lastModified;
    }

    /**
     * The dataset last modification date
     */
    public function setLastModified(\DateTime $lastModified): self
    {
        $this->initialized['lastModified'] = true;
        $this->lastModified = $lastModified;

        return $this;
    }

    /**
     * The resources last modification date
     */
    public function getLastUpdate(): \DateTime
    {
        return $this->lastUpdate;
    }

    /**
     * The resources last modification date
     */
    public function setLastUpdate(\DateTime $lastUpdate): self
    {
        $this->initialized['lastUpdate'] = true;
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * The dataset license
     */
    public function getLicense(): ?string
    {
        return $this->license;
    }

    /**
     * The dataset license
     */
    public function setLicense(?string $license): self
    {
        $this->initialized['license'] = true;
        $this->license = $license;

        return $this;
    }

    /**
     * The dataset metrics
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * The dataset metrics
     */
    public function setMetrics($metrics): self
    {
        $this->initialized['metrics'] = true;
        $this->metrics = $metrics;

        return $this;
    }

    /**
     * The producer organization
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * The producer organization
     */
    public function setOrganization($organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }

    /**
     * The user information
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * The user information
     */
    public function setOwner($owner): self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;

        return $this;
    }

    /**
     * The dataset page URL (fake)
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * The dataset page URL (fake)
     */
    public function setPage($page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;

        return $this;
    }

    public function getPermissions(): DatasetPermissions
    {
        return $this->permissions;
    }

    public function setPermissions(DatasetPermissions $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;

        return $this;
    }

    /**
     * Is the dataset private to the owner or the organization
     */
    public function getPrivate(): ?bool
    {
        return $this->private;
    }

    /**
     * Is the dataset private to the owner or the organization
     */
    public function setPrivate(?bool $private): self
    {
        $this->initialized['private'] = true;
        $this->private = $private;

        return $this;
    }

    /**
     * The dataset quality
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * The dataset quality
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
     */
    public function setResources(array $resources): self
    {
        $this->initialized['resources'] = true;
        $this->resources = $resources;

        return $this;
    }

    /**
     * Reference to the associated schema
     */
    public function getSchema(): DatasetPreviewSchema
    {
        return $this->schema;
    }

    /**
     * Reference to the associated schema
     */
    public function setSchema(DatasetPreviewSchema $schema): self
    {
        $this->initialized['schema'] = true;
        $this->schema = $schema;

        return $this;
    }

    /**
     * The dataset permalink string
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * The dataset permalink string
     */
    public function setSlug(?string $slug): self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;

        return $this;
    }

    /**
     * The spatial coverage
     */
    public function getSpatial(): DatasetPreviewSpatial
    {
        return $this->spatial;
    }

    /**
     * The spatial coverage
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
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;

        return $this;
    }

    /**
     * The temporal coverage
     */
    public function getTemporalCoverage(): DatasetPreviewTemporalCoverage
    {
        return $this->temporalCoverage;
    }

    /**
     * The temporal coverage
     */
    public function setTemporalCoverage(DatasetPreviewTemporalCoverage $temporalCoverage): self
    {
        $this->initialized['temporalCoverage'] = true;
        $this->temporalCoverage = $temporalCoverage;

        return $this;
    }

    /**
     * The dataset title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * The dataset title
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    /**
     * The dataset API URL (fake)
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * The dataset API URL (fake)
     */
    public function setUri($uri): self
    {
        $this->initialized['uri'] = true;
        $this->uri = $uri;

        return $this;
    }
}
