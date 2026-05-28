<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class HarvestJobPreview
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
     * @var list<HarvestItemPreview>
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
     *
     * @return \DateTime
     */
    public function getCreated(): \DateTime
    {
        return $this->created;
    }
    /**
     * The job creation date
     *
     * @param \DateTime $created
     *
     * @return self
     */
    public function setCreated(\DateTime $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
        return $this;
    }
    /**
     * The job end date
     *
     * @return \DateTime|null
     */
    public function getEnded(): ?\DateTime
    {
        return $this->ended;
    }
    /**
     * The job end date
     *
     * @param \DateTime|null $ended
     *
     * @return self
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
     *
     * @return self
     */
    public function setErrors(array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
    /**
     * The job execution ID
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The job execution ID
     *
     * @param string $id
     *
     * @return self
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
     * @return list<HarvestItemPreview>
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * The job collected items
     *
     * @param list<HarvestItemPreview> $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
    /**
     * The source owning the job
     *
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }
    /**
     * The source owning the job
     *
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source): self
    {
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
    /**
     * The job start date
     *
     * @return \DateTime|null
     */
    public function getStarted(): ?\DateTime
    {
        return $this->started;
    }
    /**
     * The job start date
     *
     * @param \DateTime|null $started
     *
     * @return self
     */
    public function setStarted(?\DateTime $started): self
    {
        $this->initialized['started'] = true;
        $this->started = $started;
        return $this;
    }
    /**
     * The job status
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * The job status
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}