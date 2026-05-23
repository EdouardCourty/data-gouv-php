<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DatasetContactPointsItem
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
    protected $contactForm;
    /**
     * @var string|null
     */
    protected $email;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     */
    protected $organization;
    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
     */
    protected $owner;
    /**
     * @var string
     */
    protected $role;

    public function getContactForm(): ?string
    {
        return $this->contactForm;
    }

    public function setContactForm(?string $contactForm): self
    {
        $this->initialized['contactForm'] = true;
        $this->contactForm = $contactForm;

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

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     */
    public function setOrganization($organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }

    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
     */
    public function setOwner($owner): self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;

        return $this;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;

        return $this;
    }
}
