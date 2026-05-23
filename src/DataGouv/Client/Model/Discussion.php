<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class Discussion
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
     * The discussion closing date
     *
     * @var \DateTime|null
     */
    protected $closed;
    /**
     * The user who closed the discussion
     */
    protected $closedBy;
    /**
     * The organization who closed the discussion
     */
    protected $closedByOrganization;
    /**
     * The discussion creation date
     *
     * @var \DateTime|null
     */
    protected $created;
    /**
     * @var DiscussionMessage
     */
    protected $discussion;
    /**
     * Extra attributes as key-value pairs
     */
    protected $extras;
    /**
     * The discussion identifier
     *
     * @var string|null
     */
    protected $id;
    /**
     * The discussion author
     */
    protected $organization;
    /**
     * @var DiscussionPermissions
     */
    protected $permissions;
    /**
     * The discussion web URL
     *
     * @var string|null
     */
    protected $selfWebUrl;
    /**
     * The discussion target object
     *
     * @var DiscussionSubject
     */
    protected $subject;
    /**
     * The discussion title
     *
     * @var string|null
     */
    protected $title;
    /**
     * The discussion API URI
     *
     * @var string|null
     */
    protected $url;
    /**
     * The discussion author
     */
    protected $user;

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
     * The discussion closing date
     */
    public function getClosed(): ?\DateTime
    {
        return $this->closed;
    }

    /**
     * The discussion closing date
     */
    public function setClosed(?\DateTime $closed): self
    {
        $this->initialized['closed'] = true;
        $this->closed = $closed;

        return $this;
    }

    /**
     * The user who closed the discussion
     */
    public function getClosedBy()
    {
        return $this->closedBy;
    }

    /**
     * The user who closed the discussion
     */
    public function setClosedBy($closedBy): self
    {
        $this->initialized['closedBy'] = true;
        $this->closedBy = $closedBy;

        return $this;
    }

    /**
     * The organization who closed the discussion
     */
    public function getClosedByOrganization()
    {
        return $this->closedByOrganization;
    }

    /**
     * The organization who closed the discussion
     */
    public function setClosedByOrganization($closedByOrganization): self
    {
        $this->initialized['closedByOrganization'] = true;
        $this->closedByOrganization = $closedByOrganization;

        return $this;
    }

    /**
     * The discussion creation date
     */
    public function getCreated(): ?\DateTime
    {
        return $this->created;
    }

    /**
     * The discussion creation date
     */
    public function setCreated(?\DateTime $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;

        return $this;
    }

    public function getDiscussion(): DiscussionMessage
    {
        return $this->discussion;
    }

    public function setDiscussion(DiscussionMessage $discussion): self
    {
        $this->initialized['discussion'] = true;
        $this->discussion = $discussion;

        return $this;
    }

    /**
     * Extra attributes as key-value pairs
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * Extra attributes as key-value pairs
     */
    public function setExtras($extras): self
    {
        $this->initialized['extras'] = true;
        $this->extras = $extras;

        return $this;
    }

    /**
     * The discussion identifier
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The discussion identifier
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The discussion author
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * The discussion author
     */
    public function setOrganization($organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }

    public function getPermissions(): DiscussionPermissions
    {
        return $this->permissions;
    }

    public function setPermissions(DiscussionPermissions $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;

        return $this;
    }

    /**
     * The discussion web URL
     */
    public function getSelfWebUrl(): ?string
    {
        return $this->selfWebUrl;
    }

    /**
     * The discussion web URL
     */
    public function setSelfWebUrl(?string $selfWebUrl): self
    {
        $this->initialized['selfWebUrl'] = true;
        $this->selfWebUrl = $selfWebUrl;

        return $this;
    }

    /**
     * The discussion target object
     */
    public function getSubject(): DiscussionSubject
    {
        return $this->subject;
    }

    /**
     * The discussion target object
     */
    public function setSubject(DiscussionSubject $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;

        return $this;
    }

    /**
     * The discussion title
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * The discussion title
     */
    public function setTitle(?string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    /**
     * The discussion API URI
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * The discussion API URI
     */
    public function setUrl(?string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    /**
     * The discussion author
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * The discussion author
     */
    public function setUser($user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }
}
