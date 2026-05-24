<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Integration\DataGouv;

use Ecourty\DataGouv\DataGouv\Client\Model\ChartPage;
use Ecourty\DataGouv\DataGouv\Client\Model\ChartRead;
use Ecourty\DataGouv\DataGouv\DataGouvClient;
use Ecourty\DataGouv\Tests\Integration\IntegrationTestCase;
use PHPUnit\Framework\Attributes\Group;

#[Group('integration')]
final class VisualizationsIntegrationTest extends IntegrationTestCase
{
    private DataGouvClient $client;

    protected function setUp(): void
    {
        $this->client = new DataGouvClient();
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function itListsPublicVisualizations(): void
    {
        $page = $this->callApi(fn () => $this->client->visualizations->listVisualizations(['page_size' => 5]));

        self::assertInstanceOf(ChartPage::class, $page);
        self::assertGreaterThanOrEqual(0, $page->getTotal());
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function itFetchesAVisualizationWhenAPublicOneExists(): void
    {
        $page = $this->callApi(fn () => $this->client->visualizations->listVisualizations(['page_size' => 5]));

        self::assertInstanceOf(ChartPage::class, $page);

        if ($page->getData() === []) {
            self::markTestSkipped('No public visualization is currently listed by data.gouv.fr.');
        }

        /** @var ChartRead $first */
        $first = $page->getData()[0];
        $visualization = $this->callApi(fn () => $this->client->visualizations->getVisualization($first->getId()));

        self::assertInstanceOf(ChartRead::class, $visualization);
        self::assertSame($first->getId(), $visualization->getId());
    }
}
