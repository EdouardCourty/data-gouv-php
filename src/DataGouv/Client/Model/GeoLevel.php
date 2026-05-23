<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class GeoLevel
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
     * The level identifier
     *
     * @var string
     */
    protected $id;
    /**
     * The level name
     *
     * @var string
     */
    protected $name;
    /**
     * The level identifier
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The level identifier
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
     * The level name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The level name
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