<?php

namespace Ecourty\DataGouv\DataServices\Geo\Client\Model;

class CommuneAssocieesItem
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
    protected $code;
    /**
     * @var string
     */
    protected $nom;
    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }
    /**
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
}