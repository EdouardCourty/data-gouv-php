<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class License
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
     * Same alternative known titles (improve rematch)
     *
     * @var list<string>
     */
    protected $alternateTitles;
    /**
     * Same alternative known URLs (improve rematch)
     *
     * @var list<string>
     */
    protected $alternateUrls;
    /**
     * Some arbitry flags
     *
     * @var list<string>
     */
    protected $flags;
    /**
     * The license identifier
     *
     * @var string
     */
    protected $id;
    /**
     * The license official maintainer
     *
     * @var string|null
     */
    protected $maintainer;
    /**
     * The resource title
     *
     * @var string
     */
    protected $title;
    /**
     * The license official URL
     *
     * @var string|null
     */
    protected $url;

    /**
     * Same alternative known titles (improve rematch)
     *
     * @return list<string>
     */
    public function getAlternateTitles(): array
    {
        return $this->alternateTitles;
    }

    /**
     * Same alternative known titles (improve rematch)
     *
     * @param list<string> $alternateTitles
     */
    public function setAlternateTitles(array $alternateTitles): self
    {
        $this->initialized['alternateTitles'] = true;
        $this->alternateTitles = $alternateTitles;

        return $this;
    }

    /**
     * Same alternative known URLs (improve rematch)
     *
     * @return list<string>
     */
    public function getAlternateUrls(): array
    {
        return $this->alternateUrls;
    }

    /**
     * Same alternative known URLs (improve rematch)
     *
     * @param list<string> $alternateUrls
     */
    public function setAlternateUrls(array $alternateUrls): self
    {
        $this->initialized['alternateUrls'] = true;
        $this->alternateUrls = $alternateUrls;

        return $this;
    }

    /**
     * Some arbitry flags
     *
     * @return list<string>
     */
    public function getFlags(): array
    {
        return $this->flags;
    }

    /**
     * Some arbitry flags
     *
     * @param list<string> $flags
     */
    public function setFlags(array $flags): self
    {
        $this->initialized['flags'] = true;
        $this->flags = $flags;

        return $this;
    }

    /**
     * The license identifier
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The license identifier
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The license official maintainer
     */
    public function getMaintainer(): ?string
    {
        return $this->maintainer;
    }

    /**
     * The license official maintainer
     */
    public function setMaintainer(?string $maintainer): self
    {
        $this->initialized['maintainer'] = true;
        $this->maintainer = $maintainer;

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
     * The license official URL
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * The license official URL
     */
    public function setUrl(?string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }
}
