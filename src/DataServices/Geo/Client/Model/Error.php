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
     * @var int|null
     */
    protected $code;
    /**
     * Libellé de l'erreur
     *
     * @var string|null
     */
    protected $message;
    /**
     * Explication
     *
     * @var string|null
     */
    protected $description;
    /**
     * Code HTTP de l'erreur
     *
     * @return int|null
     */
    public function getCode(): ?int
    {
        return $this->code;
    }
    /**
     * Code HTTP de l'erreur
     *
     * @param int|null $code
     *
     * @return self
     */
    public function setCode(?int $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Libellé de l'erreur
     *
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
    /**
     * Libellé de l'erreur
     *
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
     * Explication
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Explication
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}