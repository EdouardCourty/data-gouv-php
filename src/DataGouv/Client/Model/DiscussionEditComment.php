<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DiscussionEditComment
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
     * The new comment
     *
     * @var string
     */
    protected $comment;

    /**
     * The new comment
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * The new comment
     */
    public function setComment(string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;

        return $this;
    }
}
