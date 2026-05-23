<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Model;

class AdresseComplementaire
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
    protected $complementAdresse2Etablissement;
    /**
     * Numéro dans la voie
     *
     * @var string
     */
    protected $numeroVoie2Etablissement;
    /**
     * Indice de répétition dans la voie
     *
     * @var string
     */
    protected $indiceRepetition2Etablissement;
    /**
     * Type de la voie
     *
     * @var string
     */
    protected $typeVoie2Etablissement;
    /**
     * Libellé de la voie
     *
     * @var string
     */
    protected $libelleVoie2Etablissement;
    /**
     * Code postal
     *
     * @var string
     */
    protected $codePostal2Etablissement;
    /**
     * Libellé de la commune pour les adresses en France
     *
     * @var string
     */
    protected $libelleCommune2Etablissement;
    /**
     * Libellé complémentaire pour une adresse à l'étranger
     *
     * @var string
     */
    protected $libelleCommuneEtranger2Etablissement;
    /**
     * Distribution spéciale (BP par ex)
     *
     * @var string
     */
    protected $distributionSpeciale2Etablissement;
    /**
     * Code commune de localisation de l’établissement hors établissements situés à l’étranger (Le code commune est défini dans le <a href='https://www.insee.fr/fr/information/2028028'>code officiel géographique (COG)</a>)
     *
     * @var string
     */
    protected $codeCommune2Etablissement;
    /**
     * Numéro de Cedex
     *
     * @var string
     */
    protected $codeCedex2Etablissement;
    /**
     * Libellé correspondant au numéro de Cedex (variable codeCedexEtablissement)
     *
     * @var string
     */
    protected $libelleCedex2Etablissement;
    /**
     * Code pays pour les établissements situés à l’étranger
     *
     * @var string
     */
    protected $codePaysEtranger2Etablissement;
    /**
     * Libellé du pays pour les adresses à l’étranger
     *
     * @var string
     */
    protected $libellePaysEtranger2Etablissement;
    /**
     * Complément d'adresse de l'établissement
     *
     * @return string
     */
    public function getComplementAdresse2Etablissement(): string
    {
        return $this->complementAdresse2Etablissement;
    }
    /**
     * Complément d'adresse de l'établissement
     *
     * @param string $complementAdresse2Etablissement
     *
     * @return self
     */
    public function setComplementAdresse2Etablissement(string $complementAdresse2Etablissement): self
    {
        $this->initialized['complementAdresse2Etablissement'] = true;
        $this->complementAdresse2Etablissement = $complementAdresse2Etablissement;
        return $this;
    }
    /**
     * Numéro dans la voie
     *
     * @return string
     */
    public function getNumeroVoie2Etablissement(): string
    {
        return $this->numeroVoie2Etablissement;
    }
    /**
     * Numéro dans la voie
     *
     * @param string $numeroVoie2Etablissement
     *
     * @return self
     */
    public function setNumeroVoie2Etablissement(string $numeroVoie2Etablissement): self
    {
        $this->initialized['numeroVoie2Etablissement'] = true;
        $this->numeroVoie2Etablissement = $numeroVoie2Etablissement;
        return $this;
    }
    /**
     * Indice de répétition dans la voie
     *
     * @return string
     */
    public function getIndiceRepetition2Etablissement(): string
    {
        return $this->indiceRepetition2Etablissement;
    }
    /**
     * Indice de répétition dans la voie
     *
     * @param string $indiceRepetition2Etablissement
     *
     * @return self
     */
    public function setIndiceRepetition2Etablissement(string $indiceRepetition2Etablissement): self
    {
        $this->initialized['indiceRepetition2Etablissement'] = true;
        $this->indiceRepetition2Etablissement = $indiceRepetition2Etablissement;
        return $this;
    }
    /**
     * Type de la voie
     *
     * @return string
     */
    public function getTypeVoie2Etablissement(): string
    {
        return $this->typeVoie2Etablissement;
    }
    /**
     * Type de la voie
     *
     * @param string $typeVoie2Etablissement
     *
     * @return self
     */
    public function setTypeVoie2Etablissement(string $typeVoie2Etablissement): self
    {
        $this->initialized['typeVoie2Etablissement'] = true;
        $this->typeVoie2Etablissement = $typeVoie2Etablissement;
        return $this;
    }
    /**
     * Libellé de la voie
     *
     * @return string
     */
    public function getLibelleVoie2Etablissement(): string
    {
        return $this->libelleVoie2Etablissement;
    }
    /**
     * Libellé de la voie
     *
     * @param string $libelleVoie2Etablissement
     *
     * @return self
     */
    public function setLibelleVoie2Etablissement(string $libelleVoie2Etablissement): self
    {
        $this->initialized['libelleVoie2Etablissement'] = true;
        $this->libelleVoie2Etablissement = $libelleVoie2Etablissement;
        return $this;
    }
    /**
     * Code postal
     *
     * @return string
     */
    public function getCodePostal2Etablissement(): string
    {
        return $this->codePostal2Etablissement;
    }
    /**
     * Code postal
     *
     * @param string $codePostal2Etablissement
     *
     * @return self
     */
    public function setCodePostal2Etablissement(string $codePostal2Etablissement): self
    {
        $this->initialized['codePostal2Etablissement'] = true;
        $this->codePostal2Etablissement = $codePostal2Etablissement;
        return $this;
    }
    /**
     * Libellé de la commune pour les adresses en France
     *
     * @return string
     */
    public function getLibelleCommune2Etablissement(): string
    {
        return $this->libelleCommune2Etablissement;
    }
    /**
     * Libellé de la commune pour les adresses en France
     *
     * @param string $libelleCommune2Etablissement
     *
     * @return self
     */
    public function setLibelleCommune2Etablissement(string $libelleCommune2Etablissement): self
    {
        $this->initialized['libelleCommune2Etablissement'] = true;
        $this->libelleCommune2Etablissement = $libelleCommune2Etablissement;
        return $this;
    }
    /**
     * Libellé complémentaire pour une adresse à l'étranger
     *
     * @return string
     */
    public function getLibelleCommuneEtranger2Etablissement(): string
    {
        return $this->libelleCommuneEtranger2Etablissement;
    }
    /**
     * Libellé complémentaire pour une adresse à l'étranger
     *
     * @param string $libelleCommuneEtranger2Etablissement
     *
     * @return self
     */
    public function setLibelleCommuneEtranger2Etablissement(string $libelleCommuneEtranger2Etablissement): self
    {
        $this->initialized['libelleCommuneEtranger2Etablissement'] = true;
        $this->libelleCommuneEtranger2Etablissement = $libelleCommuneEtranger2Etablissement;
        return $this;
    }
    /**
     * Distribution spéciale (BP par ex)
     *
     * @return string
     */
    public function getDistributionSpeciale2Etablissement(): string
    {
        return $this->distributionSpeciale2Etablissement;
    }
    /**
     * Distribution spéciale (BP par ex)
     *
     * @param string $distributionSpeciale2Etablissement
     *
     * @return self
     */
    public function setDistributionSpeciale2Etablissement(string $distributionSpeciale2Etablissement): self
    {
        $this->initialized['distributionSpeciale2Etablissement'] = true;
        $this->distributionSpeciale2Etablissement = $distributionSpeciale2Etablissement;
        return $this;
    }
    /**
     * Code commune de localisation de l’établissement hors établissements situés à l’étranger (Le code commune est défini dans le <a href='https://www.insee.fr/fr/information/2028028'>code officiel géographique (COG)</a>)
     *
     * @return string
     */
    public function getCodeCommune2Etablissement(): string
    {
        return $this->codeCommune2Etablissement;
    }
    /**
     * Code commune de localisation de l’établissement hors établissements situés à l’étranger (Le code commune est défini dans le <a href='https://www.insee.fr/fr/information/2028028'>code officiel géographique (COG)</a>)
     *
     * @param string $codeCommune2Etablissement
     *
     * @return self
     */
    public function setCodeCommune2Etablissement(string $codeCommune2Etablissement): self
    {
        $this->initialized['codeCommune2Etablissement'] = true;
        $this->codeCommune2Etablissement = $codeCommune2Etablissement;
        return $this;
    }
    /**
     * Numéro de Cedex
     *
     * @return string
     */
    public function getCodeCedex2Etablissement(): string
    {
        return $this->codeCedex2Etablissement;
    }
    /**
     * Numéro de Cedex
     *
     * @param string $codeCedex2Etablissement
     *
     * @return self
     */
    public function setCodeCedex2Etablissement(string $codeCedex2Etablissement): self
    {
        $this->initialized['codeCedex2Etablissement'] = true;
        $this->codeCedex2Etablissement = $codeCedex2Etablissement;
        return $this;
    }
    /**
     * Libellé correspondant au numéro de Cedex (variable codeCedexEtablissement)
     *
     * @return string
     */
    public function getLibelleCedex2Etablissement(): string
    {
        return $this->libelleCedex2Etablissement;
    }
    /**
     * Libellé correspondant au numéro de Cedex (variable codeCedexEtablissement)
     *
     * @param string $libelleCedex2Etablissement
     *
     * @return self
     */
    public function setLibelleCedex2Etablissement(string $libelleCedex2Etablissement): self
    {
        $this->initialized['libelleCedex2Etablissement'] = true;
        $this->libelleCedex2Etablissement = $libelleCedex2Etablissement;
        return $this;
    }
    /**
     * Code pays pour les établissements situés à l’étranger
     *
     * @return string
     */
    public function getCodePaysEtranger2Etablissement(): string
    {
        return $this->codePaysEtranger2Etablissement;
    }
    /**
     * Code pays pour les établissements situés à l’étranger
     *
     * @param string $codePaysEtranger2Etablissement
     *
     * @return self
     */
    public function setCodePaysEtranger2Etablissement(string $codePaysEtranger2Etablissement): self
    {
        $this->initialized['codePaysEtranger2Etablissement'] = true;
        $this->codePaysEtranger2Etablissement = $codePaysEtranger2Etablissement;
        return $this;
    }
    /**
     * Libellé du pays pour les adresses à l’étranger
     *
     * @return string
     */
    public function getLibellePaysEtranger2Etablissement(): string
    {
        return $this->libellePaysEtranger2Etablissement;
    }
    /**
     * Libellé du pays pour les adresses à l’étranger
     *
     * @param string $libellePaysEtranger2Etablissement
     *
     * @return self
     */
    public function setLibellePaysEtranger2Etablissement(string $libellePaysEtranger2Etablissement): self
    {
        $this->initialized['libellePaysEtranger2Etablissement'] = true;
        $this->libellePaysEtranger2Etablissement = $libellePaysEtranger2Etablissement;
        return $this;
    }
}