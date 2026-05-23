<?php

namespace Ecourty\DataGouv\DataServices\Entreprise\Client\Model;

class DirigeantPp extends \ArrayObject
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
     * Nom du dirigeant
     *
     * @var string
     */
    protected $nom;
    /**
     * Prénom(s) du dirigeant
     *
     * @var string
     */
    protected $prenoms;
    /**
     * Année de naissance du dirigeant
     *
     * @var string
     */
    protected $anneeDeNaissance;
    /**
     * Année et mois de naissance du dirigeant
     *
     * @var string
     */
    protected $dateDeNaissance;
    /**
     * Qualité du dirigeant
     *
     * @var string
     */
    protected $qualite;
    /**
     * Nationalité du dirigeant
     *
     * @var string
     */
    protected $nationalite;
    /**
     * Type de dirgeant : "personne physique"
     *
     * @var string
     */
    protected $typeDirigeant;
    /**
     * Nom du dirigeant
     *
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }
    /**
     * Nom du dirigeant
     *
     * @param string $nom
     *
     * @return self
     */
    public function setNom(string $nom): self
    {
        $this->initialized['nom'] = true;
        $this->nom = $nom;
        return $this;
    }
    /**
     * Prénom(s) du dirigeant
     *
     * @return string
     */
    public function getPrenoms(): string
    {
        return $this->prenoms;
    }
    /**
     * Prénom(s) du dirigeant
     *
     * @param string $prenoms
     *
     * @return self
     */
    public function setPrenoms(string $prenoms): self
    {
        $this->initialized['prenoms'] = true;
        $this->prenoms = $prenoms;
        return $this;
    }
    /**
     * Année de naissance du dirigeant
     *
     * @return string
     */
    public function getAnneeDeNaissance(): string
    {
        return $this->anneeDeNaissance;
    }
    /**
     * Année de naissance du dirigeant
     *
     * @param string $anneeDeNaissance
     *
     * @return self
     */
    public function setAnneeDeNaissance(string $anneeDeNaissance): self
    {
        $this->initialized['anneeDeNaissance'] = true;
        $this->anneeDeNaissance = $anneeDeNaissance;
        return $this;
    }
    /**
     * Année et mois de naissance du dirigeant
     *
     * @return string
     */
    public function getDateDeNaissance(): string
    {
        return $this->dateDeNaissance;
    }
    /**
     * Année et mois de naissance du dirigeant
     *
     * @param string $dateDeNaissance
     *
     * @return self
     */
    public function setDateDeNaissance(string $dateDeNaissance): self
    {
        $this->initialized['dateDeNaissance'] = true;
        $this->dateDeNaissance = $dateDeNaissance;
        return $this;
    }
    /**
     * Qualité du dirigeant
     *
     * @return string
     */
    public function getQualite(): string
    {
        return $this->qualite;
    }
    /**
     * Qualité du dirigeant
     *
     * @param string $qualite
     *
     * @return self
     */
    public function setQualite(string $qualite): self
    {
        $this->initialized['qualite'] = true;
        $this->qualite = $qualite;
        return $this;
    }
    /**
     * Nationalité du dirigeant
     *
     * @return string
     */
    public function getNationalite(): string
    {
        return $this->nationalite;
    }
    /**
     * Nationalité du dirigeant
     *
     * @param string $nationalite
     *
     * @return self
     */
    public function setNationalite(string $nationalite): self
    {
        $this->initialized['nationalite'] = true;
        $this->nationalite = $nationalite;
        return $this;
    }
    /**
     * Type de dirgeant : "personne physique"
     *
     * @return string
     */
    public function getTypeDirigeant(): string
    {
        return $this->typeDirigeant;
    }
    /**
     * Type de dirgeant : "personne physique"
     *
     * @param string $typeDirigeant
     *
     * @return self
     */
    public function setTypeDirigeant(string $typeDirigeant): self
    {
        $this->initialized['typeDirigeant'] = true;
        $this->typeDirigeant = $typeDirigeant;
        return $this;
    }
}