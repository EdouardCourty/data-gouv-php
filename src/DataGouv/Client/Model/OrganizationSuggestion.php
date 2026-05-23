<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class OrganizationSuggestion
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
     * The organization acronym
     *
     * @var string|null
     */
    protected $acronym;
    /**
     * The organization identifier
     *
     * @var string|null
     */
    protected $id;
    /**
     * The organization logo URL
     *
     * @var string|null
     */
    protected $imageUrl;
    /**
     * The organization name
     *
     * @var string|null
     */
    protected $name;
    /**
     * The organization web page URL
     *
     * @var string|null
     */
    protected $page;
    /**
     * The organization permalink string
     *
     * @var string|null
     */
    protected $slug;

    /**
     * The organization acronym
     */
    public function getAcronym(): ?string
    {
        return $this->acronym;
    }

    /**
     * The organization acronym
     */
    public function setAcronym(?string $acronym): self
    {
        $this->initialized['acronym'] = true;
        $this->acronym = $acronym;

        return $this;
    }

    /**
     * The organization identifier
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The organization identifier
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The organization logo URL
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * The organization logo URL
     */
    public function setImageUrl(?string $imageUrl): self
    {
        $this->initialized['imageUrl'] = true;
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * The organization name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The organization name
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * The organization web page URL
     */
    public function getPage(): ?string
    {
        return $this->page;
    }

    /**
     * The organization web page URL
     */
    public function setPage(?string $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;

        return $this;
    }

    /**
     * The organization permalink string
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * The organization permalink string
     */
    public function setSlug(?string $slug): self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;

        return $this;
    }
}
