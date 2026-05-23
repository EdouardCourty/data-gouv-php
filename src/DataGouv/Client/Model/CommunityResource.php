<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class CommunityResource
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
     * A checksum to validate file validity
     *
     * @var ResourceChecksum
     */
    protected $checksum;
    /**
     * The resource creation date
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The resource markdown description
     *
     * @var string|null
     */
    protected $description;
    /**
     * Extra attributes as key-value pairs
     */
    protected $extras;
    /**
     * The resource file size in bytes
     *
     * @var int|null
     */
    protected $filesize;
    /**
     * Whether the resource is an uploaded file, a remote file or an API
     *
     * @var string
     */
    protected $filetype;
    /**
     * The resource format
     *
     * @var string
     */
    protected $format;
    /**
     * Harvest attributes metadata information
     *
     * @var ResourceHarvest
     */
    protected $harvest;
    /**
     * The resource unique ID
     *
     * @var string|null
     */
    protected $id;
    /**
     * Site internal and specific object's data
     *
     * @var ResourceInternal
     */
    protected $internal;
    /**
     * The resource last modification date
     *
     * @var \DateTime|null
     */
    protected $lastModified;
    /**
     * The permanent URL redirecting to the latest version of the resource. When the resource data is updated, the URL will change, the latest URL won't.
     *
     * @var string|null
     */
    protected $latest;
    /**
     * The resource metrics
     */
    protected $metrics;
    /**
     * The resource mime type
     *
     * @var string|null
     */
    protected $mime;
    /**
     * An optional preview URL to be loaded as a standalone page (ie. iframe or new page)
     *
     * @var string|null
     */
    protected $previewUrl;
    /**
     * Reference to the associated schema
     *
     * @var ResourceSchema
     */
    protected $schema;
    /**
     * The resource title
     *
     * @var string
     */
    protected $title;
    /**
     * Resource type (documentation, API...)
     *
     * @var string
     */
    protected $type;
    /**
     * The resource URL
     *
     * @var string
     */
    protected $url;
    /**
     * Reference to the associated dataset
     */
    protected $dataset;
    /**
     * The producer organization
     */
    protected $organization;
    /**
     * The user information
     */
    protected $owner;
    /**
     * @var DatasetPermissions
     */
    protected $permissions;

    /**
     * A checksum to validate file validity
     */
    public function getChecksum(): ResourceChecksum
    {
        return $this->checksum;
    }

    /**
     * A checksum to validate file validity
     */
    public function setChecksum(ResourceChecksum $checksum): self
    {
        $this->initialized['checksum'] = true;
        $this->checksum = $checksum;

        return $this;
    }

    /**
     * The resource creation date
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * The resource creation date
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * The resource markdown description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * The resource markdown description
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * Extra attributes as key-value pairs
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * Extra attributes as key-value pairs
     */
    public function setExtras($extras): self
    {
        $this->initialized['extras'] = true;
        $this->extras = $extras;

        return $this;
    }

    /**
     * The resource file size in bytes
     */
    public function getFilesize(): ?int
    {
        return $this->filesize;
    }

    /**
     * The resource file size in bytes
     */
    public function setFilesize(?int $filesize): self
    {
        $this->initialized['filesize'] = true;
        $this->filesize = $filesize;

        return $this;
    }

    /**
     * Whether the resource is an uploaded file, a remote file or an API
     */
    public function getFiletype(): string
    {
        return $this->filetype;
    }

    /**
     * Whether the resource is an uploaded file, a remote file or an API
     */
    public function setFiletype(string $filetype): self
    {
        $this->initialized['filetype'] = true;
        $this->filetype = $filetype;

        return $this;
    }

    /**
     * The resource format
     */
    public function getFormat(): string
    {
        return $this->format;
    }

    /**
     * The resource format
     */
    public function setFormat(string $format): self
    {
        $this->initialized['format'] = true;
        $this->format = $format;

        return $this;
    }

    /**
     * Harvest attributes metadata information
     */
    public function getHarvest(): ResourceHarvest
    {
        return $this->harvest;
    }

    /**
     * Harvest attributes metadata information
     */
    public function setHarvest(ResourceHarvest $harvest): self
    {
        $this->initialized['harvest'] = true;
        $this->harvest = $harvest;

        return $this;
    }

    /**
     * The resource unique ID
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The resource unique ID
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Site internal and specific object's data
     */
    public function getInternal(): ResourceInternal
    {
        return $this->internal;
    }

    /**
     * Site internal and specific object's data
     */
    public function setInternal(ResourceInternal $internal): self
    {
        $this->initialized['internal'] = true;
        $this->internal = $internal;

        return $this;
    }

    /**
     * The resource last modification date
     */
    public function getLastModified(): ?\DateTime
    {
        return $this->lastModified;
    }

    /**
     * The resource last modification date
     */
    public function setLastModified(?\DateTime $lastModified): self
    {
        $this->initialized['lastModified'] = true;
        $this->lastModified = $lastModified;

        return $this;
    }

    /**
     * The permanent URL redirecting to the latest version of the resource. When the resource data is updated, the URL will change, the latest URL won't.
     */
    public function getLatest(): ?string
    {
        return $this->latest;
    }

    /**
     * The permanent URL redirecting to the latest version of the resource. When the resource data is updated, the URL will change, the latest URL won't.
     */
    public function setLatest(?string $latest): self
    {
        $this->initialized['latest'] = true;
        $this->latest = $latest;

        return $this;
    }

    /**
     * The resource metrics
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * The resource metrics
     */
    public function setMetrics($metrics): self
    {
        $this->initialized['metrics'] = true;
        $this->metrics = $metrics;

        return $this;
    }

    /**
     * The resource mime type
     */
    public function getMime(): ?string
    {
        return $this->mime;
    }

    /**
     * The resource mime type
     */
    public function setMime(?string $mime): self
    {
        $this->initialized['mime'] = true;
        $this->mime = $mime;

        return $this;
    }

    /**
     * An optional preview URL to be loaded as a standalone page (ie. iframe or new page)
     */
    public function getPreviewUrl(): ?string
    {
        return $this->previewUrl;
    }

    /**
     * An optional preview URL to be loaded as a standalone page (ie. iframe or new page)
     */
    public function setPreviewUrl(?string $previewUrl): self
    {
        $this->initialized['previewUrl'] = true;
        $this->previewUrl = $previewUrl;

        return $this;
    }

    /**
     * Reference to the associated schema
     */
    public function getSchema(): ResourceSchema
    {
        return $this->schema;
    }

    /**
     * Reference to the associated schema
     */
    public function setSchema(ResourceSchema $schema): self
    {
        $this->initialized['schema'] = true;
        $this->schema = $schema;

        return $this;
    }

    /**
     * The resource title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * The resource title
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    /**
     * Resource type (documentation, API...)
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Resource type (documentation, API...)
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * The resource URL
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * The resource URL
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    /**
     * Reference to the associated dataset
     */
    public function getDataset()
    {
        return $this->dataset;
    }

    /**
     * Reference to the associated dataset
     */
    public function setDataset($dataset): self
    {
        $this->initialized['dataset'] = true;
        $this->dataset = $dataset;

        return $this;
    }

    /**
     * The producer organization
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * The producer organization
     */
    public function setOrganization($organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }

    /**
     * The user information
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * The user information
     */
    public function setOwner($owner): self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;

        return $this;
    }

    public function getPermissions(): DatasetPermissions
    {
        return $this->permissions;
    }

    public function setPermissions(DatasetPermissions $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;

        return $this;
    }
}
