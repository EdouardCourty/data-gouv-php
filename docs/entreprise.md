# Recherche d'entreprises

A public API for searching French companies by name, SIREN/SIRET, or geographic criteria. No authentication required.

- **Official API**: <https://recherche-entreprises.api.gouv.fr>
- **Documentation**: <https://recherche-entreprises.api.gouv.fr/docs/>

---

## Authentication

No authentication required. This API is fully public.

```php
use Ecourty\DataGouv\DataServices\Entreprise\EntrepriseClient;

$client = new EntrepriseClient();
```

---

## Sub-clients

| Property | Description |
|---|---|
| `$client->rechercheTextuelle` | Full-text company search by name, SIREN, or SIRET |
| `$client->rechercheGeographique` | Geographic company search by coordinates or address |

---

## Usage Examples

```php
use Ecourty\DataGouv\DataServices\Entreprise\EntrepriseClient;

$client = new EntrepriseClient();

// Search by name
$results = $client->rechercheTextuelle->searchCompanies(['q' => 'La Poste']);

// Search by location
$results = $client->rechercheGeographique->searchCompaniesByLocation([
    'lat'  => 48.8566,
    'lon'  => 2.3522,
    'radius' => 5,
]);
```

---

## Constants

```php
EntrepriseClient::BASE_URL; // 'https://recherche-entreprises.api.gouv.fr'
```

---

## Example Scripts

```bash
php examples/entreprise-search.php
```
