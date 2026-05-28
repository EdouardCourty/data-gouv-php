<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Integration\Education;

use Ecourty\DataGouv\DataServices\Education\Client\Client as EducationJaneClient;
use Ecourty\DataGouv\DataServices\Education\EducationClient;
use Ecourty\DataGouv\Tests\Integration\IntegrationTestCase;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\Test;
use Psr\Http\Message\ResponseInterface;

#[Group('integration')]
final class EducationIntegrationTest extends IntegrationTestCase
{
    private const int LIMIT = 3;
    private const string DATASET_ID = 'fr-en-annuaire-education';
    private const string FILTER_EXPRESSION = 'nom_commune like "Paris"';
    private const string KEY_DATASET = 'dataset';
    private const string KEY_RECORD = 'record';
    private const string KEY_RECORDS = 'records';
    private const string KEY_FIELDS = 'fields';
    private const string KEY_DATASET_ID = 'dataset_id';
    private const string KEY_ESTABLISHMENT_NAME = 'nom_etablissement';

    private EducationClient $client;

    protected function setUp(): void
    {
        $this->client = new EducationClient();
    }

    #[Test]
    public function itGetsEducationRecords(): void
    {
        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->getRecords(
                ['limit' => self::LIMIT],
                EducationJaneClient::FETCH_RESPONSE,
            ),
        );

        $records = $this->extractRecordWrappers($data);
        $record = $this->extractRecordPayload($records[0]);
        $fields = $this->extractRecordFields($record);

        self::assertArrayHasKey(self::KEY_ESTABLISHMENT_NAME, $fields);
        $establishmentName = $fields[self::KEY_ESTABLISHMENT_NAME];
        self::assertIsString($establishmentName);
        self::assertNotSame('', $establishmentName);
    }

    #[Test]
    public function itGetsEducationRecordsWithFilter(): void
    {
        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->getRecords(
                [
                    'where' => [self::FILTER_EXPRESSION],
                    'limit' => self::LIMIT,
                ],
                EducationJaneClient::FETCH_RESPONSE,
            ),
        );

        $records = $this->extractRecordWrappers($data);
        self::assertCount(self::LIMIT, $records);
    }

    #[Test]
    public function itGetsEducationDatasetMetadata(): void
    {
        $data = $this->decodeJsonResponse(
            fn (): ResponseInterface => $this->client->getClient()->getDataset(
                [],
                EducationJaneClient::FETCH_RESPONSE,
            ),
        );

        $dataset = $this->extractDataset($data);
        self::assertArrayHasKey(self::KEY_DATASET_ID, $dataset);
        self::assertSame(self::DATASET_ID, $dataset[self::KEY_DATASET_ID]);
    }

    /**
     * @param callable(): ResponseInterface $request
     *
     * @return array<array-key, mixed>
     */
    private function decodeJsonResponse(callable $request): array
    {
        /** @var ResponseInterface $response */
        $response = $this->callApi($request);
        $this->assertSuccessfulResponse($response);

        return $this->decodeResponse($response);
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
     * @param array<array-key, mixed> $recordWrapper
     *
     * @return array<array-key, mixed>
     */
    private function extractRecordPayload(array $recordWrapper): array
    {
        self::assertArrayHasKey(self::KEY_RECORD, $recordWrapper);
        self::assertIsArray($recordWrapper[self::KEY_RECORD]);

        /** @var array<string, mixed> $record */
        $record = $recordWrapper[self::KEY_RECORD];

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
     * @return array<array-key, mixed>
     */
    private function extractDataset(array $data): array
    {
        self::assertArrayHasKey(self::KEY_DATASET, $data);
        self::assertIsArray($data[self::KEY_DATASET]);

        /** @var array<string, mixed> $dataset */
        $dataset = $data[self::KEY_DATASET];

        return $dataset;
    }
}
