<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class MembershipRequestRead
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
     * @var string|null
     */
    protected $comment;
    /**
     * @var \DateTime
     */
    protected $created;
    /**
     * @var mixed
     */
    protected $createdBy;
    /**
     * @var string|null
     */
    protected $email;
    /**
     * @var mixed
     */
    protected $handledBy;
    /**
     * @var \DateTime|null
     */
    protected $handledOn;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $kind;
    /**
     * @var string|null
     */
    protected $refusalComment;
    /**
     * @var string|null
     */
    protected $role;
    /**
     * @var string|null
     */
    protected $status;
    /**
     * @var mixed
     */
    protected $user;
    /**
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getCreated(): \DateTime
    {
        return $this->created;
    }
    /**
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
     * @return mixed
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }
    /**
     * @param mixed $createdBy
     *
     * @return self
     */
    public function setCreatedBy($createdBy): self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getHandledBy()
    {
        return $this->handledBy;
    }
    /**
     * @param mixed $handledBy
     *
     * @return self
     */
    public function setHandledBy($handledBy): self
    {
        $this->initialized['handledBy'] = true;
        $this->handledBy = $handledBy;
        return $this;
    }
    /**
     * @return \DateTime|null
     */
    public function getHandledOn(): ?\DateTime
    {
        return $this->handledOn;
    }
    /**
     * @param \DateTime|null $handledOn
     *
     * @return self
     */
    public function setHandledOn(?\DateTime $handledOn): self
    {
        $this->initialized['handledOn'] = true;
        $this->handledOn = $handledOn;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
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
     * @return string|null
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }
    /**
     * @param string|null $kind
     *
     * @return self
     */
    public function setKind(?string $kind): self
    {
        $this->initialized['kind'] = true;
        $this->kind = $kind;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getRefusalComment(): ?string
    {
        return $this->refusalComment;
    }
    /**
     * @param string|null $refusalComment
     *
     * @return self
     */
    public function setRefusalComment(?string $refusalComment): self
    {
        $this->initialized['refusalComment'] = true;
        $this->refusalComment = $refusalComment;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getRole(): ?string
    {
        return $this->role;
    }
    /**
     * @param string|null $role
     *
     * @return self
     */
    public function setRole(?string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
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