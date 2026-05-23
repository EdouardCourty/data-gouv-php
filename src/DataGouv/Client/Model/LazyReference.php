<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class LazyReference
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    protected $class;
    protected $id;

    public function getClass()
    {
        return $this->class;
    }

    public function setClass($class): self
    {
        $this->initialized['class'] = true;
        $this->class = $class;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }
}
