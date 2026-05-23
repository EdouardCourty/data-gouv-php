<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class SiteRead
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
     * @var list<mixed>
     */
    protected $dataservicesBlocs;
    /**
     * @var list<mixed>
     */
    protected $datasetsBlocs;
    /**
     * @var int
     */
    protected $feedSize;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var list<string>
     */
    protected $keywords;
    /**
     * @var mixed
     */
    protected $metrics;
    /**
     * @var list<mixed>
     */
    protected $reusesBlocs;
    /**
     * The site display title
     *
     * @var string
     */
    protected $title;
    /**
     * The current version of udata
     *
     * @var string|null
     */
    protected $version;
    /**
     * @return list<mixed>
     */
    public function getDataservicesBlocs(): array
    {
        return $this->dataservicesBlocs;
    }
    /**
     * @param list<mixed> $dataservicesBlocs
     *
     * @return self
     */
    public function setDataservicesBlocs(array $dataservicesBlocs): self
    {
        $this->initialized['dataservicesBlocs'] = true;
        $this->dataservicesBlocs = $dataservicesBlocs;
        return $this;
    }
    /**
     * @return list<mixed>
     */
    public function getDatasetsBlocs(): array
    {
        return $this->datasetsBlocs;
    }
    /**
     * @param list<mixed> $datasetsBlocs
     *
     * @return self
     */
    public function setDatasetsBlocs(array $datasetsBlocs): self
    {
        $this->initialized['datasetsBlocs'] = true;
        $this->datasetsBlocs = $datasetsBlocs;
        return $this;
    }
    /**
     * @return int
     */
    public function getFeedSize(): int
    {
        return $this->feedSize;
    }
    /**
     * @param int $feedSize
     *
     * @return self
     */
    public function setFeedSize(int $feedSize): self
    {
        $this->initialized['feedSize'] = true;
        $this->feedSize = $feedSize;
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
     * @return list<string>
     */
    public function getKeywords(): array
    {
        return $this->keywords;
    }
    /**
     * @param list<string> $keywords
     *
     * @return self
     */
    public function setKeywords(array $keywords): self
    {
        $this->initialized['keywords'] = true;
        $this->keywords = $keywords;
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
     * @return list<mixed>
     */
    public function getReusesBlocs(): array
    {
        return $this->reusesBlocs;
    }
    /**
     * @param list<mixed> $reusesBlocs
     *
     * @return self
     */
    public function setReusesBlocs(array $reusesBlocs): self
    {
        $this->initialized['reusesBlocs'] = true;
        $this->reusesBlocs = $reusesBlocs;
        return $this;
    }
    /**
     * The site display title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * The site display title
     *
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
     * The current version of udata
     *
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * The current version of udata
     *
     * @param string|null $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
}