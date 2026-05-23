<?php

namespace Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model;

class CatalogFacetsGetResponse200 extends \ArrayObject
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
     * @var list<Links>
     */
    protected $links;
    /**
     * @var list<FacetEnumeration>
     */
    protected $facets;
    /**
     * @return list<Links>
     */
    public function getLinks(): array
    {
        return $this->links;
    }
    /**
     * @param list<Links> $links
     *
     * @return self
     */
    public function setLinks(array $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
    /**
     * @return list<FacetEnumeration>
     */
    public function getFacets(): array
    {
        return $this->facets;
    }
    /**
     * @param list<FacetEnumeration> $facets
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