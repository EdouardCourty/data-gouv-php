<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class PostRead
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
     * @var list<mixed>
     */
    protected $blocs;
    /**
     * @var string|null
     */
    protected $bodyType;
    /**
     * @var string|null
     */
    protected $content;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * An optional credit line (associated to the image)
     *
     * @var string|null
     */
    protected $creditTo;
    /**
     * An optional link associated to the credits
     *
     * @var string|null
     */
    protected $creditUrl;
    /**
     * The post datasets
     *
     * @var list<PostReadDatasetsItem>
     */
    protected $datasets;
    /**
     * @var string|null
     */
    protected $headline;
    /**
     * @var string
     */
    protected $id;
    /**
     * URL of the image
     *
     * @var string|null
     */
    protected $image;
    /**
     * URL of the cropped and squared image (100x100)
     *
     * @var string|null
     */
    protected $imageThumbnail;
    /**
     * @var string|null
     */
    protected $imageUrl;
    /**
     * Post kind (news or page)
     *
     * @var string|null
     */
    protected $kind;
    /**
     * @var \DateTime
     */
    protected $lastModified;
    /**
     * @var string
     */
    protected $name;
    /**
     * The owner user
     */
    protected $owner;
    /**
     * The post web page URL
     *
     * @var string|null
     */
    protected $page;
    /**
     * The post publication date
     *
     * @var \DateTime|null
     */
    protected $published;
    /**
     * The post reuses
     *
     * @var list<mixed>
     */
    protected $reuses;
    /**
     * @var string
     */
    protected $slug;
    /**
     * Some keywords to help in search
     *
     * @var list<string>
     */
    protected $tags;
    /**
     * The API URI for this post
     *
     * @var string|null
     */
    protected $uri;

    /**
     * @return list<mixed>
     */
    public function getBlocs(): array
    {
        return $this->blocs;
    }

    /**
     * @param list<mixed> $blocs
     */
    public function setBlocs(array $blocs): self
    {
        $this->initialized['blocs'] = true;
        $this->blocs = $blocs;

        return $this;
    }

    public function getBodyType(): ?string
    {
        return $this->bodyType;
    }

    public function setBodyType(?string $bodyType): self
    {
        $this->initialized['bodyType'] = true;
        $this->bodyType = $bodyType;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;

        return $this;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * An optional credit line (associated to the image)
     */
    public function getCreditTo(): ?string
    {
        return $this->creditTo;
    }

    /**
     * An optional credit line (associated to the image)
     */
    public function setCreditTo(?string $creditTo): self
    {
        $this->initialized['creditTo'] = true;
        $this->creditTo = $creditTo;

        return $this;
    }

    /**
     * An optional link associated to the credits
     */
    public function getCreditUrl(): ?string
    {
        return $this->creditUrl;
    }

    /**
     * An optional link associated to the credits
     */
    public function setCreditUrl(?string $creditUrl): self
    {
        $this->initialized['creditUrl'] = true;
        $this->creditUrl = $creditUrl;

        return $this;
    }

    /**
     * The post datasets
     *
     * @return list<PostReadDatasetsItem>
     */
    public function getDatasets(): array
    {
        return $this->datasets;
    }

    /**
     * The post datasets
     *
     * @param list<PostReadDatasetsItem> $datasets
     */
    public function setDatasets(array $datasets): self
    {
        $this->initialized['datasets'] = true;
        $this->datasets = $datasets;

        return $this;
    }

    public function getHeadline(): ?string
    {
        return $this->headline;
    }

    public function setHeadline(?string $headline): self
    {
        $this->initialized['headline'] = true;
        $this->headline = $headline;

        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * URL of the image
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * URL of the image
     */
    public function setImage(?string $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;

        return $this;
    }

    /**
     * URL of the cropped and squared image (100x100)
     */
    public function getImageThumbnail(): ?string
    {
        return $this->imageThumbnail;
    }

    /**
     * URL of the cropped and squared image (100x100)
     */
    public function setImageThumbnail(?string $imageThumbnail): self
    {
        $this->initialized['imageThumbnail'] = true;
        $this->imageThumbnail = $imageThumbnail;

        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(?string $imageUrl): self
    {
        $this->initialized['imageUrl'] = true;
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * Post kind (news or page)
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * Post kind (news or page)
     */
    public function setKind(?string $kind): self
    {
        $this->initialized['kind'] = true;
        $this->kind = $kind;

        return $this;
    }

    public function getLastModified(): \DateTime
    {
        return $this->lastModified;
    }

    public function setLastModified(\DateTime $lastModified): self
    {
        $this->initialized['lastModified'] = true;
        $this->lastModified = $lastModified;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * The owner user
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * The owner user
     */
    public function setOwner($owner): self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;

        return $this;
    }

    /**
     * The post web page URL
     */
    public function getPage(): ?string
    {
        return $this->page;
    }

    /**
     * The post web page URL
     */
    public function setPage(?string $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;

        return $this;
    }

    /**
     * The post publication date
     */
    public function getPublished(): ?\DateTime
    {
        return $this->published;
    }

    /**
     * The post publication date
     */
    public function setPublished(?\DateTime $published): self
    {
        $this->initialized['published'] = true;
        $this->published = $published;

        return $this;
    }

    /**
     * The post reuses
     *
     * @return list<mixed>
     */
    public function getReuses(): array
    {
        return $this->reuses;
    }

    /**
     * The post reuses
     *
     * @param list<mixed> $reuses
     */
    public function setReuses(array $reuses): self
    {
        $this->initialized['reuses'] = true;
        $this->reuses = $reuses;

        return $this;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;

        return $this;
    }

    /**
     * Some keywords to help in search
     *
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * Some keywords to help in search
     *
     * @param list<string> $tags
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;

        return $this;
    }

    /**
     * The API URI for this post
     */
    public function getUri(): ?string
    {
        return $this->uri;
    }

    /**
     * The API URI for this post
     */
    public function setUri(?string $uri): self
    {
        $this->initialized['uri'] = true;
        $this->uri = $uri;

        return $this;
    }
}
