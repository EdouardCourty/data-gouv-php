# API Géo

A public API for querying French administrative boundaries: communes, EPCI, départements, and régions. No authentication required.

- **Official API**: <https://geo.api.gouv.fr>
- **Documentation**: <https://geo.api.gouv.fr/decoupage-administratif>

---

## Authentication

No authentication required. This API is fully public.

```php
use Ecourty\DataGouv\DataServices\Geo\GeoClient;

$client = new GeoClient();
```

---

## Sub-clients

| Property | Description |
|---|---|
| `$client->communes` | Communes (cities) — search, filter, retrieve |
| `$client->communesAssocieesDeleguees` | Associated and delegated communes |
| `$client->departements` | Départements |
| `$client->ePCI` | EPCI (établissements publics de coopération intercommunale) |
| `$client->regions` | Régions |

---

## Usage Examples

```php
use Ecourty\DataGouv\DataServices\Geo\GeoClient;

$client = new GeoClient();

// Search communes by name
$communes = $client->communes->getCommunes(['nom' => 'Lyon']);

// Get a département
$dept = $client->departements->getDepartement('69');

// List all régions
$regions = $client->regions->getRegions();

// Get EPCI for a commune
$epci = $client->ePCI->getEpciByCode('200046977');
```

---

## Constants

```php
GeoClient::BASE_URL; // 'https://geo.api.gouv.fr'
```

---

## Example Scripts

```bash
php examples/geo-communes.php
```
