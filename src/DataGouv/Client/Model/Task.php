<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class Task
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
     *
     * @return string|null
     */
    public function getExc(): ?string
    {
        return $this->exc;
    }
    /**
     * The exception thrown during execution
     *
     * @param string|null $exc
     *
     * @return self
     */
    public function setExc(?string $exc): self
    {
        $this->initialized['exc'] = true;
        $this->exc = $exc;
        return $this;
    }
    /**
     * Tha task execution ID
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Tha task execution ID
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
     * The task results if exists
     *
     * @return string|null
     */
    public function getResult(): ?string
    {
        return $this->result;
    }
    /**
     * The task results if exists
     *
     * @param string|null $result
     *
     * @return self
     */
    public function setResult(?string $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
    /**
     * Cron expression for hour
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Cron expression for hour
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * The execution traceback
     *
     * @return string|null
     */
    public function getTraceback(): ?string
    {
        return $this->traceback;
    }
    /**
     * The execution traceback
     *
     * @param string|null $traceback
     *
     * @return self
     */
    public function setTraceback(?string $traceback): self
    {
        $this->initialized['traceback'] = true;
        $this->traceback = $traceback;
        return $this;
    }
}