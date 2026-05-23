<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class XAxisRead
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
     * @var string
     */
    protected $columnX;
    /**
     * @var string|null
     */
    protected $sortXBy;
    /**
     * @var string|null
     */
    protected $sortXDirection;
    /**
     * @var string
     */
    protected $type;

    public function getColumnX(): string
    {
        return $this->columnX;
    }

    public function setColumnX(string $columnX): self
    {
        $this->initialized['columnX'] = true;
        $this->columnX = $columnX;

        return $this;
    }

    public function getSortXBy(): ?string
    {
        return $this->sortXBy;
    }

    public function setSortXBy(?string $sortXBy): self
    {
        $this->initialized['sortXBy'] = true;
        $this->sortXBy = $sortXBy;

        return $this;
    }

    public function getSortXDirection(): ?string
    {
        return $this->sortXDirection;
    }

    public function setSortXDirection(?string $sortXDirection): self
    {
        $this->initialized['sortXDirection'] = true;
        $this->sortXDirection = $sortXDirection;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
