<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Integration;

use Psr\Http\Message\ResponseInterface;

/**
 * Base class for integration tests targeting OpenDataSoft (ODS) platform APIs
 * (InfoFinancière, Annuaire des services publics, Calendrier scolaire, …).
 *
 * Provides shared helpers for asserting CSV/RDF export responses and reading
 * raw response body snippets, which are identical across all ODS-based test suites.
 */
abstract class AbstractOdsIntegrationTest extends IntegrationTestCase
{
    protected const string HEADER_CONTENT_TYPE = 'content-type';
    protected const string CSV_CONTENT_TYPE = 'text/csv';
    protected const string RDF_CONTENT_TYPE = 'application/rdf+xml';
    protected const int BODY_SNIPPET_BYTES = 2048;

    protected function assertCsvResponse(ResponseInterface $response, string $expectedFragment): void
    {
        self::assertStringContainsString(self::CSV_CONTENT_TYPE, $response->getHeaderLine(self::HEADER_CONTENT_TYPE));

        $body = $this->readBodySnippet($response);
        self::assertNotSame('', $body);
        self::assertStringContainsString($expectedFragment, $body);
    }

    protected function assertRdfResponse(ResponseInterface $response): void
    {
        self::assertStringContainsString(self::RDF_CONTENT_TYPE, $response->getHeaderLine(self::HEADER_CONTENT_TYPE));
        self::assertNotSame('', $this->readBodySnippet($response));
    }

    protected function readBodySnippet(ResponseInterface $response): string
    {
        $body = $response->getBody();
        if ($body->isSeekable()) {
            $body->rewind();
        }

        return $body->read(self::BODY_SNIPPET_BYTES);
    }
}
