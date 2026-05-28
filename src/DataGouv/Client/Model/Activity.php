<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class Activity
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
     * The user who performed the action
     *
     * @var mixed
     */
    protected $actor;
    /**
     * Changed attributes as list
     *
     * @var list<string>
     */
    protected $changes;
    /**
     * When the action has been performed
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Extras attributes as key-value pairs
     *
     * @var mixed
     */
    protected $extras;
    /**
     * The icon of the activity
     *
     * @var string
     */
    protected $icon;
    /**
     * The key of the activity
     *
     * @var string
     */
    protected $key;
    /**
     * The label of the activity
     *
     * @var string
     */
    protected $label;
    /**
     * The organization who performed the action
     *
     * @var mixed
     */
    protected $organization;
    /**
     * The activity target name
     *
     * @var string
     */
    protected $relatedTo;
    /**
     * The activity target object identifier
     *
     * @var string
     */
    protected $relatedToId;
    /**
     * The activity target object class name
     *
     * @var string
     */
    protected $relatedToKind;
    /**
     * The activity target model
     *
     * @var string
     */
    protected $relatedToUrl;
    /**
     * The user who performed the action
     *
     * @return mixed
     */
    public function getActor()
    {
        return $this->actor;
    }
    /**
     * The user who performed the action
     *
     * @param mixed $actor
     *
     * @return self
     */
    public function setActor($actor): self
    {
        $this->initialized['actor'] = true;
        $this->actor = $actor;
        return $this;
    }
    /**
     * Changed attributes as list
     *
     * @return list<string>
     */
    public function getChanges(): array
    {
        return $this->changes;
    }
    /**
     * Changed attributes as list
     *
     * @param list<string> $changes
     *
     * @return self
     */
    public function setChanges(array $changes): self
    {
        $this->initialized['changes'] = true;
        $this->changes = $changes;
        return $this;
    }
    /**
     * When the action has been performed
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * When the action has been performed
     *
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Extras attributes as key-value pairs
     *
     * @return mixed
     */
    public function getExtras()
    {
        return $this->extras;
    }
    /**
     * Extras attributes as key-value pairs
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
     * The icon of the activity
     *
     * @return string
     */
    public function getIcon(): string
    {
        return $this->icon;
    }
    /**
     * The icon of the activity
     *
     * @param string $icon
     *
     * @return self
     */
    public function setIcon(string $icon): self
    {
        $this->initialized['icon'] = true;
        $this->icon = $icon;
        return $this;
    }
    /**
     * The key of the activity
     *
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }
    /**
     * The key of the activity
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
    /**
     * The label of the activity
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }
    /**
     * The label of the activity
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
    /**
     * The organization who performed the action
     *
     * @return mixed
     */
    public function getOrganization()
    {
        return $this->organization;
    }
    /**
     * The organization who performed the action
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
     * The activity target name
     *
     * @return string
     */
    public function getRelatedTo(): string
    {
        return $this->relatedTo;
    }
    /**
     * The activity target name
     *
     * @param string $relatedTo
     *
     * @return self
     */
    public function setRelatedTo(string $relatedTo): self
    {
        $this->initialized['relatedTo'] = true;
        $this->relatedTo = $relatedTo;
        return $this;
    }
    /**
     * The activity target object identifier
     *
     * @return string
     */
    public function getRelatedToId(): string
    {
        return $this->relatedToId;
    }
    /**
     * The activity target object identifier
     *
     * @param string $relatedToId
     *
     * @return self
     */
    public function setRelatedToId(string $relatedToId): self
    {
        $this->initialized['relatedToId'] = true;
        $this->relatedToId = $relatedToId;
        return $this;
    }
    /**
     * The activity target object class name
     *
     * @return string
     */
    public function getRelatedToKind(): string
    {
        return $this->relatedToKind;
    }
    /**
     * The activity target object class name
     *
     * @param string $relatedToKind
     *
     * @return self
     */
    public function setRelatedToKind(string $relatedToKind): self
    {
        $this->initialized['relatedToKind'] = true;
        $this->relatedToKind = $relatedToKind;
        return $this;
    }
    /**
     * The activity target model
     *
     * @return string
     */
    public function getRelatedToUrl(): string
    {
        return $this->relatedToUrl;
    }
    /**
     * The activity target model
     *
     * @param string $relatedToUrl
     *
     * @return self
     */
    public function setRelatedToUrl(string $relatedToUrl): self
    {
        $this->initialized['relatedToUrl'] = true;
        $this->relatedToUrl = $relatedToUrl;
        return $this;
    }
}