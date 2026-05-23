<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class UserSuggestion
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
     * The user avatar URL
     *
     * @var string|null
     */
    protected $avatarUrl;
    /**
     * The user email (only the domain for non-admin user)
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
     */
    public function getAvatarUrl(): ?string
    {
        return $this->avatarUrl;
    }

    /**
     * The user avatar URL
     */
    public function setAvatarUrl(?string $avatarUrl): self
    {
        $this->initialized['avatarUrl'] = true;
        $this->avatarUrl = $avatarUrl;

        return $this;
    }

    /**
     * The user email (only the domain for non-admin user)
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * The user email (only the domain for non-admin user)
     */
    public function setEmail($email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    /**
     * The user first name
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * The user first name
     */
    public function setFirstName(?string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * The user identifier
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The user identifier
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The user last name
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * The user last name
     */
    public function setLastName(?string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * The user permalink string
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * The user permalink string
     */
    public function setSlug(?string $slug): self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;

        return $this;
    }
}
