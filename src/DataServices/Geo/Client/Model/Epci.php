<?php

namespace Ecourty\DataGouv\DataServices\Geo\Client\Model;

class Epci
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
     * Code SIREN de l'EPCI
     *
     * @var string
     */
    protected $code;
    /**
     * Nom de l'EPCI
     *
     * @var string
     */
    protected $nom;
    /**
     * Type de l'EPCI, soit communauté d'agglomération (CA), soit communauté de communes (CC), soit communauté urbaine (CU), soit métropole de Lyon (MET69), soit métropole (METRO)
     *
     * @var string
     */
    protected $type;
    /**
     * Financement de l'EPCI, soit fiscalité additionnelle (FA), soit en fiscalité professionnelle unique (FPU)
     *
     * @var string
     */
    protected $financement;
    /**
     * Liste des départements de l'EPCI
     *
     * @var list<string>
     */
    protected $codesDepartements;
    /**
     * Liste des régions de l'EPCI
     *
     * @var list<string>
     */
    protected $codesRegions;
    /**
     * Population municipale
     *
     * @var int
     */
    protected $population;
    /**
     * Surface de l'EPCI, en hectares
     *
     * @var float
     */
    protected $surface;
    /**
     * Centre de l'EPCI (Point GeoJSON)
     *
     * @var mixed
     */
    protected $centre;
    /**
     * Contour de l'EPCI (Polygon GeoJSON)
     *
     * @var mixed
     */
    protected $contour;
    /**
     * Rectangle englobant la commune (Polygon GeoJSON)
     *
     * @var mixed
     */
    protected $bbox;
    /**
     * Code SIREN de l'EPCI
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Code SIREN de l'EPCI
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
     * Nom de l'EPCI
     *
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }
    /**
     * Nom de l'EPCI
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
     * Type de l'EPCI, soit communauté d'agglomération (CA), soit communauté de communes (CC), soit communauté urbaine (CU), soit métropole de Lyon (MET69), soit métropole (METRO)
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Type de l'EPCI, soit communauté d'agglomération (CA), soit communauté de communes (CC), soit communauté urbaine (CU), soit métropole de Lyon (MET69), soit métropole (METRO)
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Financement de l'EPCI, soit fiscalité additionnelle (FA), soit en fiscalité professionnelle unique (FPU)
     *
     * @return string
     */
    public function getFinancement(): string
    {
        return $this->financement;
    }
    /**
     * Financement de l'EPCI, soit fiscalité additionnelle (FA), soit en fiscalité professionnelle unique (FPU)
     *
     * @param string $financement
     *
     * @return self
     */
    public function setFinancement(string $financement): self
    {
        $this->initialized['financement'] = true;
        $this->financement = $financement;
        return $this;
    }
    /**
     * Liste des départements de l'EPCI
     *
     * @return list<string>
     */
    public function getCodesDepartements(): array
    {
        return $this->codesDepartements;
    }
    /**
     * Liste des départements de l'EPCI
     *
     * @param list<string> $codesDepartements
     *
     * @return self
     */
    public function setCodesDepartements(array $codesDepartements): self
    {
        $this->initialized['codesDepartements'] = true;
        $this->codesDepartements = $codesDepartements;
        return $this;
    }
    /**
     * Liste des régions de l'EPCI
     *
     * @return list<string>
     */
    public function getCodesRegions(): array
    {
        return $this->codesRegions;
    }
    /**
     * Liste des régions de l'EPCI
     *
     * @param list<string> $codesRegions
     *
     * @return self
     */
    public function setCodesRegions(array $codesRegions): self
    {
        $this->initialized['codesRegions'] = true;
        $this->codesRegions = $codesRegions;
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
     * Surface de l'EPCI, en hectares
     *
     * @return float
     */
    public function getSurface(): float
    {
        return $this->surface;
    }
    /**
     * Surface de l'EPCI, en hectares
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
     * Centre de l'EPCI (Point GeoJSON)
     *
     * @return mixed
     */
    public function getCentre()
    {
        return $this->centre;
    }
    /**
     * Centre de l'EPCI (Point GeoJSON)
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
     * Contour de l'EPCI (Polygon GeoJSON)
     *
     * @return mixed
     */
    public function getContour()
    {
        return $this->contour;
    }
    /**
     * Contour de l'EPCI (Polygon GeoJSON)
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