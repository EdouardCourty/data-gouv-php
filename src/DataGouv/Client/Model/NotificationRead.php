<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class NotificationRead
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
     * @var \DateTime
     */
    protected $createdAt;
    protected $details;
    /**
     * @var \DateTime|null
     */
    protected $handledAt;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var \DateTime
     */
    protected $lastModified;
    protected $user;

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getDetails()
    {
        return $this->details;
    }

    public function setDetails($details): self
    {
        $this->initialized['details'] = true;
        $this->details = $details;

        return $this;
    }

    public function getHandledAt(): ?\DateTime
    {
        return $this->handledAt;
    }

    public function setHandledAt(?\DateTime $handledAt): self
    {
        $this->initialized['handledAt'] = true;
        $this->handledAt = $handledAt;

        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getLastModified(): \DateTime
    {
        return $this->lastModified;
    }

    public function setLastModified(\DateTime $lastModified): self
    {
        $this->initialized['lastModified'] = true;
        $this->lastModified = $lastModified;

        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }
}
