<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class OrganizationRead
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
    protected $ext;
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

    /**
     * @return list<OrganizationReadBadgesItem>
     */
    public function getBadges(): array
    {
        return $this->badges;
    }

    /**
     * @param list<OrganizationReadBadgesItem> $badges
     */
    public function setBadges(array $badges): self
    {
        $this->initialized['badges'] = true;
        $this->badges = $badges;

        return $this;
    }

    public function getBusinessNumberId(): ?string
    {
        return $this->businessNumberId;
    }

    public function setBusinessNumberId(?string $businessNumberId): self
    {
        $this->initialized['businessNumberId'] = true;
        $this->businessNumberId = $businessNumberId;

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

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(?string $imageUrl): self
    {
        $this->initialized['imageUrl'] = true;
        $this->imageUrl = $imageUrl;

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

    /**
     * URL of the image
     */
    public function getLogo(): ?string
    {
        return $this->logo;
    }

    /**
     * URL of the image
     */
    public function setLogo(?string $logo): self
    {
        $this->initialized['logo'] = true;
        $this->logo = $logo;

        return $this;
    }

    /**
     * URL of the cropped and squared image (100x100)
     */
    public function getLogoThumbnail(): ?string
    {
        return $this->logoThumbnail;
    }

    /**
     * URL of the cropped and squared image (100x100)
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
     */
    public function setMembers(array $members): self
    {
        $this->initialized['members'] = true;
        $this->members = $members;

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

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Link to the udata web page for this organization
     */
    public function getPage(): ?string
    {
        return $this->page;
    }

    /**
     * Link to the udata web page for this organization
     */
    public function setPage(?string $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;

        return $this;
    }

    public function getPermissions(): OrganizationReadPermissions
    {
        return $this->permissions;
    }

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
     */
    public function setRequests(array $requests): self
    {
        $this->initialized['requests'] = true;
        $this->requests = $requests;

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
     * @return list<OrganizationReadTeamsItem>
     */
    public function getTeams(): array
    {
        return $this->teams;
    }

    /**
     * @param list<OrganizationReadTeamsItem> $teams
     */
    public function setTeams(array $teams): self
    {
        $this->initialized['teams'] = true;
        $this->teams = $teams;

        return $this;
    }

    /**
     * Link to the API endpoint for this organization
     */
    public function getUri(): ?string
    {
        return $this->uri;
    }

    /**
     * Link to the API endpoint for this organization
     */
    public function setUri(?string $uri): self
    {
        $this->initialized['uri'] = true;
        $this->uri = $uri;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    public function getZone(): ?string
    {
        return $this->zone;
    }

    public function setZone(?string $zone): self
    {
        $this->initialized['zone'] = true;
        $this->zone = $zone;

        return $this;
    }
}
