<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class ChartWrite
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
     * @return list<DataSeriesWrite>
     */
    public function getSeries(): array
    {
        return $this->series;
    }
    /**
     * @param list<DataSeriesWrite> $series
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
     * @return XAxisWrite
     */
    public function getXAxis(): XAxisWrite
    {
        return $this->xAxis;
    }
    /**
     * @param XAxisWrite $xAxis
     *
     * @return self
     */
    public function setXAxis(XAxisWrite $xAxis): self
    {
        $this->initialized['xAxis'] = true;
        $this->xAxis = $xAxis;
        return $this;
    }
    /**
     * @return YAxisWrite
     */
    public function getYAxis(): YAxisWrite
    {
        return $this->yAxis;
    }
    /**
     * @param YAxisWrite $yAxis
     *
     * @return self
     */
    public function setYAxis(YAxisWrite $yAxis): self
    {
        $this->initialized['yAxis'] = true;
        $this->yAxis = $yAxis;
        return $this;
    }
}