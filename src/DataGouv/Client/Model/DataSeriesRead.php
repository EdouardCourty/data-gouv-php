<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DataSeriesRead
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
    /**
     * @var mixed
     */
    protected $filters;
    /**
     * @var string
     */
    protected $resourceId;
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @return string|null
     */
    public function getAggregateY(): ?string
    {
        return $this->aggregateY;
    }
    /**
     * @param string|null $aggregateY
     *
     * @return self
     */
    public function setAggregateY(?string $aggregateY): self
    {
        $this->initialized['aggregateY'] = true;
        $this->aggregateY = $aggregateY;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getColumnXNameOverride(): ?string
    {
        return $this->columnXNameOverride;
    }
    /**
     * @param string|null $columnXNameOverride
     *
     * @return self
     */
    public function setColumnXNameOverride(?string $columnXNameOverride): self
    {
        $this->initialized['columnXNameOverride'] = true;
        $this->columnXNameOverride = $columnXNameOverride;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getColumnY(): ?string
    {
        return $this->columnY;
    }
    /**
     * @param string|null $columnY
     *
     * @return self
     */
    public function setColumnY(?string $columnY): self
    {
        $this->initialized['columnY'] = true;
        $this->columnY = $columnY;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getFilters()
    {
        return $this->filters;
    }
    /**
     * @param mixed $filters
     *
     * @return self
     */
    public function setFilters($filters): self
    {
        $this->initialized['filters'] = true;
        $this->filters = $filters;
        return $this;
    }
    /**
     * @return string
     */
    public function getResourceId(): string
    {
        return $this->resourceId;
    }
    /**
     * @param string $resourceId
     *
     * @return self
     */
    public function setResourceId(string $resourceId): self
    {
        $this->initialized['resourceId'] = true;
        $this->resourceId = $resourceId;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}