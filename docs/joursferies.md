# Jours Fériés

L'[API Jours Fériés](https://calendrier.api.gouv.fr/jours-feries/) est un service public officiel du gouvernement français qui expose les jours fériés pour toutes les zones géographiques françaises (métropole et outre-mer).

- **Documentation officielle** : [https://calendrier.api.gouv.fr/jours-feries/](https://calendrier.api.gouv.fr/jours-feries/)
- **OpenAPI spec** : [https://calendrier.api.gouv.fr/jours-feries/openapi.yml](https://calendrier.api.gouv.fr/jours-feries/openapi.yml)

---

## Authentication

No authentication required.

---

## Quick Start

```php
use Ecourty\DataGouv\DataServices\JoursFeries\JoursFeriesClient;

$client = new JoursFeriesClient();
```

---

## Sub-clients

| Property | Class | Description |
|---|---|---|
| `$client->joursFeries` | `JoursFeriesApi` | Retrieve public holidays by zone and/or year |

---

## Zones disponibles

| Zone | Description |
|---|---|
| `metropole` | France métropolitaine |
| `guadeloupe` | Guadeloupe |
| `martinique` | Martinique |
| `la-reunion` | La Réunion |
| `mayotte` | Mayotte |
| `saint-barthelemy` | Saint-Barthélemy |
| `saint-martin` | Saint-Martin |
| `saint-pierre-et-miquelon` | Saint-Pierre-et-Miquelon |
| `polynesie-francaise` | Polynésie française |
| `nouvelle-caledonie` | Nouvelle-Calédonie |
| `wallis-et-futuna` | Wallis-et-Futuna |

---

## Usage Examples

```php
use Ecourty\DataGouv\DataServices\JoursFeries\JoursFeriesClient;

$client = new JoursFeriesClient();

// All public holidays in metropolitan France (next 25 years)
$holidays = $client->joursFeries->getJoursFeriesParZone('metropole');
// Returns: ['2025-01-01' => 'Jour de l\'an', '2025-04-21' => 'Lundi de Pâques', ...]

// Public holidays for a specific zone and year
$holidays2024 = $client->joursFeries->getJoursFeriesParZoneEtAnnee('metropole', 2024);

// Overseas territories
$reunionHolidays = $client->joursFeries->getJoursFeriesParZone('la-reunion');
$ncHolidays      = $client->joursFeries->getJoursFeriesParZoneEtAnnee('nouvelle-caledonie', 2025);
```

---

## Constants

```php
JoursFeriesClient::BASE_URL; // 'https://calendrier.api.gouv.fr/jours-feries'
```

