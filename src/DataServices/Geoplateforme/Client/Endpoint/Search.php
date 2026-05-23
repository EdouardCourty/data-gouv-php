<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint;

class Search extends \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\Endpoint
{
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
    */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/search';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['q', 'autocomplete', 'index', 'limit', 'lat', 'lon', 'returntruegeometry', 'postcode', 'citycode', 'depcode', 'type', 'city', 'category', 'departmentcode', 'municipalitycode', 'oldmunicipalitycode', 'districtcode', 'section', 'number', 'sheet']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['autocomplete' => '1', 'index' => 'address', 'limit' => 10, 'returntruegeometry' => false]);
        $optionsResolver->addAllowedTypes('q', ['string']);
        $optionsResolver->addAllowedTypes('autocomplete', ['string']);
        $optionsResolver->addAllowedTypes('index', ['string']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('lat', ['int']);
        $optionsResolver->addAllowedTypes('lon', ['int']);
        $optionsResolver->addAllowedTypes('returntruegeometry', ['bool']);
        $optionsResolver->addAllowedTypes('type', ['string']);
        $optionsResolver->addAllowedTypes('city', ['string']);
        $optionsResolver->addAllowedTypes('departmentcode', ['string']);
        $optionsResolver->addAllowedTypes('municipalitycode', ['string']);
        $optionsResolver->addAllowedTypes('oldmunicipalitycode', ['string']);
        $optionsResolver->addAllowedTypes('districtcode', ['string']);
        $optionsResolver->addAllowedTypes('section', ['string']);
        $optionsResolver->addAllowedTypes('number', ['string']);
        $optionsResolver->addAllowedTypes('sheet', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\SearchBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\SearchBadRequestException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}