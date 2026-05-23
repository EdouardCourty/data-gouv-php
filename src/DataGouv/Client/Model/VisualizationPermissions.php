<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class VisualizationPermissions
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
     * @var bool|null
     */
    protected $delete;
    /**
     * @var bool|null
     */
    protected $edit;
    /**
     * @return bool|null
     */
    public function getDelete(): ?bool
    {
        return $this->delete;
    }
    /**
     * @param bool|null $delete
     *
     * @return self
     */
    public function setDelete(?bool $delete): self
    {
        $this->initialized['delete'] = true;
        $this->delete = $delete;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getEdit(): ?bool
    {
        return $this->edit;
    }
    /**
     * @param bool|null $edit
     *
     * @return self
     */
    public function setEdit(?bool $edit): self
    {
        $this->initialized['edit'] = true;
        $this->edit = $edit;
        return $this;
    }
}