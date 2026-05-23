<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Generator;

final class MethodInfo
{
    public function __construct(
        public readonly string $name,
        public readonly array $tags,
        public readonly string $signature,
        public readonly string $callArgs,
        public readonly string $docblock,
        public readonly string $returnType,
    ) {
    }
}
