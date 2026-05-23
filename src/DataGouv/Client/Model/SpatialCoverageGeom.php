<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class SpatialCoverageGeom
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
     * The geometry as coordinates lists
     *
     * @var list<mixed>
     */
    protected $coordinates;
    /**
     * The GeoJSON Type
     *
     * @var string
     */
    protected $type;
    /**
     * The geometry as coordinates lists
     *
     * @return list<mixed>
     */
    public function getCoordinates(): array
    {
        return $this->coordinates;
    }
    /**
     * The geometry as coordinates lists
     *
     * @param list<mixed> $coordinates
     *
     * @return self
     */
    public function setCoordinates(array $coordinates): self
    {
        $this->initialized['coordinates'] = true;
        $this->coordinates = $coordinates;
        return $this;
    }
    /**
     * The GeoJSON Type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The GeoJSON Type
     *
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