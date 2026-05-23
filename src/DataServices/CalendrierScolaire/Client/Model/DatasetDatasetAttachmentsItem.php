<?php

namespace Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Model;

class DatasetDatasetAttachmentsItem extends \ArrayObject
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
     * @var string
     */
    protected $mimetype;
    /**
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $title;
    /**
     * @return string
     */
    public function getMimetype(): string
    {
        return $this->mimetype;
    }
    /**
     * @param string $mimetype
     *
     * @return self
     */
    public function setMimetype(string $mimetype): self
    {
        $this->initialized['mimetype'] = true;
        $this->mimetype = $mimetype;
        return $this;
    }
    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
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
}