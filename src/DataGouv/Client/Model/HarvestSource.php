<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class HarvestSource
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
     * Is this source active
     *
     * @var bool
     */
    protected $active = false;
    /**
     * If enabled, datasets not present on the remote source will be automatically archived
     *
     * @var bool
     */
    protected $autoarchive = true;
    /**
     * The source backend
     *
     * @var string
     */
    protected $backend;
    /**
     * The configuration as key-value pairs
     *
     * @var mixed
     */
    protected $config;
    /**
     * The source creation date
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * The source deletion date
     *
     * @var \DateTime|null
     */
    protected $deleted;
    /**
     * The source description
     *
     * @var string|null
     */
    protected $description;
    /**
     * The source unique identifier
     *
     * @var string|null
     */
    protected $id;
    /**
     * The last job for this source
     *
     * @var HarvestSourceLastJob
     */
    protected $lastJob;
    /**
     * The source display name
     *
     * @var string
     */
    protected $name;
    /**
     * The producer organization
     *
     * @var mixed
     */
    protected $organization;
    /**
     * The owner information
     *
     * @var mixed
     */
    protected $owner;
    /**
     * @var HarvestSourcePermissions
     */
    protected $permissions;
    /**
     * The source schedule (interval or cron expression)
     *
     * @var string|null
     */
    protected $schedule;
    /**
     * The source base URL
     *
     * @var string
     */
    protected $url;
    /**
     * Has the source been validated
     *
     * @var HarvestSourceValidation
     */
    protected $validation;
    /**
     * Is this source active
     *
     * @return bool
     */
    public function getActive(): bool
    {
        return $this->active;
    }
    /**
     * Is this source active
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
    /**
     * If enabled, datasets not present on the remote source will be automatically archived
     *
     * @return bool
     */
    public function getAutoarchive(): bool
    {
        return $this->autoarchive;
    }
    /**
     * If enabled, datasets not present on the remote source will be automatically archived
     *
     * @param bool $autoarchive
     *
     * @return self
     */
    public function setAutoarchive(bool $autoarchive): self
    {
        $this->initialized['autoarchive'] = true;
        $this->autoarchive = $autoarchive;
        return $this;
    }
    /**
     * The source backend
     *
     * @return string
     */
    public function getBackend(): string
    {
        return $this->backend;
    }
    /**
     * The source backend
     *
     * @param string $backend
     *
     * @return self
     */
    public function setBackend(string $backend): self
    {
        $this->initialized['backend'] = true;
        $this->backend = $backend;
        return $this;
    }
    /**
     * The configuration as key-value pairs
     *
     * @return mixed
     */
    public function getConfig()
    {
        return $this->config;
    }
    /**
     * The configuration as key-value pairs
     *
     * @param mixed $config
     *
     * @return self
     */
    public function setConfig($config): self
    {
        $this->initialized['config'] = true;
        $this->config = $config;
        return $this;
    }
    /**
     * The source creation date
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * The source creation date
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * The source deletion date
     *
     * @return \DateTime|null
     */
    public function getDeleted(): ?\DateTime
    {
        return $this->deleted;
    }
    /**
     * The source deletion date
     *
     * @param \DateTime|null $deleted
     *
     * @return self
     */
    public function setDeleted(?\DateTime $deleted): self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;
        return $this;
    }
    /**
     * The source description
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The source description
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
     * The source unique identifier
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The source unique identifier
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
     * The last job for this source
     *
     * @return HarvestSourceLastJob
     */
    public function getLastJob(): HarvestSourceLastJob
    {
        return $this->lastJob;
    }
    /**
     * The last job for this source
     *
     * @param HarvestSourceLastJob $lastJob
     *
     * @return self
     */
    public function setLastJob(HarvestSourceLastJob $lastJob): self
    {
        $this->initialized['lastJob'] = true;
        $this->lastJob = $lastJob;
        return $this;
    }
    /**
     * The source display name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The source display name
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
     * The producer organization
     *
     * @return mixed
     */
    public function getOrganization()
    {
        return $this->organization;
    }
    /**
     * The producer organization
     *
     * @param mixed $organization
     *
     * @return self
     */
    public function setOrganization($organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;
        return $this;
    }
    /**
     * The owner information
     *
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }
    /**
     * The owner information
     *
     * @param mixed $owner
     *
     * @return self
     */
    public function setOwner($owner): self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;
        return $this;
    }
    /**
     * @return HarvestSourcePermissions
     */
    public function getPermissions(): HarvestSourcePermissions
    {
        return $this->permissions;
    }
    /**
     * @param HarvestSourcePermissions $permissions
     *
     * @return self
     */
    public function setPermissions(HarvestSourcePermissions $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;
        return $this;
    }
    /**
     * The source schedule (interval or cron expression)
     *
     * @return string|null
     */
    public function getSchedule(): ?string
    {
        return $this->schedule;
    }
    /**
     * The source schedule (interval or cron expression)
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
     * The source base URL
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * The source base URL
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * Has the source been validated
     *
     * @return HarvestSourceValidation
     */
    public function getValidation(): HarvestSourceValidation
    {
        return $this->validation;
    }
    /**
     * Has the source been validated
     *
     * @param HarvestSourceValidation $validation
     *
     * @return self
     */
    public function setValidation(HarvestSourceValidation $validation): self
    {
        $this->initialized['validation'] = true;
        $this->validation = $validation;
        return $this;
    }
}