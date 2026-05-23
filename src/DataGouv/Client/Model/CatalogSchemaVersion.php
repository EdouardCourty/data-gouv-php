<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class CatalogSchemaVersion
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
    protected $schemaUrl;
    /**
     * @var string|null
     */
    protected $versionName;
    /**
     * @return string|null
     */
    public function getSchemaUrl(): ?string
    {
        return $this->schemaUrl;
    }
    /**
     * @param string|null $schemaUrl
     *
     * @return self
     */
    public function setSchemaUrl(?string $schemaUrl): self
    {
        $this->initialized['schemaUrl'] = true;
        $this->schemaUrl = $schemaUrl;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getVersionName(): ?string
    {
        return $this->versionName;
    }
    /**
     * @param string|null $versionName
     *
     * @return self
     */
    public function setVersionName(?string $versionName): self
    {
        $this->initialized['versionName'] = true;
        $this->versionName = $versionName;
        return $this;
    }
}