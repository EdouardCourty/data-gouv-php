<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Model;

class LienSuccession
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
     * Numéro Siret de l'établissement prédécesseur
     *
     * @var string
     */
    protected $siretEtablissementPredecesseur;
    /**
     * Numéro Siret de l'établissement successeur
     *
     * @var string
     */
    protected $siretEtablissementSuccesseur;
    /**
     * Date d'effet du lien de succession, au format AAAA-MM-JJ
     *
     * @var \DateTime
     */
    protected $dateLienSuccession;
    /**
     * Indicatrice de transfert de siège
     *
     * @var bool
     */
    protected $transfertSiege;
    /**
     * Indicatrice de continuité économique entre les deux établissements
     *
     * @var bool
     */
    protected $continuiteEconomique;
    /**
     * Date de traitement du lien de succession, au format yyyy-MM-ddTHH:mm:ss.SSS
     *
     * @var \DateTime
     */
    protected $dateDernierTraitementLienSuccession;
    /**
     * Numéro Siret de l'établissement prédécesseur
     *
     * @return string
     */
    public function getSiretEtablissementPredecesseur(): string
    {
        return $this->siretEtablissementPredecesseur;
    }
    /**
     * Numéro Siret de l'établissement prédécesseur
     *
     * @param string $siretEtablissementPredecesseur
     *
     * @return self
     */
    public function setSiretEtablissementPredecesseur(string $siretEtablissementPredecesseur): self
    {
        $this->initialized['siretEtablissementPredecesseur'] = true;
        $this->siretEtablissementPredecesseur = $siretEtablissementPredecesseur;
        return $this;
    }
    /**
     * Numéro Siret de l'établissement successeur
     *
     * @return string
     */
    public function getSiretEtablissementSuccesseur(): string
    {
        return $this->siretEtablissementSuccesseur;
    }
    /**
     * Numéro Siret de l'établissement successeur
     *
     * @param string $siretEtablissementSuccesseur
     *
     * @return self
     */
    public function setSiretEtablissementSuccesseur(string $siretEtablissementSuccesseur): self
    {
        $this->initialized['siretEtablissementSuccesseur'] = true;
        $this->siretEtablissementSuccesseur = $siretEtablissementSuccesseur;
        return $this;
    }
    /**
     * Date d'effet du lien de succession, au format AAAA-MM-JJ
     *
     * @return \DateTime
     */
    public function getDateLienSuccession(): \DateTime
    {
        return $this->dateLienSuccession;
    }
    /**
     * Date d'effet du lien de succession, au format AAAA-MM-JJ
     *
     * @param \DateTime $dateLienSuccession
     *
     * @return self
     */
    public function setDateLienSuccession(\DateTime $dateLienSuccession): self
    {
        $this->initialized['dateLienSuccession'] = true;
        $this->dateLienSuccession = $dateLienSuccession;
        return $this;
    }
    /**
     * Indicatrice de transfert de siège
     *
     * @return bool
     */
    public function getTransfertSiege(): bool
    {
        return $this->transfertSiege;
    }
    /**
     * Indicatrice de transfert de siège
     *
     * @param bool $transfertSiege
     *
     * @return self
     */
    public function setTransfertSiege(bool $transfertSiege): self
    {
        $this->initialized['transfertSiege'] = true;
        $this->transfertSiege = $transfertSiege;
        return $this;
    }
    /**
     * Indicatrice de continuité économique entre les deux établissements
     *
     * @return bool
     */
    public function getContinuiteEconomique(): bool
    {
        return $this->continuiteEconomique;
    }
    /**
     * Indicatrice de continuité économique entre les deux établissements
     *
     * @param bool $continuiteEconomique
     *
     * @return self
     */
    public function setContinuiteEconomique(bool $continuiteEconomique): self
    {
        $this->initialized['continuiteEconomique'] = true;
        $this->continuiteEconomique = $continuiteEconomique;
        return $this;
    }
    /**
     * Date de traitement du lien de succession, au format yyyy-MM-ddTHH:mm:ss.SSS
     *
     * @return \DateTime
     */
    public function getDateDernierTraitementLienSuccession(): \DateTime
    {
        return $this->dateDernierTraitementLienSuccession;
    }
    /**
     * Date de traitement du lien de succession, au format yyyy-MM-ddTHH:mm:ss.SSS
     *
     * @param \DateTime $dateDernierTraitementLienSuccession
     *
     * @return self
     */
    public function setDateDernierTraitementLienSuccession(\DateTime $dateDernierTraitementLienSuccession): self
    {
        $this->initialized['dateDernierTraitementLienSuccession'] = true;
        $this->dateDernierTraitementLienSuccession = $dateDernierTraitementLienSuccession;
        return $this;
    }
}