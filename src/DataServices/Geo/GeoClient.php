<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataServices\Geo;

use Ecourty\DataGouv\DataServices\Geo\Api\CommunesApi;
use Ecourty\DataGouv\DataServices\Geo\Api\CommunesAssocieesEtDelegueesApi;
use Ecourty\DataGouv\DataServices\Geo\Api\DepartementsApi;
use Ecourty\DataGouv\DataServices\Geo\Api\EPCIApi;
use Ecourty\DataGouv\DataServices\Geo\Api\RegionsApi;
use Ecourty\DataGouv\DataServices\Geo\Client\Client;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientInterface;

/**
 * @see https://geo.api.gouv.fr
 */
final class GeoClient
{
    public const string BASE_URL = 'https://geo.api.gouv.fr';
    private readonly Client $janeClient;

    public CommunesApi $communes {
        get => new CommunesApi($this->janeClient);
    }

    public CommunesAssocieesEtDelegueesApi $communesAssocieesEtDeleguees {
        get => new CommunesAssocieesEtDelegueesApi($this->janeClient);
    }

    public DepartementsApi $departements {
        get => new DepartementsApi($this->janeClient);
    }

    public EPCIApi $ePCI {
        get => new EPCIApi($this->janeClient);
    }

    public RegionsApi $regions {
        get => new RegionsApi($this->janeClient);
    }

    public function __construct(
        ?ClientInterface $httpClient = null,
    ) {
        $httpClient ??= Psr18ClientDiscovery::find();

        $uri = Psr17FactoryDiscovery::findUriFactory()
            ->createUri(self::BASE_URL);

        $plugins = [
            new AddHostPlugin($uri),
            new AddPathPlugin($uri),
        ];

        /** @var Client $janeClient */
        $janeClient = Client::create(new PluginClient($httpClient, $plugins));
        $this->janeClient = $janeClient;
    }
}
