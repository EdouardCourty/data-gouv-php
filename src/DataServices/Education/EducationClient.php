<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataServices\Education;

use Ecourty\DataGouv\DataServices\Education\Api\DatasetApi;
use Ecourty\DataGouv\DataServices\Education\Client\Client;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientInterface;

/**
 * @see https://data.education.gouv.fr/api/v2
 */
final class EducationClient
{
    public const string BASE_URL = 'https://data.education.gouv.fr/api/v2';
    private readonly Client $janeClient;

    public DatasetApi $dataset {
        get => new DatasetApi($this->janeClient);
    }

    public function __construct(
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
