<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class XAxisWrite
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
    /**
     * @return string
     */
    public function getColumnX(): string
    {
        return $this->columnX;
    }
    /**
     * @param string $columnX
     *
     * @return self
     */
    public function setColumnX(string $columnX): self
    {
        $this->initialized['columnX'] = true;
        $this->columnX = $columnX;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getSortXBy(): ?string
    {
        return $this->sortXBy;
    }
    /**
     * @param string|null $sortXBy
     *
     * @return self
     */
    public function setSortXBy(?string $sortXBy): self
    {
        $this->initialized['sortXBy'] = true;
        $this->sortXBy = $sortXBy;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getSortXDirection(): ?string
    {
        return $this->sortXDirection;
    }
    /**
     * @param string|null $sortXDirection
     *
     * @return self
     */
    public function setSortXDirection(?string $sortXDirection): self
    {
        $this->initialized['sortXDirection'] = true;
        $this->sortXDirection = $sortXDirection;
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