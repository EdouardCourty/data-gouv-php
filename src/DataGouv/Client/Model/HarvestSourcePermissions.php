<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class HarvestSourcePermissions
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
    public function getPreview(): ?bool
    {
        return $this->preview;
    }
    /**
     * @param bool|null $preview
     *
     * @return self
     */
    public function setPreview(?bool $preview): self
    {
        $this->initialized['preview'] = true;
        $this->preview = $preview;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getRun(): ?bool
    {
        return $this->run;
    }
    /**
     * @param bool|null $run
     *
     * @return self
     */
    public function setRun(?bool $run): self
    {
        $this->initialized['run'] = true;
        $this->run = $run;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getSchedule(): ?bool
    {
        return $this->schedule;
    }
    /**
     * @param bool|null $schedule
     *
     * @return self
     */
    public function setSchedule(?bool $schedule): self
    {
        $this->initialized['schedule'] = true;
        $this->schedule = $schedule;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getValidate(): ?bool
    {
        return $this->validate;
    }
    /**
     * @param bool|null $validate
     *
     * @return self
     */
    public function setValidate(?bool $validate): self
    {
        $this->initialized['validate'] = true;
        $this->validate = $validate;
        return $this;
    }
}