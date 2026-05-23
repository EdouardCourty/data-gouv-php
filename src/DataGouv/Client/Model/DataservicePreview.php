<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DataservicePreview
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
     * The dataservice API URL (fake)
     *
     * @var mixed
     */
    protected $selfApiUrl;
    /**
     * The dataservice webpage URL (fake)
     *
     * @var mixed
     */
    protected $selfWebUrl;
    /**
     * @var string
     */
    protected $title;
    /**
     * The dataservice API URL (fake)
     *
     * @return mixed
     */
    public function getSelfApiUrl()
    {
        return $this->selfApiUrl;
    }
    /**
     * The dataservice API URL (fake)
     *
     * @param mixed $selfApiUrl
     *
     * @return self
     */
    public function setSelfApiUrl($selfApiUrl): self
    {
        $this->initialized['selfApiUrl'] = true;
        $this->selfApiUrl = $selfApiUrl;
        return $this;
    }
    /**
     * The dataservice webpage URL (fake)
     *
     * @return mixed
     */
    public function getSelfWebUrl()
    {
        return $this->selfWebUrl;
    }
    /**
     * The dataservice webpage URL (fake)
     *
     * @param mixed $selfWebUrl
     *
     * @return self
     */
    public function setSelfWebUrl($selfWebUrl): self
    {
        $this->initialized['selfWebUrl'] = true;
        $this->selfWebUrl = $selfWebUrl;
        return $this;
    }
    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
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
}