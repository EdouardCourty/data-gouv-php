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
     * @var string|null
     */
    protected $siren;
    /**
     * Dénomination de l'unité légale
     *
     * @var string|null
     */
    protected $denomination;
    /**
     * Qualité du dirigeant
     *
     * @var string|null
     */
    protected $qualite;
    /**
     * Type de dirgeant : "personne morale"
     *
     * @var string|null
     */
    protected $typeDirigeant;
    /**
     * @return string|null
     */
    public function getSiren(): ?string
    {
        return $this->siren;
    }
    /**
     * @param string|null $siren
     *
     * @return self
     */
    public function setSiren(?string $siren): self
    {
        $this->initialized['siren'] = true;
        $this->siren = $siren;
        return $this;
    }
    /**
     * Dénomination de l'unité légale
     *
     * @return string|null
     */
    public function getDenomination(): ?string
    {
        return $this->denomination;
    }
    /**
     * Dénomination de l'unité légale
     *
     * @param string|null $denomination
     *
     * @return self
     */
    public function setDenomination(?string $denomination): self
    {
        $this->initialized['denomination'] = true;
        $this->denomination = $denomination;
        return $this;
    }
    /**
     * Qualité du dirigeant
     *
     * @return string|null
     */
    public function getQualite(): ?string
    {
        return $this->qualite;
    }
    /**
     * Qualité du dirigeant
     *
     * @param string|null $qualite
     *
     * @return self
     */
    public function setQualite(?string $qualite): self
    {
        $this->initialized['qualite'] = true;
        $this->qualite = $qualite;
        return $this;
    }
    /**
     * Type de dirgeant : "personne morale"
     *
     * @return string|null
     */
    public function getTypeDirigeant(): ?string
    {
        return $this->typeDirigeant;
    }
    /**
     * Type de dirgeant : "personne morale"
     *
     * @param string|null $typeDirigeant
     *
     * @return self
     */
    public function setTypeDirigeant(?string $typeDirigeant): self
    {
        $this->initialized['typeDirigeant'] = true;
        $this->typeDirigeant = $typeDirigeant;
        return $this;
    }
}