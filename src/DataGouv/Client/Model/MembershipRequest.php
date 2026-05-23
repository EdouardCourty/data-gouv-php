<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class MembershipRequest
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
     *
     * @return self
     */
    public function setAssignments(array $assignments): self
    {
        $this->initialized['assignments'] = true;
        $this->assignments = $assignments;
        return $this;
    }
    /**
     * A request comment from the user
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * A request comment from the user
     *
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
     * The request creation date
     *
     * @return \DateTime|null
     */
    public function getCreated(): ?\DateTime
    {
        return $this->created;
    }
    /**
     * The request creation date
     *
     * @param \DateTime|null $created
     *
     * @return self
     */
    public function setCreated(?\DateTime $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
        return $this;
    }
    /**
     * Email for non-registered user invitations
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Email for non-registered user invitations
     *
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
     * The request kind (request or invitation)
     *
     * @return string|null
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }
    /**
     * The request kind (request or invitation)
     *
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
     * The role to assign
     *
     * @return string|null
     */
    public function getRole(): ?string
    {
        return $this->role;
    }
    /**
     * The role to assign
     *
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
     * The current request status
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * The current request status
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
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