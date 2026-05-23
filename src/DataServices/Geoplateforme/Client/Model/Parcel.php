<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model;

class Parcel
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
    protected $type;
    /**
     * @var ParcelProperties
     */
    protected $properties;
    /**
     * @var GeometryPoint
     */
    protected $geometry;
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
    /**
     * @return ParcelProperties
     */
    public function getProperties(): ParcelProperties
    {
        return $this->properties;
    }
    /**
     * @param ParcelProperties $properties
     *
     * @return self
     */
    public function setProperties(ParcelProperties $properties): self
    {
        $this->initialized['properties'] = true;
        $this->properties = $properties;
        return $this;
    }
    /**
     * @return GeometryPoint
     */
    public function getGeometry(): GeometryPoint
    {
        return $this->geometry;
    }
    /**
     * @param GeometryPoint $geometry
     *
     * @return self
     */
    public function setGeometry(GeometryPoint $geometry): self
    {
        $this->initialized['geometry'] = true;
        $this->geometry = $geometry;
        return $this;
    }
}