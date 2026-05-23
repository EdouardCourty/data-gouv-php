<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class PendingInvitation
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
     * The invitation creation date
     *
     * @var \DateTime|null
     */
    protected $created;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var OrganizationReference
     */
    protected $organization;
    /**
     * The role to assign
     *
     * @var string|null
     */
    protected $role = 'editor';
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
     * The invitation creation date
     *
     * @return \DateTime|null
     */
    public function getCreated(): ?\DateTime
    {
        return $this->created;
    }
    /**
     * The invitation creation date
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
     * @return OrganizationReference
     */
    public function getOrganization(): OrganizationReference
    {
        return $this->organization;
    }
    /**
     * @param OrganizationReference $organization
     *
     * @return self
     */
    public function setOrganization(OrganizationReference $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;
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
}