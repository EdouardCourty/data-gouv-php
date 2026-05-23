<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class OrganizationReference
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
     *
     * @return string
     */
    public function getClass(): string
    {
        return $this->class;
    }
    /**
     * The object class
     *
     * @param string $class
     *
     * @return self
     */
    public function setClass(string $class): self
    {
        $this->initialized['class'] = true;
        $this->class = $class;
        return $this;
    }
    /**
     * The object unique identifier
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The object unique identifier
     *
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
     * @return string
     */
    public function getAcronym(): string
    {
        return $this->acronym;
    }
    /**
     * @param string $acronym
     *
     * @return self
     */
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
     * URL of the image
     *
     * @return string
     */
    public function getLogo(): string
    {
        return $this->logo;
    }
    /**
     * URL of the image
     *
     * @param string $logo
     *
     * @return self
     */
    public function setLogo(string $logo): self
    {
        $this->initialized['logo'] = true;
        $this->logo = $logo;
        return $this;
    }
    /**
     * URL of the cropped and squared image (100x100)
     *
     * @return string
     */
    public function getLogoThumbnail(): string
    {
        return $this->logoThumbnail;
    }
    /**
     * URL of the cropped and squared image (100x100)
     *
     * @param string $logoThumbnail
     *
     * @return self
     */
    public function setLogoThumbnail(string $logoThumbnail): self
    {
        $this->initialized['logoThumbnail'] = true;
        $this->logoThumbnail = $logoThumbnail;
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
     * @return string
     */
    public function getPage(): string
    {
        return $this->page;
    }
    /**
     * Link to the udata web page for this organization
     *
     * @param string $page
     *
     * @return self
     */
    public function setPage(string $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;
        return $this;
    }
    /**
     * @return OrganizationReferencePermissions
     */
    public function getPermissions(): OrganizationReferencePermissions
    {
        return $this->permissions;
    }
    /**
     * @param OrganizationReferencePermissions $permissions
     *
     * @return self
     */
    public function setPermissions(OrganizationReferencePermissions $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;
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
     * Link to the API endpoint for this organization
     *
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }
    /**
     * Link to the API endpoint for this organization
     *
     * @param string $uri
     *
     * @return self
     */
    public function setUri(string $uri): self
    {
        $this->initialized['uri'] = true;
        $this->uri = $uri;
        return $this;
    }
}