<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class UserSuggestion
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
     * The user avatar URL
     *
     * @var string|null
     */
    protected $avatarUrl;
    /**
     * The user email (only the domain for non-admin user)
     *
     * @var mixed
     */
    protected $email;
    /**
     * The user first name
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * The user identifier
     *
     * @var string|null
     */
    protected $id;
    /**
     * The user last name
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * The user permalink string
     *
     * @var string|null
     */
    protected $slug;
    /**
     * The user avatar URL
     *
     * @return string|null
     */
    public function getAvatarUrl(): ?string
    {
        return $this->avatarUrl;
    }
    /**
     * The user avatar URL
     *
     * @param string|null $avatarUrl
     *
     * @return self
     */
    public function setAvatarUrl(?string $avatarUrl): self
    {
        $this->initialized['avatarUrl'] = true;
        $this->avatarUrl = $avatarUrl;
        return $this;
    }
    /**
     * The user email (only the domain for non-admin user)
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * The user email (only the domain for non-admin user)
     *
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * The user first name
     *
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    /**
     * The user first name
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * The user identifier
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The user identifier
     *
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
     * The user last name
     *
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    /**
     * The user last name
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * The user permalink string
     *
     * @return string|null
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }
    /**
     * The user permalink string
     *
     * @param string|null $slug
     *
     * @return self
     */
    public function setSlug(?string $slug): self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;
        return $this;
    }
}