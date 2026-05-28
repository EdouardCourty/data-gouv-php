<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Model;

class Adresse
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
     * Complément d'adresse de l'établissement
     *
     * @var string
     */
    protected $complementAdresseEtablissement;
    /**
     * Numéro dans la voie
     *
     * @var string
     */
    protected $numeroVoieEtablissement;
    /**
     * Indice de répétition dans la voie
     *
     * @var string
     */
    protected $indiceRepetitionEtablissement;
    /**
     * Numéro de la dernière adresse dans la voie
     *
     * @var string
     */
    protected $dernierNumeroVoieEtablissement;
    /**
     * Indice de répétition de la dernière adresse dans la voie
     *
     * @var string
     */
    protected $indiceRepetitionDernierNumeroVoieEtablissement;
    /**
     * Type de la voie
     *
     * @var string
     */
    protected $typeVoieEtablissement;
    /**
     * Libellé de la voie
     *
     * @var string
     */
    protected $libelleVoieEtablissement;
    /**
     * Code postal
     *
     * @var string
     */
    protected $codePostalEtablissement;
    /**
     * Libellé de la commune pour les adresses en France
     *
     * @var string
     */
    protected $libelleCommuneEtablissement;
    /**
     * Libellé complémentaire pour une adresse à l'étranger
     *
     * @var string
     */
    protected $libelleCommuneEtrangerEtablissement;
    /**
     * Distribution spéciale (BP par ex)
     *
     * @var string
     */
    protected $distributionSpecialeEtablissement;
    /**
     * Code commune de localisation de l’établissement hors établissements situés à l’étranger (Le code commune est défini dans le <a href='https://www.insee.fr/fr/information/2028028'>code officiel géographique (COG)</a>)
     *
     * @var string
     */
    protected $codeCommuneEtablissement;
    /**
     * Numéro de Cedex
     *
     * @var string
     */
    protected $codeCedexEtablissement;
    /**
     * Libellé correspondant au numéro de Cedex (variable codeCedexEtablissement)
     *
     * @var string
     */
    protected $libelleCedexEtablissement;
    /**
     * Code pays pour les établissements situés à l’étranger
     *
     * @var string
     */
    protected $codePaysEtrangerEtablissement;
    /**
     * Libellé du pays pour les adresses à l’étranger
     *
     * @var string
     */
    protected $libellePaysEtrangerEtablissement;
    /**
     * IdentifiantAdresseEtablissement
     *
     * @var string
     */
    protected $identifiantAdresseEtablissement;
    /**
     * coordonneeLambertAbscisseEtablissement
     *
     * @var string
     */
    protected $coordonneeLambertAbscisseEtablissement;
    /**
     * coordonneeLambertOrdonneeEtablissement
     *
     * @var string
     */
    protected $coordonneeLambertOrdonneeEtablissement;
    /**
     * Complément d'adresse de l'établissement
     *
     * @return string
     */
    public function getComplementAdresseEtablissement(): string
    {
        return $this->complementAdresseEtablissement;
    }
    /**
     * Complément d'adresse de l'établissement
     *
     * @param string $complementAdresseEtablissement
     *
     * @return self
     */
    public function setComplementAdresseEtablissement(string $complementAdresseEtablissement): self
    {
        $this->initialized['complementAdresseEtablissement'] = true;
        $this->complementAdresseEtablissement = $complementAdresseEtablissement;
        return $this;
    }
    /**
     * Numéro dans la voie
     *
     * @return string
     */
    public function getNumeroVoieEtablissement(): string
    {
        return $this->numeroVoieEtablissement;
    }
    /**
     * Numéro dans la voie
     *
     * @param string $numeroVoieEtablissement
     *
     * @return self
     */
    public function setNumeroVoieEtablissement(string $numeroVoieEtablissement): self
    {
        $this->initialized['numeroVoieEtablissement'] = true;
        $this->numeroVoieEtablissement = $numeroVoieEtablissement;
        return $this;
    }
    /**
     * Indice de répétition dans la voie
     *
     * @return string
     */
    public function getIndiceRepetitionEtablissement(): string
    {
        return $this->indiceRepetitionEtablissement;
    }
    /**
     * Indice de répétition dans la voie
     *
     * @param string $indiceRepetitionEtablissement
     *
     * @return self
     */
    public function setIndiceRepetitionEtablissement(string $indiceRepetitionEtablissement): self
    {
        $this->initialized['indiceRepetitionEtablissement'] = true;
        $this->indiceRepetitionEtablissement = $indiceRepetitionEtablissement;
        return $this;
    }
    /**
     * Numéro de la dernière adresse dans la voie
     *
     * @return string
     */
    public function getDernierNumeroVoieEtablissement(): string
    {
        return $this->dernierNumeroVoieEtablissement;
    }
    /**
     * Numéro de la dernière adresse dans la voie
     *
     * @param string $dernierNumeroVoieEtablissement
     *
     * @return self
     */
    public function setDernierNumeroVoieEtablissement(string $dernierNumeroVoieEtablissement): self
    {
        $this->initialized['dernierNumeroVoieEtablissement'] = true;
        $this->dernierNumeroVoieEtablissement = $dernierNumeroVoieEtablissement;
        return $this;
    }
    /**
     * Indice de répétition de la dernière adresse dans la voie
     *
     * @return string
     */
    public function getIndiceRepetitionDernierNumeroVoieEtablissement(): string
    {
        return $this->indiceRepetitionDernierNumeroVoieEtablissement;
    }
    /**
     * Indice de répétition de la dernière adresse dans la voie
     *
     * @param string $indiceRepetitionDernierNumeroVoieEtablissement
     *
     * @return self
     */
    public function setIndiceRepetitionDernierNumeroVoieEtablissement(string $indiceRepetitionDernierNumeroVoieEtablissement): self
    {
        $this->initialized['indiceRepetitionDernierNumeroVoieEtablissement'] = true;
        $this->indiceRepetitionDernierNumeroVoieEtablissement = $indiceRepetitionDernierNumeroVoieEtablissement;
        return $this;
    }
    /**
     * Type de la voie
     *
     * @return string
     */
    public function getTypeVoieEtablissement(): string
    {
        return $this->typeVoieEtablissement;
    }
    /**
     * Type de la voie
     *
     * @param string $typeVoieEtablissement
     *
     * @return self
     */
    public function setTypeVoieEtablissement(string $typeVoieEtablissement): self
    {
        $this->initialized['typeVoieEtablissement'] = true;
        $this->typeVoieEtablissement = $typeVoieEtablissement;
        return $this;
    }
    /**
     * Libellé de la voie
     *
     * @return string
     */
    public function getLibelleVoieEtablissement(): string
    {
        return $this->libelleVoieEtablissement;
    }
    /**
     * Libellé de la voie
     *
     * @param string $libelleVoieEtablissement
     *
     * @return self
     */
    public function setLibelleVoieEtablissement(string $libelleVoieEtablissement): self
    {
        $this->initialized['libelleVoieEtablissement'] = true;
        $this->libelleVoieEtablissement = $libelleVoieEtablissement;
        return $this;
    }
    /**
     * Code postal
     *
     * @return string
     */
    public function getCodePostalEtablissement(): string
    {
        return $this->codePostalEtablissement;
    }
    /**
     * Code postal
     *
     * @param string $codePostalEtablissement
     *
     * @return self
     */
    public function setCodePostalEtablissement(string $codePostalEtablissement): self
    {
        $this->initialized['codePostalEtablissement'] = true;
        $this->codePostalEtablissement = $codePostalEtablissement;
        return $this;
    }
    /**
     * Libellé de la commune pour les adresses en France
     *
     * @return string
     */
    public function getLibelleCommuneEtablissement(): string
    {
        return $this->libelleCommuneEtablissement;
    }
    /**
     * Libellé de la commune pour les adresses en France
     *
     * @param string $libelleCommuneEtablissement
     *
     * @return self
     */
    public function setLibelleCommuneEtablissement(string $libelleCommuneEtablissement): self
    {
        $this->initialized['libelleCommuneEtablissement'] = true;
        $this->libelleCommuneEtablissement = $libelleCommuneEtablissement;
        return $this;
    }
    /**
     * Libellé complémentaire pour une adresse à l'étranger
     *
     * @return string
     */
    public function getLibelleCommuneEtrangerEtablissement(): string
    {
        return $this->libelleCommuneEtrangerEtablissement;
    }
    /**
     * Libellé complémentaire pour une adresse à l'étranger
     *
     * @param string $libelleCommuneEtrangerEtablissement
     *
     * @return self
     */
    public function setLibelleCommuneEtrangerEtablissement(string $libelleCommuneEtrangerEtablissement): self
    {
        $this->initialized['libelleCommuneEtrangerEtablissement'] = true;
        $this->libelleCommuneEtrangerEtablissement = $libelleCommuneEtrangerEtablissement;
        return $this;
    }
    /**
     * Distribution spéciale (BP par ex)
     *
     * @return string
     */
    public function getDistributionSpecialeEtablissement(): string
    {
        return $this->distributionSpecialeEtablissement;
    }
    /**
     * Distribution spéciale (BP par ex)
     *
     * @param string $distributionSpecialeEtablissement
     *
     * @return self
     */
    public function setDistributionSpecialeEtablissement(string $distributionSpecialeEtablissement): self
    {
        $this->initialized['distributionSpecialeEtablissement'] = true;
        $this->distributionSpecialeEtablissement = $distributionSpecialeEtablissement;
        return $this;
    }
    /**
     * Code commune de localisation de l’établissement hors établissements situés à l’étranger (Le code commune est défini dans le <a href='https://www.insee.fr/fr/information/2028028'>code officiel géographique (COG)</a>)
     *
     * @return string
     */
    public function getCodeCommuneEtablissement(): string
    {
        return $this->codeCommuneEtablissement;
    }
    /**
     * Code commune de localisation de l’établissement hors établissements situés à l’étranger (Le code commune est défini dans le <a href='https://www.insee.fr/fr/information/2028028'>code officiel géographique (COG)</a>)
     *
     * @param string $codeCommuneEtablissement
     *
     * @return self
     */
    public function setCodeCommuneEtablissement(string $codeCommuneEtablissement): self
    {
        $this->initialized['codeCommuneEtablissement'] = true;
        $this->codeCommuneEtablissement = $codeCommuneEtablissement;
        return $this;
    }
    /**
     * Numéro de Cedex
     *
     * @return string
     */
    public function getCodeCedexEtablissement(): string
    {
        return $this->codeCedexEtablissement;
    }
    /**
     * Numéro de Cedex
     *
     * @param string $codeCedexEtablissement
     *
     * @return self
     */
    public function setCodeCedexEtablissement(string $codeCedexEtablissement): self
    {
        $this->initialized['codeCedexEtablissement'] = true;
        $this->codeCedexEtablissement = $codeCedexEtablissement;
        return $this;
    }
    /**
     * Libellé correspondant au numéro de Cedex (variable codeCedexEtablissement)
     *
     * @return string
     */
    public function getLibelleCedexEtablissement(): string
    {
        return $this->libelleCedexEtablissement;
    }
    /**
     * Libellé correspondant au numéro de Cedex (variable codeCedexEtablissement)
     *
     * @param string $libelleCedexEtablissement
     *
     * @return self
     */
    public function setLibelleCedexEtablissement(string $libelleCedexEtablissement): self
    {
        $this->initialized['libelleCedexEtablissement'] = true;
        $this->libelleCedexEtablissement = $libelleCedexEtablissement;
        return $this;
    }
    /**
     * Code pays pour les établissements situés à l’étranger
     *
     * @return string
     */
    public function getCodePaysEtrangerEtablissement(): string
    {
        return $this->codePaysEtrangerEtablissement;
    }
    /**
     * Code pays pour les établissements situés à l’étranger
     *
     * @param string $codePaysEtrangerEtablissement
     *
     * @return self
     */
    public function setCodePaysEtrangerEtablissement(string $codePaysEtrangerEtablissement): self
    {
        $this->initialized['codePaysEtrangerEtablissement'] = true;
        $this->codePaysEtrangerEtablissement = $codePaysEtrangerEtablissement;
        return $this;
    }
    /**
     * Libellé du pays pour les adresses à l’étranger
     *
     * @return string
     */
    public function getLibellePaysEtrangerEtablissement(): string
    {
        return $this->libellePaysEtrangerEtablissement;
    }
    /**
     * Libellé du pays pour les adresses à l’étranger
     *
     * @param string $libellePaysEtrangerEtablissement
     *
     * @return self
     */
    public function setLibellePaysEtrangerEtablissement(string $libellePaysEtrangerEtablissement): self
    {
        $this->initialized['libellePaysEtrangerEtablissement'] = true;
        $this->libellePaysEtrangerEtablissement = $libellePaysEtrangerEtablissement;
        return $this;
    }
    /**
     * IdentifiantAdresseEtablissement
     *
     * @return string
     */
    public function getIdentifiantAdresseEtablissement(): string
    {
        return $this->identifiantAdresseEtablissement;
    }
    /**
     * IdentifiantAdresseEtablissement
     *
     * @param string $identifiantAdresseEtablissement
     *
     * @return self
     */
    public function setIdentifiantAdresseEtablissement(string $identifiantAdresseEtablissement): self
    {
        $this->initialized['identifiantAdresseEtablissement'] = true;
        $this->identifiantAdresseEtablissement = $identifiantAdresseEtablissement;
        return $this;
    }
    /**
     * coordonneeLambertAbscisseEtablissement
     *
     * @return string
     */
    public function getCoordonneeLambertAbscisseEtablissement(): string
    {
        return $this->coordonneeLambertAbscisseEtablissement;
    }
    /**
     * coordonneeLambertAbscisseEtablissement
     *
     * @param string $coordonneeLambertAbscisseEtablissement
     *
     * @return self
     */
    public function setCoordonneeLambertAbscisseEtablissement(string $coordonneeLambertAbscisseEtablissement): self
    {
        $this->initialized['coordonneeLambertAbscisseEtablissement'] = true;
        $this->coordonneeLambertAbscisseEtablissement = $coordonneeLambertAbscisseEtablissement;
        return $this;
    }
    /**
     * coordonneeLambertOrdonneeEtablissement
     *
     * @return string
     */
    public function getCoordonneeLambertOrdonneeEtablissement(): string
    {
        return $this->coordonneeLambertOrdonneeEtablissement;
    }
    /**
     * coordonneeLambertOrdonneeEtablissement
     *
     * @param string $coordonneeLambertOrdonneeEtablissement
     *
     * @return self
     */
    public function setCoordonneeLambertOrdonneeEtablissement(string $coordonneeLambertOrdonneeEtablissement): self
    {
        $this->initialized['coordonneeLambertOrdonneeEtablissement'] = true;
        $this->coordonneeLambertOrdonneeEtablissement = $coordonneeLambertOrdonneeEtablissement;
        return $this;
    }
}