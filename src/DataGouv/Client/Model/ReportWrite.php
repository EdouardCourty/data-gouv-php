<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class ReportWrite
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
    /**
     * @return \DateTime|null
     */
    public function getDismissedAt(): ?\DateTime
    {
        return $this->dismissedAt;
    }
    /**
     * @param \DateTime|null $dismissedAt
     *
     * @return self
     */
    public function setDismissedAt(?\DateTime $dismissedAt): self
    {
        $this->initialized['dismissedAt'] = true;
        $this->dismissedAt = $dismissedAt;
        return $this;
    }
    /**
     * ID of the reference
     *
     * @return string|null
     */
    public function getDismissedBy(): ?string
    {
        return $this->dismissedBy;
    }
    /**
     * ID of the reference
     *
     * @param string|null $dismissedBy
     *
     * @return self
     */
    public function setDismissedBy(?string $dismissedBy): self
    {
        $this->initialized['dismissedBy'] = true;
        $this->dismissedBy = $dismissedBy;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
    /**
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }
    /**
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;
        return $this;
    }
    /**
     * @return LazyReference
     */
    public function getSubject(): LazyReference
    {
        return $this->subject;
    }
    /**
     * @param LazyReference $subject
     *
     * @return self
     */
    public function setSubject(LazyReference $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;
        return $this;
    }
    /**
     * UUID of the embedded document within the subject (e.g., a Message within a Discussion)
     *
     * @return string|null
     */
    public function getSubjectEmbedId(): ?string
    {
        return $this->subjectEmbedId;
    }
    /**
     * UUID of the embedded document within the subject (e.g., a Message within a Discussion)
     *
     * @param string|null $subjectEmbedId
     *
     * @return self
     */
    public function setSubjectEmbedId(?string $subjectEmbedId): self
    {
        $this->initialized['subjectEmbedId'] = true;
        $this->subjectEmbedId = $subjectEmbedId;
        return $this;
    }
}