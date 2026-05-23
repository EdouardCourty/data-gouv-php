<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class Frequency
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
     * The frequency identifier
     *
     * @var string|null
     */
    protected $id;
    /**
     * The frequency display name
     *
     * @var string|null
     */
    protected $label;

    /**
     * The frequency identifier
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The frequency identifier
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The frequency display name
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * The frequency display name
     */
    public function setLabel(?string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }
}
