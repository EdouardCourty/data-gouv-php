<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class ValidationError
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
     * @var mixed
     */
    protected $errors;
    /**
     * @var string|null
     */
    protected $message;
    /**
     * @return mixed
     */
    public function getErrors()
    {
        return $this->errors;
    }
    /**
     * @param mixed $errors
     *
     * @return self
     */
    public function setErrors($errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
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
}