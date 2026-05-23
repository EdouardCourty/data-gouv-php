<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class MembershipRequest
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
     * Objects to assign on acceptance (for partial_editor invitations)
     *
     * @var list<GenericReference>
     */
    protected $assignments;
    /**
     * A request comment from the user
     *
     * @var string|null
     */
    protected $comment;
    /**
     * The request creation date
     *
     * @var \DateTime|null
     */
    protected $created;
    /**
     * Email for non-registered user invitations
     *
     * @var string|null
     */
    protected $email;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * The request kind (request or invitation)
     *
     * @var string|null
     */
    protected $kind = 'request';
    /**
     * The role to assign
     *
     * @var string|null
     */
    protected $role = 'editor';
    /**
     * The current request status
     *
     * @var string
     */
    protected $status;
    /**
     * @var UserReference
     */
    protected $user;

    /**
     * Objects to assign on acceptance (for partial_editor invitations)
     *
     * @return list<GenericReference>
     */
    public function getAssignments(): array
    {
        return $this->assignments;
    }

    /**
     * Objects to assign on acceptance (for partial_editor invitations)
     *
     * @param list<GenericReference> $assignments
     */
    public function setAssignments(array $assignments): self
    {
        $this->initialized['assignments'] = true;
        $this->assignments = $assignments;

        return $this;
    }

    /**
     * A request comment from the user
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * A request comment from the user
     */
    public function setComment(?string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;

        return $this;
    }

    /**
     * The request creation date
     */
    public function getCreated(): ?\DateTime
    {
        return $this->created;
    }

    /**
     * The request creation date
     */
    public function setCreated(?\DateTime $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;

        return $this;
    }

    /**
     * Email for non-registered user invitations
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Email for non-registered user invitations
     */
    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

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

    /**
     * The request kind (request or invitation)
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * The request kind (request or invitation)
     */
    public function setKind(?string $kind): self
    {
        $this->initialized['kind'] = true;
        $this->kind = $kind;

        return $this;
    }

    /**
     * The role to assign
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * The role to assign
     */
    public function setRole(?string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;

        return $this;
    }

    /**
     * The current request status
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * The current request status
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    public function getUser(): UserReference
    {
        return $this->user;
    }

    public function setUser(UserReference $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }
}
