<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv;

use Ecourty\DataGouv\DataGouv\Api\AccessTypeApi;
use Ecourty\DataGouv\DataGouv\Api\AvatarsApi;
use Ecourty\DataGouv\DataGouv\Api\ContactsApi;
use Ecourty\DataGouv\DataGouv\Api\DataservicesApi;
use Ecourty\DataGouv\DataGouv\Api\DatasetsApi;
use Ecourty\DataGouv\DataGouv\Api\DiscussionsApi;
use Ecourty\DataGouv\DataGouv\Api\HarvestApi;
use Ecourty\DataGouv\DataGouv\Api\MeApi;
use Ecourty\DataGouv\DataGouv\Api\NotificationsApi;
use Ecourty\DataGouv\DataGouv\Api\OrganizationsApi;
use Ecourty\DataGouv\DataGouv\Api\PostsApi;
use Ecourty\DataGouv\DataGouv\Api\ProconnectApi;
use Ecourty\DataGouv\DataGouv\Api\ReportsApi;
use Ecourty\DataGouv\DataGouv\Api\ReusesApi;
use Ecourty\DataGouv\DataGouv\Api\SiteApi;
use Ecourty\DataGouv\DataGouv\Api\SpatialApi;
use Ecourty\DataGouv\DataGouv\Api\TagsApi;
use Ecourty\DataGouv\DataGouv\Api\TransferApi;
use Ecourty\DataGouv\DataGouv\Api\UsersApi;
use Ecourty\DataGouv\DataGouv\Api\VisualizationsApi;
use Ecourty\DataGouv\DataGouv\Api\WorkersApi;
use Ecourty\DataGouv\DataGouv\Client\Client;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\Plugin\HeaderSetPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientInterface;

/**
 * @see https://www.data.gouv.fr/api/1
 */
final class DataGouvClient
{
    public const string BASE_URL = 'https://www.data.gouv.fr/api/1';
    public const string AUTH_HEADER = 'X-API-KEY';

    private readonly Client $janeClient;

    public AccessTypeApi $accessType {
        get => new AccessTypeApi($this->janeClient);
    }

    public AvatarsApi $avatars {
        get => new AvatarsApi($this->janeClient);
    }

    public ContactsApi $contacts {
        get => new ContactsApi($this->janeClient);
    }

    public DataservicesApi $dataservices {
        get => new DataservicesApi($this->janeClient);
    }

    public DatasetsApi $datasets {
        get => new DatasetsApi($this->janeClient);
    }

    public DiscussionsApi $discussions {
        get => new DiscussionsApi($this->janeClient);
    }

    public HarvestApi $harvest {
        get => new HarvestApi($this->janeClient);
    }

    public MeApi $me {
        get => new MeApi($this->janeClient);
    }

    public NotificationsApi $notifications {
        get => new NotificationsApi($this->janeClient);
    }

    public OrganizationsApi $organizations {
        get => new OrganizationsApi($this->janeClient);
    }

    public PostsApi $posts {
        get => new PostsApi($this->janeClient);
    }

    public ProconnectApi $proconnect {
        get => new ProconnectApi($this->janeClient);
    }

    public ReportsApi $reports {
        get => new ReportsApi($this->janeClient);
    }

    public ReusesApi $reuses {
        get => new ReusesApi($this->janeClient);
    }

    public SiteApi $site {
        get => new SiteApi($this->janeClient);
    }

    public SpatialApi $spatial {
        get => new SpatialApi($this->janeClient);
    }

    public TagsApi $tags {
        get => new TagsApi($this->janeClient);
    }

    public TransferApi $transfer {
        get => new TransferApi($this->janeClient);
    }

    public UsersApi $users {
        get => new UsersApi($this->janeClient);
    }

    public VisualizationsApi $visualizations {
        get => new VisualizationsApi($this->janeClient);
    }

    public WorkersApi $workers {
        get => new WorkersApi($this->janeClient);
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
