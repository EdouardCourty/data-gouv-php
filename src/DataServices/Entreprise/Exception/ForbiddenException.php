<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataServices\Entreprise\Exception;

class ForbiddenException extends EntrepriseException
{
    public function __construct(string $message = 'Access forbidden.', ?\Throwable $previous = null)
    {
        parent::__construct($message, 403, $previous);
    }
}
