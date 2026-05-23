<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Model;

class EtablissementPostMultiCriteres
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
     * Contenu de la requête multicritères, voir la documentation pour plus de précisions
     *
     * @var string
     */
    protected $q = '';
    /**
     * Date à laquelle on veut obtenir les valeurs des données historisées
     *
     * @var string
     */
    protected $date = '';
    /**
     * Liste des champs demandés, séparés par des virgules
     *
     * @var string
     */
    protected $champs = '';
    /**
     * Nombre d'éléments demandés dans la réponse, défaut 20
     *
     * @var int
     */
    protected $nombre = '20';
    /**
     * Rang du premier élément demandé dans la réponse, défaut 0
     *
     * @var int
     */
    protected $debut = '0';
    /**
     * Masque (true) ou affiche (false, par défaut) les attributs qui n'ont pas de valeur
     *
     * @var bool
     */
    protected $masquerValeursNulles;
    /**
     * Champs sur lesquels des tris seront effectués, séparés par des virgules. Tri sur siren par défaut
     *
     * @var string
     */
    protected $tri = '';
    /**
     * Paramètre utilisé pour la pagination profonde, voir la documentation pour plus de précisions
     *
     * @var string
     */
    protected $curseur = '';
    /**
     * Liste des champs sur lesquels des comptages seront effectués, séparés par des virgules
     *
     * @var string
     */
    protected $facetteChamp = '';
    /**
     * Contenu de la requête multicritères, voir la documentation pour plus de précisions
     *
     * @return string
     */
    public function getQ(): string
    {
        return $this->q;
    }
    /**
     * Contenu de la requête multicritères, voir la documentation pour plus de précisions
     *
     * @param string $q
     *
     * @return self
     */
    public function setQ(string $q): self
    {
        $this->initialized['q'] = true;
        $this->q = $q;
        return $this;
    }
    /**
     * Date à laquelle on veut obtenir les valeurs des données historisées
     *
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }
    /**
     * Date à laquelle on veut obtenir les valeurs des données historisées
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * Liste des champs demandés, séparés par des virgules
     *
     * @return string
     */
    public function getChamps(): string
    {
        return $this->champs;
    }
    /**
     * Liste des champs demandés, séparés par des virgules
     *
     * @param string $champs
     *
     * @return self
     */
    public function setChamps(string $champs): self
    {
        $this->initialized['champs'] = true;
        $this->champs = $champs;
        return $this;
    }
    /**
     * Nombre d'éléments demandés dans la réponse, défaut 20
     *
     * @return int
     */
    public function getNombre(): int
    {
        return $this->nombre;
    }
    /**
     * Nombre d'éléments demandés dans la réponse, défaut 20
     *
     * @param int $nombre
     *
     * @return self
     */
    public function setNombre(int $nombre): self
    {
        $this->initialized['nombre'] = true;
        $this->nombre = $nombre;
        return $this;
    }
    /**
     * Rang du premier élément demandé dans la réponse, défaut 0
     *
     * @return int
     */
    public function getDebut(): int
    {
        return $this->debut;
    }
    /**
     * Rang du premier élément demandé dans la réponse, défaut 0
     *
     * @param int $debut
     *
     * @return self
     */
    public function setDebut(int $debut): self
    {
        $this->initialized['debut'] = true;
        $this->debut = $debut;
        return $this;
    }
    /**
     * Masque (true) ou affiche (false, par défaut) les attributs qui n'ont pas de valeur
     *
     * @return bool
     */
    public function getMasquerValeursNulles(): bool
    {
        return $this->masquerValeursNulles;
    }
    /**
     * Masque (true) ou affiche (false, par défaut) les attributs qui n'ont pas de valeur
     *
     * @param bool $masquerValeursNulles
     *
     * @return self
     */
    public function setMasquerValeursNulles(bool $masquerValeursNulles): self
    {
        $this->initialized['masquerValeursNulles'] = true;
        $this->masquerValeursNulles = $masquerValeursNulles;
        return $this;
    }
    /**
     * Champs sur lesquels des tris seront effectués, séparés par des virgules. Tri sur siren par défaut
     *
     * @return string
     */
    public function getTri(): string
    {
        return $this->tri;
    }
    /**
     * Champs sur lesquels des tris seront effectués, séparés par des virgules. Tri sur siren par défaut
     *
     * @param string $tri
     *
     * @return self
     */
    public function setTri(string $tri): self
    {
        $this->initialized['tri'] = true;
        $this->tri = $tri;
        return $this;
    }
    /**
     * Paramètre utilisé pour la pagination profonde, voir la documentation pour plus de précisions
     *
     * @return string
     */
    public function getCurseur(): string
    {
        return $this->curseur;
    }
    /**
     * Paramètre utilisé pour la pagination profonde, voir la documentation pour plus de précisions
     *
     * @param string $curseur
     *
     * @return self
     */
    public function setCurseur(string $curseur): self
    {
        $this->initialized['curseur'] = true;
        $this->curseur = $curseur;
        return $this;
    }
    /**
     * Liste des champs sur lesquels des comptages seront effectués, séparés par des virgules
     *
     * @return string
     */
    public function getFacetteChamp(): string
    {
        return $this->facetteChamp;
    }
    /**
     * Liste des champs sur lesquels des comptages seront effectués, séparés par des virgules
     *
     * @param string $facetteChamp
     *
     * @return self
     */
    public function setFacetteChamp(string $facetteChamp): self
    {
        $this->initialized['facetteChamp'] = true;
        $this->facetteChamp = $facetteChamp;
        return $this;
    }
}