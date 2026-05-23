<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Model;

class Facette
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
     * Nom de la facette
     *
     * @var string
     */
    protected $nom;
    /**
     * Nombre d'éléments pour lesquels la facette vaut null
     *
     * @var int
     */
    protected $manquants;
    /**
     * Nombre total d'éléments ayant une valeur non nulle pour la facette
     *
     * @var int
     */
    protected $total;
    /**
     * Nombre de valeurs distinctes pour la facette
     *
     * @var int
     */
    protected $modalites;
    /**
     * Nombre d'éléments dont la valeur est inférieure au premier intervalle, uniquement pour les facettes de type intervalle
     *
     * @var int
     */
    protected $avant;
    /**
     * Nombre d'éléments dont la valeur est supérieure au dernier intervalle, uniquement pour les facettes de type intervalle
     *
     * @var int
     */
    protected $apres;
    /**
     * Nombre d'élements compris entre la borne inférieure du premier intervalle et la borne supérieure du dernier intervalle, uniquement pour les facettes de type intervalle
     *
     * @var int
     */
    protected $entre;
    /**
     * @var list<Comptage>
     */
    protected $comptages;
    /**
     * Nom de la facette
     *
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }
    /**
     * Nom de la facette
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
     * Nombre d'éléments pour lesquels la facette vaut null
     *
     * @return int
     */
    public function getManquants(): int
    {
        return $this->manquants;
    }
    /**
     * Nombre d'éléments pour lesquels la facette vaut null
     *
     * @param int $manquants
     *
     * @return self
     */
    public function setManquants(int $manquants): self
    {
        $this->initialized['manquants'] = true;
        $this->manquants = $manquants;
        return $this;
    }
    /**
     * Nombre total d'éléments ayant une valeur non nulle pour la facette
     *
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }
    /**
     * Nombre total d'éléments ayant une valeur non nulle pour la facette
     *
     * @param int $total
     *
     * @return self
     */
    public function setTotal(int $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
    /**
     * Nombre de valeurs distinctes pour la facette
     *
     * @return int
     */
    public function getModalites(): int
    {
        return $this->modalites;
    }
    /**
     * Nombre de valeurs distinctes pour la facette
     *
     * @param int $modalites
     *
     * @return self
     */
    public function setModalites(int $modalites): self
    {
        $this->initialized['modalites'] = true;
        $this->modalites = $modalites;
        return $this;
    }
    /**
     * Nombre d'éléments dont la valeur est inférieure au premier intervalle, uniquement pour les facettes de type intervalle
     *
     * @return int
     */
    public function getAvant(): int
    {
        return $this->avant;
    }
    /**
     * Nombre d'éléments dont la valeur est inférieure au premier intervalle, uniquement pour les facettes de type intervalle
     *
     * @param int $avant
     *
     * @return self
     */
    public function setAvant(int $avant): self
    {
        $this->initialized['avant'] = true;
        $this->avant = $avant;
        return $this;
    }
    /**
     * Nombre d'éléments dont la valeur est supérieure au dernier intervalle, uniquement pour les facettes de type intervalle
     *
     * @return int
     */
    public function getApres(): int
    {
        return $this->apres;
    }
    /**
     * Nombre d'éléments dont la valeur est supérieure au dernier intervalle, uniquement pour les facettes de type intervalle
     *
     * @param int $apres
     *
     * @return self
     */
    public function setApres(int $apres): self
    {
        $this->initialized['apres'] = true;
        $this->apres = $apres;
        return $this;
    }
    /**
     * Nombre d'élements compris entre la borne inférieure du premier intervalle et la borne supérieure du dernier intervalle, uniquement pour les facettes de type intervalle
     *
     * @return int
     */
    public function getEntre(): int
    {
        return $this->entre;
    }
    /**
     * Nombre d'élements compris entre la borne inférieure du premier intervalle et la borne supérieure du dernier intervalle, uniquement pour les facettes de type intervalle
     *
     * @param int $entre
     *
     * @return self
     */
    public function setEntre(int $entre): self
    {
        $this->initialized['entre'] = true;
        $this->entre = $entre;
        return $this;
    }
    /**
     * @return list<Comptage>
     */
    public function getComptages(): array
    {
        return $this->comptages;
    }
    /**
     * @param list<Comptage> $comptages
     *
     * @return self
     */
    public function setComptages(array $comptages): self
    {
        $this->initialized['comptages'] = true;
        $this->comptages = $comptages;
        return $this;
    }
}