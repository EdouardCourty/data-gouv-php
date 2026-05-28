<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class User
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
     *
     * @var mixed
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
     *
     * @var mixed
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
     *
     * @var mixed
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
     *
     * @var mixed
     */
    protected $passwordRotationDemanded;
    /**
     * Date at which the user performed the requested password rotation (only present for global admins and on /me)
     *
     * @var mixed
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
     *
     * @return string|null
     */
    public function getAbout(): ?string
    {
        return $this->about;
    }
    /**
     * The user self description
     *
     * @param string|null $about
     *
     * @return self
     */
    public function setAbout(?string $about): self
    {
        $this->initialized['about'] = true;
        $this->about = $about;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }
    /**
     * @param bool|null $active
     *
     * @return self
     */
    public function setActive(?bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
    /**
     * The user avatar URL
     *
     * @return string|null
     */
    public function getAvatar(): ?string
    {
        return $this->avatar;
    }
    /**
     * The user avatar URL
     *
     * @param string|null $avatar
     *
     * @return self
     */
    public function setAvatar(?string $avatar): self
    {
        $this->initialized['avatar'] = true;
        $this->avatar = $avatar;
        return $this;
    }
    /**
     * The user avatar thumbnail URL. This is the square (500x500) and cropped version.
     *
     * @return string|null
     */
    public function getAvatarThumbnail(): ?string
    {
        return $this->avatarThumbnail;
    }
    /**
     * The user avatar thumbnail URL. This is the square (500x500) and cropped version.
     *
     * @param string|null $avatarThumbnail
     *
     * @return self
     */
    public function setAvatarThumbnail(?string $avatarThumbnail): self
    {
        $this->initialized['avatarThumbnail'] = true;
        $this->avatarThumbnail = $avatarThumbnail;
        return $this;
    }
    /**
     * The user email
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * The user email
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
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    /**
     * The user first name
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName): self
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
     * The user's most recent login date (present for global admins, on /me, and for organization members in their org context)
     *
     * @return mixed
     */
    public function getLastLoginAt()
    {
        return $this->lastLoginAt;
    }
    /**
     * The user's most recent login date (present for global admins, on /me, and for organization members in their org context)
     *
     * @param mixed $lastLoginAt
     *
     * @return self
     */
    public function setLastLoginAt($lastLoginAt): self
    {
        $this->initialized['lastLoginAt'] = true;
        $this->lastLoginAt = $lastLoginAt;
        return $this;
    }
    /**
     * The user last name
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
    /**
     * The user last name
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * The user metrics
     *
     * @return mixed
     */
    public function getMetrics()
    {
        return $this->metrics;
    }
    /**
     * The user metrics
     *
     * @param mixed $metrics
     *
     * @return self
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
     *
     * @return self
     */
    public function setOrganizations(array $organizations): self
    {
        $this->initialized['organizations'] = true;
        $this->organizations = $organizations;
        return $this;
    }
    /**
     * The user web page URL
     *
     * @return string|null
     */
    public function getPage(): ?string
    {
        return $this->page;
    }
    /**
     * The user web page URL
     *
     * @param string|null $page
     *
     * @return self
     */
    public function setPage(?string $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;
        return $this;
    }
    /**
     * Date at which a password rotation was requested for this user (only present for global admins and on /me)
     *
     * @return mixed
     */
    public function getPasswordRotationDemanded()
    {
        return $this->passwordRotationDemanded;
    }
    /**
     * Date at which a password rotation was requested for this user (only present for global admins and on /me)
     *
     * @param mixed $passwordRotationDemanded
     *
     * @return self
     */
    public function setPasswordRotationDemanded($passwordRotationDemanded): self
    {
        $this->initialized['passwordRotationDemanded'] = true;
        $this->passwordRotationDemanded = $passwordRotationDemanded;
        return $this;
    }
    /**
     * Date at which the user performed the requested password rotation (only present for global admins and on /me)
     *
     * @return mixed
     */
    public function getPasswordRotationPerformed()
    {
        return $this->passwordRotationPerformed;
    }
    /**
     * Date at which the user performed the requested password rotation (only present for global admins and on /me)
     *
     * @param mixed $passwordRotationPerformed
     *
     * @return self
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
     *
     * @return self
     */
    public function setRoles(array $roles): self
    {
        $this->initialized['roles'] = true;
        $this->roles = $roles;
        return $this;
    }
    /**
     * The registeration date
     *
     * @return \DateTime
     */
    public function getSince(): \DateTime
    {
        return $this->since;
    }
    /**
     * The registeration date
     *
     * @param \DateTime $since
     *
     * @return self
     */
    public function setSince(\DateTime $since): self
    {
        $this->initialized['since'] = true;
        $this->since = $since;
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
    /**
     * The API URI for this user
     *
     * @return string|null
     */
    public function getUri(): ?string
    {
        return $this->uri;
    }
    /**
     * The API URI for this user
     *
     * @param string|null $uri
     *
     * @return self
     */
    public function setUri(?string $uri): self
    {
        $this->initialized['uri'] = true;
        $this->uri = $uri;
        return $this;
    }
    /**
     * The user website
     *
     * @return string|null
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }
    /**
     * The user website
     *
     * @param string|null $website
     *
     * @return self
     */
    public function setWebsite(?string $website): self
    {
        $this->initialized['website'] = true;
        $this->website = $website;
        return $this;
    }
}