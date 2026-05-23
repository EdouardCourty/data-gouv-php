<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class HarvestResourceMetadata
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
     * The resource harvested release date
     *
     * @var \DateTime|null
     */
    protected $issuedAt;
    /**
     * The resource harvest last modification date
     *
     * @var \DateTime|null
     */
    protected $modifiedAt;
    /**
     * The resource harvest uri
     *
     * @var string|null
     */
    protected $uri;

    /**
     * The resource harvested release date
     */
    public function getIssuedAt(): ?\DateTime
    {
        return $this->issuedAt;
    }

    /**
     * The resource harvested release date
     */
    public function setIssuedAt(?\DateTime $issuedAt): self
    {
        $this->initialized['issuedAt'] = true;
        $this->issuedAt = $issuedAt;

        return $this;
    }

    /**
     * The resource harvest last modification date
     */
    public function getModifiedAt(): ?\DateTime
    {
        return $this->modifiedAt;
    }

    /**
     * The resource harvest last modification date
     */
    public function setModifiedAt(?\DateTime $modifiedAt): self
    {
        $this->initialized['modifiedAt'] = true;
        $this->modifiedAt = $modifiedAt;

        return $this;
    }

    /**
     * The resource harvest uri
     */
    public function getUri(): ?string
    {
        return $this->uri;
    }

    /**
     * The resource harvest uri
     */
    public function setUri(?string $uri): self
    {
        $this->initialized['uri'] = true;
        $this->uri = $uri;

        return $this;
    }
}
