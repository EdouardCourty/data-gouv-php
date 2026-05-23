<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class YAxisWrite
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
     * @var string|null
     */
    protected $label;
    /**
     * @var float|null
     */
    protected $max;
    /**
     * @var float|null
     */
    protected $min;
    /**
     * @var string|null
     */
    protected $unit;
    /**
     * @var string|null
     */
    protected $unitPosition;
    /**
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }
    /**
     * @param string|null $label
     *
     * @return self
     */
    public function setLabel(?string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
    /**
     * @return float|null
     */
    public function getMax(): ?float
    {
        return $this->max;
    }
    /**
     * @param float|null $max
     *
     * @return self
     */
    public function setMax(?float $max): self
    {
        $this->initialized['max'] = true;
        $this->max = $max;
        return $this;
    }
    /**
     * @return float|null
     */
    public function getMin(): ?float
    {
        return $this->min;
    }
    /**
     * @param float|null $min
     *
     * @return self
     */
    public function setMin(?float $min): self
    {
        $this->initialized['min'] = true;
        $this->min = $min;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }
    /**
     * @param string|null $unit
     *
     * @return self
     */
    public function setUnit(?string $unit): self
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getUnitPosition(): ?string
    {
        return $this->unitPosition;
    }
    /**
     * @param string|null $unitPosition
     *
     * @return self
     */
    public function setUnitPosition(?string $unitPosition): self
    {
        $this->initialized['unitPosition'] = true;
        $this->unitPosition = $unitPosition;
        return $this;
    }
}