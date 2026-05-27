<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Integration\Sirene;

use Ecourty\DataGouv\DataServices\Sirene\Client\Client as SireneJaneClient;
use Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseUniteLegale;
use Ecourty\DataGouv\DataServices\Sirene\SireneClient;
use Ecourty\DataGouv\Tests\Integration\IntegrationTestCase;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\Test;

/**
 * Integration tests for the INSEE SIRENE API.
 *
 * Requires an INSEE API key via the SIRENE_API_KEY environment variable.
 * All tests are skipped when no key is available.
 *
 * To run locally:
 *   SIRENE_API_KEY=your-key ./vendor/bin/phpunit tests/Integration/Sirene/
 */
#[Group('integration')]
final class SireneIntegrationTest extends IntegrationTestCase
{
    private const string ENV_KEY = 'SIRENE_API_KEY';

    private SireneClient $client;

    protected function setUp(): void
    {
        $apiKey = getenv(self::ENV_KEY) ?: null;

        if ($apiKey === null) {
            self::markTestSkipped(
                'SIRENE_API_KEY environment variable is not set. '
                . 'Obtain an INSEE API key at https://api.insee.fr and re-run with SIRENE_API_KEY=your-key.',
            );
        }

        $this->client = new SireneClient(apiKey: $apiKey);
    }

    #[Test]
    public function itFetchesAUniteLegaleBySiren(): void
    {
        // La Poste — public, stable SIREN
        $result = $this->callApi(
            fn () => $this->client->uniteLegale->findBySiren('356000000'),
        );

        self::assertInstanceOf(ReponseUniteLegale::class, $result);
        $ul = $result->getUniteLegale();
        self::assertSame('356000000', $ul->getSiren());
    }

    #[Test]
    public function itSearchesUnitesLegales(): void
    {
        // The SIRENE search (GET /siren) returns a 200 response whose body Jane does not
        // deserialize (empty 200 handler in generated code). Use FETCH_RESPONSE to validate
        // the HTTP status and that the JSON body contains the expected "unitesLegales" key.
        $response = $this->callApi(
            fn () => $this->client->getClient()->findByGetUniteLegale(
                ['nombre' => 3, 'q' => 'La Poste'],
                SireneJaneClient::FETCH_RESPONSE,
                [],
            ),
        );

        $this->assertSuccessfulResponse($response);

        $body = $this->decodeResponse($response);
        self::assertArrayHasKey('unitesLegales', $body);
        self::assertIsArray($body['unitesLegales']);
        self::assertNotEmpty($body['unitesLegales']);
    }
}
