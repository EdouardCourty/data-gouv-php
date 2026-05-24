<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Unit\Generator;

use Ecourty\DataGouv\Generator\SpecPatcher\CompositePatcher;
use Ecourty\DataGouv\Generator\SpecPatcher\SpecPatcherInterface;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(CompositePatcher::class)]
final class CompositePatcherTest extends TestCase
{
    #[Test]
    public function itAppliesBothPatchers(): void
    {
        $patcher = new CompositePatcher(
            new class implements SpecPatcherInterface {
                public function patch(array &$spec): void
                {
                    $spec['first'] = true;
                }
            },
            new class implements SpecPatcherInterface {
                public function patch(array &$spec): void
                {
                    $spec['second'] = true;
                }
            },
        );

        $spec = [];
        $patcher->patch($spec);

        self::assertSame(['first' => true, 'second' => true], $spec);
    }

    #[Test]
    public function itWorksWithNoPatcher(): void
    {
        $spec = ['foo' => 'bar'];
        (new CompositePatcher())->patch($spec);

        self::assertSame(['foo' => 'bar'], $spec);
    }

    #[Test]
    public function laterPatcherCanSeeChangesFromEarlierPatcher(): void
    {
        $reader = new class implements SpecPatcherInterface {
            public string $seen = '';

            public function patch(array &$spec): void
            {
                $this->seen = \is_string($spec['key'] ?? null) ? $spec['key'] : '';
            }
        };

        $spec = [];
        (new CompositePatcher(
            new class implements SpecPatcherInterface {
                public function patch(array &$spec): void
                {
                    $spec['key'] = 'value';
                }
            },
            $reader,
        ))->patch($spec);

        self::assertSame('value', $reader->seen);
    }
}
