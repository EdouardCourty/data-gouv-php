<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class ReportRead
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
     * Only set if a user was connected when reporting an element.
     *
     * @var mixed
     */
    protected $by;
    /**
     * Number of pending callbacks to execute when dismissed
     *
     * @var int|null
     */
    protected $callbacksCount;
    /**
     * @var \DateTime|null
     */
    protected $dismissedAt;
    /**
     * @var UserReference
     */
    protected $dismissedBy;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $message;
    /**
     * @var string
     */
    protected $reason;
    /**
     * @var \DateTime
     */
    protected $reportedAt;
    /**
     * Link to the API endpoint for this report
     *
     * @var string|null
     */
    protected $selfApiUrl;
    /**
     * @var LazyReference
     */
    protected $subject;
    /**
     * @var \DateTime|null
     */
    protected $subjectDeletedAt;
    /**
     * @var mixed
     */
    protected $subjectDeletedBy;
    /**
     * UUID of the embedded document within the subject (e.g., a Message within a Discussion)
     *
     * @var string|null
     */
    protected $subjectEmbedId;
    /**
     * Title or slug of the subject, saved at report creation for future reference.
     *
     * @var string|null
     */
    protected $subjectLabel;
    /**
     * Only set if a user was connected when reporting an element.
     *
     * @return mixed
     */
    public function getBy()
    {
        return $this->by;
    }
    /**
     * Only set if a user was connected when reporting an element.
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
     * Number of pending callbacks to execute when dismissed
     *
     * @return int|null
     */
    public function getCallbacksCount(): ?int
    {
        return $this->callbacksCount;
    }
    /**
     * Number of pending callbacks to execute when dismissed
     *
     * @param int|null $callbacksCount
     *
     * @return self
     */
    public function setCallbacksCount(?int $callbacksCount): self
    {
        $this->initialized['callbacksCount'] = true;
        $this->callbacksCount = $callbacksCount;
        return $this;
    }
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
     * @return UserReference
     */
    public function getDismissedBy(): UserReference
    {
        return $this->dismissedBy;
    }
    /**
     * @param UserReference $dismissedBy
     *
     * @return self
     */
    public function setDismissedBy(UserReference $dismissedBy): self
    {
        $this->initialized['dismissedBy'] = true;
        $this->dismissedBy = $dismissedBy;
        return $this;
    }
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
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
     * @return \DateTime
     */
    public function getReportedAt(): \DateTime
    {
        return $this->reportedAt;
    }
    /**
     * @param \DateTime $reportedAt
     *
     * @return self
     */
    public function setReportedAt(\DateTime $reportedAt): self
    {
        $this->initialized['reportedAt'] = true;
        $this->reportedAt = $reportedAt;
        return $this;
    }
    /**
     * Link to the API endpoint for this report
     *
     * @return string|null
     */
    public function getSelfApiUrl(): ?string
    {
        return $this->selfApiUrl;
    }
    /**
     * Link to the API endpoint for this report
     *
     * @param string|null $selfApiUrl
     *
     * @return self
     */
    public function setSelfApiUrl(?string $selfApiUrl): self
    {
        $this->initialized['selfApiUrl'] = true;
        $this->selfApiUrl = $selfApiUrl;
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
     * @return \DateTime|null
     */
    public function getSubjectDeletedAt(): ?\DateTime
    {
        return $this->subjectDeletedAt;
    }
    /**
     * @param \DateTime|null $subjectDeletedAt
     *
     * @return self
     */
    public function setSubjectDeletedAt(?\DateTime $subjectDeletedAt): self
    {
        $this->initialized['subjectDeletedAt'] = true;
        $this->subjectDeletedAt = $subjectDeletedAt;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getSubjectDeletedBy()
    {
        return $this->subjectDeletedBy;
    }
    /**
     * @param mixed $subjectDeletedBy
     *
     * @return self
     */
    public function setSubjectDeletedBy($subjectDeletedBy): self
    {
        $this->initialized['subjectDeletedBy'] = true;
        $this->subjectDeletedBy = $subjectDeletedBy;
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
    /**
     * Title or slug of the subject, saved at report creation for future reference.
     *
     * @return string|null
     */
    public function getSubjectLabel(): ?string
    {
        return $this->subjectLabel;
    }
    /**
     * Title or slug of the subject, saved at report creation for future reference.
     *
     * @param string|null $subjectLabel
     *
     * @return self
     */
    public function setSubjectLabel(?string $subjectLabel): self
    {
        $this->initialized['subjectLabel'] = true;
        $this->subjectLabel = $subjectLabel;
        return $this;
    }
}