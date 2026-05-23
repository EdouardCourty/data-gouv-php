<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model;

class GetcapabilitiesOperationsItemParametersItemSchema
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
    protected $type;
    /**
     * @var string
     */
    protected $example;
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return string
     */
    public function getExample(): string
    {
        return $this->example;
    }
    /**
     * @param string $example
     *
     * @return self
     */
    public function setExample(string $example): self
    {
        $this->initialized['example'] = true;
        $this->example = $example;
        return $this;
    }
}