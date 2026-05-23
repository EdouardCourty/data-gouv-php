<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Integration;

use Ecourty\DataGouv\DataGouv\Client\Model\Dataset;
use Ecourty\DataGouv\DataGouv\Client\Model\DatasetPage;
use Ecourty\DataGouv\DataGouv\Client\Model\OrganizationPage;
use Ecourty\DataGouv\DataGouv\Client\Model\OrganizationRead;
use Ecourty\DataGouv\DataGouv\DataGouvClient;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

/**
 * Integration tests that hit the real data.gouv.fr API.
 *
 * These tests require a working internet connection and may be slow.
 * Run them with: composer test-integration
 */
#[Group('integration')]
final class DataGouvFlowTest extends TestCase
{
    private DataGouvClient $client;

    protected function setUp(): void
    {
        $this->client = new DataGouvClient();
    }

    #[Test]
    public function itListsDatasetsAndFetchesOneByIdFlow(): void
    {
        // Step 1 — list datasets matching a well-known query
        $page = $this->client->datasets->listDatasets(['q' => 'budget', 'page_size' => 5]);

        self::assertInstanceOf(DatasetPage::class, $page);
        self::assertNotEmpty($page->getData());
        self::assertGreaterThan(0, $page->getTotal());

        $first = $page->getData()[0];
        self::assertNotEmpty($first->getId());
        self::assertNotEmpty($first->getTitle());
        self::assertNotEmpty($first->getSlug());

        // Step 2 — fetch that exact dataset by ID
        $dataset = $this->client->datasets->getDataset($first->getId());

        self::assertInstanceOf(Dataset::class, $dataset);
        self::assertSame($first->getId(), $dataset->getId());
        self::assertSame($first->getTitle(), $dataset->getTitle());
        self::assertNotEmpty($dataset->getSlug());
    }

    #[Test]
    public function itListsDatasetResourcesFlow(): void
    {
        // Step 1 — find a dataset that has resources
        $page = $this->client->datasets->listDatasets(['q' => 'prenoms', 'page_size' => 10]);

        self::assertInstanceOf(DatasetPage::class, $page);
        self::assertNotEmpty($page->getData());

        $datasetWithResources = null;
        foreach ($page->getData() as $candidate) {
            if (\count($candidate->getResources()) > 0) {
                $datasetWithResources = $candidate;
                break;
            }
        }

        if ($datasetWithResources === null) {
            self::markTestSkipped('No dataset with resources found in first page of results.');
        }

        // Step 2 — fetch it individually and verify resources are present
        $dataset = $this->client->datasets->getDataset($datasetWithResources->getId());

        self::assertInstanceOf(Dataset::class, $dataset);
        self::assertNotEmpty($dataset->getResources());

        $resource = $dataset->getResources()[0];
        self::assertNotNull($resource->getId());
        self::assertNotEmpty($resource->getTitle());
        self::assertNotEmpty($resource->getUrl());
    }

    #[Test]
    public function itListsOrganizationsAndFetchesOneFlow(): void
    {
        // Step 1 — list organizations
        $page = $this->client->organizations->listOrganizations(['q' => 'ministère', 'page_size' => 5]);

        self::assertInstanceOf(OrganizationPage::class, $page);
        self::assertNotEmpty($page->getData());
        self::assertGreaterThan(0, $page->getTotal());

        $first = $page->getData()[0];
        self::assertNotEmpty($first->getId());
        self::assertNotEmpty($first->getName());
        self::assertNotEmpty($first->getSlug());

        // Step 2 — fetch that organization individually by ID
        $org = $this->client->organizations->getOrganization($first->getId());

        self::assertInstanceOf(OrganizationRead::class, $org);
        self::assertSame($first->getId(), $org->getId());
        self::assertSame($first->getName(), $org->getName());
    }

    #[Test]
    public function itListsOrganizationDatasetsFlow(): void
    {
        // Step 1 — find an organization
        $orgPage = $this->client->organizations->listOrganizations(['q' => 'etalab', 'page_size' => 5]);

        self::assertInstanceOf(OrganizationPage::class, $orgPage);
        self::assertNotEmpty($orgPage->getData());

        $org = $orgPage->getData()[0];

        // Step 2 — list its datasets
        $datasetPage = $this->client->organizations->listOrganizationDatasets($org->getId(), ['page_size' => 5]);

        self::assertInstanceOf(DatasetPage::class, $datasetPage);
        self::assertNotEmpty($datasetPage->getData());

        $dataset = $datasetPage->getData()[0];
        self::assertNotEmpty($dataset->getId());
        self::assertNotEmpty($dataset->getTitle());

        // Step 3 — fetch one of the org's datasets individually
        $fullDataset = $this->client->datasets->getDataset($dataset->getId());

        self::assertInstanceOf(Dataset::class, $fullDataset);
        self::assertSame($dataset->getId(), $fullDataset->getId());
    }
}
