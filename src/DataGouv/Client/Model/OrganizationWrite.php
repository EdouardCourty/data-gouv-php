<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class OrganizationWrite
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
    protected $acronym;
    /**
     * @var string|null
     */
    protected $businessNumberId;
    /**
     * @var string
     */
    protected $description;
    protected $extras;
    /**
     * @var string|null
     */
    protected $imageUrl;
    /**
     * URL of the image
     *
     * @var string|null
     */
    protected $logo;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $url;

    public function getAcronym(): ?string
    {
        return $this->acronym;
    }

    public function setAcronym(?string $acronym): self
    {
        $this->initialized['acronym'] = true;
        $this->acronym = $acronym;

        return $this;
    }

    public function getBusinessNumberId(): ?string
    {
        return $this->businessNumberId;
    }

    public function setBusinessNumberId(?string $businessNumberId): self
    {
        $this->initialized['businessNumberId'] = true;
        $this->businessNumberId = $businessNumberId;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getExtras()
    {
        return $this->extras;
    }

    public function setExtras($extras): self
    {
        $this->initialized['extras'] = true;
        $this->extras = $extras;

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
     * URL of the image
     */
    public function getLogo(): ?string
    {
        return $this->logo;
    }

    /**
     * URL of the image
     */
    public function setLogo(?string $logo): self
    {
        $this->initialized['logo'] = true;
        $this->logo = $logo;

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

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }
}
