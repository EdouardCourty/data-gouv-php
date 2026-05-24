<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataServices\Geoplateforme;

use Ecourty\DataGouv\DataServices\Geoplateforme\Api\BatchApi;
use Ecourty\DataGouv\DataServices\Geoplateforme\Api\GetCapabilitiesApi;
use Ecourty\DataGouv\DataServices\Geoplateforme\Api\ReverseApi;
use Ecourty\DataGouv\DataServices\Geoplateforme\Api\SearchApi;
use Ecourty\DataGouv\DataServices\Geoplateforme\Client\Client;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\Plugin\HeaderSetPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientInterface;

/**
 * @see https://data.geopf.fr/geocodage
 */
final class GeoplateformeClient
{
    public const string BASE_URL = 'https://data.geopf.fr/geocodage';
    public const string AUTH_HEADER = 'Authorization';

    private readonly Client $janeClient;

    public BatchApi $batch {
        get => new BatchApi($this->janeClient);
    }

    public GetCapabilitiesApi $getCapabilities {
        get => new GetCapabilitiesApi($this->janeClient);
    }

    public ReverseApi $reverse {
        get => new ReverseApi($this->janeClient);
    }

    public SearchApi $search {
        get => new SearchApi($this->janeClient);
    }

    public function __construct(
        ?string $bearerToken = null,
        ?ClientInterface $httpClient = null,
    ) {
        $httpClient ??= Psr18ClientDiscovery::find();

        $uri = Psr17FactoryDiscovery::findUriFactory()
            ->createUri(self::BASE_URL);

        $plugins = [
            new AddHostPlugin($uri),
        ];

        if ($uri->getPath() !== '' && $uri->getPath() !== '/') {
            $plugins[] = new AddPathPlugin($uri);
        }

        if ($bearerToken !== null) {
            $plugins[] = new HeaderSetPlugin([self::AUTH_HEADER => 'Bearer ' . $bearerToken]);
        }
        /** @var Client $janeClient */
        $janeClient = Client::create(new PluginClient($httpClient, $plugins));
        $this->janeClient = $janeClient;
    }

    /**
     * Returns the underlying Jane-generated client for advanced usage (e.g. FETCH_RESPONSE).
     */
    public function getClient(): Client
    {
        return $this->janeClient;
    }
}
