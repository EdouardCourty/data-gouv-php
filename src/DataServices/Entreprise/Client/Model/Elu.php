<?php

namespace Ecourty\DataGouv\DataServices\Entreprise\Client\Model;

class Elu extends \ArrayObject
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
     * Nom de l'élu
     *
     * @var string|null
     */
    protected $nom;
    /**
     * Prénom de l'élu
     *
     * @var string|null
     */
    protected $prenoms;
    /**
     * Année de naissance de l'élu
     *
     * @var string|null
     */
    protected $anneeDeNaissance;
    /**
     * Fonction de l'élu
     *
     * @var string|null
     */
    protected $fonction;
    /**
     * Sexe de l'élu
     *
     * @var string|null
     */
    protected $sexe;
    /**
     * Nom de l'élu
     *
     * @return string|null
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }
    /**
     * Nom de l'élu
     *
     * @param string|null $nom
     *
     * @return self
     */
    public function setNom(?string $nom): self
    {
        $this->initialized['nom'] = true;
        $this->nom = $nom;
        return $this;
    }
    /**
     * Prénom de l'élu
     *
     * @return string|null
     */
    public function getPrenoms(): ?string
    {
        return $this->prenoms;
    }
    /**
     * Prénom de l'élu
     *
     * @param string|null $prenoms
     *
     * @return self
     */
    public function setPrenoms(?string $prenoms): self
    {
        $this->initialized['prenoms'] = true;
        $this->prenoms = $prenoms;
        return $this;
    }
    /**
     * Année de naissance de l'élu
     *
     * @return string|null
     */
    public function getAnneeDeNaissance(): ?string
    {
        return $this->anneeDeNaissance;
    }
    /**
     * Année de naissance de l'élu
     *
     * @param string|null $anneeDeNaissance
     *
     * @return self
     */
    public function setAnneeDeNaissance(?string $anneeDeNaissance): self
    {
        $this->initialized['anneeDeNaissance'] = true;
        $this->anneeDeNaissance = $anneeDeNaissance;
        return $this;
    }
    /**
     * Fonction de l'élu
     *
     * @return string|null
     */
    public function getFonction(): ?string
    {
        return $this->fonction;
    }
    /**
     * Fonction de l'élu
     *
     * @param string|null $fonction
     *
     * @return self
     */
    public function setFonction(?string $fonction): self
    {
        $this->initialized['fonction'] = true;
        $this->fonction = $fonction;
        return $this;
    }
    /**
     * Sexe de l'élu
     *
     * @return string|null
     */
    public function getSexe(): ?string
    {
        return $this->sexe;
    }
    /**
     * Sexe de l'élu
     *
     * @param string|null $sexe
     *
     * @return self
     */
    public function setSexe(?string $sexe): self
    {
        $this->initialized['sexe'] = true;
        $this->sexe = $sexe;
        return $this;
    }
}