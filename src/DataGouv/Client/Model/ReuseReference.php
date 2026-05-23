<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class ReuseReference
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
     * URL of the image
     *
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }
    /**
     * URL of the image
     *
     * @param string $image
     *
     * @return self
     */
    public function setImage(string $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
    /**
     * URL of the cropped and squared image (500x500)
     *
     * @return string
     */
    public function getImageThumbnail(): string
    {
        return $this->imageThumbnail;
    }
    /**
     * URL of the cropped and squared image (500x500)
     *
     * @param string $imageThumbnail
     *
     * @return self
     */
    public function setImageThumbnail(string $imageThumbnail): self
    {
        $this->initialized['imageThumbnail'] = true;
        $this->imageThumbnail = $imageThumbnail;
        return $this;
    }
    /**
     * Link to the udata web page for this reuse
     *
     * @return string
     */
    public function getPage(): string
    {
        return $this->page;
    }
    /**
     * Link to the udata web page for this reuse
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
     * Link to the API endpoint for this reuse
     *
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }
    /**
     * Link to the API endpoint for this reuse
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