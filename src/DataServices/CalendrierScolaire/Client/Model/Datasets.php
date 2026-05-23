<?php

namespace Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Model;

class Datasets extends \ArrayObject
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
     * @var int
     */
    protected $totalCount;
    /**
     * @var list<Links>
     */
    protected $links;
    /**
     * @var list<Dataset>
     */
    protected $datasets;
    /**
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
    /**
     * @return list<Links>
     */
    public function getLinks(): array
    {
        return $this->links;
    }
    /**
     * @param list<Links> $links
     *
     * @return self
     */
    public function setLinks(array $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
    /**
     * @return list<Dataset>
     */
    public function getDatasets(): array
    {
        return $this->datasets;
    }
    /**
     * @param list<Dataset> $datasets
     *
     * @return self
     */
    public function setDatasets(array $datasets): self
    {
        $this->initialized['datasets'] = true;
        $this->datasets = $datasets;
        return $this;
    }
}