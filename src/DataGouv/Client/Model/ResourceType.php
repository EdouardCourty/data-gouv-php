<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class ResourceType
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
     * The resource type identifier
     *
     * @var string|null
     */
    protected $id;
    /**
     * The resource type display name
     *
     * @var string|null
     */
    protected $label;

    /**
     * The resource type identifier
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The resource type identifier
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The resource type display name
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * The resource type display name
     */
    public function setLabel(?string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }
}
