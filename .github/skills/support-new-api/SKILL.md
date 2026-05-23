---
name: support-new-api
description: Add a new French government (or any public) API to the ecourty/data-gouv-client library. Covers the one-command workflow, authentication options, generated output, and how to handle specs that need patching.
---

# Adding Support for a New API

This library uses a **generation-first** pipeline: given an OpenAPI/Swagger spec, it generates typed PHP models, endpoint wrappers, sub-clients, a facade, and an exception hierarchy automatically.

Adding a new API requires **zero hand-written code** in most cases. The full pipeline is driven by a single CLI command.

---

## Quick Start

```bash
php bin/console add-api \
  --name=myapi \
  --spec-url=https://api.example.com/openapi.json \
  --namespace="Ecourty\DataGouv\DataServices\MyApi" \
  --base-url=https://api.example.com \
  --auth=none \
  --generate
```

Or via Composer:

```bash
composer add-api -- --name=myapi --spec-url=... --namespace=... --base-url=... --auth=none --generate
```

---

## Command Reference

| Flag | Required | Description |
|---|---|---|
| `--name` | ✅ | Lowercase alphanumeric identifier (e.g. `myapi`) |
| `--spec-url` | ✅ | Public URL of the OpenAPI/Swagger spec (JSON or YAML) |
| `--namespace` | ✅ | PHP namespace, e.g. `Ecourty\DataGouv\DataServices\MyApi` |
| `--base-url` | ✅ | API base URL, e.g. `https://api.example.com` |
| `--auth` | ✅ | Auth strategy (see below) |
| `--auth-key` | ⚠️ | Header or query-param name (required for `api-key-header` and `query-param`) |
| `--generate` | ❌ | If present, runs the full generation pipeline immediately |

### Authentication strategies (`--auth`)

| Value | Header/param | Example usage |
|---|---|---|
| `none` | — | Public APIs with no auth |
| `api-key-header` | `--auth-key=X-Api-Key` | `X-Api-Key: {key}` in the request header |
| `bearer-header` | `--auth-key=Authorization` (optional, defaults to `Authorization`) | `Authorization: Bearer {token}` |
| `query-param` | `--auth-key=apikey` | `?apikey={key}` appended to the URL |

---

## What Gets Created

Running `add-api` creates or modifies exactly these files:

```
specs/{name}.spec.{json|yaml}        ← downloaded spec (gitignored)
config/jane/{name}.php               ← Jane PHP generation config
src/Generator/ApiConfigRegistry.php  ← patched (const + match arm + all() + specUrls())
docs/{name}.md                       ← documentation stub (hand-written, fill in after generation)
```

Running `--generate` (or `php bin/console generate --api={name}`) then produces:

```
src/DataServices/{Name}/
├── Client/          ← Jane PHP generated (models, normalizers, Client.php)
├── Api/             ← generated sub-clients, one per Swagger tag
│   ├── FooApi.php
│   └── BarApi.php
├── Exception/       ← generated exception hierarchy (5 files)
│   ├── {Name}Exception.php
│   ├── ApiException.php
│   ├── AuthenticationException.php
│   ├── ForbiddenException.php
│   └── NotFoundException.php
└── {Name}Client.php ← generated facade with PHP 8.4 property hooks
```

**Do not edit the generated files manually.** Regenerate with `php bin/console generate --api={name}`.

---

## Namespace Convention

The namespace determines the filesystem path automatically:

| Namespace | → Path |
|---|---|
| `Ecourty\DataGouv\DataServices\MyApi` | `src/DataServices/MyApi/` |
| `Ecourty\DataGouv\DataServices\Foo\Bar` | `src/DataServices/Foo/Bar/` |

The facade class name is also derived: last segment + `Client`:
- `DataServices\MyApi` → `MyApiClient`
- `DataServices\CalendrierScolaire` → `CalendrierScolaireClient`

---

## Namespace Root Constraint

All namespaces **must** start with `Ecourty\DataGouv\`. This is the PSR-4 root mapped to `src/` in `composer.json`. Do not change this prefix.

---

## Handling Specs That Need Patching

Some specs from the wild are incomplete (missing `operationId`, missing `tags`, etc.).
Jane PHP requires both to generate usable code.

If generation fails or produces no sub-clients, inspect the downloaded spec and create a patch file in `bin/scripts/patches/{name}.php`. This file must return a `SpecPatcherInterface` instance.

**Most common case — missing `operationId` and `tags`:**

```php
// bin/scripts/patches/myapi.php
<?php
declare(strict_types=1);

