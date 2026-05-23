<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class MembershipInvite
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
     * Invitation message
     *
     * @var string|null
     */
    protected $comment;
    /**
     * Email to invite (if user not registered)
     *
     * @var string|null
     */
    protected $email;
    /**
     * The role to assign
     *
     * @var string|null
     */
    protected $role = 'editor';
    /**
     * User ID to invite
     *
     * @var string|null
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
     * Invitation message
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * Invitation message
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
     * Email to invite (if user not registered)
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Email to invite (if user not registered)
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
     * User ID to invite
     *
     * @return string|null
     */
    public function getUser(): ?string
    {
        return $this->user;
    }
    /**
     * User ID to invite
     *
     * @param string|null $user
     *
     * @return self
     */
    public function setUser(?string $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
}