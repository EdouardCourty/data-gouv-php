<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Integration\DataGouv;

use Ecourty\DataGouv\DataGouv\Client\Model\CatalogSchema;
use Ecourty\DataGouv\DataGouv\Client\Model\ContactPointRead;
use Ecourty\DataGouv\DataGouv\Client\Model\ContactPointRoles;
use Ecourty\DataGouv\DataGouv\Client\Model\Dataset;
use Ecourty\DataGouv\DataGouv\Client\Model\DatasetContactPointsItem;
use Ecourty\DataGouv\DataGouv\Client\Model\DatasetPage;
use Ecourty\DataGouv\DataGouv\Client\Model\Frequency;
use Ecourty\DataGouv\DataGouv\Client\Model\License;
use Ecourty\DataGouv\DataGouv\Client\Model\ResourceType;
use Ecourty\DataGouv\DataGouv\Client\Model\Transfer;
use Ecourty\DataGouv\DataGouv\DataGouvClient;
use Ecourty\DataGouv\Tests\Integration\IntegrationTestCase;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\Test;

#[Group('integration')]
final class MiscIntegrationTest extends IntegrationTestCase
{
    private DataGouvClient $client;

    protected function setUp(): void
    {
        $this->client = new DataGouvClient();
    }

    #[Test]
    public function itListsDatasetReferenceMetadata(): void
    {
        $licenses = $this->callApi(fn () => $this->client->datasets->listLicenses());
        $frequencies = $this->callApi(fn () => $this->client->datasets->listFrequencies());
        $extensions = $this->callApi(fn () => $this->client->datasets->allowedExtensions());
        $schemas = $this->callApi(fn () => $this->client->datasets->schemas());
        $resourceTypes = $this->callApi(fn () => $this->client->datasets->resourceTypes());

        self::assertIsArray($licenses);
        self::assertNotEmpty($licenses);
        self::assertInstanceOf(License::class, $licenses[0]);

        self::assertIsArray($frequencies);
        self::assertNotEmpty($frequencies);
        self::assertInstanceOf(Frequency::class, $frequencies[0]);

        self::assertIsArray($extensions);
        self::assertNotEmpty($extensions);
        self::assertIsString($extensions[0]);

        self::assertIsArray($schemas);
        self::assertNotEmpty($schemas);
        self::assertInstanceOf(CatalogSchema::class, $schemas[0]);

        self::assertIsArray($resourceTypes);
        self::assertNotEmpty($resourceTypes);
        self::assertInstanceOf(ResourceType::class, $resourceTypes[0]);
    }

    #[Test]
    public function itCallsMiscNullReturningEndpoints(): void
    {
        $recentDatasets = $this->callApi(fn () => $this->client->datasets->recentDatasetsAtomFeed(['page_size' => 1]));
        $reasonCategories = $this->callApi(fn () => $this->client->accessType->reasonCategories());
        $suggestedTags = $this->callApi(fn () => $this->client->tags->suggestTags(['q' => 'data', 'size' => 5]));

        self::assertNull($recentDatasets);
        self::assertNull($reasonCategories);
        self::assertNull($suggestedTags);
    }

    #[Test]
    public function itListsContactPointRoles(): void
    {
        $roles = $this->callApi(fn () => $this->client->contacts->contactPointRoles());

        self::assertIsArray($roles);
        self::assertNotEmpty($roles);
        self::assertInstanceOf(ContactPointRoles::class, $roles[0]);
    }

    #[Test]
    public function itGetsContactPointByIdFromAPublicDataset(): void
    {
        $page = $this->callApi(fn () => $this->client->datasets->listDatasets(['q' => 'budget', 'page_size' => 10]));

        self::assertInstanceOf(DatasetPage::class, $page);
        self::assertNotEmpty($page->getData());

        $contactPointId = null;
        foreach ($page->getData() as $preview) {
            $dataset = $this->callApi(fn () => $this->client->datasets->getDataset($preview->getId()));
            self::assertInstanceOf(Dataset::class, $dataset);

            if ($dataset->getContactPoints() === []) {
                continue;
            }

            /** @var DatasetContactPointsItem $contactPoint */
            $contactPoint = $dataset->getContactPoints()[0];
            $contactPointId = $contactPoint->getId();
            break;
        }

        if ($contactPointId === null) {
            self::markTestSkipped('No public dataset with a contact point was found.');
        }

        $fullContactPoint = $this->callApi(fn () => $this->client->contacts->getContactPoint($contactPointId));

        self::assertInstanceOf(ContactPointRead::class, $fullContactPoint);
        self::assertSame($contactPointId, $fullContactPoint->getId());
        self::assertNotEmpty($fullContactPoint->getName());
    }

    #[Test]
    public function itListsTransfersAndFetchesOneWhenPublicTransfersAreAvailable(): void
    {
        $transfers = $this->callApi(fn () => $this->client->transfer->listTransfers());

        if ($transfers === null || $transfers === []) {
            self::markTestSkipped('No public transfers are available (endpoint may require authentication or list is empty).');
        }

        self::assertInstanceOf(Transfer::class, $transfers[0]);

        /** @var Transfer $first */
        $first = $transfers[0];
        $id = $first->getId();

        if ($id === null) {
            self::markTestSkipped('The first transfer has no identifier.');
        }

        $transfer = $this->callApi(fn () => $this->client->transfer->getTransfer($id));

        self::assertInstanceOf(Transfer::class, $transfer);
        self::assertSame($id, $transfer->getId());
    }
}
