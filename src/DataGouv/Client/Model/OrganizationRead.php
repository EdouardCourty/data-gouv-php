<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class OrganizationRead
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
     * @var string|null
     */
    protected $acronym;
    /**
     * @var list<OrganizationReadBadgesItem>
     */
    protected $badges;
    /**
     * @var string|null
     */
    protected $businessNumberId;
    /**
     * @var \DateTime
     */
    protected $createdAt;
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
    protected $ext;
    /**
     * @var mixed
     */
    protected $extras;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $imageUrl;
    /**
     * @var \DateTime
     */
    protected $lastModified;
    /**
     * URL of the image
     *
     * @var string|null
     */
    protected $logo;
    /**
     * URL of the cropped and squared image (100x100)
     *
     * @var string|null
     */
    protected $logoThumbnail;
    /**
     * @var list<OrganizationReadMembersItem>
     */
    protected $members;
    /**
     * @var mixed
     */
    protected $metrics;
    /**
     * @var string
     */
    protected $name;
    /**
     * Link to the udata web page for this organization
     *
     * @var string|null
     */
    protected $page;
    /**
     * @var OrganizationReadPermissions
     */
    protected $permissions;
    /**
     * @var list<OrganizationReadRequestsItem>
     */
    protected $requests;
    /**
     * @var string
     */
    protected $slug;
    /**
     * @var list<OrganizationReadTeamsItem>
     */
    protected $teams;
    /**
     * Link to the API endpoint for this organization
     *
     * @var string|null
     */
    protected $uri;
    /**
     * @var string|null
     */
    protected $url;
    /**
     * @var string|null
     */
    protected $zone;
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
     * @return list<OrganizationReadBadgesItem>
     */
    public function getBadges(): array
    {
        return $this->badges;
    }
    /**
     * @param list<OrganizationReadBadgesItem> $badges
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
     * @return string|null
     */
    public function getBusinessNumberId(): ?string
    {
        return $this->businessNumberId;
    }
    /**
     * @param string|null $businessNumberId
     *
     * @return self
     */
    public function setBusinessNumberId(?string $businessNumberId): self
    {
        $this->initialized['businessNumberId'] = true;
        $this->businessNumberId = $businessNumberId;
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
     * @return string|null
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }
    /**
     * @param string|null $imageUrl
     *
     * @return self
     */
    public function setImageUrl(?string $imageUrl): self
    {
        $this->initialized['imageUrl'] = true;
        $this->imageUrl = $imageUrl;
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
     * URL of the image
     *
     * @return string|null
     */
    public function getLogo(): ?string
    {
        return $this->logo;
    }
    /**
     * URL of the image
     *
     * @param string|null $logo
     *
     * @return self
     */
    public function setLogo(?string $logo): self
    {
        $this->initialized['logo'] = true;
        $this->logo = $logo;
        return $this;
    }
    /**
     * URL of the cropped and squared image (100x100)
     *
     * @return string|null
     */
    public function getLogoThumbnail(): ?string
    {
        return $this->logoThumbnail;
    }
    /**
     * URL of the cropped and squared image (100x100)
     *
     * @param string|null $logoThumbnail
     *
     * @return self
     */
    public function setLogoThumbnail(?string $logoThumbnail): self
    {
        $this->initialized['logoThumbnail'] = true;
        $this->logoThumbnail = $logoThumbnail;
        return $this;
    }
    /**
     * @return list<OrganizationReadMembersItem>
     */
    public function getMembers(): array
    {
        return $this->members;
    }
    /**
     * @param list<OrganizationReadMembersItem> $members
     *
     * @return self
     */
    public function setMembers(array $members): self
    {
        $this->initialized['members'] = true;
        $this->members = $members;
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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Link to the udata web page for this organization
     *
     * @return string|null
     */
    public function getPage(): ?string
    {
        return $this->page;
    }
    /**
     * Link to the udata web page for this organization
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
     * @return OrganizationReadPermissions
     */
    public function getPermissions(): OrganizationReadPermissions
    {
        return $this->permissions;
    }
    /**
     * @param OrganizationReadPermissions $permissions
     *
     * @return self
     */
    public function setPermissions(OrganizationReadPermissions $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;
        return $this;
    }
    /**
     * @return list<OrganizationReadRequestsItem>
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
    /**
     * @param list<OrganizationReadRequestsItem> $requests
     *
     * @return self
     */
    public function setRequests(array $requests): self
    {
        $this->initialized['requests'] = true;
        $this->requests = $requests;
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
     * @return list<OrganizationReadTeamsItem>
     */
    public function getTeams(): array
    {
        return $this->teams;
    }
    /**
     * @param list<OrganizationReadTeamsItem> $teams
     *
     * @return self
     */
    public function setTeams(array $teams): self
    {
        $this->initialized['teams'] = true;
        $this->teams = $teams;
        return $this;
    }
    /**
     * Link to the API endpoint for this organization
     *
     * @return string|null
     */
    public function getUri(): ?string
    {
        return $this->uri;
    }
    /**
     * Link to the API endpoint for this organization
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
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }
    /**
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getZone(): ?string
    {
        return $this->zone;
    }
    /**
     * @param string|null $zone
     *
     * @return self
     */
    public function setZone(?string $zone): self
    {
        $this->initialized['zone'] = true;
        $this->zone = $zone;
        return $this;
    }
}