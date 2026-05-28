<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Integration\DataGouv;

use Ecourty\DataGouv\DataGouv\Client\Model\DataservicePage;
use Ecourty\DataGouv\DataGouv\Client\Model\DataserviceRead;
use Ecourty\DataGouv\DataGouv\Client\Model\FollowPage;
use Ecourty\DataGouv\DataGouv\DataGouvClient;
use Ecourty\DataGouv\Tests\Integration\IntegrationTestCase;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\Test;

#[Group('integration')]
final class DataservicesIntegrationTest extends IntegrationTestCase
{
    private DataGouvClient $client;

    protected function setUp(): void
    {
        $this->client = new DataGouvClient();
    }

    #[Test]
    public function itListsDataservicesAndFetchesOneById(): void
    {
        $page = $this->callApi(fn () => $this->client->dataservices->listDataservices(['q' => 'api', 'page_size' => 5]));

        self::assertInstanceOf(DataservicePage::class, $page);
        self::assertNotEmpty($page->getData());
        self::assertGreaterThan(0, $page->getTotal());

        /** @var DataserviceRead $first */
        $first = $page->getData()[0];
        self::assertNotEmpty($first->getId());
        self::assertNotEmpty($first->getTitle());
        self::assertNotEmpty($first->getSlug());

        $dataservice = $this->callApi(fn () => $this->client->dataservices->getDataservice($first->getId()));

        self::assertInstanceOf(DataserviceRead::class, $dataservice);
        self::assertSame($first->getId(), $dataservice->getId());
        self::assertSame($first->getTitle(), $dataservice->getTitle());
    }

    #[Test]
    public function itListsDataserviceFollowers(): void
    {
        $dataservice = $this->fetchFirstDataservice();

        $followers = $this->callApi(
            fn () => $this->client->dataservices->listDataserviceFollowers($dataservice->getId(), ['page_size' => 5]),
        );

        self::assertInstanceOf(FollowPage::class, $followers);
        self::assertGreaterThanOrEqual(0, $followers->getTotal());
    }

    #[Test]
    public function itCallsTheRecentDataservicesAtomFeedEndpoint(): void
    {
        $feed = $this->callApi(fn () => $this->client->dataservices->recentDataservicesAtomFeed());

        self::assertNull($feed);
    }

    private function fetchFirstDataservice(): DataserviceRead
    {
        $page = $this->callApi(fn () => $this->client->dataservices->listDataservices(['page_size' => 5]));

        self::assertInstanceOf(DataservicePage::class, $page);

        if ($page->getData() === []) {
            self::markTestSkipped('No public dataservice found.');
        }

        /** @var DataserviceRead $dataservice */
        $dataservice = $page->getData()[0];

        return $dataservice;
    }
}
