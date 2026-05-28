<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class HarvestItemPreview
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
     * The item positional arguments
     *
     * @var list<string>
     */
    protected $args = array();
    /**
     * The item creation date
     *
     * @var \DateTime
     */
    protected $created;
    /**
     * The processed dataset
     *
     * @var HarvestItemPreviewDataservice
     */
    protected $dataservice;
    /**
     * The processed dataset
     *
     * @var HarvestItemPreviewDataset
     */
    protected $dataset;
    /**
     * The item end date
     *
     * @var \DateTime|null
     */
    protected $ended;
    /**
     * The item errors
     *
     * @var list<HarvestError>
     */
    protected $errors;
    /**
     * The item keyword arguments
     *
     * @var mixed
     */
    protected $kwargs;
    /**
     * The item logs
     *
     * @var list<HarvestError>
     */
    protected $logs;
    /**
     * The item remote ID to process
     *
     * @var string
     */
    protected $remoteId;
    /**
     * The item remote url (if available)
     *
     * @var string|null
     */
    protected $remoteUrl;
    /**
     * The item start date
     *
     * @var \DateTime|null
     */
    protected $started;
    /**
     * The item status
     *
     * @var string
     */
    protected $status;
    /**
     * The item positional arguments
     *
     * @return list<string>
     */
    public function getArgs(): array
    {
        return $this->args;
    }
    /**
     * The item positional arguments
     *
     * @param list<string> $args
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
     * The item creation date
     *
     * @return \DateTime
     */
    public function getCreated(): \DateTime
    {
        return $this->created;
    }
    /**
     * The item creation date
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
     * The processed dataset
     *
     * @return HarvestItemPreviewDataservice
     */
    public function getDataservice(): HarvestItemPreviewDataservice
    {
        return $this->dataservice;
    }
    /**
     * The processed dataset
     *
     * @param HarvestItemPreviewDataservice $dataservice
     *
     * @return self
     */
    public function setDataservice(HarvestItemPreviewDataservice $dataservice): self
    {
        $this->initialized['dataservice'] = true;
        $this->dataservice = $dataservice;
        return $this;
    }
    /**
     * The processed dataset
     *
     * @return HarvestItemPreviewDataset
     */
    public function getDataset(): HarvestItemPreviewDataset
    {
        return $this->dataset;
    }
    /**
     * The processed dataset
     *
     * @param HarvestItemPreviewDataset $dataset
     *
     * @return self
     */
    public function setDataset(HarvestItemPreviewDataset $dataset): self
    {
        $this->initialized['dataset'] = true;
        $this->dataset = $dataset;
        return $this;
    }
    /**
     * The item end date
     *
     * @return \DateTime|null
     */
    public function getEnded(): ?\DateTime
    {
        return $this->ended;
    }
    /**
     * The item end date
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
     * The item errors
     *
     * @return list<HarvestError>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
    /**
     * The item errors
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
     * The item keyword arguments
     *
     * @return mixed
     */
    public function getKwargs()
    {
        return $this->kwargs;
    }
    /**
     * The item keyword arguments
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
     * The item logs
     *
     * @return list<HarvestError>
     */
    public function getLogs(): array
    {
        return $this->logs;
    }
    /**
     * The item logs
     *
     * @param list<HarvestError> $logs
     *
     * @return self
     */
    public function setLogs(array $logs): self
    {
        $this->initialized['logs'] = true;
        $this->logs = $logs;
        return $this;
    }
    /**
     * The item remote ID to process
     *
     * @return string
     */
    public function getRemoteId(): string
    {
        return $this->remoteId;
    }
    /**
     * The item remote ID to process
     *
     * @param string $remoteId
     *
     * @return self
     */
    public function setRemoteId(string $remoteId): self
    {
        $this->initialized['remoteId'] = true;
        $this->remoteId = $remoteId;
        return $this;
    }
    /**
     * The item remote url (if available)
     *
     * @return string|null
     */
    public function getRemoteUrl(): ?string
    {
        return $this->remoteUrl;
    }
    /**
     * The item remote url (if available)
     *
     * @param string|null $remoteUrl
     *
     * @return self
     */
    public function setRemoteUrl(?string $remoteUrl): self
    {
        $this->initialized['remoteUrl'] = true;
        $this->remoteUrl = $remoteUrl;
        return $this;
    }
    /**
     * The item start date
     *
     * @return \DateTime|null
     */
    public function getStarted(): ?\DateTime
    {
        return $this->started;
    }
    /**
     * The item start date
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
     * The item status
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * The item status
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