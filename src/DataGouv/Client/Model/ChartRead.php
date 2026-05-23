<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class ChartRead
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
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var mixed
     */
    protected $extras;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var \DateTime
     */
    protected $lastModified;
    /**
     * @var mixed
     */
    protected $metrics;
    /**
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     *
     * @var mixed
     */
    protected $organization;
    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
     *
     * @var mixed
     */
    protected $owner;
    /**
     * @var ChartReadPermissions
     */
    protected $permissions;
    /**
     * @var bool|null
     */
    protected $private;
    /**
     * @var list<DataSeriesRead>
     */
    protected $series;
    /**
     * @var string
     */
    protected $slug;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var XAxisRead
     */
    protected $xAxis;
    /**
     * @var YAxisRead
     */
    protected $yAxis;
    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * @param \DateTime|null $deletedAt
     *
     * @return self
     */
    public function setDeletedAt(?\DateTime $deletedAt): self
    {
        $this->initialized['deletedAt'] = true;
        $this->deletedAt = $deletedAt;
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
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getLastModified(): \DateTime
    {
        return $this->lastModified;
    }
    /**
     * @param \DateTime $lastModified
     *
     * @return self
     */
    public function setLastModified(\DateTime $lastModified): self
    {
        $this->initialized['lastModified'] = true;
        $this->lastModified = $lastModified;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getMetrics()
    {
        return $this->metrics;
    }
    /**
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
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     *
     * @return mixed
     */
    public function getOrganization()
    {
        return $this->organization;
    }
    /**
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
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
     * Only present if organization is not set. Can only be set to the current authenticated user.
     *
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }
    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
     *
     * @param mixed $owner
     *
     * @return self
     */
    public function setOwner($owner): self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;
        return $this;
    }
    /**
     * @return ChartReadPermissions
     */
    public function getPermissions(): ChartReadPermissions
    {
        return $this->permissions;
    }
    /**
     * @param ChartReadPermissions $permissions
     *
     * @return self
     */
    public function setPermissions(ChartReadPermissions $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;
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
     * @return list<DataSeriesRead>
     */
    public function getSeries(): array
    {
        return $this->series;
    }
    /**
     * @param list<DataSeriesRead> $series
     *
     * @return self
     */
    public function setSeries(array $series): self
    {
        $this->initialized['series'] = true;
        $this->series = $series;
        return $this;
    }
    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }
    /**
     * @param string $slug
     *
     * @return self
     */
    public function setSlug(string $slug): self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;
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
     * @return XAxisRead
     */
    public function getXAxis(): XAxisRead
    {
        return $this->xAxis;
    }
    /**
     * @param XAxisRead $xAxis
     *
     * @return self
     */
    public function setXAxis(XAxisRead $xAxis): self
    {
        $this->initialized['xAxis'] = true;
        $this->xAxis = $xAxis;
        return $this;
    }
    /**
     * @return YAxisRead
     */
    public function getYAxis(): YAxisRead
    {
        return $this->yAxis;
    }
    /**
     * @param YAxisRead $yAxis
     *
     * @return self
     */
    public function setYAxis(YAxisRead $yAxis): self
    {
        $this->initialized['yAxis'] = true;
        $this->yAxis = $yAxis;
        return $this;
    }
}