<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Generator;

/**
 * Returns the ApiConfig for a given API name.
 *
 * Supported names: 'datagouv', 'sirene', 'entreprise', 'geoplateforme',
 *                  'geo', 'infofinanciere', 'education', 'annuaireservicepublic'.
 */
final class ApiConfigRegistry
{
    private const string DATAGOUV_SPEC_URL = 'https://www.data.gouv.fr/api/1/swagger.json';
    private const string SIRENE_SPEC_URL = 'https://api-apimanager.insee.fr/portal/environments/DEFAULT/apis/2ba0e549-5587-3ef1-9082-99cd865de66f/pages/6548510e-c3e1-3099-be96-6edf02870699/content';
    private const string ENTREPRISE_SPEC_URL = 'https://recherche-entreprises.api.gouv.fr/openapi.json';
    private const string GEOPLATEFORME_SPEC_URL = 'https://data.geopf.fr/geocodage/openapi.yaml';
    private const string GEO_SPEC_URL = 'https://geo.api.gouv.fr/definition.yml';
    private const string INFO_FINANCIERE_SPEC_URL = 'https://www.info-financiere.gouv.fr/api/v2/swagger.yaml';
    private const string EDUCATION_SPEC_URL = 'https://raw.githubusercontent.com/betagouv/api_gouv_swaggers/main/swaggers/ods/api-annuaire-education-v2.json';
    private const string ANNUAIRE_SERVICE_PUBLIC_SPEC_URL = 'https://api-lannuaire.service-public.gouv.fr/api/explore/v2.1/swagger.json';
    private const string CALENDRIERSCOLAIRE_SPEC_URL = 'https://data.education.gouv.fr/api/v2/swagger.json';
    private const string JOURSFERIES_SPEC_URL = 'https://calendrier.api.gouv.fr/jours-feries/openapi.yml';

    public static function get(string $api): ApiConfig
    {
        return match ($api) {
            'datagouv' => new ApiConfig(
                name: 'datagouv',
                specLocalPath: self::root() . '/specs/datagouv.spec.json',
                libNamespace: 'Ecourty\\DataGouv\\DataGouv',
                baseUrl: 'https://www.data.gouv.fr/api/1',
                auth: AuthConfig::apiKeyHeader('X-API-KEY'),
            ),
            'sirene' => new ApiConfig(
                name: 'sirene',
                specLocalPath: self::root() . '/specs/sirene.spec.yaml',
                libNamespace: 'Ecourty\\DataGouv\\DataServices\\Sirene',
                baseUrl: 'https://api.insee.fr/api-sirene/3.11',
                auth: AuthConfig::apiKeyHeader('X-INSEE-Api-Key-Integration'),
            ),
            'entreprise' => new ApiConfig(
                name: 'entreprise',
                specLocalPath: self::root() . '/specs/entreprise.spec.json',
                libNamespace: 'Ecourty\\DataGouv\\DataServices\\Entreprise',
                baseUrl: 'https://recherche-entreprises.api.gouv.fr',
                auth: AuthConfig::none(),
            ),
            'geoplateforme' => new ApiConfig(
                name: 'geoplateforme',
                specLocalPath: self::root() . '/specs/geoplateforme.spec.yaml',
                libNamespace: 'Ecourty\\DataGouv\\DataServices\\Geoplateforme',
                baseUrl: 'https://data.geopf.fr/geocodage',
                auth: AuthConfig::bearerHeader(),
            ),
            'geo' => new ApiConfig(
                name: 'geo',
                specLocalPath: self::root() . '/specs/geo.spec.json',
                libNamespace: 'Ecourty\\DataGouv\\DataServices\\Geo',
                baseUrl: 'https://geo.api.gouv.fr',
                auth: AuthConfig::none(),
            ),
            'infofinanciere' => new ApiConfig(
                name: 'infofinanciere',
                specLocalPath: self::root() . '/specs/infofinanciere.spec.yaml',
                libNamespace: 'Ecourty\\DataGouv\\DataServices\\InfoFinanciere',
                baseUrl: 'https://www.info-financiere.gouv.fr/api/explore/v2.0',
                auth: AuthConfig::queryParam('apikey'),
            ),
            'education' => new ApiConfig(
                name: 'education',
                specLocalPath: self::root() . '/specs/education.spec.json',
                libNamespace: 'Ecourty\\DataGouv\\DataServices\\Education',
                baseUrl: 'https://data.education.gouv.fr/api/v2',
                auth: AuthConfig::none(),
            ),
            'annuaireservicepublic' => new ApiConfig(
                name: 'annuaireservicepublic',
                specLocalPath: self::root() . '/specs/annuaireservicepublic.spec.json',
                libNamespace: 'Ecourty\\DataGouv\\DataServices\\AnnuaireServicePublic',
                baseUrl: 'https://api-lannuaire.service-public.gouv.fr/api/explore/v2.1',
                auth: AuthConfig::none(),
            ),
            'calendrierscolaire' => new ApiConfig(
                name: 'calendrierscolaire',
                specLocalPath: self::root() . '/specs/calendrierscolaire.spec.json',
                libNamespace: 'Ecourty\\DataGouv\\DataServices\\CalendrierScolaire',
                baseUrl: 'https://data.education.gouv.fr/api/v2',
                auth: AuthConfig::none(),
            ),
            'joursferies' => new ApiConfig(
                name: 'joursferies',
                specLocalPath: self::root() . '/specs/joursferies.spec.json',
                libNamespace: 'Ecourty\\DataGouv\\DataServices\\JoursFeries',
                baseUrl: 'https://calendrier.api.gouv.fr/jours-feries',
                auth: AuthConfig::none(),
            ),
            default => throw new \InvalidArgumentException(
                \sprintf("Unknown API '%s'. Available: %s", $api, implode(', ', self::all())),
            ),
        };
    }

    /** @return list<string> */
    public static function all(): array
    {
        return ['datagouv', 'sirene', 'entreprise', 'geoplateforme', 'geo', 'infofinanciere', 'education', 'annuaireservicepublic', 'calendrierscolaire', 'joursferies'];
    }

    /** @return array<string, string> */
    public static function specUrls(): array
    {
        return [
            'datagouv' => self::DATAGOUV_SPEC_URL,
            'sirene' => self::SIRENE_SPEC_URL,
            'entreprise' => self::ENTREPRISE_SPEC_URL,
            'geoplateforme' => self::GEOPLATEFORME_SPEC_URL,
            'geo' => self::GEO_SPEC_URL,
            'infofinanciere' => self::INFO_FINANCIERE_SPEC_URL,
            'education' => self::EDUCATION_SPEC_URL,
            'annuaireservicepublic' => self::ANNUAIRE_SERVICE_PUBLIC_SPEC_URL,
            'calendrierscolaire' => self::CALENDRIERSCOLAIRE_SPEC_URL,
            'joursferies' => self::JOURSFERIES_SPEC_URL,
        ];
    }

    private static function root(): string
    {
        return \dirname(__DIR__, 2);
    }
}
