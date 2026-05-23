<?php

namespace Ecourty\DataGouv\DataServices\Education\Client\Model;

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
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $timestamp;
    /**
     * @var int
     */
    protected $size;
    /**
     * @var RecordFields
     */
    protected $fields;
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
     * @return string
     */
    public function getTimestamp(): string
    {
        return $this->timestamp;
    }
    /**
     * @param string $timestamp
     *
     * @return self
     */
    public function setTimestamp(string $timestamp): self
    {
        $this->initialized['timestamp'] = true;
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }
    /**
     * @param int $size
     *
     * @return self
     */
    public function setSize(int $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
     * @return RecordFields
     */
    public function getFields(): RecordFields
    {
        return $this->fields;
    }
    /**
     * @param RecordFields $fields
     *
     * @return self
     */
    public function setFields(RecordFields $fields): self
    {
        $this->initialized['fields'] = true;
        $this->fields = $fields;
        return $this;
    }
}