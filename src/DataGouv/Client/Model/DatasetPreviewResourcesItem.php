<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DatasetPreviewResourcesItem
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
     *
     * @var mixed
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
     *
     * @var mixed
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
     * A checksum to validate file validity
     *
     * @return ResourceChecksum
     */
    public function getChecksum(): ResourceChecksum
    {
        return $this->checksum;
    }
    /**
     * A checksum to validate file validity
     *
     * @param ResourceChecksum $checksum
     *
     * @return self
     */
    public function setChecksum(ResourceChecksum $checksum): self
    {
        $this->initialized['checksum'] = true;
        $this->checksum = $checksum;
        return $this;
    }
    /**
     * The resource creation date
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The resource creation date
     *
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * The resource markdown description
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The resource markdown description
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Extra attributes as key-value pairs
     *
     * @return mixed
     */
    public function getExtras()
    {
        return $this->extras;
    }
    /**
     * Extra attributes as key-value pairs
     *
     * @param mixed $extras
     *
     * @return self
     */
    public function setExtras($extras): self
    {
        $this->initialized['extras'] = true;
        $this->extras = $extras;
        return $this;
    }
    /**
     * The resource file size in bytes
     *
     * @return int|null
     */
    public function getFilesize(): ?int
    {
        return $this->filesize;
    }
    /**
     * The resource file size in bytes
     *
     * @param int|null $filesize
     *
     * @return self
     */
    public function setFilesize(?int $filesize): self
    {
        $this->initialized['filesize'] = true;
        $this->filesize = $filesize;
        return $this;
    }
    /**
     * Whether the resource is an uploaded file, a remote file or an API
     *
     * @return string
     */
    public function getFiletype(): string
    {
        return $this->filetype;
    }
    /**
     * Whether the resource is an uploaded file, a remote file or an API
     *
     * @param string $filetype
     *
     * @return self
     */
    public function setFiletype(string $filetype): self
    {
        $this->initialized['filetype'] = true;
        $this->filetype = $filetype;
        return $this;
    }
    /**
     * The resource format
     *
     * @return string
     */
    public function getFormat(): string
    {
        return $this->format;
    }
    /**
     * The resource format
     *
     * @param string $format
     *
     * @return self
     */
    public function setFormat(string $format): self
    {
        $this->initialized['format'] = true;
        $this->format = $format;
        return $this;
    }
    /**
     * Harvest attributes metadata information
     *
     * @return ResourceHarvest
     */
    public function getHarvest(): ResourceHarvest
    {
        return $this->harvest;
    }
    /**
     * Harvest attributes metadata information
     *
     * @param ResourceHarvest $harvest
     *
     * @return self
     */
    public function setHarvest(ResourceHarvest $harvest): self
    {
        $this->initialized['harvest'] = true;
        $this->harvest = $harvest;
        return $this;
    }
    /**
     * The resource unique ID
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The resource unique ID
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Site internal and specific object's data
     *
     * @return ResourceInternal
     */
    public function getInternal(): ResourceInternal
    {
        return $this->internal;
    }
    /**
     * Site internal and specific object's data
     *
     * @param ResourceInternal $internal
     *
     * @return self
     */
    public function setInternal(ResourceInternal $internal): self
    {
        $this->initialized['internal'] = true;
        $this->internal = $internal;
        return $this;
    }
    /**
     * The resource last modification date
     *
     * @return \DateTime|null
     */
    public function getLastModified(): ?\DateTime
    {
        return $this->lastModified;
    }
    /**
     * The resource last modification date
     *
     * @param \DateTime|null $lastModified
     *
     * @return self
     */
    public function setLastModified(?\DateTime $lastModified): self
    {
        $this->initialized['lastModified'] = true;
        $this->lastModified = $lastModified;
        return $this;
    }
    /**
     * The permanent URL redirecting to the latest version of the resource. When the resource data is updated, the URL will change, the latest URL won't.
     *
     * @return string|null
     */
    public function getLatest(): ?string
    {
        return $this->latest;
    }
    /**
     * The permanent URL redirecting to the latest version of the resource. When the resource data is updated, the URL will change, the latest URL won't.
     *
     * @param string|null $latest
     *
     * @return self
     */
    public function setLatest(?string $latest): self
    {
        $this->initialized['latest'] = true;
        $this->latest = $latest;
        return $this;
    }
    /**
     * The resource metrics
     *
     * @return mixed
     */
    public function getMetrics()
    {
        return $this->metrics;
    }
    /**
     * The resource metrics
     *
     * @param mixed $metrics
     *
     * @return self
     */
    public function setMetrics($metrics): self
    {
        $this->initialized['metrics'] = true;
        $this->metrics = $metrics;
        return $this;
    }
    /**
     * The resource mime type
     *
     * @return string|null
     */
    public function getMime(): ?string
    {
        return $this->mime;
    }
    /**
     * The resource mime type
     *
     * @param string|null $mime
     *
     * @return self
     */
    public function setMime(?string $mime): self
    {
        $this->initialized['mime'] = true;
        $this->mime = $mime;
        return $this;
    }
    /**
     * An optional preview URL to be loaded as a standalone page (ie. iframe or new page)
     *
     * @return string|null
     */
    public function getPreviewUrl(): ?string
    {
        return $this->previewUrl;
    }
    /**
     * An optional preview URL to be loaded as a standalone page (ie. iframe or new page)
     *
     * @param string|null $previewUrl
     *
     * @return self
     */
    public function setPreviewUrl(?string $previewUrl): self
    {
        $this->initialized['previewUrl'] = true;
        $this->previewUrl = $previewUrl;
        return $this;
    }
    /**
     * Reference to the associated schema
     *
     * @return ResourceSchema
     */
    public function getSchema(): ResourceSchema
    {
        return $this->schema;
    }
    /**
     * Reference to the associated schema
     *
     * @param ResourceSchema $schema
     *
     * @return self
     */
    public function setSchema(ResourceSchema $schema): self
    {
        $this->initialized['schema'] = true;
        $this->schema = $schema;
        return $this;
    }
    /**
     * The resource title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * The resource title
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * Resource type (documentation, API...)
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Resource type (documentation, API...)
     *
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
     * The resource URL
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * The resource URL
     *
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
}