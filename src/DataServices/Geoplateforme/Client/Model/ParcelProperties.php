<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model;

class ParcelProperties
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
     * Identifiant de la parcelle
     *
     * @var string
     */
    protected $id;
    /**
     * Code du département
     *
     * @var string
     */
    protected $departmentcode;
    /**
     * Code de la commune
     *
     * @var string
     */
    protected $municipalitycode;
    /**
     * Nom de la commune
     *
     * @var string
     */
    protected $city;
    /**
     * Code de l'ancienne commune
     *
     * @var string
     */
    protected $oldmunicipalitycode;
    /**
     * Code insee de l'arrondissement
     *
     * @var string
     */
    protected $districtcode;
    /**
     * Section cadastrale
     *
     * @var string
     */
    protected $section;
    /**
     * Numéro cadastral
     *
     * @var string
     */
    protected $number;
    /**
     * Feuille cadastrale
     *
     * @var string
     */
    protected $sheet;
    /**
     * @var GeometryPolygon
     */
    protected $truegeometry;
    /**
     * @var float
     */
    protected $score;
    /**
     * @var string
     */
    protected $type;
    /**
     * Identifiant de la parcelle
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifiant de la parcelle
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Code du département
     *
     * @return string
     */
    public function getDepartmentcode(): string
    {
        return $this->departmentcode;
    }
    /**
     * Code du département
     *
     * @param string $departmentcode
     *
     * @return self
     */
    public function setDepartmentcode(string $departmentcode): self
    {
        $this->initialized['departmentcode'] = true;
        $this->departmentcode = $departmentcode;
        return $this;
    }
    /**
     * Code de la commune
     *
     * @return string
     */
    public function getMunicipalitycode(): string
    {
        return $this->municipalitycode;
    }
    /**
     * Code de la commune
     *
     * @param string $municipalitycode
     *
     * @return self
     */
    public function setMunicipalitycode(string $municipalitycode): self
    {
        $this->initialized['municipalitycode'] = true;
        $this->municipalitycode = $municipalitycode;
        return $this;
    }
    /**
     * Nom de la commune
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * Nom de la commune
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * Code de l'ancienne commune
     *
     * @return string
     */
    public function getOldmunicipalitycode(): string
    {
        return $this->oldmunicipalitycode;
    }
    /**
     * Code de l'ancienne commune
     *
     * @param string $oldmunicipalitycode
     *
     * @return self
     */
    public function setOldmunicipalitycode(string $oldmunicipalitycode): self
    {
        $this->initialized['oldmunicipalitycode'] = true;
        $this->oldmunicipalitycode = $oldmunicipalitycode;
        return $this;
    }
    /**
     * Code insee de l'arrondissement
     *
     * @return string
     */
    public function getDistrictcode(): string
    {
        return $this->districtcode;
    }
    /**
     * Code insee de l'arrondissement
     *
     * @param string $districtcode
     *
     * @return self
     */
    public function setDistrictcode(string $districtcode): self
    {
        $this->initialized['districtcode'] = true;
        $this->districtcode = $districtcode;
        return $this;
    }
    /**
     * Section cadastrale
     *
     * @return string
     */
    public function getSection(): string
    {
        return $this->section;
    }
    /**
     * Section cadastrale
     *
     * @param string $section
     *
     * @return self
     */
    public function setSection(string $section): self
    {
        $this->initialized['section'] = true;
        $this->section = $section;
        return $this;
    }
    /**
     * Numéro cadastral
     *
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }
    /**
     * Numéro cadastral
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * Feuille cadastrale
     *
     * @return string
     */
    public function getSheet(): string
    {
        return $this->sheet;
    }
    /**
     * Feuille cadastrale
     *
     * @param string $sheet
     *
     * @return self
     */
    public function setSheet(string $sheet): self
    {
        $this->initialized['sheet'] = true;
        $this->sheet = $sheet;
        return $this;
    }
    /**
     * @return GeometryPolygon
     */
    public function getTruegeometry(): GeometryPolygon
    {
        return $this->truegeometry;
    }
    /**
     * @param GeometryPolygon $truegeometry
     *
     * @return self
     */
    public function setTruegeometry(GeometryPolygon $truegeometry): self
    {
        $this->initialized['truegeometry'] = true;
        $this->truegeometry = $truegeometry;
        return $this;
    }
    /**
     * @return float
     */
    public function getScore(): float
    {
        return $this->score;
    }
    /**
     * @param float $score
     *
     * @return self
     */
    public function setScore(float $score): self
    {
        $this->initialized['score'] = true;
        $this->score = $score;
        return $this;
    }
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
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
}