<?php

namespace Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Model;

class FacetEnumeration extends \ArrayObject
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
    protected $name;
    /**
     * @var list<FacetValueEnumeration>
     */
    protected $facets;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return list<FacetValueEnumeration>
     */
    public function getFacets(): array
    {
        return $this->facets;
    }
    /**
     * @param list<FacetValueEnumeration> $facets
     *
     * @return self
     */
    public function setFacets(array $facets): self
    {
        $this->initialized['facets'] = true;
        $this->facets = $facets;
        return $this;
    }
}