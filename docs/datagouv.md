# data.gouv.fr

The main French open data platform, exposing datasets, organizations, reuses, dataservices, and more.

- **Official API**: <https://www.data.gouv.fr/api/1/>
- **Documentation**: <https://doc.data.gouv.fr/api/intro/>

---

## Authentication

An API key is **optional for read operations** and **required for write operations**.  
Get your key from your [data.gouv.fr profile](https://www.data.gouv.fr/fr/admin/me/).

```php
use Ecourty\DataGouv\DataGouv\DataGouvClient;

$client = new DataGouvClient();                    // anonymous (read-only)
$client = new DataGouvClient(apiKey: 'your-key');  // authenticated
```

You can also inject a custom PSR-18 HTTP client:

```php
$client = new DataGouvClient(apiKey: 'your-key', httpClient: $psr18Client);
```

---

## Sub-clients

| Property | Description |
|---|---|
| `$client->accessType` | Access types |
| `$client->avatars` | Avatars |
| `$client->contacts` | Contacts |
| `$client->dataservices` | Dataservices (APIs) |
| `$client->datasets` | Datasets |
| `$client->discussions` | Discussions |
| `$client->harvest` | Harvest sources |
| `$client->me` | Authenticated user profile |
| `$client->notifications` | Notifications |
| `$client->organizations` | Organizations |
| `$client->posts` | Blog posts |
| `$client->proconnect` | ProConnect |
| `$client->reports` | Reports |
| `$client->reuses` | Reuses |
| `$client->site` | Site-level information |
| `$client->spatial` | Spatial / geographic data |
| `$client->tags` | Tags |
| `$client->transfer` | Transfers |
| `$client->users` | Users |
| `$client->visualizations` | Visualizations |
| `$client->workers` | Background workers |

---

## Usage Examples

```php
use Ecourty\DataGouv\DataGouv\DataGouvClient;

$client = new DataGouvClient();

// Search datasets
$page = $client->datasets->listDatasets(['q' => 'budget', 'page_size' => 10]);

// Get an organization
$org = $client->organizations->retrieveOrganization('5d6cabb606e3e74ac2b3dde4');

// List reuses
$reuses = $client->reuses->listReuses(['page' => 1]);

// Authenticated: get current user
$client = new DataGouvClient(apiKey: 'your-key');
$me = $client->me->getMe();
```

---

## Constants

```php
DataGouvClient::BASE_URL;    // 'https://www.data.gouv.fr/api/1'
DataGouvClient::AUTH_HEADER; // 'X-API-KEY'
```

---

## Example Scripts

```bash
php examples/list-datasets.php
php examples/list-datasets.php "budget"
php examples/list-organizations.php "ministère"
php examples/dataset-resources.php 5906c1ed88ee386cdb3873a4
php examples/list-dataservices.php "statistiques"
DATA_GOUV_API_KEY=your-key php examples/authenticated-user.php
```