use Ecourty\DataGouv\Generator\SpecPatcher\MissingOperationMetadataPatcher;

// Derives operationId and tags from the URL paths automatically — no hardcoded list needed:
//   GET /resources         → operationId: getResources,           tag: Resources
//   GET /resources/{id}    → operationId: getResourcesById,       tag: Resources
//   GET /resources/{id}/items → operationId: getResourcesByIdItems, tag: Resources
return new MissingOperationMetadataPatcher(defaultTag: 'MyApi');
```

**Options:**

| Constructor param | Type | Default | Description |
|---|---|---|---|
| `defaultTag` | `string` | `'Api'` | Tag to use when all path segments are parameters (e.g. `/{zone}`) |
| `stripSuffixes` | `list<string>` | `[]` | Strings stripped from path segments before derivation (e.g. `['.json']`) |

**Composing multiple patchers** (e.g., also need x-nullable fix for Swagger 2.0):

```php
// bin/scripts/patches/myapi.php
<?php
declare(strict_types=1);

use Ecourty\DataGouv\Generator\SpecPatcher\CompositePatcher;
use Ecourty\DataGouv\Generator\SpecPatcher\MissingOperationMetadataPatcher;
use Ecourty\DataGouv\Generator\SpecPatcher\NullablePropertyPatcher;

return new CompositePatcher(
    new MissingOperationMetadataPatcher(defaultTag: 'MyApi'),
    new NullablePropertyPatcher(),  // marks non-required scalar properties as x-nullable
);
```

**Format note:** patch files always output JSON. If the upstream spec is YAML but a patch file exists, the local spec file should have a `.spec.json` extension — update `ApiConfigRegistry` and `config/jane/{name}.php` accordingly.

---

## After Adding a New API

1. **Verify generation succeeded**: `ls src/DataServices/{Name}/`
2. **Run QA**: `composer phpstan && composer cs-check && composer test-unit`
3. **Complete the documentation stub**: fill in `docs/{name}.md` — description, sub-clients table, usage examples
4. **Update `README.md`**: add the new API to the "Supported APIs" table with a link to `docs/{name}.md`
5. **Update `AGENTS.md`**: add the new entry to the project breakdown and the `docs/` listing
6. **Write a smoke test** in `tests/Integration/` to confirm the facade connects (optional but recommended)

---

## Removing an API

Manual steps (no dedicated command exists):

1. Delete `{name}.spec.{json|yaml}` and `config/jane/{name}.php`
2. Delete `src/DataServices/{Name}/`
3. Delete `docs/{name}.md`
4. Remove the entry from `ApiConfigRegistry` — const, `get()` match arm, `all()` array, `specUrls()` array
5. Remove the row from the "Supported APIs" table in `README.md`
6. Remove the entry from the `docs/` listing in `AGENTS.md`

---

## Example: Full Run

```
$ php bin/add-api.php \
    --name=calendrierscolaire \
    --spec-url=https://data.education.gouv.fr/api/v2/swagger.json \
    --namespace="Ecourty\DataGouv\DataServices\CalendrierScolaire" \
    --base-url=https://data.education.gouv.fr/api/v2 \
    --auth=none \
    --generate

Downloading spec from https://data.education.gouv.fr/api/v2/swagger.json ...
Downloaded 45816 bytes.
Saved spec to /…/calendrierscolaire.spec.json
Created /…/config/jane/calendrierscolaire.php
Patched ApiConfigRegistry.php

Running generation for 'calendrierscolaire'...
=== Generating: calendrierscolaire ===
  → php bin/download-spec.php --api=calendrierscolaire
  → php vendor/bin/jane-openapi generate --config-file config/jane/calendrierscolaire.php
  → php bin/patch-generated.php src/DataServices/CalendrierScolaire/Client
  → php bin/generate-facade.php --api=calendrierscolaire
Generated Exception/CalendrierScolaireException.php (+ 4 subclasses)
  Generated Api/CatalogApi.php (7 methods)
  Generated Api/DatasetApi.php (9 methods)
Generated CalendrierScolaireClient.php (2 sub-clients)

✓ API 'calendrierscolaire' registered successfully.
```

Usage in PHP:

```php
use Ecourty\DataGouv\DataServices\CalendrierScolaire\CalendrierScolaireClient;

$client = new CalendrierScolaireClient();
$results = $client->dataset->getRecords(['limit' => 10]);
```
