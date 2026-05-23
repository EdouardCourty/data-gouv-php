<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DatasetSchema
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
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $url;
    /**
     * @var string|null
     */
    protected $version;
    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }
    /**
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * @param string|null $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
}