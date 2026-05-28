<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DatasetPreviewSpatial
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
     * A multipolygon for the whole coverage
     *
     * @var SpatialCoverageGeom
     */
    protected $geom;
    /**
     * The spatial/territorial granularity (full Granularity object if `X-Get-Datasets-Full-Objects` is set, ID of the granularity otherwise)
     *
     * @var mixed
     */
    protected $granularity = 'other';
    /**
     * The covered zones identifiers (full GeoZone objects if `X-Get-Datasets-Full-Objects` is set, IDs of the zones otherwise)
     *
     * @var mixed
     */
    protected $zones;
    /**
     * A multipolygon for the whole coverage
     *
     * @return SpatialCoverageGeom
     */
    public function getGeom(): SpatialCoverageGeom
    {
        return $this->geom;
    }
    /**
     * A multipolygon for the whole coverage
     *
     * @param SpatialCoverageGeom $geom
     *
     * @return self
     */
    public function setGeom(SpatialCoverageGeom $geom): self
    {
        $this->initialized['geom'] = true;
        $this->geom = $geom;
        return $this;
    }
    /**
     * The spatial/territorial granularity (full Granularity object if `X-Get-Datasets-Full-Objects` is set, ID of the granularity otherwise)
     *
     * @return mixed
     */
    public function getGranularity()
    {
        return $this->granularity;
    }
    /**
     * The spatial/territorial granularity (full Granularity object if `X-Get-Datasets-Full-Objects` is set, ID of the granularity otherwise)
     *
     * @param mixed $granularity
     *
     * @return self
     */
    public function setGranularity($granularity): self
    {
        $this->initialized['granularity'] = true;
        $this->granularity = $granularity;
        return $this;
    }
    /**
     * The covered zones identifiers (full GeoZone objects if `X-Get-Datasets-Full-Objects` is set, IDs of the zones otherwise)
     *
     * @return mixed
     */
    public function getZones()
    {
        return $this->zones;
    }
    /**
     * The covered zones identifiers (full GeoZone objects if `X-Get-Datasets-Full-Objects` is set, IDs of the zones otherwise)
     *
     * @param mixed $zones
     *
     * @return self
     */
    public function setZones($zones): self
    {
        $this->initialized['zones'] = true;
        $this->zones = $zones;
        return $this;
    }
}