<?php

namespace Ecourty\DataGouv\DataServices\Entreprise\Client\Model;

class Siege extends \ArrayObject
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
     * Activité principale de l'établissement (source : base SIRENE).
     *
     * @var string
     */
    protected $activitePrincipale;
    /**
     * Activité principale de l'établissement selon la nomenclature NAF 2025 (source : base SIRENE). Champ temporaire, supprimé à compter du 1er janvier 2027.
     *
     * @var string
     */
    protected $activitePrincipaleNaf25;
    /**
     * Activité principale de l'établissement au Registre des Métiers (source : base SIRENE).
     *
     * @var string|null
     */
    protected $activitePrincipaleRegistreMetier;
    /**
     * Année de validité de la tranche d'effectif salarié de l'établissement (source : base SIRENE).
     *
     * @var string|null
     */
    protected $anneeTrancheEffectifSalarie;
    /**
     * Champ construit depuis les champs d'adresse de la base SIRENE : *complement adresse + numéro voie + indice repetition + type voie + libelle voie + distribution spéciale + (code postal + libelle commune | cedex + libelle cedex) + libelle commune étranger + libelle pays étranger*
     *
     * @var string
     */
    protected $adresse;
    /**
     * Caractère employeur de l'établissement (source : base SIRENE).
     *
     * @var string
     */
    protected $caractereEmployeur;
    /**
     * Code cedex de l'établissement. Cette variable facultative est un élément constitutif de l'adresse. (source : base SIRENE).
     *
     * @var string|null
     */
    protected $cedex;
    /**
     * Code pays de l'adresse d'un établissement situé à l'étranger (source : base SIRENE).
     *
     * @var string|null
     */
    protected $codePaysEtranger;
    /**
     * Le code postal de l'adresse de l'établissement (source : base SIRENE).
     *
     * @var string|null
     */
    protected $codePostal;
    /**
     * Le code géographique de la commune de localisation de l'établissement, hors adresse à l'étranger (source : base SIRENE).
     *
     * @var string
     */
    protected $commune;
    /**
     * Le code géographique de la commune de localisation de l'établissement, hors adresse à l'étranger (source : base SIRENE).
     *
     * @var string|null
     */
    protected $complementAdresse;
    /**
     * Coordonnées GPS de l'établissement (latitude, longitude).
     *
     * @var string|null
     */
    protected $coordonnees;
    /**
     * Date de création de l'établissement (source : base SIRENE).
     *
     * @var \DateTime|null
     */
    protected $dateCreation;
    /**
     * Date de début d'une période de l'historique d'un établissement (source : base SIRENE).
     *
     * @var \DateTime|null
     */
    protected $dateDebutActivite;
    /**
     * Date de fermeture de l'établissement (source : base historique SIRENE).
     *
     * @var \DateTime|null
     */
    protected $dateFermeture;
    /**
     * Date du dernier traitement de l'établissement dans le répertoire Sirene (source : base SIRENE). Obsolète.
     *
     * @var \DateTime|null
     */
    protected $dateMiseAJour;
    /**
     * Date du dernier traitement de l'établissement dans le répertoire Sirene (source : base SIRENE).
     *
     * @var \DateTime|null
     */
    protected $dateMiseAJourInsee;
    /**
     * Code département de l'établissement (source : base SIRENE).
     *
     * @var string|null
     */
    protected $departement;
    /**
     * Distribution spéciale de l'établissement (source : base SIRENE).
     *
     * @var string|null
     */
    protected $distributionSpeciale;
    /**
     * Numéro siren de l'EPCI.
     *
     * @var string|null
     */
    protected $epci;
    /**
     * L'établissement est le siège de l'unité légale.
     *
     * @var bool
     */
    protected $estSiege;
    /**
     * État administratif de l'établissement (A : Actif, F : Fermé) (source : base SIRENE).
     *
     * @var string
     */
    protected $etatAdministratif;
    /**
     * Obsolète : champs toujours vide.
     *
     * @var string|null
     */
    protected $geoAdresse;
    /**
     * Obsolète : champs toujours vide.
     *
     * @var string|null
     */
    protected $geoId;
    /**
     * Indice de répétition du numéro dans la voie (B pour Bis, T pour TER, lettres ou chiffres pour identifier différents bâtiments à une même adresse...) (source : base SIRENE).
     *
     * @var string|null
     */
    protected $indiceRepetition;
    /**
     * Latitude de l'établissement (source : la majorité des SIRET utilisent le géocodage provenant de la base SIRENE géocodée par l’INSEE pour les études statistiques, à l’exception des entreprises créées au cours des derniers mois, pour lesquelles la géolocalisation est directement extraite de la base SIRENE).
     *
     * @var string
     */
    protected $latitude;
    /**
     * Libellé associé au code cedex (source : base SIRENE).
     *
     * @var string|null
     */
    protected $libelleCedex;
    /**
     * Libellé de la commune (source : base SIRENE).
     *
     * @var string
     */
    protected $libelleCommune;
    /**
     * Libellé de la commune pour un établissement situé à l'étranger (source : base SIRENE).
     *
     * @var string|null
     */
    protected $libelleCommuneEtranger;
    /**
     * Libellé du pays pour un établissement situé à l'étranger (source : base SIRENE).
     *
     * @var string|null
     */
    protected $libellePaysEtranger;
    /**
     * Libellé de la voie (source : base SIRENE).
     *
     * @var string
     */
    protected $libelleVoie;
    /**
     * Liste des enseignes de l'établissement (source : base SIRENE).
     *
     * @var list<string>|null
     */
    protected $listeEnseignes;
    /**
     * Liste des identifiants FINESS Géographiques de l'établissement (source : Ministère des Solidarités et de la Santé ).
     *
     * @var list<string>|null
     */
    protected $listeFiness;
    /**
     * Liste des identifiants bio de l'établissement (source : Agence Bio).
     *
     * @var list<string>
     */
    protected $listeIdBio;
    /**
     * Liste des conventions collectives de l'établissement (source : Ministère du travail).
     *
     * @var list<string>
     */
    protected $listeIdcc;
    /**
     * Liste des numéro de déclaration d'activité des établissement organismes de formation (source : Ministère du Travail).
     *
     * @var list<string>
     */
    protected $listeIdOrganismeFormation;
    /**
     * Liste des identifiants RGE de l'établissement (source : ADEME).
     *
     * @var list<string>
     */
    protected $listeRge;
    /**
     * Liste des identifiants UAI de l'établissements (source : Ministère de l'enseignement supérieur et de la recherche).
     *
     * @var list<string>
     */
    protected $listeUai;
    /**
     * Longitude de l'établissement (source : la majorité des SIRET utilisent le géocodage provenant de la base SIRENE géocodée par l’INSEE pour les études statistiques, à l’exception des entreprises créées au cours des derniers mois, pour lesquelles la géolocalisation est directement extraite de la base SIRENE).
     *
     * @var string
     */
    protected $longitude;
    /**
     * Dénomination usuelle de l'établissement (source : base SIRENE).
     *
     * @var string|null
     */
    protected $nomCommercial;
    /**
     * Numéro dans la voie (source : base SIRENE).
     *
     * @var string
     */
    protected $numeroVoie;
    /**
     * Dernier numéro de l'adresse lorsque que l'adresse est une plage de numéro. Par exemple "9-10". (source : base SIRENE).
     *
     * @var string
     */
    protected $dernierNumeroVoie;
    /**
     * Région de l'établissement (source : base SIRENE).
     *
     * @var string|null
     */
    protected $region;
    /**
     * le numéro unique de l'établissement.
     *
     * @var string
     */
    protected $siret;
    /**
     * Statut de diffusion de l'établissement. Toutes les établissements diffusibles ont le statut de diffusion à "O". Les établissements ayant fait l'objet d'une demande d'opposition ont le statut de diffusion à "P" pour diffusion partielle (source : base SIRENE).
     *
     * @var string
     */
    protected $statutDiffusionEtablissement;
    /**
     * Tranche d'effectif salarié de l'établissement (source : base SIRENE).
     *
     * @var string|null
     */
    protected $trancheEffectifSalarie;
    /**
     * Type de voie de l'adresse (source : base SIRENE).
     *
     * @var string
     */
    protected $typeVoie;
    /**
     * Activité principale de l'établissement (source : base SIRENE).
     *
     * @return string
     */
    public function getActivitePrincipale(): string
    {
        return $this->activitePrincipale;
    }
    /**
     * Activité principale de l'établissement (source : base SIRENE).
     *
     * @param string $activitePrincipale
     *
     * @return self
     */
    public function setActivitePrincipale(string $activitePrincipale): self
    {
        $this->initialized['activitePrincipale'] = true;
        $this->activitePrincipale = $activitePrincipale;
        return $this;
    }
    /**
     * Activité principale de l'établissement selon la nomenclature NAF 2025 (source : base SIRENE). Champ temporaire, supprimé à compter du 1er janvier 2027.
     *
     * @return string
     */
    public function getActivitePrincipaleNaf25(): string
    {
        return $this->activitePrincipaleNaf25;
    }
    /**
     * Activité principale de l'établissement selon la nomenclature NAF 2025 (source : base SIRENE). Champ temporaire, supprimé à compter du 1er janvier 2027.
     *
     * @param string $activitePrincipaleNaf25
     *
     * @return self
     */
    public function setActivitePrincipaleNaf25(string $activitePrincipaleNaf25): self
    {
        $this->initialized['activitePrincipaleNaf25'] = true;
        $this->activitePrincipaleNaf25 = $activitePrincipaleNaf25;
        return $this;
    }
    /**
     * Activité principale de l'établissement au Registre des Métiers (source : base SIRENE).
     *
     * @return string|null
     */
    public function getActivitePrincipaleRegistreMetier(): ?string
    {
        return $this->activitePrincipaleRegistreMetier;
    }
    /**
     * Activité principale de l'établissement au Registre des Métiers (source : base SIRENE).
     *
     * @param string|null $activitePrincipaleRegistreMetier
     *
     * @return self
     */
    public function setActivitePrincipaleRegistreMetier(?string $activitePrincipaleRegistreMetier): self
    {
        $this->initialized['activitePrincipaleRegistreMetier'] = true;
        $this->activitePrincipaleRegistreMetier = $activitePrincipaleRegistreMetier;
        return $this;
    }
    /**
     * Année de validité de la tranche d'effectif salarié de l'établissement (source : base SIRENE).
     *
     * @return string|null
     */
    public function getAnneeTrancheEffectifSalarie(): ?string
    {
        return $this->anneeTrancheEffectifSalarie;
    }
    /**
     * Année de validité de la tranche d'effectif salarié de l'établissement (source : base SIRENE).
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
     * Champ construit depuis les champs d'adresse de la base SIRENE : *complement adresse + numéro voie + indice repetition + type voie + libelle voie + distribution spéciale + (code postal + libelle commune | cedex + libelle cedex) + libelle commune étranger + libelle pays étranger*
     *
     * @return string
     */
    public function getAdresse(): string
    {
        return $this->adresse;
    }
    /**
     * Champ construit depuis les champs d'adresse de la base SIRENE : *complement adresse + numéro voie + indice repetition + type voie + libelle voie + distribution spéciale + (code postal + libelle commune | cedex + libelle cedex) + libelle commune étranger + libelle pays étranger*
     *
     * @param string $adresse
     *
     * @return self
     */
    public function setAdresse(string $adresse): self
    {
        $this->initialized['adresse'] = true;
        $this->adresse = $adresse;
        return $this;
    }
    /**
     * Caractère employeur de l'établissement (source : base SIRENE).
     *
     * @return string
     */
    public function getCaractereEmployeur(): string
    {
        return $this->caractereEmployeur;
    }
    /**
     * Caractère employeur de l'établissement (source : base SIRENE).
     *
     * @param string $caractereEmployeur
     *
     * @return self
     */
    public function setCaractereEmployeur(string $caractereEmployeur): self
    {
        $this->initialized['caractereEmployeur'] = true;
        $this->caractereEmployeur = $caractereEmployeur;
        return $this;
    }
    /**
     * Code cedex de l'établissement. Cette variable facultative est un élément constitutif de l'adresse. (source : base SIRENE).
     *
     * @return string|null
     */
    public function getCedex(): ?string
    {
        return $this->cedex;
    }
    /**
     * Code cedex de l'établissement. Cette variable facultative est un élément constitutif de l'adresse. (source : base SIRENE).
     *
     * @param string|null $cedex
     *
     * @return self
     */
    public function setCedex(?string $cedex): self
    {
        $this->initialized['cedex'] = true;
        $this->cedex = $cedex;
        return $this;
    }
    /**
     * Code pays de l'adresse d'un établissement situé à l'étranger (source : base SIRENE).
     *
     * @return string|null
     */
    public function getCodePaysEtranger(): ?string
    {
        return $this->codePaysEtranger;
    }
    /**
     * Code pays de l'adresse d'un établissement situé à l'étranger (source : base SIRENE).
     *
     * @param string|null $codePaysEtranger
     *
     * @return self
     */
    public function setCodePaysEtranger(?string $codePaysEtranger): self
    {
        $this->initialized['codePaysEtranger'] = true;
        $this->codePaysEtranger = $codePaysEtranger;
        return $this;
    }
    /**
     * Le code postal de l'adresse de l'établissement (source : base SIRENE).
     *
     * @return string|null
     */
    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }
    /**
     * Le code postal de l'adresse de l'établissement (source : base SIRENE).
     *
     * @param string|null $codePostal
     *
     * @return self
     */
    public function setCodePostal(?string $codePostal): self
    {
        $this->initialized['codePostal'] = true;
        $this->codePostal = $codePostal;
        return $this;
    }
    /**
     * Le code géographique de la commune de localisation de l'établissement, hors adresse à l'étranger (source : base SIRENE).
     *
     * @return string
     */
    public function getCommune(): string
    {
        return $this->commune;
    }
    /**
     * Le code géographique de la commune de localisation de l'établissement, hors adresse à l'étranger (source : base SIRENE).
     *
     * @param string $commune
     *
     * @return self
     */
    public function setCommune(string $commune): self
    {
        $this->initialized['commune'] = true;
        $this->commune = $commune;
        return $this;
    }
    /**
     * Le code géographique de la commune de localisation de l'établissement, hors adresse à l'étranger (source : base SIRENE).
     *
     * @return string|null
     */
    public function getComplementAdresse(): ?string
    {
        return $this->complementAdresse;
    }
    /**
     * Le code géographique de la commune de localisation de l'établissement, hors adresse à l'étranger (source : base SIRENE).
     *
     * @param string|null $complementAdresse
     *
     * @return self
     */
    public function setComplementAdresse(?string $complementAdresse): self
    {
        $this->initialized['complementAdresse'] = true;
        $this->complementAdresse = $complementAdresse;
        return $this;
    }
    /**
     * Coordonnées GPS de l'établissement (latitude, longitude).
     *
     * @return string|null
     */
    public function getCoordonnees(): ?string
    {
        return $this->coordonnees;
    }
    /**
     * Coordonnées GPS de l'établissement (latitude, longitude).
     *
     * @param string|null $coordonnees
     *
     * @return self
     */
    public function setCoordonnees(?string $coordonnees): self
    {
        $this->initialized['coordonnees'] = true;
        $this->coordonnees = $coordonnees;
        return $this;
    }
    /**
     * Date de création de l'établissement (source : base SIRENE).
     *
     * @return \DateTime|null
     */
    public function getDateCreation(): ?\DateTime
    {
        return $this->dateCreation;
    }
    /**
     * Date de création de l'établissement (source : base SIRENE).
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
     * Date de début d'une période de l'historique d'un établissement (source : base SIRENE).
     *
     * @return \DateTime|null
     */
    public function getDateDebutActivite(): ?\DateTime
    {
        return $this->dateDebutActivite;
    }
    /**
     * Date de début d'une période de l'historique d'un établissement (source : base SIRENE).
     *
     * @param \DateTime|null $dateDebutActivite
     *
     * @return self
     */
    public function setDateDebutActivite(?\DateTime $dateDebutActivite): self
    {
        $this->initialized['dateDebutActivite'] = true;
        $this->dateDebutActivite = $dateDebutActivite;
        return $this;
    }
    /**
     * Date de fermeture de l'établissement (source : base historique SIRENE).
     *
     * @return \DateTime|null
     */
    public function getDateFermeture(): ?\DateTime
    {
        return $this->dateFermeture;
    }
    /**
     * Date de fermeture de l'établissement (source : base historique SIRENE).
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
     * Date du dernier traitement de l'établissement dans le répertoire Sirene (source : base SIRENE). Obsolète.
     *
     * @return \DateTime|null
     */
    public function getDateMiseAJour(): ?\DateTime
    {
        return $this->dateMiseAJour;
    }
    /**
     * Date du dernier traitement de l'établissement dans le répertoire Sirene (source : base SIRENE). Obsolète.
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
     * Date du dernier traitement de l'établissement dans le répertoire Sirene (source : base SIRENE).
     *
     * @return \DateTime|null
     */
    public function getDateMiseAJourInsee(): ?\DateTime
    {
        return $this->dateMiseAJourInsee;
    }
    /**
     * Date du dernier traitement de l'établissement dans le répertoire Sirene (source : base SIRENE).
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
     * Code département de l'établissement (source : base SIRENE).
     *
     * @return string|null
     */
    public function getDepartement(): ?string
    {
        return $this->departement;
    }
    /**
     * Code département de l'établissement (source : base SIRENE).
     *
     * @param string|null $departement
     *
     * @return self
     */
    public function setDepartement(?string $departement): self
    {
        $this->initialized['departement'] = true;
        $this->departement = $departement;
        return $this;
    }
    /**
     * Distribution spéciale de l'établissement (source : base SIRENE).
     *
     * @return string|null
     */
    public function getDistributionSpeciale(): ?string
    {
        return $this->distributionSpeciale;
    }
    /**
     * Distribution spéciale de l'établissement (source : base SIRENE).
     *
     * @param string|null $distributionSpeciale
     *
     * @return self
     */
    public function setDistributionSpeciale(?string $distributionSpeciale): self
    {
        $this->initialized['distributionSpeciale'] = true;
        $this->distributionSpeciale = $distributionSpeciale;
        return $this;
    }
    /**
     * Numéro siren de l'EPCI.
     *
     * @return string|null
     */
    public function getEpci(): ?string
    {
        return $this->epci;
    }
    /**
     * Numéro siren de l'EPCI.
     *
     * @param string|null $epci
     *
     * @return self
     */
    public function setEpci(?string $epci): self
    {
        $this->initialized['epci'] = true;
        $this->epci = $epci;
        return $this;
    }
    /**
     * L'établissement est le siège de l'unité légale.
     *
     * @return bool
     */
    public function getEstSiege(): bool
    {
        return $this->estSiege;
    }
    /**
     * L'établissement est le siège de l'unité légale.
     *
     * @param bool $estSiege
     *
     * @return self
     */
    public function setEstSiege(bool $estSiege): self
    {
        $this->initialized['estSiege'] = true;
        $this->estSiege = $estSiege;
        return $this;
    }
    /**
     * État administratif de l'établissement (A : Actif, F : Fermé) (source : base SIRENE).
     *
     * @return string
     */
    public function getEtatAdministratif(): string
    {
        return $this->etatAdministratif;
    }
    /**
     * État administratif de l'établissement (A : Actif, F : Fermé) (source : base SIRENE).
     *
     * @param string $etatAdministratif
     *
     * @return self
     */
    public function setEtatAdministratif(string $etatAdministratif): self
    {
        $this->initialized['etatAdministratif'] = true;
        $this->etatAdministratif = $etatAdministratif;
        return $this;
    }
    /**
     * Obsolète : champs toujours vide.
     *
     * @return string|null
     */
    public function getGeoAdresse(): ?string
    {
        return $this->geoAdresse;
    }
    /**
     * Obsolète : champs toujours vide.
     *
     * @param string|null $geoAdresse
     *
     * @return self
     */
    public function setGeoAdresse(?string $geoAdresse): self
    {
        $this->initialized['geoAdresse'] = true;
        $this->geoAdresse = $geoAdresse;
        return $this;
    }
    /**
     * Obsolète : champs toujours vide.
     *
     * @return string|null
     */
    public function getGeoId(): ?string
    {
        return $this->geoId;
    }
    /**
     * Obsolète : champs toujours vide.
     *
     * @param string|null $geoId
     *
     * @return self
     */
    public function setGeoId(?string $geoId): self
    {
        $this->initialized['geoId'] = true;
        $this->geoId = $geoId;
        return $this;
    }
    /**
     * Indice de répétition du numéro dans la voie (B pour Bis, T pour TER, lettres ou chiffres pour identifier différents bâtiments à une même adresse...) (source : base SIRENE).
     *
     * @return string|null
     */
    public function getIndiceRepetition(): ?string
    {
        return $this->indiceRepetition;
    }
    /**
     * Indice de répétition du numéro dans la voie (B pour Bis, T pour TER, lettres ou chiffres pour identifier différents bâtiments à une même adresse...) (source : base SIRENE).
     *
     * @param string|null $indiceRepetition
     *
     * @return self
     */
    public function setIndiceRepetition(?string $indiceRepetition): self
    {
        $this->initialized['indiceRepetition'] = true;
        $this->indiceRepetition = $indiceRepetition;
        return $this;
    }
    /**
     * Latitude de l'établissement (source : la majorité des SIRET utilisent le géocodage provenant de la base SIRENE géocodée par l’INSEE pour les études statistiques, à l’exception des entreprises créées au cours des derniers mois, pour lesquelles la géolocalisation est directement extraite de la base SIRENE).
     *
     * @return string
     */
    public function getLatitude(): string
    {
        return $this->latitude;
    }
    /**
     * Latitude de l'établissement (source : la majorité des SIRET utilisent le géocodage provenant de la base SIRENE géocodée par l’INSEE pour les études statistiques, à l’exception des entreprises créées au cours des derniers mois, pour lesquelles la géolocalisation est directement extraite de la base SIRENE).
     *
     * @param string $latitude
     *
     * @return self
     */
    public function setLatitude(string $latitude): self
    {
        $this->initialized['latitude'] = true;
        $this->latitude = $latitude;
        return $this;
    }
    /**
     * Libellé associé au code cedex (source : base SIRENE).
     *
     * @return string|null
     */
    public function getLibelleCedex(): ?string
    {
        return $this->libelleCedex;
    }
    /**
     * Libellé associé au code cedex (source : base SIRENE).
     *
     * @param string|null $libelleCedex
     *
     * @return self
     */
    public function setLibelleCedex(?string $libelleCedex): self
    {
        $this->initialized['libelleCedex'] = true;
        $this->libelleCedex = $libelleCedex;
        return $this;
    }
    /**
     * Libellé de la commune (source : base SIRENE).
     *
     * @return string
     */
    public function getLibelleCommune(): string
    {
        return $this->libelleCommune;
    }
    /**
     * Libellé de la commune (source : base SIRENE).
     *
     * @param string $libelleCommune
     *
     * @return self
     */
    public function setLibelleCommune(string $libelleCommune): self
    {
        $this->initialized['libelleCommune'] = true;
        $this->libelleCommune = $libelleCommune;
        return $this;
    }
    /**
     * Libellé de la commune pour un établissement situé à l'étranger (source : base SIRENE).
     *
     * @return string|null
     */
    public function getLibelleCommuneEtranger(): ?string
    {
        return $this->libelleCommuneEtranger;
    }
    /**
     * Libellé de la commune pour un établissement situé à l'étranger (source : base SIRENE).
     *
     * @param string|null $libelleCommuneEtranger
     *
     * @return self
     */
    public function setLibelleCommuneEtranger(?string $libelleCommuneEtranger): self
    {
        $this->initialized['libelleCommuneEtranger'] = true;
        $this->libelleCommuneEtranger = $libelleCommuneEtranger;
        return $this;
    }
    /**
     * Libellé du pays pour un établissement situé à l'étranger (source : base SIRENE).
     *
     * @return string|null
     */
    public function getLibellePaysEtranger(): ?string
    {
        return $this->libellePaysEtranger;
    }
    /**
     * Libellé du pays pour un établissement situé à l'étranger (source : base SIRENE).
     *
     * @param string|null $libellePaysEtranger
     *
     * @return self
     */
    public function setLibellePaysEtranger(?string $libellePaysEtranger): self
    {
        $this->initialized['libellePaysEtranger'] = true;
        $this->libellePaysEtranger = $libellePaysEtranger;
        return $this;
    }
    /**
     * Libellé de la voie (source : base SIRENE).
     *
     * @return string
     */
    public function getLibelleVoie(): string
    {
        return $this->libelleVoie;
    }
    /**
     * Libellé de la voie (source : base SIRENE).
     *
     * @param string $libelleVoie
     *
     * @return self
     */
    public function setLibelleVoie(string $libelleVoie): self
    {
        $this->initialized['libelleVoie'] = true;
        $this->libelleVoie = $libelleVoie;
        return $this;
    }
    /**
     * Liste des enseignes de l'établissement (source : base SIRENE).
     *
     * @return list<string>|null
     */
    public function getListeEnseignes(): ?array
    {
        return $this->listeEnseignes;
    }
    /**
     * Liste des enseignes de l'établissement (source : base SIRENE).
     *
     * @param list<string>|null $listeEnseignes
     *
     * @return self
     */
    public function setListeEnseignes(?array $listeEnseignes): self
    {
        $this->initialized['listeEnseignes'] = true;
        $this->listeEnseignes = $listeEnseignes;
        return $this;
    }
    /**
     * Liste des identifiants FINESS Géographiques de l'établissement (source : Ministère des Solidarités et de la Santé ).
     *
     * @return list<string>|null
     */
    public function getListeFiness(): ?array
    {
        return $this->listeFiness;
    }
    /**
     * Liste des identifiants FINESS Géographiques de l'établissement (source : Ministère des Solidarités et de la Santé ).
     *
     * @param list<string>|null $listeFiness
     *
     * @return self
     */
    public function setListeFiness(?array $listeFiness): self
    {
        $this->initialized['listeFiness'] = true;
        $this->listeFiness = $listeFiness;
        return $this;
    }
    /**
     * Liste des identifiants bio de l'établissement (source : Agence Bio).
     *
     * @return list<string>
     */
    public function getListeIdBio(): array
    {
        return $this->listeIdBio;
    }
    /**
     * Liste des identifiants bio de l'établissement (source : Agence Bio).
     *
     * @param list<string> $listeIdBio
     *
     * @return self
     */
    public function setListeIdBio(array $listeIdBio): self
    {
        $this->initialized['listeIdBio'] = true;
        $this->listeIdBio = $listeIdBio;
        return $this;
    }
    /**
     * Liste des conventions collectives de l'établissement (source : Ministère du travail).
     *
     * @return list<string>
     */
    public function getListeIdcc(): array
    {
        return $this->listeIdcc;
    }
    /**
     * Liste des conventions collectives de l'établissement (source : Ministère du travail).
     *
     * @param list<string> $listeIdcc
     *
     * @return self
     */
    public function setListeIdcc(array $listeIdcc): self
    {
        $this->initialized['listeIdcc'] = true;
        $this->listeIdcc = $listeIdcc;
        return $this;
    }
    /**
     * Liste des numéro de déclaration d'activité des établissement organismes de formation (source : Ministère du Travail).
     *
     * @return list<string>
     */
    public function getListeIdOrganismeFormation(): array
    {
        return $this->listeIdOrganismeFormation;
    }
    /**
     * Liste des numéro de déclaration d'activité des établissement organismes de formation (source : Ministère du Travail).
     *
     * @param list<string> $listeIdOrganismeFormation
     *
     * @return self
     */
    public function setListeIdOrganismeFormation(array $listeIdOrganismeFormation): self
    {
        $this->initialized['listeIdOrganismeFormation'] = true;
        $this->listeIdOrganismeFormation = $listeIdOrganismeFormation;
        return $this;
    }
    /**
     * Liste des identifiants RGE de l'établissement (source : ADEME).
     *
     * @return list<string>
     */
    public function getListeRge(): array
    {
        return $this->listeRge;
    }
    /**
     * Liste des identifiants RGE de l'établissement (source : ADEME).
     *
     * @param list<string> $listeRge
     *
     * @return self
     */
    public function setListeRge(array $listeRge): self
    {
        $this->initialized['listeRge'] = true;
        $this->listeRge = $listeRge;
        return $this;
    }
    /**
     * Liste des identifiants UAI de l'établissements (source : Ministère de l'enseignement supérieur et de la recherche).
     *
     * @return list<string>
     */
    public function getListeUai(): array
    {
        return $this->listeUai;
    }
    /**
     * Liste des identifiants UAI de l'établissements (source : Ministère de l'enseignement supérieur et de la recherche).
     *
     * @param list<string> $listeUai
     *
     * @return self
     */
    public function setListeUai(array $listeUai): self
    {
        $this->initialized['listeUai'] = true;
        $this->listeUai = $listeUai;
        return $this;
    }
    /**
     * Longitude de l'établissement (source : la majorité des SIRET utilisent le géocodage provenant de la base SIRENE géocodée par l’INSEE pour les études statistiques, à l’exception des entreprises créées au cours des derniers mois, pour lesquelles la géolocalisation est directement extraite de la base SIRENE).
     *
     * @return string
     */
    public function getLongitude(): string
    {
        return $this->longitude;
    }
    /**
     * Longitude de l'établissement (source : la majorité des SIRET utilisent le géocodage provenant de la base SIRENE géocodée par l’INSEE pour les études statistiques, à l’exception des entreprises créées au cours des derniers mois, pour lesquelles la géolocalisation est directement extraite de la base SIRENE).
     *
     * @param string $longitude
     *
     * @return self
     */
    public function setLongitude(string $longitude): self
    {
        $this->initialized['longitude'] = true;
        $this->longitude = $longitude;
        return $this;
    }
    /**
     * Dénomination usuelle de l'établissement (source : base SIRENE).
     *
     * @return string|null
     */
    public function getNomCommercial(): ?string
    {
        return $this->nomCommercial;
    }
    /**
     * Dénomination usuelle de l'établissement (source : base SIRENE).
     *
     * @param string|null $nomCommercial
     *
     * @return self
     */
    public function setNomCommercial(?string $nomCommercial): self
    {
        $this->initialized['nomCommercial'] = true;
        $this->nomCommercial = $nomCommercial;
        return $this;
    }
    /**
     * Numéro dans la voie (source : base SIRENE).
     *
     * @return string
     */
    public function getNumeroVoie(): string
    {
        return $this->numeroVoie;
    }
    /**
     * Numéro dans la voie (source : base SIRENE).
     *
     * @param string $numeroVoie
     *
     * @return self
     */
    public function setNumeroVoie(string $numeroVoie): self
    {
        $this->initialized['numeroVoie'] = true;
        $this->numeroVoie = $numeroVoie;
        return $this;
    }
    /**
     * Dernier numéro de l'adresse lorsque que l'adresse est une plage de numéro. Par exemple "9-10". (source : base SIRENE).
     *
     * @return string
     */
    public function getDernierNumeroVoie(): string
    {
        return $this->dernierNumeroVoie;
    }
    /**
     * Dernier numéro de l'adresse lorsque que l'adresse est une plage de numéro. Par exemple "9-10". (source : base SIRENE).
     *
     * @param string $dernierNumeroVoie
     *
     * @return self
     */
    public function setDernierNumeroVoie(string $dernierNumeroVoie): self
    {
        $this->initialized['dernierNumeroVoie'] = true;
        $this->dernierNumeroVoie = $dernierNumeroVoie;
        return $this;
    }
    /**
     * Région de l'établissement (source : base SIRENE).
     *
     * @return string|null
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }
    /**
     * Région de l'établissement (source : base SIRENE).
     *
     * @param string|null $region
     *
     * @return self
     */
    public function setRegion(?string $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * le numéro unique de l'établissement.
     *
     * @return string
     */
    public function getSiret(): string
    {
        return $this->siret;
    }
    /**
     * le numéro unique de l'établissement.
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
     * Statut de diffusion de l'établissement. Toutes les établissements diffusibles ont le statut de diffusion à "O". Les établissements ayant fait l'objet d'une demande d'opposition ont le statut de diffusion à "P" pour diffusion partielle (source : base SIRENE).
     *
     * @return string
     */
    public function getStatutDiffusionEtablissement(): string
    {
        return $this->statutDiffusionEtablissement;
    }
    /**
     * Statut de diffusion de l'établissement. Toutes les établissements diffusibles ont le statut de diffusion à "O". Les établissements ayant fait l'objet d'une demande d'opposition ont le statut de diffusion à "P" pour diffusion partielle (source : base SIRENE).
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
     * Tranche d'effectif salarié de l'établissement (source : base SIRENE).
     *
     * @return string|null
     */
    public function getTrancheEffectifSalarie(): ?string
    {
        return $this->trancheEffectifSalarie;
    }
    /**
     * Tranche d'effectif salarié de l'établissement (source : base SIRENE).
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
     * Type de voie de l'adresse (source : base SIRENE).
     *
     * @return string
     */
    public function getTypeVoie(): string
    {
        return $this->typeVoie;
    }
    /**
     * Type de voie de l'adresse (source : base SIRENE).
     *
     * @param string $typeVoie
     *
     * @return self
     */
    public function setTypeVoie(string $typeVoie): self
    {
        $this->initialized['typeVoie'] = true;
        $this->typeVoie = $typeVoie;
        return $this;
    }
}