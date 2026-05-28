<?php

namespace Ecourty\DataGouv\DataServices\Geo\Client\Exception;

class BadRequestException extends \RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 400);
    }
}