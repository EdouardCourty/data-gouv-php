<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class HarvestSourceLastJob
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
     * The job creation date
     *
     * @var \DateTime
     */
    protected $created;
    /**
     * The job end date
     *
     * @var \DateTime|null
     */
    protected $ended;
    /**
     * The job initialization errors
     *
     * @var list<HarvestError>
     */
    protected $errors;
    /**
     * The job execution ID
     *
     * @var string
     */
    protected $id;
    /**
     * The job collected items
     *
     * @var list<HarvestItem>
     */
    protected $items;
    /**
     * The source owning the job
     *
     * @var string
     */
    protected $source;
    /**
     * The job start date
     *
     * @var \DateTime|null
     */
    protected $started;
    /**
     * The job status
     *
     * @var string
     */
    protected $status;

    /**
     * The job creation date
     */
    public function getCreated(): \DateTime
    {
        return $this->created;
    }

    /**
     * The job creation date
     */
    public function setCreated(\DateTime $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;

        return $this;
    }

    /**
     * The job end date
     */
    public function getEnded(): ?\DateTime
    {
        return $this->ended;
    }

    /**
     * The job end date
     */
    public function setEnded(?\DateTime $ended): self
    {
        $this->initialized['ended'] = true;
        $this->ended = $ended;

        return $this;
    }

    /**
     * The job initialization errors
     *
     * @return list<HarvestError>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * The job initialization errors
     *
     * @param list<HarvestError> $errors
     */
    public function setErrors(array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;

        return $this;
    }

    /**
     * The job execution ID
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The job execution ID
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The job collected items
     *
     * @return list<HarvestItem>
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * The job collected items
     *
     * @param list<HarvestItem> $items
     */
    public function setItems(array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;

        return $this;
    }

    /**
     * The source owning the job
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * The source owning the job
     */
    public function setSource(string $source): self
    {
        $this->initialized['source'] = true;
        $this->source = $source;

        return $this;
    }

    /**
     * The job start date
     */
    public function getStarted(): ?\DateTime
    {
        return $this->started;
    }

    /**
     * The job start date
     */
    public function setStarted(?\DateTime $started): self
    {
        $this->initialized['started'] = true;
        $this->started = $started;

        return $this;
    }

    /**
     * The job status
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * The job status
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }
}
