<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class Interval
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
     * The interval without unit
     *
     * @var int
     */
    protected $every;
    /**
     * The period/interval type
     *
     * @var string
     */
    protected $period;
    /**
     * The interval without unit
     *
     * @return int
     */
    public function getEvery(): int
    {
        return $this->every;
    }
    /**
     * The interval without unit
     *
     * @param int $every
     *
     * @return self
     */
    public function setEvery(int $every): self
    {
        $this->initialized['every'] = true;
        $this->every = $every;
        return $this;
    }
    /**
     * The period/interval type
     *
     * @return string
     */
    public function getPeriod(): string
    {
        return $this->period;
    }
    /**
     * The period/interval type
     *
     * @param string $period
     *
     * @return self
     */
    public function setPeriod(string $period): self
    {
        $this->initialized['period'] = true;
        $this->period = $period;
        return $this;
    }
}