<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Model;

class ReponseUnitesLegales
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
     * Informations générales sur le résultat de la requête
     *
     * @var Header
     */
    protected $header;
    /**
     * @var list<UniteLegale>
     */
    protected $unitesLegales;
    /**
     * @var list<Facette>
     */
    protected $facettes;
    /**
     * Informations générales sur le résultat de la requête
     *
     * @return Header
     */
    public function getHeader(): Header
    {
        return $this->header;
    }
    /**
     * Informations générales sur le résultat de la requête
     *
     * @param Header $header
     *
     * @return self
     */
    public function setHeader(Header $header): self
    {
        $this->initialized['header'] = true;
        $this->header = $header;
        return $this;
    }
    /**
     * @return list<UniteLegale>
     */
    public function getUnitesLegales(): array
    {
        return $this->unitesLegales;
    }
    /**
     * @param list<UniteLegale> $unitesLegales
     *
     * @return self
     */
    public function setUnitesLegales(array $unitesLegales): self
    {
        $this->initialized['unitesLegales'] = true;
        $this->unitesLegales = $unitesLegales;
        return $this;
    }
    /**
     * @return list<Facette>
     */
    public function getFacettes(): array
    {
        return $this->facettes;
    }
    /**
     * @param list<Facette> $facettes
     *
     * @return self
     */
    public function setFacettes(array $facettes): self
    {
        $this->initialized['facettes'] = true;
        $this->facettes = $facettes;
        return $this;
    }
}