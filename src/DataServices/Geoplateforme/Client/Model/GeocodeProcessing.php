<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model;

class GeocodeProcessing
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
    protected $step;
    /**
     * @var mixed
     */
    protected $validationProgress;
    /**
     * @var string
     */
    protected $validationError;
    /**
     * @var mixed
     */
    protected $geocodingProgress;
    /**
     * @var string
     */
    protected $geocodingError;
    /**
     * @var string
     */
    protected $globalError;
    /**
     * @var \DateTime
     */
    protected $startedAt;
    /**
     * @var \DateTime
     */
    protected $finishedAt;
    /**
     * @var \DateTime
     */
    protected $heartbeat;
    /**
     * @return string
     */
    public function getStep(): string
    {
        return $this->step;
    }
    /**
     * @param string $step
     *
     * @return self
     */
    public function setStep(string $step): self
    {
        $this->initialized['step'] = true;
        $this->step = $step;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getValidationProgress()
    {
        return $this->validationProgress;
    }
    /**
     * @param mixed $validationProgress
     *
     * @return self
     */
    public function setValidationProgress($validationProgress): self
    {
        $this->initialized['validationProgress'] = true;
        $this->validationProgress = $validationProgress;
        return $this;
    }
    /**
     * @return string
     */
    public function getValidationError(): string
    {
        return $this->validationError;
    }
    /**
     * @param string $validationError
     *
     * @return self
     */
    public function setValidationError(string $validationError): self
    {
        $this->initialized['validationError'] = true;
        $this->validationError = $validationError;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getGeocodingProgress()
    {
        return $this->geocodingProgress;
    }
    /**
     * @param mixed $geocodingProgress
     *
     * @return self
     */
    public function setGeocodingProgress($geocodingProgress): self
    {
        $this->initialized['geocodingProgress'] = true;
        $this->geocodingProgress = $geocodingProgress;
        return $this;
    }
    /**
     * @return string
     */
    public function getGeocodingError(): string
    {
        return $this->geocodingError;
    }
    /**
     * @param string $geocodingError
     *
     * @return self
     */
    public function setGeocodingError(string $geocodingError): self
    {
        $this->initialized['geocodingError'] = true;
        $this->geocodingError = $geocodingError;
        return $this;
    }
    /**
     * @return string
     */
    public function getGlobalError(): string
    {
        return $this->globalError;
    }
    /**
     * @param string $globalError
     *
     * @return self
     */
    public function setGlobalError(string $globalError): self
    {
        $this->initialized['globalError'] = true;
        $this->globalError = $globalError;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getStartedAt(): \DateTime
    {
        return $this->startedAt;
    }
    /**
     * @param \DateTime $startedAt
     *
     * @return self
     */
    public function setStartedAt(\DateTime $startedAt): self
    {
        $this->initialized['startedAt'] = true;
        $this->startedAt = $startedAt;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getFinishedAt(): \DateTime
    {
        return $this->finishedAt;
    }
    /**
     * @param \DateTime $finishedAt
     *
     * @return self
     */
    public function setFinishedAt(\DateTime $finishedAt): self
    {
        $this->initialized['finishedAt'] = true;
        $this->finishedAt = $finishedAt;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getHeartbeat(): \DateTime
    {
        return $this->heartbeat;
    }
    /**
     * @param \DateTime $heartbeat
     *
     * @return self
     */
    public function setHeartbeat(\DateTime $heartbeat): self
    {
        $this->initialized['heartbeat'] = true;
        $this->heartbeat = $heartbeat;
        return $this;
    }
}