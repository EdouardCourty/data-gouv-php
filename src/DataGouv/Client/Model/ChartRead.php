<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class ChartRead
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
    protected $extras;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var \DateTime
     */
    protected $lastModified;
    protected $metrics;
    /**
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     */
    protected $organization;
    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
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

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(?\DateTime $deletedAt): self
    {
        $this->initialized['deletedAt'] = true;
        $this->deletedAt = $deletedAt;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getExtras()
    {
        return $this->extras;
    }

    public function setExtras($extras): self
    {
        $this->initialized['extras'] = true;
        $this->extras = $extras;

        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getLastModified(): \DateTime
    {
        return $this->lastModified;
    }

    public function setLastModified(\DateTime $lastModified): self
    {
        $this->initialized['lastModified'] = true;
        $this->lastModified = $lastModified;

        return $this;
    }

    public function getMetrics()
    {
        return $this->metrics;
    }

    public function setMetrics($metrics): self
    {
        $this->initialized['metrics'] = true;
        $this->metrics = $metrics;

        return $this;
    }

    /**
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     */
    public function setOrganization($organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }

    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
     */
    public function setOwner($owner): self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;

        return $this;
    }

    public function getPermissions(): ChartReadPermissions
    {
        return $this->permissions;
    }

    public function setPermissions(ChartReadPermissions $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;

        return $this;
    }

    public function getPrivate(): ?bool
    {
        return $this->private;
    }

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
     */
    public function setSeries(array $series): self
    {
        $this->initialized['series'] = true;
        $this->series = $series;

        return $this;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    public function getXAxis(): XAxisRead
    {
        return $this->xAxis;
    }

    public function setXAxis(XAxisRead $xAxis): self
    {
        $this->initialized['xAxis'] = true;
        $this->xAxis = $xAxis;

        return $this;
    }

    public function getYAxis(): YAxisRead
    {
        return $this->yAxis;
    }

    public function setYAxis(YAxisRead $yAxis): self
    {
        $this->initialized['yAxis'] = true;
        $this->yAxis = $yAxis;

        return $this;
    }
}
