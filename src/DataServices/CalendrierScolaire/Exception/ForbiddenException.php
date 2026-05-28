<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataServices\CalendrierScolaire\Exception;

class ForbiddenException extends CalendrierScolaireException
{
    public function __construct(string $message = 'Access forbidden.', ?\Throwable $previous = null)
    {
        parent::__construct($message, 403, $previous);
    }
}
