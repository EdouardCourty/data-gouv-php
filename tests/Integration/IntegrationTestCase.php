<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Integration;

use PHPUnit\Framework\TestCase;
use Psr\Http\Client\NetworkExceptionInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Base class for all integration tests hitting live APIs.
 *
 * Provides helpers for graceful handling of network errors, rate limits,
 * and raw PSR-7 response decoding for ODS-based APIs.
 */
abstract class IntegrationTestCase extends TestCase
{
    /**
     * Wraps a callable that performs live HTTP calls.
     *
     * Automatically marks the test as skipped when:
     * - A network exception occurs (no connectivity)
     * - The API returns 429 Too Many Requests
     * - The API returns 503 Service Unavailable
     *
     * @template T
     *
     * @param callable(): T $fn
     *
     * @return T
     */
    protected function callApi(callable $fn): mixed
    {
        try {
            return $fn();
        } catch (NetworkExceptionInterface $e) {
            self::markTestSkipped('Network error: ' . $e->getMessage());
        } catch (\Throwable $e) {
            if (str_contains($e->getMessage(), '429') || str_contains($e->getMessage(), 'Too Many')) {
                self::markTestSkipped('Rate limited (429): ' . $e->getMessage());
            }

            if (str_contains($e->getMessage(), '503') || str_contains($e->getMessage(), 'Service Unavailable')) {
                self::markTestSkipped('Service unavailable (503): ' . $e->getMessage());
            }

            throw $e;
        }
    }

    /**
     * Asserts a PSR-7 response is successful (2xx) and skips on transient errors.
     */
    protected function assertSuccessfulResponse(ResponseInterface $response): void
    {
        $status = $response->getStatusCode();

        if ($status === 429) {
            self::markTestSkipped('Rate limited (429).');
        }

        if ($status === 503) {
            self::markTestSkipped('Service unavailable (503).');
        }

        self::assertGreaterThanOrEqual(200, $status);
        self::assertLessThan(300, $status);
    }

    /**
     * Decodes a PSR-7 response body as JSON.
     *
     * The return type is intentionally broad: JSON responses may be objects
     * (array<string, mixed>) or arrays (list<mixed>), both represented as array<array-key, mixed>.
     *
     * @return array<array-key, mixed>
     */
    protected function decodeResponse(ResponseInterface $response): array
    {
        $body = (string) $response->getBody();
        $decoded = json_decode($body, true);
        self::assertIsArray($decoded, 'Response body must be valid JSON');

        /* @var array<array-key, mixed> $decoded */
        return $decoded;
    }
}
