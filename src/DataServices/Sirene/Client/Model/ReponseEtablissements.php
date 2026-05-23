<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Model;

class ReponseEtablissements
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
     * @var list<Etablissement>
     */
    protected $etablissements;
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
     * @return list<Etablissement>
     */
    public function getEtablissements(): array
    {
        return $this->etablissements;
    }
    /**
     * @param list<Etablissement> $etablissements
     *
     * @return self
     */
    public function setEtablissements(array $etablissements): self
    {
        $this->initialized['etablissements'] = true;
        $this->etablissements = $etablissements;
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