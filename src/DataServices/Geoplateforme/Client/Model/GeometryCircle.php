<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model;

class GeometryCircle
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
     * @var list<float>
     */
    protected $coordinates;
    /**
     * @var float
     */
    protected $radius;
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
     * @return list<float>
     */
    public function getCoordinates(): array
    {
        return $this->coordinates;
    }
    /**
     * @param list<float> $coordinates
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
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }
    /**
     * @param float $radius
     *
     * @return self
     */
    public function setRadius(float $radius): self
    {
        $this->initialized['radius'] = true;
        $this->radius = $radius;
        return $this;
    }
}