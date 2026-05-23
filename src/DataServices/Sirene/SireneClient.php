<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataServices\Sirene;

use Ecourty\DataGouv\DataServices\Sirene\Api\EtablissementApi;
use Ecourty\DataGouv\DataServices\Sirene\Api\InformationsApi;
use Ecourty\DataGouv\DataServices\Sirene\Api\UniteLegaleApi;
use Ecourty\DataGouv\DataServices\Sirene\Client\Client;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\Plugin\HeaderSetPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientInterface;

/**
 * Main entry point for the INSEE SIRENE API client.
 *
 * @see https://api.insee.fr/api-sirene/3.11
 */
final class SireneClient
{
    public const string BASE_URL = 'https://api.insee.fr/api-sirene/3.11';
    public const string AUTH_HEADER = 'X-INSEE-Api-Key-Integration';

    private readonly Client $janeClient;

    public EtablissementApi $etablissement {
        get => new EtablissementApi($this->janeClient);
    }

    public InformationsApi $informations {
        get => new InformationsApi($this->janeClient);
    }

    public UniteLegaleApi $uniteLegale {
        get => new UniteLegaleApi($this->janeClient);
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
            new AddPathPlugin($uri),
        ];

        if ($apiKey !== null) {
            $plugins[] = new HeaderSetPlugin([self::AUTH_HEADER => $apiKey]);
        }
        /** @var Client $janeClient */
        $janeClient = Client::create(new PluginClient($httpClient, $plugins));
        $this->janeClient = $janeClient;
    }
}
