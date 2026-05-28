<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class ReuseRead
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
    /**
     * @var mixed
     */
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
     * @return list<ReuseReadBadgesItem>
     */
    public function getBadges(): array
    {
        return $this->badges;
    }
    /**
     * @param list<ReuseReadBadgesItem> $badges
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
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
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
     * @return list<DataserviceReference>
     */
    public function getDataservices(): array
    {
        return $this->dataservices;
    }
    /**
     * @param list<DataserviceReference> $dataservices
     *
     * @return self
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
     * @return bool|null
     */
    public function getFeatured(): ?bool
    {
        return $this->featured;
    }
    /**
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
     * URL of the image
     *
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }
    /**
     * URL of the image
     *
     * @param string|null $image
     *
     * @return self
     */
    public function setImage(?string $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
    /**
     * URL of the cropped and squared image (500x500)
     *
     * @return string|null
     */
    public function getImageThumbnail(): ?string
    {
        return $this->imageThumbnail;
    }
    /**
     * URL of the cropped and squared image (500x500)
     *
     * @param string|null $imageThumbnail
     *
     * @return self
     */
    public function setImageThumbnail(?string $imageThumbnail): self
    {
        $this->initialized['imageThumbnail'] = true;
        $this->imageThumbnail = $imageThumbnail;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getLastModified(): \DateTime
    {
        return $this->lastModified;
    }
    /**
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
     * Link to the udata web page for this reuse
     *
     * @return string|null
     */
    public function getPage(): ?string
    {
        return $this->page;
    }
    /**
     * Link to the udata web page for this reuse
     *
     * @param string|null $page
     *
     * @return self
     */
    public function setPage(?string $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;
        return $this;
    }
    /**
     * @return ReuseReadPermissions
     */
    public function getPermissions(): ReuseReadPermissions
    {
        return $this->permissions;
    }
    /**
     * @param ReuseReadPermissions $permissions
     *
     * @return self
     */
    public function setPermissions(ReuseReadPermissions $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;
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
    /**
     * @return string
     */
    public function getTopic(): string
    {
        return $this->topic;
    }
    /**
     * @param string $topic
     *
     * @return self
     */
    public function setTopic(string $topic): self
    {
        $this->initialized['topic'] = true;
        $this->topic = $topic;
        return $this;
    }
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Link to the API endpoint for this reuse
     *
     * @return string|null
     */
    public function getUri(): ?string
    {
        return $this->uri;
    }
    /**
     * Link to the API endpoint for this reuse
     *
     * @param string|null $uri
     *
     * @return self
     */
    public function setUri(?string $uri): self
    {
        $this->initialized['uri'] = true;
        $this->uri = $uri;
        return $this;
    }
    /**
     * The remote URL (website)
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * The remote URL (website)
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
}