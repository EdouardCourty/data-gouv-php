<?php

namespace Ecourty\DataGouv\DataServices\Geo\Client\Model;

class Departement
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
     * Code du département
     *
     * @var string|null
     */
    protected $code;
    /**
     * Nom du département
     *
     * @var string|null
     */
    protected $nom;
    /**
     * Code de la région
     *
     * @var string|null
     */
    protected $codeRegion;
    /**
     * @var Region
     */
    protected $region;
    /**
     * Code du département
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Code du département
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Nom du département
     *
     * @return string|null
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }
    /**
     * Nom du département
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
     * Code de la région
     *
     * @return string|null
     */
    public function getCodeRegion(): ?string
    {
        return $this->codeRegion;
    }
    /**
     * Code de la région
     *
     * @param string|null $codeRegion
     *
     * @return self
     */
    public function setCodeRegion(?string $codeRegion): self
    {
        $this->initialized['codeRegion'] = true;
        $this->codeRegion = $codeRegion;
        return $this;
    }
    /**
     * @return Region
     */
    public function getRegion(): Region
    {
        return $this->region;
    }
    /**
     * @param Region $region
     *
     * @return self
     */
    public function setRegion(Region $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
}