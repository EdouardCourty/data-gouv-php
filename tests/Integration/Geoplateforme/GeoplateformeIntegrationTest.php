<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Integration\Geoplateforme;

use Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Getcapabilities;
use Ecourty\DataGouv\DataServices\Geoplateforme\GeoplatformeClient;
use Ecourty\DataGouv\Tests\Integration\IntegrationTestCase;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\Test;

#[Group('integration')]
final class GeoplateformeIntegrationTest extends IntegrationTestCase
{
    private const string SEGUR_ADDRESS = '20 avenue de Segur Paris';
    private const string PARIS_QUERY = 'Paris';
    private const string MUNICIPALITY_TYPE = 'municipality';
    private const int SINGLE_RESULT_LIMIT = 1;
    private const int MULTIPLE_RESULT_LIMIT = 3;
    private const string PARIS_REVERSE_SEARCH_GEOM = '{"type":"Circle","coordinates":[2.308628,48.850699],"radius":100}';

    private GeoplatformeClient $client;

    protected function setUp(): void
    {
        $this->client = new GeoplatformeClient();
    }

    #[Test]
    public function itGeocodesAnAddress(): void
    {
        $result = $this->callApi(fn () => $this->client->search->search([
            'q' => self::SEGUR_ADDRESS,
            'limit' => self::SINGLE_RESULT_LIMIT,
        ]));

        self::assertIsObject($result);
        self::assertObjectHasProperty('features', $result);
        self::assertObjectHasProperty('type', $result);

        /** @var \stdClass $result */
        $features = $result->features;
        self::assertIsArray($features);
        self::assertNotEmpty($features);

        /** @var \stdClass $firstFeature */
        $firstFeature = $features[0];
        /** @var \stdClass $properties */
        $properties = $firstFeature->properties ?? new \stdClass();
        /** @var string|null $label */
        $label = $properties->label ?? null;
        self::assertNotEmpty($label);
    }

    #[Test]
    public function itGeocodesWithType(): void
    {
        $result = $this->callApi(fn () => $this->client->search->search([
            'q' => self::PARIS_QUERY,
            'type' => self::MUNICIPALITY_TYPE,
            'limit' => self::MULTIPLE_RESULT_LIMIT,
        ]));

        self::assertIsObject($result);
        self::assertObjectHasProperty('features', $result);

        /** @var \stdClass $result */
        $features = $result->features;
        self::assertIsArray($features);
        self::assertNotEmpty($features);
    }

    #[Test]
    public function itReverseGeocodesCoordinates(): void
    {
        $result = $this->callApi(fn () => $this->client->reverse->reverse([
            'searchgeom' => self::PARIS_REVERSE_SEARCH_GEOM,
            'limit' => self::SINGLE_RESULT_LIMIT,
        ]));

        self::assertIsObject($result);
        self::assertObjectHasProperty('features', $result);

        /** @var \stdClass $result */
        $features = $result->features;
        self::assertIsArray($features);
        self::assertNotEmpty($features);
    }

    #[Test]
    public function itGetsCapabilities(): void
    {
        $capabilities = $this->callApi(fn () => $this->client->getCapabilities->getCapabilities());

        self::assertNotNull($capabilities);
        self::assertInstanceOf(Getcapabilities::class, $capabilities);
    }
}
