<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class UserReference
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
     * The object class
     *
     * @var string
     */
    protected $class;
    /**
     * The object unique identifier
     *
     * @var string
     */
    protected $id;
    /**
     * The user avatar URL
     *
     * @var string
     */
    protected $avatar;
    /**
     * The user avatar thumbnail URL. This is the square (500x500) and cropped version.
     *
     * @var string
     */
    protected $avatarThumbnail;
    /**
     * The user first name
     *
     * @var string
     */
    protected $firstName;
    /**
     * The user larst name
     *
     * @var string
     */
    protected $lastName;
    /**
     * The user web page URL
     *
     * @var string
     */
    protected $page;
    /**
     * The user permalink string
     *
     * @var string
     */
    protected $slug;
    /**
     * The API URI for this user
     *
     * @var string
     */
    protected $uri;

    /**
     * The object class
     */
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * The object class
     */
    public function setClass(string $class): self
    {
        $this->initialized['class'] = true;
        $this->class = $class;

        return $this;
    }

    /**
     * The object unique identifier
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The object unique identifier
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The user avatar URL
     */
    public function getAvatar(): string
    {
        return $this->avatar;
    }

    /**
     * The user avatar URL
     */
    public function setAvatar(string $avatar): self
    {
        $this->initialized['avatar'] = true;
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * The user avatar thumbnail URL. This is the square (500x500) and cropped version.
     */
    public function getAvatarThumbnail(): string
    {
        return $this->avatarThumbnail;
    }

    /**
     * The user avatar thumbnail URL. This is the square (500x500) and cropped version.
     */
    public function setAvatarThumbnail(string $avatarThumbnail): self
    {
        $this->initialized['avatarThumbnail'] = true;
        $this->avatarThumbnail = $avatarThumbnail;

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
     * The user larst name
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * The user larst name
     */
    public function setLastName(string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * The user web page URL
     */
    public function getPage(): string
    {
        return $this->page;
    }

    /**
     * The user web page URL
     */
    public function setPage(string $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;

        return $this;
    }

    /**
     * The user permalink string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * The user permalink string
     */
    public function setSlug(string $slug): self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;

        return $this;
    }

    /**
     * The API URI for this user
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * The API URI for this user
     */
    public function setUri(string $uri): self
    {
        $this->initialized['uri'] = true;
        $this->uri = $uri;

        return $this;
    }
}
