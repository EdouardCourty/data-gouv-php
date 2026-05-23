<?php

namespace Ecourty\DataGouv\DataServices\Geo\Client\Model;

class Commune
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
     * Code INSEE de la commune
     *
     * @var string
     */
    protected $code;
    /**
     * Nom de la commune
     *
     * @var string
     */
    protected $nom;
    /**
     * Liste des codes postaux associés à la commune
     *
     * @var list<string>
     */
    protected $codesPostaux;
    /**
     * Code SIREN de la commune
     *
     * @var string
     */
    protected $siren;
    /**
     * Code de l'EPCI associé à la commune
     *
     * @var string
     */
    protected $codeEpci;
    /**
     * Code du département associé à la commune
     *
     * @var string
     */
    protected $codeDepartement;
    /**
     * Code de la région associée à la commune
     *
     * @var string
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
     * Liste des codes INSEE des communes associées de la commune, si présentes
     *
     * @var list<CommuneAssocieesItem>
     */
    protected $associees;
    /**
     * Liste des codes INSEE des communes déléguées de la commune, si présentes
     *
     * @var list<CommuneDelegueesItem>
     */
    protected $deleguees;
    /**
     * Population municipale
     *
     * @var int
     */
    protected $population;
    /**
     * Liste des anciens codes INSEE associés à la commune
     *
     * @var list<string>
     */
    protected $anciensCodes;
    /**
     * Surface de la commune, en hectares
     *
     * @var float
     */
    protected $surface;
    /**
     * Centre de la commune (Point GeoJSON)
     *
     * @var mixed
     */
    protected $centre;
    /**
     * Contour de la commune (Polygon GeoJSON)
     *
     * @var mixed
     */
    protected $contour;
    /**
     * Mairie principale de la commune (Point GeoJSON). Pour les COM et les communes mortes pour la France, on retourne le centre.
     *
     * @var mixed
     */
    protected $mairie;
    /**
     * Rectangle englobant la commune (Polygon GeoJSON)
     *
     * @var mixed
     */
    protected $bbox;
    /**
     * Code INSEE de la commune
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Code INSEE de la commune
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
     * Nom de la commune
     *
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }
    /**
     * Nom de la commune
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
     * Liste des codes postaux associés à la commune
     *
     * @return list<string>
     */
    public function getCodesPostaux(): array
    {
        return $this->codesPostaux;
    }
    /**
     * Liste des codes postaux associés à la commune
     *
     * @param list<string> $codesPostaux
     *
     * @return self
     */
    public function setCodesPostaux(array $codesPostaux): self
    {
        $this->initialized['codesPostaux'] = true;
        $this->codesPostaux = $codesPostaux;
        return $this;
    }
    /**
     * Code SIREN de la commune
     *
     * @return string
     */
    public function getSiren(): string
    {
        return $this->siren;
    }
    /**
     * Code SIREN de la commune
     *
     * @param string $siren
     *
     * @return self
     */
    public function setSiren(string $siren): self
    {
        $this->initialized['siren'] = true;
        $this->siren = $siren;
        return $this;
    }
    /**
     * Code de l'EPCI associé à la commune
     *
     * @return string
     */
    public function getCodeEpci(): string
    {
        return $this->codeEpci;
    }
    /**
     * Code de l'EPCI associé à la commune
     *
     * @param string $codeEpci
     *
     * @return self
     */
    public function setCodeEpci(string $codeEpci): self
    {
        $this->initialized['codeEpci'] = true;
        $this->codeEpci = $codeEpci;
        return $this;
    }
    /**
     * Code du département associé à la commune
     *
     * @return string
     */
    public function getCodeDepartement(): string
    {
        return $this->codeDepartement;
    }
    /**
     * Code du département associé à la commune
     *
     * @param string $codeDepartement
     *
     * @return self
     */
    public function setCodeDepartement(string $codeDepartement): self
    {
        $this->initialized['codeDepartement'] = true;
        $this->codeDepartement = $codeDepartement;
        return $this;
    }
    /**
     * Code de la région associée à la commune
     *
     * @return string
     */
    public function getCodeRegion(): string
    {
        return $this->codeRegion;
    }
    /**
     * Code de la région associée à la commune
     *
     * @param string $codeRegion
     *
     * @return self
     */
    public function setCodeRegion(string $codeRegion): self
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
     * Liste des codes INSEE des communes associées de la commune, si présentes
     *
     * @return list<CommuneAssocieesItem>
     */
    public function getAssociees(): array
    {
        return $this->associees;
    }
    /**
     * Liste des codes INSEE des communes associées de la commune, si présentes
     *
     * @param list<CommuneAssocieesItem> $associees
     *
     * @return self
     */
    public function setAssociees(array $associees): self
    {
        $this->initialized['associees'] = true;
        $this->associees = $associees;
        return $this;
    }
    /**
     * Liste des codes INSEE des communes déléguées de la commune, si présentes
     *
     * @return list<CommuneDelegueesItem>
     */
    public function getDeleguees(): array
    {
        return $this->deleguees;
    }
    /**
     * Liste des codes INSEE des communes déléguées de la commune, si présentes
     *
     * @param list<CommuneDelegueesItem> $deleguees
     *
     * @return self
     */
    public function setDeleguees(array $deleguees): self
    {
        $this->initialized['deleguees'] = true;
        $this->deleguees = $deleguees;
        return $this;
    }
    /**
     * Population municipale
     *
     * @return int
     */
    public function getPopulation(): int
    {
        return $this->population;
    }
    /**
     * Population municipale
     *
     * @param int $population
     *
     * @return self
     */
    public function setPopulation(int $population): self
    {
        $this->initialized['population'] = true;
        $this->population = $population;
        return $this;
    }
    /**
     * Liste des anciens codes INSEE associés à la commune
     *
     * @return list<string>
     */
    public function getAnciensCodes(): array
    {
        return $this->anciensCodes;
    }
    /**
     * Liste des anciens codes INSEE associés à la commune
     *
     * @param list<string> $anciensCodes
     *
     * @return self
     */
    public function setAnciensCodes(array $anciensCodes): self
    {
        $this->initialized['anciensCodes'] = true;
        $this->anciensCodes = $anciensCodes;
        return $this;
    }
    /**
     * Surface de la commune, en hectares
     *
     * @return float
     */
    public function getSurface(): float
    {
        return $this->surface;
    }
    /**
     * Surface de la commune, en hectares
     *
     * @param float $surface
     *
     * @return self
     */
    public function setSurface(float $surface): self
    {
        $this->initialized['surface'] = true;
        $this->surface = $surface;
        return $this;
    }
    /**
     * Centre de la commune (Point GeoJSON)
     *
     * @return mixed
     */
    public function getCentre()
    {
        return $this->centre;
    }
    /**
     * Centre de la commune (Point GeoJSON)
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
     * Contour de la commune (Polygon GeoJSON)
     *
     * @return mixed
     */
    public function getContour()
    {
        return $this->contour;
    }
    /**
     * Contour de la commune (Polygon GeoJSON)
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
     * Mairie principale de la commune (Point GeoJSON). Pour les COM et les communes mortes pour la France, on retourne le centre.
     *
     * @return mixed
     */
    public function getMairie()
    {
        return $this->mairie;
    }
    /**
     * Mairie principale de la commune (Point GeoJSON). Pour les COM et les communes mortes pour la France, on retourne le centre.
     *
     * @param mixed $mairie
     *
     * @return self
     */
    public function setMairie($mairie): self
    {
        $this->initialized['mairie'] = true;
        $this->mairie = $mairie;
        return $this;
    }
    /**
     * Rectangle englobant la commune (Polygon GeoJSON)
     *
     * @return mixed
     */
    public function getBbox()
    {
        return $this->bbox;
    }
    /**
     * Rectangle englobant la commune (Polygon GeoJSON)
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