<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Model;

class PeriodeUniteLegale
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
     * État de l'entreprise pendant la période (A= entreprise active, C= entreprise cessée)
     *
     * @var string
     */
    protected $etatAdministratifUniteLegale;
    /**
     * Indicatrice de changement d'état par rapport à la période précédente
     *
     * @var bool
     */
    protected $changementEtatAdministratifUniteLegale;
    /**
     * Nom de naissance pour les personnes physiques pour la période (null pour les personnes morales)
     *
     * @var string
     */
    protected $nomUniteLegale;
    /**
     * Indicatrice de changement du nom par rapport à la période précédente
     *
     * @var bool
     */
    protected $changementNomUniteLegale;
    /**
     * Nom d’usage pour les personnes physiques si celui-ci existe, null pour les personnes morales
     *
     * @var string
     */
    protected $nomUsageUniteLegale;
    /**
     * Indicatrice de changement du nom d'usage par rapport à la période précédente
     *
     * @var bool
     */
    protected $changementNomUsageUniteLegale;
    /**
     * Raison sociale (personnes morales)
     *
     * @var string
     */
    protected $denominationUniteLegale;
    /**
     * Indicatrice de changement de la dénomination par rapport à la période précédente
     *
     * @var bool
     */
    protected $changementDenominationUniteLegale;
    /**
     * Premier nom sous lequel l’entreprise est connue du public
     *
     * @var string
     */
    protected $denominationUsuelle1UniteLegale;
    /**
     * Deuxième nom sous lequel l’entreprise est connue du public
     *
     * @var string
     */
    protected $denominationUsuelle2UniteLegale;
    /**
     * Troisième nom sous lequel l’entreprise est connue du public
     *
     * @var string
     */
    protected $denominationUsuelle3UniteLegale;
    /**
     * Catégorie juridique de l'entreprise (variable Null pour les personnes physiques. (<a href='https://www.insee.fr/fr/information/2028129'>la nomenclature sur insee.fr</a>))
     *
     * @var string
     */
    protected $categorieJuridiqueUniteLegale;
    /**
     * Indicatrice de changement de la catégorie juridique par rapport à la période précédente
     *
     * @var bool
     */
    protected $changementCategorieJuridiqueUniteLegale;
    /**
     * Activité principale de l'entreprise pendant la période (l'APE est codifiée selon la <a href='https://www.insee.fr/fr/information/2406147'>nomenclature d'Activités Française (NAF)</a>
     *
     * @var string
     */
    protected $activitePrincipaleUniteLegale;
    /**
     * Nomenclature de l'activité, permet de savoir à partir de quelle nomenclature est codifiée ActivitePrincipale
     *
     * @var string
     */
    protected $nomenclatureActivitePrincipaleUniteLegale;
    /**
     * Indicatrice de changement de l'activité principale par rapport à la période précédente
     *
     * @var bool
     */
    protected $changementActivitePrincipaleUniteLegale;
    /**
     * Identifiant du siège pour la période (le Siret du siège est obtenu en concaténant le numéro Siren et le Nic)
     *
     * @var string
     */
    protected $nicSiegeUniteLegale;
    /**
     * Indicatrice de changement du NIC du siège par rapport à la période précédente
     *
     * @var bool
     */
    protected $changementNicSiegeUniteLegale;
    /**
     * Appartenance de l’unité légale au champ de l’économie sociale et solidaire (ESS)
     *
     * @var string
     */
    protected $economieSocialeSolidaireUniteLegale;
    /**
     * Indicatrice de changement de l'ESS par rapport à la période précédente
     *
     * @var bool
     */
    protected $changementEconomieSocialeSolidaireUniteLegale;
    /**
     * Appartenance de l’unité légale au champ société à mission (SM)
     *
     * @var string
     */
    protected $societeMissionUniteLegale;
    /**
     * Indicatrice de changement du champ société à mission par rapport à la période précédente
     *
     * @var bool
     */
    protected $changementSocieteMissionUniteLegale;
    /**
     * Plus géré, toujours null
     *
     * @var string
     */
    protected $caractereEmployeurUniteLegale;
    /**
     * Indicatrice de changement du caractère employeur par rapport à la période précédente
     *
     * @var bool
     */
    protected $changementCaractereEmployeurUniteLegale;
    /**
     * Indicatrice de changement de la dénomination par rapport à la période précédente
     *
     * @var bool
     */
    protected $changementDenominationUsuelleUniteLegale;
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
     * État de l'entreprise pendant la période (A= entreprise active, C= entreprise cessée)
     *
     * @return string
     */
    public function getEtatAdministratifUniteLegale(): string
    {
        return $this->etatAdministratifUniteLegale;
    }
    /**
     * État de l'entreprise pendant la période (A= entreprise active, C= entreprise cessée)
     *
     * @param string $etatAdministratifUniteLegale
     *
     * @return self
     */
    public function setEtatAdministratifUniteLegale(string $etatAdministratifUniteLegale): self
    {
        $this->initialized['etatAdministratifUniteLegale'] = true;
        $this->etatAdministratifUniteLegale = $etatAdministratifUniteLegale;
        return $this;
    }
    /**
     * Indicatrice de changement d'état par rapport à la période précédente
     *
     * @return bool
     */
    public function getChangementEtatAdministratifUniteLegale(): bool
    {
        return $this->changementEtatAdministratifUniteLegale;
    }
    /**
     * Indicatrice de changement d'état par rapport à la période précédente
     *
     * @param bool $changementEtatAdministratifUniteLegale
     *
     * @return self
     */
    public function setChangementEtatAdministratifUniteLegale(bool $changementEtatAdministratifUniteLegale): self
    {
        $this->initialized['changementEtatAdministratifUniteLegale'] = true;
        $this->changementEtatAdministratifUniteLegale = $changementEtatAdministratifUniteLegale;
        return $this;
    }
    /**
     * Nom de naissance pour les personnes physiques pour la période (null pour les personnes morales)
     *
     * @return string
     */
    public function getNomUniteLegale(): string
    {
        return $this->nomUniteLegale;
    }
    /**
     * Nom de naissance pour les personnes physiques pour la période (null pour les personnes morales)
     *
     * @param string $nomUniteLegale
     *
     * @return self
     */
    public function setNomUniteLegale(string $nomUniteLegale): self
    {
        $this->initialized['nomUniteLegale'] = true;
        $this->nomUniteLegale = $nomUniteLegale;
        return $this;
    }
    /**
     * Indicatrice de changement du nom par rapport à la période précédente
     *
     * @return bool
     */
    public function getChangementNomUniteLegale(): bool
    {
        return $this->changementNomUniteLegale;
    }
    /**
     * Indicatrice de changement du nom par rapport à la période précédente
     *
     * @param bool $changementNomUniteLegale
     *
     * @return self
     */
    public function setChangementNomUniteLegale(bool $changementNomUniteLegale): self
    {
        $this->initialized['changementNomUniteLegale'] = true;
        $this->changementNomUniteLegale = $changementNomUniteLegale;
        return $this;
    }
    /**
     * Nom d’usage pour les personnes physiques si celui-ci existe, null pour les personnes morales
     *
     * @return string
     */
    public function getNomUsageUniteLegale(): string
    {
        return $this->nomUsageUniteLegale;
    }
    /**
     * Nom d’usage pour les personnes physiques si celui-ci existe, null pour les personnes morales
     *
     * @param string $nomUsageUniteLegale
     *
     * @return self
     */
    public function setNomUsageUniteLegale(string $nomUsageUniteLegale): self
    {
        $this->initialized['nomUsageUniteLegale'] = true;
        $this->nomUsageUniteLegale = $nomUsageUniteLegale;
        return $this;
    }
    /**
     * Indicatrice de changement du nom d'usage par rapport à la période précédente
     *
     * @return bool
     */
    public function getChangementNomUsageUniteLegale(): bool
    {
        return $this->changementNomUsageUniteLegale;
    }
    /**
     * Indicatrice de changement du nom d'usage par rapport à la période précédente
     *
     * @param bool $changementNomUsageUniteLegale
     *
     * @return self
     */
    public function setChangementNomUsageUniteLegale(bool $changementNomUsageUniteLegale): self
    {
        $this->initialized['changementNomUsageUniteLegale'] = true;
        $this->changementNomUsageUniteLegale = $changementNomUsageUniteLegale;
        return $this;
    }
    /**
     * Raison sociale (personnes morales)
     *
     * @return string
     */
    public function getDenominationUniteLegale(): string
    {
        return $this->denominationUniteLegale;
    }
    /**
     * Raison sociale (personnes morales)
     *
     * @param string $denominationUniteLegale
     *
     * @return self
     */
    public function setDenominationUniteLegale(string $denominationUniteLegale): self
    {
        $this->initialized['denominationUniteLegale'] = true;
        $this->denominationUniteLegale = $denominationUniteLegale;
        return $this;
    }
    /**
     * Indicatrice de changement de la dénomination par rapport à la période précédente
     *
     * @return bool
     */
    public function getChangementDenominationUniteLegale(): bool
    {
        return $this->changementDenominationUniteLegale;
    }
    /**
     * Indicatrice de changement de la dénomination par rapport à la période précédente
     *
     * @param bool $changementDenominationUniteLegale
     *
     * @return self
     */
    public function setChangementDenominationUniteLegale(bool $changementDenominationUniteLegale): self
    {
        $this->initialized['changementDenominationUniteLegale'] = true;
        $this->changementDenominationUniteLegale = $changementDenominationUniteLegale;
        return $this;
    }
    /**
     * Premier nom sous lequel l’entreprise est connue du public
     *
     * @return string
     */
    public function getDenominationUsuelle1UniteLegale(): string
    {
        return $this->denominationUsuelle1UniteLegale;
    }
    /**
     * Premier nom sous lequel l’entreprise est connue du public
     *
     * @param string $denominationUsuelle1UniteLegale
     *
     * @return self
     */
    public function setDenominationUsuelle1UniteLegale(string $denominationUsuelle1UniteLegale): self
    {
        $this->initialized['denominationUsuelle1UniteLegale'] = true;
        $this->denominationUsuelle1UniteLegale = $denominationUsuelle1UniteLegale;
        return $this;
    }
    /**
     * Deuxième nom sous lequel l’entreprise est connue du public
     *
     * @return string
     */
    public function getDenominationUsuelle2UniteLegale(): string
    {
        return $this->denominationUsuelle2UniteLegale;
    }
    /**
     * Deuxième nom sous lequel l’entreprise est connue du public
     *
     * @param string $denominationUsuelle2UniteLegale
     *
     * @return self
     */
    public function setDenominationUsuelle2UniteLegale(string $denominationUsuelle2UniteLegale): self
    {
        $this->initialized['denominationUsuelle2UniteLegale'] = true;
        $this->denominationUsuelle2UniteLegale = $denominationUsuelle2UniteLegale;
        return $this;
    }
    /**
     * Troisième nom sous lequel l’entreprise est connue du public
     *
     * @return string
     */
    public function getDenominationUsuelle3UniteLegale(): string
    {
        return $this->denominationUsuelle3UniteLegale;
    }
    /**
     * Troisième nom sous lequel l’entreprise est connue du public
     *
     * @param string $denominationUsuelle3UniteLegale
     *
     * @return self
     */
    public function setDenominationUsuelle3UniteLegale(string $denominationUsuelle3UniteLegale): self
    {
        $this->initialized['denominationUsuelle3UniteLegale'] = true;
        $this->denominationUsuelle3UniteLegale = $denominationUsuelle3UniteLegale;
        return $this;
    }
    /**
     * Catégorie juridique de l'entreprise (variable Null pour les personnes physiques. (<a href='https://www.insee.fr/fr/information/2028129'>la nomenclature sur insee.fr</a>))
     *
     * @return string
     */
    public function getCategorieJuridiqueUniteLegale(): string
    {
        return $this->categorieJuridiqueUniteLegale;
    }
    /**
     * Catégorie juridique de l'entreprise (variable Null pour les personnes physiques. (<a href='https://www.insee.fr/fr/information/2028129'>la nomenclature sur insee.fr</a>))
     *
     * @param string $categorieJuridiqueUniteLegale
     *
     * @return self
     */
    public function setCategorieJuridiqueUniteLegale(string $categorieJuridiqueUniteLegale): self
    {
        $this->initialized['categorieJuridiqueUniteLegale'] = true;
        $this->categorieJuridiqueUniteLegale = $categorieJuridiqueUniteLegale;
        return $this;
    }
    /**
     * Indicatrice de changement de la catégorie juridique par rapport à la période précédente
     *
     * @return bool
     */
    public function getChangementCategorieJuridiqueUniteLegale(): bool
    {
        return $this->changementCategorieJuridiqueUniteLegale;
    }
    /**
     * Indicatrice de changement de la catégorie juridique par rapport à la période précédente
     *
     * @param bool $changementCategorieJuridiqueUniteLegale
     *
     * @return self
     */
    public function setChangementCategorieJuridiqueUniteLegale(bool $changementCategorieJuridiqueUniteLegale): self
    {
        $this->initialized['changementCategorieJuridiqueUniteLegale'] = true;
        $this->changementCategorieJuridiqueUniteLegale = $changementCategorieJuridiqueUniteLegale;
        return $this;
    }
    /**
     * Activité principale de l'entreprise pendant la période (l'APE est codifiée selon la <a href='https://www.insee.fr/fr/information/2406147'>nomenclature d'Activités Française (NAF)</a>
     *
     * @return string
     */
    public function getActivitePrincipaleUniteLegale(): string
    {
        return $this->activitePrincipaleUniteLegale;
    }
    /**
     * Activité principale de l'entreprise pendant la période (l'APE est codifiée selon la <a href='https://www.insee.fr/fr/information/2406147'>nomenclature d'Activités Française (NAF)</a>
     *
     * @param string $activitePrincipaleUniteLegale
     *
     * @return self
     */
    public function setActivitePrincipaleUniteLegale(string $activitePrincipaleUniteLegale): self
    {
        $this->initialized['activitePrincipaleUniteLegale'] = true;
        $this->activitePrincipaleUniteLegale = $activitePrincipaleUniteLegale;
        return $this;
    }
    /**
     * Nomenclature de l'activité, permet de savoir à partir de quelle nomenclature est codifiée ActivitePrincipale
     *
     * @return string
     */
    public function getNomenclatureActivitePrincipaleUniteLegale(): string
    {
        return $this->nomenclatureActivitePrincipaleUniteLegale;
    }
    /**
     * Nomenclature de l'activité, permet de savoir à partir de quelle nomenclature est codifiée ActivitePrincipale
     *
     * @param string $nomenclatureActivitePrincipaleUniteLegale
     *
     * @return self
     */
    public function setNomenclatureActivitePrincipaleUniteLegale(string $nomenclatureActivitePrincipaleUniteLegale): self
    {
        $this->initialized['nomenclatureActivitePrincipaleUniteLegale'] = true;
        $this->nomenclatureActivitePrincipaleUniteLegale = $nomenclatureActivitePrincipaleUniteLegale;
        return $this;
    }
    /**
     * Indicatrice de changement de l'activité principale par rapport à la période précédente
     *
     * @return bool
     */
    public function getChangementActivitePrincipaleUniteLegale(): bool
    {
        return $this->changementActivitePrincipaleUniteLegale;
    }
    /**
     * Indicatrice de changement de l'activité principale par rapport à la période précédente
     *
     * @param bool $changementActivitePrincipaleUniteLegale
     *
     * @return self
     */
    public function setChangementActivitePrincipaleUniteLegale(bool $changementActivitePrincipaleUniteLegale): self
    {
        $this->initialized['changementActivitePrincipaleUniteLegale'] = true;
        $this->changementActivitePrincipaleUniteLegale = $changementActivitePrincipaleUniteLegale;
        return $this;
    }
    /**
     * Identifiant du siège pour la période (le Siret du siège est obtenu en concaténant le numéro Siren et le Nic)
     *
     * @return string
     */
    public function getNicSiegeUniteLegale(): string
    {
        return $this->nicSiegeUniteLegale;
    }
    /**
     * Identifiant du siège pour la période (le Siret du siège est obtenu en concaténant le numéro Siren et le Nic)
     *
     * @param string $nicSiegeUniteLegale
     *
     * @return self
     */
    public function setNicSiegeUniteLegale(string $nicSiegeUniteLegale): self
    {
        $this->initialized['nicSiegeUniteLegale'] = true;
        $this->nicSiegeUniteLegale = $nicSiegeUniteLegale;
        return $this;
    }
    /**
     * Indicatrice de changement du NIC du siège par rapport à la période précédente
     *
     * @return bool
     */
    public function getChangementNicSiegeUniteLegale(): bool
    {
        return $this->changementNicSiegeUniteLegale;
    }
    /**
     * Indicatrice de changement du NIC du siège par rapport à la période précédente
     *
     * @param bool $changementNicSiegeUniteLegale
     *
     * @return self
     */
    public function setChangementNicSiegeUniteLegale(bool $changementNicSiegeUniteLegale): self
    {
        $this->initialized['changementNicSiegeUniteLegale'] = true;
        $this->changementNicSiegeUniteLegale = $changementNicSiegeUniteLegale;
        return $this;
    }
    /**
     * Appartenance de l’unité légale au champ de l’économie sociale et solidaire (ESS)
     *
     * @return string
     */
    public function getEconomieSocialeSolidaireUniteLegale(): string
    {
        return $this->economieSocialeSolidaireUniteLegale;
    }
    /**
     * Appartenance de l’unité légale au champ de l’économie sociale et solidaire (ESS)
     *
     * @param string $economieSocialeSolidaireUniteLegale
     *
     * @return self
     */
    public function setEconomieSocialeSolidaireUniteLegale(string $economieSocialeSolidaireUniteLegale): self
    {
        $this->initialized['economieSocialeSolidaireUniteLegale'] = true;
        $this->economieSocialeSolidaireUniteLegale = $economieSocialeSolidaireUniteLegale;
        return $this;
    }
    /**
     * Indicatrice de changement de l'ESS par rapport à la période précédente
     *
     * @return bool
     */
    public function getChangementEconomieSocialeSolidaireUniteLegale(): bool
    {
        return $this->changementEconomieSocialeSolidaireUniteLegale;
    }
    /**
     * Indicatrice de changement de l'ESS par rapport à la période précédente
     *
     * @param bool $changementEconomieSocialeSolidaireUniteLegale
     *
     * @return self
     */
    public function setChangementEconomieSocialeSolidaireUniteLegale(bool $changementEconomieSocialeSolidaireUniteLegale): self
    {
        $this->initialized['changementEconomieSocialeSolidaireUniteLegale'] = true;
        $this->changementEconomieSocialeSolidaireUniteLegale = $changementEconomieSocialeSolidaireUniteLegale;
        return $this;
    }
    /**
     * Appartenance de l’unité légale au champ société à mission (SM)
     *
     * @return string
     */
    public function getSocieteMissionUniteLegale(): string
    {
        return $this->societeMissionUniteLegale;
    }
    /**
     * Appartenance de l’unité légale au champ société à mission (SM)
     *
     * @param string $societeMissionUniteLegale
     *
     * @return self
     */
    public function setSocieteMissionUniteLegale(string $societeMissionUniteLegale): self
    {
        $this->initialized['societeMissionUniteLegale'] = true;
        $this->societeMissionUniteLegale = $societeMissionUniteLegale;
        return $this;
    }
    /**
     * Indicatrice de changement du champ société à mission par rapport à la période précédente
     *
     * @return bool
     */
    public function getChangementSocieteMissionUniteLegale(): bool
    {
        return $this->changementSocieteMissionUniteLegale;
    }
    /**
     * Indicatrice de changement du champ société à mission par rapport à la période précédente
     *
     * @param bool $changementSocieteMissionUniteLegale
     *
     * @return self
     */
    public function setChangementSocieteMissionUniteLegale(bool $changementSocieteMissionUniteLegale): self
    {
        $this->initialized['changementSocieteMissionUniteLegale'] = true;
        $this->changementSocieteMissionUniteLegale = $changementSocieteMissionUniteLegale;
        return $this;
    }
    /**
     * Plus géré, toujours null
     *
     * @return string
     */
    public function getCaractereEmployeurUniteLegale(): string
    {
        return $this->caractereEmployeurUniteLegale;
    }
    /**
     * Plus géré, toujours null
     *
     * @param string $caractereEmployeurUniteLegale
     *
     * @return self
     */
    public function setCaractereEmployeurUniteLegale(string $caractereEmployeurUniteLegale): self
    {
        $this->initialized['caractereEmployeurUniteLegale'] = true;
        $this->caractereEmployeurUniteLegale = $caractereEmployeurUniteLegale;
        return $this;
    }
    /**
     * Indicatrice de changement du caractère employeur par rapport à la période précédente
     *
     * @return bool
     */
    public function getChangementCaractereEmployeurUniteLegale(): bool
    {
        return $this->changementCaractereEmployeurUniteLegale;
    }
    /**
     * Indicatrice de changement du caractère employeur par rapport à la période précédente
     *
     * @param bool $changementCaractereEmployeurUniteLegale
     *
     * @return self
     */
    public function setChangementCaractereEmployeurUniteLegale(bool $changementCaractereEmployeurUniteLegale): self
    {
        $this->initialized['changementCaractereEmployeurUniteLegale'] = true;
        $this->changementCaractereEmployeurUniteLegale = $changementCaractereEmployeurUniteLegale;
        return $this;
    }
    /**
     * Indicatrice de changement de la dénomination par rapport à la période précédente
     *
     * @return bool
     */
    public function getChangementDenominationUsuelleUniteLegale(): bool
    {
        return $this->changementDenominationUsuelleUniteLegale;
    }
    /**
     * Indicatrice de changement de la dénomination par rapport à la période précédente
     *
     * @param bool $changementDenominationUsuelleUniteLegale
     *
     * @return self
     */
    public function setChangementDenominationUsuelleUniteLegale(bool $changementDenominationUsuelleUniteLegale): self
    {
        $this->initialized['changementDenominationUsuelleUniteLegale'] = true;
        $this->changementDenominationUsuelleUniteLegale = $changementDenominationUsuelleUniteLegale;
        return $this;
    }
}