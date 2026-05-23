<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class ReuseRead
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
     * @var \DateTime|null
     */
    protected $archived;
    /**
     * @var list<ReuseReadBadgesItem>
     */
    protected $badges;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var list<DataserviceReference>
     */
    protected $dataservices;
    /**
     * @var list<Dataset>
     */
    protected $datasets;
    /**
     * @var \DateTime|null
     */
    protected $deleted;
    /**
     * @var string
     */
    protected $description;
    protected $extras;
    /**
     * @var bool|null
     */
    protected $featured;
    /**
     * @var string
     */
    protected $id;
    /**
     * URL of the image
     *
     * @var string|null
     */
    protected $image;
    /**
     * URL of the cropped and squared image (500x500)
     *
     * @var string|null
     */
    protected $imageThumbnail;
    /**
     * @var \DateTime
     */
    protected $lastModified;
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
     * Link to the udata web page for this reuse
     *
     * @var string|null
     */
    protected $page;
    /**
     * @var ReuseReadPermissions
     */
    protected $permissions;
    /**
     * @var bool|null
     */
    protected $private;
    /**
     * @var string
     */
    protected $slug;
    /**
     * @var list<string>
     */
    protected $tags;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $topic;
    /**
     * @var string
     */
    protected $type;
    /**
     * Link to the API endpoint for this reuse
     *
     * @var string|null
     */
    protected $uri;
    /**
     * The remote URL (website)
     *
     * @var string
     */
    protected $url;

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

    /**
     * @return list<ReuseReadBadgesItem>
     */
    public function getBadges(): array
    {
        return $this->badges;
    }

    /**
     * @param list<ReuseReadBadgesItem> $badges
     */
    public function setBadges(array $badges): self
    {
        $this->initialized['badges'] = true;
        $this->badges = $badges;

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
     * @return list<DataserviceReference>
     */
    public function getDataservices(): array
    {
        return $this->dataservices;
    }

    /**
     * @param list<DataserviceReference> $dataservices
     */
    public function setDataservices(array $dataservices): self
    {
        $this->initialized['dataservices'] = true;
        $this->dataservices = $dataservices;

        return $this;
    }

    /**
     * @return list<Dataset>
     */
    public function getDatasets(): array
    {
        return $this->datasets;
    }

    /**
     * @param list<Dataset> $datasets
     */
    public function setDatasets(array $datasets): self
    {
        $this->initialized['datasets'] = true;
        $this->datasets = $datasets;

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
     * URL of the image
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * URL of the image
     */
    public function setImage(?string $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;

        return $this;
    }

    /**
     * URL of the cropped and squared image (500x500)
     */
    public function getImageThumbnail(): ?string
    {
        return $this->imageThumbnail;
    }

    /**
     * URL of the cropped and squared image (500x500)
     */
    public function setImageThumbnail(?string $imageThumbnail): self
    {
        $this->initialized['imageThumbnail'] = true;
        $this->imageThumbnail = $imageThumbnail;

        return $this;
    }

    public function getLastModified(): \DateTime
    {
        return $this->lastModified;
    }

    public function setLastModified(\DateTime $lastModified): self
    {
        $this->initialized['lastModified'] = true;
        $this->lastModified = $lastModified;

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

    /**
     * Link to the udata web page for this reuse
     */
    public function getPage(): ?string
    {
        return $this->page;
    }

    /**
     * Link to the udata web page for this reuse
     */
    public function setPage(?string $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;

        return $this;
    }

    public function getPermissions(): ReuseReadPermissions
    {
        return $this->permissions;
    }

    public function setPermissions(ReuseReadPermissions $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;

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

    public function getTopic(): string
    {
        return $this->topic;
    }

    public function setTopic(string $topic): self
    {
        $this->initialized['topic'] = true;
        $this->topic = $topic;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Link to the API endpoint for this reuse
     */
    public function getUri(): ?string
    {
        return $this->uri;
    }

    /**
     * Link to the API endpoint for this reuse
     */
    public function setUri(?string $uri): self
    {
        $this->initialized['uri'] = true;
        $this->uri = $uri;

        return $this;
    }

    /**
     * The remote URL (website)
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * The remote URL (website)
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }
}
