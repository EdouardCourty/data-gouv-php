<?php

namespace Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Model;

class Record extends \ArrayObject
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
     * @var RecordRecord
     */
    protected $record;
    /**
     * @var list<Links>
     */
    protected $links;
    /**
     * @return RecordRecord
     */
    public function getRecord(): RecordRecord
    {
        return $this->record;
    }
    /**
     * @param RecordRecord $record
     *
     * @return self
     */
    public function setRecord(RecordRecord $record): self
    {
        $this->initialized['record'] = true;
        $this->record = $record;
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
}