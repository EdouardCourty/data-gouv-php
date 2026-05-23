<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class User
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
     * The user self description
     *
     * @var string|null
     */
    protected $about;
    /**
     * @var bool|null
     */
    protected $active;
    /**
     * The user avatar URL
     *
     * @var string|null
     */
    protected $avatar;
    /**
     * The user avatar thumbnail URL. This is the square (500x500) and cropped version.
     *
     * @var string|null
     */
    protected $avatarThumbnail;
    /**
     * The user email
     */
    protected $email;
    /**
     * The user first name
     *
     * @var string
     */
    protected $firstName;
    /**
     * The user identifier
     *
     * @var string|null
     */
    protected $id;
    /**
     * The user's most recent login date (present for global admins, on /me, and for organization members in their org context)
     */
    protected $lastLoginAt;
    /**
     * The user last name
     *
     * @var string
     */
    protected $lastName;
    /**
     * The user metrics
     */
    protected $metrics;
    /**
     * The organization the user belongs to
     *
     * @var list<OrganizationReference>
     */
    protected $organizations;
    /**
     * The user web page URL
     *
     * @var string|null
     */
    protected $page;
    /**
     * Date at which a password rotation was requested for this user (only present for global admins and on /me)
     */
    protected $passwordRotationDemanded;
    /**
     * Date at which the user performed the requested password rotation (only present for global admins and on /me)
     */
    protected $passwordRotationPerformed;
    /**
     * Site wide user roles
     *
     * @var list<string>
     */
    protected $roles;
    /**
     * The registeration date
     *
     * @var \DateTime
     */
    protected $since;
    /**
     * The user permalink string
     *
     * @var string|null
     */
    protected $slug;
    /**
     * The API URI for this user
     *
     * @var string|null
     */
    protected $uri;
    /**
     * The user website
     *
     * @var string|null
     */
    protected $website;

    /**
     * The user self description
     */
    public function getAbout(): ?string
    {
        return $this->about;
    }

    /**
     * The user self description
     */
    public function setAbout(?string $about): self
    {
        $this->initialized['about'] = true;
        $this->about = $about;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;

        return $this;
    }

    /**
     * The user avatar URL
     */
    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    /**
     * The user avatar URL
     */
    public function setAvatar(?string $avatar): self
    {
        $this->initialized['avatar'] = true;
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * The user avatar thumbnail URL. This is the square (500x500) and cropped version.
     */
    public function getAvatarThumbnail(): ?string
    {
        return $this->avatarThumbnail;
    }

    /**
     * The user avatar thumbnail URL. This is the square (500x500) and cropped version.
     */
    public function setAvatarThumbnail(?string $avatarThumbnail): self
    {
        $this->initialized['avatarThumbnail'] = true;
        $this->avatarThumbnail = $avatarThumbnail;

        return $this;
    }

    /**
     * The user email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * The user email
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
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * The user first name
     */
    public function setFirstName(string $firstName): self
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
     * The user's most recent login date (present for global admins, on /me, and for organization members in their org context)
     */
    public function getLastLoginAt()
    {
        return $this->lastLoginAt;
    }

    /**
     * The user's most recent login date (present for global admins, on /me, and for organization members in their org context)
     */
    public function setLastLoginAt($lastLoginAt): self
    {
        $this->initialized['lastLoginAt'] = true;
        $this->lastLoginAt = $lastLoginAt;

        return $this;
    }

    /**
     * The user last name
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * The user last name
     */
    public function setLastName(string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * The user metrics
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * The user metrics
     */
    public function setMetrics($metrics): self
    {
        $this->initialized['metrics'] = true;
        $this->metrics = $metrics;

        return $this;
    }

    /**
     * The organization the user belongs to
     *
     * @return list<OrganizationReference>
     */
    public function getOrganizations(): array
    {
        return $this->organizations;
    }

    /**
     * The organization the user belongs to
     *
     * @param list<OrganizationReference> $organizations
     */
    public function setOrganizations(array $organizations): self
    {
        $this->initialized['organizations'] = true;
        $this->organizations = $organizations;

        return $this;
    }

    /**
     * The user web page URL
     */
    public function getPage(): ?string
    {
        return $this->page;
    }

    /**
     * The user web page URL
     */
    public function setPage(?string $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;

        return $this;
    }

    /**
     * Date at which a password rotation was requested for this user (only present for global admins and on /me)
     */
    public function getPasswordRotationDemanded()
    {
        return $this->passwordRotationDemanded;
    }

    /**
     * Date at which a password rotation was requested for this user (only present for global admins and on /me)
     */
    public function setPasswordRotationDemanded($passwordRotationDemanded): self
    {
        $this->initialized['passwordRotationDemanded'] = true;
        $this->passwordRotationDemanded = $passwordRotationDemanded;

        return $this;
    }

    /**
     * Date at which the user performed the requested password rotation (only present for global admins and on /me)
     */
    public function getPasswordRotationPerformed()
    {
        return $this->passwordRotationPerformed;
    }

    /**
     * Date at which the user performed the requested password rotation (only present for global admins and on /me)
     */
    public function setPasswordRotationPerformed($passwordRotationPerformed): self
    {
        $this->initialized['passwordRotationPerformed'] = true;
        $this->passwordRotationPerformed = $passwordRotationPerformed;

        return $this;
    }

    /**
     * Site wide user roles
     *
     * @return list<string>
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    /**
     * Site wide user roles
     *
     * @param list<string> $roles
     */
    public function setRoles(array $roles): self
    {
        $this->initialized['roles'] = true;
        $this->roles = $roles;

        return $this;
    }

    /**
     * The registeration date
     */
    public function getSince(): \DateTime
    {
        return $this->since;
    }

    /**
     * The registeration date
     */
    public function setSince(\DateTime $since): self
    {
        $this->initialized['since'] = true;
        $this->since = $since;

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

    /**
     * The API URI for this user
     */
    public function getUri(): ?string
    {
        return $this->uri;
    }

    /**
     * The API URI for this user
     */
    public function setUri(?string $uri): self
    {
        $this->initialized['uri'] = true;
        $this->uri = $uri;

        return $this;
    }

    /**
     * The user website
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }

    /**
     * The user website
     */
    public function setWebsite(?string $website): self
    {
        $this->initialized['website'] = true;
        $this->website = $website;

        return $this;
    }
}
