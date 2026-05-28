<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class ReuseWrite
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
     * @var \DateTime|null
     */
    protected $archived;
    /**
     * @var list<string>
     */
    protected $dataservices;
    /**
     * @var list<string>
     */
    protected $datasets;
    /**
     * @var \DateTime|null
     */
    protected $deleted;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var mixed
     */
    protected $extras;
    /**
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     *
     * @var string|null
     */
    protected $organization;
    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
     *
     * @var string|null
     */
    protected $owner;
    /**
     * @var bool|null
     */
    protected $private;
    /**
     * @var list<string>
     */
    protected $tags;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $topic;
    /**
     * @var string
     */
    protected $type;
    /**
     * The remote URL (website)
     *
     * @var string
     */
    protected $url;
    /**
     * @return \DateTime|null
     */
    public function getArchived(): ?\DateTime
    {
        return $this->archived;
    }
    /**
     * @param \DateTime|null $archived
     *
     * @return self
     */
    public function setArchived(?\DateTime $archived): self
    {
        $this->initialized['archived'] = true;
        $this->archived = $archived;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getDataservices(): array
    {
        return $this->dataservices;
    }
    /**
     * @param list<string> $dataservices
     *
     * @return self
     */
    public function setDataservices(array $dataservices): self
    {
        $this->initialized['dataservices'] = true;
        $this->dataservices = $dataservices;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getDatasets(): array
    {
        return $this->datasets;
    }
    /**
     * @param list<string> $datasets
     *
     * @return self
     */
    public function setDatasets(array $datasets): self
    {
        $this->initialized['datasets'] = true;
        $this->datasets = $datasets;
        return $this;
    }
    /**
     * @return \DateTime|null
     */
    public function getDeleted(): ?\DateTime
    {
        return $this->deleted;
    }
    /**
     * @param \DateTime|null $deleted
     *
     * @return self
     */
    public function setDeleted(?\DateTime $deleted): self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getExtras()
    {
        return $this->extras;
    }
    /**
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
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     *
     * @return string|null
     */
    public function getOrganization(): ?string
    {
        return $this->organization;
    }
    /**
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     *
     * @param string|null $organization
     *
     * @return self
     */
    public function setOrganization(?string $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;
        return $this;
    }
    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
     *
     * @return string|null
     */
    public function getOwner(): ?string
    {
        return $this->owner;
    }
    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
     *
     * @param string|null $owner
     *
     * @return self
     */
    public function setOwner(?string $owner): self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getPrivate(): ?bool
    {
        return $this->private;
    }
    /**
     * @param bool|null $private
     *
     * @return self
     */
    public function setPrivate(?bool $private): self
    {
        $this->initialized['private'] = true;
        $this->private = $private;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }
    /**
     * @param list<string> $tags
     *
     * @return self
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * @return string
     */
    public function getTopic(): string
    {
        return $this->topic;
    }
    /**
     * @param string $topic
     *
     * @return self
     */
    public function setTopic(string $topic): self
    {
        $this->initialized['topic'] = true;
        $this->topic = $topic;
        return $this;
    }
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The remote URL (website)
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * The remote URL (website)
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
}