<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class CatalogSchema
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
    protected $consolidationDatasetId;
    /**
     * @var string|null
     */
    protected $contact;
    /**
     * Only present if the schema is inside a datapackage
     *
     * @var string|null
     */
    protected $datapackageDescription;
    /**
     * Only present if the schema is inside a datapackage
     *
     * @var string|null
     */
    protected $datapackageName;
    /**
     * Only present if the schema is inside a datapackage
     *
     * @var string|null
     */
    protected $datapackageTitle;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var list<CatalogSchemaExample>
     */
    protected $examples;
    /**
     * @var string|null
     */
    protected $externalDoc;
    /**
     * Link to tools to create a file with this schema
     *
     * @var string|null
     */
    protected $externalTool;
    /**
     * @var string|null
     */
    protected $homepage;
    /**
     * @var list<string>
     */
    protected $labels;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $schemaType;
    /**
     * Often the link to the latest version
     *
     * @var string|null
     */
    protected $schemaUrl;
    /**
     * @var string|null
     */
    protected $title;
    /**
     * @var list<CatalogSchemaVersion>
     */
    protected $versions;

    public function getConsolidationDatasetId(): ?string
    {
        return $this->consolidationDatasetId;
    }

    public function setConsolidationDatasetId(?string $consolidationDatasetId): self
    {
        $this->initialized['consolidationDatasetId'] = true;
        $this->consolidationDatasetId = $consolidationDatasetId;

        return $this;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(?string $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;

        return $this;
    }

    /**
     * Only present if the schema is inside a datapackage
     */
    public function getDatapackageDescription(): ?string
    {
        return $this->datapackageDescription;
    }

    /**
     * Only present if the schema is inside a datapackage
     */
    public function setDatapackageDescription(?string $datapackageDescription): self
    {
        $this->initialized['datapackageDescription'] = true;
        $this->datapackageDescription = $datapackageDescription;

        return $this;
    }

    /**
     * Only present if the schema is inside a datapackage
     */
    public function getDatapackageName(): ?string
    {
        return $this->datapackageName;
    }

    /**
     * Only present if the schema is inside a datapackage
     */
    public function setDatapackageName(?string $datapackageName): self
    {
        $this->initialized['datapackageName'] = true;
        $this->datapackageName = $datapackageName;

        return $this;
    }

    /**
     * Only present if the schema is inside a datapackage
     */
    public function getDatapackageTitle(): ?string
    {
        return $this->datapackageTitle;
    }

    /**
     * Only present if the schema is inside a datapackage
     */
    public function setDatapackageTitle(?string $datapackageTitle): self
    {
        $this->initialized['datapackageTitle'] = true;
        $this->datapackageTitle = $datapackageTitle;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * @return list<CatalogSchemaExample>
     */
    public function getExamples(): array
    {
        return $this->examples;
    }

    /**
     * @param list<CatalogSchemaExample> $examples
     */
    public function setExamples(array $examples): self
    {
        $this->initialized['examples'] = true;
        $this->examples = $examples;

        return $this;
    }

    public function getExternalDoc(): ?string
    {
        return $this->externalDoc;
    }

    public function setExternalDoc(?string $externalDoc): self
    {
        $this->initialized['externalDoc'] = true;
        $this->externalDoc = $externalDoc;

        return $this;
    }

    /**
     * Link to tools to create a file with this schema
     */
    public function getExternalTool(): ?string
    {
        return $this->externalTool;
    }

    /**
     * Link to tools to create a file with this schema
     */
    public function setExternalTool(?string $externalTool): self
    {
        $this->initialized['externalTool'] = true;
        $this->externalTool = $externalTool;

        return $this;
    }

    public function getHomepage(): ?string
    {
        return $this->homepage;
    }

    public function setHomepage(?string $homepage): self
    {
        $this->initialized['homepage'] = true;
        $this->homepage = $homepage;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getLabels(): array
    {
        return $this->labels;
    }

    /**
     * @param list<string> $labels
     */
    public function setLabels(array $labels): self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getSchemaType(): ?string
    {
        return $this->schemaType;
    }

    public function setSchemaType(?string $schemaType): self
    {
        $this->initialized['schemaType'] = true;
        $this->schemaType = $schemaType;

        return $this;
    }

    /**
     * Often the link to the latest version
     */
    public function getSchemaUrl(): ?string
    {
        return $this->schemaUrl;
    }

    /**
     * Often the link to the latest version
     */
    public function setSchemaUrl(?string $schemaUrl): self
    {
        $this->initialized['schemaUrl'] = true;
        $this->schemaUrl = $schemaUrl;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    /**
     * @return list<CatalogSchemaVersion>
     */
    public function getVersions(): array
    {
        return $this->versions;
    }

    /**
     * @param list<CatalogSchemaVersion> $versions
     */
    public function setVersions(array $versions): self
    {
        $this->initialized['versions'] = true;
        $this->versions = $versions;

        return $this;
    }
}
