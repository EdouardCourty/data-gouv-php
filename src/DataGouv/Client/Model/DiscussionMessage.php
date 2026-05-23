<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DiscussionMessage
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
     *
     * @var mixed
     */
    protected $postedBy;
    /**
     * The organization to show to users
     *
     * @var mixed
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
     *
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }
    /**
     * The message body
     *
     * @param string|null $content
     *
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
    /**
     * The message identifier
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The message identifier
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
     * The message last edit date
     *
     * @return \DateTime|null
     */
    public function getLastModifiedAt(): ?\DateTime
    {
        return $this->lastModifiedAt;
    }
    /**
     * The message last edit date
     *
     * @param \DateTime|null $lastModifiedAt
     *
     * @return self
     */
    public function setLastModifiedAt(?\DateTime $lastModifiedAt): self
    {
        $this->initialized['lastModifiedAt'] = true;
        $this->lastModifiedAt = $lastModifiedAt;
        return $this;
    }
    /**
     * @return DiscussionMessagePermissions
     */
    public function getPermissions(): DiscussionMessagePermissions
    {
        return $this->permissions;
    }
    /**
     * @param DiscussionMessagePermissions $permissions
     *
     * @return self
     */
    public function setPermissions(DiscussionMessagePermissions $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;
        return $this;
    }
    /**
     * The message author
     *
     * @return mixed
     */
    public function getPostedBy()
    {
        return $this->postedBy;
    }
    /**
     * The message author
     *
     * @param mixed $postedBy
     *
     * @return self
     */
    public function setPostedBy($postedBy): self
    {
        $this->initialized['postedBy'] = true;
        $this->postedBy = $postedBy;
        return $this;
    }
    /**
     * The organization to show to users
     *
     * @return mixed
     */
    public function getPostedByOrganization()
    {
        return $this->postedByOrganization;
    }
    /**
     * The organization to show to users
     *
     * @param mixed $postedByOrganization
     *
     * @return self
     */
    public function setPostedByOrganization($postedByOrganization): self
    {
        $this->initialized['postedByOrganization'] = true;
        $this->postedByOrganization = $postedByOrganization;
        return $this;
    }
    /**
     * The message posting date
     *
     * @return \DateTime|null
     */
    public function getPostedOn(): ?\DateTime
    {
        return $this->postedOn;
    }
    /**
     * The message posting date
     *
     * @param \DateTime|null $postedOn
     *
     * @return self
     */
    public function setPostedOn(?\DateTime $postedOn): self
    {
        $this->initialized['postedOn'] = true;
        $this->postedOn = $postedOn;
        return $this;
    }
}