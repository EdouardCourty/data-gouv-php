<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class Job
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
     * The job execution arguments
     *
     * @var list<mixed>
     */
    protected $args = [];
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
     */
    public function setArgs(array $args): self
    {
        $this->initialized['args'] = true;
        $this->args = $args;

        return $this;
    }

    public function getCrontab(): Crontab
    {
        return $this->crontab;
    }

    public function setCrontab(Crontab $crontab): self
    {
        $this->initialized['crontab'] = true;
        $this->crontab = $crontab;

        return $this;
    }

    /**
     * The job description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * The job description
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * Is this job enabled
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * Is this job enabled
     */
    public function setEnabled(?bool $enabled): self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * The job unique identifier
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The job unique identifier
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getInterval(): Interval
    {
        return $this->interval;
    }

    public function setInterval(Interval $interval): self
    {
        $this->initialized['interval'] = true;
        $this->interval = $interval;

        return $this;
    }

    /**
     * The job execution keyword arguments
     */
    public function getKwargs()
    {
        return $this->kwargs;
    }

    /**
     * The job execution keyword arguments
     */
    public function setKwargs($kwargs): self
    {
        $this->initialized['kwargs'] = true;
        $this->kwargs = $kwargs;

        return $this;
    }

    /**
     * The last job execution date
     */
    public function getLastRunAt(): ?\DateTime
    {
        return $this->lastRunAt;
    }

    /**
     * The last job execution date
     */
    public function setLastRunAt(?\DateTime $lastRunAt): self
    {
        $this->initialized['lastRunAt'] = true;
        $this->lastRunAt = $lastRunAt;

        return $this;
    }

    /**
     * The last execution task id
     */
    public function getLastRunId(): ?string
    {
        return $this->lastRunId;
    }

    /**
     * The last execution task id
     */
    public function setLastRunId(?string $lastRunId): self
    {
        $this->initialized['lastRunId'] = true;
        $this->lastRunId = $lastRunId;

        return $this;
    }

    /**
     * The job unique name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The job unique name
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * The schedule display
     */
    public function getSchedule(): ?string
    {
        return $this->schedule;
    }

    /**
     * The schedule display
     */
    public function setSchedule(?string $schedule): self
    {
        $this->initialized['schedule'] = true;
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * The task name
     */
    public function getTask(): string
    {
        return $this->task;
    }

    /**
     * The task name
     */
    public function setTask(string $task): self
    {
        $this->initialized['task'] = true;
        $this->task = $task;

        return $this;
    }
}
