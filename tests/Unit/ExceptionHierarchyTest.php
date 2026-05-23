<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Unit;

use Ecourty\DataGouv\DataGouv\Exception\ApiException;
use Ecourty\DataGouv\DataGouv\Exception\AuthenticationException;
use Ecourty\DataGouv\DataGouv\Exception\DataGouvException;
use Ecourty\DataGouv\DataGouv\Exception\ForbiddenException;
use Ecourty\DataGouv\DataGouv\Exception\NotFoundException;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(DataGouvException::class)]
#[CoversClass(ApiException::class)]
#[CoversClass(AuthenticationException::class)]
#[CoversClass(ForbiddenException::class)]
#[CoversClass(NotFoundException::class)]
final class ExceptionHierarchyTest extends TestCase
{
    #[Test]
    public function allExceptionsExtendDataGouvException(): void
    {
        self::assertInstanceOf(DataGouvException::class, new ApiException());
        self::assertInstanceOf(DataGouvException::class, new AuthenticationException());
        self::assertInstanceOf(DataGouvException::class, new ForbiddenException());
        self::assertInstanceOf(DataGouvException::class, new NotFoundException());
    }

    #[Test]
    public function dataGouvExceptionExtendsRuntimeException(): void
    {
        self::assertInstanceOf(\RuntimeException::class, new DataGouvException());
    }

    #[Test]
    public function authenticationExceptionHasCode401(): void
    {
        $e = new AuthenticationException();

        self::assertSame(401, $e->getCode());
    }

    #[Test]
    public function forbiddenExceptionHasCode403(): void
    {
        $e = new ForbiddenException();

        self::assertSame(403, $e->getCode());
    }

    #[Test]
    public function notFoundExceptionHasCode404(): void
    {
        $e = new NotFoundException();

        self::assertSame(404, $e->getCode());
    }

    #[Test]
    public function exceptionsAcceptCustomMessageAndPrevious(): void
    {
        $previous = new \RuntimeException('root cause');

        $e = new NotFoundException('Custom message', $previous);

        self::assertSame('Custom message', $e->getMessage());
        self::assertSame($previous, $e->getPrevious());
        self::assertSame(404, $e->getCode());
    }

    #[Test]
    public function apiExceptionAcceptsCustomCode(): void
    {
        $e = new ApiException('Bad request', 400);

        self::assertSame(400, $e->getCode());
        self::assertSame('Bad request', $e->getMessage());
    }
}
