<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Generator\SpecPatcher;

interface SpecPatcherInterface
{
    /**
     * Applies in-place patches to a parsed OpenAPI/Swagger spec array.
     *
     * @param array<string, mixed> $spec
     */
    public function patch(array &$spec): void;
}
