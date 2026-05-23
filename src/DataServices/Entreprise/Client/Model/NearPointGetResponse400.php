<?php

namespace Ecourty\DataGouv\DataServices\Entreprise\Client\Model;

class NearPointGetResponse400 extends \ArrayObject
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
     * @var string
     */
    protected $erreur;
    /**
     * @return string
     */
    public function getErreur(): string
    {
        return $this->erreur;
    }
    /**
     * @param string $erreur
     *
     * @return self
     */
    public function setErreur(string $erreur): self
    {
        $this->initialized['erreur'] = true;
        $this->erreur = $erreur;
        return $this;
    }
}