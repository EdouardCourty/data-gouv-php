<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class GenericReference
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
    protected $class;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @return string|null
     */
    public function getClass(): ?string
    {
        return $this->class;
    }
    /**
     * @param string|null $class
     *
     * @return self
     */
    public function setClass(?string $class): self
    {
        $this->initialized['class'] = true;
        $this->class = $class;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
}