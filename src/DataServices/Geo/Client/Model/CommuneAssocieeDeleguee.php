<?php

namespace Ecourty\DataGouv\DataServices\Geo\Client\Model;

class CommuneAssocieeDeleguee
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
     * Code INSEE de la commune associée ou déléguée
     *
     * @var string|null
     */
    protected $code;
    /**
     * Nom de la commune associée ou déléguée
     *
     * @var string|null
     */
    protected $nom;
    /**
     * Code de l'EPCI associé à la commune associée ou déléguée
     *
     * @var string|null
     */
    protected $codeEpci;
    /**
     * Code du département associé à la commune associée ou déléguée
     *
     * @var string|null
     */
    protected $codeDepartement;
    /**
     * Code de la région associée à la commune associée ou déléguée
     *
     * @var string|null
     */
    protected $codeRegion;
    /**
     * @var Epci
     */
    protected $epci;
    /**
     * @var Departement
     */
    protected $departement;
    /**
     * @var Region
     */
    protected $region;
    /**
     * Surface de la commune associée ou déléguée, en hectares
     *
     * @var float|null
     */
    protected $surface;
    /**
     * Centre de la commune associée ou déléguée (Point GeoJSON)
     *
     * @var mixed
     */
    protected $centre;
    /**
     * Contour de la commune associée ou déléguée (Polygon GeoJSON)
     *
     * @var mixed
     */
    protected $contour;
    /**
     * Rectangle englobant la commune associée ou déléguée (Polygon GeoJSON)
     *
     * @var mixed
     */
    protected $bbox;
    /**
     * Code INSEE de la commune associée ou déléguée
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Code INSEE de la commune associée ou déléguée
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
     * Nom de la commune associée ou déléguée
     *
     * @return string|null
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }
    /**
     * Nom de la commune associée ou déléguée
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
     * Code de l'EPCI associé à la commune associée ou déléguée
     *
     * @return string|null
     */
    public function getCodeEpci(): ?string
    {
        return $this->codeEpci;
    }
    /**
     * Code de l'EPCI associé à la commune associée ou déléguée
     *
     * @param string|null $codeEpci
     *
     * @return self
     */
    public function setCodeEpci(?string $codeEpci): self
    {
        $this->initialized['codeEpci'] = true;
        $this->codeEpci = $codeEpci;
        return $this;
    }
    /**
     * Code du département associé à la commune associée ou déléguée
     *
     * @return string|null
     */
    public function getCodeDepartement(): ?string
    {
        return $this->codeDepartement;
    }
    /**
     * Code du département associé à la commune associée ou déléguée
     *
     * @param string|null $codeDepartement
     *
     * @return self
     */
    public function setCodeDepartement(?string $codeDepartement): self
    {
        $this->initialized['codeDepartement'] = true;
        $this->codeDepartement = $codeDepartement;
        return $this;
    }
    /**
     * Code de la région associée à la commune associée ou déléguée
     *
     * @return string|null
     */
    public function getCodeRegion(): ?string
    {
        return $this->codeRegion;
    }
    /**
     * Code de la région associée à la commune associée ou déléguée
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
     * @return Epci
     */
    public function getEpci(): Epci
    {
        return $this->epci;
    }
    /**
     * @param Epci $epci
     *
     * @return self
     */
    public function setEpci(Epci $epci): self
    {
        $this->initialized['epci'] = true;
        $this->epci = $epci;
        return $this;
    }
    /**
     * @return Departement
     */
    public function getDepartement(): Departement
    {
        return $this->departement;
    }
    /**
     * @param Departement $departement
     *
     * @return self
     */
    public function setDepartement(Departement $departement): self
    {
        $this->initialized['departement'] = true;
        $this->departement = $departement;
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
    /**
     * Surface de la commune associée ou déléguée, en hectares
     *
     * @return float|null
     */
    public function getSurface(): ?float
    {
        return $this->surface;
    }
    /**
     * Surface de la commune associée ou déléguée, en hectares
     *
     * @param float|null $surface
     *
     * @return self
     */
    public function setSurface(?float $surface): self
    {
        $this->initialized['surface'] = true;
        $this->surface = $surface;
        return $this;
    }
    /**
     * Centre de la commune associée ou déléguée (Point GeoJSON)
     *
     * @return mixed
     */
    public function getCentre()
    {
        return $this->centre;
    }
    /**
     * Centre de la commune associée ou déléguée (Point GeoJSON)
     *
     * @param mixed $centre
     *
     * @return self
     */
    public function setCentre($centre): self
    {
        $this->initialized['centre'] = true;
        $this->centre = $centre;
        return $this;
    }
    /**
     * Contour de la commune associée ou déléguée (Polygon GeoJSON)
     *
     * @return mixed
     */
    public function getContour()
    {
        return $this->contour;
    }
    /**
     * Contour de la commune associée ou déléguée (Polygon GeoJSON)
     *
     * @param mixed $contour
     *
     * @return self
     */
    public function setContour($contour): self
    {
        $this->initialized['contour'] = true;
        $this->contour = $contour;
        return $this;
    }
    /**
     * Rectangle englobant la commune associée ou déléguée (Polygon GeoJSON)
     *
     * @return mixed
     */
    public function getBbox()
    {
        return $this->bbox;
    }
    /**
     * Rectangle englobant la commune associée ou déléguée (Polygon GeoJSON)
     *
     * @param mixed $bbox
     *
     * @return self
     */
    public function setBbox($bbox): self
    {
        $this->initialized['bbox'] = true;
        $this->bbox = $bbox;
        return $this;
    }
}