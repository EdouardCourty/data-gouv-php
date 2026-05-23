<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Exception;

class DataGouvException extends \RuntimeException
{
    public function __construct(string $message = '', int $code = 0, ?\Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
