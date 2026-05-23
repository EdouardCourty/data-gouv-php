<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DiscussionResponse
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
     * Is this a closing response. Only subject owner can close
     *
     * @var bool|null
     */
    protected $close;
    /**
     * The comment to submit
     *
     * @var string
     */
    protected $comment;

    /**
     * Is this a closing response. Only subject owner can close
     */
    public function getClose(): ?bool
    {
        return $this->close;
    }

    /**
     * Is this a closing response. Only subject owner can close
     */
    public function setClose(?bool $close): self
    {
        $this->initialized['close'] = true;
        $this->close = $close;

        return $this;
    }

    /**
     * The comment to submit
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * The comment to submit
     */
    public function setComment(string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;

        return $this;
    }
}
