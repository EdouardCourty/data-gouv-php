<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Model;

class Header
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
     * Égal au status de la réponse HTTP
     *
     * @var int
     */
    protected $statut;
    /**
     * En cas d'erreur, message indiquant la cause de l'erreur. OK sinon
     *
     * @var string
     */
    protected $message;
    /**
     * Nombre total des éléments répondant à la requête
     *
     * @var int
     */
    protected $total;
    /**
     * Numéro du premier élément fourni, défaut à 0, commence à 0
     *
     * @var int
     */
    protected $debut;
    /**
     * Nombre d'éléments fournis, défaut à 20
     *
     * @var int
     */
    protected $nombre;
    /**
     * Curseur passé en argument dans la requête de l'utilisateur, utilisé pour la pagination profonde
     *
     * @var string
     */
    protected $curseur;
    /**
     * Curseur suivant pour accéder à la suite des résultat lorsqu'on utilise la pagination profonde
     *
     * @var string
     */
    protected $curseurSuivant;
    /**
     * Égal au status de la réponse HTTP
     *
     * @return int
     */
    public function getStatut(): int
    {
        return $this->statut;
    }
    /**
     * Égal au status de la réponse HTTP
     *
     * @param int $statut
     *
     * @return self
     */
    public function setStatut(int $statut): self
    {
        $this->initialized['statut'] = true;
        $this->statut = $statut;
        return $this;
    }
    /**
     * En cas d'erreur, message indiquant la cause de l'erreur. OK sinon
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * En cas d'erreur, message indiquant la cause de l'erreur. OK sinon
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * Nombre total des éléments répondant à la requête
     *
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }
    /**
     * Nombre total des éléments répondant à la requête
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
     * Numéro du premier élément fourni, défaut à 0, commence à 0
     *
     * @return int
     */
    public function getDebut(): int
    {
        return $this->debut;
    }
    /**
     * Numéro du premier élément fourni, défaut à 0, commence à 0
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
     * Nombre d'éléments fournis, défaut à 20
     *
     * @return int
     */
    public function getNombre(): int
    {
        return $this->nombre;
    }
    /**
     * Nombre d'éléments fournis, défaut à 20
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
     * Curseur passé en argument dans la requête de l'utilisateur, utilisé pour la pagination profonde
     *
     * @return string
     */
    public function getCurseur(): string
    {
        return $this->curseur;
    }
    /**
     * Curseur passé en argument dans la requête de l'utilisateur, utilisé pour la pagination profonde
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
     * Curseur suivant pour accéder à la suite des résultat lorsqu'on utilise la pagination profonde
     *
     * @return string
     */
    public function getCurseurSuivant(): string
    {
        return $this->curseurSuivant;
    }
    /**
     * Curseur suivant pour accéder à la suite des résultat lorsqu'on utilise la pagination profonde
     *
     * @param string $curseurSuivant
     *
     * @return self
     */
    public function setCurseurSuivant(string $curseurSuivant): self
    {
        $this->initialized['curseurSuivant'] = true;
        $this->curseurSuivant = $curseurSuivant;
        return $this;
    }
}