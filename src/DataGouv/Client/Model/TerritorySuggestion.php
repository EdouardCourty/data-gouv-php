<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class TerritorySuggestion
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
     * The territory main code
     *
     * @var string
     */
    protected $code;
    /**
     * The territory identifier
     *
     * @var string
     */
    protected $id;
    /**
     * The territory administrative level
     *
     * @var string
     */
    protected $level;
    /**
     * The territory name
     *
     * @var string
     */
    protected $name;
    /**
     * The zone uri
     *
     * @var string
     */
    protected $uri;

    /**
     * The territory main code
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * The territory main code
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * The territory identifier
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The territory identifier
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The territory administrative level
     */
    public function getLevel(): string
    {
        return $this->level;
    }

    /**
     * The territory administrative level
     */
    public function setLevel(string $level): self
    {
        $this->initialized['level'] = true;
        $this->level = $level;

        return $this;
    }

    /**
     * The territory name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The territory name
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * The zone uri
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * The zone uri
     */
    public function setUri(string $uri): self
    {
        $this->initialized['uri'] = true;
        $this->uri = $uri;

        return $this;
    }
}
