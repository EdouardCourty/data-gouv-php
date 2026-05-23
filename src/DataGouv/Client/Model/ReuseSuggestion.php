<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class ReuseSuggestion
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
     * The reuse identifier
     *
     * @var string|null
     */
    protected $id;
    /**
     * The reuse thumbnail URL
     *
     * @var string|null
     */
    protected $imageUrl;
    /**
     * The reuse web page URL
     *
     * @var string|null
     */
    protected $page;
    /**
     * The reuse permalink string
     *
     * @var string|null
     */
    protected $slug;
    /**
     * The reuse title
     *
     * @var string|null
     */
    protected $title;
    /**
     * The reuse identifier
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The reuse identifier
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
     * The reuse thumbnail URL
     *
     * @return string|null
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }
    /**
     * The reuse thumbnail URL
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
     * The reuse web page URL
     *
     * @return string|null
     */
    public function getPage(): ?string
    {
        return $this->page;
    }
    /**
     * The reuse web page URL
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
     * The reuse permalink string
     *
     * @return string|null
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }
    /**
     * The reuse permalink string
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
     * The reuse title
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * The reuse title
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