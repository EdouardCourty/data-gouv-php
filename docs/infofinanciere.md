# Info Financière

The French public financial data API, providing access to financial datasets published by the Direction Générale des Finances Publiques (DGFiP).

- **Official API**: <https://www.info-financiere.gouv.fr>

---

## Authentication

An API key is **optional** and passed as a `?apikey=` query parameter.  
Without it, you may hit lower rate limits.

```php
use Ecourty\DataGouv\DataServices\InfoFinanciere\InfoFinanciereClient;

$client = new InfoFinanciereClient();                    // anonymous
$client = new InfoFinanciereClient(apiKey: 'your-key'); // authenticated
```

---

## Sub-clients

| Property | Description |
|---|---|
| `$client->catalog` | Browse available financial datasets |
| `$client->dataset` | Query records from a specific dataset |

---

## Usage Examples

```php
use Ecourty\DataGouv\DataServices\InfoFinanciere\InfoFinanciereClient;

$client = new InfoFinanciereClient();

// List available datasets
$datasets = $client->catalog->getDatasets(['limit' => 10]);

// Query records from a dataset
$records = $client->dataset->getRecords([
    'dataset_id' => 'comptes-individuels-des-communes',
    'limit'      => 20,
]);
```

---

## Constants

```php
InfoFinanciereClient::BASE_URL;        // 'https://www.info-financiere.gouv.fr/api/explore/v2.0'
InfoFinanciereClient::AUTH_QUERY_PARAM; // 'apikey'
```

---

## Example Scripts

```bash
php examples/infofinanciere-search.php
INFO_FINANCIERE_API_KEY=your-key php examples/infofinanciere-search.php
```
