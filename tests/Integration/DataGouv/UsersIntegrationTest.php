<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Integration\DataGouv;

use Ecourty\DataGouv\DataGouv\Client\Model\FollowPage;
use Ecourty\DataGouv\DataGouv\Client\Model\User;
use Ecourty\DataGouv\DataGouv\Client\Model\UserPage;
use Ecourty\DataGouv\DataGouv\Client\Model\UserRole;
use Ecourty\DataGouv\DataGouv\Client\Model\UserSuggestion;
use Ecourty\DataGouv\DataGouv\DataGouvClient;
use Ecourty\DataGouv\Tests\Integration\IntegrationTestCase;
use PHPUnit\Framework\Attributes\Group;

#[Group('integration')]
final class UsersIntegrationTest extends IntegrationTestCase
{
    private DataGouvClient $client;

    protected function setUp(): void
    {
        $this->client = new DataGouvClient();
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function itListsUserRolesAndSuggestsUsers(): void
    {
        $roles = $this->callApi(fn () => $this->client->users->userRoles());
        $suggestions = $this->callApi(fn () => $this->client->users->suggestUsers(['q' => 'data', 'size' => '5']));

        self::assertIsArray($roles);
        self::assertNotEmpty($roles);
        self::assertInstanceOf(UserRole::class, $roles[0]);

        self::assertIsArray($suggestions);
        self::assertNotEmpty($suggestions);
        self::assertInstanceOf(UserSuggestion::class, $suggestions[0]);
        self::assertNotEmpty($suggestions[0]->getId());
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function itListsUsersAndFetchesOneWhenTheDirectoryIsPubliclyAvailable(): void
    {
        $page = $this->callApi(fn () => $this->client->users->listUsers(['q' => 'data', 'page_size' => 5]));

        if ($page === null) {
            self::markTestSkipped('The public users directory did not return a deserializable page.');
        }

        self::assertInstanceOf(UserPage::class, $page);

        if ($page->getData() === []) {
            self::markTestSkipped('No public user returned by the directory endpoint.');
        }

        /** @var User $first */
        $first = $page->getData()[0];
        self::assertNotEmpty($first->getId());

        $user = $this->callApi(fn () => $this->client->users->getUser((string) $first->getId()));
        $followers = $this->callApi(fn () => $this->client->users->listUserFollowers((string) $first->getId(), ['page_size' => 5]));

        self::assertInstanceOf(User::class, $user);
        self::assertSame($first->getId(), $user->getId());
        self::assertInstanceOf(FollowPage::class, $followers);
        self::assertGreaterThanOrEqual(0, $followers->getTotal());
    }
}
