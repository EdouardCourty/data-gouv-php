<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class HarvestSourcePermissions
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
    protected $preview;
    /**
     * @var bool|null
     */
    protected $run;
    /**
     * @var bool|null
     */
    protected $schedule;
    /**
     * @var bool|null
     */
    protected $validate;

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

    public function getPreview(): ?bool
    {
        return $this->preview;
    }

    public function setPreview(?bool $preview): self
    {
        $this->initialized['preview'] = true;
        $this->preview = $preview;

        return $this;
    }

    public function getRun(): ?bool
    {
        return $this->run;
    }

    public function setRun(?bool $run): self
    {
        $this->initialized['run'] = true;
        $this->run = $run;

        return $this;
    }

    public function getSchedule(): ?bool
    {
        return $this->schedule;
    }

    public function setSchedule(?bool $schedule): self
    {
        $this->initialized['schedule'] = true;
        $this->schedule = $schedule;

        return $this;
    }

    public function getValidate(): ?bool
    {
        return $this->validate;
    }

    public function setValidate(?bool $validate): self
    {
        $this->initialized['validate'] = true;
        $this->validate = $validate;

        return $this;
    }
}
