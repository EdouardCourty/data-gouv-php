<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class OrganizationWrite
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
    protected $acronym;
    /**
     * @var string|null
     */
    protected $businessNumberId;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var mixed
     */
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
    /**
     * @return string|null
     */
    public function getAcronym(): ?string
    {
        return $this->acronym;
    }
    /**
     * @param string|null $acronym
     *
     * @return self
     */
    public function setAcronym(?string $acronym): self
    {
        $this->initialized['acronym'] = true;
        $this->acronym = $acronym;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getBusinessNumberId(): ?string
    {
        return $this->businessNumberId;
    }
    /**
     * @param string|null $businessNumberId
     *
     * @return self
     */
    public function setBusinessNumberId(?string $businessNumberId): self
    {
        $this->initialized['businessNumberId'] = true;
        $this->businessNumberId = $businessNumberId;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getExtras()
    {
        return $this->extras;
    }
    /**
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
     * URL of the image
     *
     * @return string|null
     */
    public function getLogo(): ?string
    {
        return $this->logo;
    }
    /**
     * URL of the image
     *
     * @param string|null $logo
     *
     * @return self
     */
    public function setLogo(?string $logo): self
    {
        $this->initialized['logo'] = true;
        $this->logo = $logo;
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
}