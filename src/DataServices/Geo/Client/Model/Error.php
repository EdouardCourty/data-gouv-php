<?php

namespace Ecourty\DataGouv\DataServices\Geo\Client\Model;

class Error
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
     * Code HTTP de l'erreur
     *
     * @var int
     */
    protected $code;
    /**
     * Libellé de l'erreur
     *
     * @var string
     */
    protected $message;
    /**
     * Explication
     *
     * @var string
     */
    protected $description;
    /**
     * Code HTTP de l'erreur
     *
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }
    /**
     * Code HTTP de l'erreur
     *
     * @param int $code
     *
     * @return self
     */
    public function setCode(int $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Libellé de l'erreur
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * Libellé de l'erreur
     *
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
     * Explication
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Explication
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}