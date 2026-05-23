<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class NotificationRead
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
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var mixed
     */
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
    /**
     * @var mixed
     */
    protected $user;
    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
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
     * @return mixed
     */
    public function getDetails()
    {
        return $this->details;
    }
    /**
     * @param mixed $details
     *
     * @return self
     */
    public function setDetails($details): self
    {
        $this->initialized['details'] = true;
        $this->details = $details;
        return $this;
    }
    /**
     * @return \DateTime|null
     */
    public function getHandledAt(): ?\DateTime
    {
        return $this->handledAt;
    }
    /**
     * @param \DateTime|null $handledAt
     *
     * @return self
     */
    public function setHandledAt(?\DateTime $handledAt): self
    {
        $this->initialized['handledAt'] = true;
        $this->handledAt = $handledAt;
        return $this;
    }
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
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
     * @return \DateTime
     */
    public function getLastModified(): \DateTime
    {
        return $this->lastModified;
    }
    /**
     * @param \DateTime $lastModified
     *
     * @return self
     */
    public function setLastModified(\DateTime $lastModified): self
    {
        $this->initialized['lastModified'] = true;
        $this->lastModified = $lastModified;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * @param mixed $user
     *
     * @return self
     */
    public function setUser($user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
}