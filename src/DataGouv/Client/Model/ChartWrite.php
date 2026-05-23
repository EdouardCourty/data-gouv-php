<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class ChartWrite
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
     * @var string
     */
    protected $description;
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
     * @var list<DataSeriesWrite>
     */
    protected $series;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var XAxisWrite
     */
    protected $xAxis;
    /**
     * @var YAxisWrite
     */
    protected $yAxis;

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

    /**
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     */
    public function getOrganization(): ?string
    {
        return $this->organization;
    }

    /**
     * Only present if owner is not set. Can only be set to an organization of the current authenticated user.
     */
    public function setOrganization(?string $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }

    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
     */
    public function getOwner(): ?string
    {
        return $this->owner;
    }

    /**
     * Only present if organization is not set. Can only be set to the current authenticated user.
     */
    public function setOwner(?string $owner): self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;

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
     * @return list<DataSeriesWrite>
     */
    public function getSeries(): array
    {
        return $this->series;
    }

    /**
     * @param list<DataSeriesWrite> $series
     */
    public function setSeries(array $series): self
    {
        $this->initialized['series'] = true;
        $this->series = $series;

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

    public function getXAxis(): XAxisWrite
    {
        return $this->xAxis;
    }

    public function setXAxis(XAxisWrite $xAxis): self
    {
        $this->initialized['xAxis'] = true;
        $this->xAxis = $xAxis;

        return $this;
    }

    public function getYAxis(): YAxisWrite
    {
        return $this->yAxis;
    }

    public function setYAxis(YAxisWrite $yAxis): self
    {
        $this->initialized['yAxis'] = true;
        $this->yAxis = $yAxis;

        return $this;
    }
}
