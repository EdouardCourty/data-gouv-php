<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Model;

class ReponseEtablissement
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
     * Objet représentant un établissement et son historique
     *
     * @var Etablissement
     */
    protected $etablissement;
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
     * Objet représentant un établissement et son historique
     *
     * @return Etablissement
     */
    public function getEtablissement(): Etablissement
    {
        return $this->etablissement;
    }
    /**
     * Objet représentant un établissement et son historique
     *
     * @param Etablissement $etablissement
     *
     * @return self
     */
    public function setEtablissement(Etablissement $etablissement): self
    {
        $this->initialized['etablissement'] = true;
        $this->etablissement = $etablissement;
        return $this;
    }
}