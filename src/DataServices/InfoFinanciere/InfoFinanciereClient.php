<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataServices\InfoFinanciere;

use Ecourty\DataGouv\DataServices\InfoFinanciere\Api\CatalogApi;
use Ecourty\DataGouv\DataServices\InfoFinanciere\Api\DatasetApi;
use Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Client;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\Plugin\QueryDefaultsPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientInterface;

/**
 * @see https://www.info-financiere.gouv.fr/api/explore/v2.0
 */
final class InfoFinanciereClient
{
    public const string BASE_URL = 'https://www.info-financiere.gouv.fr/api/explore/v2.0';
    public const string AUTH_QUERY_PARAM = 'apikey';

    private readonly Client $janeClient;

    public CatalogApi $catalog {
        get => new CatalogApi($this->janeClient);
    }

    public DatasetApi $dataset {
        get => new DatasetApi($this->janeClient);
    }

    public function __construct(
        ?string $apiKey = null,
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

        if ($apiKey !== null) {
            $plugins[] = new QueryDefaultsPlugin([self::AUTH_QUERY_PARAM => $apiKey]);
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
