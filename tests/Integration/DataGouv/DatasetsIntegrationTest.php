<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Integration\DataGouv;

use Ecourty\DataGouv\DataGouv\Client\Model\Dataset;
use Ecourty\DataGouv\DataGouv\Client\Model\DatasetPage;
use Ecourty\DataGouv\DataGouv\Client\Model\OrganizationPage;
use Ecourty\DataGouv\DataGouv\Client\Model\OrganizationRead;
use Ecourty\DataGouv\DataGouv\DataGouvClient;
use Ecourty\DataGouv\Tests\Integration\IntegrationTestCase;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\Test;

/**
 * Integration tests for the DataGouv Datasets and Organizations sub-clients.
 *
 * Covers: listDatasets, getDataset, listOrganizations, getOrganization,
 * listOrganizationDatasets, and dataset resources.
 */
#[Group('integration')]
final class DatasetsIntegrationTest extends IntegrationTestCase
{
    private DataGouvClient $client;

    protected function setUp(): void
    {
        $this->client = new DataGouvClient();
    }

    #[Test]
    public function itListsDatasetsAndFetchesOneById(): void
    {
        $page = $this->callApi(fn () => $this->client->datasets->listDatasets(['q' => 'budget', 'page_size' => 5]));

        self::assertInstanceOf(DatasetPage::class, $page);
        self::assertNotEmpty($page->getData());
        self::assertGreaterThan(0, $page->getTotal());

        $first = $page->getData()[0];
        self::assertNotEmpty($first->getId());
        self::assertNotEmpty($first->getTitle());
        self::assertNotEmpty($first->getSlug());

        $dataset = $this->callApi(fn () => $this->client->datasets->getDataset($first->getId()));

        self::assertInstanceOf(Dataset::class, $dataset);
        self::assertSame($first->getId(), $dataset->getId());
        self::assertSame($first->getTitle(), $dataset->getTitle());
        self::assertNotEmpty($dataset->getSlug());
    }

    #[Test]
    public function itListsDatasetResources(): void
    {
        $page = $this->callApi(fn () => $this->client->datasets->listDatasets(['q' => 'prenoms', 'page_size' => 10]));

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

        $dataset = $this->callApi(fn () => $this->client->datasets->getDataset($datasetWithResources->getId()));

        self::assertInstanceOf(Dataset::class, $dataset);
        self::assertNotEmpty($dataset->getResources());

        $resource = $dataset->getResources()[0];
        self::assertNotNull($resource->getId());
        self::assertNotEmpty($resource->getTitle());
        self::assertNotEmpty($resource->getUrl());
    }

    #[Test]
    public function itListsOrganizationsAndFetchesOne(): void
    {
        $page = $this->callApi(fn () => $this->client->organizations->listOrganizations(['q' => 'ministère', 'page_size' => 5]));

        self::assertInstanceOf(OrganizationPage::class, $page);
        self::assertNotEmpty($page->getData());
        self::assertGreaterThan(0, $page->getTotal());

        $first = $page->getData()[0];
        self::assertNotEmpty($first->getId());
        self::assertNotEmpty($first->getName());
        self::assertNotEmpty($first->getSlug());

        $org = $this->callApi(fn () => $this->client->organizations->getOrganization($first->getId()));

        self::assertInstanceOf(OrganizationRead::class, $org);
        self::assertSame($first->getId(), $org->getId());
        self::assertSame($first->getName(), $org->getName());
    }

    #[Test]
    public function itListsOrganizationDatasets(): void
    {
        $orgPage = $this->callApi(fn () => $this->client->organizations->listOrganizations(['q' => 'etalab', 'page_size' => 5]));

        self::assertInstanceOf(OrganizationPage::class, $orgPage);
        self::assertNotEmpty($orgPage->getData());

        $org = $orgPage->getData()[0];

        $datasetPage = $this->callApi(
            fn () => $this->client->organizations->listOrganizationDatasets($org->getId(), ['page_size' => 5]),
        );

        self::assertInstanceOf(DatasetPage::class, $datasetPage);
        self::assertNotEmpty($datasetPage->getData());

        $dataset = $datasetPage->getData()[0];
        self::assertNotEmpty($dataset->getId());
        self::assertNotEmpty($dataset->getTitle());

        $fullDataset = $this->callApi(fn () => $this->client->datasets->getDataset($dataset->getId()));

        self::assertInstanceOf(Dataset::class, $fullDataset);
        self::assertSame($dataset->getId(), $fullDataset->getId());
    }

    #[Test]
    public function itSearchesDatasetsWithSlug(): void
    {
        $page = $this->callApi(fn () => $this->client->datasets->listDatasets(['q' => 'sirene', 'page_size' => 3]));

        self::assertInstanceOf(DatasetPage::class, $page);
        self::assertNotEmpty($page->getData());

        $slug = $page->getData()[0]->getSlug();
        self::assertNotEmpty($slug);

        $bySlug = $this->callApi(fn () => $this->client->datasets->getDataset($slug));

        self::assertInstanceOf(Dataset::class, $bySlug);
        self::assertSame($slug, $bySlug->getSlug());
    }
}
