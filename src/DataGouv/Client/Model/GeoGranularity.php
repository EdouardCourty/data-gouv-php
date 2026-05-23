<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class GeoGranularity
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
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The granularity identifier
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The granularity name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The granularity name
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }
}
