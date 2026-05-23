<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class OrganizationReadRequestsItem
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
     * @var string|null
     */
    protected $comment;
    /**
     * @var \DateTime
     */
    protected $created;
    protected $createdBy;
    /**
     * @var string|null
     */
    protected $email;
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
    protected $user;

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;

        return $this;
    }

    public function getCreated(): \DateTime
    {
        return $this->created;
    }

    public function setCreated(\DateTime $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;

        return $this;
    }

    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    public function setCreatedBy($createdBy): self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    public function getHandledBy()
    {
        return $this->handledBy;
    }

    public function setHandledBy($handledBy): self
    {
        $this->initialized['handledBy'] = true;
        $this->handledBy = $handledBy;

        return $this;
    }

    public function getHandledOn(): ?\DateTime
    {
        return $this->handledOn;
    }

    public function setHandledOn(?\DateTime $handledOn): self
    {
        $this->initialized['handledOn'] = true;
        $this->handledOn = $handledOn;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getKind(): ?string
    {
        return $this->kind;
    }

    public function setKind(?string $kind): self
    {
        $this->initialized['kind'] = true;
        $this->kind = $kind;

        return $this;
    }

    public function getRefusalComment(): ?string
    {
        return $this->refusalComment;
    }

    public function setRefusalComment(?string $refusalComment): self
    {
        $this->initialized['refusalComment'] = true;
        $this->refusalComment = $refusalComment;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

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
