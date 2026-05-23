<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class ReuseReference
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
     * URL of the image
     *
     * @var string
     */
    protected $image;
    /**
     * URL of the cropped and squared image (500x500)
     *
     * @var string
     */
    protected $imageThumbnail;
    /**
     * Link to the udata web page for this reuse
     *
     * @var string
     */
    protected $page;
    /**
     * @var string
     */
    protected $title;
    /**
     * Link to the API endpoint for this reuse
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

    /**
     * URL of the image
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * URL of the image
     */
    public function setImage(string $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;

        return $this;
    }

    /**
     * URL of the cropped and squared image (500x500)
     */
    public function getImageThumbnail(): string
    {
        return $this->imageThumbnail;
    }

    /**
     * URL of the cropped and squared image (500x500)
     */
    public function setImageThumbnail(string $imageThumbnail): self
    {
        $this->initialized['imageThumbnail'] = true;
        $this->imageThumbnail = $imageThumbnail;

        return $this;
    }

    /**
     * Link to the udata web page for this reuse
     */
    public function getPage(): string
    {
        return $this->page;
    }

    /**
     * Link to the udata web page for this reuse
     */
    public function setPage(string $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;

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

    /**
     * Link to the API endpoint for this reuse
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * Link to the API endpoint for this reuse
     */
    public function setUri(string $uri): self
    {
        $this->initialized['uri'] = true;
        $this->uri = $uri;

        return $this;
    }
}
