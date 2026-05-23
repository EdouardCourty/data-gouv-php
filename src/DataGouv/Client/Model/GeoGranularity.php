<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class GeoGranularity
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
     * The granularity identifier
     *
     * @var string
     */
    protected $id;
    /**
     * The granularity name
     *
     * @var string
     */
    protected $name;
    /**
     * The granularity identifier
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The granularity identifier
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
     * The granularity name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The granularity name
     *
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
}