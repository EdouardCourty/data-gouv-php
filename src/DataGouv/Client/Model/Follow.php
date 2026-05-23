<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class Follow
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
     * The follower
     *
     * @var mixed
     */
    protected $follower;
    /**
     * The follow object technical ID
     *
     * @var string|null
     */
    protected $id;
    /**
     * The date from which the user started following
     *
     * @var \DateTime|null
     */
    protected $since;
    /**
     * The follower
     *
     * @return mixed
     */
    public function getFollower()
    {
        return $this->follower;
    }
    /**
     * The follower
     *
     * @param mixed $follower
     *
     * @return self
     */
    public function setFollower($follower): self
    {
        $this->initialized['follower'] = true;
        $this->follower = $follower;
        return $this;
    }
    /**
     * The follow object technical ID
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The follow object technical ID
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
     * The date from which the user started following
     *
     * @return \DateTime|null
     */
    public function getSince(): ?\DateTime
    {
        return $this->since;
    }
    /**
     * The date from which the user started following
     *
     * @param \DateTime|null $since
     *
     * @return self
     */
    public function setSince(?\DateTime $since): self
    {
        $this->initialized['since'] = true;
        $this->since = $since;
        return $this;
    }
}