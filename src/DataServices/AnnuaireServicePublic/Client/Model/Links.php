<?php

namespace Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Model;

class Links extends \ArrayObject
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
     * @var string
     */
    protected $href;
    /**
     * @var string
     */
    protected $rel;
    /**
     * @return string
     */
    public function getHref(): string
    {
        return $this->href;
    }
    /**
     * @param string $href
     *
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->initialized['href'] = true;
        $this->href = $href;
        return $this;
    }
    /**
     * @return string
     */
    public function getRel(): string
    {
        return $this->rel;
    }
    /**
     * @param string $rel
     *
     * @return self
     */
    public function setRel(string $rel): self
    {
        $this->initialized['rel'] = true;
        $this->rel = $rel;
        return $this;
    }
}