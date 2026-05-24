<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Integration\JoursFeries;

use Ecourty\DataGouv\DataServices\JoursFeries\JoursFeriesClient;
use Ecourty\DataGouv\Tests\Integration\IntegrationTestCase;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\Test;

#[Group('integration')]
final class JoursFeriesIntegrationTest extends IntegrationTestCase
{
    private const string METROPOLE_ZONE = 'metropole';
    private const string ALSACE_MOSELLE_ZONE = 'alsace-moselle';
    private const string GUADELOUPE_ZONE = 'guadeloupe';
    private const int YEAR_2025 = 2025;

    private JoursFeriesClient $client;

    protected function setUp(): void
    {
        $this->client = new JoursFeriesClient();
    }

    #[Test]
    public function itGetsFeriesForMetropole(): void
    {
        $result = $this->callApi(fn () => $this->client->joursFeries->getByZone(self::METROPOLE_ZONE));

        $this->assertHolidayPayloadHasEntries($result);
    }

    #[Test]
    public function itGetsFeriesForAlsaceMoselle(): void
    {
        $result = $this->callApi(fn () => $this->client->joursFeries->getByZone(self::ALSACE_MOSELLE_ZONE));

        $this->assertHolidayPayloadHasEntries($result);
    }

    #[Test]
    public function itGetsFeriesForZoneAndYear(): void
    {
        $result = $this->callApi(fn () => $this->client->joursFeries->getByZoneByAnnee(
            self::METROPOLE_ZONE,
            self::YEAR_2025,
        ));

        $this->assertHolidayPayloadHasEntries($result);
    }

    #[Test]
    public function itGetsFeriesForGuadeloupe(): void
    {
        $result = $this->callApi(fn () => $this->client->joursFeries->getByZone(self::GUADELOUPE_ZONE));

        $this->assertHolidayPayloadHasEntries($result);
    }

    private function assertHolidayPayloadHasEntries(mixed $result): void
    {
        self::assertNotNull($result);

        if (\is_object($result)) {
            /** @var array<string, mixed> $entries */
            $entries = get_object_vars($result);
        } else {
            self::assertIsArray($result);
            /** @var array<string, mixed> $entries */
            $entries = $result;
        }

        self::assertNotEmpty($entries);

        $firstDate = array_key_first($entries);
        self::assertIsString($firstDate);
        self::assertMatchesRegularExpression('/^\d{4}-\d{2}-\d{2}$/', $firstDate);
        self::assertNotEmpty($entries[$firstDate]);
    }
}
