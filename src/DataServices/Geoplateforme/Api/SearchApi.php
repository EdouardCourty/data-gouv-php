<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Api;

use Ecourty\DataGouv\DataServices\Geoplateforme\Client\Client;
use Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\ClientException;
use Ecourty\DataGouv\DataServices\Geoplateforme\Exception\ApiException;
use Ecourty\DataGouv\DataServices\Geoplateforme\Exception\AuthenticationException;
use Ecourty\DataGouv\DataServices\Geoplateforme\Exception\GeoplateformeException;
use Ecourty\DataGouv\DataServices\Geoplateforme\Exception\ForbiddenException;
use Ecourty\DataGouv\DataServices\Geoplateforme\Exception\NotFoundException;

/**
 * Sub-client for the "search" tag.
 */
final class SearchApi
{
    public function __construct(private readonly Client $client)
    {
    }

    /**
    * @param array{
    *    "q"?: string, //chaîne décrivant la localisation à rechercher
    
    Exemples de requêtes:
    - /search?q=73 Avenue de Paris Saint-Mandé
    - /search?q=cimetière Vincennes
    - /search?q=75056104AE0003
    
    Note:
    L'absence de valeur est autorisée sur le type parcel pour réaliser une recherche structurée.
    Par exemple: /search?q=&index=parcel&departmentcode=75&municipalitycode=056&section=AV
    *    "autocomplete"?: string, //indique si la recherche doit être effectuée en mode auto-complétion (comportement par défaut).
    *    "index"?: string, //index(es) de recherche :
    - <b>address</b> pour la recherche par adresse
    - <b>parcel</b> pour la recherche par parcelle cadastrale
    - <b>poi</b> pour la recherche par lieu et unité administrative
    
    Il est possible de spécifier plusieurs indexes séparés par une virgule.
    
    Exemples:
    - /search?index=parcel
    - /search?index=poi,address
    *    "limit"?: int, //Nombre maximum de résultats retournés.
    La valeur ne peut pas dépasser 50.
    Dans le cas où returntruegeometry est activé, la valeur est automatiquement ramenée à 20.
    *    "lat"?: int, //latitude d'un localisant pour favoriser les candidats les plus proches.
    *    "lon"?: int, //longitude d'un localisant pour favoriser les candidats les plus proches.
    *    "returntruegeometry"?: bool, //indique si la vraie géométrie doit être retournée
    *    "postcode"?: mixed, //Filtre pour les index address et poi. Il permet de filtrer les résultats par code postal. Accepte plusieurs valeurs séparées par des virgules (maximum 50).
    *    "citycode"?: mixed, //Filtre pour les index address et poi. Il permet de filtrer les résultats par code INSEE. Accepte plusieurs valeurs séparées par des virgules (maximum 200).
    *    "depcode"?: mixed, //Filtre pour les index address et poi. Il permet de filtrer les résultats par code départmeent. Accepte plusieurs valeurs séparées par des virgules (maximum 10).
    *    "type"?: string, //Filtre pour l'index address. Il permet de filtrer par type de données adresse : numéro de maison, rue, commune, ...
    *    "city"?: string, //Filtre pour les index address et poi. Il permet de filtrer par nom de commune.
    *    "category"?: mixed, //Filtre pour l'index poi. Il permet de filtrer par catégorie de poi.
    Les valeurs possibles sont listées dans le getCapabilities du service de géocodage.
    Accepte plusieurs valeurs séparées par des virgules (maximum 10).
    *    "departmentcode"?: string, //Filtre pour l'index parcel. Il permet de filtrer par code de département.
    *    "municipalitycode"?: string, //Filtre pour l'index parcel. Il permet de filtrer par code de commune.
    *    "oldmunicipalitycode"?: string, //Filtre pour l'index parcel. Il permet de filtrer par code d'ancienne commune.
    *    "districtcode"?: string, //Filtre pour l'index parcel. Il permet de filtrer par code d'arrondissement.
    *    "section"?: string, //Filtre pour l'index parcel. Il permet de filtrer par section.
    *    "number"?: string, //Filtre pour l'index parcel. Il permet de filtrer par numéro.
    *    "sheet"?: string, //Filtre pour l'index parcel. Il permet de filtrer par feuille.
    * } $queryParameters
    
    * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\SearchBadRequestException
    *
    */
        public function search(array $queryParameters = []): mixed
    {
        try {
            return $this->client->search($queryParameters, \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * Géocodage direct en masse d’un fichier CSV. Les paramètres de la requête permettent de spécifier les colonnes à utiliser pour le géocodage, les index à utiliser, les filtres à appliquer et les colonnes à conserver dans le fichier CSV de sortie.
     *
     * Le fichier soumis doit faire une taille maximale de 50 Mo.
     *
     * @param \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\SearchCsvPostBody $requestBody
     * @param array $accept Accept content header text/csv|application/json
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\SearchCsvBadRequestException
     *
     */
        public function searchCsv(\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\SearchCsvPostBody $requestBody, array $accept = []): mixed
    {
        try {
            return $this->client->searchCsv($requestBody, \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Client::FETCH_OBJECT, $accept);
        } catch (\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    private function convertException(ClientException $e): GeoplateformeException
    {
        return match ($e->getCode()) {
            401 => new AuthenticationException($e->getMessage(), $e),
            403 => new ForbiddenException($e->getMessage(), $e),
            404, 410 => new NotFoundException($e->getMessage(), $e),
            default => new ApiException($e->getMessage(), $e->getCode(), $e),
        };
    }
}