<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Integration\DataGouv;

use Ecourty\DataGouv\DataGouv\Client\Model\Activity;
use Ecourty\DataGouv\DataGouv\Client\Model\ActivityPage;
use Ecourty\DataGouv\DataGouv\Client\Model\SiteRead;
use Ecourty\DataGouv\DataGouv\DataGouvClient;
use Ecourty\DataGouv\Tests\Integration\IntegrationTestCase;
use PHPUnit\Framework\Attributes\Group;

#[Group('integration')]
final class SiteIntegrationTest extends IntegrationTestCase
{
    private DataGouvClient $client;

    protected function setUp(): void
    {
        $this->client = new DataGouvClient();
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function itGetsTheSiteAndRecentActivity(): void
    {
        $site = $this->callApi(fn () => $this->client->site->getSite());
        $activity = $this->callApi(fn () => $this->client->site->activity(['page_size' => 5]));

        self::assertInstanceOf(SiteRead::class, $site);
        self::assertNotEmpty($site->getId());
        self::assertNotEmpty($site->getTitle());

        self::assertInstanceOf(ActivityPage::class, $activity);
        self::assertNotEmpty($activity->getData());
        self::assertGreaterThan(0, $activity->getTotal());
        self::assertInstanceOf(Activity::class, $activity->getData()[0]);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function itCallsTheStructuredSiteEndpoints(): void
    {
        $jsonLdContext = $this->callApi(fn () => $this->client->site->getSiteJsonLdContext());
        $dataPortal = $this->callApi(fn () => $this->client->site->getSiteDataPortal('jsonld'));
        $rdfCatalog = $this->callApi(fn () => $this->client->site->getSiteRdfCatalog(['page_size' => 1]));
        $rdfCatalogFormat = $this->callApi(fn () => $this->client->site->getSiteRdfCatalogFormat('ttl', ['page_size' => 1]));

        self::assertNull($jsonLdContext);
        self::assertNull($dataPortal);
        self::assertNull($rdfCatalog);
        self::assertNull($rdfCatalogFormat);
    }
}
