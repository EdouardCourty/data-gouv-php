<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DatasetPreviewSpatial
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
     * A multipolygon for the whole coverage
     *
     * @var SpatialCoverageGeom
     */
    protected $geom;
    /**
     * The spatial/territorial granularity (full Granularity object if `X-Get-Datasets-Full-Objects` is set, ID of the granularity otherwise)
     */
    protected $granularity = 'other';
    /**
     * The covered zones identifiers (full GeoZone objects if `X-Get-Datasets-Full-Objects` is set, IDs of the zones otherwise)
     */
    protected $zones;

    /**
     * A multipolygon for the whole coverage
     */
    public function getGeom(): SpatialCoverageGeom
    {
        return $this->geom;
    }

    /**
     * A multipolygon for the whole coverage
     */
    public function setGeom(SpatialCoverageGeom $geom): self
    {
        $this->initialized['geom'] = true;
        $this->geom = $geom;

        return $this;
    }

    /**
     * The spatial/territorial granularity (full Granularity object if `X-Get-Datasets-Full-Objects` is set, ID of the granularity otherwise)
     */
    public function getGranularity()
    {
        return $this->granularity;
    }

    /**
     * The spatial/territorial granularity (full Granularity object if `X-Get-Datasets-Full-Objects` is set, ID of the granularity otherwise)
     */
    public function setGranularity($granularity): self
    {
        $this->initialized['granularity'] = true;
        $this->granularity = $granularity;

        return $this;
    }

    /**
     * The covered zones identifiers (full GeoZone objects if `X-Get-Datasets-Full-Objects` is set, IDs of the zones otherwise)
     */
    public function getZones()
    {
        return $this->zones;
    }

    /**
     * The covered zones identifiers (full GeoZone objects if `X-Get-Datasets-Full-Objects` is set, IDs of the zones otherwise)
     */
    public function setZones($zones): self
    {
        $this->initialized['zones'] = true;
        $this->zones = $zones;

        return $this;
    }
}
