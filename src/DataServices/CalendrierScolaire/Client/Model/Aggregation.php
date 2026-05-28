<?php

namespace Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Model;

class Aggregation extends \ArrayObject
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
     * @var int
     */
    protected $count;
    /**
     * @var string
     */
    protected $couNameEn;
    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * @return string
     */
    public function getCouNameEn(): string
    {
        return $this->couNameEn;
    }
    /**
     * @param string $couNameEn
     *
     * @return self
     */
    public function setCouNameEn(string $couNameEn): self
    {
        $this->initialized['couNameEn'] = true;
        $this->couNameEn = $couNameEn;
        return $this;
    }
}