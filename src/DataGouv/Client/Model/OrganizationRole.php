<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class OrganizationRole
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
     * The role identifier
     *
     * @var string|null
     */
    protected $id;
    /**
     * The role label
     *
     * @var string|null
     */
    protected $label;

    /**
     * The role identifier
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The role identifier
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The role label
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * The role label
     */
    public function setLabel(?string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }
}
