<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Integration\CalendrierScolaire;

use Ecourty\DataGouv\DataServices\CalendrierScolaire\CalendrierScolaireClient;
use Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Client as CalendrierJaneClient;
use Ecourty\DataGouv\Tests\Integration\IntegrationTestCase;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\Test;
use Psr\Http\Message\ResponseInterface;

#[Group('integration')]
final class CalendrierScolaireIntegrationTest extends IntegrationTestCase
{
    private const int LIMIT = 3;
    private const string PREFERRED_DATASET_ID = 'fr-en-calendrier-scolaire';
    private const string DATASET_FILTER = 'dataset_id="fr-en-calendrier-scolaire"';
    private const string JSON_FORMAT = 'json';
    private const string DCAT_FORMAT_SUFFIX = '';
    private const string KEY_DATASETS = 'datasets';
    private const string KEY_DATASET = 'dataset';
    private const string KEY_DATASET_ID = 'dataset_id';
    private const string KEY_RECORDS = 'records';
    private const string KEY_RECORD = 'record';
    private const string KEY_RECORD_ID = 'id';
    private const string KEY_FIELDS = 'fields';
    private const string KEY_DESCRIPTION = 'description';
    private const string KEY_LINKS = 'links';
    private const string KEY_REL = 'rel';
    private const string KEY_FACETS = 'facets';
    private const string KEY_ATTACHMENTS = 'attachments';
    private const string REL_JSON = 'json';
    private const string HEADER_CONTENT_TYPE = 'content-type';
    private const string CSV_CONTENT_TYPE = 'text/csv';
    private const string RDF_CONTENT_TYPE = 'application/rdf+xml';
    private const string CSV_DATASET_ID_HEADER = 'datasetid';
    private const int BODY_SNIPPET_BYTES = 2048;

    private CalendrierScolaireClient $client;
    private ?string $datasetId = null;
    private ?string $recordId = null;

    protected function setUp(): void
    {
        $this->client = new CalendrierScolaireClient();
    }

    #[Test]
    public function itGetsCatalogDatasets(): void
    {
        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->getDatasets(
                ['limit' => self::LIMIT],
                CalendrierJaneClient::FETCH_RESPONSE,
            ),
        );

