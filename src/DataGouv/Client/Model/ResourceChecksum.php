<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class ResourceChecksum
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
     * The hashing algorithm used to compute the checksum
     *
     * @var string|null
     */
    protected $type = 'sha1';
    /**
     * The resulting checksum/hash
     *
     * @var string
     */
    protected $value;
    /**
     * The hashing algorithm used to compute the checksum
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * The hashing algorithm used to compute the checksum
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The resulting checksum/hash
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * The resulting checksum/hash
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}