<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Model;

class ReponseLienSuccession
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
     * @var list<LienSuccession>
     */
    protected $liensSuccession;
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
     * @return list<LienSuccession>
     */
    public function getLiensSuccession(): array
    {
        return $this->liensSuccession;
    }
    /**
     * @param list<LienSuccession> $liensSuccession
     *
     * @return self
     */
    public function setLiensSuccession(array $liensSuccession): self
    {
        $this->initialized['liensSuccession'] = true;
        $this->liensSuccession = $liensSuccession;
        return $this;
    }
}