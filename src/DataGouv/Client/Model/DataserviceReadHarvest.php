<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DataserviceReadHarvest
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
     * @var \DateTime|null
     */
    protected $archivedAt;
    /**
     * @var string|null
     */
    protected $archivedReason;
    /**
     * @var string|null
     */
    protected $backend;
    /**
     * Date of the creation as provided by the harvested catalog
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * @var string|null
     */
    protected $domain;
    /**
     * Release date as provided by the harvested catalog
     *
     * @var \DateTime|null
     */
    protected $issuedAt;
    /**
     * Date of the last harvesting
     *
     * @var \DateTime|null
     */
    protected $lastUpdate;
    /**
     * @var string|null
     */
    protected $remoteId;
    /**
     * @var string|null
     */
    protected $remoteUrl;
    /**
     * @var string|null
     */
    protected $sourceId;
    /**
     * @var string|null
     */
    protected $sourceUrl;
    /**
     * RDF node ID if it's an `URIRef`. `None` if it's not present or if it's a random auto-generated ID inside the graph.
     *
     * @var string|null
     */
    protected $uri;

    public function getArchivedAt(): ?\DateTime
    {
        return $this->archivedAt;
    }

    public function setArchivedAt(?\DateTime $archivedAt): self
    {
        $this->initialized['archivedAt'] = true;
        $this->archivedAt = $archivedAt;

        return $this;
    }

    public function getArchivedReason(): ?string
    {
        return $this->archivedReason;
    }

    public function setArchivedReason(?string $archivedReason): self
    {
        $this->initialized['archivedReason'] = true;
        $this->archivedReason = $archivedReason;

        return $this;
    }

    public function getBackend(): ?string
    {
        return $this->backend;
    }

    public function setBackend(?string $backend): self
    {
        $this->initialized['backend'] = true;
        $this->backend = $backend;

        return $this;
    }

    /**
     * Date of the creation as provided by the harvested catalog
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Date of the creation as provided by the harvested catalog
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getDomain(): ?string
    {
        return $this->domain;
    }

    public function setDomain(?string $domain): self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;

        return $this;
    }

    /**
     * Release date as provided by the harvested catalog
     */
    public function getIssuedAt(): ?\DateTime
    {
        return $this->issuedAt;
    }

    /**
     * Release date as provided by the harvested catalog
     */
    public function setIssuedAt(?\DateTime $issuedAt): self
    {
        $this->initialized['issuedAt'] = true;
        $this->issuedAt = $issuedAt;

        return $this;
    }

    /**
     * Date of the last harvesting
     */
    public function getLastUpdate(): ?\DateTime
    {
        return $this->lastUpdate;
    }

    /**
     * Date of the last harvesting
     */
    public function setLastUpdate(?\DateTime $lastUpdate): self
    {
        $this->initialized['lastUpdate'] = true;
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    public function getRemoteId(): ?string
    {
        return $this->remoteId;
    }

    public function setRemoteId(?string $remoteId): self
    {
        $this->initialized['remoteId'] = true;
        $this->remoteId = $remoteId;

        return $this;
    }

    public function getRemoteUrl(): ?string
    {
        return $this->remoteUrl;
    }

    public function setRemoteUrl(?string $remoteUrl): self
    {
        $this->initialized['remoteUrl'] = true;
        $this->remoteUrl = $remoteUrl;

        return $this;
    }

    public function getSourceId(): ?string
    {
        return $this->sourceId;
    }

    public function setSourceId(?string $sourceId): self
    {
        $this->initialized['sourceId'] = true;
        $this->sourceId = $sourceId;

        return $this;
    }

    public function getSourceUrl(): ?string
    {
        return $this->sourceUrl;
    }

    public function setSourceUrl(?string $sourceUrl): self
    {
        $this->initialized['sourceUrl'] = true;
        $this->sourceUrl = $sourceUrl;

        return $this;
    }

    /**
     * RDF node ID if it's an `URIRef`. `None` if it's not present or if it's a random auto-generated ID inside the graph.
     */
    public function getUri(): ?string
    {
        return $this->uri;
    }

    /**
     * RDF node ID if it's an `URIRef`. `None` if it's not present or if it's a random auto-generated ID inside the graph.
     */
    public function setUri(?string $uri): self
    {
        $this->initialized['uri'] = true;
        $this->uri = $uri;

        return $this;
    }
}
