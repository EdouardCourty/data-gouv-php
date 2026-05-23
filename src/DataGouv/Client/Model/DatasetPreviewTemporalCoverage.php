<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DatasetPreviewTemporalCoverage
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
     * The temporal coverage end date
     *
     * @var \DateTime|null
     */
    protected $end;
    /**
     * The temporal coverage start date
     *
     * @var \DateTime
     */
    protected $start;

    /**
     * The temporal coverage end date
     */
    public function getEnd(): ?\DateTime
    {
        return $this->end;
    }

    /**
     * The temporal coverage end date
     */
    public function setEnd(?\DateTime $end): self
    {
        $this->initialized['end'] = true;
        $this->end = $end;

        return $this;
    }

    /**
     * The temporal coverage start date
     */
    public function getStart(): \DateTime
    {
        return $this->start;
    }

    /**
     * The temporal coverage start date
     */
    public function setStart(\DateTime $start): self
    {
        $this->initialized['start'] = true;
        $this->start = $start;

        return $this;
    }
}
