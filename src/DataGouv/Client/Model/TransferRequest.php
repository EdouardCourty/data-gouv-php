<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class TransferRequest
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
     * An explanation about the transfer request
     *
     * @var string
     */
    protected $comment;
    /**
     * The transfer recipient, either an user or an organization
     *
     * @var TransferRequestRecipient
     */
    protected $recipient;
    /**
     * The transfered subject
     *
     * @var TransferRequestSubject
     */
    protected $subject;
    /**
     * An explanation about the transfer request
     *
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }
    /**
     * An explanation about the transfer request
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    /**
     * The transfer recipient, either an user or an organization
     *
     * @return TransferRequestRecipient
     */
    public function getRecipient(): TransferRequestRecipient
    {
        return $this->recipient;
    }
    /**
     * The transfer recipient, either an user or an organization
     *
     * @param TransferRequestRecipient $recipient
     *
     * @return self
     */
    public function setRecipient(TransferRequestRecipient $recipient): self
    {
        $this->initialized['recipient'] = true;
        $this->recipient = $recipient;
        return $this;
    }
    /**
     * The transfered subject
     *
     * @return TransferRequestSubject
     */
    public function getSubject(): TransferRequestSubject
    {
        return $this->subject;
    }
    /**
     * The transfered subject
     *
     * @param TransferRequestSubject $subject
     *
     * @return self
     */
    public function setSubject(TransferRequestSubject $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;
        return $this;
    }
}