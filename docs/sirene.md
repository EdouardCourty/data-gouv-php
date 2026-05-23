# SIRENE — INSEE

The French national directory of enterprises and establishments (SIREN / SIRET identifiers), operated by INSEE.

- **Official API**: <https://api.insee.fr/api-sirene/3.11>
- **Registration**: <https://portail-api.insee.fr>

---

## Authentication

An API key is **required**. Register at [portail-api.insee.fr](https://portail-api.insee.fr) to obtain one.

```php
use Ecourty\DataGouv\DataServices\Sirene\SireneClient;

$client = new SireneClient(apiKey: 'your-insee-key');
```

You can also inject a custom PSR-18 HTTP client:

```php
$client = new SireneClient(apiKey: 'your-insee-key', httpClient: $psr18Client);
```

---

## Sub-clients

| Property | Description |
|---|---|
| `$client->uniteLegale` | Legal units — search and retrieve by SIREN |
| `$client->etablissement` | Establishments — search and retrieve by SIRET |
| `$client->informations` | API status and metadata |

---

## Usage Examples

```php
use Ecourty\DataGouv\DataServices\Sirene\SireneClient;

$client = new SireneClient(apiKey: 'your-insee-key');

// Find a company by SIREN
$unit = $client->uniteLegale->findBySiren(siren: '552032534');

// Find an establishment by SIRET
$etab = $client->etablissement->findBySiret(siret: '55203253400027');

// Full-text search
$results = $client->uniteLegale->findUnitesLegales(['q' => 'La Poste']);
```

---

## Constants

```php
SireneClient::BASE_URL;    // 'https://api.insee.fr/api-sirene/3.11'
SireneClient::AUTH_HEADER; // 'X-INSEE-Api-Key-Integration'
```

---

## Example Scripts

```bash
INSEE_API_KEY=your-key php examples/sirene-search.php
```
