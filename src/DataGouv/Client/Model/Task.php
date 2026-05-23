<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class Task
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
     * The exception thrown during execution
     *
     * @var string|null
     */
    protected $exc;
    /**
     * Tha task execution ID
     *
     * @var string|null
     */
    protected $id;
    /**
     * The task results if exists
     *
     * @var string|null
     */
    protected $result;
    /**
     * Cron expression for hour
     *
     * @var string|null
     */
    protected $status;
    /**
     * The execution traceback
     *
     * @var string|null
     */
    protected $traceback;

    /**
     * The exception thrown during execution
     */
    public function getExc(): ?string
    {
        return $this->exc;
    }

    /**
     * The exception thrown during execution
     */
    public function setExc(?string $exc): self
    {
        $this->initialized['exc'] = true;
        $this->exc = $exc;

        return $this;
    }

    /**
     * Tha task execution ID
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Tha task execution ID
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The task results if exists
     */
    public function getResult(): ?string
    {
        return $this->result;
    }

    /**
     * The task results if exists
     */
    public function setResult(?string $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }

    /**
     * Cron expression for hour
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Cron expression for hour
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * The execution traceback
     */
    public function getTraceback(): ?string
    {
        return $this->traceback;
    }

    /**
     * The execution traceback
     */
    public function setTraceback(?string $traceback): self
    {
        $this->initialized['traceback'] = true;
        $this->traceback = $traceback;

        return $this;
    }
}
