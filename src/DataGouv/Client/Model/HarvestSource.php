<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class HarvestSource
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
     */
    protected $organization;
    /**
     * The owner information
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
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * Is this source active
     */
    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;

        return $this;
    }

    /**
     * If enabled, datasets not present on the remote source will be automatically archived
     */
    public function getAutoarchive(): bool
    {
        return $this->autoarchive;
    }

    /**
     * If enabled, datasets not present on the remote source will be automatically archived
     */
    public function setAutoarchive(bool $autoarchive): self
    {
        $this->initialized['autoarchive'] = true;
        $this->autoarchive = $autoarchive;

        return $this;
    }

    /**
     * The source backend
     */
    public function getBackend(): string
    {
        return $this->backend;
    }

    /**
     * The source backend
     */
    public function setBackend(string $backend): self
    {
        $this->initialized['backend'] = true;
        $this->backend = $backend;

        return $this;
    }

    /**
     * The configuration as key-value pairs
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * The configuration as key-value pairs
     */
    public function setConfig($config): self
    {
        $this->initialized['config'] = true;
        $this->config = $config;

        return $this;
    }

    /**
     * The source creation date
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * The source creation date
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * The source deletion date
     */
    public function getDeleted(): ?\DateTime
    {
        return $this->deleted;
    }

    /**
     * The source deletion date
     */
    public function setDeleted(?\DateTime $deleted): self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * The source description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * The source description
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * The source unique identifier
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The source unique identifier
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The last job for this source
     */
    public function getLastJob(): HarvestSourceLastJob
    {
        return $this->lastJob;
    }

    /**
     * The last job for this source
     */
    public function setLastJob(HarvestSourceLastJob $lastJob): self
    {
        $this->initialized['lastJob'] = true;
        $this->lastJob = $lastJob;

        return $this;
    }

    /**
     * The source display name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The source display name
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * The producer organization
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * The producer organization
     */
    public function setOrganization($organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }

    /**
     * The owner information
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * The owner information
     */
    public function setOwner($owner): self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;

        return $this;
    }

    public function getPermissions(): HarvestSourcePermissions
    {
        return $this->permissions;
    }

    public function setPermissions(HarvestSourcePermissions $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;

        return $this;
    }

    /**
     * The source schedule (interval or cron expression)
     */
    public function getSchedule(): ?string
    {
        return $this->schedule;
    }

    /**
     * The source schedule (interval or cron expression)
     */
    public function setSchedule(?string $schedule): self
    {
        $this->initialized['schedule'] = true;
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * The source base URL
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * The source base URL
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    /**
     * Has the source been validated
     */
    public function getValidation(): HarvestSourceValidation
    {
        return $this->validation;
    }

    /**
     * Has the source been validated
     */
    public function setValidation(HarvestSourceValidation $validation): self
    {
        $this->initialized['validation'] = true;
        $this->validation = $validation;

        return $this;
    }
}
