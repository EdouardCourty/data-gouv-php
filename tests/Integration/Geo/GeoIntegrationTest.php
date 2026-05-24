<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Tests\Integration\Geo;

use Ecourty\DataGouv\DataServices\Geo\Client\Model\Commune;
use Ecourty\DataGouv\DataServices\Geo\Client\Model\Departement;
use Ecourty\DataGouv\DataServices\Geo\Client\Model\Epci;
use Ecourty\DataGouv\DataServices\Geo\Client\Model\Region;
use Ecourty\DataGouv\DataServices\Geo\GeoClient;
use Ecourty\DataGouv\Tests\Integration\IntegrationTestCase;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\Test;

#[Group('integration')]
final class GeoIntegrationTest extends IntegrationTestCase
{
    private const string COMMUNE_NAME = 'Lyon';
    private const string RHONE_DEPARTMENT_CODE = '69';
    private const string PARIS_DEPARTMENT_CODE = '75';
    private const string ILE_DE_FRANCE_REGION_CODE = '11';
    private const string ASSOCIATED_DELEGATED_QUERY = 'La';
    private const array IDENTIFIER_FIELDS = ['nom', 'code'];

    private GeoClient $client;

    protected function setUp(): void
    {
        $this->client = new GeoClient();
    }

    #[Test]
    public function itGetsCommunesByName(): void
    {
        $communes = $this->callApi(fn () => $this->client->communes->getCommunes([
            'nom' => self::COMMUNE_NAME,
            'fields' => self::IDENTIFIER_FIELDS,
        ]));

        self::assertIsArray($communes);
        self::assertNotEmpty($communes);

        /** @var Commune $firstCommune */
        $firstCommune = $communes[0];
        self::assertInstanceOf(Commune::class, $firstCommune);
        self::assertNotEmpty($firstCommune->getNom());
        self::assertNotEmpty($firstCommune->getCode());
    }

    #[Test]
    public function itGetsCommuneByCode(): void
    {
        $listedCommune = $this->fetchFirstCommune();

        $commune = $this->callApi(fn () => $this->client->communes->getCommunesByCode(
            $listedCommune->getCode(),
            ['fields' => self::IDENTIFIER_FIELDS],
        ));

        self::assertInstanceOf(Commune::class, $commune);
        self::assertSame($listedCommune->getCode(), $commune->getCode());
    }

    #[Test]
    public function itGetsDepartements(): void
    {
        $departements = $this->callApi(fn () => $this->client->departements->getDepartements([
            'fields' => self::IDENTIFIER_FIELDS,
        ]));

        self::assertIsArray($departements);
        self::assertNotEmpty($departements);

        /** @var Departement $firstDepartement */
        $firstDepartement = $departements[0];
        self::assertInstanceOf(Departement::class, $firstDepartement);
    }

    #[Test]
    public function itGetsDepartementByCode(): void
    {
        $listedDepartement = $this->fetchDepartementByCodeFromList(self::RHONE_DEPARTMENT_CODE);

        $departement = $this->callApi(fn () => $this->client->departements->getDepartementsByCode(
            $listedDepartement->getCode(),
            ['fields' => self::IDENTIFIER_FIELDS],
        ));

        self::assertInstanceOf(Departement::class, $departement);
        self::assertSame(self::RHONE_DEPARTMENT_CODE, $departement->getCode());
        self::assertSame('Rhône', $departement->getNom());
    }

    #[Test]
    public function itGetsCommunesInDepartement(): void
    {
        $listedDepartement = $this->fetchDepartementByCodeFromList(self::PARIS_DEPARTMENT_CODE);

        $communes = $this->callApi(fn () => $this->client->departements->getDepartementsByCodeCommunes(
            $listedDepartement->getCode(),
            ['fields' => self::IDENTIFIER_FIELDS],
        ));

        self::assertIsArray($communes);
        self::assertNotEmpty($communes);

        /** @var Commune $firstCommune */
        $firstCommune = $communes[0];
        self::assertInstanceOf(Commune::class, $firstCommune);
    }

    #[Test]
    public function itGetsRegions(): void
    {
        $regions = $this->callApi(fn () => $this->client->regions->getRegions([
            'fields' => self::IDENTIFIER_FIELDS,
        ]));

        self::assertIsArray($regions);
        self::assertNotEmpty($regions);

        /** @var Region $firstRegion */
        $firstRegion = $regions[0];
        self::assertInstanceOf(Region::class, $firstRegion);
    }

    #[Test]
    public function itGetsRegionByCode(): void
    {
        $listedRegion = $this->fetchRegionByCodeFromList(self::ILE_DE_FRANCE_REGION_CODE);

        $region = $this->callApi(fn () => $this->client->regions->getRegionsByCode(
            $listedRegion->getCode(),
            ['fields' => self::IDENTIFIER_FIELDS],
        ));

        self::assertInstanceOf(Region::class, $region);
        self::assertSame(self::ILE_DE_FRANCE_REGION_CODE, $region->getCode());
    }

