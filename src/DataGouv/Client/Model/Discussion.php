<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class Discussion
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
     *
     * @var mixed
     */
    protected $closedBy;
    /**
     * The organization who closed the discussion
     *
     * @var mixed
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
     *
     * @var mixed
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
     *
     * @var mixed
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
     *
     * @var mixed
     */
    protected $user;
    /**
     * The object class
     *
     * @return string
     */
    public function getClass(): string
    {
        return $this->class;
    }
    /**
     * The object class
     *
     * @param string $class
     *
     * @return self
     */
    public function setClass(string $class): self
    {
        $this->initialized['class'] = true;
        $this->class = $class;
        return $this;
    }
    /**
     * The discussion closing date
     *
     * @return \DateTime|null
     */
    public function getClosed(): ?\DateTime
    {
        return $this->closed;
    }
    /**
     * The discussion closing date
     *
     * @param \DateTime|null $closed
     *
     * @return self
     */
    public function setClosed(?\DateTime $closed): self
    {
        $this->initialized['closed'] = true;
        $this->closed = $closed;
        return $this;
    }
    /**
     * The user who closed the discussion
     *
     * @return mixed
     */
    public function getClosedBy()
    {
        return $this->closedBy;
    }
    /**
     * The user who closed the discussion
     *
     * @param mixed $closedBy
     *
     * @return self
     */
    public function setClosedBy($closedBy): self
    {
        $this->initialized['closedBy'] = true;
        $this->closedBy = $closedBy;
        return $this;
    }
    /**
     * The organization who closed the discussion
     *
     * @return mixed
     */
    public function getClosedByOrganization()
    {
        return $this->closedByOrganization;
    }
    /**
     * The organization who closed the discussion
     *
     * @param mixed $closedByOrganization
     *
     * @return self
     */
    public function setClosedByOrganization($closedByOrganization): self
    {
        $this->initialized['closedByOrganization'] = true;
        $this->closedByOrganization = $closedByOrganization;
        return $this;
    }
    /**
     * The discussion creation date
     *
     * @return \DateTime|null
     */
    public function getCreated(): ?\DateTime
    {
        return $this->created;
    }
    /**
     * The discussion creation date
     *
     * @param \DateTime|null $created
     *
     * @return self
     */
    public function setCreated(?\DateTime $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
        return $this;
    }
    /**
     * @return DiscussionMessage
     */
    public function getDiscussion(): DiscussionMessage
    {
        return $this->discussion;
    }
    /**
     * @param DiscussionMessage $discussion
     *
     * @return self
     */
    public function setDiscussion(DiscussionMessage $discussion): self
    {
        $this->initialized['discussion'] = true;
        $this->discussion = $discussion;
        return $this;
    }
    /**
     * Extra attributes as key-value pairs
     *
     * @return mixed
     */
    public function getExtras()
    {
        return $this->extras;
    }
    /**
     * Extra attributes as key-value pairs
     *
     * @param mixed $extras
     *
     * @return self
     */
    public function setExtras($extras): self
    {
        $this->initialized['extras'] = true;
        $this->extras = $extras;
        return $this;
    }
    /**
     * The discussion identifier
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The discussion identifier
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
     * The discussion author
     *
     * @return mixed
     */
    public function getOrganization()
    {
        return $this->organization;
    }
    /**
     * The discussion author
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
     * @return DiscussionPermissions
     */
    public function getPermissions(): DiscussionPermissions
    {
        return $this->permissions;
    }
    /**
     * @param DiscussionPermissions $permissions
     *
     * @return self
     */
    public function setPermissions(DiscussionPermissions $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;
        return $this;
    }
    /**
     * The discussion web URL
     *
     * @return string|null
     */
    public function getSelfWebUrl(): ?string
    {
        return $this->selfWebUrl;
    }
    /**
     * The discussion web URL
     *
     * @param string|null $selfWebUrl
     *
     * @return self
     */
    public function setSelfWebUrl(?string $selfWebUrl): self
    {
        $this->initialized['selfWebUrl'] = true;
        $this->selfWebUrl = $selfWebUrl;
        return $this;
    }
    /**
     * The discussion target object
     *
     * @return DiscussionSubject
     */
    public function getSubject(): DiscussionSubject
    {
        return $this->subject;
    }
    /**
     * The discussion target object
     *
     * @param DiscussionSubject $subject
     *
     * @return self
     */
    public function setSubject(DiscussionSubject $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;
        return $this;
    }
    /**
     * The discussion title
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * The discussion title
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * The discussion API URI
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }
    /**
     * The discussion API URI
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * The discussion author
     *
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * The discussion author
     *
     * @param mixed $user
     *
     * @return self
     */
    public function setUser($user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
}