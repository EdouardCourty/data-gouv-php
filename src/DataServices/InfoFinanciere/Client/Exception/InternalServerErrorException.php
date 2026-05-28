<?php

namespace Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Exception;

class InternalServerErrorException extends \RuntimeException implements ServerException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 500);
    }
}