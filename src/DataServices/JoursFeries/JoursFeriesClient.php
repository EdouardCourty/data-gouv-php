<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataServices\JoursFeries;

use Ecourty\DataGouv\DataServices\JoursFeries\Api\JoursFeriesApi;
use Ecourty\DataGouv\DataServices\JoursFeries\Client\Client;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientInterface;

/**
 * @see https://calendrier.api.gouv.fr/jours-feries
 */
final class JoursFeriesClient
{
    public const string BASE_URL = 'https://calendrier.api.gouv.fr/jours-feries';
    private readonly Client $janeClient;

    public JoursFeriesApi $joursFeries {
        get => new JoursFeriesApi($this->janeClient);
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
