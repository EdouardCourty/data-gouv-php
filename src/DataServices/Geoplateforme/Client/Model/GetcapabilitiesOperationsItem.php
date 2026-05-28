<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model;

class GetcapabilitiesOperationsItem
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
    protected $description;
    /**
     * @var string
     */
    protected $url;
    /**
     * @var list<string>
     */
    protected $methods;
    /**
     * @var list<GetcapabilitiesOperationsItemParametersItem>
     */
    protected $parameters;
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
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getMethods(): array
    {
        return $this->methods;
    }
    /**
     * @param list<string> $methods
     *
     * @return self
     */
    public function setMethods(array $methods): self
    {
        $this->initialized['methods'] = true;
        $this->methods = $methods;
        return $this;
    }
    /**
     * @return list<GetcapabilitiesOperationsItemParametersItem>
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }
    /**
     * @param list<GetcapabilitiesOperationsItemParametersItem> $parameters
     *
     * @return self
     */
    public function setParameters(array $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;
        return $this;
    }
}