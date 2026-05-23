<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model;

class SearchCsvPostBody
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
     * Fichier CSV contenant les lignes à géocoder
     *
     * @var string
     */
    protected $data;
    /**
     * Liste des colonnes du fichier CSV à utiliser pour le géocodage. Celles-ci seront concaténées pour former le critère de recherche texte.
     * 
     * Si le paramètre n'est pas fourni toutes les colonnes seront concaténées, ce qui est rarement souhaitable.
     * 
     *
     * @var list<string>
     */
    protected $columns = '[]';
    /**
     * Liste des index à utiliser pour le géocodage (parmi address, poi, parcel)
     *
     * @var list<string>
     */
    protected $indexes = '[]';
    /**
     * Colonne contenant le type d’objet accepté pour le géocodage de la ligne (address)
     *
     * @var string
     */
    protected $type = '';
    /**
     * Colonne contenant le code INSEE de la commune à utiliser comme filtre (address, poi)
     *
     * @var string
     */
    protected $citycode = '';
    /**
     * Colonne contenant le code postal à utiliser comme filtre (address, poi)
     *
     * @var string
     */
    protected $postcode = '';
    /**
     * Colonne contenant la catégorie de POI à utiliser comme filtre (poi)
     *
     * @var string
     */
    protected $category = '';
    /**
     * Colonne contenant la longitude du point de recherche
     *
     * @var string
     */
    protected $lon = '';
    /**
     * Colonne contenant la latitude du point de recherche
     *
     * @var string
     */
    protected $lat = '';
    /**
     * Colonne contenant le code département à utiliser comme filtre (parcel)
     *
     * @var string
     */
    protected $departmentcode = '';
    /**
     * Colonne contenant le code commune  à utiliser comme filtre (parcel)
     *
     * @var string
     */
    protected $municipalitycode = '';
    /**
     * Colonne contenant l'ancien code commune à utiliser comme filtre (parcel)
     *
     * @var string
     */
    protected $oldmunicipalitycode = '';
    /**
     * Colonne contenant le code d'arrondissement à utiliser comme filtre (parcel)
     *
     * @var string
     */
    protected $districtcode = '';
    /**
     * Colonne contenant le numéro de section à utiliser comme filtre (parcel)
     *
     * @var string
     */
    protected $section = '';
    /**
     * Colonne contenant le numéro de feuille à utiliser comme filtre (parcel)
     *
     * @var string
     */
    protected $sheet = '';
    /**
     * Colonne contenant le numéro de parcelle à utiliser comme filtre (parcel)
     *
     * @var string
     */
    protected $number = '';
    /**
     * Liste des colonnes de type résultat à conserver dans le fichier CSV de sortie.
     * 
     * Par défaut toutes les colonnes disponibles sont retournées.
     * 
     *
     * @var list<string>
     */
    protected $resultColumns = '[]';
    /**
     * Fichier CSV contenant les lignes à géocoder
     *
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }
    /**
     * Fichier CSV contenant les lignes à géocoder
     *
     * @param string $data
     *
     * @return self
     */
    public function setData(string $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * Liste des colonnes du fichier CSV à utiliser pour le géocodage. Celles-ci seront concaténées pour former le critère de recherche texte.
     * 
     * Si le paramètre n'est pas fourni toutes les colonnes seront concaténées, ce qui est rarement souhaitable.
     * 
     *
     * @return list<string>
     */
    public function getColumns(): array
    {
        return $this->columns;
    }
    /**
    * Liste des colonnes du fichier CSV à utiliser pour le géocodage. Celles-ci seront concaténées pour former le critère de recherche texte.
    
    Si le paramètre n'est pas fourni toutes les colonnes seront concaténées, ce qui est rarement souhaitable.
    
    *
    * @param list<string> $columns
    *
    * @return self
    */
    public function setColumns(array $columns): self
    {
        $this->initialized['columns'] = true;
        $this->columns = $columns;
        return $this;
    }
    /**
     * Liste des index à utiliser pour le géocodage (parmi address, poi, parcel)
     *
     * @return list<string>
     */
    public function getIndexes(): array
    {
        return $this->indexes;
    }
    /**
     * Liste des index à utiliser pour le géocodage (parmi address, poi, parcel)
     *
     * @param list<string> $indexes
     *
     * @return self
     */
    public function setIndexes(array $indexes): self
    {
        $this->initialized['indexes'] = true;
        $this->indexes = $indexes;
        return $this;
    }
    /**
     * Colonne contenant le type d’objet accepté pour le géocodage de la ligne (address)
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Colonne contenant le type d’objet accepté pour le géocodage de la ligne (address)
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
     * Colonne contenant le code INSEE de la commune à utiliser comme filtre (address, poi)
     *
     * @return string
     */
    public function getCitycode(): string
    {
        return $this->citycode;
    }
    /**
     * Colonne contenant le code INSEE de la commune à utiliser comme filtre (address, poi)
     *
     * @param string $citycode
     *
     * @return self
     */
    public function setCitycode(string $citycode): self
    {
        $this->initialized['citycode'] = true;
        $this->citycode = $citycode;
        return $this;
    }
    /**
     * Colonne contenant le code postal à utiliser comme filtre (address, poi)
     *
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }
    /**
     * Colonne contenant le code postal à utiliser comme filtre (address, poi)
     *
     * @param string $postcode
     *
     * @return self
     */
    public function setPostcode(string $postcode): self
    {
        $this->initialized['postcode'] = true;
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * Colonne contenant la catégorie de POI à utiliser comme filtre (poi)
     *
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }
    /**
     * Colonne contenant la catégorie de POI à utiliser comme filtre (poi)
     *
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * Colonne contenant la longitude du point de recherche
     *
     * @return string
     */
    public function getLon(): string
    {
        return $this->lon;
    }
    /**
     * Colonne contenant la longitude du point de recherche
     *
     * @param string $lon
     *
     * @return self
     */
    public function setLon(string $lon): self
    {
        $this->initialized['lon'] = true;
        $this->lon = $lon;
        return $this;
    }
    /**
     * Colonne contenant la latitude du point de recherche
     *
     * @return string
     */
    public function getLat(): string
    {
        return $this->lat;
    }
    /**
     * Colonne contenant la latitude du point de recherche
     *
     * @param string $lat
     *
     * @return self
     */
    public function setLat(string $lat): self
    {
        $this->initialized['lat'] = true;
        $this->lat = $lat;
        return $this;
    }
    /**
     * Colonne contenant le code département à utiliser comme filtre (parcel)
     *
     * @return string
     */
    public function getDepartmentcode(): string
    {
        return $this->departmentcode;
    }
    /**
     * Colonne contenant le code département à utiliser comme filtre (parcel)
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
     * Colonne contenant le code commune  à utiliser comme filtre (parcel)
     *
     * @return string
     */
    public function getMunicipalitycode(): string
    {
        return $this->municipalitycode;
    }
    /**
     * Colonne contenant le code commune  à utiliser comme filtre (parcel)
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
     * Colonne contenant l'ancien code commune à utiliser comme filtre (parcel)
     *
     * @return string
     */
    public function getOldmunicipalitycode(): string
    {
        return $this->oldmunicipalitycode;
    }
    /**
     * Colonne contenant l'ancien code commune à utiliser comme filtre (parcel)
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
     * Colonne contenant le code d'arrondissement à utiliser comme filtre (parcel)
     *
     * @return string
     */
    public function getDistrictcode(): string
    {
        return $this->districtcode;
    }
    /**
     * Colonne contenant le code d'arrondissement à utiliser comme filtre (parcel)
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
     * Colonne contenant le numéro de section à utiliser comme filtre (parcel)
     *
     * @return string
     */
    public function getSection(): string
    {
        return $this->section;
    }
    /**
     * Colonne contenant le numéro de section à utiliser comme filtre (parcel)
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
     * Colonne contenant le numéro de feuille à utiliser comme filtre (parcel)
     *
     * @return string
     */
    public function getSheet(): string
    {
        return $this->sheet;
    }
    /**
     * Colonne contenant le numéro de feuille à utiliser comme filtre (parcel)
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
     * Colonne contenant le numéro de parcelle à utiliser comme filtre (parcel)
     *
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }
    /**
     * Colonne contenant le numéro de parcelle à utiliser comme filtre (parcel)
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
     * Liste des colonnes de type résultat à conserver dans le fichier CSV de sortie.
     * 
     * Par défaut toutes les colonnes disponibles sont retournées.
     * 
     *
     * @return list<string>
     */
    public function getResultColumns(): array
    {
        return $this->resultColumns;
    }
    /**
    * Liste des colonnes de type résultat à conserver dans le fichier CSV de sortie.
    
    Par défaut toutes les colonnes disponibles sont retournées.
    
    *
    * @param list<string> $resultColumns
    *
    * @return self
    */
    public function setResultColumns(array $resultColumns): self
    {
        $this->initialized['resultColumns'] = true;
        $this->resultColumns = $resultColumns;
        return $this;
    }
}