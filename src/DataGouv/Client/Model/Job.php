<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class Job
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
     * The job execution arguments
     *
     * @var list<mixed>
     */
    protected $args = array();
    /**
     * @var Crontab
     */
    protected $crontab;
    /**
     * The job description
     *
     * @var string|null
     */
    protected $description;
    /**
     * Is this job enabled
     *
     * @var bool|null
     */
    protected $enabled = false;
    /**
     * The job unique identifier
     *
     * @var string|null
     */
    protected $id;
    /**
     * @var Interval
     */
    protected $interval;
    /**
     * The job execution keyword arguments
     *
     * @var mixed
     */
    protected $kwargs;
    /**
     * The last job execution date
     *
     * @var \DateTime|null
     */
    protected $lastRunAt;
    /**
     * The last execution task id
     *
     * @var string|null
     */
    protected $lastRunId;
    /**
     * The job unique name
     *
     * @var string
     */
    protected $name;
    /**
     * The schedule display
     *
     * @var string|null
     */
    protected $schedule;
    /**
     * The task name
     *
     * @var string
     */
    protected $task;
    /**
     * The job execution arguments
     *
     * @return list<mixed>
     */
    public function getArgs(): array
    {
        return $this->args;
    }
    /**
     * The job execution arguments
     *
     * @param list<mixed> $args
     *
     * @return self
     */
    public function setArgs(array $args): self
    {
        $this->initialized['args'] = true;
        $this->args = $args;
        return $this;
    }
    /**
     * @return Crontab
     */
    public function getCrontab(): Crontab
    {
        return $this->crontab;
    }
    /**
     * @param Crontab $crontab
     *
     * @return self
     */
    public function setCrontab(Crontab $crontab): self
    {
        $this->initialized['crontab'] = true;
        $this->crontab = $crontab;
        return $this;
    }
    /**
     * The job description
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The job description
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Is this job enabled
     *
     * @return bool|null
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }
    /**
     * Is this job enabled
     *
     * @param bool|null $enabled
     *
     * @return self
     */
    public function setEnabled(?bool $enabled): self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * The job unique identifier
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The job unique identifier
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return Interval
     */
    public function getInterval(): Interval
    {
        return $this->interval;
    }
    /**
     * @param Interval $interval
     *
     * @return self
     */
    public function setInterval(Interval $interval): self
    {
        $this->initialized['interval'] = true;
        $this->interval = $interval;
        return $this;
    }
    /**
     * The job execution keyword arguments
     *
     * @return mixed
     */
    public function getKwargs()
    {
        return $this->kwargs;
    }
    /**
     * The job execution keyword arguments
     *
     * @param mixed $kwargs
     *
     * @return self
     */
    public function setKwargs($kwargs): self
    {
        $this->initialized['kwargs'] = true;
        $this->kwargs = $kwargs;
        return $this;
    }
    /**
     * The last job execution date
     *
     * @return \DateTime|null
     */
    public function getLastRunAt(): ?\DateTime
    {
        return $this->lastRunAt;
    }
    /**
     * The last job execution date
     *
     * @param \DateTime|null $lastRunAt
     *
     * @return self
     */
    public function setLastRunAt(?\DateTime $lastRunAt): self
    {
        $this->initialized['lastRunAt'] = true;
        $this->lastRunAt = $lastRunAt;
        return $this;
    }
    /**
     * The last execution task id
     *
     * @return string|null
     */
    public function getLastRunId(): ?string
    {
        return $this->lastRunId;
    }
    /**
     * The last execution task id
     *
     * @param string|null $lastRunId
     *
     * @return self
     */
    public function setLastRunId(?string $lastRunId): self
    {
        $this->initialized['lastRunId'] = true;
        $this->lastRunId = $lastRunId;
        return $this;
    }
    /**
     * The job unique name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The job unique name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The schedule display
     *
     * @return string|null
     */
    public function getSchedule(): ?string
    {
        return $this->schedule;
    }
    /**
     * The schedule display
     *
     * @param string|null $schedule
     *
     * @return self
     */
    public function setSchedule(?string $schedule): self
    {
        $this->initialized['schedule'] = true;
        $this->schedule = $schedule;
        return $this;
    }
    /**
     * The task name
     *
     * @return string
     */
    public function getTask(): string
    {
        return $this->task;
    }
    /**
     * The task name
     *
     * @param string $task
     *
     * @return self
     */
    public function setTask(string $task): self
    {
        $this->initialized['task'] = true;
        $this->task = $task;
        return $this;
    }
}