<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Model;

class ReponseUniteLegale
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
     * @var UniteLegale
     */
    protected $uniteLegale;
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
     * @return UniteLegale
     */
    public function getUniteLegale(): UniteLegale
    {
        return $this->uniteLegale;
    }
    /**
     * @param UniteLegale $uniteLegale
     *
     * @return self
     */
    public function setUniteLegale(UniteLegale $uniteLegale): self
    {
        $this->initialized['uniteLegale'] = true;
        $this->uniteLegale = $uniteLegale;
        return $this;
    }
}