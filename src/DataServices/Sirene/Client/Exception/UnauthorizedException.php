<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Exception;

class UnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 401);
    }
}