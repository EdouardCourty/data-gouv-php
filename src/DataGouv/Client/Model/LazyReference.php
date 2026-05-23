<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class LazyReference
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
     * @var mixed
     */
    protected $class;
    /**
     * @var mixed
     */
    protected $id;
    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }
    /**
     * @param mixed $class
     *
     * @return self
     */
    public function setClass($class): self
    {
        $this->initialized['class'] = true;
        $this->class = $class;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
}