<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Integration\AnnuaireServicePublic;

use Ecourty\DataGouv\DataServices\AnnuaireServicePublic\AnnuaireServicePublicClient;
use Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Client as AnnuaireJaneClient;
use Ecourty\DataGouv\Tests\Integration\OdsIntegrationTestCase;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\Test;
use Psr\Http\Message\ResponseInterface;

#[Group('integration')]
final class AnnuaireServicePublicIntegrationTest extends OdsIntegrationTestCase
{
    private const int LIMIT = 3;
    private const string DATASET_ID = 'api-lannuaire-administration';
    private const string JSON_FORMAT = 'json';
    private const string DCAT_FORMAT_SUFFIX = '';
    private const string SELECT_FIELDS = 'nom,type_organisme';
    private const string KEY_RESULTS = 'results';
    private const string KEY_TOTAL_COUNT = 'total_count';
    private const string KEY_LINKS = 'links';
    private const string KEY_REL = 'rel';
    private const string KEY_DATASET_ID = 'dataset_id';
    private const string KEY_NOM = 'nom';
    private const string KEY_TYPE_ORGANISME = 'type_organisme';
    private const string KEY_FACETS = 'facets';
    private const string KEY_ATTACHMENTS = 'attachments';
    private const string REL_JSON = 'json';
    private const string CSV_DATASET_ID_HEADER = 'datasetid';

    private AnnuaireServicePublicClient $client;

    protected function setUp(): void
    {
        $this->client = new AnnuaireServicePublicClient();
    }

    #[Test]
    public function itGetsCatalogDatasets(): void
    {
        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->getDatasets(
                ['limit' => self::LIMIT],
                AnnuaireJaneClient::FETCH_RESPONSE,
            ),
        );

        self::assertArrayHasKey(self::KEY_TOTAL_COUNT, $data);
        self::assertIsInt($data[self::KEY_TOTAL_COUNT]);
        self::assertGreaterThanOrEqual(1, $data[self::KEY_TOTAL_COUNT]);

        $datasets = $this->extractResults($data);
        self::assertArrayHasKey(self::KEY_DATASET_ID, $datasets[0]);
    }

    #[Test]
    public function itGetsAdministrationRecords(): void
    {
        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->getRecords(
                self::DATASET_ID,
                [
                    'limit' => self::LIMIT,
                    'select' => self::SELECT_FIELDS,
                ],
                AnnuaireJaneClient::FETCH_RESPONSE,
            ),
        );

        $records = $this->extractResults($data);
        $firstRecord = $records[0];

        self::assertArrayHasKey(self::KEY_NOM, $firstRecord);
        self::assertArrayHasKey(self::KEY_TYPE_ORGANISME, $firstRecord);
    }

    #[Test]
    public function itGetsDatasetMetadata(): void
    {
        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->getDataset(
                self::DATASET_ID,
                [],
                AnnuaireJaneClient::FETCH_RESPONSE,
            ),
        );

        self::assertArrayHasKey(self::KEY_DATASET_ID, $data);
        self::assertSame(self::DATASET_ID, $data[self::KEY_DATASET_ID]);
    }

    #[Test]
    public function itGetsDatasetsFacets(): void
    {
        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->getDatasetsFacets(
                [],
                AnnuaireJaneClient::FETCH_RESPONSE,
            ),
        );

        $facets = $this->extractFacets($data);
        self::assertNotEmpty($facets);
    }

    #[Test]
    public function itListsExportFormats(): void
    {
        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->listExportFormats(
                AnnuaireJaneClient::FETCH_RESPONSE,
            ),
        );

        self::assertContains(self::REL_JSON, $this->extractLinkRels($data));
    }

    #[Test]
    public function itListsDatasetExportFormats(): void
    {
        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->listDatasetExportFormats(
                self::DATASET_ID,
                AnnuaireJaneClient::FETCH_RESPONSE,
            ),
        );

        self::assertContains(self::REL_JSON, $this->extractLinkRels($data));
    }

    #[Test]
    public function itGetsDatasetAttachments(): void
    {
        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->getDatasetAttachments(
                self::DATASET_ID,
                AnnuaireJaneClient::FETCH_RESPONSE,
            ),
        );

        self::assertArrayHasKey(self::KEY_ATTACHMENTS, $data);
        self::assertIsArray($data[self::KEY_ATTACHMENTS]);
    }

    #[Test]
    public function itGetsRecordsFacets(): void
    {
        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->getRecordsFacets(
                self::DATASET_ID,
                [],
                AnnuaireJaneClient::FETCH_RESPONSE,
            ),
        );

        $facets = $this->extractFacets($data);
        self::assertNotEmpty($facets);
    }

    #[Test]
    public function itExportsCatalogDatasetsAsJson(): void
    {
        $datasets = $this->decodeListJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->exportDatasets(
                self::JSON_FORMAT,
                ['limit' => 1],
                AnnuaireJaneClient::FETCH_RESPONSE,
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
                AnnuaireJaneClient::FETCH_RESPONSE,
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
                AnnuaireJaneClient::FETCH_RESPONSE,
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
                [
                    'limit' => 1,
                    'select' => self::SELECT_FIELDS,
                ],
                AnnuaireJaneClient::FETCH_RESPONSE,
            ),
        );

        self::assertArrayHasKey(self::KEY_NOM, $records[0]);
    }

    #[Test]
    public function itExportsDatasetRecordsAsCsv(): void
    {
        $response = $this->requestResponse(
            fn (): ResponseInterface => $this->client->getClient()->exportRecordsCSV(
                self::DATASET_ID,
                ['with_bom' => false],
                AnnuaireJaneClient::FETCH_RESPONSE,
            ),
        );

        $this->assertCsvResponse($response, self::KEY_NOM);
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

    /**
     * @param array<array-key, mixed> $data
     *
     * @return list<array<string, mixed>>
     */
    private function extractResults(array $data): array
    {
        self::assertArrayHasKey(self::KEY_RESULTS, $data);
        self::assertIsArray($data[self::KEY_RESULTS]);

        /** @var list<array<string, mixed>> $results */
        $results = $data[self::KEY_RESULTS];
        self::assertNotEmpty($results);

        return $results;
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
