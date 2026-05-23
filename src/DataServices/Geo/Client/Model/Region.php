<?php

namespace Ecourty\DataGouv\DataServices\Geo\Client\Model;

class Region
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
     * Code de la région
     *
     * @var string
     */
    protected $code;
    /**
     * Nom de la région
     *
     * @var string
     */
    protected $nom;
    /**
     * Code de la région
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Code de la région
     *
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
     * Nom de la région
     *
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }
    /**
     * Nom de la région
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
}