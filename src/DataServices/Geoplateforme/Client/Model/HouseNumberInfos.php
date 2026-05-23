<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model;

class HouseNumberInfos
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
    protected $date;
    /**
     * @var list<string>
     */
    protected $kind;
    /**
     * @var string
     */
    protected $source;
    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }
    /**
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getKind(): array
    {
        return $this->kind;
    }
    /**
     * @param list<string> $kind
     *
     * @return self
     */
    public function setKind(array $kind): self
    {
        $this->initialized['kind'] = true;
        $this->kind = $kind;
        return $this;
    }
    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }
    /**
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source): self
    {
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
}