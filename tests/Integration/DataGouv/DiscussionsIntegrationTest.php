<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Integration\DataGouv;

use Ecourty\DataGouv\DataGouv\Client\Model\Discussion;
use Ecourty\DataGouv\DataGouv\Client\Model\DiscussionPage;
use Ecourty\DataGouv\DataGouv\DataGouvClient;
use Ecourty\DataGouv\Tests\Integration\IntegrationTestCase;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\Test;

#[Group('integration')]
final class DiscussionsIntegrationTest extends IntegrationTestCase
{
    private DataGouvClient $client;

    protected function setUp(): void
    {
        $this->client = new DataGouvClient();
    }

    #[Test]
    public function itListsDiscussionsAndFetchesOneById(): void
    {
        $page = $this->callApi(fn () => $this->client->discussions->listDiscussions(['page_size' => 5]));

        self::assertInstanceOf(DiscussionPage::class, $page);
        self::assertNotEmpty($page->getData());
        self::assertGreaterThan(0, $page->getTotal());

        /** @var Discussion $first */
        $first = $page->getData()[0];
        self::assertNotEmpty($first->getId());

        $discussion = $this->callApi(fn () => $this->client->discussions->getDiscussion((string) $first->getId()));

        self::assertInstanceOf(Discussion::class, $discussion);
        self::assertSame($first->getId(), $discussion->getId());
    }
}
