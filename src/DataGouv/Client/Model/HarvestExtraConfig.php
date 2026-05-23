<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class HarvestExtraConfig
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
     * The config default value
     *
     * @var string|null
     */
    protected $default;
    /**
     * Some details about the behavior
     *
     * @var string|null
     */
    protected $description;
    /**
     * The config key
     *
     * @var string|null
     */
    protected $key;
    /**
     * A localized human-readable and descriptive label
     *
     * @var string|null
     */
    protected $label;

    /**
     * The config default value
     */
    public function getDefault(): ?string
    {
        return $this->default;
    }

    /**
     * The config default value
     */
    public function setDefault(?string $default): self
    {
        $this->initialized['default'] = true;
        $this->default = $default;

        return $this;
    }

    /**
     * Some details about the behavior
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Some details about the behavior
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * The config key
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * The config key
     */
    public function setKey(?string $key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;

        return $this;
    }

    /**
     * A localized human-readable and descriptive label
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * A localized human-readable and descriptive label
     */
    public function setLabel(?string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }
}
