<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class ContactPointReference
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
     * The object class
     *
     * @var string
     */
    protected $class;
    /**
     * The object unique identifier
     *
     * @var string
     */
    protected $id;
    /**
     * The object class
     *
     * @return string
     */
    public function getClass(): string
    {
        return $this->class;
    }
    /**
     * The object class
     *
     * @param string $class
     *
     * @return self
     */
    public function setClass(string $class): self
    {
        $this->initialized['class'] = true;
        $this->class = $class;
        return $this;
    }
    /**
     * The object unique identifier
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The object unique identifier
     *
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
}