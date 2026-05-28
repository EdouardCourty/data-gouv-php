<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model;

class GetcapabilitiesIndexesItemFieldsItem
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
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var bool
     */
    protected $queryable;
    /**
     * @var bool
     */
    protected $filter;
    /**
     * @var list<mixed>
     */
    protected $values;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
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
     * @return bool
     */
    public function getQueryable(): bool
    {
        return $this->queryable;
    }
    /**
     * @param bool $queryable
     *
     * @return self
     */
    public function setQueryable(bool $queryable): self
    {
        $this->initialized['queryable'] = true;
        $this->queryable = $queryable;
        return $this;
    }
    /**
     * @return bool
     */
    public function getFilter(): bool
    {
        return $this->filter;
    }
    /**
     * @param bool $filter
     *
     * @return self
     */
    public function setFilter(bool $filter): self
    {
        $this->initialized['filter'] = true;
        $this->filter = $filter;
        return $this;
    }
    /**
     * @return list<mixed>
     */
    public function getValues(): array
    {
        return $this->values;
    }
    /**
     * @param list<mixed> $values
     *
     * @return self
     */
    public function setValues(array $values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;
        return $this;
    }
}