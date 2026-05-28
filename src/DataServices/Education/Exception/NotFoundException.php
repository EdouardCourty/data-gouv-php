<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataServices\Education\Exception;

class NotFoundException extends EducationException
{
    public function __construct(string $message = 'Resource not found.', ?\Throwable $previous = null)
    {
        parent::__construct($message, 404, $previous);
    }
}
