<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Model;

class UniteLegale
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
     * Numéro Siren de l'entreprise, toujours renseigné
     *
     * @var string
     */
    protected $siren;
    /**
     * Statut de diffusion de l’unité légale
     *
     * @var string
     */
    protected $statutDiffusionUniteLegale;
    /**
     * True si l'unité est une unité purgée
     *
     * @var bool
     */
    protected $unitePurgeeUniteLegale;
    /**
     * Date de création de l'unité légale
     *
     * @var \DateTime
     */
    protected $dateCreationUniteLegale;
    /**
     * L’accès à ces données est soumis à une démarche auprès de la Commission nationale de l’informatique et des libertés. Date de naissance pour la personne physique sinon null
     *
     * @var string
     */
    protected $dateNaissanceUniteLegale;
    /**
     * L’accès à ces données est soumis à une démarche auprès de la Commission nationale de l’informatique et des libertés. Code commune de naissance pour les personnes physiques, null pour les personnes morales et les personnes physiques nées à l’étranger
     *
     * @var string
     */
    protected $codeCommuneNaissanceUniteLegale;
    /**
     * L’accès à ces données est soumis à une démarche auprès de la Commission nationale de l’informatique et des libertés. Code pays de naissance pour les personnes physiques nées à l’étranger, null sinon
     *
     * @var string
     */
    protected $codePaysNaissanceUniteLegale;
    /**
     * L’accès à ces données est soumis à une démarche auprès de la Commission nationale de l’informatique et des libertés. Nationalité pour les personnes physiques
     *
     * @var string
     */
    protected $libelleNationaliteUniteLegale;
    /**
     * Numéro au Répertoire National des Associations
     *
     * @var string
     */
    protected $identifiantAssociationUniteLegale;
    /**
     * Tranche d'effectif salarié de l'unité légale, valorisé uniquement si l'année correspondante est supérieure ou égale à l'année d'interrogation-3 (sinon, NN)
     *
     * @var string
     */
    protected $trancheEffectifsUniteLegale;
    /**
     * Année de validité de la tranche d'effectif salarié de l'unité légale, valorisée uniquement si l'année est supérieure ou égale à l'année d'interrogation-3 (sinon, null)
     *
     * @var string
     */
    protected $anneeEffectifsUniteLegale;
    /**
     * Date de la dernière mise à jour effectuée au répertoire Sirene sur le Siren concerné
     *
     * @var string
     */
    protected $dateDernierTraitementUniteLegale;
    /**
     * Nombre de périodes dans la vie de l'unité légale
     *
     * @var int
     */
    protected $nombrePeriodesUniteLegale;
    /**
     * Catégorie à laquelle appartient l'entreprise : Petite ou moyenne entreprise, Entreprise de taille intermédiaire, Grande entreprise
     *
     * @var string
     */
    protected $categorieEntreprise;
    /**
     * Année de validité de la catégorie d'entreprise
     *
     * @var string
     */
    protected $anneeCategorieEntreprise;
    /**
     * Sigle de l'unité légale
     *
     * @var string
     */
    protected $sigleUniteLegale;
    /**
     * Sexe pour les personnes physiques sinon null
     *
     * @var string
     */
    protected $sexeUniteLegale;
    /**
     * Premier prénom déclaré pour une personne physique, peut être null dans le cas d'une unité purgée
     *
     * @var string
     */
    protected $prenom1UniteLegale;
    /**
     * Deuxième prénom déclaré pour une personne physique
     *
     * @var string
     */
    protected $prenom2UniteLegale;
    /**
     * Troisième prénom déclaré pour une personne physique
     *
     * @var string
     */
    protected $prenom3UniteLegale;
    /**
     * Quatrième prénom déclaré pour une personne physique
     *
     * @var string
     */
    protected $prenom4UniteLegale;
    /**
     * Prénom usuel pour les personne physiques, correspond généralement au Prenom1
     *
     * @var string
     */
    protected $prenomUsuelUniteLegale;
    /**
     * Pseudonyme pour les personnes physiques
     *
     * @var string
     */
    protected $pseudonymeUniteLegale;
    /**
     * Code APE en nomenclature NAF25
     *
     * @var string
     */
    protected $activitePrincipaleNAF25UniteLegale;
    /**
     * @var list<PeriodeUniteLegale>
     */
    protected $periodesUniteLegale;
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
     * Numéro Siren de l'entreprise, toujours renseigné
     *
     * @return string
     */
    public function getSiren(): string
    {
        return $this->siren;
    }
    /**
     * Numéro Siren de l'entreprise, toujours renseigné
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
     * Statut de diffusion de l’unité légale
     *
     * @return string
     */
    public function getStatutDiffusionUniteLegale(): string
    {
        return $this->statutDiffusionUniteLegale;
    }
    /**
     * Statut de diffusion de l’unité légale
     *
     * @param string $statutDiffusionUniteLegale
     *
     * @return self
     */
    public function setStatutDiffusionUniteLegale(string $statutDiffusionUniteLegale): self
    {
        $this->initialized['statutDiffusionUniteLegale'] = true;
        $this->statutDiffusionUniteLegale = $statutDiffusionUniteLegale;
        return $this;
    }
    /**
     * True si l'unité est une unité purgée
     *
     * @return bool
     */
    public function getUnitePurgeeUniteLegale(): bool
    {
        return $this->unitePurgeeUniteLegale;
    }
    /**
     * True si l'unité est une unité purgée
     *
     * @param bool $unitePurgeeUniteLegale
     *
     * @return self
     */
    public function setUnitePurgeeUniteLegale(bool $unitePurgeeUniteLegale): self
    {
        $this->initialized['unitePurgeeUniteLegale'] = true;
        $this->unitePurgeeUniteLegale = $unitePurgeeUniteLegale;
        return $this;
    }
    /**
     * Date de création de l'unité légale
     *
     * @return \DateTime
     */
    public function getDateCreationUniteLegale(): \DateTime
    {
        return $this->dateCreationUniteLegale;
    }
    /**
     * Date de création de l'unité légale
     *
     * @param \DateTime $dateCreationUniteLegale
     *
     * @return self
     */
    public function setDateCreationUniteLegale(\DateTime $dateCreationUniteLegale): self
    {
        $this->initialized['dateCreationUniteLegale'] = true;
        $this->dateCreationUniteLegale = $dateCreationUniteLegale;
        return $this;
    }
    /**
     * L’accès à ces données est soumis à une démarche auprès de la Commission nationale de l’informatique et des libertés. Date de naissance pour la personne physique sinon null
     *
     * @return string
     */
    public function getDateNaissanceUniteLegale(): string
    {
        return $this->dateNaissanceUniteLegale;
    }
    /**
     * L’accès à ces données est soumis à une démarche auprès de la Commission nationale de l’informatique et des libertés. Date de naissance pour la personne physique sinon null
     *
     * @param string $dateNaissanceUniteLegale
     *
     * @return self
     */
    public function setDateNaissanceUniteLegale(string $dateNaissanceUniteLegale): self
    {
        $this->initialized['dateNaissanceUniteLegale'] = true;
        $this->dateNaissanceUniteLegale = $dateNaissanceUniteLegale;
        return $this;
    }
    /**
     * L’accès à ces données est soumis à une démarche auprès de la Commission nationale de l’informatique et des libertés. Code commune de naissance pour les personnes physiques, null pour les personnes morales et les personnes physiques nées à l’étranger
     *
     * @return string
     */
    public function getCodeCommuneNaissanceUniteLegale(): string
    {
        return $this->codeCommuneNaissanceUniteLegale;
    }
    /**
     * L’accès à ces données est soumis à une démarche auprès de la Commission nationale de l’informatique et des libertés. Code commune de naissance pour les personnes physiques, null pour les personnes morales et les personnes physiques nées à l’étranger
     *
     * @param string $codeCommuneNaissanceUniteLegale
     *
     * @return self
     */
    public function setCodeCommuneNaissanceUniteLegale(string $codeCommuneNaissanceUniteLegale): self
    {
        $this->initialized['codeCommuneNaissanceUniteLegale'] = true;
        $this->codeCommuneNaissanceUniteLegale = $codeCommuneNaissanceUniteLegale;
        return $this;
    }
    /**
     * L’accès à ces données est soumis à une démarche auprès de la Commission nationale de l’informatique et des libertés. Code pays de naissance pour les personnes physiques nées à l’étranger, null sinon
     *
     * @return string
     */
    public function getCodePaysNaissanceUniteLegale(): string
    {
        return $this->codePaysNaissanceUniteLegale;
    }
    /**
     * L’accès à ces données est soumis à une démarche auprès de la Commission nationale de l’informatique et des libertés. Code pays de naissance pour les personnes physiques nées à l’étranger, null sinon
     *
     * @param string $codePaysNaissanceUniteLegale
     *
     * @return self
     */
    public function setCodePaysNaissanceUniteLegale(string $codePaysNaissanceUniteLegale): self
    {
        $this->initialized['codePaysNaissanceUniteLegale'] = true;
        $this->codePaysNaissanceUniteLegale = $codePaysNaissanceUniteLegale;
        return $this;
    }
    /**
     * L’accès à ces données est soumis à une démarche auprès de la Commission nationale de l’informatique et des libertés. Nationalité pour les personnes physiques
     *
     * @return string
     */
    public function getLibelleNationaliteUniteLegale(): string
    {
        return $this->libelleNationaliteUniteLegale;
    }
    /**
     * L’accès à ces données est soumis à une démarche auprès de la Commission nationale de l’informatique et des libertés. Nationalité pour les personnes physiques
     *
     * @param string $libelleNationaliteUniteLegale
     *
     * @return self
     */
    public function setLibelleNationaliteUniteLegale(string $libelleNationaliteUniteLegale): self
    {
        $this->initialized['libelleNationaliteUniteLegale'] = true;
        $this->libelleNationaliteUniteLegale = $libelleNationaliteUniteLegale;
        return $this;
    }
    /**
     * Numéro au Répertoire National des Associations
     *
     * @return string
     */
    public function getIdentifiantAssociationUniteLegale(): string
    {
        return $this->identifiantAssociationUniteLegale;
    }
    /**
     * Numéro au Répertoire National des Associations
     *
     * @param string $identifiantAssociationUniteLegale
     *
     * @return self
     */
    public function setIdentifiantAssociationUniteLegale(string $identifiantAssociationUniteLegale): self
    {
        $this->initialized['identifiantAssociationUniteLegale'] = true;
        $this->identifiantAssociationUniteLegale = $identifiantAssociationUniteLegale;
        return $this;
    }
    /**
     * Tranche d'effectif salarié de l'unité légale, valorisé uniquement si l'année correspondante est supérieure ou égale à l'année d'interrogation-3 (sinon, NN)
     *
     * @return string
     */
    public function getTrancheEffectifsUniteLegale(): string
    {
        return $this->trancheEffectifsUniteLegale;
    }
    /**
     * Tranche d'effectif salarié de l'unité légale, valorisé uniquement si l'année correspondante est supérieure ou égale à l'année d'interrogation-3 (sinon, NN)
     *
     * @param string $trancheEffectifsUniteLegale
     *
     * @return self
     */
    public function setTrancheEffectifsUniteLegale(string $trancheEffectifsUniteLegale): self
    {
        $this->initialized['trancheEffectifsUniteLegale'] = true;
        $this->trancheEffectifsUniteLegale = $trancheEffectifsUniteLegale;
        return $this;
    }
    /**
     * Année de validité de la tranche d'effectif salarié de l'unité légale, valorisée uniquement si l'année est supérieure ou égale à l'année d'interrogation-3 (sinon, null)
     *
     * @return string
     */
    public function getAnneeEffectifsUniteLegale(): string
    {
        return $this->anneeEffectifsUniteLegale;
    }
    /**
     * Année de validité de la tranche d'effectif salarié de l'unité légale, valorisée uniquement si l'année est supérieure ou égale à l'année d'interrogation-3 (sinon, null)
     *
     * @param string $anneeEffectifsUniteLegale
     *
     * @return self
     */
    public function setAnneeEffectifsUniteLegale(string $anneeEffectifsUniteLegale): self
    {
        $this->initialized['anneeEffectifsUniteLegale'] = true;
        $this->anneeEffectifsUniteLegale = $anneeEffectifsUniteLegale;
        return $this;
    }
    /**
     * Date de la dernière mise à jour effectuée au répertoire Sirene sur le Siren concerné
     *
     * @return string
     */
    public function getDateDernierTraitementUniteLegale(): string
    {
        return $this->dateDernierTraitementUniteLegale;
    }
    /**
     * Date de la dernière mise à jour effectuée au répertoire Sirene sur le Siren concerné
     *
     * @param string $dateDernierTraitementUniteLegale
     *
     * @return self
     */
    public function setDateDernierTraitementUniteLegale(string $dateDernierTraitementUniteLegale): self
    {
        $this->initialized['dateDernierTraitementUniteLegale'] = true;
        $this->dateDernierTraitementUniteLegale = $dateDernierTraitementUniteLegale;
        return $this;
    }
    /**
     * Nombre de périodes dans la vie de l'unité légale
     *
     * @return int
     */
    public function getNombrePeriodesUniteLegale(): int
    {
        return $this->nombrePeriodesUniteLegale;
    }
    /**
     * Nombre de périodes dans la vie de l'unité légale
     *
     * @param int $nombrePeriodesUniteLegale
     *
     * @return self
     */
    public function setNombrePeriodesUniteLegale(int $nombrePeriodesUniteLegale): self
    {
        $this->initialized['nombrePeriodesUniteLegale'] = true;
        $this->nombrePeriodesUniteLegale = $nombrePeriodesUniteLegale;
        return $this;
    }
    /**
     * Catégorie à laquelle appartient l'entreprise : Petite ou moyenne entreprise, Entreprise de taille intermédiaire, Grande entreprise
     *
     * @return string
     */
    public function getCategorieEntreprise(): string
    {
        return $this->categorieEntreprise;
    }
    /**
     * Catégorie à laquelle appartient l'entreprise : Petite ou moyenne entreprise, Entreprise de taille intermédiaire, Grande entreprise
     *
     * @param string $categorieEntreprise
     *
     * @return self
     */
    public function setCategorieEntreprise(string $categorieEntreprise): self
    {
        $this->initialized['categorieEntreprise'] = true;
        $this->categorieEntreprise = $categorieEntreprise;
        return $this;
    }
    /**
     * Année de validité de la catégorie d'entreprise
     *
     * @return string
     */
    public function getAnneeCategorieEntreprise(): string
    {
        return $this->anneeCategorieEntreprise;
    }
    /**
     * Année de validité de la catégorie d'entreprise
     *
     * @param string $anneeCategorieEntreprise
     *
     * @return self
     */
    public function setAnneeCategorieEntreprise(string $anneeCategorieEntreprise): self
    {
        $this->initialized['anneeCategorieEntreprise'] = true;
        $this->anneeCategorieEntreprise = $anneeCategorieEntreprise;
        return $this;
    }
    /**
     * Sigle de l'unité légale
     *
     * @return string
     */
    public function getSigleUniteLegale(): string
    {
        return $this->sigleUniteLegale;
    }
    /**
     * Sigle de l'unité légale
     *
     * @param string $sigleUniteLegale
     *
     * @return self
     */
    public function setSigleUniteLegale(string $sigleUniteLegale): self
    {
        $this->initialized['sigleUniteLegale'] = true;
        $this->sigleUniteLegale = $sigleUniteLegale;
        return $this;
    }
    /**
     * Sexe pour les personnes physiques sinon null
     *
     * @return string
     */
    public function getSexeUniteLegale(): string
    {
        return $this->sexeUniteLegale;
    }
    /**
     * Sexe pour les personnes physiques sinon null
     *
     * @param string $sexeUniteLegale
     *
     * @return self
     */
    public function setSexeUniteLegale(string $sexeUniteLegale): self
    {
        $this->initialized['sexeUniteLegale'] = true;
        $this->sexeUniteLegale = $sexeUniteLegale;
        return $this;
    }
    /**
     * Premier prénom déclaré pour une personne physique, peut être null dans le cas d'une unité purgée
     *
     * @return string
     */
    public function getPrenom1UniteLegale(): string
    {
        return $this->prenom1UniteLegale;
    }
    /**
     * Premier prénom déclaré pour une personne physique, peut être null dans le cas d'une unité purgée
     *
     * @param string $prenom1UniteLegale
     *
     * @return self
     */
    public function setPrenom1UniteLegale(string $prenom1UniteLegale): self
    {
        $this->initialized['prenom1UniteLegale'] = true;
        $this->prenom1UniteLegale = $prenom1UniteLegale;
        return $this;
    }
    /**
     * Deuxième prénom déclaré pour une personne physique
     *
     * @return string
     */
    public function getPrenom2UniteLegale(): string
    {
        return $this->prenom2UniteLegale;
    }
    /**
     * Deuxième prénom déclaré pour une personne physique
     *
     * @param string $prenom2UniteLegale
     *
     * @return self
     */
    public function setPrenom2UniteLegale(string $prenom2UniteLegale): self
    {
        $this->initialized['prenom2UniteLegale'] = true;
        $this->prenom2UniteLegale = $prenom2UniteLegale;
        return $this;
    }
    /**
     * Troisième prénom déclaré pour une personne physique
     *
     * @return string
     */
    public function getPrenom3UniteLegale(): string
    {
        return $this->prenom3UniteLegale;
    }
    /**
     * Troisième prénom déclaré pour une personne physique
     *
     * @param string $prenom3UniteLegale
     *
     * @return self
     */
    public function setPrenom3UniteLegale(string $prenom3UniteLegale): self
    {
        $this->initialized['prenom3UniteLegale'] = true;
        $this->prenom3UniteLegale = $prenom3UniteLegale;
        return $this;
    }
    /**
     * Quatrième prénom déclaré pour une personne physique
     *
     * @return string
     */
    public function getPrenom4UniteLegale(): string
    {
        return $this->prenom4UniteLegale;
    }
    /**
     * Quatrième prénom déclaré pour une personne physique
     *
     * @param string $prenom4UniteLegale
     *
     * @return self
     */
    public function setPrenom4UniteLegale(string $prenom4UniteLegale): self
    {
        $this->initialized['prenom4UniteLegale'] = true;
        $this->prenom4UniteLegale = $prenom4UniteLegale;
        return $this;
    }
    /**
     * Prénom usuel pour les personne physiques, correspond généralement au Prenom1
     *
     * @return string
     */
    public function getPrenomUsuelUniteLegale(): string
    {
        return $this->prenomUsuelUniteLegale;
    }
    /**
     * Prénom usuel pour les personne physiques, correspond généralement au Prenom1
     *
     * @param string $prenomUsuelUniteLegale
     *
     * @return self
     */
    public function setPrenomUsuelUniteLegale(string $prenomUsuelUniteLegale): self
    {
        $this->initialized['prenomUsuelUniteLegale'] = true;
        $this->prenomUsuelUniteLegale = $prenomUsuelUniteLegale;
        return $this;
    }
    /**
     * Pseudonyme pour les personnes physiques
     *
     * @return string
     */
    public function getPseudonymeUniteLegale(): string
    {
        return $this->pseudonymeUniteLegale;
    }
    /**
     * Pseudonyme pour les personnes physiques
     *
     * @param string $pseudonymeUniteLegale
     *
     * @return self
     */
    public function setPseudonymeUniteLegale(string $pseudonymeUniteLegale): self
    {
        $this->initialized['pseudonymeUniteLegale'] = true;
        $this->pseudonymeUniteLegale = $pseudonymeUniteLegale;
        return $this;
    }
    /**
     * Code APE en nomenclature NAF25
     *
     * @return string
     */
    public function getActivitePrincipaleNAF25UniteLegale(): string
    {
        return $this->activitePrincipaleNAF25UniteLegale;
    }
    /**
     * Code APE en nomenclature NAF25
     *
     * @param string $activitePrincipaleNAF25UniteLegale
     *
     * @return self
     */
    public function setActivitePrincipaleNAF25UniteLegale(string $activitePrincipaleNAF25UniteLegale): self
    {
        $this->initialized['activitePrincipaleNAF25UniteLegale'] = true;
        $this->activitePrincipaleNAF25UniteLegale = $activitePrincipaleNAF25UniteLegale;
        return $this;
    }
    /**
     * @return list<PeriodeUniteLegale>
     */
    public function getPeriodesUniteLegale(): array
    {
        return $this->periodesUniteLegale;
    }
    /**
     * @param list<PeriodeUniteLegale> $periodesUniteLegale
     *
     * @return self
     */
    public function setPeriodesUniteLegale(array $periodesUniteLegale): self
    {
        $this->initialized['periodesUniteLegale'] = true;
        $this->periodesUniteLegale = $periodesUniteLegale;
        return $this;
    }
}