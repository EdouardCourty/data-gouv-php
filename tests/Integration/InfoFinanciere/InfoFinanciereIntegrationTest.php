<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Integration\InfoFinanciere;

use Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Client as InfoFinanciereJaneClient;
use Ecourty\DataGouv\DataServices\InfoFinanciere\InfoFinanciereClient;
use Ecourty\DataGouv\Tests\Integration\OdsIntegrationTestCase;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\Test;
use Psr\Http\Message\ResponseInterface;

#[Group('integration')]
final class InfoFinanciereIntegrationTest extends OdsIntegrationTestCase
{
    private const int LIMIT = 3;
    private const string DATASET_ID = 'societes-cac40';
    private const string JSON_FORMAT = 'json';
    private const string DCAT_FORMAT_SUFFIX = '';
    private const string KEY_DATASETS = 'datasets';
    private const string KEY_DATASET = 'dataset';
    private const string KEY_DATASET_ID = 'dataset_id';
    private const string KEY_RECORDS = 'records';
    private const string KEY_RECORD = 'record';
    private const string KEY_RECORD_ID = 'id';
    private const string KEY_FIELDS = 'fields';
    private const string KEY_NAME = 'name';
    private const string KEY_LINKS = 'links';
    private const string KEY_REL = 'rel';
    private const string KEY_FACETS = 'facets';
    private const string KEY_ATTACHMENTS = 'attachments';
    private const string REL_JSON = 'json';
    private const string CSV_DATASET_ID_HEADER = 'datasetid';

    private InfoFinanciereClient $client;
    private ?string $recordId = null;

    protected function setUp(): void
    {
        $this->client = new InfoFinanciereClient(apiKey: null);
    }

    #[Test]
    public function itGetsCatalogDatasets(): void
    {
        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->getDatasets(
                ['limit' => self::LIMIT],
                InfoFinanciereJaneClient::FETCH_RESPONSE,
            ),
        );

        $datasets = $this->extractDatasetWrappers($data);
        $dataset = $this->extractDatasetPayload($datasets[0]);
        self::assertArrayHasKey(self::KEY_DATASET_ID, $dataset);
    }

    #[Test]
    public function itGetsDatasetRecords(): void
    {
        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->getRecords(
                self::DATASET_ID,
                ['limit' => self::LIMIT],
                InfoFinanciereJaneClient::FETCH_RESPONSE,
            ),
        );

        $records = $this->extractRecordWrappers($data);
        $record = $this->extractRecordPayload($records[0]);
        $fields = $this->extractRecordFields($record);

        self::assertArrayHasKey(self::KEY_NAME, $fields);
    }

    #[Test]
    public function itGetsDatasetMetadata(): void
    {
        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->getDataset(
                self::DATASET_ID,
                [],
                InfoFinanciereJaneClient::FETCH_RESPONSE,
            ),
        );

        $dataset = $this->extractDatasetPayload($data);
        self::assertSame(self::DATASET_ID, $this->extractDatasetId($dataset));
    }

    #[Test]
    public function itListsExportFormats(): void
    {
        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->listExportFormats(
                InfoFinanciereJaneClient::FETCH_RESPONSE,
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
                InfoFinanciereJaneClient::FETCH_RESPONSE,
            ),
        );

        $facets = $this->extractFacets($data);
        self::assertNotEmpty($facets);
    }

    #[Test]
    public function itListsDatasetExportFormats(): void
    {
        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->listDatasetExportFormats(
                self::DATASET_ID,
                InfoFinanciereJaneClient::FETCH_RESPONSE,
            ),
        );

        self::assertContains(self::REL_JSON, $this->extractLinkRels($data));
    }

    #[Test]
    public function itGetsRecordsFacets(): void
    {
        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->getRecordsFacets(
                self::DATASET_ID,
                [],
                InfoFinanciereJaneClient::FETCH_RESPONSE,
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
                self::DATASET_ID,
                InfoFinanciereJaneClient::FETCH_RESPONSE,
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
                self::DATASET_ID,
                $recordId,
                [],
                InfoFinanciereJaneClient::FETCH_RESPONSE,
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
                InfoFinanciereJaneClient::FETCH_RESPONSE,
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
                InfoFinanciereJaneClient::FETCH_RESPONSE,
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
                InfoFinanciereJaneClient::FETCH_RESPONSE,
            ),
        );

        $this->assertRdfResponse($response);
    }

    #[Test]
    public function itExportsDatasetRecordsAsJson(): void
    {
        $records = $this->decodeListJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->exportRecords(
                self::DATASET_ID,
                self::JSON_FORMAT,
                ['limit' => 1],
                InfoFinanciereJaneClient::FETCH_RESPONSE,
            ),
        );

        self::assertArrayHasKey(self::KEY_NAME, $records[0]);
    }

    #[Test]
    public function itExportsDatasetRecordsAsCsv(): void
    {
        $response = $this->requestResponse(
            fn (): ResponseInterface => $this->client->getClient()->exportRecordsCSV(
                self::DATASET_ID,
                ['with_bom' => false],
                InfoFinanciereJaneClient::FETCH_RESPONSE,
            ),
        );

        $this->assertCsvResponse($response, self::KEY_NAME);
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

    private function getRecordId(): string
    {
        if ($this->recordId !== null) {
            return $this->recordId;
        }

        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->getRecords(
                self::DATASET_ID,
                ['limit' => 1],
                InfoFinanciereJaneClient::FETCH_RESPONSE,
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
}
