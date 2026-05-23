<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Exception;

class GoneException extends \RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 410);
    }
}
