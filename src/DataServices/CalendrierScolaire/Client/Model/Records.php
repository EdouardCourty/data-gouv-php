<?php

namespace Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Model;

class Records extends \ArrayObject
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
     * @var list<mixed>
     */
    protected $records;
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
     * @return list<mixed>
     */
    public function getRecords(): array
    {
        return $this->records;
    }
    /**
     * @param list<mixed> $records
     *
     * @return self
     */
    public function setRecords(array $records): self
    {
        $this->initialized['records'] = true;
        $this->records = $records;
        return $this;
    }
}