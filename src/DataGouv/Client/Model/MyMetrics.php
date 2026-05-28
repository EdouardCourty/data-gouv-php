<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class MyMetrics
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
     * The user's datasets number
     *
     * @var int|null
     */
    protected $datasetsCount;
    /**
     * The user's orgs datasets number
     *
     * @var int|null
     */
    protected $datasetsOrgCount;
    /**
     * The user's followers number
     *
     * @var int|null
     */
    protected $followersCount;
    /**
     * The user's orgs followers number
     *
     * @var int|null
     */
    protected $followersOrgCount;
    /**
     * The user identifier
     *
     * @var string
     */
    protected $id;
    /**
     * The user's resources availability percentage
     *
     * @var float|null
     */
    protected $resourcesAvailability;
    /**
     * The user's datasets number
     *
     * @return int|null
     */
    public function getDatasetsCount(): ?int
    {
        return $this->datasetsCount;
    }
    /**
     * The user's datasets number
     *
     * @param int|null $datasetsCount
     *
     * @return self
     */
    public function setDatasetsCount(?int $datasetsCount): self
    {
        $this->initialized['datasetsCount'] = true;
        $this->datasetsCount = $datasetsCount;
        return $this;
    }
    /**
     * The user's orgs datasets number
     *
     * @return int|null
     */
    public function getDatasetsOrgCount(): ?int
    {
        return $this->datasetsOrgCount;
    }
    /**
     * The user's orgs datasets number
     *
     * @param int|null $datasetsOrgCount
     *
     * @return self
     */
    public function setDatasetsOrgCount(?int $datasetsOrgCount): self
    {
        $this->initialized['datasetsOrgCount'] = true;
        $this->datasetsOrgCount = $datasetsOrgCount;
        return $this;
    }
    /**
     * The user's followers number
     *
     * @return int|null
     */
    public function getFollowersCount(): ?int
    {
        return $this->followersCount;
    }
    /**
     * The user's followers number
     *
     * @param int|null $followersCount
     *
     * @return self
     */
    public function setFollowersCount(?int $followersCount): self
    {
        $this->initialized['followersCount'] = true;
        $this->followersCount = $followersCount;
        return $this;
    }
    /**
     * The user's orgs followers number
     *
     * @return int|null
     */
    public function getFollowersOrgCount(): ?int
    {
        return $this->followersOrgCount;
    }
    /**
     * The user's orgs followers number
     *
     * @param int|null $followersOrgCount
     *
     * @return self
     */
    public function setFollowersOrgCount(?int $followersOrgCount): self
    {
        $this->initialized['followersOrgCount'] = true;
        $this->followersOrgCount = $followersOrgCount;
        return $this;
    }
    /**
     * The user identifier
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The user identifier
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The user's resources availability percentage
     *
     * @return float|null
     */
    public function getResourcesAvailability(): ?float
    {
        return $this->resourcesAvailability;
    }
    /**
     * The user's resources availability percentage
     *
     * @param float|null $resourcesAvailability
     *
     * @return self
     */
    public function setResourcesAvailability(?float $resourcesAvailability): self
    {
        $this->initialized['resourcesAvailability'] = true;
        $this->resourcesAvailability = $resourcesAvailability;
        return $this;
    }
}