    #[Test]
    public function itGetsDepartementsInRegion(): void
    {
        $listedRegion = $this->fetchRegionByCodeFromList(self::ILE_DE_FRANCE_REGION_CODE);

        $departements = $this->callApi(fn () => $this->client->regions->getRegionsByCodeDepartements(
            $listedRegion->getCode(),
            ['fields' => self::IDENTIFIER_FIELDS],
        ));

        self::assertIsArray($departements);
        self::assertNotEmpty($departements);

        /** @var Departement $firstDepartement */
        $firstDepartement = $departements[0];
        self::assertInstanceOf(Departement::class, $firstDepartement);
    }

    #[Test]
    public function itGetsEpcis(): void
    {
        $epcis = $this->callApi(fn () => $this->client->ePCI->getEpcis([
            'fields' => self::IDENTIFIER_FIELDS,
        ]));

        self::assertIsArray($epcis);
        self::assertNotEmpty($epcis);

        /** @var Epci $firstEpci */
        $firstEpci = $epcis[0];
        self::assertInstanceOf(Epci::class, $firstEpci);
    }

    #[Test]
    public function itGetsEpciByCode(): void
    {
        $listedEpci = $this->fetchFirstEpci();

        $epci = $this->callApi(fn () => $this->client->ePCI->getEpcisByCode(
            $listedEpci->getCode(),
            ['fields' => self::IDENTIFIER_FIELDS],
        ));

        self::assertInstanceOf(Epci::class, $epci);
        self::assertSame($listedEpci->getCode(), $epci->getCode());
    }

    #[Test]
    public function itGetsCommunesInEpci(): void
    {
        $listedEpci = $this->fetchFirstEpci();

        $communes = $this->callApi(fn () => $this->client->ePCI->getEpcisByCodeCommunes(
            $listedEpci->getCode(),
            ['fields' => self::IDENTIFIER_FIELDS],
        ));

        self::assertIsArray($communes);
        self::assertNotEmpty($communes);

        /** @var Commune $firstCommune */
        $firstCommune = $communes[0];
        self::assertInstanceOf(Commune::class, $firstCommune);
    }

    #[Test]
    public function itGetsCommunesAssocieesDeleguees(): void
    {
        $communes = $this->callApi(fn () => $this->client->communesAssocieesEtDeleguees->getCommunesAssocieesDeleguees([
            'nom' => self::ASSOCIATED_DELEGATED_QUERY,
            'fields' => self::IDENTIFIER_FIELDS,
        ]));

        self::assertIsArray($communes);

        if ($communes === []) {
            return;
        }

        /** @var Commune $firstCommune */
        $firstCommune = $communes[0];
        self::assertInstanceOf(Commune::class, $firstCommune);
    }

    private function fetchFirstCommune(): Commune
    {
        $communes = $this->callApi(fn () => $this->client->communes->getCommunes([
            'nom' => self::COMMUNE_NAME,
            'fields' => self::IDENTIFIER_FIELDS,
        ]));

        self::assertIsArray($communes);
        self::assertNotEmpty($communes);

        /** @var Commune $firstCommune */
        $firstCommune = $communes[0];
        self::assertInstanceOf(Commune::class, $firstCommune);

        return $firstCommune;
    }

    private function fetchDepartementByCodeFromList(string $code): Departement
    {
        $departements = $this->callApi(fn () => $this->client->departements->getDepartements([
            'code' => $code,
            'fields' => self::IDENTIFIER_FIELDS,
        ]));

        self::assertIsArray($departements);
        self::assertNotEmpty($departements);

        /** @var Departement $firstDepartement */
        $firstDepartement = $departements[0];
        self::assertInstanceOf(Departement::class, $firstDepartement);

        return $firstDepartement;
    }

    private function fetchRegionByCodeFromList(string $code): Region
    {
        $regions = $this->callApi(fn () => $this->client->regions->getRegions([
            'code' => $code,
            'fields' => self::IDENTIFIER_FIELDS,
        ]));

        self::assertIsArray($regions);
        self::assertNotEmpty($regions);

        /** @var Region $firstRegion */
        $firstRegion = $regions[0];
        self::assertInstanceOf(Region::class, $firstRegion);

        return $firstRegion;
    }

    private function fetchFirstEpci(): Epci
    {
        $epcis = $this->callApi(fn () => $this->client->ePCI->getEpcis([
            'fields' => self::IDENTIFIER_FIELDS,
        ]));

        self::assertIsArray($epcis);
        self::assertNotEmpty($epcis);

        /** @var Epci $firstEpci */
        $firstEpci = $epcis[0];
        self::assertInstanceOf(Epci::class, $firstEpci);

        return $firstEpci;
    }
}
