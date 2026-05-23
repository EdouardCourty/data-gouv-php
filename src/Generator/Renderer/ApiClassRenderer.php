<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Generator\Renderer;

use Ecourty\DataGouv\Generator\Config;
use Ecourty\DataGouv\Generator\MethodInfo;

final class ApiClassRenderer
{
    public function render(string $className, string $tag, array $methods): string
    {
        $ns = Config::LIB_NAMESPACE;
        $janeNs = Config::JANE_NAMESPACE;
        $exNs = Config::LIB_NAMESPACE . '\\Exception';

        $methodBlocks = array_map(
            fn (MethodInfo $info) => $this->renderMethod($info, $janeNs),
            $methods,
        );

        $methodsCode = implode("\n", $methodBlocks);

        return <<<PHP
        <?php

        declare(strict_types=1);

        namespace {$ns}\\Api;

        use {$janeNs}\\Client;
        use {$janeNs}\\Exception\\ClientException;
        use {$exNs}\\ApiException;
        use {$exNs}\\AuthenticationException;
        use {$exNs}\\DataGouvException;
        use {$exNs}\\ForbiddenException;
        use {$exNs}\\NotFoundException;

        /**
         * Sub-client for the "{$tag}" tag of the data.gouv.fr API.
         *
         * @see https://www.data.gouv.fr/api/1/swagger.json
         */
        final class {$className}
        {
            public function __construct(private readonly Client \$client)
            {
            }
        {$methodsCode}

            private function convertException(ClientException \$e): DataGouvException
            {
                return match (\$e->getCode()) {
                    401 => new AuthenticationException(\$e->getMessage(), \$e),
                    403 => new ForbiddenException(\$e->getMessage(), \$e),
                    404, 410 => new NotFoundException(\$e->getMessage(), \$e),
                    default => new ApiException(\$e->getMessage(), \$e->getCode(), \$e),
                };
            }
        }
        PHP;
    }

    private function renderMethod(MethodInfo $info, string $janeNs): string
    {
        $fetchConst = '\\' . $janeNs . '\\Client::FETCH_OBJECT';
        $callArgs = $info->callArgs !== ''
            ? $info->callArgs . ', ' . $fetchConst
            : $fetchConst;

        $doc = $info->docblock !== '' ? $info->docblock . "\n        " : '';

        return <<<PHP

            {$doc}public function {$info->name}({$info->signature}): {$info->returnType}
            {
                try {
                    return \$this->client->{$info->name}({$callArgs});
                } catch (\\{$janeNs}\\Exception\\ClientException \$e) {
                    throw \$this->convertException(\$e);
                }
            }
        PHP;
    }
}
