<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class HarvestSourceValidation
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
     * Who performed the validation
     *
     * @var mixed
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
     *
     * @return mixed
     */
    public function getBy()
    {
        return $this->by;
    }
    /**
     * Who performed the validation
     *
     * @param mixed $by
     *
     * @return self
     */
    public function setBy($by): self
    {
        $this->initialized['by'] = true;
        $this->by = $by;
        return $this;
    }
    /**
     * A comment about the validation. Required on rejection
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * A comment about the validation. Required on rejection
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    /**
     * Date date on which validation was performed
     *
     * @return \DateTime|null
     */
    public function getOn(): ?\DateTime
    {
        return $this->on;
    }
    /**
     * Date date on which validation was performed
     *
     * @param \DateTime|null $on
     *
     * @return self
     */
    public function setOn(?\DateTime $on): self
    {
        $this->initialized['on'] = true;
        $this->on = $on;
        return $this;
    }
    /**
     * Is it validated or not
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * Is it validated or not
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
}