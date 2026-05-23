<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class ReuseType
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
     * The reuse type identifier
     *
     * @var string|null
     */
    protected $id;
    /**
     * The reuse type display name
     *
     * @var string|null
     */
    protected $label;

    /**
     * The reuse type identifier
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The reuse type identifier
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The reuse type display name
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * The reuse type display name
     */
    public function setLabel(?string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }
}
