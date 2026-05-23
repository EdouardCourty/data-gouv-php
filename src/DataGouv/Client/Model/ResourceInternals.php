<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class ResourceInternals
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
     * The resource's internal creation date on the site
     *
     * @var \DateTime
     */
    protected $createdAtInternal;
    /**
     * The resource's internal last modification date
     *
     * @var \DateTime
     */
    protected $lastModifiedInternal;
    /**
     * The resource's internal creation date on the site
     *
     * @return \DateTime
     */
    public function getCreatedAtInternal(): \DateTime
    {
        return $this->createdAtInternal;
    }
    /**
     * The resource's internal creation date on the site
     *
     * @param \DateTime $createdAtInternal
     *
     * @return self
     */
    public function setCreatedAtInternal(\DateTime $createdAtInternal): self
    {
        $this->initialized['createdAtInternal'] = true;
        $this->createdAtInternal = $createdAtInternal;
        return $this;
    }
    /**
     * The resource's internal last modification date
     *
     * @return \DateTime
     */
    public function getLastModifiedInternal(): \DateTime
    {
        return $this->lastModifiedInternal;
    }
    /**
     * The resource's internal last modification date
     *
     * @param \DateTime $lastModifiedInternal
     *
     * @return self
     */
    public function setLastModifiedInternal(\DateTime $lastModifiedInternal): self
    {
        $this->initialized['lastModifiedInternal'] = true;
        $this->lastModifiedInternal = $lastModifiedInternal;
        return $this;
    }
}