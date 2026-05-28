# Annuaire des services publics

A public API providing a directory of French public services — town halls, prefectures, social services, and more. No authentication required.

- **Official API**: <https://api-lannuaire.service-public.gouv.fr>
- **Documentation**: <https://api-lannuaire.service-public.gouv.fr/api/explore/v2.1/console>

---

## Authentication

No authentication required. This API is fully public.

```php
use Ecourty\DataGouv\DataServices\AnnuaireServicePublic\AnnuaireServicePublicClient;

$client = new AnnuaireServicePublicClient();
```

---

## Sub-clients

| Property | Description |
|---|---|
| `$client->catalog` | Browse available datasets |
| `$client->dataset` | Query records from a specific dataset |

---

## Usage Examples

```php
use Ecourty\DataGouv\DataServices\AnnuaireServicePublic\AnnuaireServicePublicClient;

$client = new AnnuaireServicePublicClient();

// List available datasets
$datasets = $client->catalog->getDatasets(['limit' => 5]);

// Query public service records
$records = $client->dataset->getRecords([
    'dataset_id' => 'annuaire-des-mairies',
    'where'      => "code_postal='75001'",
    'limit'      => 10,
]);
```

---

## Constants

```php
AnnuaireServicePublicClient::BASE_URL; // 'https://api-lannuaire.service-public.gouv.fr/api/explore/v2.1'
```

---

## Example Scripts

```bash
php examples/annuaire-search.php
```
