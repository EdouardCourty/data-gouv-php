<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Exception;

class ServiceUnavailableException extends \RuntimeException implements ServerException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 503);
    }
}