        $datasets = $this->extractDatasetWrappers($data);
        $dataset = $this->extractDatasetPayload($datasets[0]);
        self::assertNotSame('', $this->extractDatasetId($dataset));
    }

    #[Test]
    public function itGetsADatasetById(): void
    {
        $datasetId = $this->getDatasetId();

        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->getDataset(
                $datasetId,
                [],
                CalendrierJaneClient::FETCH_RESPONSE,
            ),
        );

        $dataset = $this->extractDatasetPayload($data);
        self::assertSame($datasetId, $this->extractDatasetId($dataset));
    }

    #[Test]
    public function itGetsRecords(): void
    {
        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->getRecords(
                $this->getDatasetId(),
                ['limit' => self::LIMIT],
                CalendrierJaneClient::FETCH_RESPONSE,
            ),
        );

        $records = $this->extractRecordWrappers($data);
        $record = $this->extractRecordPayload($records[0]);
        $fields = $this->extractRecordFields($record);

        self::assertArrayHasKey(self::KEY_DESCRIPTION, $fields);
    }

    #[Test]
    public function itListsExportFormats(): void
    {
        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->listExportFormats(
                CalendrierJaneClient::FETCH_RESPONSE,
            ),
        );

        self::assertContains(self::REL_JSON, $this->extractLinkRels($data));
    }

    #[Test]
    public function itListsDatasetExportFormats(): void
    {
        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->listDatasetExportFormats(
                $this->getDatasetId(),
                CalendrierJaneClient::FETCH_RESPONSE,
            ),
        );

        self::assertContains(self::REL_JSON, $this->extractLinkRels($data));
    }

    #[Test]
    public function itGetsDatasetsFacets(): void
    {
        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->getDatasetsFacets(
                [],
                CalendrierJaneClient::FETCH_RESPONSE,
            ),
        );

        $facets = $this->extractFacets($data);
        self::assertNotEmpty($facets);
    }

    #[Test]
    public function itGetsRecordsFacets(): void
    {
        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->getRecordsFacets(
                $this->getDatasetId(),
                [],
                CalendrierJaneClient::FETCH_RESPONSE,
            ),
        );

        $facets = $this->extractFacets($data);
        self::assertNotEmpty($facets);
    }

    #[Test]
    public function itGetsDatasetAttachments(): void
    {
        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->getDatasetAttachments(
                $this->getDatasetId(),
                CalendrierJaneClient::FETCH_RESPONSE,
            ),
        );

        self::assertArrayHasKey(self::KEY_ATTACHMENTS, $data);
        self::assertIsArray($data[self::KEY_ATTACHMENTS]);
    }

    #[Test]
    public function itGetsARecordById(): void
    {
        $recordId = $this->getRecordId();

        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->getRecord(
                $this->getDatasetId(),
                $recordId,
                [],
                CalendrierJaneClient::FETCH_RESPONSE,
            ),
        );

        $record = $this->extractRecordPayload($data);
        self::assertArrayHasKey(self::KEY_RECORD_ID, $record);
        self::assertSame($recordId, $record[self::KEY_RECORD_ID]);
    }

    #[Test]
    public function itExportsCatalogDatasetsAsJson(): void
    {
        $datasets = $this->decodeListJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->exportDatasets(
                self::JSON_FORMAT,
                ['limit' => 1],
                CalendrierJaneClient::FETCH_RESPONSE,
            ),
        );

        self::assertArrayHasKey(self::KEY_DATASET_ID, $datasets[0]);
    }

    #[Test]
    public function itExportsCatalogAsCsv(): void
    {
        $response = $this->requestResponse(
            fn (): ResponseInterface => $this->client->getClient()->exportCatalogCSV(
                ['with_bom' => false],
                CalendrierJaneClient::FETCH_RESPONSE,
            ),
        );

        $this->assertCsvResponse($response, self::CSV_DATASET_ID_HEADER);
    }

    #[Test]
    public function itExportsCatalogAsDcat(): void
    {
        $response = $this->requestResponse(
            fn (): ResponseInterface => $this->client->getClient()->exportCatalogDCAT(
                self::DCAT_FORMAT_SUFFIX,
                [],
                CalendrierJaneClient::FETCH_RESPONSE,
            ),
        );

        $this->assertRdfResponse($response);
    }

    #[Test]
    public function itExportsDatasetRecordsAsJson(): void
    {
        $records = $this->decodeListJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->exportRecords(
                $this->getDatasetId(),
                self::JSON_FORMAT,
                ['limit' => 1],
                CalendrierJaneClient::FETCH_RESPONSE,
            ),
        );

        self::assertArrayHasKey(self::KEY_DESCRIPTION, $records[0]);
    }

    #[Test]
    public function itExportsDatasetRecordsAsCsv(): void
    {
        $response = $this->requestResponse(
            fn (): ResponseInterface => $this->client->getClient()->exportRecordsCSV(
                $this->getDatasetId(),
                ['with_bom' => false],
                CalendrierJaneClient::FETCH_RESPONSE,
            ),
        );

        $this->assertCsvResponse($response, self::KEY_DESCRIPTION);
    }

    /**
     * @param callable(): ResponseInterface $request
     */
    private function requestResponse(callable $request): ResponseInterface
    {
        /** @var ResponseInterface $response */
        $response = $this->callApi($request);
        $this->assertSuccessfulResponse($response);

        return $response;
    }

    /**
     * @param callable(): ResponseInterface $request
     *
     * @return array<array-key, mixed>
     */
    private function decodeJsonResponse(callable $request): array
    {
        return $this->decodeResponse($this->requestResponse($request));
    }

    /**
     * @param callable(): ResponseInterface $request
     *
     * @return list<array<string, mixed>>
     */
    private function decodeListJsonResponse(callable $request): array
    {
        $data = $this->decodeJsonResponse($request);
        self::assertTrue(array_is_list($data), 'Expected a JSON list response.');

        /** @var list<array<string, mixed>> $list */
        $list = $data;
        self::assertNotEmpty($list);

        return $list;
    }

    private function getDatasetId(): string
    {
        if ($this->datasetId !== null) {
            return $this->datasetId;
        }

        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->getDatasets(
                [
                    'limit' => 1,
                    'where' => self::DATASET_FILTER,
                ],
                CalendrierJaneClient::FETCH_RESPONSE,
            ),
        );

        $datasets = $this->extractDatasetWrappers($data);
        $dataset = $this->extractDatasetPayload($datasets[0]);
        $datasetId = $this->extractDatasetId($dataset);
        $this->datasetId = $datasetId === self::PREFERRED_DATASET_ID ? $datasetId : self::PREFERRED_DATASET_ID;

        return $this->datasetId;
    }

    private function getRecordId(): string
    {
        if ($this->recordId !== null) {
            return $this->recordId;
        }

        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->getRecords(
                $this->getDatasetId(),
                ['limit' => 1],
                CalendrierJaneClient::FETCH_RESPONSE,
            ),
        );

        $records = $this->extractRecordWrappers($data);
        $record = $this->extractRecordPayload($records[0]);

        self::assertArrayHasKey(self::KEY_RECORD_ID, $record);
        self::assertIsString($record[self::KEY_RECORD_ID]);
        $this->recordId = $record[self::KEY_RECORD_ID];

        return $this->recordId;
    }

    /**
     * @param array<array-key, mixed> $data
     *
     * @return list<array<string, mixed>>
     */
    private function extractDatasetWrappers(array $data): array
    {
        self::assertArrayHasKey(self::KEY_DATASETS, $data);
        self::assertIsArray($data[self::KEY_DATASETS]);

        /** @var list<array<string, mixed>> $datasets */
        $datasets = $data[self::KEY_DATASETS];
        self::assertNotEmpty($datasets);

        return $datasets;
    }

    /**
     * @param array<array-key, mixed> $data
     *
     * @return array<array-key, mixed>
     */
    private function extractDatasetPayload(array $data): array
    {
        self::assertArrayHasKey(self::KEY_DATASET, $data);
        self::assertIsArray($data[self::KEY_DATASET]);

        /** @var array<string, mixed> $dataset */
        $dataset = $data[self::KEY_DATASET];

        return $dataset;
    }

    /**
     * @param array<array-key, mixed> $dataset
     */
    private function extractDatasetId(array $dataset): string
    {
        self::assertArrayHasKey(self::KEY_DATASET_ID, $dataset);
        self::assertIsString($dataset[self::KEY_DATASET_ID]);

        return $dataset[self::KEY_DATASET_ID];
    }

    /**
     * @param array<array-key, mixed> $data
     *
     * @return list<array<string, mixed>>
     */
    private function extractRecordWrappers(array $data): array
    {
        self::assertArrayHasKey(self::KEY_RECORDS, $data);
        self::assertIsArray($data[self::KEY_RECORDS]);

        /** @var list<array<string, mixed>> $records */
        $records = $data[self::KEY_RECORDS];
        self::assertNotEmpty($records);

        return $records;
    }

    /**
     * @param array<array-key, mixed> $data
     *
     * @return array<array-key, mixed>
     */
    private function extractRecordPayload(array $data): array
    {
        self::assertArrayHasKey(self::KEY_RECORD, $data);
        self::assertIsArray($data[self::KEY_RECORD]);

        /** @var array<string, mixed> $record */
        $record = $data[self::KEY_RECORD];

        return $record;
    }

    /**
     * @param array<array-key, mixed> $record
     *
     * @return array<array-key, mixed>
     */
    private function extractRecordFields(array $record): array
    {
        self::assertArrayHasKey(self::KEY_FIELDS, $record);
        self::assertIsArray($record[self::KEY_FIELDS]);

        /** @var array<string, mixed> $fields */
        $fields = $record[self::KEY_FIELDS];

        return $fields;
    }

    /**
     * @param array<array-key, mixed> $data
     *
     * @return list<array<string, mixed>>
     */
    private function extractFacets(array $data): array
    {
        self::assertArrayHasKey(self::KEY_FACETS, $data);
        self::assertIsArray($data[self::KEY_FACETS]);

        /** @var list<array<string, mixed>> $facets */
        $facets = $data[self::KEY_FACETS];

        return $facets;
    }

    /**
     * @param array<array-key, mixed> $data
     *
     * @return list<string>
     */
    private function extractLinkRels(array $data): array
    {
        self::assertArrayHasKey(self::KEY_LINKS, $data);
        self::assertIsArray($data[self::KEY_LINKS]);

        $rels = [];
        foreach ($data[self::KEY_LINKS] as $link) {
            self::assertIsArray($link);
            self::assertArrayHasKey(self::KEY_REL, $link);
            self::assertIsString($link[self::KEY_REL]);
            $rels[] = $link[self::KEY_REL];
        }

        self::assertNotEmpty($rels);

        return $rels;
    }

    private function assertCsvResponse(ResponseInterface $response, string $expectedFragment): void
    {
        self::assertStringContainsString(self::CSV_CONTENT_TYPE, $response->getHeaderLine(self::HEADER_CONTENT_TYPE));

        $body = $this->readBodySnippet($response);
        self::assertNotSame('', $body);
        self::assertStringContainsString($expectedFragment, $body);
    }

    private function assertRdfResponse(ResponseInterface $response): void
    {
        self::assertStringContainsString(self::RDF_CONTENT_TYPE, $response->getHeaderLine(self::HEADER_CONTENT_TYPE));
        self::assertNotSame('', $this->readBodySnippet($response));
    }

    private function readBodySnippet(ResponseInterface $response): string
    {
        $body = $response->getBody();
        if ($body->isSeekable()) {
            $body->rewind();
        }

        return $body->read(self::BODY_SNIPPET_BYTES);
    }
}
