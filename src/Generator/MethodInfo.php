<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Generator;

final class MethodInfo
{
    public function __construct(
        public readonly string $name,
        /** @var list<string> */
        public readonly array $tags,
        public readonly string $signature,
        /** Call args that appear before $fetch in the Jane Client signature. */
        public readonly string $callArgsBefore,
        /** Call args that appear after $fetch in the Jane Client signature (e.g. $accept). */
        public readonly string $callArgsAfter,
        public readonly string $docblock,
        public readonly string $returnType,
    ) {
    }
}
