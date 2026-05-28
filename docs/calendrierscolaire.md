# Calendrier Scolaire

A public API exposing the French school calendar — academic year dates, holiday zones (A, B, C), and vacation periods. No authentication required.

- **Official API**: <https://data.education.gouv.fr/api/v2>
- **Spec**: <https://petstore.swagger.io/?url=https%3A%2F%2Fdata.education.gouv.fr%2Fapi%2Fv2%2Fswagger.json>

---

## Authentication

No authentication required. This API is fully public.

```php
use Ecourty\DataGouv\DataServices\CalendrierScolaire\CalendrierScolaireClient;

$client = new CalendrierScolaireClient();
```

---

## Sub-clients

| Property | Description |
|---|---|
| `$client->catalog` | Browse available school calendar datasets |
| `$client->dataset` | Query school calendar records (vacation periods, zones) |

---

## Usage Examples

```php
use Ecourty\DataGouv\DataServices\CalendrierScolaire\CalendrierScolaireClient;

$client = new CalendrierScolaireClient();

// List available datasets
$datasets = $client->catalog->getDatasets(['limit' => 5]);

// Get vacation periods
$records = $client->dataset->getRecords([
    'dataset_id' => 'fr-en-calendrier-scolaire',
    'limit'      => 10,
]);
```

---

## Constants

```php
CalendrierScolaireClient::BASE_URL; // 'https://data.education.gouv.fr/api/v2'
```
