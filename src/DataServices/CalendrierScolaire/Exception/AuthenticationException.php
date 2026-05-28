<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataServices\CalendrierScolaire\Exception;

class AuthenticationException extends CalendrierScolaireException
{
    public function __construct(string $message = 'Authentication required.', ?\Throwable $previous = null)
    {
        parent::__construct($message, 401, $previous);
    }
}
