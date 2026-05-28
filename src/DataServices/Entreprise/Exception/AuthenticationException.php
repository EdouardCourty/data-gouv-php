<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataServices\Entreprise\Exception;

class AuthenticationException extends EntrepriseException
{
    public function __construct(string $message = 'Authentication required.', ?\Throwable $previous = null)
    {
        parent::__construct($message, 401, $previous);
    }
}
