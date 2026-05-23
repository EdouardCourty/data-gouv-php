<?php

namespace Ecourty\DataGouv\DataServices\Entreprise\Client\Model;

class ResultComplements extends \ArrayObject
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
     * @var CollectiviteTerritoriale
     */
    protected $collectiviteTerritoriale;
    /**
     * Indique si au moins un établissement a une convention collective renseignée
     *
     * @var bool
     */
    protected $conventionCollectiveRenseignee;
    /**
     * Liste des conventions collectives de l'unité légale (source : Ministère du travail)
     *
     * @var list<string>
     */
    protected $listeIdcc;
    /**
     * Liste des identifiants FINESS Juridiques de l'entreprise et de ses établissements. (source : Ministère des Solidarités et de la Santé ).
     *
     * @var list<string>
     */
    protected $listeFinessJuridique;
    /**
     * Indique si au moins un établissement a un indice égalité professionnel H/F renseigné
     *
     * @var bool
     */
    protected $egaproRenseignee;
    /**
     * Indique si l'entreprise est labelisée Relations fournisseurs et achats responsables (RFAR)
     *
     * @var bool
     */
    protected $estAchatsResponsables;
    /**
     * Indique si l'entreprise a au moins un établissement avec un résultat de contrôle sanitaire Alim'Confiance.
     *
     * @var bool
     */
    protected $estAlimConfiance;
    /**
     * Association (source : INSEE)
     *
     * @var bool
     */
    protected $estAssociation;
    /**
     * Entreprise présente dans l'Annuaire des avocats de France. (source: Conseil national des barreaux)
     *
     * @var bool
     */
    protected $estAvocat;
    /**
     * Entreprise ayant au moins un établissement certifié bio (source: Agence Bio)
     *
     * @var bool
     */
    protected $estBio;
    /**
     * Entreprise individuelle
     *
     * @var bool
     */
    protected $estEntrepreneurIndividuel;
    /**
     * Entreprise ayant une licence d'entrepreneur du spectacle (source : Ministère de la Culture)
     *
     * @var bool
     */
    protected $estEntrepreneurSpectacle;
    /**
     * Entreprise d'économie sociale et solidaire (source : ESS France et INSEE)
     *
     * @var bool
     */
    protected $estEss;
    /**
     * Entreprise ayant au moins un établissement FINESS (source : Ministère des Solidarités et de la Santé)
     *
     * @var bool
     */
    protected $estFiness;
    /**
     * Entreprise ayant au moins un établissement organisme de formation (source : Ministère du Travail)
     *
     * @var bool
     */
    protected $estOrganismeFormation;
    /**
     * Entreprise ayant une certification de la marque « Qualiopi » (source : Ministère du Travail)
     *
     * @var bool
     */
    protected $estQualiopi;
    /**
     * Liste des numéro de déclaration d’activité des établissement organismes de formation (source : Ministère du Travail).
     *
     * @var list<string>
     */
    protected $listeIdOrganismeFormation;
    /**
     * Entreprise ayant au moins un établissement RGE (source : ADEME)
     *
     * @var bool
     */
    protected $estRge;
    /**
     * ⚠️ Déprécié : utiliser le champ est_administration à la place.
     *
     * @deprecated
     *
     * @var bool|null
     */
    protected $estServicePublic;
    /**
     * Uniquement les structures reconnues comme administration.
     * Attention : Ce champ se base sur cette liste <a href=https://www.data.gouv.fr/datasets/liste-des-administrations-ayant-acces-a-lespace-agent-de-lannuaire-des-entreprises/>ici</a>.
     * Ce champ n'est pas exhaustif et peut retourner des faux positifs.
     *
     * @var bool
     */
    protected $estAdministration;
    /**
     * @deprecated
     *
     * @var bool|null
     */
    protected $estL1003;
    /**
     * Structure d'insertion par l'activité économique (source : Marché de l'Inclusion)
     *
     * @var bool
     */
    protected $estSiae;
    /**
     * Société qui appartient au champ des sociétés à mission.
     *
     * @var bool
     */
    protected $estSocieteMission;
    /**
     * Entreprise ayant au moins un établissement UAI (source : Ministère de l'enseignement supérieur et de la recherche)
     *
     * @var bool
     */
    protected $estUai;
    /**
     * Entreprise du Patrimoine Vivant (EPV)
     *
     * @var bool
     */
    protected $estPatrimoineVivant;
    /**
     * Entreprise ayant un bilan ges publié (source : ADEME)
     *
     * @var bool
     */
    protected $bilanGesRenseigne;
    /**
     * Numéro au Répertoire National des Associations (RNA) (source : base SIRENE)
     *
     * @var string|null
     */
    protected $identifiantAssociation;
    /**
     * Statut des établissements ayant fait une demande de licence d'entrepreneur du spectacle (source : Ministère de la Culture)
     *
     * @var string|null
     */
    protected $statutEntrepreneurSpectacle;
    /**
     * Type de structure de l'inclusion (source : Marché de l'Inclusion)
     *
     * @var string|null
     */
    protected $typeSiae;
    /**
     * @return CollectiviteTerritoriale
     */
    public function getCollectiviteTerritoriale(): CollectiviteTerritoriale
    {
        return $this->collectiviteTerritoriale;
    }
    /**
     * @param CollectiviteTerritoriale $collectiviteTerritoriale
     *
     * @return self
     */
    public function setCollectiviteTerritoriale(CollectiviteTerritoriale $collectiviteTerritoriale): self
    {
        $this->initialized['collectiviteTerritoriale'] = true;
        $this->collectiviteTerritoriale = $collectiviteTerritoriale;
        return $this;
    }
    /**
     * Indique si au moins un établissement a une convention collective renseignée
     *
     * @return bool
     */
    public function getConventionCollectiveRenseignee(): bool
    {
        return $this->conventionCollectiveRenseignee;
    }
    /**
     * Indique si au moins un établissement a une convention collective renseignée
     *
     * @param bool $conventionCollectiveRenseignee
     *
     * @return self
     */
    public function setConventionCollectiveRenseignee(bool $conventionCollectiveRenseignee): self
    {
        $this->initialized['conventionCollectiveRenseignee'] = true;
        $this->conventionCollectiveRenseignee = $conventionCollectiveRenseignee;
        return $this;
    }
    /**
     * Liste des conventions collectives de l'unité légale (source : Ministère du travail)
     *
     * @return list<string>
     */
    public function getListeIdcc(): array
    {
        return $this->listeIdcc;
    }
    /**
     * Liste des conventions collectives de l'unité légale (source : Ministère du travail)
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
     * Liste des identifiants FINESS Juridiques de l'entreprise et de ses établissements. (source : Ministère des Solidarités et de la Santé ).
     *
     * @return list<string>
     */
    public function getListeFinessJuridique(): array
    {
        return $this->listeFinessJuridique;
    }
    /**
     * Liste des identifiants FINESS Juridiques de l'entreprise et de ses établissements. (source : Ministère des Solidarités et de la Santé ).
     *
     * @param list<string> $listeFinessJuridique
     *
     * @return self
     */
    public function setListeFinessJuridique(array $listeFinessJuridique): self
    {
        $this->initialized['listeFinessJuridique'] = true;
        $this->listeFinessJuridique = $listeFinessJuridique;
        return $this;
    }
    /**
     * Indique si au moins un établissement a un indice égalité professionnel H/F renseigné
     *
     * @return bool
     */
    public function getEgaproRenseignee(): bool
    {
        return $this->egaproRenseignee;
    }
    /**
     * Indique si au moins un établissement a un indice égalité professionnel H/F renseigné
     *
     * @param bool $egaproRenseignee
     *
     * @return self
     */
    public function setEgaproRenseignee(bool $egaproRenseignee): self
    {
        $this->initialized['egaproRenseignee'] = true;
        $this->egaproRenseignee = $egaproRenseignee;
        return $this;
    }
    /**
     * Indique si l'entreprise est labelisée Relations fournisseurs et achats responsables (RFAR)
     *
     * @return bool
     */
    public function getEstAchatsResponsables(): bool
    {
        return $this->estAchatsResponsables;
    }
    /**
     * Indique si l'entreprise est labelisée Relations fournisseurs et achats responsables (RFAR)
     *
     * @param bool $estAchatsResponsables
     *
     * @return self
     */
    public function setEstAchatsResponsables(bool $estAchatsResponsables): self
    {
        $this->initialized['estAchatsResponsables'] = true;
        $this->estAchatsResponsables = $estAchatsResponsables;
        return $this;
    }
    /**
     * Indique si l'entreprise a au moins un établissement avec un résultat de contrôle sanitaire Alim'Confiance.
     *
     * @return bool
     */
    public function getEstAlimConfiance(): bool
    {
        return $this->estAlimConfiance;
    }
    /**
     * Indique si l'entreprise a au moins un établissement avec un résultat de contrôle sanitaire Alim'Confiance.
     *
     * @param bool $estAlimConfiance
     *
     * @return self
     */
    public function setEstAlimConfiance(bool $estAlimConfiance): self
    {
        $this->initialized['estAlimConfiance'] = true;
        $this->estAlimConfiance = $estAlimConfiance;
        return $this;
    }
    /**
     * Association (source : INSEE)
     *
     * @return bool
     */
    public function getEstAssociation(): bool
    {
        return $this->estAssociation;
    }
    /**
     * Association (source : INSEE)
     *
     * @param bool $estAssociation
     *
     * @return self
     */
    public function setEstAssociation(bool $estAssociation): self
    {
        $this->initialized['estAssociation'] = true;
        $this->estAssociation = $estAssociation;
        return $this;
    }
    /**
     * Entreprise présente dans l'Annuaire des avocats de France. (source: Conseil national des barreaux)
     *
     * @return bool
     */
    public function getEstAvocat(): bool
    {
        return $this->estAvocat;
    }
    /**
     * Entreprise présente dans l'Annuaire des avocats de France. (source: Conseil national des barreaux)
     *
     * @param bool $estAvocat
     *
     * @return self
     */
    public function setEstAvocat(bool $estAvocat): self
    {
        $this->initialized['estAvocat'] = true;
        $this->estAvocat = $estAvocat;
        return $this;
    }
    /**
     * Entreprise ayant au moins un établissement certifié bio (source: Agence Bio)
     *
     * @return bool
     */
    public function getEstBio(): bool
    {
        return $this->estBio;
    }
    /**
     * Entreprise ayant au moins un établissement certifié bio (source: Agence Bio)
     *
     * @param bool $estBio
     *
     * @return self
     */
    public function setEstBio(bool $estBio): self
    {
        $this->initialized['estBio'] = true;
        $this->estBio = $estBio;
        return $this;
    }
    /**
     * Entreprise individuelle
     *
     * @return bool
     */
    public function getEstEntrepreneurIndividuel(): bool
    {
        return $this->estEntrepreneurIndividuel;
    }
    /**
     * Entreprise individuelle
     *
     * @param bool $estEntrepreneurIndividuel
     *
     * @return self
     */
    public function setEstEntrepreneurIndividuel(bool $estEntrepreneurIndividuel): self
    {
        $this->initialized['estEntrepreneurIndividuel'] = true;
        $this->estEntrepreneurIndividuel = $estEntrepreneurIndividuel;
        return $this;
    }
    /**
     * Entreprise ayant une licence d'entrepreneur du spectacle (source : Ministère de la Culture)
     *
     * @return bool
     */
    public function getEstEntrepreneurSpectacle(): bool
    {
        return $this->estEntrepreneurSpectacle;
    }
    /**
     * Entreprise ayant une licence d'entrepreneur du spectacle (source : Ministère de la Culture)
     *
     * @param bool $estEntrepreneurSpectacle
     *
     * @return self
     */
    public function setEstEntrepreneurSpectacle(bool $estEntrepreneurSpectacle): self
    {
        $this->initialized['estEntrepreneurSpectacle'] = true;
        $this->estEntrepreneurSpectacle = $estEntrepreneurSpectacle;
        return $this;
    }
    /**
     * Entreprise d'économie sociale et solidaire (source : ESS France et INSEE)
     *
     * @return bool
     */
    public function getEstEss(): bool
    {
        return $this->estEss;
    }
    /**
     * Entreprise d'économie sociale et solidaire (source : ESS France et INSEE)
     *
     * @param bool $estEss
     *
     * @return self
     */
    public function setEstEss(bool $estEss): self
    {
        $this->initialized['estEss'] = true;
        $this->estEss = $estEss;
        return $this;
    }
    /**
     * Entreprise ayant au moins un établissement FINESS (source : Ministère des Solidarités et de la Santé)
     *
     * @return bool
     */
    public function getEstFiness(): bool
    {
        return $this->estFiness;
    }
    /**
     * Entreprise ayant au moins un établissement FINESS (source : Ministère des Solidarités et de la Santé)
     *
     * @param bool $estFiness
     *
     * @return self
     */
    public function setEstFiness(bool $estFiness): self
    {
        $this->initialized['estFiness'] = true;
        $this->estFiness = $estFiness;
        return $this;
    }
    /**
     * Entreprise ayant au moins un établissement organisme de formation (source : Ministère du Travail)
     *
     * @return bool
     */
    public function getEstOrganismeFormation(): bool
    {
        return $this->estOrganismeFormation;
    }
    /**
     * Entreprise ayant au moins un établissement organisme de formation (source : Ministère du Travail)
     *
     * @param bool $estOrganismeFormation
     *
     * @return self
     */
    public function setEstOrganismeFormation(bool $estOrganismeFormation): self
    {
        $this->initialized['estOrganismeFormation'] = true;
        $this->estOrganismeFormation = $estOrganismeFormation;
        return $this;
    }
    /**
     * Entreprise ayant une certification de la marque « Qualiopi » (source : Ministère du Travail)
     *
     * @return bool
     */
    public function getEstQualiopi(): bool
    {
        return $this->estQualiopi;
    }
    /**
     * Entreprise ayant une certification de la marque « Qualiopi » (source : Ministère du Travail)
     *
     * @param bool $estQualiopi
     *
     * @return self
     */
    public function setEstQualiopi(bool $estQualiopi): self
    {
        $this->initialized['estQualiopi'] = true;
        $this->estQualiopi = $estQualiopi;
        return $this;
    }
    /**
     * Liste des numéro de déclaration d’activité des établissement organismes de formation (source : Ministère du Travail).
     *
     * @return list<string>
     */
    public function getListeIdOrganismeFormation(): array
    {
        return $this->listeIdOrganismeFormation;
    }
    /**
     * Liste des numéro de déclaration d’activité des établissement organismes de formation (source : Ministère du Travail).
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
     * Entreprise ayant au moins un établissement RGE (source : ADEME)
     *
     * @return bool
     */
    public function getEstRge(): bool
    {
        return $this->estRge;
    }
    /**
     * Entreprise ayant au moins un établissement RGE (source : ADEME)
     *
     * @param bool $estRge
     *
     * @return self
     */
    public function setEstRge(bool $estRge): self
    {
        $this->initialized['estRge'] = true;
        $this->estRge = $estRge;
        return $this;
    }
    /**
     * ⚠️ Déprécié : utiliser le champ est_administration à la place.
     *
     * @deprecated
     *
     * @return bool|null
     */
    public function getEstServicePublic(): ?bool
    {
        return $this->estServicePublic;
    }
    /**
     * ⚠️ Déprécié : utiliser le champ est_administration à la place.
     *
     * @param bool|null $estServicePublic
     *
     * @deprecated
     *
     * @return self
     */
    public function setEstServicePublic(?bool $estServicePublic): self
    {
        $this->initialized['estServicePublic'] = true;
        $this->estServicePublic = $estServicePublic;
        return $this;
    }
    /**
     * Uniquement les structures reconnues comme administration.
     * Attention : Ce champ se base sur cette liste <a href=https://www.data.gouv.fr/datasets/liste-des-administrations-ayant-acces-a-lespace-agent-de-lannuaire-des-entreprises/>ici</a>.
     * Ce champ n'est pas exhaustif et peut retourner des faux positifs.
     *
     * @return bool
     */
    public function getEstAdministration(): bool
    {
        return $this->estAdministration;
    }
    /**
    * Uniquement les structures reconnues comme administration.
    Attention : Ce champ se base sur cette liste <a href=https://www.data.gouv.fr/datasets/liste-des-administrations-ayant-acces-a-lespace-agent-de-lannuaire-des-entreprises/>ici</a>.
    Ce champ n'est pas exhaustif et peut retourner des faux positifs.
    *
    * @param bool $estAdministration
    *
    * @return self
    */
    public function setEstAdministration(bool $estAdministration): self
    {
        $this->initialized['estAdministration'] = true;
        $this->estAdministration = $estAdministration;
        return $this;
    }
    /**
     * @deprecated
     *
     * @return bool|null
     */
    public function getEstL1003(): ?bool
    {
        return $this->estL1003;
    }
    /**
     * @param bool|null $estL1003
     *
     * @deprecated
     *
     * @return self
     */
    public function setEstL1003(?bool $estL1003): self
    {
        $this->initialized['estL1003'] = true;
        $this->estL1003 = $estL1003;
        return $this;
    }
    /**
     * Structure d'insertion par l'activité économique (source : Marché de l'Inclusion)
     *
     * @return bool
     */
    public function getEstSiae(): bool
    {
        return $this->estSiae;
    }
    /**
     * Structure d'insertion par l'activité économique (source : Marché de l'Inclusion)
     *
     * @param bool $estSiae
     *
     * @return self
     */
    public function setEstSiae(bool $estSiae): self
    {
        $this->initialized['estSiae'] = true;
        $this->estSiae = $estSiae;
        return $this;
    }
    /**
     * Société qui appartient au champ des sociétés à mission.
     *
     * @return bool
     */
    public function getEstSocieteMission(): bool
    {
        return $this->estSocieteMission;
    }
    /**
     * Société qui appartient au champ des sociétés à mission.
     *
     * @param bool $estSocieteMission
     *
     * @return self
     */
    public function setEstSocieteMission(bool $estSocieteMission): self
    {
        $this->initialized['estSocieteMission'] = true;
        $this->estSocieteMission = $estSocieteMission;
        return $this;
    }
    /**
     * Entreprise ayant au moins un établissement UAI (source : Ministère de l'enseignement supérieur et de la recherche)
     *
     * @return bool
     */
    public function getEstUai(): bool
    {
        return $this->estUai;
    }
    /**
     * Entreprise ayant au moins un établissement UAI (source : Ministère de l'enseignement supérieur et de la recherche)
     *
     * @param bool $estUai
     *
     * @return self
     */
    public function setEstUai(bool $estUai): self
    {
        $this->initialized['estUai'] = true;
        $this->estUai = $estUai;
        return $this;
    }
    /**
     * Entreprise du Patrimoine Vivant (EPV)
     *
     * @return bool
     */
    public function getEstPatrimoineVivant(): bool
    {
        return $this->estPatrimoineVivant;
    }
    /**
     * Entreprise du Patrimoine Vivant (EPV)
     *
     * @param bool $estPatrimoineVivant
     *
     * @return self
     */
    public function setEstPatrimoineVivant(bool $estPatrimoineVivant): self
    {
        $this->initialized['estPatrimoineVivant'] = true;
        $this->estPatrimoineVivant = $estPatrimoineVivant;
        return $this;
    }
    /**
     * Entreprise ayant un bilan ges publié (source : ADEME)
     *
     * @return bool
     */
    public function getBilanGesRenseigne(): bool
    {
        return $this->bilanGesRenseigne;
    }
    /**
     * Entreprise ayant un bilan ges publié (source : ADEME)
     *
     * @param bool $bilanGesRenseigne
     *
     * @return self
     */
    public function setBilanGesRenseigne(bool $bilanGesRenseigne): self
    {
        $this->initialized['bilanGesRenseigne'] = true;
        $this->bilanGesRenseigne = $bilanGesRenseigne;
        return $this;
    }
    /**
     * Numéro au Répertoire National des Associations (RNA) (source : base SIRENE)
     *
     * @return string|null
     */
    public function getIdentifiantAssociation(): ?string
    {
        return $this->identifiantAssociation;
    }
    /**
     * Numéro au Répertoire National des Associations (RNA) (source : base SIRENE)
     *
     * @param string|null $identifiantAssociation
     *
     * @return self
     */
    public function setIdentifiantAssociation(?string $identifiantAssociation): self
    {
        $this->initialized['identifiantAssociation'] = true;
        $this->identifiantAssociation = $identifiantAssociation;
        return $this;
    }
    /**
     * Statut des établissements ayant fait une demande de licence d'entrepreneur du spectacle (source : Ministère de la Culture)
     *
     * @return string|null
     */
    public function getStatutEntrepreneurSpectacle(): ?string
    {
        return $this->statutEntrepreneurSpectacle;
    }
    /**
     * Statut des établissements ayant fait une demande de licence d'entrepreneur du spectacle (source : Ministère de la Culture)
     *
     * @param string|null $statutEntrepreneurSpectacle
     *
     * @return self
     */
    public function setStatutEntrepreneurSpectacle(?string $statutEntrepreneurSpectacle): self
    {
        $this->initialized['statutEntrepreneurSpectacle'] = true;
        $this->statutEntrepreneurSpectacle = $statutEntrepreneurSpectacle;
        return $this;
    }
    /**
     * Type de structure de l'inclusion (source : Marché de l'Inclusion)
     *
     * @return string|null
     */
    public function getTypeSiae(): ?string
    {
        return $this->typeSiae;
    }
    /**
     * Type de structure de l'inclusion (source : Marché de l'Inclusion)
     *
     * @param string|null $typeSiae
     *
     * @return self
     */
    public function setTypeSiae(?string $typeSiae): self
    {
        $this->initialized['typeSiae'] = true;
        $this->typeSiae = $typeSiae;
        return $this;
    }
}