<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Model;

class Etablissement
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
     * Score de l'élément parmi l'ensemble des éléments répondant à la requête, plus le score est élevé, plus l'élément est haut placé. Le score n'a pas de signification en dehors de la requête et n'est pas comparable aux score d'autres requêtes
     *
     * @var float
     */
    protected $score;
    /**
     * Numéro Siren de l'entreprise à laquelle appartient l'établissement
     *
     * @var string
     */
    protected $siren;
    /**
     * Numéro interne de classement de l'établissement
     *
     * @var string
     */
    protected $nic;
    /**
     * Numéro Siret de l’établissement (toujours renseigné)
     *
     * @var string
     */
    protected $siret;
    /**
     * Statut de diffusion de l'établissement
     *
     * @var string
     */
    protected $statutDiffusionEtablissement;
    /**
     * Date de création de l'établissement, format AAAA-MM-JJ
     *
     * @var \DateTime
     */
    protected $dateCreationEtablissement;
    /**
     * Tranche d’effectif salarié de l’établissement, valorisée uniquement si l’année correspondante est supérieure ou égale à l’année d’interrogation -3 (sinon, NN)
     *
     * @var string
     */
    protected $trancheEffectifsEtablissement;
    /**
     * Année de la tranche d’effectif salarié de l’établissement, valorisée uniquement si l'année est supérieure ou égale à l’année d’interrogation -3 (sinon, null)
     *
     * @var string
     */
    protected $anneeEffectifsEtablissement;
    /**
     * Code de l’activité exercée par l’artisan inscrit au registre des métiers. L’APRM est codifiée selon la nomenclature d’Activités Française de l’Artisanat (NAFA)
     *
     * @var string
     */
    protected $activitePrincipaleRegistreMetiersEtablissement;
    /**
     * Date de la dernière mise à jour effectuée au répertoire Sirene sur le Siret concerné (yyyy-MM-ddTHH:mm:ss.SSS)
     *
     * @var \DateTime
     */
    protected $dateDernierTraitementEtablissement;
    /**
     * Indicatrice précisant si le Siret est celui de l’établissement siège ou non
     *
     * @var bool
     */
    protected $etablissementSiege;
    /**
     * Nombre de périodes dans la vie de l'établissement
     *
     * @var int
     */
    protected $nombrePeriodesEtablissement;
    /**
     * Code APE en nomenclature NAF25
     *
     * @var string
     */
    protected $activitePrincipaleNAF25Etablissement;
    /**
     * Objet représentant les valeurs courante de l'unité légale de l'établissement
     *
     * @var UniteLegaleEtablissement
     */
    protected $uniteLegale;
    /**
     * Ensemble des variables d'adresse d'un établissement
     *
     * @var Adresse
     */
    protected $adresseEtablissement;
    /**
     * Ensemble des variables d'adresse complémentaire d'un établissement
     *
     * @var AdresseComplementaire
     */
    protected $adresse2Etablissement;
    /**
     * @var list<PeriodeEtablissement>
     */
    protected $periodesEtablissement;
    /**
     * Score de l'élément parmi l'ensemble des éléments répondant à la requête, plus le score est élevé, plus l'élément est haut placé. Le score n'a pas de signification en dehors de la requête et n'est pas comparable aux score d'autres requêtes
     *
     * @return float
     */
    public function getScore(): float
    {
        return $this->score;
    }
    /**
     * Score de l'élément parmi l'ensemble des éléments répondant à la requête, plus le score est élevé, plus l'élément est haut placé. Le score n'a pas de signification en dehors de la requête et n'est pas comparable aux score d'autres requêtes
     *
     * @param float $score
     *
     * @return self
     */
    public function setScore(float $score): self
    {
        $this->initialized['score'] = true;
        $this->score = $score;
        return $this;
    }
    /**
     * Numéro Siren de l'entreprise à laquelle appartient l'établissement
     *
     * @return string
     */
    public function getSiren(): string
    {
        return $this->siren;
    }
    /**
     * Numéro Siren de l'entreprise à laquelle appartient l'établissement
     *
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
     * Numéro interne de classement de l'établissement
     *
     * @return string
     */
    public function getNic(): string
    {
        return $this->nic;
    }
    /**
     * Numéro interne de classement de l'établissement
     *
     * @param string $nic
     *
     * @return self
     */
    public function setNic(string $nic): self
    {
        $this->initialized['nic'] = true;
        $this->nic = $nic;
        return $this;
    }
    /**
     * Numéro Siret de l’établissement (toujours renseigné)
     *
     * @return string
     */
    public function getSiret(): string
    {
        return $this->siret;
    }
    /**
     * Numéro Siret de l’établissement (toujours renseigné)
     *
     * @param string $siret
     *
     * @return self
     */
    public function setSiret(string $siret): self
    {
        $this->initialized['siret'] = true;
        $this->siret = $siret;
        return $this;
    }
    /**
     * Statut de diffusion de l'établissement
     *
     * @return string
     */
    public function getStatutDiffusionEtablissement(): string
    {
        return $this->statutDiffusionEtablissement;
    }
    /**
     * Statut de diffusion de l'établissement
     *
     * @param string $statutDiffusionEtablissement
     *
     * @return self
     */
    public function setStatutDiffusionEtablissement(string $statutDiffusionEtablissement): self
    {
        $this->initialized['statutDiffusionEtablissement'] = true;
        $this->statutDiffusionEtablissement = $statutDiffusionEtablissement;
        return $this;
    }
    /**
     * Date de création de l'établissement, format AAAA-MM-JJ
     *
     * @return \DateTime
     */
    public function getDateCreationEtablissement(): \DateTime
    {
        return $this->dateCreationEtablissement;
    }
    /**
     * Date de création de l'établissement, format AAAA-MM-JJ
     *
     * @param \DateTime $dateCreationEtablissement
     *
     * @return self
     */
    public function setDateCreationEtablissement(\DateTime $dateCreationEtablissement): self
    {
        $this->initialized['dateCreationEtablissement'] = true;
        $this->dateCreationEtablissement = $dateCreationEtablissement;
        return $this;
    }
    /**
     * Tranche d’effectif salarié de l’établissement, valorisée uniquement si l’année correspondante est supérieure ou égale à l’année d’interrogation -3 (sinon, NN)
     *
     * @return string
     */
    public function getTrancheEffectifsEtablissement(): string
    {
        return $this->trancheEffectifsEtablissement;
    }
    /**
     * Tranche d’effectif salarié de l’établissement, valorisée uniquement si l’année correspondante est supérieure ou égale à l’année d’interrogation -3 (sinon, NN)
     *
     * @param string $trancheEffectifsEtablissement
     *
     * @return self
     */
    public function setTrancheEffectifsEtablissement(string $trancheEffectifsEtablissement): self
    {
        $this->initialized['trancheEffectifsEtablissement'] = true;
        $this->trancheEffectifsEtablissement = $trancheEffectifsEtablissement;
        return $this;
    }
    /**
     * Année de la tranche d’effectif salarié de l’établissement, valorisée uniquement si l'année est supérieure ou égale à l’année d’interrogation -3 (sinon, null)
     *
     * @return string
     */
    public function getAnneeEffectifsEtablissement(): string
    {
        return $this->anneeEffectifsEtablissement;
    }
    /**
     * Année de la tranche d’effectif salarié de l’établissement, valorisée uniquement si l'année est supérieure ou égale à l’année d’interrogation -3 (sinon, null)
     *
     * @param string $anneeEffectifsEtablissement
     *
     * @return self
     */
    public function setAnneeEffectifsEtablissement(string $anneeEffectifsEtablissement): self
    {
        $this->initialized['anneeEffectifsEtablissement'] = true;
        $this->anneeEffectifsEtablissement = $anneeEffectifsEtablissement;
        return $this;
    }
    /**
     * Code de l’activité exercée par l’artisan inscrit au registre des métiers. L’APRM est codifiée selon la nomenclature d’Activités Française de l’Artisanat (NAFA)
     *
     * @return string
     */
    public function getActivitePrincipaleRegistreMetiersEtablissement(): string
    {
        return $this->activitePrincipaleRegistreMetiersEtablissement;
    }
    /**
     * Code de l’activité exercée par l’artisan inscrit au registre des métiers. L’APRM est codifiée selon la nomenclature d’Activités Française de l’Artisanat (NAFA)
     *
     * @param string $activitePrincipaleRegistreMetiersEtablissement
     *
     * @return self
     */
    public function setActivitePrincipaleRegistreMetiersEtablissement(string $activitePrincipaleRegistreMetiersEtablissement): self
    {
        $this->initialized['activitePrincipaleRegistreMetiersEtablissement'] = true;
        $this->activitePrincipaleRegistreMetiersEtablissement = $activitePrincipaleRegistreMetiersEtablissement;
        return $this;
    }
    /**
     * Date de la dernière mise à jour effectuée au répertoire Sirene sur le Siret concerné (yyyy-MM-ddTHH:mm:ss.SSS)
     *
     * @return \DateTime
     */
    public function getDateDernierTraitementEtablissement(): \DateTime
    {
        return $this->dateDernierTraitementEtablissement;
    }
    /**
     * Date de la dernière mise à jour effectuée au répertoire Sirene sur le Siret concerné (yyyy-MM-ddTHH:mm:ss.SSS)
     *
     * @param \DateTime $dateDernierTraitementEtablissement
     *
     * @return self
     */
    public function setDateDernierTraitementEtablissement(\DateTime $dateDernierTraitementEtablissement): self
    {
        $this->initialized['dateDernierTraitementEtablissement'] = true;
        $this->dateDernierTraitementEtablissement = $dateDernierTraitementEtablissement;
        return $this;
    }
    /**
     * Indicatrice précisant si le Siret est celui de l’établissement siège ou non
     *
     * @return bool
     */
    public function getEtablissementSiege(): bool
    {
        return $this->etablissementSiege;
    }
    /**
     * Indicatrice précisant si le Siret est celui de l’établissement siège ou non
     *
     * @param bool $etablissementSiege
     *
     * @return self
     */
    public function setEtablissementSiege(bool $etablissementSiege): self
    {
        $this->initialized['etablissementSiege'] = true;
        $this->etablissementSiege = $etablissementSiege;
        return $this;
    }
    /**
     * Nombre de périodes dans la vie de l'établissement
     *
     * @return int
     */
    public function getNombrePeriodesEtablissement(): int
    {
        return $this->nombrePeriodesEtablissement;
    }
    /**
     * Nombre de périodes dans la vie de l'établissement
     *
     * @param int $nombrePeriodesEtablissement
     *
     * @return self
     */
    public function setNombrePeriodesEtablissement(int $nombrePeriodesEtablissement): self
    {
        $this->initialized['nombrePeriodesEtablissement'] = true;
        $this->nombrePeriodesEtablissement = $nombrePeriodesEtablissement;
        return $this;
    }
    /**
     * Code APE en nomenclature NAF25
     *
     * @return string
     */
    public function getActivitePrincipaleNAF25Etablissement(): string
    {
        return $this->activitePrincipaleNAF25Etablissement;
    }
    /**
     * Code APE en nomenclature NAF25
     *
     * @param string $activitePrincipaleNAF25Etablissement
     *
     * @return self
     */
    public function setActivitePrincipaleNAF25Etablissement(string $activitePrincipaleNAF25Etablissement): self
    {
        $this->initialized['activitePrincipaleNAF25Etablissement'] = true;
        $this->activitePrincipaleNAF25Etablissement = $activitePrincipaleNAF25Etablissement;
        return $this;
    }
    /**
     * Objet représentant les valeurs courante de l'unité légale de l'établissement
     *
     * @return UniteLegaleEtablissement
     */
    public function getUniteLegale(): UniteLegaleEtablissement
    {
        return $this->uniteLegale;
    }
    /**
     * Objet représentant les valeurs courante de l'unité légale de l'établissement
     *
     * @param UniteLegaleEtablissement $uniteLegale
     *
     * @return self
     */
    public function setUniteLegale(UniteLegaleEtablissement $uniteLegale): self
    {
        $this->initialized['uniteLegale'] = true;
        $this->uniteLegale = $uniteLegale;
        return $this;
    }
    /**
     * Ensemble des variables d'adresse d'un établissement
     *
     * @return Adresse
     */
    public function getAdresseEtablissement(): Adresse
    {
        return $this->adresseEtablissement;
    }
    /**
     * Ensemble des variables d'adresse d'un établissement
     *
     * @param Adresse $adresseEtablissement
     *
     * @return self
     */
    public function setAdresseEtablissement(Adresse $adresseEtablissement): self
    {
        $this->initialized['adresseEtablissement'] = true;
        $this->adresseEtablissement = $adresseEtablissement;
        return $this;
    }
    /**
     * Ensemble des variables d'adresse complémentaire d'un établissement
     *
     * @return AdresseComplementaire
     */
    public function getAdresse2Etablissement(): AdresseComplementaire
    {
        return $this->adresse2Etablissement;
    }
    /**
     * Ensemble des variables d'adresse complémentaire d'un établissement
     *
     * @param AdresseComplementaire $adresse2Etablissement
     *
     * @return self
     */
    public function setAdresse2Etablissement(AdresseComplementaire $adresse2Etablissement): self
    {
        $this->initialized['adresse2Etablissement'] = true;
        $this->adresse2Etablissement = $adresse2Etablissement;
        return $this;
    }
    /**
     * @return list<PeriodeEtablissement>
     */
    public function getPeriodesEtablissement(): array
    {
        return $this->periodesEtablissement;
    }
    /**
     * @param list<PeriodeEtablissement> $periodesEtablissement
     *
     * @return self
     */
    public function setPeriodesEtablissement(array $periodesEtablissement): self
    {
        $this->initialized['periodesEtablissement'] = true;
        $this->periodesEtablissement = $periodesEtablissement;
        return $this;
    }
}