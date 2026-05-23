<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class ContactPointWrite
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
    protected $contactForm;
    /**
     * @var string|null
     */
    protected $email;
    /**
     * @var string
     */
    protected $name;
    /**
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     *
     * @var string|null
     */
    protected $organization;
    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
     *
     * @var string|null
     */
    protected $owner;
    /**
     * @var string
     */
    protected $role;
    /**
     * @return string|null
     */
    public function getContactForm(): ?string
    {
        return $this->contactForm;
    }
    /**
     * @param string|null $contactForm
     *
     * @return self
     */
    public function setContactForm(?string $contactForm): self
    {
        $this->initialized['contactForm'] = true;
        $this->contactForm = $contactForm;
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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     *
     * @return string|null
     */
    public function getOrganization(): ?string
    {
        return $this->organization;
    }
    /**
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     *
     * @param string|null $organization
     *
     * @return self
     */
    public function setOrganization(?string $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;
        return $this;
    }
    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
     *
     * @return string|null
     */
    public function getOwner(): ?string
    {
        return $this->owner;
    }
    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
     *
     * @param string|null $owner
     *
     * @return self
     */
    public function setOwner(?string $owner): self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;
        return $this;
    }
    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }
    /**
     * @param string $role
     *
     * @return self
     */
    public function setRole(string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
}