# Géoplateforme — Géocodage (IGN)

The French national mapping agency (IGN) geocoding API: forward geocoding, reverse geocoding, and batch operations.

- **Official API**: <https://data.geopf.fr/geocodage>
- **Documentation**: <https://geoservices.ign.fr/documentation/services/api-et-services-ogc/geocodage-20>

---

## Authentication

Authentication is **optional**. An `Authorization: Bearer` token unlocks higher rate limits.

```php
use Ecourty\DataGouv\DataServices\Geoplateforme\GeoplatformeClient;

$client = new GeoplatformeClient();                           // anonymous
$client = new GeoplatformeClient(bearerToken: 'your-token'); // authenticated
```

---

## Sub-clients

| Property | Description |
|---|---|
| `$client->search` | Forward geocoding — address → coordinates |
| `$client->reverse` | Reverse geocoding — coordinates → address |
| `$client->batch` | Batch geocoding for multiple addresses |
| `$client->getCapabilities` | Service capabilities and metadata |

---

## Usage Examples

```php
use Ecourty\DataGouv\DataServices\Geoplateforme\GeoplatformeClient;

$client = new GeoplatformeClient();

// Geocode an address
$result = $client->search->search(['q' => '20 avenue de Ségur, Paris']);

// Reverse geocode coordinates
$result = $client->reverse->reverse(['lon' => 2.3092, 'lat' => 48.8539]);
```

---

## Constants

```php
GeoplatformeClient::BASE_URL;    // 'https://data.geopf.fr/geocodage'
GeoplatformeClient::AUTH_HEADER; // 'Authorization'
```

---

## Example Scripts

```bash
php examples/geoplateforme-geocode.php
```
