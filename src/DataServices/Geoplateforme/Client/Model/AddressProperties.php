<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model;

class AddressProperties
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
     * Libellé complet de l'adresse
     *
     * @var string
     */
    protected $label;
    /**
     * @var string
     */
    protected $id;
    /**
     * Code postal
     *
     * @var string
     */
    protected $postcode;
    /**
     * Commune de l'adresse
     *
     * @var string
     */
    protected $city;
    /**
     * Arrondissement de l'adresse
     *
     * @var string
     */
    protected $district;
    /**
     * Rue de l'adresse
     *
     * @var string
     */
    protected $street;
    /**
     * @var string
     */
    protected $housenumber;
    /**
     * Code INSEE
     *
     * @var string
     */
    protected $citycode;
    /**
     * Longitude de l'adresse
     *
     * @var float
     */
    protected $x;
    /**
     * Latitude de l'adresse
     *
     * @var float
     */
    protected $y;
    /**
     * @var float
     */
    protected $score;
    /**
     * @var float
     */
    protected $score2;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $type;
    /**
     * Rétro-compatibilité
     *
     * @var string
     */
    protected $type2;
    /**
     * @var string
     */
    protected $context;
    /**
     * @var float
     */
    protected $importance;
    /**
     * Libellé complet de l'adresse
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }
    /**
     * Libellé complet de l'adresse
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
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
     * Code postal
     *
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }
    /**
     * Code postal
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
     * Commune de l'adresse
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * Commune de l'adresse
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
     * Arrondissement de l'adresse
     *
     * @return string
     */
    public function getDistrict(): string
    {
        return $this->district;
    }
    /**
     * Arrondissement de l'adresse
     *
     * @param string $district
     *
     * @return self
     */
    public function setDistrict(string $district): self
    {
        $this->initialized['district'] = true;
        $this->district = $district;
        return $this;
    }
    /**
     * Rue de l'adresse
     *
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }
    /**
     * Rue de l'adresse
     *
     * @param string $street
     *
     * @return self
     */
    public function setStreet(string $street): self
    {
        $this->initialized['street'] = true;
        $this->street = $street;
        return $this;
    }
    /**
     * @return string
     */
    public function getHousenumber(): string
    {
        return $this->housenumber;
    }
    /**
     * @param string $housenumber
     *
     * @return self
     */
    public function setHousenumber(string $housenumber): self
    {
        $this->initialized['housenumber'] = true;
        $this->housenumber = $housenumber;
        return $this;
    }
    /**
     * Code INSEE
     *
     * @return string
     */
    public function getCitycode(): string
    {
        return $this->citycode;
    }
    /**
     * Code INSEE
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
     * Longitude de l'adresse
     *
     * @return float
     */
    public function getX(): float
    {
        return $this->x;
    }
    /**
     * Longitude de l'adresse
     *
     * @param float $x
     *
     * @return self
     */
    public function setX(float $x): self
    {
        $this->initialized['x'] = true;
        $this->x = $x;
        return $this;
    }
    /**
     * Latitude de l'adresse
     *
     * @return float
     */
    public function getY(): float
    {
        return $this->y;
    }
    /**
     * Latitude de l'adresse
     *
     * @param float $y
     *
     * @return self
     */
    public function setY(float $y): self
    {
        $this->initialized['y'] = true;
        $this->y = $y;
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
     * @return float
     */
    public function getScore2(): float
    {
        return $this->score2;
    }
    /**
     * @param float $score2
     *
     * @return self
     */
    public function setScore2(float $score2): self
    {
        $this->initialized['score2'] = true;
        $this->score2 = $score2;
        return $this;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
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
    /**
     * Rétro-compatibilité
     *
     * @return string
     */
    public function getType2(): string
    {
        return $this->type2;
    }
    /**
     * Rétro-compatibilité
     *
     * @param string $type2
     *
     * @return self
     */
    public function setType2(string $type2): self
    {
        $this->initialized['type2'] = true;
        $this->type2 = $type2;
        return $this;
    }
    /**
     * @return string
     */
    public function getContext(): string
    {
        return $this->context;
    }
    /**
     * @param string $context
     *
     * @return self
     */
    public function setContext(string $context): self
    {
        $this->initialized['context'] = true;
        $this->context = $context;
        return $this;
    }
    /**
     * @return float
     */
    public function getImportance(): float
    {
        return $this->importance;
    }
    /**
     * @param float $importance
     *
     * @return self
     */
    public function setImportance(float $importance): self
    {
        $this->initialized['importance'] = true;
        $this->importance = $importance;
        return $this;
    }
}