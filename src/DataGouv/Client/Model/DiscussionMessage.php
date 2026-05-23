<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DiscussionMessage
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
     * The message body
     *
     * @var string|null
     */
    protected $content;
    /**
     * The message identifier
     *
     * @var string|null
     */
    protected $id;
    /**
     * The message last edit date
     *
     * @var \DateTime|null
     */
    protected $lastModifiedAt;
    /**
     * @var DiscussionMessagePermissions
     */
    protected $permissions;
    /**
     * The message author
     */
    protected $postedBy;
    /**
     * The organization to show to users
     */
    protected $postedByOrganization;
    /**
     * The message posting date
     *
     * @var \DateTime|null
     */
    protected $postedOn;

    /**
     * The message body
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * The message body
     */
    public function setContent(?string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;

        return $this;
    }

    /**
     * The message identifier
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The message identifier
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The message last edit date
     */
    public function getLastModifiedAt(): ?\DateTime
    {
        return $this->lastModifiedAt;
    }

    /**
     * The message last edit date
     */
    public function setLastModifiedAt(?\DateTime $lastModifiedAt): self
    {
        $this->initialized['lastModifiedAt'] = true;
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    public function getPermissions(): DiscussionMessagePermissions
    {
        return $this->permissions;
    }

    public function setPermissions(DiscussionMessagePermissions $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;

        return $this;
    }

    /**
     * The message author
     */
    public function getPostedBy()
    {
        return $this->postedBy;
    }

    /**
     * The message author
     */
    public function setPostedBy($postedBy): self
    {
        $this->initialized['postedBy'] = true;
        $this->postedBy = $postedBy;

        return $this;
    }

    /**
     * The organization to show to users
     */
    public function getPostedByOrganization()
    {
        return $this->postedByOrganization;
    }

    /**
     * The organization to show to users
     */
    public function setPostedByOrganization($postedByOrganization): self
    {
        $this->initialized['postedByOrganization'] = true;
        $this->postedByOrganization = $postedByOrganization;

        return $this;
    }

    /**
     * The message posting date
     */
    public function getPostedOn(): ?\DateTime
    {
        return $this->postedOn;
    }

    /**
     * The message posting date
     */
    public function setPostedOn(?\DateTime $postedOn): self
    {
        $this->initialized['postedOn'] = true;
        $this->postedOn = $postedOn;

        return $this;
    }
}
