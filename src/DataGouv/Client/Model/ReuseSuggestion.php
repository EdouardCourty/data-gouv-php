<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class ReuseSuggestion
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
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The reuse identifier
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The reuse thumbnail URL
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * The reuse thumbnail URL
     */
    public function setImageUrl(?string $imageUrl): self
    {
        $this->initialized['imageUrl'] = true;
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * The reuse web page URL
     */
    public function getPage(): ?string
    {
        return $this->page;
    }

    /**
     * The reuse web page URL
     */
    public function setPage(?string $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;

        return $this;
    }

    /**
     * The reuse permalink string
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * The reuse permalink string
     */
    public function setSlug(?string $slug): self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;

        return $this;
    }

    /**
     * The reuse title
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * The reuse title
     */
    public function setTitle(?string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }
}
