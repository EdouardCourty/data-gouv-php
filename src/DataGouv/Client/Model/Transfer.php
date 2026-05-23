<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class Transfer
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
     * A comment about the transfer request
     *
     * @var string|null
     */
    protected $comment;
    /**
     * The transfer request date
     *
     * @var \DateTime|null
     */
    protected $created;
    /**
     * The transfer unique identifier
     *
     * @var string|null
     */
    protected $id;
    /**
     * The user or organization currently owning the transfered object
     *
     * @var TransferOwner
     */
    protected $owner;
    /**
     * The user or organization receiving the transfered object
     *
     * @var TransferRecipient
     */
    protected $recipient;
    /**
     * A comment about the transfer response
     *
     * @var string|null
     */
    protected $reponseComment;
    /**
     * The transfer response date
     *
     * @var \DateTime|null
     */
    protected $responded;
    /**
     * The current transfer request status
     *
     * @var string|null
     */
    protected $status;
    /**
     * The transfered object
     *
     * @var TransferSubject
     */
    protected $subject;
    /**
     * The user who requested the transfer
     */
    protected $user;

    /**
     * A comment about the transfer request
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * A comment about the transfer request
     */
    public function setComment(?string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;

        return $this;
    }

    /**
     * The transfer request date
     */
    public function getCreated(): ?\DateTime
    {
        return $this->created;
    }

    /**
     * The transfer request date
     */
    public function setCreated(?\DateTime $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;

        return $this;
    }

    /**
     * The transfer unique identifier
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The transfer unique identifier
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The user or organization currently owning the transfered object
     */
    public function getOwner(): TransferOwner
    {
        return $this->owner;
    }

    /**
     * The user or organization currently owning the transfered object
     */
    public function setOwner(TransferOwner $owner): self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;

        return $this;
    }

    /**
     * The user or organization receiving the transfered object
     */
    public function getRecipient(): TransferRecipient
    {
        return $this->recipient;
    }

    /**
     * The user or organization receiving the transfered object
     */
    public function setRecipient(TransferRecipient $recipient): self
    {
        $this->initialized['recipient'] = true;
        $this->recipient = $recipient;

        return $this;
    }

    /**
     * A comment about the transfer response
     */
    public function getReponseComment(): ?string
    {
        return $this->reponseComment;
    }

    /**
     * A comment about the transfer response
     */
    public function setReponseComment(?string $reponseComment): self
    {
        $this->initialized['reponseComment'] = true;
        $this->reponseComment = $reponseComment;

        return $this;
    }

    /**
     * The transfer response date
     */
    public function getResponded(): ?\DateTime
    {
        return $this->responded;
    }

    /**
     * The transfer response date
     */
    public function setResponded(?\DateTime $responded): self
    {
        $this->initialized['responded'] = true;
        $this->responded = $responded;

        return $this;
    }

    /**
     * The current transfer request status
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * The current transfer request status
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * The transfered object
     */
    public function getSubject(): TransferSubject
    {
        return $this->subject;
    }

    /**
     * The transfered object
     */
    public function setSubject(TransferSubject $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;

        return $this;
    }

    /**
     * The user who requested the transfer
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * The user who requested the transfer
     */
    public function setUser($user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }
}
