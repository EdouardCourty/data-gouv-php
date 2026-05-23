<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class PostWrite
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
     * @var list<string>
     */
    protected $datasets;
    /**
     * @var string|null
     */
    protected $headline;
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
     * @var string
     */
    protected $name;
    /**
     * The post reuses
     *
     * @var list<string>
     */
    protected $reuses;
    /**
     * Some keywords to help in search
     *
     * @var list<string>
     */
    protected $tags;
    /**
     * @return list<mixed>
     */
    public function getBlocs(): array
    {
        return $this->blocs;
    }
    /**
     * @param list<mixed> $blocs
     *
     * @return self
     */
    public function setBlocs(array $blocs): self
    {
        $this->initialized['blocs'] = true;
        $this->blocs = $blocs;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getBodyType(): ?string
    {
        return $this->bodyType;
    }
    /**
     * @param string|null $bodyType
     *
     * @return self
     */
    public function setBodyType(?string $bodyType): self
    {
        $this->initialized['bodyType'] = true;
        $this->bodyType = $bodyType;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }
    /**
     * @param string|null $content
     *
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
    /**
     * An optional credit line (associated to the image)
     *
     * @return string|null
     */
    public function getCreditTo(): ?string
    {
        return $this->creditTo;
    }
    /**
     * An optional credit line (associated to the image)
     *
     * @param string|null $creditTo
     *
     * @return self
     */
    public function setCreditTo(?string $creditTo): self
    {
        $this->initialized['creditTo'] = true;
        $this->creditTo = $creditTo;
        return $this;
    }
    /**
     * An optional link associated to the credits
     *
     * @return string|null
     */
    public function getCreditUrl(): ?string
    {
        return $this->creditUrl;
    }
    /**
     * An optional link associated to the credits
     *
     * @param string|null $creditUrl
     *
     * @return self
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
     * @return list<string>
     */
    public function getDatasets(): array
    {
        return $this->datasets;
    }
    /**
     * The post datasets
     *
     * @param list<string> $datasets
     *
     * @return self
     */
    public function setDatasets(array $datasets): self
    {
        $this->initialized['datasets'] = true;
        $this->datasets = $datasets;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getHeadline(): ?string
    {
        return $this->headline;
    }
    /**
     * @param string|null $headline
     *
     * @return self
     */
    public function setHeadline(?string $headline): self
    {
        $this->initialized['headline'] = true;
        $this->headline = $headline;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }
    /**
     * @param string|null $imageUrl
     *
     * @return self
     */
    public function setImageUrl(?string $imageUrl): self
    {
        $this->initialized['imageUrl'] = true;
        $this->imageUrl = $imageUrl;
        return $this;
    }
    /**
     * Post kind (news or page)
     *
     * @return string|null
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }
    /**
     * Post kind (news or page)
     *
     * @param string|null $kind
     *
     * @return self
     */
    public function setKind(?string $kind): self
    {
        $this->initialized['kind'] = true;
        $this->kind = $kind;
        return $this;
    }
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
     * The post reuses
     *
     * @return list<string>
     */
    public function getReuses(): array
    {
        return $this->reuses;
    }
    /**
     * The post reuses
     *
     * @param list<string> $reuses
     *
     * @return self
     */
    public function setReuses(array $reuses): self
    {
        $this->initialized['reuses'] = true;
        $this->reuses = $reuses;
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
     *
     * @return self
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
}