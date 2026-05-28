<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model;

class Getcapabilities
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
     * @var GetcapabilitiesInfo
     */
    protected $info;
    /**
     * @var GetcapabilitiesApi
     */
    protected $api;
    /**
     * @var list<GetcapabilitiesOperationsItem>
     */
    protected $operations;
    /**
     * @var list<GetcapabilitiesIndexesItem>
     */
    protected $indexes;
    /**
     * @return GetcapabilitiesInfo
     */
    public function getInfo(): GetcapabilitiesInfo
    {
        return $this->info;
    }
    /**
     * @param GetcapabilitiesInfo $info
     *
     * @return self
     */
    public function setInfo(GetcapabilitiesInfo $info): self
    {
        $this->initialized['info'] = true;
        $this->info = $info;
        return $this;
    }
    /**
     * @return GetcapabilitiesApi
     */
    public function getApi(): GetcapabilitiesApi
    {
        return $this->api;
    }
    /**
     * @param GetcapabilitiesApi $api
     *
     * @return self
     */
    public function setApi(GetcapabilitiesApi $api): self
    {
        $this->initialized['api'] = true;
        $this->api = $api;
        return $this;
    }
    /**
     * @return list<GetcapabilitiesOperationsItem>
     */
    public function getOperations(): array
    {
        return $this->operations;
    }
    /**
     * @param list<GetcapabilitiesOperationsItem> $operations
     *
     * @return self
     */
    public function setOperations(array $operations): self
    {
        $this->initialized['operations'] = true;
        $this->operations = $operations;
        return $this;
    }
    /**
     * @return list<GetcapabilitiesIndexesItem>
     */
    public function getIndexes(): array
    {
        return $this->indexes;
    }
    /**
     * @param list<GetcapabilitiesIndexesItem> $indexes
     *
     * @return self
     */
    public function setIndexes(array $indexes): self
    {
        $this->initialized['indexes'] = true;
        $this->indexes = $indexes;
        return $this;
    }
}