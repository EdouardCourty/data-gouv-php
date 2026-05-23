<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class Follow
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
     * The follower
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
     */
    public function getFollower()
    {
        return $this->follower;
    }

    /**
     * The follower
     */
    public function setFollower($follower): self
    {
        $this->initialized['follower'] = true;
        $this->follower = $follower;

        return $this;
    }

    /**
     * The follow object technical ID
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The follow object technical ID
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The date from which the user started following
     */
    public function getSince(): ?\DateTime
    {
        return $this->since;
    }

    /**
     * The date from which the user started following
     */
    public function setSince(?\DateTime $since): self
    {
        $this->initialized['since'] = true;
        $this->since = $since;

        return $this;
    }
}
