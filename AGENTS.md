# AGENTS.md - Coding Guidelines for AI Agents

## 🎯 Core Concept

### Problem Solved

The data.gouv.fr platform (and its ecosystem APIs) expose a large Swagger/OpenAPI 2.0 specification. Writing and maintaining a PHP client by hand is error-prone and quickly becomes outdated as the API evolves.

### Solution

A **generation-first** PHP library: a two-pass `composer generate` script automatically produces all typed PHP models, HTTP endpoints, sub-clients, and a clean public facade from the live API spec. Only the exception hierarchy and the generator script itself are written by hand.

---

## 🏗️ Architecture

### Overview

```
composer generate
  ├─ Pass 1: jane-php/open-api-2  → src/DataGouv/Client/  (models, endpoints, raw client)
  └─ Pass 2: bin/generate-facade.php → src/DataGouv/Api/ + DataGouvClient.php
```

### Main Components

| Path | Role |
|---|---|
| `bin/generate-facade.php` | ✍️ Generator script (phase 2): groups Client methods by Swagger tag → produces sub-clients + facade |
| `src/DataGouv/Client/` | **Generated** by Jane PHP from `https://www.data.gouv.fr/api/1/swagger.json` |
| `src/DataGouv/Api/{Tag}Api.php` | **Generated** sub-clients, one per Swagger tag (21 total) |
| `src/DataGouv/DataGouvClient.php` | **Generated** main entry point with lazy sub-client access |
| `src/DataGouv/Exception/` | ✍️ Hand-written exception hierarchy (5 files, stable) |

---

## 🚀 Typical Use Cases

```php
// Anonymous read-only access
$client = new DataGouvClient();
$page = $client->datasetsApi()->listDatasets(['q' => 'budget']);

// Authenticated (write) access
$client = new DataGouvClient(apiKey: 'your-api-key');
$dataset = $client->datasetsApi()->createDataset($payload);

// Using a custom HTTP client (e.g., for testing)
$client = new DataGouvClient(httpClient: $mockHttpClient);
```

---

## 💡 Design Patterns Used

- **Generation-first**: everything that can be generated is generated; manual code is minimal and stable
- **Facade / sub-clients**: `DataGouvClient` exposes sub-clients as **PHP 8.4 virtual properties** (property hooks) — access via `$client->datasets->listDatasets()`, not `$client->datasets()->listDatasets()`. Sub-clients are stateless wrappers, so no caching is needed.
- **PSR-18 + HTTPlug**: the HTTP stack is pluggable via PSR-18 (`Psr\Http\Client\ClientInterface`)
- **Exception wrapping**: Jane's HTTP exceptions are caught and re-thrown as our own `DataGouvException` hierarchy

---

## Project breakdown

```
ecourty/data-gouv-client
├── bin/
│   └── generate-facade.php       # Phase 2 generator
├── src/
│   └── DataGouv/                 # data.gouv.fr API (main)
│       ├── Client/               # Jane PHP generated (228 endpoints, 191 models)
│       ├── Api/                  # Generated sub-clients (21 files)
│       ├── Exception/            # Hand-written exception hierarchy
│       └── DataGouvClient.php    # Generated main facade
├── tests/
│   ├── Unit/
│   ├── Integration/
│   └── Functional/
├── .jane-openapi                 # Jane PHP config
└── .github/workflows/
    ├── ci.yml                    # CI: tests + PHPStan + CS on push/PR
    └── spec-check.yml            # Cron: regenerate every 48h, open PR if spec drifted
```

**IMPORTANT**: This section should evolve with the project. When a new feature is created, updated or removed, this section should too.

## 🧪 Testing

Tests are located in `tests/{Unit|Integration|Functional}`.

- **Unit** tests: mock the HTTP layer, test the facade and exceptions
- **Integration** tests: hit the real API (read-only, no API key required)
- **Functional** tests: end-to-end flows with authentication

Run:
```bash
composer test          # all suites
composer test-unit     # unit only
composer test-fast     # alias for unit
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

- `src/DataGouv/Client/` and `src/DataGouv/Api/` are **generated** — do not edit manually
- `src/DataGouv/DataGouvClient.php` is **generated** — do not edit manually
- To change the generated output, modify `bin/generate-facade.php` and re-run `composer generate`
- Generated code is **excluded** from PHPStan (max level) and PHP-CS-Fixer

### Adding New APIs (e.g., API Entreprise)

1. Create a `.jane-openapi-{name}` config pointing to the new spec
2. Add a `"generate:{name}"` Composer script
3. Create `src/{ApiName}/Exception/` with the exception hierarchy
4. The sub-clients and facade are generated automatically
5. Update `AGENTS.md` and `README.md`

## 📚 References

- **Source code**: `/src`
- **Tests**: `/tests`
- **Generator**: `bin/generate-facade.php`
- **Jane PHP docs**: https://jane.readthedocs.io/en/latest/
- **data.gouv.fr API intro**: https://doc.data.gouv.fr/api/intro/
- **data.gouv.fr API reference**: https://doc.data.gouv.fr/api/reference/
