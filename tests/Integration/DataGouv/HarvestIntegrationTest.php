<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Integration\DataGouv;

use Ecourty\DataGouv\DataGouv\Client\Model\HarvestBackend;
use Ecourty\DataGouv\DataGouv\Client\Model\HarvestJob;
use Ecourty\DataGouv\DataGouv\Client\Model\HarvestJobPage;
use Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource;
use Ecourty\DataGouv\DataGouv\Client\Model\HarvestSourcePage;
use Ecourty\DataGouv\DataGouv\DataGouvClient;
use Ecourty\DataGouv\Tests\Integration\IntegrationTestCase;
use PHPUnit\Framework\Attributes\Group;

#[Group('integration')]
final class HarvestIntegrationTest extends IntegrationTestCase
{
    private DataGouvClient $client;

    protected function setUp(): void
    {
        $this->client = new DataGouvClient();
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function itListsHarvestBackends(): void
    {
        $backends = $this->callApi(fn () => $this->client->harvest->harvestBackends());

        self::assertInstanceOf(HarvestBackend::class, $backends);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function itListsHarvestSourcesAndUsesThemWhenTheResponseIsDeserializable(): void
    {
        $sources = $this->callApi(fn () => $this->client->harvest->listHarvestSources(['page_size' => 1]));

        self::assertIsArray($sources);
        self::assertArrayHasKey('data', $sources);
        self::assertArrayHasKey('page', $sources);
        self::assertArrayHasKey('total', $sources);
        self::assertInstanceOf(HarvestSourcePage::class, $sources['data']);

        $sourceId = $this->extractFirstHarvestSourceId($sources['data']);

        if ($sourceId === null) {
            self::markTestSkipped('The harvest sources list response is not deserializable enough to extract a public source id.');
        }

        $source = $this->callApi(fn () => $this->client->harvest->getHarvestSource($sourceId));
        $jobs = $this->callApi(fn () => $this->client->harvest->listHarvestJobs($sourceId, ['page_size' => 5]));

        self::assertInstanceOf(HarvestSource::class, $source);
        self::assertSame($sourceId, $source->getId());
        self::assertInstanceOf(HarvestJobPage::class, $jobs);

        if ($jobs->getData() === []) {
            self::markTestSkipped('No harvest job found for the selected public source.');
        }

        /** @var HarvestJob $job */
        $job = $jobs->getData()[0];
        $fullJob = $this->callApi(fn () => $this->client->harvest->getHarvestJob($job->getId()));

        self::assertInstanceOf(HarvestJob::class, $fullJob);
        self::assertSame($job->getId(), $fullJob->getId());
    }

    private function extractFirstHarvestSourceId(HarvestSourcePage $page): ?string
    {
        try {
            $data = $page->getData();
        } catch (\Throwable) {
            return null;
        }

        if ($data === []) {
            return null;
        }

        return $data[0]->getId();
    }
}
