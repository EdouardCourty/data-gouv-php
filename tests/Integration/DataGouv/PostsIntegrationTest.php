<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Integration\DataGouv;

use Ecourty\DataGouv\DataGouv\Client\Model\PostPage;
use Ecourty\DataGouv\DataGouv\Client\Model\PostRead;
use Ecourty\DataGouv\DataGouv\DataGouvClient;
use Ecourty\DataGouv\Tests\Integration\IntegrationTestCase;
use PHPUnit\Framework\Attributes\Group;

#[Group('integration')]
final class PostsIntegrationTest extends IntegrationTestCase
{
    private DataGouvClient $client;

    protected function setUp(): void
    {
        $this->client = new DataGouvClient();
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function itListsPostsAndFetchesOneById(): void
    {
        $page = $this->callApi(fn () => $this->client->posts->listPosts(['page_size' => 5]));

        self::assertInstanceOf(PostPage::class, $page);
        self::assertNotEmpty($page->getData());
        self::assertGreaterThan(0, $page->getTotal());

        /** @var PostRead $first */
        $first = $page->getData()[0];
        self::assertNotEmpty($first->getId());
        self::assertNotEmpty($first->getName());
        self::assertNotEmpty($first->getSlug());

        $post = $this->callApi(fn () => $this->client->posts->getPost($first->getId()));

        self::assertInstanceOf(PostRead::class, $post);
        self::assertSame($first->getId(), $post->getId());
        self::assertSame($first->getSlug(), $post->getSlug());
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function itCallsTheRecentPostsAtomFeedEndpoint(): void
    {
        $feed = $this->callApi(fn () => $this->client->posts->recentPostsAtomFeed());

        self::assertNull($feed);
    }
}
