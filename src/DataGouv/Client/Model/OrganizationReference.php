<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class OrganizationReference
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
     * The object class
     *
     * @var string
     */
    protected $class;
    /**
     * The object unique identifier
     *
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $acronym;
    /**
     * @var list<OrganizationReferenceBadgesItem>
     */
    protected $badges;
    /**
     * URL of the image
     *
     * @var string
     */
    protected $logo;
    /**
     * URL of the cropped and squared image (100x100)
     *
     * @var string
     */
    protected $logoThumbnail;
    /**
     * @var string
     */
    protected $name;
    /**
     * Link to the udata web page for this organization
     *
     * @var string
     */
    protected $page;
    /**
     * @var OrganizationReferencePermissions
     */
    protected $permissions;
    /**
     * @var string
     */
    protected $slug;
    /**
     * Link to the API endpoint for this organization
     *
     * @var string
     */
    protected $uri;

    /**
     * The object class
     */
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * The object class
     */
    public function setClass(string $class): self
    {
        $this->initialized['class'] = true;
        $this->class = $class;

        return $this;
    }

    /**
     * The object unique identifier
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The object unique identifier
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getAcronym(): string
    {
        return $this->acronym;
    }

    public function setAcronym(string $acronym): self
    {
        $this->initialized['acronym'] = true;
        $this->acronym = $acronym;

        return $this;
    }

    /**
     * @return list<OrganizationReferenceBadgesItem>
     */
    public function getBadges(): array
    {
        return $this->badges;
    }

    /**
     * @param list<OrganizationReferenceBadgesItem> $badges
     */
    public function setBadges(array $badges): self
    {
        $this->initialized['badges'] = true;
        $this->badges = $badges;

        return $this;
    }

    /**
     * URL of the image
     */
    public function getLogo(): string
    {
        return $this->logo;
    }

    /**
     * URL of the image
     */
    public function setLogo(string $logo): self
    {
        $this->initialized['logo'] = true;
        $this->logo = $logo;

        return $this;
    }

    /**
     * URL of the cropped and squared image (100x100)
     */
    public function getLogoThumbnail(): string
    {
        return $this->logoThumbnail;
    }

    /**
     * URL of the cropped and squared image (100x100)
     */
    public function setLogoThumbnail(string $logoThumbnail): self
    {
        $this->initialized['logoThumbnail'] = true;
        $this->logoThumbnail = $logoThumbnail;

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
    public function getPage(): string
    {
        return $this->page;
    }

    /**
     * Link to the udata web page for this organization
     */
    public function setPage(string $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;

        return $this;
    }

    public function getPermissions(): OrganizationReferencePermissions
    {
        return $this->permissions;
    }

    public function setPermissions(OrganizationReferencePermissions $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;

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
     * Link to the API endpoint for this organization
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * Link to the API endpoint for this organization
     */
    public function setUri(string $uri): self
    {
        $this->initialized['uri'] = true;
        $this->uri = $uri;

        return $this;
    }
}
