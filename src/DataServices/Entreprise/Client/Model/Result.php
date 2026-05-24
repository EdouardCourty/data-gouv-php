<?php

namespace Ecourty\DataGouv\DataServices\Entreprise\Client\Model;

class Result extends \ArrayObject
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
     * le numéro unique de l'entreprise
     *
     * @var string|null
     */
    protected $siren;
    /**
     * Champ construit depuis les champs de dénomination : dénomination de l'unité légale | Nom et prénom | Nom inconnu (dénomination usuelle : Construite en priorité à partir de la dénomination usuelle de l'établissement siège. Si cette dernière n'existe pas, elle est construite à partir des trois champs de dénomination usuelle de l'unité légale. source : base SIRENE) (sigle de l'unité légale)
     *
     * @var string|null
     */
    protected $nomComplet;
    /**
     * La raison sociale pour les personnes morales (source : base SIRENE).
     *
     * @var string|null
     */
    protected $nomRaisonSociale;
    /**
     * Forme réduite de la raison sociale ou de la dénomination d'une personne morale ou d'un organisme public (source : base SIRENE).
     *
     * @var string|null
     */
    protected $sigle;
    /**
     * @var int|null
     */
    protected $nombreEtablissements;
    /**
     * @var int|null
     */
    protected $nombreEtablissementsOuverts;
    /**
     * @var Siege
     */
    protected $siege;
    /**
     * Code de l'activité principale exercée (APE) par l'unité légale (source : base SIRENE).
     *
     * @var string|null
     */
    protected $activitePrincipale;
    /**
     * Activité principale de l'unité légale selon la nomenclature NAF 2025 (source : base SIRENE). Champ temporaire, supprimé à compter du 1er janvier 2027.
     *
     * @var string|null
     */
    protected $activitePrincipaleNaf25;
    /**
     * Catégorie d'entreprise de l'unité légale (source : base SIRENE).
     *
     * @var string|null
     */
    protected $categorieEntreprise;
    /**
     * Caractère employeur de l'unité légale (source : base SIRENE).
     *
     * @var string|null
     */
    protected $caractereEmployeur;
    /**
     * Année de validité correspondant à la catégorie d'entreprise diffusée (source : base SIRENE).
     *
     * @var string|null
     */
    protected $anneeCategorieEntreprise;
    /**
     * Date de création de l'unité légale (source : base SIRENE).
     *
     * @var \DateTime|null
     */
    protected $dateCreation;
    /**
     * Date de fermeture de l'unité légale (source : base historique SIRENE).
     *
     * @var \DateTime|null
     */
    protected $dateFermeture;
    /**
     * Date de la dernière modification d'une variable de niveau unité légale, qu'elle soit historisée ou non (source : base SIRENE).
     *
     * @var \DateTime|null
     */
    protected $dateMiseAJour;
    /**
     * Date de la dernière mise à jour des données INSEE pour cette unité légale.
     *
     * @var \DateTime|null
     */
    protected $dateMiseAJourInsee;
    /**
     * Date de la dernière mise à jour des données RNCS pour cette unité légale.
     *
     * @var \DateTime|null
     */
    protected $dateMiseAJourRne;
    /**
     * @var list<mixed>
     */
    protected $dirigeants;
    /**
     * État administratif de l'unité légale (source : base SIRENE).
     *
     * @var string|null
     */
    protected $etatAdministratif;
    /**
     * Catégorie juridique de l'unité légale (source : base SIRENE).
     *
     * @var string|null
     */
    protected $natureJuridique;
    /**
     * Calculée à partir de l'activité principale.
     *
     * @var string|null
     */
    protected $sectionActivitePrincipale;
    /**
     * Tranche d'effectif salarié de l'unité légale (source : base SIRENE).
     *
     * @var string|null
     */
    protected $trancheEffectifSalarie;
    /**
     * Année de validité de la tranche d'effectif salarié de l'unité légale (source : base SIRENE).
     *
     * @var string|null
     */
    protected $anneeTrancheEffectifSalarie;
    /**
     * Statut de diffusion de l'unité légale. Toutes les unités légales diffusibles ont le statut de diffusion à "O". Les unités légales ayant fait l'objet d'une demande d'opposition ont le statut de diffusion à "P" pour diffusion partielle (source : base SIRENE).
     *
     * @var string|null
     */
    protected $statutDiffusion;
    /**
     * Liste des établissements ayant contribué au résultat de la recherche : ceux qui ont « matché » la recherche textuelle ou un filtre sur les établissements. Ce champ ne contient **pas** la totalité des établissements de l'unité légale.
     * 
     * **Attention :** - Pour une recherche directe par SIREN (q=123456789), ce champ est toujours vide. - Pour une recherche directe par SIRET (q=12345678900001), uniquement le SIRET recherché est retourné.
     *
     * @var list<Etablissement>
     */
    protected $matchingEtablissements;
    /**
     * Bilans financiers par année
     *
     * @var array<string, FinancesItem>
     */
    protected $finances;
    /**
     * @var ResultComplements
     */
    protected $complements;
    /**
     * le numéro unique de l'entreprise
     *
     * @return string|null
     */
    public function getSiren(): ?string
    {
        return $this->siren;
    }
    /**
     * le numéro unique de l'entreprise
     *
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
     * Champ construit depuis les champs de dénomination : dénomination de l'unité légale | Nom et prénom | Nom inconnu (dénomination usuelle : Construite en priorité à partir de la dénomination usuelle de l'établissement siège. Si cette dernière n'existe pas, elle est construite à partir des trois champs de dénomination usuelle de l'unité légale. source : base SIRENE) (sigle de l'unité légale)
     *
     * @return string|null
     */
    public function getNomComplet(): ?string
    {
        return $this->nomComplet;
    }
    /**
     * Champ construit depuis les champs de dénomination : dénomination de l'unité légale | Nom et prénom | Nom inconnu (dénomination usuelle : Construite en priorité à partir de la dénomination usuelle de l'établissement siège. Si cette dernière n'existe pas, elle est construite à partir des trois champs de dénomination usuelle de l'unité légale. source : base SIRENE) (sigle de l'unité légale)
     *
     * @param string|null $nomComplet
     *
     * @return self
     */
    public function setNomComplet(?string $nomComplet): self
    {
        $this->initialized['nomComplet'] = true;
        $this->nomComplet = $nomComplet;
        return $this;
    }
    /**
     * La raison sociale pour les personnes morales (source : base SIRENE).
     *
     * @return string|null
     */
    public function getNomRaisonSociale(): ?string
    {
        return $this->nomRaisonSociale;
    }
    /**
     * La raison sociale pour les personnes morales (source : base SIRENE).
     *
     * @param string|null $nomRaisonSociale
     *
     * @return self
     */
    public function setNomRaisonSociale(?string $nomRaisonSociale): self
    {
        $this->initialized['nomRaisonSociale'] = true;
        $this->nomRaisonSociale = $nomRaisonSociale;
        return $this;
    }
    /**
     * Forme réduite de la raison sociale ou de la dénomination d'une personne morale ou d'un organisme public (source : base SIRENE).
     *
     * @return string|null
     */
    public function getSigle(): ?string
    {
        return $this->sigle;
    }
    /**
     * Forme réduite de la raison sociale ou de la dénomination d'une personne morale ou d'un organisme public (source : base SIRENE).
     *
     * @param string|null $sigle
     *
     * @return self
     */
    public function setSigle(?string $sigle): self
    {
        $this->initialized['sigle'] = true;
        $this->sigle = $sigle;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getNombreEtablissements(): ?int
    {
        return $this->nombreEtablissements;
    }
    /**
     * @param int|null $nombreEtablissements
     *
     * @return self
     */
    public function setNombreEtablissements(?int $nombreEtablissements): self
    {
        $this->initialized['nombreEtablissements'] = true;
        $this->nombreEtablissements = $nombreEtablissements;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getNombreEtablissementsOuverts(): ?int
    {
        return $this->nombreEtablissementsOuverts;
    }
    /**
     * @param int|null $nombreEtablissementsOuverts
     *
     * @return self
     */
    public function setNombreEtablissementsOuverts(?int $nombreEtablissementsOuverts): self
    {
        $this->initialized['nombreEtablissementsOuverts'] = true;
        $this->nombreEtablissementsOuverts = $nombreEtablissementsOuverts;
        return $this;
    }
    /**
     * @return Siege
     */
    public function getSiege(): Siege
    {
        return $this->siege;
    }
    /**
     * @param Siege $siege
     *
     * @return self
     */
    public function setSiege(Siege $siege): self
    {
        $this->initialized['siege'] = true;
        $this->siege = $siege;
        return $this;
    }
    /**
     * Code de l'activité principale exercée (APE) par l'unité légale (source : base SIRENE).
     *
     * @return string|null
     */
    public function getActivitePrincipale(): ?string
    {
        return $this->activitePrincipale;
    }
    /**
     * Code de l'activité principale exercée (APE) par l'unité légale (source : base SIRENE).
     *
     * @param string|null $activitePrincipale
     *
     * @return self
     */
    public function setActivitePrincipale(?string $activitePrincipale): self
    {
        $this->initialized['activitePrincipale'] = true;
        $this->activitePrincipale = $activitePrincipale;
        return $this;
    }
    /**
     * Activité principale de l'unité légale selon la nomenclature NAF 2025 (source : base SIRENE). Champ temporaire, supprimé à compter du 1er janvier 2027.
     *
     * @return string|null
     */
    public function getActivitePrincipaleNaf25(): ?string
    {
        return $this->activitePrincipaleNaf25;
    }
    /**
     * Activité principale de l'unité légale selon la nomenclature NAF 2025 (source : base SIRENE). Champ temporaire, supprimé à compter du 1er janvier 2027.
     *
     * @param string|null $activitePrincipaleNaf25
     *
     * @return self
     */
    public function setActivitePrincipaleNaf25(?string $activitePrincipaleNaf25): self
    {
        $this->initialized['activitePrincipaleNaf25'] = true;
        $this->activitePrincipaleNaf25 = $activitePrincipaleNaf25;
        return $this;
    }
    /**
     * Catégorie d'entreprise de l'unité légale (source : base SIRENE).
     *
     * @return string|null
     */
    public function getCategorieEntreprise(): ?string
    {
        return $this->categorieEntreprise;
    }
    /**
     * Catégorie d'entreprise de l'unité légale (source : base SIRENE).
     *
     * @param string|null $categorieEntreprise
     *
     * @return self
     */
    public function setCategorieEntreprise(?string $categorieEntreprise): self
    {
        $this->initialized['categorieEntreprise'] = true;
        $this->categorieEntreprise = $categorieEntreprise;
        return $this;
    }
    /**
     * Caractère employeur de l'unité légale (source : base SIRENE).
     *
     * @return string|null
     */
    public function getCaractereEmployeur(): ?string
    {
        return $this->caractereEmployeur;
    }
    /**
     * Caractère employeur de l'unité légale (source : base SIRENE).
     *
     * @param string|null $caractereEmployeur
     *
     * @return self
     */
    public function setCaractereEmployeur(?string $caractereEmployeur): self
    {
        $this->initialized['caractereEmployeur'] = true;
        $this->caractereEmployeur = $caractereEmployeur;
        return $this;
    }
    /**
     * Année de validité correspondant à la catégorie d'entreprise diffusée (source : base SIRENE).
     *
     * @return string|null
     */
    public function getAnneeCategorieEntreprise(): ?string
    {
        return $this->anneeCategorieEntreprise;
    }
    /**
     * Année de validité correspondant à la catégorie d'entreprise diffusée (source : base SIRENE).
     *
     * @param string|null $anneeCategorieEntreprise
     *
     * @return self
     */
    public function setAnneeCategorieEntreprise(?string $anneeCategorieEntreprise): self
    {
        $this->initialized['anneeCategorieEntreprise'] = true;
        $this->anneeCategorieEntreprise = $anneeCategorieEntreprise;
        return $this;
    }
    /**
     * Date de création de l'unité légale (source : base SIRENE).
     *
     * @return \DateTime|null
     */
    public function getDateCreation(): ?\DateTime
    {
        return $this->dateCreation;
    }
    /**
     * Date de création de l'unité légale (source : base SIRENE).
     *
     * @param \DateTime|null $dateCreation
     *
     * @return self
     */
    public function setDateCreation(?\DateTime $dateCreation): self
    {
        $this->initialized['dateCreation'] = true;
        $this->dateCreation = $dateCreation;
        return $this;
    }
    /**
     * Date de fermeture de l'unité légale (source : base historique SIRENE).
     *
     * @return \DateTime|null
     */
    public function getDateFermeture(): ?\DateTime
    {
        return $this->dateFermeture;
    }
    /**
     * Date de fermeture de l'unité légale (source : base historique SIRENE).
     *
     * @param \DateTime|null $dateFermeture
     *
     * @return self
     */
    public function setDateFermeture(?\DateTime $dateFermeture): self
    {
        $this->initialized['dateFermeture'] = true;
        $this->dateFermeture = $dateFermeture;
        return $this;
    }
    /**
     * Date de la dernière modification d'une variable de niveau unité légale, qu'elle soit historisée ou non (source : base SIRENE).
     *
     * @return \DateTime|null
     */
    public function getDateMiseAJour(): ?\DateTime
    {
        return $this->dateMiseAJour;
    }
    /**
     * Date de la dernière modification d'une variable de niveau unité légale, qu'elle soit historisée ou non (source : base SIRENE).
     *
     * @param \DateTime|null $dateMiseAJour
     *
     * @return self
     */
    public function setDateMiseAJour(?\DateTime $dateMiseAJour): self
    {
        $this->initialized['dateMiseAJour'] = true;
        $this->dateMiseAJour = $dateMiseAJour;
        return $this;
    }
    /**
     * Date de la dernière mise à jour des données INSEE pour cette unité légale.
     *
     * @return \DateTime|null
     */
    public function getDateMiseAJourInsee(): ?\DateTime
    {
        return $this->dateMiseAJourInsee;
    }
    /**
     * Date de la dernière mise à jour des données INSEE pour cette unité légale.
     *
     * @param \DateTime|null $dateMiseAJourInsee
     *
     * @return self
     */
    public function setDateMiseAJourInsee(?\DateTime $dateMiseAJourInsee): self
    {
        $this->initialized['dateMiseAJourInsee'] = true;
        $this->dateMiseAJourInsee = $dateMiseAJourInsee;
        return $this;
    }
    /**
     * Date de la dernière mise à jour des données RNCS pour cette unité légale.
     *
     * @return \DateTime|null
     */
    public function getDateMiseAJourRne(): ?\DateTime
    {
        return $this->dateMiseAJourRne;
    }
    /**
     * Date de la dernière mise à jour des données RNCS pour cette unité légale.
     *
     * @param \DateTime|null $dateMiseAJourRne
     *
     * @return self
     */
    public function setDateMiseAJourRne(?\DateTime $dateMiseAJourRne): self
    {
        $this->initialized['dateMiseAJourRne'] = true;
        $this->dateMiseAJourRne = $dateMiseAJourRne;
        return $this;
    }
    /**
     * @return list<mixed>
     */
    public function getDirigeants(): array
    {
        return $this->dirigeants;
    }
    /**
     * @param list<mixed> $dirigeants
     *
     * @return self
     */
    public function setDirigeants(array $dirigeants): self
    {
        $this->initialized['dirigeants'] = true;
        $this->dirigeants = $dirigeants;
        return $this;
    }
    /**
     * État administratif de l'unité légale (source : base SIRENE).
     *
     * @return string|null
     */
    public function getEtatAdministratif(): ?string
    {
        return $this->etatAdministratif;
    }
    /**
     * État administratif de l'unité légale (source : base SIRENE).
     *
     * @param string|null $etatAdministratif
     *
     * @return self
     */
    public function setEtatAdministratif(?string $etatAdministratif): self
    {
        $this->initialized['etatAdministratif'] = true;
        $this->etatAdministratif = $etatAdministratif;
        return $this;
    }
    /**
     * Catégorie juridique de l'unité légale (source : base SIRENE).
     *
     * @return string|null
     */
    public function getNatureJuridique(): ?string
    {
        return $this->natureJuridique;
    }
    /**
     * Catégorie juridique de l'unité légale (source : base SIRENE).
     *
     * @param string|null $natureJuridique
     *
     * @return self
     */
    public function setNatureJuridique(?string $natureJuridique): self
    {
        $this->initialized['natureJuridique'] = true;
        $this->natureJuridique = $natureJuridique;
        return $this;
    }
    /**
     * Calculée à partir de l'activité principale.
     *
     * @return string|null
     */
    public function getSectionActivitePrincipale(): ?string
    {
        return $this->sectionActivitePrincipale;
    }
    /**
     * Calculée à partir de l'activité principale.
     *
     * @param string|null $sectionActivitePrincipale
     *
     * @return self
     */
    public function setSectionActivitePrincipale(?string $sectionActivitePrincipale): self
    {
        $this->initialized['sectionActivitePrincipale'] = true;
        $this->sectionActivitePrincipale = $sectionActivitePrincipale;
        return $this;
    }
    /**
     * Tranche d'effectif salarié de l'unité légale (source : base SIRENE).
     *
     * @return string|null
     */
    public function getTrancheEffectifSalarie(): ?string
    {
        return $this->trancheEffectifSalarie;
    }
    /**
     * Tranche d'effectif salarié de l'unité légale (source : base SIRENE).
     *
     * @param string|null $trancheEffectifSalarie
     *
     * @return self
     */
    public function setTrancheEffectifSalarie(?string $trancheEffectifSalarie): self
    {
        $this->initialized['trancheEffectifSalarie'] = true;
        $this->trancheEffectifSalarie = $trancheEffectifSalarie;
        return $this;
    }
    /**
     * Année de validité de la tranche d'effectif salarié de l'unité légale (source : base SIRENE).
     *
     * @return string|null
     */
    public function getAnneeTrancheEffectifSalarie(): ?string
    {
        return $this->anneeTrancheEffectifSalarie;
    }
    /**
     * Année de validité de la tranche d'effectif salarié de l'unité légale (source : base SIRENE).
     *
     * @param string|null $anneeTrancheEffectifSalarie
     *
     * @return self
     */
    public function setAnneeTrancheEffectifSalarie(?string $anneeTrancheEffectifSalarie): self
    {
        $this->initialized['anneeTrancheEffectifSalarie'] = true;
        $this->anneeTrancheEffectifSalarie = $anneeTrancheEffectifSalarie;
        return $this;
    }
    /**
     * Statut de diffusion de l'unité légale. Toutes les unités légales diffusibles ont le statut de diffusion à "O". Les unités légales ayant fait l'objet d'une demande d'opposition ont le statut de diffusion à "P" pour diffusion partielle (source : base SIRENE).
     *
     * @return string|null
     */
    public function getStatutDiffusion(): ?string
    {
        return $this->statutDiffusion;
    }
    /**
     * Statut de diffusion de l'unité légale. Toutes les unités légales diffusibles ont le statut de diffusion à "O". Les unités légales ayant fait l'objet d'une demande d'opposition ont le statut de diffusion à "P" pour diffusion partielle (source : base SIRENE).
     *
     * @param string|null $statutDiffusion
     *
     * @return self
     */
    public function setStatutDiffusion(?string $statutDiffusion): self
    {
        $this->initialized['statutDiffusion'] = true;
        $this->statutDiffusion = $statutDiffusion;
        return $this;
    }
    /**
     * Liste des établissements ayant contribué au résultat de la recherche : ceux qui ont « matché » la recherche textuelle ou un filtre sur les établissements. Ce champ ne contient **pas** la totalité des établissements de l'unité légale.
     * 
     * **Attention :** - Pour une recherche directe par SIREN (q=123456789), ce champ est toujours vide. - Pour une recherche directe par SIRET (q=12345678900001), uniquement le SIRET recherché est retourné.
     *
     * @return list<Etablissement>
     */
    public function getMatchingEtablissements(): array
    {
        return $this->matchingEtablissements;
    }
    /**
     * Liste des établissements ayant contribué au résultat de la recherche : ceux qui ont « matché » la recherche textuelle ou un filtre sur les établissements. Ce champ ne contient **pas** la totalité des établissements de l'unité légale.
     **Attention :** - Pour une recherche directe par SIREN (q=123456789), ce champ est toujours vide. - Pour une recherche directe par SIRET (q=12345678900001), uniquement le SIRET recherché est retourné.
     *
     * @param list<Etablissement> $matchingEtablissements
     *
     * @return self
     */
    public function setMatchingEtablissements(array $matchingEtablissements): self
    {
        $this->initialized['matchingEtablissements'] = true;
        $this->matchingEtablissements = $matchingEtablissements;
        return $this;
    }
    /**
     * Bilans financiers par année
     *
     * @return array<string, FinancesItem>
     */
    public function getFinances(): iterable
    {
        return $this->finances;
    }
    /**
     * Bilans financiers par année
     *
     * @param array<string, FinancesItem> $finances
     *
     * @return self
     */
    public function setFinances(iterable $finances): self
    {
        $this->initialized['finances'] = true;
        $this->finances = $finances;
        return $this;
    }
    /**
     * @return ResultComplements
     */
    public function getComplements(): ResultComplements
    {
        return $this->complements;
    }
    /**
     * @param ResultComplements $complements
     *
     * @return self
     */
    public function setComplements(ResultComplements $complements): self
    {
        $this->initialized['complements'] = true;
        $this->complements = $complements;
        return $this;
    }
}