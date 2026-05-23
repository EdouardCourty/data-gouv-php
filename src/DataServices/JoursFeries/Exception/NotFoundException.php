<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataServices\JoursFeries\Exception;

class NotFoundException extends JoursFeriesException
{
    public function __construct(string $message = 'Resource not found.', ?\Throwable $previous = null)
    {
        parent::__construct($message, 404, $previous);
    }
}
