<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataServices\Geo\Exception;

class AuthenticationException extends GeoException
{
    public function __construct(string $message = 'Authentication required.', ?\Throwable $previous = null)
    {
        parent::__construct($message, 401, $previous);
    }
}
