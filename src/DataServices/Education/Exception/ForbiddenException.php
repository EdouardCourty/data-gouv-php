<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataServices\Education\Exception;

class ForbiddenException extends EducationException
{
    public function __construct(string $message = 'Access forbidden.', ?\Throwable $previous = null)
    {
        parent::__construct($message, 403, $previous);
    }
}
