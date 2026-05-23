<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DatasetPreviewContactPointsItem
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
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     *
     * @var mixed
     */
    protected $organization;
    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
     *
     * @var mixed
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
     * @return mixed
     */
    public function getOrganization()
    {
        return $this->organization;
    }
    /**
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     *
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
     * Only present if organization is not set. Can only be set to the current authenticated user.
     *
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }
    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
     *
     * @param mixed $owner
     *
     * @return self
     */
    public function setOwner($owner): self
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