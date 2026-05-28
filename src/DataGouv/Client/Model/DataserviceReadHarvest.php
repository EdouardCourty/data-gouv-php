<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DataserviceReadHarvest
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
    /**
     * @return \DateTime|null
     */
    public function getArchivedAt(): ?\DateTime
    {
        return $this->archivedAt;
    }
    /**
     * @param \DateTime|null $archivedAt
     *
     * @return self
     */
    public function setArchivedAt(?\DateTime $archivedAt): self
    {
        $this->initialized['archivedAt'] = true;
        $this->archivedAt = $archivedAt;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getArchivedReason(): ?string
    {
        return $this->archivedReason;
    }
    /**
     * @param string|null $archivedReason
     *
     * @return self
     */
    public function setArchivedReason(?string $archivedReason): self
    {
        $this->initialized['archivedReason'] = true;
        $this->archivedReason = $archivedReason;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getBackend(): ?string
    {
        return $this->backend;
    }
    /**
     * @param string|null $backend
     *
     * @return self
     */
    public function setBackend(?string $backend): self
    {
        $this->initialized['backend'] = true;
        $this->backend = $backend;
        return $this;
    }
    /**
     * Date of the creation as provided by the harvested catalog
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date of the creation as provided by the harvested catalog
     *
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getDomain(): ?string
    {
        return $this->domain;
    }
    /**
     * @param string|null $domain
     *
     * @return self
     */
    public function setDomain(?string $domain): self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;
        return $this;
    }
    /**
     * Release date as provided by the harvested catalog
     *
     * @return \DateTime|null
     */
    public function getIssuedAt(): ?\DateTime
    {
        return $this->issuedAt;
    }
    /**
     * Release date as provided by the harvested catalog
     *
     * @param \DateTime|null $issuedAt
     *
     * @return self
     */
    public function setIssuedAt(?\DateTime $issuedAt): self
    {
        $this->initialized['issuedAt'] = true;
        $this->issuedAt = $issuedAt;
        return $this;
    }
    /**
     * Date of the last harvesting
     *
     * @return \DateTime|null
     */
    public function getLastUpdate(): ?\DateTime
    {
        return $this->lastUpdate;
    }
    /**
     * Date of the last harvesting
     *
     * @param \DateTime|null $lastUpdate
     *
     * @return self
     */
    public function setLastUpdate(?\DateTime $lastUpdate): self
    {
        $this->initialized['lastUpdate'] = true;
        $this->lastUpdate = $lastUpdate;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getRemoteId(): ?string
    {
        return $this->remoteId;
    }
    /**
     * @param string|null $remoteId
     *
     * @return self
     */
    public function setRemoteId(?string $remoteId): self
    {
        $this->initialized['remoteId'] = true;
        $this->remoteId = $remoteId;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getRemoteUrl(): ?string
    {
        return $this->remoteUrl;
    }
    /**
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
     * @return string|null
     */
    public function getSourceId(): ?string
    {
        return $this->sourceId;
    }
    /**
     * @param string|null $sourceId
     *
     * @return self
     */
    public function setSourceId(?string $sourceId): self
    {
        $this->initialized['sourceId'] = true;
        $this->sourceId = $sourceId;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getSourceUrl(): ?string
    {
        return $this->sourceUrl;
    }
    /**
     * @param string|null $sourceUrl
     *
     * @return self
     */
    public function setSourceUrl(?string $sourceUrl): self
    {
        $this->initialized['sourceUrl'] = true;
        $this->sourceUrl = $sourceUrl;
        return $this;
    }
    /**
     * RDF node ID if it's an `URIRef`. `None` if it's not present or if it's a random auto-generated ID inside the graph.
     *
     * @return string|null
     */
    public function getUri(): ?string
    {
        return $this->uri;
    }
    /**
     * RDF node ID if it's an `URIRef`. `None` if it's not present or if it's a random auto-generated ID inside the graph.
     *
     * @param string|null $uri
     *
     * @return self
     */
    public function setUri(?string $uri): self
    {
        $this->initialized['uri'] = true;
        $this->uri = $uri;
        return $this;
    }
}