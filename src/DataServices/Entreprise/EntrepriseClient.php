<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataServices\Entreprise;

use Ecourty\DataGouv\DataServices\Entreprise\Api\RechercheGeographiqueApi;
use Ecourty\DataGouv\DataServices\Entreprise\Api\RechercheTextuelleApi;
use Ecourty\DataGouv\DataServices\Entreprise\Client\Client;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientInterface;

/**
 * @see https://recherche-entreprises.api.gouv.fr
 */
final class EntrepriseClient
{
    public const string BASE_URL = 'https://recherche-entreprises.api.gouv.fr';
    private readonly Client $janeClient;

    public RechercheGeographiqueApi $rechercheGeographique {
        get => new RechercheGeographiqueApi($this->janeClient);
    }

    public RechercheTextuelleApi $rechercheTextuelle {
        get => new RechercheTextuelleApi($this->janeClient);
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
