<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Integration\Entreprise;

use Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Payload;
use Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Result;
use Ecourty\DataGouv\DataServices\Entreprise\EntrepriseClient;
use Ecourty\DataGouv\Tests\Integration\IntegrationTestCase;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\Test;

#[Group('integration')]
final class EntrepriseIntegrationTest extends IntegrationTestCase
{
    private const string SEARCH_QUERY = 'La Poste';
    private const string PAGINATED_QUERY = 'boulangerie';
    private const string ACTIVITY_CODE = '10.71B';
    private const float PARIS_LATITUDE = 48.8566;
    private const float PARIS_LONGITUDE = 2.3522;
    private const float SEARCH_RADIUS_KM = 1.0;
    private const int SMALL_PAGE_SIZE = 3;
    private const int PAGE_SIZE = 5;

    private EntrepriseClient $client;

    protected function setUp(): void
    {
        $this->client = new EntrepriseClient();
    }

    #[Test]
    public function itSearchesCompaniesByName(): void
    {
        $payload = $this->callEntrepriseApi(fn () => $this->client->rechercheTextuelle->getSearch([
            'q' => self::SEARCH_QUERY,
            'per_page' => self::SMALL_PAGE_SIZE,
        ]));

        self::assertInstanceOf(Payload::class, $payload);

        $firstResult = $this->assertPayloadHasResults($payload);
        self::assertNotNull($firstResult->getNomComplet());
        self::assertNotEmpty($firstResult->getNomComplet());
        self::assertNotNull($firstResult->getSiren());
        self::assertNotEmpty($firstResult->getSiren());
    }

    #[Test]
    public function itSearchesCompaniesByNearPoint(): void
    {
        $payload = $this->callEntrepriseApi(fn () => $this->client->rechercheGeographique->getNearPoint([
            'lat' => self::PARIS_LATITUDE,
            'long' => self::PARIS_LONGITUDE,
            'radius' => self::SEARCH_RADIUS_KM,
        ]));

        self::assertInstanceOf(Payload::class, $payload);
    }

    #[Test]
    public function itSearchWithPagination(): void
    {
        $payload = $this->callEntrepriseApi(fn () => $this->client->rechercheTextuelle->getSearch([
            'q' => self::PAGINATED_QUERY,
            'per_page' => self::PAGE_SIZE,
            'page' => 1,
        ]));

        self::assertInstanceOf(Payload::class, $payload);
        self::assertNotNull($payload->getTotalResults());
        self::assertGreaterThan(0, $payload->getTotalResults());
    }

    #[Test]
    public function itSearchByActivity(): void
    {
        $payload = $this->callEntrepriseApi(fn () => $this->client->rechercheTextuelle->getSearch([
            'activite_principale' => self::ACTIVITY_CODE,
            'per_page' => self::SMALL_PAGE_SIZE,
        ]));

        self::assertInstanceOf(Payload::class, $payload);
        $this->assertPayloadHasResults($payload);
    }

    private function assertPayloadHasResults(Payload $payload): Result
    {
        $results = $payload->getResults();
        self::assertNotEmpty($results);

        /** @var Result $firstResult */
        $firstResult = $results[0];
        self::assertInstanceOf(Result::class, $firstResult);

        return $firstResult;
    }

    /**
     * Suppresses known deserialization warnings from nullable live API fields while still using callApi().
     *
     * @template T
     *
     * @param callable(): T $fn
     *
     * @return T
     */
    private function callEntrepriseApi(callable $fn): mixed
    {
        set_error_handler(static function (int $severity, string $message, string $file): bool {
            return $severity === \E_WARNING
                && str_contains($message, 'foreach() argument must be of type array|object, null given')
                && str_contains($file, '/src/DataServices/Entreprise/Client/Normalizer/');
        });

        try {
            return $this->callApi($fn);
        } finally {
            restore_error_handler();
        }
    }
}
