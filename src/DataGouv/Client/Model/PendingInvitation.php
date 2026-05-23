<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class PendingInvitation
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
     */
    public function setAssignments(array $assignments): self
    {
        $this->initialized['assignments'] = true;
        $this->assignments = $assignments;

        return $this;
    }

    /**
     * Invitation message
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * Invitation message
     */
    public function setComment(?string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;

        return $this;
    }

    /**
     * The invitation creation date
     */
    public function getCreated(): ?\DateTime
    {
        return $this->created;
    }

    /**
     * The invitation creation date
     */
    public function setCreated(?\DateTime $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;

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

    public function getOrganization(): OrganizationReference
    {
        return $this->organization;
    }

    public function setOrganization(OrganizationReference $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

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
}
