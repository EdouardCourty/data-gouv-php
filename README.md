# data-gouv-client

[![CI](https://github.com/EdouardCourty/data-gouv-client/actions/workflows/ci.yml/badge.svg)](https://github.com/EdouardCourty/data-gouv-client/actions/workflows/ci.yml)

A typed PHP 8.4 client for French government APIs, auto-generated from their official OpenAPI specifications.

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Supported APIs](#supported-apis)
- [Quick Start](#quick-start)
- [Development & Contribution](#development--contribution)

---

## Requirements

- PHP 8.4+
- Composer

---

## Installation

```bash
composer require ecourty/data-gouv-client
```

---

## Supported APIs

| API | Client class | Auth | Documentation |
|-----|-------------|------|---------------|
| [data.gouv.fr](https://www.data.gouv.fr/api/1/) | `DataGouvClient` | Optional API key | [docs/datagouv.md](docs/datagouv.md) |
| [SIRENE (INSEE)](https://api.insee.fr/api-sirene/3.11) | `SireneClient` | API key required | [docs/sirene.md](docs/sirene.md) |
| [Recherche d'entreprises](https://recherche-entreprises.api.gouv.fr) | `EntrepriseClient` | None | [docs/entreprise.md](docs/entreprise.md) |
| [Géoplateforme Géocodage](https://data.geopf.fr/geocodage) | `GeoplatformeClient` | Optional Bearer token | [docs/geoplateforme.md](docs/geoplateforme.md) |
| [API Géo](https://geo.api.gouv.fr) | `GeoClient` | None | [docs/geo.md](docs/geo.md) |
| [Info Financière](https://www.info-financiere.gouv.fr) | `InfoFinanciereClient` | Optional API key | [docs/infofinanciere.md](docs/infofinanciere.md) |
| [Éducation Nationale](https://data.education.gouv.fr/api/v2) | `EducationClient` | None | [docs/education.md](docs/education.md) |
| [Annuaire des services publics](https://api-lannuaire.service-public.gouv.fr) | `AnnuaireServicePublicClient` | None | [docs/annuaire-service-public.md](docs/annuaire-service-public.md) |
| [Calendrier Scolaire](https://data.education.gouv.fr/api/v2) | `CalendrierScolaireClient` | None | [docs/calendrierscolaire.md](docs/calendrierscolaire.md) |
| [Jours Fériés](https://calendrier.api.gouv.fr/jours-feries/) | `JoursFeriesClient` | None | [docs/joursferies.md](docs/joursferies.md) |

Sub-clients are exposed as **PHP 8.4 virtual property hooks** — access them directly, no method call needed.

---

## Quick Start

```php
use Ecourty\DataGouv\DataGouv\DataGouvClient;

// Anonymous read-only access
$client = new DataGouvClient();
$datasets = $client->datasets->listDatasets(['q' => 'budget', 'page_size' => 10]);

// Authenticated access (required for write operations)
$client = new DataGouvClient(apiKey: 'your-key');
$me = $client->me->getMe();
```

See each API's documentation in [`docs/`](docs/) for details on authentication, sub-clients, and examples.

---

## Development & Contribution

### Setup

```bash
git clone https://github.com/EdouardCourty/data-gouv-client
cd data-gouv-client
composer install
```

### Regenerate from the API specs

The library is fully generated from live OpenAPI specs. To regenerate:

```bash
composer generate                                    # all APIs (download → Jane → patch → facade → cs-fix)
php bin/console generate --api=datagouv             # data.gouv.fr only
php bin/console generate --api=sirene               # INSEE SIRENE only
php bin/console generate --api=entreprise           # Recherche d'entreprises only
php bin/console generate --api=geoplateforme        # Géoplateforme Géocodage only
php bin/console generate --api=geo                  # API Géo only
php bin/console generate --api=infofinanciere       # Info Financière only
php bin/console generate --api=education            # Éducation Nationale only
php bin/console generate --api=annuaireservicepublic # Annuaire des services publics only
php bin/console generate --api=calendrierscolaire   # Calendrier Scolaire only
php bin/console generate --api=joursferies          # Jours Fériés only
```

> **Do not manually edit** anything under `src/*/Client/`, `src/*/Api/`, `src/*/Exception/`, or the `*Client.php` facades — these files are fully generated. To change their output, edit the scripts in `bin/` or `src/Generator/` and re-run `composer generate`.

### QA

```bash
composer test              # all tests (unit + integration)
composer test-unit         # unit tests only
composer test-integration  # integration tests (hits the real API)
composer phpstan           # static analysis
composer cs-check          # code style check
composer cs-fix            # auto-fix code style
composer qa                # phpstan + cs-check + all tests
```

### Adding a new API

Use the provided CLI command:

```bash
php bin/console add-api \
  --name=myapi \
  --spec-url=https://api.example.com/openapi.json \
  --namespace="Ecourty\DataGouv\DataServices\MyApi" \
  --base-url=https://api.example.com \
  --auth=none \
  --generate
```

See [`.github/skills/support-new-api/SKILL.md`](.github/skills/support-new-api/SKILL.md) for the full guide.

### Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes (update `AGENTS.md`, `README.md`, and `docs/` as needed)
4. Ensure `composer qa` passes
5. Open a pull request
