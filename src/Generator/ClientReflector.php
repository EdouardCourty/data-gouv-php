<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Generator;

final class ClientReflector
{
    /**
     * Reflects on Jane's generated Client class and returns a map of method
     * name → MethodInfo for all API methods (those present in $operationTags).
     *
     * @param array<string, list<string>> $operationTags operationId => [tag, ...]
     *
     * @return array<string, MethodInfo> methodName  => MethodInfo
     */
    public function reflect(string $clientClass, array $operationTags, string $janeNamespace): array
    {
        $reflection = new \ReflectionClass($clientClass); // @phpstan-ignore argument.type
        $methods = [];

        foreach ($reflection->getMethods(\ReflectionMethod::IS_PUBLIC) as $method) {
            if ($method->class !== $clientClass || $method->isStatic()) {
                continue;
            }

            $opId = $this->camelToSnake($method->getName());
            $tags = $operationTags[$opId] ?? $operationTags[$method->getName()] ?? null;

            if ($tags === null) {
                continue;
            }

            [$signature, $callArgs] = $this->buildParamList($method);

            $methods[$method->getName()] = new MethodInfo(
                name: $method->getName(),
                tags: $tags,
                signature: $signature,
                callArgs: $callArgs,
                docblock: $this->extractDocblock($method),
                returnType: $this->extractReturnType($method, $janeNamespace),
            );
        }

        return $methods;
    }

    private function camelToSnake(string $input): string
    {
        return strtolower((string) preg_replace('/[A-Z]/', '_$0', lcfirst($input)));
    }

    /**
     * @return array{0: string, 1: string} [signature, callArgs]
     */
    private function buildParamList(\ReflectionMethod $method): array
    {
        $sig = [];
        $call = [];

        foreach ($method->getParameters() as $param) {
            if ($param->getName() === 'fetch') {
                continue;
            }

            $part = '';
            $type = $param->getType();

            if ($type instanceof \ReflectionNamedType) {
                $typeName = $type->isBuiltin() ? $type->getName() : '\\' . $type->getName();
                if ($type->allowsNull()) {
                    $typeName = '?' . $typeName;
                }
                $part .= $typeName . ' ';
            }

            $part .= '$' . $param->getName();

            if ($param->isOptional() && $param->isDefaultValueAvailable()) {
                $part .= ' = ' . $this->formatDefaultValue($param->getDefaultValue());
            }

            $sig[] = $part;
            $call[] = '$' . $param->getName();
        }

        return [implode(', ', $sig), implode(', ', $call)];
    }

    private function formatDefaultValue(mixed $value): string
    {
        return match (true) {
            \is_array($value) => '[]',
            \is_bool($value) => $value ? 'true' : 'false',
            \is_string($value) => "'" . addcslashes($value, "'\\") . "'",
            $value === null => 'null',
            default => (string) $value, // @phpstan-ignore cast.string
        };
    }

    private function extractDocblock(\ReflectionMethod $method): string
    {
        $raw = $method->getDocComment();
        if ($raw === false) {
            return '';
        }

        $filtered = array_filter(
            explode("\n", $raw),
            static fn (string $line): bool => !str_contains($line, '@param string $fetch')
                && !str_contains($line, 'Fetch mode')
                && !str_contains($line, '@return ('),
        );

        return implode("\n", $filtered);
    }

    private function extractReturnType(\ReflectionMethod $method, string $janeNamespace): string
    {
        $doc = $method->getDocComment();
        if ($doc === false) {
            return 'mixed';
        }

        if (preg_match("/@return\s+\(\\\$fetch is 'object' \? ([^:]+) :/", $doc, $m)) {
            $type = trim($m[1]);
            if (str_ends_with($type, '[]')) {
                $type = preg_replace('/\\\\[\w\\\\]+\[\]/', 'array', $type);
            }

            return $this->qualifyType((string) $type, $janeNamespace);
        }

        if (preg_match('/@return\s+(\S+)/', $doc, $m)) {
            return str_ends_with($m[1], '[]') ? 'array' : $m[1];
        }

        return 'mixed';
    }

    /**
     * Fully-qualifies a type extracted from a Jane docblock.
     *
     * Jane's docblocks reference model classes as relative names like `Model\Foo`
     * or `Model\Foo|null`. These are relative to the Jane client's namespace
     * (e.g. `Ecourty\DataGouv\DataGouv\Client`). When copied into sub-client files
     * that live in a different namespace (e.g. `Ecourty\DataGouv\DataGouv\Api`),
     * the relative name resolves to the wrong class. This method prefixes each
     * relative segment with the full Jane namespace so the type is unambiguous.
     */
    private function qualifyType(string $type, string $janeNamespace): string
    {
        // Handle union types (e.g. "Model\Foo|null")
        $parts = explode('|', $type);
        $qualified = [];

        foreach ($parts as $part) {
            $part = trim($part);
            if ($part === '' || $part === 'null' || $part === 'mixed' || $part === 'array') {
                $qualified[] = $part;
                continue;
            }

            // Already fully-qualified (starts with \) — leave as-is.
            if (str_starts_with($part, '\\')) {
                $qualified[] = $part;
                continue;
            }

            // Built-in or scalar types — leave as-is.
            if (\in_array($part, ['string', 'int', 'float', 'bool', 'object', 'void', 'never', 'resource'], true)) {
                $qualified[] = $part;
                continue;
            }

            // Relative class name — prefix with the Jane namespace.
            $qualified[] = '\\' . rtrim($janeNamespace, '\\') . '\\' . $part;
        }

        return implode('|', $qualified);
    }
}
