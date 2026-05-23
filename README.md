# data-gouv-client

[![CI](https://github.com/EdouardCourty/data-gouv-php/actions/workflows/ci.yml/badge.svg)](https://github.com/EdouardCourty/data-gouv-php/actions/workflows/ci.yml)

A typed PHP 8.4 client for the [data.gouv.fr](https://www.data.gouv.fr) API, auto-generated from the official Swagger specification.

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Quick Start](#quick-start)
- [Authentication](#authentication)
- [Sub-clients](#sub-clients)
- [Configuration](#configuration)
- [Examples](#examples)
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

## Quick Start

```php
use Ecourty\DataGouv\DataGouv\DataGouvClient;

$client = new DataGouvClient();

// Access sub-clients via PHP 8.4 property hooks — no parentheses needed
$page = $client->datasets->listDatasets(['q' => 'budget', 'page_size' => 10]);

foreach ($page->getData() as $dataset) {
    echo $dataset->getTitle() . "\n";
}
```

---

## Authentication

An API key is **optional for read operations** and **required for write operations**.

Get your key from your [data.gouv.fr profile](https://www.data.gouv.fr/fr/admin/me/).

```php
$client = new DataGouvClient(apiKey: 'your-api-key');

$me = $client->me->getMe();
echo $me->getFirstName() . ' ' . $me->getLastName();
```

---

## Sub-clients

Each API category is exposed as a typed property on `DataGouvClient` using **PHP 8.4 virtual property hooks** — access them directly, no method call needed.

| Property | Description |
|---|---|
| `$client->datasets` | Datasets |
| `$client->organizations` | Organizations |
| `$client->reuses` | Reuses |
| `$client->dataservices` | Dataservices (APIs) |
| `$client->users` | Users |
| `$client->me` | Authenticated user profile |
| `$client->discussions` | Discussions |
| `$client->harvest` | Harvest sources |
| `$client->tags` | Tags |
| `$client->posts` | Blog posts |
| `$client->site` | Site-level info |
| `$client->spatial` | Spatial / geographic data |
| `$client->notifications` | Notifications |
| `$client->transfer` | Transfers |
| `$client->reports` | Reports |
| `$client->contacts` | Contacts |
| `$client->visualizations` | Visualizations |
| `$client->accessType` | Access types |
| `$client->avatars` | Avatars |
| `$client->proconnect` | ProConnect |
| `$client->workers` | Background workers |

---

## Configuration

```php
use Ecourty\DataGouv\DataGouv\DataGouvClient;
use Symfony\Component\HttpClient\Psr18Client;

$client = new DataGouvClient(
    apiKey: 'your-api-key',      // optional — required for write operations
    httpClient: new Psr18Client(), // optional — defaults to auto-discovered PSR-18 client
);
```

The base URL and API key header name are available as typed constants:

```php
DataGouvClient::BASE_URL;       // 'https://www.data.gouv.fr/api/1'
DataGouvClient::API_KEY_HEADER; // 'X-API-KEY'
```

---

## Examples

Runnable examples are in the `examples/` directory:

```bash
# List datasets
php examples/list-datasets.php
php examples/list-datasets.php "budget"

# List organizations
php examples/list-organizations.php "ministère"

# Fetch a dataset and its resources by ID
php examples/dataset-resources.php 5906c1ed88ee386cdb3873a4

# List dataservices (APIs)
php examples/list-dataservices.php "statistiques"

# Authenticated user profile (requires API key)
DATA_GOUV_API_KEY=your-key php examples/authenticated-user.php
```

---

## Development & Contribution

### Setup

```bash
git clone https://github.com/EdouardCourty/data-gouv-php
cd data-gouv-client
composer install
```

### Regenerate from the API spec

The library is generated from the live Swagger spec. To regenerate:

```bash
composer generate           # full pipeline (patch spec → Jane → patch normalizers → facade → cs-fix)
composer generate:patch-spec      # download & patch the Swagger spec (fixes nullable fields)
composer generate:client          # run Jane PHP (generates models + raw HTTP client)
composer generate:patch-generated # fix DateTime parsing in generated normalizers
composer generate:facade          # generate sub-clients + DataGouvClient facade
```

> **Do not manually edit** `src/DataGouv/Client/`, `src/DataGouv/Api/`, or `src/DataGouv/DataGouvClient.php`.  
> These files are fully generated. To change their output, edit the scripts in `bin/` and re-run `composer generate`.

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

### Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes (update `AGENTS.md` and `README.md` if needed)
4. Ensure `composer qa` passes
5. Open a pull request

---

*This client is auto-generated from the [data.gouv.fr Swagger spec](https://www.data.gouv.fr/api/1/swagger.json).*
