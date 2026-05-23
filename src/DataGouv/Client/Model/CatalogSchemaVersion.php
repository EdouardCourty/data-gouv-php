<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class CatalogSchemaVersion
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * @var string|null
     */
    protected $schemaUrl;
    /**
     * @var string|null
     */
    protected $versionName;

    public function getSchemaUrl(): ?string
    {
        return $this->schemaUrl;
    }

    public function setSchemaUrl(?string $schemaUrl): self
    {
        $this->initialized['schemaUrl'] = true;
        $this->schemaUrl = $schemaUrl;

        return $this;
    }

    public function getVersionName(): ?string
    {
        return $this->versionName;
    }

    public function setVersionName(?string $versionName): self
    {
        $this->initialized['versionName'] = true;
        $this->versionName = $versionName;

        return $this;
    }
}
