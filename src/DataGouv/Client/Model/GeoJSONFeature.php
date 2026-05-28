<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class GeoJSONFeature
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
     * @var GeoJSON
     */
    protected $geometry;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var mixed
     */
    protected $properties;
    /**
     * @var string
     */
    protected $type;
    /**
     * @return GeoJSON
     */
    public function getGeometry(): GeoJSON
    {
        return $this->geometry;
    }
    /**
     * @param GeoJSON $geometry
     *
     * @return self
     */
    public function setGeometry(GeoJSON $geometry): self
    {
        $this->initialized['geometry'] = true;
        $this->geometry = $geometry;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
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
     * @return mixed
     */
    public function getProperties()
    {
        return $this->properties;
    }
    /**
     * @param mixed $properties
     *
     * @return self
     */
    public function setProperties($properties): self
    {
        $this->initialized['properties'] = true;
        $this->properties = $properties;
        return $this;
    }
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}