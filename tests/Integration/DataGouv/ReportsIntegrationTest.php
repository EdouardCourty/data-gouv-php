<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Integration\DataGouv;

use Ecourty\DataGouv\DataGouv\Client\Model\ReportPage;
use Ecourty\DataGouv\DataGouv\Client\Model\ReportRead;
use Ecourty\DataGouv\DataGouv\DataGouvClient;
use Ecourty\DataGouv\Tests\Integration\IntegrationTestCase;
use PHPUnit\Framework\Attributes\Group;

#[Group('integration')]
final class ReportsIntegrationTest extends IntegrationTestCase
{
    private DataGouvClient $client;

    protected function setUp(): void
    {
        $this->client = new DataGouvClient();
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function itListsReportReasons(): void
    {
        $reasons = $this->callApi(fn () => $this->client->reports->listReportsReasons());

        self::assertIsArray($reasons);
        self::assertNotEmpty($reasons);
        self::assertInstanceOf(\stdClass::class, $reasons[0]);
        self::assertTrue(property_exists($reasons[0], 'label'));
        self::assertTrue(property_exists($reasons[0], 'value'));
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function itListsReportsAndFetchesOneWhenPublicReportsAreAvailable(): void
    {
        $page = $this->callApi(fn () => $this->client->reports->listReports(['page_size' => 5]));

        if ($page === null) {
            self::markTestSkipped('The reports listing did not return a public deserializable page.');
        }

        self::assertInstanceOf(ReportPage::class, $page);

        if ($page->getData() === []) {
            self::markTestSkipped('No public report available to fetch by id.');
        }

        /** @var ReportRead $first */
        $first = $page->getData()[0];
        $report = $this->callApi(fn () => $this->client->reports->getReport($first->getId()));

        self::assertInstanceOf(ReportRead::class, $report);
        self::assertSame($first->getId(), $report->getId());
    }
}
