<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Unit;

use Ecourty\DataGouv\DataGouv\Api\DatasetsApi;
use Ecourty\DataGouv\DataGouv\Api\DiscussionsApi;
use Ecourty\DataGouv\DataGouv\Api\MeApi;
use Ecourty\DataGouv\DataGouv\Api\OrganizationsApi;
use Ecourty\DataGouv\DataGouv\DataGouvClient;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;

#[CoversClass(DataGouvClient::class)]
final class DataGouvClientTest extends TestCase
{
    #[Test]
    public function itInstantiatesWithoutArguments(): void
    {
        $client = new DataGouvClient();

        self::assertInstanceOf(DataGouvClient::class, $client);
    }

    #[Test]
    public function itInstantiatesWithApiKey(): void
    {
        $client = new DataGouvClient(apiKey: 'test-api-key');

        self::assertInstanceOf(DataGouvClient::class, $client);
    }

    #[Test]
    public function itInstantiatesWithCustomHttpClient(): void
    {
        $httpClient = $this->createStub(ClientInterface::class);
        $client = new DataGouvClient(httpClient: $httpClient);

        self::assertInstanceOf(DataGouvClient::class, $client);
    }

    #[Test]
    public function itReturnsDatasetsSubClient(): void
    {
        $client = new DataGouvClient();

        self::assertInstanceOf(DatasetsApi::class, $client->datasets);
    }

    #[Test]
    public function itReturnsOrganizationsSubClient(): void
    {
        $client = new DataGouvClient();

        self::assertInstanceOf(OrganizationsApi::class, $client->organizations);
    }

    #[Test]
    public function itReturnsMeSubClient(): void
    {
        $client = new DataGouvClient();

        self::assertInstanceOf(MeApi::class, $client->me);
    }

    #[Test]
    public function itReturnsDiscussionsSubClient(): void
    {
        $client = new DataGouvClient();

        self::assertInstanceOf(DiscussionsApi::class, $client->discussions);
    }

    #[Test]
    public function subClientsAreStateless(): void
    {
        $client = new DataGouvClient();

        self::assertNotSame($client->datasets, $client->datasets);
    }
}
