<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DiscussionStartSubject
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
     * The model class
     *
     * @var string
     */
    protected $class;
    /**
     * The object identifier
     *
     * @var string
     */
    protected $id;

    /**
     * The model class
     */
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * The model class
     */
    public function setClass(string $class): self
    {
        $this->initialized['class'] = true;
        $this->class = $class;

        return $this;
    }

    /**
     * The object identifier
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The object identifier
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }
}
