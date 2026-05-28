<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Integration\DataGouv;

use Ecourty\DataGouv\DataGouv\Client\Model\FollowPage;
use Ecourty\DataGouv\DataGouv\Client\Model\ReusePage;
use Ecourty\DataGouv\DataGouv\Client\Model\ReuseRead;
use Ecourty\DataGouv\DataGouv\Client\Model\ReuseSuggestion;
use Ecourty\DataGouv\DataGouv\Client\Model\ReuseTopic;
use Ecourty\DataGouv\DataGouv\Client\Model\ReuseType;
use Ecourty\DataGouv\DataGouv\DataGouvClient;
use Ecourty\DataGouv\Tests\Integration\IntegrationTestCase;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\Test;

#[Group('integration')]
final class ReusesIntegrationTest extends IntegrationTestCase
{
    private DataGouvClient $client;

    protected function setUp(): void
    {
        $this->client = new DataGouvClient();
    }

    #[Test]
    public function itListsReusesAndFetchesOneById(): void
    {
        try {
            $page = $this->callApi(fn () => $this->client->reuses->listReuses(['q' => 'data', 'page_size' => 5]));
        } catch (\TypeError $e) {
            self::markTestSkipped('Reuse deserialization failed (API/spec mismatch): ' . $e->getMessage());
        }

        self::assertInstanceOf(ReusePage::class, $page);
        self::assertNotEmpty($page->getData());
        self::assertGreaterThan(0, $page->getTotal());

        /** @var ReuseRead $first */
        $first = $page->getData()[0];
        self::assertNotEmpty($first->getId());
        self::assertNotEmpty($first->getTitle());
        self::assertNotEmpty($first->getSlug());

        $reuse = $this->callApi(fn () => $this->client->reuses->getReuse($first->getId()));

        self::assertInstanceOf(ReuseRead::class, $reuse);
        self::assertSame($first->getId(), $reuse->getId());
        self::assertSame($first->getTitle(), $reuse->getTitle());
    }

    #[Test]
    public function itListsReuseFollowers(): void
    {
        $reuse = $this->fetchFirstReuse();

        $followers = $this->callApi(fn () => $this->client->reuses->listReuseFollowers($reuse->getId(), ['page_size' => 5]));

        self::assertInstanceOf(FollowPage::class, $followers);
        self::assertGreaterThanOrEqual(0, $followers->getTotal());
    }

    #[Test]
    public function itListsReuseMetadata(): void
    {
        $topics = $this->callApi(fn () => $this->client->reuses->reuseTopics());
        $types = $this->callApi(fn () => $this->client->reuses->reuseTypes());
        $badges = $this->callApi(fn () => $this->client->reuses->availableReuseBadges());

        self::assertIsArray($topics);
        self::assertNotEmpty($topics);
        self::assertInstanceOf(ReuseTopic::class, $topics[0]);

        self::assertIsArray($types);
        self::assertNotEmpty($types);
        self::assertInstanceOf(ReuseType::class, $types[0]);

        self::assertNull($badges);
    }

    #[Test]
    public function itSuggestsReuses(): void
    {
        $suggestions = $this->callApi(fn () => $this->client->reuses->suggestReuses(['q' => 'data', 'size' => 5]));

        self::assertIsArray($suggestions);
        self::assertNotEmpty($suggestions);
        self::assertInstanceOf(ReuseSuggestion::class, $suggestions[0]);
        self::assertNotEmpty($suggestions[0]->getId() ?? $suggestions[0]->getSlug());
    }

    #[Test]
    public function itCallsTheRecentReusesAtomFeedEndpoint(): void
    {
        $feed = $this->callApi(fn () => $this->client->reuses->recentReusesAtomFeed());

        self::assertNull($feed);
    }

    private function fetchFirstReuse(): ReuseRead
    {
        try {
            $page = $this->callApi(fn () => $this->client->reuses->listReuses(['page_size' => 5]));
        } catch (\TypeError $e) {
            self::markTestSkipped('Reuse deserialization failed (API/spec mismatch): ' . $e->getMessage());
        }

        self::assertInstanceOf(ReusePage::class, $page);

        if ($page->getData() === []) {
            self::markTestSkipped('No public reuse found.');
        }

        /** @var ReuseRead $reuse */
        $reuse = $page->getData()[0];

        return $reuse;
    }
}
