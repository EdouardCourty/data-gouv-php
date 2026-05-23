<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class HarvestFilter
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
     * The filter details
     *
     * @var string|null
     */
    protected $description;
    /**
     * The filter key
     *
     * @var string|null
     */
    protected $key;
    /**
     * A localized human-readable label
     *
     * @var string|null
     */
    protected $label;
    /**
     * The filter expected type
     *
     * @var string|null
     */
    protected $type;
    /**
     * The filter details
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The filter details
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * The filter key
     *
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->key;
    }
    /**
     * The filter key
     *
     * @param string|null $key
     *
     * @return self
     */
    public function setKey(?string $key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
    /**
     * A localized human-readable label
     *
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }
    /**
     * A localized human-readable label
     *
     * @param string|null $label
     *
     * @return self
     */
    public function setLabel(?string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
    /**
     * The filter expected type
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * The filter expected type
     *
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