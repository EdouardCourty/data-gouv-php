<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model;

class ProjectParams
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
    protected $maxInputFileSize;
    /**
     * @var float
     */
    protected $concurrency;
    /**
     * @return string
     */
    public function getMaxInputFileSize(): string
    {
        return $this->maxInputFileSize;
    }
    /**
     * @param string $maxInputFileSize
     *
     * @return self
     */
    public function setMaxInputFileSize(string $maxInputFileSize): self
    {
        $this->initialized['maxInputFileSize'] = true;
        $this->maxInputFileSize = $maxInputFileSize;
        return $this;
    }
    /**
     * @return float
     */
    public function getConcurrency(): float
    {
        return $this->concurrency;
    }
    /**
     * @param float $concurrency
     *
     * @return self
     */
    public function setConcurrency(float $concurrency): self
    {
        $this->initialized['concurrency'] = true;
        $this->concurrency = $concurrency;
        return $this;
    }
}