<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Generator\SpecPatcher;

final class CompositePatcher implements SpecPatcherInterface
{
    /** @var list<SpecPatcherInterface> */
    private readonly array $patchers;

    public function __construct(SpecPatcherInterface ...$patchers)
    {
        $this->patchers = array_values($patchers);
    }

    public function patch(array &$spec): void
    {
        foreach ($this->patchers as $patcher) {
            $patcher->patch($spec);
        }
    }
}
