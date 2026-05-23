<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Exception;

class ForbiddenException extends DataGouvException
{
    public function __construct(string $message = 'Access forbidden.', ?\Throwable $previous = null)
    {
        parent::__construct($message, 403, $previous);
    }
}
