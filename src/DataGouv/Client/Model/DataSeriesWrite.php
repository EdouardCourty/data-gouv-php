<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DataSeriesWrite
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
     * @var string|null
     */
    protected $aggregateY;
    /**
     * @var string|null
     */
    protected $columnXNameOverride;
    /**
     * @var string|null
     */
    protected $columnY;
    protected $filters;
    /**
     * @var string
     */
    protected $resourceId;
    /**
     * @var string|null
     */
    protected $type;

    public function getAggregateY(): ?string
    {
        return $this->aggregateY;
    }

    public function setAggregateY(?string $aggregateY): self
    {
        $this->initialized['aggregateY'] = true;
        $this->aggregateY = $aggregateY;

        return $this;
    }

    public function getColumnXNameOverride(): ?string
    {
        return $this->columnXNameOverride;
    }

    public function setColumnXNameOverride(?string $columnXNameOverride): self
    {
        $this->initialized['columnXNameOverride'] = true;
        $this->columnXNameOverride = $columnXNameOverride;

        return $this;
    }

    public function getColumnY(): ?string
    {
        return $this->columnY;
    }

    public function setColumnY(?string $columnY): self
    {
        $this->initialized['columnY'] = true;
        $this->columnY = $columnY;

        return $this;
    }

    public function getFilters()
    {
        return $this->filters;
    }

    public function setFilters($filters): self
    {
        $this->initialized['filters'] = true;
        $this->filters = $filters;

        return $this;
    }

    public function getResourceId(): string
    {
        return $this->resourceId;
    }

    public function setResourceId(string $resourceId): self
    {
        $this->initialized['resourceId'] = true;
        $this->resourceId = $resourceId;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
