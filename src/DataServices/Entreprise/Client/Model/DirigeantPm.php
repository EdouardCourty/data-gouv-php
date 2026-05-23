<?php

namespace Ecourty\DataGouv\DataServices\Entreprise\Client\Model;

class DirigeantPm extends \ArrayObject
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
    protected $siren;
    /**
     * Dénomination de l'unité légale
     *
     * @var string
     */
    protected $denomination;
    /**
     * Qualité du dirigeant
     *
     * @var string
     */
    protected $qualite;
    /**
     * Type de dirgeant : "personne morale"
     *
     * @var string
     */
    protected $typeDirigeant;
    /**
     * @return string
     */
    public function getSiren(): string
    {
        return $this->siren;
    }
    /**
     * @param string $siren
     *
     * @return self
     */
    public function setSiren(string $siren): self
    {
        $this->initialized['siren'] = true;
        $this->siren = $siren;
        return $this;
    }
    /**
     * Dénomination de l'unité légale
     *
     * @return string
     */
    public function getDenomination(): string
    {
        return $this->denomination;
    }
    /**
     * Dénomination de l'unité légale
     *
     * @param string $denomination
     *
     * @return self
     */
    public function setDenomination(string $denomination): self
    {
        $this->initialized['denomination'] = true;
        $this->denomination = $denomination;
        return $this;
    }
    /**
     * Qualité du dirigeant
     *
     * @return string
     */
    public function getQualite(): string
    {
        return $this->qualite;
    }
    /**
     * Qualité du dirigeant
     *
     * @param string $qualite
     *
     * @return self
     */
    public function setQualite(string $qualite): self
    {
        $this->initialized['qualite'] = true;
        $this->qualite = $qualite;
        return $this;
    }
    /**
     * Type de dirgeant : "personne morale"
     *
     * @return string
     */
    public function getTypeDirigeant(): string
    {
        return $this->typeDirigeant;
    }
    /**
     * Type de dirgeant : "personne morale"
     *
     * @param string $typeDirigeant
     *
     * @return self
     */
    public function setTypeDirigeant(string $typeDirigeant): self
    {
        $this->initialized['typeDirigeant'] = true;
        $this->typeDirigeant = $typeDirigeant;
        return $this;
    }
}