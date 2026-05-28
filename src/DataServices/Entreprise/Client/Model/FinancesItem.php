<?php

namespace Ecourty\DataGouv\DataServices\Entreprise\Client\Model;

class FinancesItem extends \ArrayObject
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
     * Chiffre d'affaires
     *
     * @var int
     */
    protected $ca;
    /**
     * Résultat net
     *
     * @var int
     */
    protected $resultatNet;
    /**
     * Chiffre d'affaires
     *
     * @return int
     */
    public function getCa(): int
    {
        return $this->ca;
    }
    /**
     * Chiffre d'affaires
     *
     * @param int $ca
     *
     * @return self
     */
    public function setCa(int $ca): self
    {
        $this->initialized['ca'] = true;
        $this->ca = $ca;
        return $this;
    }
    /**
     * Résultat net
     *
     * @return int
     */
    public function getResultatNet(): int
    {
        return $this->resultatNet;
    }
    /**
     * Résultat net
     *
     * @param int $resultatNet
     *
     * @return self
     */
    public function setResultatNet(int $resultatNet): self
    {
        $this->initialized['resultatNet'] = true;
        $this->resultatNet = $resultatNet;
        return $this;
    }
}