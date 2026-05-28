<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class HarvestBackend
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
     * The backend extra configuration variables
     *
     * @var list<HarvestExtraConfig>
     */
    protected $extraConfigs;
    /**
     * The backend optional features
     *
     * @var list<HarvestFeature>
     */
    protected $features;
    /**
     * The backend supported filters
     *
     * @var list<HarvestFilter>
     */
    protected $filters;
    /**
     * The backend identifier
     *
     * @var string|null
     */
    protected $id;
    /**
     * The backend display name
     *
     * @var string|null
     */
    protected $label;
    /**
     * The backend extra configuration variables
     *
     * @return list<HarvestExtraConfig>
     */
    public function getExtraConfigs(): array
    {
        return $this->extraConfigs;
    }
    /**
     * The backend extra configuration variables
     *
     * @param list<HarvestExtraConfig> $extraConfigs
     *
     * @return self
     */
    public function setExtraConfigs(array $extraConfigs): self
    {
        $this->initialized['extraConfigs'] = true;
        $this->extraConfigs = $extraConfigs;
        return $this;
    }
    /**
     * The backend optional features
     *
     * @return list<HarvestFeature>
     */
    public function getFeatures(): array
    {
        return $this->features;
    }
    /**
     * The backend optional features
     *
     * @param list<HarvestFeature> $features
     *
     * @return self
     */
    public function setFeatures(array $features): self
    {
        $this->initialized['features'] = true;
        $this->features = $features;
        return $this;
    }
    /**
     * The backend supported filters
     *
     * @return list<HarvestFilter>
     */
    public function getFilters(): array
    {
        return $this->filters;
    }
    /**
     * The backend supported filters
     *
     * @param list<HarvestFilter> $filters
     *
     * @return self
     */
    public function setFilters(array $filters): self
    {
        $this->initialized['filters'] = true;
        $this->filters = $filters;
        return $this;
    }
    /**
     * The backend identifier
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The backend identifier
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
     * The backend display name
     *
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }
    /**
     * The backend display name
     *
     * @param string|null $label
     *
     * @return self
     */
    public function setLabel(?string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
}