<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Exception;

class ForbiddenException extends AnnuaireServicePublicException
{
    public function __construct(string $message = 'Access forbidden.', ?\Throwable $previous = null)
    {
        parent::__construct($message, 403, $previous);
    }
}
