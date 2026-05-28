<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Integration\DataGouv;

use Ecourty\DataGouv\DataGouv\Client\Model\Job;
use Ecourty\DataGouv\DataGouv\DataGouvClient;
use Ecourty\DataGouv\Tests\Integration\IntegrationTestCase;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\Test;

#[Group('integration')]
final class WorkersIntegrationTest extends IntegrationTestCase
{
    private DataGouvClient $client;

    protected function setUp(): void
    {
        $this->client = new DataGouvClient();
    }

    #[Test]
    public function itListsJobsAndFetchesOneById(): void
    {
        $jobs = $this->callApi(fn () => $this->client->workers->listJobs());

        self::assertIsArray($jobs);
        self::assertNotEmpty($jobs);
        self::assertInstanceOf(Job::class, $jobs[0]);

        /** @var Job $first */
        $first = $jobs[0];

        if ($first->getId() === null) {
            self::markTestSkipped('The first public worker job has no identifier.');
        }

        $job = $this->callApi(fn () => $this->client->workers->getJobApi($first->getId()));

        self::assertInstanceOf(Job::class, $job);
        self::assertSame($first->getId(), $job->getId());
    }

    #[Test]
    public function itListsTheJobReferenceCatalog(): void
    {
        $reference = $this->callApi(fn () => $this->client->workers->getJobsReferenceApi());

        self::assertIsArray($reference);
        self::assertNotEmpty($reference);
        self::assertIsString($reference[0]);
    }
}
