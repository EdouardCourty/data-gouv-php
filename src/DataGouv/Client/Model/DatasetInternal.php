<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DatasetInternal
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
     * The dataset's internal creation date on the site
     *
     * @var \DateTime
     */
    protected $createdAtInternal;
    /**
     * The dataset's internal last modification date
     *
     * @var \DateTime
     */
    protected $lastModifiedInternal;

    /**
     * The dataset's internal creation date on the site
     */
    public function getCreatedAtInternal(): \DateTime
    {
        return $this->createdAtInternal;
    }

    /**
     * The dataset's internal creation date on the site
     */
    public function setCreatedAtInternal(\DateTime $createdAtInternal): self
    {
        $this->initialized['createdAtInternal'] = true;
        $this->createdAtInternal = $createdAtInternal;

        return $this;
    }

    /**
     * The dataset's internal last modification date
     */
    public function getLastModifiedInternal(): \DateTime
    {
        return $this->lastModifiedInternal;
    }

    /**
     * The dataset's internal last modification date
     */
    public function setLastModifiedInternal(\DateTime $lastModifiedInternal): self
    {
        $this->initialized['lastModifiedInternal'] = true;
        $this->lastModifiedInternal = $lastModifiedInternal;

        return $this;
    }
}
