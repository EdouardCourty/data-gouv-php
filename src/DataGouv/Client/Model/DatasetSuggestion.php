<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DatasetSuggestion
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
     * An optional dataset acronym
     *
     * @var string|null
     */
    protected $acronym;
    /**
     * The dataset identifier
     *
     * @var string|null
     */
    protected $id;
    /**
     * The dataset (organization) logo URL
     *
     * @var string|null
     */
    protected $imageUrl;
    /**
     * The dataset web page URL
     *
     * @var string|null
     */
    protected $page;
    /**
     * The dataset permalink string
     *
     * @var string|null
     */
    protected $slug;
    /**
     * The dataset title
     *
     * @var string|null
     */
    protected $title;
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
     * The dataset (organization) logo URL
     *
     * @return string|null
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }
    /**
     * The dataset (organization) logo URL
     *
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
     * The dataset web page URL
     *
     * @return string|null
     */
    public function getPage(): ?string
    {
        return $this->page;
    }
    /**
     * The dataset web page URL
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
     * The dataset title
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * The dataset title
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
}