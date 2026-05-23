<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model;

class PoiProperties
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
     * Libellé du toponyme
     *
     * @var string
     */
    protected $toponym;
    /**
     * @var list<string>
     */
    protected $postcode;
    /**
     * @var list<string>
     */
    protected $citycode;
    /**
     * @var list<string>
     */
    protected $city;
    /**
     * @var list<string>
     */
    protected $category;
    /**
     * @var mixed
     */
    protected $extrafields;
    /**
     * @var Geometry
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
     * Libellé du toponyme
     *
     * @return string
     */
    public function getToponym(): string
    {
        return $this->toponym;
    }
    /**
     * Libellé du toponyme
     *
     * @param string $toponym
     *
     * @return self
     */
    public function setToponym(string $toponym): self
    {
        $this->initialized['toponym'] = true;
        $this->toponym = $toponym;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getPostcode(): array
    {
        return $this->postcode;
    }
    /**
     * @param list<string> $postcode
     *
     * @return self
     */
    public function setPostcode(array $postcode): self
    {
        $this->initialized['postcode'] = true;
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getCitycode(): array
    {
        return $this->citycode;
    }
    /**
     * @param list<string> $citycode
     *
     * @return self
     */
    public function setCitycode(array $citycode): self
    {
        $this->initialized['citycode'] = true;
        $this->citycode = $citycode;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getCity(): array
    {
        return $this->city;
    }
    /**
     * @param list<string> $city
     *
     * @return self
     */
    public function setCity(array $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getCategory(): array
    {
        return $this->category;
    }
    /**
     * @param list<string> $category
     *
     * @return self
     */
    public function setCategory(array $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getExtrafields()
    {
        return $this->extrafields;
    }
    /**
     * @param mixed $extrafields
     *
     * @return self
     */
    public function setExtrafields($extrafields): self
    {
        $this->initialized['extrafields'] = true;
        $this->extrafields = $extrafields;
        return $this;
    }
    /**
     * @return Geometry
     */
    public function getTruegeometry(): Geometry
    {
        return $this->truegeometry;
    }
    /**
     * @param Geometry $truegeometry
     *
     * @return self
     */
    public function setTruegeometry(Geometry $truegeometry): self
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