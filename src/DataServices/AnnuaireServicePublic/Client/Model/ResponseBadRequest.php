<?php

namespace Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Model;

class ResponseBadRequest extends \ArrayObject
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
     * @var string
     */
    protected $message;
    /**
     * @var string
     */
    protected $errorCode;
    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }
    /**
     * @param string $errorCode
     *
     * @return self
     */
    public function setErrorCode(string $errorCode): self
    {
        $this->initialized['errorCode'] = true;
        $this->errorCode = $errorCode;
        return $this;
    }
}