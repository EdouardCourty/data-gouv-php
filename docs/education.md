# Éducation Nationale — Annuaire de l'éducation

A public API exposing the French school directory (Annuaire de l'Éducation) — primary and secondary schools, their addresses, contact details, and services. No authentication required.

- **Official API**: <https://data.education.gouv.fr/api/v2>

---

## Authentication

No authentication required. This API is fully public.

```php
use Ecourty\DataGouv\DataServices\Education\EducationClient;

$client = new EducationClient();
```

---

## Sub-clients

| Property | Description |
|---|---|
| `$client->dataset` | School directory records — browse and filter |

---

## Usage Examples

```php
use Ecourty\DataGouv\DataServices\Education\EducationClient;

$client = new EducationClient();

// List schools (first 10)
$schools = $client->dataset->getRecords(['limit' => 10]);

// Filter by département
$schools = $client->dataset->getRecords([
    'where' => "code_departement='75'",
    'limit' => 20,
]);
```

---

## Constants

```php
EducationClient::BASE_URL; // 'https://data.education.gouv.fr/api/v2'
```

---

## Example Scripts

```bash
php examples/education-search.php
```
