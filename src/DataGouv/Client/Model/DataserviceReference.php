<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DataserviceReference
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
     * Link to the API endpoint for this dataservice
     *
     * @var string
     */
    protected $selfApiUrl;
    /**
     * Link to the udata web page for this dataservice
     *
     * @var string
     */
    protected $selfWebUrl;
    /**
     * @var string
     */
    protected $title;

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
     * Link to the API endpoint for this dataservice
     */
    public function getSelfApiUrl(): string
    {
        return $this->selfApiUrl;
    }

    /**
     * Link to the API endpoint for this dataservice
     */
    public function setSelfApiUrl(string $selfApiUrl): self
    {
        $this->initialized['selfApiUrl'] = true;
        $this->selfApiUrl = $selfApiUrl;

        return $this;
    }

    /**
     * Link to the udata web page for this dataservice
     */
    public function getSelfWebUrl(): string
    {
        return $this->selfWebUrl;
    }

    /**
     * Link to the udata web page for this dataservice
     */
    public function setSelfWebUrl(string $selfWebUrl): self
    {
        $this->initialized['selfWebUrl'] = true;
        $this->selfWebUrl = $selfWebUrl;

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
}
