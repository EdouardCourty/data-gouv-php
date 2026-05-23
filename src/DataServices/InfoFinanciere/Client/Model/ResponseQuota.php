<?php

namespace Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model;

class ResponseQuota extends \ArrayObject
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
     * @var float
     */
    protected $errorcode;
    /**
     * @var string
     */
    protected $resetTime;
    /**
     * @var string
     */
    protected $limitTimeUnit;
    /**
     * @var float
     */
    protected $callLimit;
    /**
     * @var string
     */
    protected $error;
    /**
     * @return float
     */
    public function getErrorcode(): float
    {
        return $this->errorcode;
    }
    /**
     * @param float $errorcode
     *
     * @return self
     */
    public function setErrorcode(float $errorcode): self
    {
        $this->initialized['errorcode'] = true;
        $this->errorcode = $errorcode;
        return $this;
    }
    /**
     * @return string
     */
    public function getResetTime(): string
    {
        return $this->resetTime;
    }
    /**
     * @param string $resetTime
     *
     * @return self
     */
    public function setResetTime(string $resetTime): self
    {
        $this->initialized['resetTime'] = true;
        $this->resetTime = $resetTime;
        return $this;
    }
    /**
     * @return string
     */
    public function getLimitTimeUnit(): string
    {
        return $this->limitTimeUnit;
    }
    /**
     * @param string $limitTimeUnit
     *
     * @return self
     */
    public function setLimitTimeUnit(string $limitTimeUnit): self
    {
        $this->initialized['limitTimeUnit'] = true;
        $this->limitTimeUnit = $limitTimeUnit;
        return $this;
    }
    /**
     * @return float
     */
    public function getCallLimit(): float
    {
        return $this->callLimit;
    }
    /**
     * @param float $callLimit
     *
     * @return self
     */
    public function setCallLimit(float $callLimit): self
    {
        $this->initialized['callLimit'] = true;
        $this->callLimit = $callLimit;
        return $this;
    }
    /**
     * @return string
     */
    public function getError(): string
    {
        return $this->error;
    }
    /**
     * @param string $error
     *
     * @return self
     */
    public function setError(string $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
}