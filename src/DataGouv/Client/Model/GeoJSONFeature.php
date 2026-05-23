<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class GeoJSONFeature
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
     * @var GeoJSON
     */
    protected $geometry;
    /**
     * @var string|null
     */
    protected $id;
    protected $properties;
    /**
     * @var string
     */
    protected $type;

    public function getGeometry(): GeoJSON
    {
        return $this->geometry;
    }

    public function setGeometry(GeoJSON $geometry): self
    {
        $this->initialized['geometry'] = true;
        $this->geometry = $geometry;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getProperties()
    {
        return $this->properties;
    }

    public function setProperties($properties): self
    {
        $this->initialized['properties'] = true;
        $this->properties = $properties;

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
