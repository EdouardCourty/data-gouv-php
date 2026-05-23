<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Generator\Renderer;

use Ecourty\DataGouv\Generator\ApiConfig;

final class ExceptionRenderer
{
    public function renderBase(ApiConfig $config): string
    {
        $class = $config->exceptionBaseClass;
        $ns = $config->exceptionNamespace;

        return <<<PHP
<?php

declare(strict_types=1);

namespace {$ns};

class {$class} extends \RuntimeException
{
    public function __construct(string \$message = '', int \$code = 0, ?\Throwable \$previous = null)
    {
        parent::__construct(\$message, \$code, \$previous);
    }
}
PHP;
    }

    public function renderApiException(ApiConfig $config): string
    {
        $base = $config->exceptionBaseClass;
        $ns = $config->exceptionNamespace;

        return <<<PHP
<?php

declare(strict_types=1);

namespace {$ns};

class ApiException extends {$base}
{
}
PHP;
    }

    public function renderAuthenticationException(ApiConfig $config): string
    {
        $base = $config->exceptionBaseClass;
        $ns = $config->exceptionNamespace;

        return <<<PHP
<?php

declare(strict_types=1);

namespace {$ns};

class AuthenticationException extends {$base}
{
    public function __construct(string \$message = 'Authentication required.', ?\Throwable \$previous = null)
    {
        parent::__construct(\$message, 401, \$previous);
    }
}
PHP;
    }

    public function renderForbiddenException(ApiConfig $config): string
    {
        $base = $config->exceptionBaseClass;
        $ns = $config->exceptionNamespace;

        return <<<PHP
<?php

declare(strict_types=1);

namespace {$ns};

class ForbiddenException extends {$base}
{
    public function __construct(string \$message = 'Access forbidden.', ?\Throwable \$previous = null)
    {
        parent::__construct(\$message, 403, \$previous);
    }
}
PHP;
    }

    public function renderNotFoundException(ApiConfig $config): string
    {
        $base = $config->exceptionBaseClass;
        $ns = $config->exceptionNamespace;

        return <<<PHP
<?php

declare(strict_types=1);

namespace {$ns};

class NotFoundException extends {$base}
{
    public function __construct(string \$message = 'Resource not found.', ?\Throwable \$previous = null)
    {
        parent::__construct(\$message, 404, \$previous);
    }
}
PHP;
    }

    /**
     * Generates all 5 exception files for the given API config.
     * Returns a map of filename => content.
     *
     * @return array<string, string>
     */
    public function renderAll(ApiConfig $config): array
    {
        return [
            $config->exceptionBaseClass . '.php' => $this->renderBase($config) . "\n",
            'ApiException.php' => $this->renderApiException($config) . "\n",
            'AuthenticationException.php' => $this->renderAuthenticationException($config) . "\n",
            'ForbiddenException.php' => $this->renderForbiddenException($config) . "\n",
            'NotFoundException.php' => $this->renderNotFoundException($config) . "\n",
        ];
    }
}
