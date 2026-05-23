<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DatasetPreviewHarvest
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
     * The reason the dataset has been archived
     *
     * @var string|null
     */
    protected $archived;
    /**
     * The archive date
     *
     * @var \DateTime|null
     */
    protected $archivedAt;
    /**
     * Harvest backend used
     *
     * @var string|null
     */
    protected $backend;
    /**
     * The dataset harvested creation date
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The dct:identifier property from the harvested dataset
     *
     * @var string|null
     */
    protected $dctIdentifier;
    /**
     * The harvested domain
     *
     * @var string|null
     */
    protected $domain;
    /**
     * The dataset harvested release date
     *
     * @var \DateTime|null
     */
    protected $issuedAt;
    /**
     * The last harvest date
     *
     * @var \DateTime|null
     */
    protected $lastUpdate;
    /**
     * The dataset harvest last modification date
     *
     * @var \DateTime|null
     */
    protected $modifiedAt;
    /**
     * The dataset remote id on the source portal
     *
     * @var string|null
     */
    protected $remoteId;
    /**
     * The dataset remote url
     *
     * @var string|null
     */
    protected $remoteUrl;
    /**
     * The harvester id
     *
     * @var string|null
     */
    protected $sourceId;
    /**
     * The dataset harveted uri
     *
     * @var string|null
     */
    protected $uri;

    /**
     * The reason the dataset has been archived
     */
    public function getArchived(): ?string
    {
        return $this->archived;
    }

    /**
     * The reason the dataset has been archived
     */
    public function setArchived(?string $archived): self
    {
        $this->initialized['archived'] = true;
        $this->archived = $archived;

        return $this;
    }

    /**
     * The archive date
     */
    public function getArchivedAt(): ?\DateTime
    {
        return $this->archivedAt;
    }

    /**
     * The archive date
     */
    public function setArchivedAt(?\DateTime $archivedAt): self
    {
        $this->initialized['archivedAt'] = true;
        $this->archivedAt = $archivedAt;

        return $this;
    }

    /**
     * Harvest backend used
     */
    public function getBackend(): ?string
    {
        return $this->backend;
    }

    /**
     * Harvest backend used
     */
    public function setBackend(?string $backend): self
    {
        $this->initialized['backend'] = true;
        $this->backend = $backend;

        return $this;
    }

    /**
     * The dataset harvested creation date
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * The dataset harvested creation date
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * The dct:identifier property from the harvested dataset
     */
    public function getDctIdentifier(): ?string
    {
        return $this->dctIdentifier;
    }

    /**
     * The dct:identifier property from the harvested dataset
     */
    public function setDctIdentifier(?string $dctIdentifier): self
    {
        $this->initialized['dctIdentifier'] = true;
        $this->dctIdentifier = $dctIdentifier;

        return $this;
    }

    /**
     * The harvested domain
     */
    public function getDomain(): ?string
    {
        return $this->domain;
    }

    /**
     * The harvested domain
     */
    public function setDomain(?string $domain): self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;

        return $this;
    }

    /**
     * The dataset harvested release date
     */
    public function getIssuedAt(): ?\DateTime
    {
        return $this->issuedAt;
    }

    /**
     * The dataset harvested release date
     */
    public function setIssuedAt(?\DateTime $issuedAt): self
    {
        $this->initialized['issuedAt'] = true;
        $this->issuedAt = $issuedAt;

        return $this;
    }

    /**
     * The last harvest date
     */
    public function getLastUpdate(): ?\DateTime
    {
        return $this->lastUpdate;
    }

    /**
     * The last harvest date
     */
    public function setLastUpdate(?\DateTime $lastUpdate): self
    {
        $this->initialized['lastUpdate'] = true;
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * The dataset harvest last modification date
     */
    public function getModifiedAt(): ?\DateTime
    {
        return $this->modifiedAt;
    }

    /**
     * The dataset harvest last modification date
     */
    public function setModifiedAt(?\DateTime $modifiedAt): self
    {
        $this->initialized['modifiedAt'] = true;
        $this->modifiedAt = $modifiedAt;

        return $this;
    }

    /**
     * The dataset remote id on the source portal
     */
    public function getRemoteId(): ?string
    {
        return $this->remoteId;
    }

    /**
     * The dataset remote id on the source portal
     */
    public function setRemoteId(?string $remoteId): self
    {
        $this->initialized['remoteId'] = true;
        $this->remoteId = $remoteId;

        return $this;
    }

    /**
     * The dataset remote url
     */
    public function getRemoteUrl(): ?string
    {
        return $this->remoteUrl;
    }

    /**
     * The dataset remote url
     */
    public function setRemoteUrl(?string $remoteUrl): self
    {
        $this->initialized['remoteUrl'] = true;
        $this->remoteUrl = $remoteUrl;

        return $this;
    }

    /**
     * The harvester id
     */
    public function getSourceId(): ?string
    {
        return $this->sourceId;
    }

    /**
     * The harvester id
     */
    public function setSourceId(?string $sourceId): self
    {
        $this->initialized['sourceId'] = true;
        $this->sourceId = $sourceId;

        return $this;
    }

    /**
     * The dataset harveted uri
     */
    public function getUri(): ?string
    {
        return $this->uri;
    }

    /**
     * The dataset harveted uri
     */
    public function setUri(?string $uri): self
    {
        $this->initialized['uri'] = true;
        $this->uri = $uri;

        return $this;
    }
}
