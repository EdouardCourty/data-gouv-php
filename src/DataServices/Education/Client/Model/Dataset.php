<?php

namespace Ecourty\DataGouv\DataServices\Education\Client\Model;

class Dataset extends \ArrayObject
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
    protected $datasetId;
    /**
     * @var list<DatasetAttachmentsItem>
     */
    protected $attachments;
    /**
     * @var bool
     */
    protected $hasRecords;
    /**
     * @var bool
     */
    protected $dataVisible;
    /**
     * A map of available features for a dataset, with the fields they apply to.
     * 
     *
     * @var list<string>
     */
    protected $features;
    /**
     * @var DatasetMetas
     */
    protected $metas;
    /**
     * @var list<DatasetFieldsItem>
     */
    protected $fields;
    /**
     * @return string
     */
    public function getDatasetId(): string
    {
        return $this->datasetId;
    }
    /**
     * @param string $datasetId
     *
     * @return self
     */
    public function setDatasetId(string $datasetId): self
    {
        $this->initialized['datasetId'] = true;
        $this->datasetId = $datasetId;
        return $this;
    }
    /**
     * @return list<DatasetAttachmentsItem>
     */
    public function getAttachments(): array
    {
        return $this->attachments;
    }
    /**
     * @param list<DatasetAttachmentsItem> $attachments
     *
     * @return self
     */
    public function setAttachments(array $attachments): self
    {
        $this->initialized['attachments'] = true;
        $this->attachments = $attachments;
        return $this;
    }
    /**
     * @return bool
     */
    public function getHasRecords(): bool
    {
        return $this->hasRecords;
    }
    /**
     * @param bool $hasRecords
     *
     * @return self
     */
    public function setHasRecords(bool $hasRecords): self
    {
        $this->initialized['hasRecords'] = true;
        $this->hasRecords = $hasRecords;
        return $this;
    }
    /**
     * @return bool
     */
    public function getDataVisible(): bool
    {
        return $this->dataVisible;
    }
    /**
     * @param bool $dataVisible
     *
     * @return self
     */
    public function setDataVisible(bool $dataVisible): self
    {
        $this->initialized['dataVisible'] = true;
        $this->dataVisible = $dataVisible;
        return $this;
    }
    /**
     * A map of available features for a dataset, with the fields they apply to.
     * 
     *
     * @return list<string>
     */
    public function getFeatures(): array
    {
        return $this->features;
    }
    /**
     * A map of available features for a dataset, with the fields they apply to.
     *
     * @param list<string> $features
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
     * @return DatasetMetas
     */
    public function getMetas(): DatasetMetas
    {
        return $this->metas;
    }
    /**
     * @param DatasetMetas $metas
     *
     * @return self
     */
    public function setMetas(DatasetMetas $metas): self
    {
        $this->initialized['metas'] = true;
        $this->metas = $metas;
        return $this;
    }
    /**
     * @return list<DatasetFieldsItem>
     */
    public function getFields(): array
    {
        return $this->fields;
    }
    /**
     * @param list<DatasetFieldsItem> $fields
     *
     * @return self
     */
    public function setFields(array $fields): self
    {
        $this->initialized['fields'] = true;
        $this->fields = $fields;
        return $this;
    }
}