<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class OrganizationReadPermissions
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
     * @var bool|null
     */
    protected $harvest;
    /**
     * @var bool|null
     */
    protected $members;
    /**
     * @var bool|null
     */
    protected $private;
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
    /**
     * @return bool|null
     */
    public function getHarvest(): ?bool
    {
        return $this->harvest;
    }
    /**
     * @param bool|null $harvest
     *
     * @return self
     */
    public function setHarvest(?bool $harvest): self
    {
        $this->initialized['harvest'] = true;
        $this->harvest = $harvest;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getMembers(): ?bool
    {
        return $this->members;
    }
    /**
     * @param bool|null $members
     *
     * @return self
     */
    public function setMembers(?bool $members): self
    {
        $this->initialized['members'] = true;
        $this->members = $members;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getPrivate(): ?bool
    {
        return $this->private;
    }
    /**
     * @param bool|null $private
     *
     * @return self
     */
    public function setPrivate(?bool $private): self
    {
        $this->initialized['private'] = true;
        $this->private = $private;
        return $this;
    }
}