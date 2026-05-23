<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model;

class GetcapabilitiesIndexesItem
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
    protected $id;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var list<GetcapabilitiesIndexesItemFieldsItem>
     */
    protected $fields;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
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
     * @return list<GetcapabilitiesIndexesItemFieldsItem>
     */
    public function getFields(): array
    {
        return $this->fields;
    }
    /**
     * @param list<GetcapabilitiesIndexesItemFieldsItem> $fields
     *
     * @return self
     */
    public function setFields(array $fields): self
    {
        $this->initialized['fields'] = true;
        $this->fields = $fields;
        return $this;
    }
}