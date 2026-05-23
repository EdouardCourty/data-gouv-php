<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class HarvestItemPreviewDataservice
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
     * The dataservice API URL (fake)
     */
    protected $selfApiUrl;
    /**
     * The dataservice webpage URL (fake)
     */
    protected $selfWebUrl;
    /**
     * @var string
     */
    protected $title;

    /**
     * The dataservice API URL (fake)
     */
    public function getSelfApiUrl()
    {
        return $this->selfApiUrl;
    }

    /**
     * The dataservice API URL (fake)
     */
    public function setSelfApiUrl($selfApiUrl): self
    {
        $this->initialized['selfApiUrl'] = true;
        $this->selfApiUrl = $selfApiUrl;

        return $this;
    }

    /**
     * The dataservice webpage URL (fake)
     */
    public function getSelfWebUrl()
    {
        return $this->selfWebUrl;
    }

    /**
     * The dataservice webpage URL (fake)
     */
    public function setSelfWebUrl($selfWebUrl): self
    {
        $this->initialized['selfWebUrl'] = true;
        $this->selfWebUrl = $selfWebUrl;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }
}
