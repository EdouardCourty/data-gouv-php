# AGENTS.md - Coding Guidelines for AI Agents

## 🎯 Core Concept

### Problem Solved

French government APIs (data.gouv.fr, INSEE SIRENE, Recherche d'entreprises, IGN Géoplateforme, API Géo, Info Financière, Éducation Nationale, Annuaire des services publics, Jours Fériés) expose OpenAPI/Swagger specifications. Writing and maintaining PHP clients by hand is error-prone and quickly becomes outdated as APIs evolve.

### Solution

A **generation-first** PHP library: `composer generate` automatically produces all typed PHP models, HTTP endpoints, sub-clients, exception hierarchies, and clean public facades from live API specs. The only code written by hand is the generator infrastructure itself.

---

## 🏗️ Architecture

### Overview

```
composer generate:{api}
  ├─ Pass 1: jane-php/open-api-{2|3|3-1}  → src/{Namespace}/Client/  (models, endpoints, raw client)
  └─ Pass 2: bin/scripts/generate-facade.php --api={name} → src/{Namespace}/Api/ + {Name}Client.php
```

### Main Components

| Path | Role |
|---|---|
| `bin/console` | ✍️ Symfony Console entry point — exposes `generate [--api=<name>]` and `add-api` commands |
| `bin/scripts/generate-facade.php` | ✍️ Generator (phase 2): generates exceptions + sub-clients + facade. Accepts `--api=<name>` |
| `bin/scripts/download-spec.php` | ✍️ Downloads & patches OpenAPI specs for all non-DataGouv APIs. Handles Entreprise (missing operationIds) and API Géo (YAML→JSON + operationId injection) |
| `bin/scripts/patch-spec.php` | ✍️ Downloads & patches the DataGouv Swagger 2.0 spec (nullable fields) |
| `bin/scripts/patch-generated.php` | ✍️ Fixes DateTime parsing in Jane-generated normalizers. Accepts a directory argument |
| `config/jane/` | ✍️ Jane PHP config files — one per API (e.g. `datagouv.php`, `sirene.php`, …) |
| `src/Generator/ApiConfig.php` | ✍️ Immutable value object with all per-API generation config (including `exceptionDir`) |
| `src/Generator/ApiConfigRegistry.php` | ✍️ Returns `ApiConfig` by name for all registered APIs; holds spec URLs |
| `src/Generator/RegistryValidator.php` | ✍️ Validates consistency of `all()` / `get()` / `specUrls()` — run via `composer validate-registry` |
| `src/Generator/Command/GenerateCommand.php` | ✍️ Orchestrates the full generation pipeline for all APIs or a single one |
| `src/Generator/Command/AddApiCommand.php` | ✍️ Registers a new API domain (downloads spec, patches registry, creates docs stub) |
| `src/Generator/Command/ValidateRegistryCommand.php` | ✍️ Console command `validate-registry`: reports any registry inconsistencies |
| `src/Generator/Renderer/ExceptionRenderer.php` | ✍️ Generates the 5-file exception hierarchy for any API |
| `src/DataGouv/Client/` | **Generated** by Jane PHP from `swagger.patched.json` (Swagger 2.0) |
| `src/DataGouv/Api/{Tag}Api.php` | **Generated** sub-clients, one per tag (21 total) |
| `src/DataGouv/DataGouvClient.php` | **Generated** main entry point |
| `src/DataGouv/Exception/` | **Generated** by `ExceptionRenderer` (5 files: base + 4 typed subclasses) |
| `src/DataServices/Sirene/Client/` | **Generated** by Jane PHP from `sirene.spec.yaml` (OpenAPI 3.1) |
| `src/DataServices/Sirene/Api/` | **Generated** sub-clients (3 files) |
| `src/DataServices/Sirene/SireneClient.php` | **Generated** facade |
| `src/DataServices/Sirene/Exception/` | **Generated** by `ExceptionRenderer` (5 files) |
| `src/DataServices/Entreprise/` | Same structure — OpenAPI 3.0 JSON |
| `src/DataServices/Geoplateforme/` | Same structure — OpenAPI 3.1 YAML |

---

## 🚀 Typical Use Cases

```php
// data.gouv.fr — anonymous read-only
$client = new DataGouvClient();
$page = $client->datasets->listDatasets(['q' => 'budget']);

// data.gouv.fr — authenticated
$client = new DataGouvClient(apiKey: 'your-api-key');
$dataset = $client->datasets->createDataset($payload);

// SIRENE (INSEE) — requires API key
$sirene = new SireneClient(apiKey: 'your-insee-key');
$unit = $sirene->uniteLegale->findBySiren(siren: '552032534');

// Recherche d'entreprises — no auth
$entreprise = new EntrepriseClient();
$result = $entreprise->rechercheTextuelle->searchCompanies(['q' => 'La Poste']);

// Géoplateforme — optional Bearer token
$geo = new GeoplatformeClient();
$result = $geo->search->search(['q' => '20 avenue de Ségur, Paris']);

// API Géo — no auth
$apiGeo = new GeoClient();
$communes = $apiGeo->communes->getCommunes(['nom' => 'Lyon']);

// Éducation Nationale — no auth
$education = new EducationClient();
$schools = $education->dataset->getRecords(['limit' => 10]);

// Info Financière — optional API key (query param)
$infoFin = new InfoFinanciereClient(apiKey: 'your-key');
$infoFin->catalog->getDatasets();

// Annuaire des services publics — no auth
$annuaire = new AnnuaireServicePublicClient();
$annuaire->catalog->getDatasets(['limit' => 5]);

// Custom HTTP client (e.g. for testing)
$client = new DataGouvClient(httpClient: $mockHttpClient);
```

---

## 💡 Design Patterns Used

- **Generation-first**: everything that can be generated is generated; manual code is minimal and stable
- **Facade / sub-clients**: Each `*Client` facade exposes sub-clients as **PHP 8.4 virtual properties** (property hooks) — access via `$client->datasets->listDatasets()`. Sub-clients are stateless wrappers, no caching needed.
- **PSR-18 + HTTPlug**: the HTTP stack is pluggable via PSR-18 (`Psr\Http\Client\ClientInterface`)
- **Exception wrapping**: Jane's HTTP exceptions are caught and re-thrown as our own typed exception hierarchies
- **Config-driven generation**: `ApiConfig` value object + `ApiConfigRegistry` replace all hardcoded constants; `generate-facade.php` is fully parametric via `--api=<name>`

---

## Project breakdown

```
ecourty/data-gouv-client
├── bin/
│   ├── console                   # ✍️ Symfony Console entry point (generate + add-api commands)
│   └── scripts/                  # ✍️ Internal pipeline scripts (called by GenerateCommand)
│       ├── generate-facade.php   # Phase 2 generator: exceptions + sub-clients + facade (--api=<name>)
│       ├── download-spec.php     # Downloads specs; auto-loads patches/{name}.php if it exists
│       ├── patch-spec.php        # Downloads & patches DataGouv Swagger 2.0 spec
│       ├── patch-generated.php  # Fixes DateTime in Jane normalizers (accepts dir argument)
│       └── patches/              # ✍️ Per-API patch files — one per API that needs fixing
│           ├── entreprise.php    # Returns MissingOperationMetadataPatcher instance
│           ├── geo.php           # Returns CompositePatcher (metadata + nullable)
│           └── joursferies.php   # Returns MissingOperationMetadataPatcher with stripSuffixes
├── config/
│   └── jane/                     # ✍️ Jane PHP config files — one per API
│       ├── datagouv.php
│       ├── sirene.php
│       ├── entreprise.php
│       ├── geoplateforme.php
│       ├── geo.php
│       ├── infofinanciere.php
│       ├── education.php
│       ├── annuaireservicepublic.php
│       └── joursferies.php
├── src/
│   ├── Generator/                # ✍️ Generator infrastructure (not generated)
│   │   ├── ApiConfig.php         # Immutable per-API config value object (incl. exceptionDir)
│   │   ├── ApiConfigRegistry.php # Returns ApiConfig by name for all registered APIs; holds spec URLs
│   │   ├── RegistryValidator.php # Validates consistency of all()/get()/specUrls()
│   │   ├── AuthConfig.php        # Value object for auth strategies (named constructors)
│   │   ├── ClientReflector.php   # Reflects on Jane Client methods; fully-qualifies return types
│   │   ├── MethodInfo.php        # DTO for method metadata
│   │   ├── SwaggerSpecParser.php # Parses local JSON/YAML spec → operationId→tags map
│   │   ├── Command/
│   │   │   ├── GenerateCommand.php        # Symfony Console: orchestrates full generation pipeline
│   │   │   ├── AddApiCommand.php          # Symfony Console: registers a new API domain
│   │   │   └── ValidateRegistryCommand.php # Symfony Console: validate-registry consistency check
│   │   ├── Renderer/
│   │   │   ├── ApiClassRenderer.php  # Generates {Tag}Api.php sub-clients
│   │   │   ├── ExceptionRenderer.php # Generates 5-file exception hierarchy per API
│   │   │   └── FacadeRenderer.php    # Generates {Name}Client.php facades
│   │   └── SpecPatcher/          # Composable spec patching classes (used by download-spec.php)
│   │       ├── SpecPatcherInterface.php         # patch(array &$spec): void
│   │       ├── MissingOperationMetadataPatcher.php # Derives operationId + tags from URL paths
│   │       ├── NullablePropertyPatcher.php      # Adds x-nullable to non-required scalar props
│   │       └── CompositePatcher.php             # Composes multiple patchers in sequence
│   ├── DataGouv/                 # data.gouv.fr API
│   │   ├── Client/               # GENERATED — Jane PHP (Swagger 2.0, 228 endpoints, 191 models)
│   │   ├── Api/                  # GENERATED — 21 sub-clients
│   │   ├── Exception/            # GENERATED — ExceptionRenderer (5 files)
│   │   └── DataGouvClient.php    # GENERATED — main facade
│   └── DataServices/             # Additional French government APIs
│       ├── Sirene/               # INSEE SIRENE (OpenAPI 3.1)
│       │   ├── Client/           # GENERATED — 8 endpoints
│       │   ├── Api/              # GENERATED — 3 sub-clients
│       │   ├── Exception/        # GENERATED — ExceptionRenderer (5 files)
│       │   └── SireneClient.php  # GENERATED — facade
│       ├── Entreprise/           # Recherche d'entreprises (OpenAPI 3.0)
│       │   ├── Client/           # GENERATED — 2 endpoints
│       │   ├── Api/              # GENERATED — 2 sub-clients
│       │   ├── Exception/        # GENERATED — ExceptionRenderer (5 files)
│       │   └── EntrepriseClient.php # GENERATED — facade
│       ├── Geoplateforme/        # IGN Géoplateforme Géocodage (OpenAPI 3.1)
│       │   ├── Client/           # GENERATED — 5 endpoints
│       │   ├── Api/              # GENERATED — 4 sub-clients
│       │   ├── Exception/        # GENERATED — ExceptionRenderer (5 files)
│       │   └── GeoplatformeClient.php # GENERATED — facade
│       ├── Geo/                  # API Géo (Swagger 2.0 → patched JSON)
│       │   ├── Client/           # GENERATED — 13 endpoints
│       │   ├── Api/              # GENERATED — 5 sub-clients
│       │   ├── Exception/        # GENERATED — ExceptionRenderer (5 files)
│       │   └── GeoClient.php     # GENERATED — facade
│       ├── InfoFinanciere/       # Info Financière (OpenAPI 3.0, apikey query param)
│       │   ├── Client/           # GENERATED
│       │   ├── Api/              # GENERATED — 2 sub-clients
│       │   ├── Exception/        # GENERATED — ExceptionRenderer (5 files)
│       │   └── InfoFinanciereClient.php # GENERATED — facade
│       ├── Education/            # Éducation Nationale (OpenAPI 3.0)
│       │   ├── Client/           # GENERATED
│       │   ├── Api/              # GENERATED — 1 sub-client
│       │   ├── Exception/        # GENERATED — ExceptionRenderer (5 files)
│       │   └── EducationClient.php # GENERATED — facade
│       └── AnnuaireServicePublic/ # Annuaire des services publics (OpenAPI 3.0)
│           ├── Client/           # GENERATED
│           ├── Api/              # GENERATED — 2 sub-clients
│           ├── Exception/        # GENERATED — ExceptionRenderer (5 files)
│           └── AnnuaireServicePublicClient.php # GENERATED — facade
│       └── JoursFeries/          # Jours Fériés (OpenAPI 3.0, no auth)
│           ├── Client/           # GENERATED — 2 endpoints
│           ├── Api/              # GENERATED — 1 sub-client
│           ├── Exception/        # GENERATED — ExceptionRenderer (5 files)
│           └── JoursFeriesClient.php # GENERATED — facade
├── docs/                         # ✍️ Per-domain API documentation
│   ├── datagouv.md               # data.gouv.fr — auth, sub-clients, examples
│   ├── sirene.md                 # INSEE SIRENE — auth, sub-clients, examples
│   ├── entreprise.md             # Recherche d'entreprises
│   ├── geoplateforme.md          # IGN Géoplateforme Géocodage
│   ├── geo.md                    # API Géo
│   ├── infofinanciere.md         # Info Financière
│   ├── education.md              # Éducation Nationale
│   ├── annuaire-service-public.md # Annuaire des services publics
│   ├── calendrierscolaire.md     # Calendrier Scolaire
│   └── joursferies.md            # Jours Fériés
├── examples/
│   ├── list-datasets.php
│   ├── list-organizations.php
│   ├── dataset-resources.php
│   ├── list-dataservices.php
│   ├── authenticated-user.php
│   ├── sirene-search.php
│   ├── entreprise-search.php
│   ├── geoplateforme-geocode.php
│   ├── geo-communes.php
│   ├── infofinanciere-search.php
│   ├── education-search.php
│   └── annuaire-search.php
├── tests/
│   ├── Unit/
│   ├── Integration/
│   └── Functional/
└── .github/workflows/
    ├── ci.yml                    # CI: YAML lint + tests + PHPStan + CS + drift check
    ├── release.yml               # Secure auto-release for bot-merged spec-update PRs
    └── spec-check.yml            # Cron: regenerate every 48h, open PR if spec drifted
```

**IMPORTANT**: This section should evolve with the project. When a new feature is created, updated or removed, this section should too.

## 🧪 Testing

Tests are located in `tests/{Unit|Integration|Functional}`.

- **Unit** tests: mock the HTTP layer, test the facade, exceptions, and generator infrastructure (`ApiConfig`, `ApiConfigRegistry`, `SpecPatcher`, …)
- **Integration** tests: hit the real API (read-only, no API key required). One directory per API domain, one file per logical group of sub-clients.
- **Functional** tests: end-to-end flows with authentication

### Integration test structure

Every integration test class extends `tests/Integration/IntegrationTestCase.php`, which provides:

| Helper | Purpose |
|---|---|
| `callApi(callable $fn): mixed` | Wraps API calls; auto-skips on network error, 429, 503 |
| `assertSuccessfulResponse(ResponseInterface $r)` | Asserts 2xx, skips on rate-limit/downtime |
| `decodeResponse(ResponseInterface $r): array<array-key, mixed>` | JSON-decodes a raw PSR-7 response |

Test files follow the pattern `tests/Integration/{Domain}/{Tag}IntegrationTest.php`. When testing a "get by ID" endpoint, always derive the ID from the corresponding list endpoint first.

**ODS APIs** (Education, Annuaire, CalendrierScolaire, InfoFinancière) have empty Jane response handlers — use `FETCH_RESPONSE` on `$client->getClient()` and decode manually with `decodeResponse()`.

### Run

```bash
composer test              # all suites (unit + integration)
composer test-unit         # unit only (alias: composer test-fast)
composer test-integration  # integration only (hits live APIs)
composer validate-registry # check ApiConfigRegistry consistency
./vendor/bin/phpunit tests/Integration/{Domain}/  # one domain only
```

---

## Remarks & Guidelines

### General

- NEVER commit or push the git repository.
- When unsure about something, you MUST ask the user for clarification.
- When facing a problem that has an easy "hacky" solution, and a more robust but more difficult to implement one, always choose the robust one.
- ALWAYS write tests for the important components.
- Do NOT write ANY type documentation unless explicitly asked.
- Once a feature is complete, update the @README.md and @AGENTS.md accordingly.
- The @README.md file should consist of a project overview for end-users. It should include:
  - Table of contents
  - Quick start / Installation
  - Core features
  - Configuration reference
  - Usage
  - Development / Contribution guidelines

### Code Quality

- **No magic strings or magic numbers** — every repeated or meaningful literal must be a named constant.
- **Constants must always be typed** — use `public const string`, `public const int`, etc. (PHP 8.3+). Never use bare `const`.
- **Reusable code** — extract any logic used more than once into a dedicated method, helper, or class. Avoid duplication.
- **Performance** — avoid redundant HTTP calls, lazy-instantiate sub-clients (nullsafe `??=`), and never block the constructor with I/O.
- **Cleanliness** — one responsibility per class, short focused methods, no commented-out code, no dead code.
- **Maintainability** — prefer explicit over implicit; if a future developer needs to guess what a value means, it belongs in a constant or a well-named variable.

### Generated Code

- All `Client/`, `Api/`, and `Exception/` directories under `src/DataGouv/` and `src/DataServices/*/` are **generated** — do not edit manually
- All `*Client.php` facades (`DataGouvClient.php`, `SireneClient.php`, etc.) are **generated** — do not edit manually
- To change the generated output, modify the scripts in `bin/` or `src/Generator/` and re-run `composer generate:{api}`
- Generated code (`Client/` and `Api/`) is **excluded** from PHPStan (max level) and PHP-CS-Fixer

### Adding a New API

1. Use `php bin/add-api.php` (or `composer add-api`) — it registers the API in `ApiConfigRegistry`, downloads the spec, and creates the Jane config
2. Run `composer validate-registry` to verify the registry is consistent (no orphaned entries)
3. Run `composer generate` — exceptions, sub-clients, and facade are all generated automatically
4. Create `docs/{name}.md` — document the API (auth, sub-clients table, usage examples)
5. Update `README.md` — add the new API to the "Supported APIs" table with a link to its doc file
6. Update `AGENTS.md` — add the new entry to the project breakdown and `docs/` listing

> **No other files need to change**: `phpstan.neon` uses `src/DataServices/*/Client/**` globs, `.php-cs-fixer.php` excludes all dirs named `Client` or `Api`, and `GenerateCommand` reads from `ApiConfigRegistry::all()` dynamically.
>
> Exception hierarchies are generated automatically by `ExceptionRenderer`.  
> If the new API spec is OpenAPI 3.1, install `jane-php/open-api-3-1`. For 3.0, `jane-php/open-api-3`. For Swagger 2.0, `jane-php/open-api-2`.
>
> An optional `generate:{name}` Composer script can be added for convenience (single-API regeneration), but `composer generate` covers all APIs automatically.

## 📚 References

- **Source code**: `/src`
- **Tests**: `/tests`
- **Generator**: `bin/scripts/generate-facade.php` + `bin/scripts/download-spec.php`
- **Jane PHP docs**: https://jane.readthedocs.io/en/latest/
- **data.gouv.fr API intro**: https://doc.data.gouv.fr/api/intro/
- **data.gouv.fr API reference**: https://doc.data.gouv.fr/api/reference/
- **SIRENE API**: https://api.insee.fr/api-sirene/3.11
- **Recherche d'entreprises**: https://recherche-entreprises.api.gouv.fr
- **Géoplateforme Géocodage**: https://data.geopf.fr/geocodage
- **API Géo**: https://geo.api.gouv.fr
- **Info Financière**: https://www.info-financiere.gouv.fr
- **Éducation Nationale**: https://data.education.gouv.fr/api/v2
- **Annuaire des services publics**: https://api-lannuaire.service-public.gouv.fr
