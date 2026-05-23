<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class AssignmentRead
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
    protected $createdAt;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var mixed
     */
    protected $organization;
    /**
     * @var mixed
     */
    protected $subject;
    /**
     * @var UserReference
     */
    protected $user;
    /**
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
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
     * @return mixed
     */
    public function getOrganization()
    {
        return $this->organization;
    }
    /**
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
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }
    /**
     * @param mixed $subject
     *
     * @return self
     */
    public function setSubject($subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;
        return $this;
    }
    /**
     * @return UserReference
     */
    public function getUser(): UserReference
    {
        return $this->user;
    }
    /**
     * @param UserReference $user
     *
     * @return self
     */
    public function setUser(UserReference $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
}