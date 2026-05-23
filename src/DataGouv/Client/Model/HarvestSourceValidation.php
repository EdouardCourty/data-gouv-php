<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class HarvestSourceValidation
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
     * Who performed the validation
     */
    protected $by;
    /**
     * A comment about the validation. Required on rejection
     *
     * @var string|null
     */
    protected $comment;
    /**
     * Date date on which validation was performed
     *
     * @var \DateTime|null
     */
    protected $on;
    /**
     * Is it validated or not
     *
     * @var string
     */
    protected $state;

    /**
     * Who performed the validation
     */
    public function getBy()
    {
        return $this->by;
    }

    /**
     * Who performed the validation
     */
    public function setBy($by): self
    {
        $this->initialized['by'] = true;
        $this->by = $by;

        return $this;
    }

    /**
     * A comment about the validation. Required on rejection
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * A comment about the validation. Required on rejection
     */
    public function setComment(?string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;

        return $this;
    }

    /**
     * Date date on which validation was performed
     */
    public function getOn(): ?\DateTime
    {
        return $this->on;
    }

    /**
     * Date date on which validation was performed
     */
    public function setOn(?\DateTime $on): self
    {
        $this->initialized['on'] = true;
        $this->on = $on;

        return $this;
    }

    /**
     * Is it validated or not
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * Is it validated or not
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

        return $this;
    }
}
