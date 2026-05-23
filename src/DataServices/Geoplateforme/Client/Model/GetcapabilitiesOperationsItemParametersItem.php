<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model;

class GetcapabilitiesOperationsItemParametersItem
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
    protected $name;
    /**
     * @var string
     */
    protected $in;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var bool
     */
    protected $required;
    /**
     * default value
     *
     * @var mixed
     */
    protected $default;
    /**
     * @var GetcapabilitiesOperationsItemParametersItemSchema
     */
    protected $schema;
    /**
     * @var string
     */
    protected $example;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getIn(): string
    {
        return $this->in;
    }
    /**
     * @param string $in
     *
     * @return self
     */
    public function setIn(string $in): self
    {
        $this->initialized['in'] = true;
        $this->in = $in;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return bool
     */
    public function getRequired(): bool
    {
        return $this->required;
    }
    /**
     * @param bool $required
     *
     * @return self
     */
    public function setRequired(bool $required): self
    {
        $this->initialized['required'] = true;
        $this->required = $required;
        return $this;
    }
    /**
     * default value
     *
     * @return mixed
     */
    public function getDefault()
    {
        return $this->default;
    }
    /**
     * default value
     *
     * @param mixed $default
     *
     * @return self
     */
    public function setDefault($default): self
    {
        $this->initialized['default'] = true;
        $this->default = $default;
        return $this;
    }
    /**
     * @return GetcapabilitiesOperationsItemParametersItemSchema
     */
    public function getSchema(): GetcapabilitiesOperationsItemParametersItemSchema
    {
        return $this->schema;
    }
    /**
     * @param GetcapabilitiesOperationsItemParametersItemSchema $schema
     *
     * @return self
     */
    public function setSchema(GetcapabilitiesOperationsItemParametersItemSchema $schema): self
    {
        $this->initialized['schema'] = true;
        $this->schema = $schema;
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