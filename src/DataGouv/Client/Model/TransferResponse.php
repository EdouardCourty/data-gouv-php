<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class TransferResponse
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
     * An optional comment about the transfer response
     *
     * @var string|null
     */
    protected $comment;
    /**
     * The response
     *
     * @var string
     */
    protected $response;

    /**
     * An optional comment about the transfer response
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * An optional comment about the transfer response
     */
    public function setComment(?string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;

        return $this;
    }

    /**
     * The response
     */
    public function getResponse(): string
    {
        return $this->response;
    }

    /**
     * The response
     */
    public function setResponse(string $response): self
    {
        $this->initialized['response'] = true;
        $this->response = $response;

        return $this;
    }
}
