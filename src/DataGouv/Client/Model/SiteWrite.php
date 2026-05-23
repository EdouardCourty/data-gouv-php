<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class SiteWrite
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
     * @var list<string>
     */
    protected $keywords;
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
     * @return list<mixed>
     */
    public function getDataservicesBlocs(): array
    {
        return $this->dataservicesBlocs;
    }

    /**
     * @param list<mixed> $dataservicesBlocs
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
     */
    public function setDatasetsBlocs(array $datasetsBlocs): self
    {
        $this->initialized['datasetsBlocs'] = true;
        $this->datasetsBlocs = $datasetsBlocs;

        return $this;
    }

    public function getFeedSize(): int
    {
        return $this->feedSize;
    }

    public function setFeedSize(int $feedSize): self
    {
        $this->initialized['feedSize'] = true;
        $this->feedSize = $feedSize;

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
     */
    public function setKeywords(array $keywords): self
    {
        $this->initialized['keywords'] = true;
        $this->keywords = $keywords;

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
     */
    public function setReusesBlocs(array $reusesBlocs): self
    {
        $this->initialized['reusesBlocs'] = true;
        $this->reusesBlocs = $reusesBlocs;

        return $this;
    }

    /**
     * The site display title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * The site display title
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }
}
