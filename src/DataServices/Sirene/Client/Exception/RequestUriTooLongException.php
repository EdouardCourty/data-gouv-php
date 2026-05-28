<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Exception;

class RequestUriTooLongException extends \RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 414);
    }
}