<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class OrganizationPermissions
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

    public function getDelete(): ?bool
    {
        return $this->delete;
    }

    public function setDelete(?bool $delete): self
    {
        $this->initialized['delete'] = true;
        $this->delete = $delete;

        return $this;
    }

    public function getEdit(): ?bool
    {
        return $this->edit;
    }

    public function setEdit(?bool $edit): self
    {
        $this->initialized['edit'] = true;
        $this->edit = $edit;

        return $this;
    }

    public function getHarvest(): ?bool
    {
        return $this->harvest;
    }

    public function setHarvest(?bool $harvest): self
    {
        $this->initialized['harvest'] = true;
        $this->harvest = $harvest;

        return $this;
    }

    public function getMembers(): ?bool
    {
        return $this->members;
    }

    public function setMembers(?bool $members): self
    {
        $this->initialized['members'] = true;
        $this->members = $members;

        return $this;
    }

    public function getPrivate(): ?bool
    {
        return $this->private;
    }

    public function setPrivate(?bool $private): self
    {
        $this->initialized['private'] = true;
        $this->private = $private;

        return $this;
    }
}
