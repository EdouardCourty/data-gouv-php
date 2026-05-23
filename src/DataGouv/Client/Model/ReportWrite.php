<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class ReportWrite
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
     * @var \DateTime|null
     */
    protected $dismissedAt;
    /**
     * ID of the reference
     *
     * @var string|null
     */
    protected $dismissedBy;
    /**
     * @var string|null
     */
    protected $message;
    /**
     * @var string
     */
    protected $reason;
    /**
     * @var LazyReference
     */
    protected $subject;
    /**
     * UUID of the embedded document within the subject (e.g., a Message within a Discussion)
     *
     * @var string|null
     */
    protected $subjectEmbedId;

    public function getDismissedAt(): ?\DateTime
    {
        return $this->dismissedAt;
    }

    public function setDismissedAt(?\DateTime $dismissedAt): self
    {
        $this->initialized['dismissedAt'] = true;
        $this->dismissedAt = $dismissedAt;

        return $this;
    }

    /**
     * ID of the reference
     */
    public function getDismissedBy(): ?string
    {
        return $this->dismissedBy;
    }

    /**
     * ID of the reference
     */
    public function setDismissedBy(?string $dismissedBy): self
    {
        $this->initialized['dismissedBy'] = true;
        $this->dismissedBy = $dismissedBy;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function setReason(string $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;

        return $this;
    }

    public function getSubject(): LazyReference
    {
        return $this->subject;
    }

    public function setSubject(LazyReference $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;

        return $this;
    }

    /**
     * UUID of the embedded document within the subject (e.g., a Message within a Discussion)
     */
    public function getSubjectEmbedId(): ?string
    {
        return $this->subjectEmbedId;
    }

    /**
     * UUID of the embedded document within the subject (e.g., a Message within a Discussion)
     */
    public function setSubjectEmbedId(?string $subjectEmbedId): self
    {
        $this->initialized['subjectEmbedId'] = true;
        $this->subjectEmbedId = $subjectEmbedId;

        return $this;
    }
}
