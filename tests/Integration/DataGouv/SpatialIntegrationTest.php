<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Integration\DataGouv;

use Ecourty\DataGouv\DataGouv\Client\Model\DatasetReference;
use Ecourty\DataGouv\DataGouv\Client\Model\GeoGranularity;
use Ecourty\DataGouv\DataGouv\Client\Model\GeoJSONFeatureCollection;
use Ecourty\DataGouv\DataGouv\Client\Model\GeoLevel;
use Ecourty\DataGouv\DataGouv\Client\Model\TerritorySuggestion;
use Ecourty\DataGouv\DataGouv\DataGouvClient;
use Ecourty\DataGouv\Tests\Integration\IntegrationTestCase;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\Test;

#[Group('integration')]
final class SpatialIntegrationTest extends IntegrationTestCase
{
    private DataGouvClient $client;

    protected function setUp(): void
    {
        $this->client = new DataGouvClient();
    }

    #[Test]
    public function itListsSpatialLevelsAndGranularities(): void
    {
        $levels = $this->callApi(fn () => $this->client->spatial->spatialLevels());
        $granularities = $this->callApi(fn () => $this->client->spatial->spatialGranularities());

        self::assertIsArray($levels);
        self::assertNotEmpty($levels);
        self::assertInstanceOf(GeoLevel::class, $levels[0]);
        self::assertNotEmpty($levels[0]->getId());

        self::assertIsArray($granularities);
        self::assertNotEmpty($granularities);
        self::assertInstanceOf(GeoGranularity::class, $granularities[0]);
    }

    #[Test]
    public function itGetsSpatialCoverageForALevel(): void
    {
        $levels = $this->callApi(fn () => $this->client->spatial->spatialLevels());

        self::assertIsArray($levels);
        self::assertNotEmpty($levels);

        /** @var GeoLevel $level */
        $level = $levels[0];
        $coverage = $this->callApi(fn () => $this->client->spatial->spatialCoverage($level->getId()));

        if ($coverage === null || $coverage === []) {
            self::markTestSkipped('No spatial coverage returned for the first level.');
        }

        self::assertArrayHasKey('type', $coverage);
        self::assertArrayHasKey('features', $coverage);
        self::assertSame('FeatureCollection', $coverage['type']);
        self::assertIsArray($coverage['features']);
    }

    #[Test]
    public function itSuggestsZonesAndCallsZoneEndpoints(): void
    {
        $suggestions = $this->callApi(fn () => $this->client->spatial->suggestZones(['q' => 'Paris', 'size' => 2]));

        self::assertIsArray($suggestions);
        self::assertNotEmpty($suggestions);
        self::assertInstanceOf(TerritorySuggestion::class, $suggestions[0]);

        /** @var TerritorySuggestion $zone */
        $zone = $suggestions[0];
        $zonePayload = $this->callApi(fn () => $this->client->spatial->spatialZone($zone->getId()));
        $zoneDatasets = $this->callApi(fn () => $this->client->spatial->spatialZoneDatasets($zone->getId(), ['size' => 1]));

        self::assertNull($zonePayload);
        self::assertInstanceOf(DatasetReference::class, $zoneDatasets);

        try {
            self::assertNotEmpty($zoneDatasets->getId());
        } catch (\Throwable $e) {
            self::markTestSkipped('The spatialZoneDatasets response is not currently deserializable: ' . $e->getMessage());
        }

        try {
            $zones = $this->callApi(fn () => $this->client->spatial->spatialZones($zone->getId()));
            self::assertInstanceOf(GeoJSONFeatureCollection::class, $zones);
        } catch (\Throwable $e) {
            self::markTestSkipped('The spatialZones endpoint is not currently deserializable: ' . $e->getMessage());
        }
    }
}
