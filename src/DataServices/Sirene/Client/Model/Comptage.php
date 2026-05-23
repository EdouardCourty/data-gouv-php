<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Model;

class Comptage
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
     * Modalité comptée
     *
     * @var mixed
     */
    protected $valeur;
    /**
     * Nombre d'éléments correspondant à la modalité comptée
     *
     * @var int
     */
    protected $nombre;
    /**
     * Modalité comptée
     *
     * @return mixed
     */
    public function getValeur()
    {
        return $this->valeur;
    }
    /**
     * Modalité comptée
     *
     * @param mixed $valeur
     *
     * @return self
     */
    public function setValeur($valeur): self
    {
        $this->initialized['valeur'] = true;
        $this->valeur = $valeur;
        return $this;
    }
    /**
     * Nombre d'éléments correspondant à la modalité comptée
     *
     * @return int
     */
    public function getNombre(): int
    {
        return $this->nombre;
    }
    /**
     * Nombre d'éléments correspondant à la modalité comptée
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
}