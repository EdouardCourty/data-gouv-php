<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Exception;

class AuthenticationException extends AnnuaireServicePublicException
{
    public function __construct(string $message = 'Authentication required.', ?\Throwable $previous = null)
    {
        parent::__construct($message, 401, $previous);
    }
}
