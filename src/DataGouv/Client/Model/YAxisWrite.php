<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class YAxisWrite
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
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

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }

    public function getMax(): ?float
    {
        return $this->max;
    }

    public function setMax(?float $max): self
    {
        $this->initialized['max'] = true;
        $this->max = $max;

        return $this;
    }

    public function getMin(): ?float
    {
        return $this->min;
    }

    public function setMin(?float $min): self
    {
        $this->initialized['min'] = true;
        $this->min = $min;

        return $this;
    }

    public function getUnit(): ?string
    {
        return $this->unit;
    }

    public function setUnit(?string $unit): self
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;

        return $this;
    }

    public function getUnitPosition(): ?string
    {
        return $this->unitPosition;
    }

    public function setUnitPosition(?string $unitPosition): self
    {
        $this->initialized['unitPosition'] = true;
        $this->unitPosition = $unitPosition;

        return $this;
    }
}
