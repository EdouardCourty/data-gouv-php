<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class GeoJSONFeatureCollection
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
     * @var list<GeoJSONFeature>
     */
    protected $features;
    /**
     * @var string
     */
    protected $type;

    /**
     * @return list<GeoJSONFeature>
     */
    public function getFeatures(): array
    {
        return $this->features;
    }

    /**
     * @param list<GeoJSONFeature> $features
     */
    public function setFeatures(array $features): self
    {
        $this->initialized['features'] = true;
        $this->features = $features;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
