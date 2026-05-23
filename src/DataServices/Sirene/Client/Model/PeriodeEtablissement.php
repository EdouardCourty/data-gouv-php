<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Model;

class PeriodeEtablissement
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
     * Date de fin de la période, null pour la dernière période, format AAAA-MM-DD
     *
     * @var \DateTime
     */
    protected $dateFin;
    /**
     * Date de début de la période, format AAAA-MM-DD
     *
     * @var \DateTime
     */
    protected $dateDebut;
    /**
     * État administratif de l'établissement pendant la période (A= établissement actif; F= établissement fermé)
     *
     * @var string
     */
    protected $etatAdministratifEtablissement;
    /**
     * Indicatrice de changement de l'état administratif de l'établissement par rapport à la période précédente
     *
     * @var bool
     */
    protected $changementEtatAdministratifEtablissement;
    /**
     * Première ligne d'enseigne
     *
     * @var string
     */
    protected $enseigne1Etablissement;
    /**
     * Deuxième ligne d'enseigne
     *
     * @var string
     */
    protected $enseigne2Etablissement;
    /**
     * Troisième ligne d'enseigne
     *
     * @var string
     */
    protected $enseigne3Etablissement;
    /**
     * Indicatrice de changement de l'enseigne de l'établissement par rapport à la période précédente (un seul indicateur pour les trois variables Enseigne1, Enseigne2 et Enseigne3). Un seul indicateur pour les trois variables enseigne
     *
     * @var bool
     */
    protected $changementEnseigneEtablissement;
    /**
     * Nom sous lequel l’activité de l’établissement est connu du public
     *
     * @var string
     */
    protected $denominationUsuelleEtablissement;
    /**
     * Indicatrice de changement de la dénomination usuelle de l’établissement par rapport à la période précédente
     *
     * @var bool
     */
    protected $changementDenominationUsuelleEtablissement;
    /**
     * Activité principale de l'établissement pendant la période (l'APE est codifiée selon la <a href='https://www.insee.fr/fr/information/2406147'>nomenclature d'Activités Française (NAF)</a>
     *
     * @var string
     */
    protected $activitePrincipaleEtablissement;
    /**
     * Nomenclature de l'activité, permet de savoir à partir de quelle nomenclature est codifiée ActivitePrincipaleEtablissement
     *
     * @var string
     */
    protected $nomenclatureActivitePrincipaleEtablissement;
    /**
     * Indicatrice de changement de l'activité principale de l'établissement par rapport à la période précédente
     *
     * @var bool
     */
    protected $changementActivitePrincipaleEtablissement;
    /**
     * Caractère employeur de l'établissement (O=oui, N=non, null=sans objet)
     *
     * @var string
     */
    protected $caractereEmployeurEtablissement;
    /**
     * Indicatrice de changement du caractère employeur de l'établissement par rapport à la période précédente
     *
     * @var bool
     */
    protected $changementCaractereEmployeurEtablissement;
    /**
     * Date de fin de la période, null pour la dernière période, format AAAA-MM-DD
     *
     * @return \DateTime
     */
    public function getDateFin(): \DateTime
    {
        return $this->dateFin;
    }
    /**
     * Date de fin de la période, null pour la dernière période, format AAAA-MM-DD
     *
     * @param \DateTime $dateFin
     *
     * @return self
     */
    public function setDateFin(\DateTime $dateFin): self
    {
        $this->initialized['dateFin'] = true;
        $this->dateFin = $dateFin;
        return $this;
    }
    /**
     * Date de début de la période, format AAAA-MM-DD
     *
     * @return \DateTime
     */
    public function getDateDebut(): \DateTime
    {
        return $this->dateDebut;
    }
    /**
     * Date de début de la période, format AAAA-MM-DD
     *
     * @param \DateTime $dateDebut
     *
     * @return self
     */
    public function setDateDebut(\DateTime $dateDebut): self
    {
        $this->initialized['dateDebut'] = true;
        $this->dateDebut = $dateDebut;
        return $this;
    }
    /**
     * État administratif de l'établissement pendant la période (A= établissement actif; F= établissement fermé)
     *
     * @return string
     */
    public function getEtatAdministratifEtablissement(): string
    {
        return $this->etatAdministratifEtablissement;
    }
    /**
     * État administratif de l'établissement pendant la période (A= établissement actif; F= établissement fermé)
     *
     * @param string $etatAdministratifEtablissement
     *
     * @return self
     */
    public function setEtatAdministratifEtablissement(string $etatAdministratifEtablissement): self
    {
        $this->initialized['etatAdministratifEtablissement'] = true;
        $this->etatAdministratifEtablissement = $etatAdministratifEtablissement;
        return $this;
    }
    /**
     * Indicatrice de changement de l'état administratif de l'établissement par rapport à la période précédente
     *
     * @return bool
     */
    public function getChangementEtatAdministratifEtablissement(): bool
    {
        return $this->changementEtatAdministratifEtablissement;
    }
    /**
     * Indicatrice de changement de l'état administratif de l'établissement par rapport à la période précédente
     *
     * @param bool $changementEtatAdministratifEtablissement
     *
     * @return self
     */
    public function setChangementEtatAdministratifEtablissement(bool $changementEtatAdministratifEtablissement): self
    {
        $this->initialized['changementEtatAdministratifEtablissement'] = true;
        $this->changementEtatAdministratifEtablissement = $changementEtatAdministratifEtablissement;
        return $this;
    }
    /**
     * Première ligne d'enseigne
     *
     * @return string
     */
    public function getEnseigne1Etablissement(): string
    {
        return $this->enseigne1Etablissement;
    }
    /**
     * Première ligne d'enseigne
     *
     * @param string $enseigne1Etablissement
     *
     * @return self
     */
    public function setEnseigne1Etablissement(string $enseigne1Etablissement): self
    {
        $this->initialized['enseigne1Etablissement'] = true;
        $this->enseigne1Etablissement = $enseigne1Etablissement;
        return $this;
    }
    /**
     * Deuxième ligne d'enseigne
     *
     * @return string
     */
    public function getEnseigne2Etablissement(): string
    {
        return $this->enseigne2Etablissement;
    }
    /**
     * Deuxième ligne d'enseigne
     *
     * @param string $enseigne2Etablissement
     *
     * @return self
     */
    public function setEnseigne2Etablissement(string $enseigne2Etablissement): self
    {
        $this->initialized['enseigne2Etablissement'] = true;
        $this->enseigne2Etablissement = $enseigne2Etablissement;
        return $this;
    }
    /**
     * Troisième ligne d'enseigne
     *
     * @return string
     */
    public function getEnseigne3Etablissement(): string
    {
        return $this->enseigne3Etablissement;
    }
    /**
     * Troisième ligne d'enseigne
     *
     * @param string $enseigne3Etablissement
     *
     * @return self
     */
    public function setEnseigne3Etablissement(string $enseigne3Etablissement): self
    {
        $this->initialized['enseigne3Etablissement'] = true;
        $this->enseigne3Etablissement = $enseigne3Etablissement;
        return $this;
    }
    /**
     * Indicatrice de changement de l'enseigne de l'établissement par rapport à la période précédente (un seul indicateur pour les trois variables Enseigne1, Enseigne2 et Enseigne3). Un seul indicateur pour les trois variables enseigne
     *
     * @return bool
     */
    public function getChangementEnseigneEtablissement(): bool
    {
        return $this->changementEnseigneEtablissement;
    }
    /**
     * Indicatrice de changement de l'enseigne de l'établissement par rapport à la période précédente (un seul indicateur pour les trois variables Enseigne1, Enseigne2 et Enseigne3). Un seul indicateur pour les trois variables enseigne
     *
     * @param bool $changementEnseigneEtablissement
     *
     * @return self
     */
    public function setChangementEnseigneEtablissement(bool $changementEnseigneEtablissement): self
    {
        $this->initialized['changementEnseigneEtablissement'] = true;
        $this->changementEnseigneEtablissement = $changementEnseigneEtablissement;
        return $this;
    }
    /**
     * Nom sous lequel l’activité de l’établissement est connu du public
     *
     * @return string
     */
    public function getDenominationUsuelleEtablissement(): string
    {
        return $this->denominationUsuelleEtablissement;
    }
    /**
     * Nom sous lequel l’activité de l’établissement est connu du public 
     *
     * @param string $denominationUsuelleEtablissement
     *
     * @return self
     */
    public function setDenominationUsuelleEtablissement(string $denominationUsuelleEtablissement): self
    {
        $this->initialized['denominationUsuelleEtablissement'] = true;
        $this->denominationUsuelleEtablissement = $denominationUsuelleEtablissement;
        return $this;
    }
    /**
     * Indicatrice de changement de la dénomination usuelle de l’établissement par rapport à la période précédente
     *
     * @return bool
     */
    public function getChangementDenominationUsuelleEtablissement(): bool
    {
        return $this->changementDenominationUsuelleEtablissement;
    }
    /**
     * Indicatrice de changement de la dénomination usuelle de l’établissement par rapport à la période précédente
     *
     * @param bool $changementDenominationUsuelleEtablissement
     *
     * @return self
     */
    public function setChangementDenominationUsuelleEtablissement(bool $changementDenominationUsuelleEtablissement): self
    {
        $this->initialized['changementDenominationUsuelleEtablissement'] = true;
        $this->changementDenominationUsuelleEtablissement = $changementDenominationUsuelleEtablissement;
        return $this;
    }
    /**
     * Activité principale de l'établissement pendant la période (l'APE est codifiée selon la <a href='https://www.insee.fr/fr/information/2406147'>nomenclature d'Activités Française (NAF)</a>
     *
     * @return string
     */
    public function getActivitePrincipaleEtablissement(): string
    {
        return $this->activitePrincipaleEtablissement;
    }
    /**
     * Activité principale de l'établissement pendant la période (l'APE est codifiée selon la <a href='https://www.insee.fr/fr/information/2406147'>nomenclature d'Activités Française (NAF)</a>
     *
     * @param string $activitePrincipaleEtablissement
     *
     * @return self
     */
    public function setActivitePrincipaleEtablissement(string $activitePrincipaleEtablissement): self
    {
        $this->initialized['activitePrincipaleEtablissement'] = true;
        $this->activitePrincipaleEtablissement = $activitePrincipaleEtablissement;
        return $this;
    }
    /**
     * Nomenclature de l'activité, permet de savoir à partir de quelle nomenclature est codifiée ActivitePrincipaleEtablissement
     *
     * @return string
     */
    public function getNomenclatureActivitePrincipaleEtablissement(): string
    {
        return $this->nomenclatureActivitePrincipaleEtablissement;
    }
    /**
     * Nomenclature de l'activité, permet de savoir à partir de quelle nomenclature est codifiée ActivitePrincipaleEtablissement
     *
     * @param string $nomenclatureActivitePrincipaleEtablissement
     *
     * @return self
     */
    public function setNomenclatureActivitePrincipaleEtablissement(string $nomenclatureActivitePrincipaleEtablissement): self
    {
        $this->initialized['nomenclatureActivitePrincipaleEtablissement'] = true;
        $this->nomenclatureActivitePrincipaleEtablissement = $nomenclatureActivitePrincipaleEtablissement;
        return $this;
    }
    /**
     * Indicatrice de changement de l'activité principale de l'établissement par rapport à la période précédente
     *
     * @return bool
     */
    public function getChangementActivitePrincipaleEtablissement(): bool
    {
        return $this->changementActivitePrincipaleEtablissement;
    }
    /**
     * Indicatrice de changement de l'activité principale de l'établissement par rapport à la période précédente
     *
     * @param bool $changementActivitePrincipaleEtablissement
     *
     * @return self
     */
    public function setChangementActivitePrincipaleEtablissement(bool $changementActivitePrincipaleEtablissement): self
    {
        $this->initialized['changementActivitePrincipaleEtablissement'] = true;
        $this->changementActivitePrincipaleEtablissement = $changementActivitePrincipaleEtablissement;
        return $this;
    }
    /**
     * Caractère employeur de l'établissement (O=oui, N=non, null=sans objet)
     *
     * @return string
     */
    public function getCaractereEmployeurEtablissement(): string
    {
        return $this->caractereEmployeurEtablissement;
    }
    /**
     * Caractère employeur de l'établissement (O=oui, N=non, null=sans objet)
     *
     * @param string $caractereEmployeurEtablissement
     *
     * @return self
     */
    public function setCaractereEmployeurEtablissement(string $caractereEmployeurEtablissement): self
    {
        $this->initialized['caractereEmployeurEtablissement'] = true;
        $this->caractereEmployeurEtablissement = $caractereEmployeurEtablissement;
        return $this;
    }
    /**
     * Indicatrice de changement du caractère employeur de l'établissement par rapport à la période précédente
     *
     * @return bool
     */
    public function getChangementCaractereEmployeurEtablissement(): bool
    {
        return $this->changementCaractereEmployeurEtablissement;
    }
    /**
     * Indicatrice de changement du caractère employeur de l'établissement par rapport à la période précédente
     *
     * @param bool $changementCaractereEmployeurEtablissement
     *
     * @return self
     */
    public function setChangementCaractereEmployeurEtablissement(bool $changementCaractereEmployeurEtablissement): self
    {
        $this->initialized['changementCaractereEmployeurEtablissement'] = true;
        $this->changementCaractereEmployeurEtablissement = $changementCaractereEmployeurEtablissement;
        return $this;
    }
}