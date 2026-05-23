<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint;

class Reverse extends \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\Endpoint
{
    /**
    * @param array{
    *    "searchgeom"?: string, //Géométrie de recherche. La géométrie est réalisé par intersection géométrique. Si ce paramètre est utilisé seul, c''est que l''on souhaite une recherche sans ordonnancement des résultats (tous les objets intersectant la géométrie de recherche ont un score de 1).
    Si on veut ordonner les résultats, on peut alors utiliser les paramètres lon et lat pour préciser un point d''ordonnancement.
    Ce paramètre n''est pas obligatoire pour des raisons de rétro-compatibilité. Si searchgeom n''est pas utilisé alors les paramètres lon et lat doivent l''être et on parle de point de recherche.
    Lorsque la recherche est réalisée par intersection géométrique. Les types géométrique autorisés sont :
    
    - Point
    
    - LineString
    
    - Polygon
    
    - Circle
    Exemple de géométrie de type Circle :
    {
    &nbsp;&nbsp;&nbsp;&nbsp;"type": "Circle",
    &nbsp;&nbsp;&nbsp;&nbsp;"coordinates": [2.294469, 48.858244],
    &nbsp;&nbsp;&nbsp;&nbsp;"radius": 100
    }
    Pour l''index <b>address</b>, seules les géométries de type ''Polygon'' et ''Circle'' sont autorisées.
    Le plus grand côté du rectangle d’emprise de la géométrie ne doit pas excéder 1000 mètres.
    *    "lon"?: int, //Si searchgeom est utilisé, il s'agit de la longitude du point d'ordonnancement. C'est le point à partir duquel est calculée la distance, puis le score permettant l'ordonnancement des résultats.
    Dans un soucis de rétro-compatibilité, si searchgeom n'est pas utilisé, il s'agit de la longitude du point de recherche. À partir de ce point, un cercle est créé pour effectuer la recherche. En plus, ce sera aussi la longitude du point d'ordonnancement.
    *    "lat"?: int, //Si searchgeom est utilisé, il s'agit de la latitude  du point d'ordonnancement. C'est le point à partir duquel est calculée la distance, puis le score permettant l'ordonnancement des résultats.
    Dans un soucis de rétro-compatibilité, si searchgeom n'est pas utilisé, il s'agit de la latitude du point de recherche. À partir de ce point, un cercle est créé pour effectuer la recherche. En plus, ce sera aussi la latitude du point d'ordonnancement.
    *    "index"?: string, //index de recherche :
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
    *    "returntruegeometry"?: bool, //indique si la vraie géométrie doit être retournée
    *    "postcode"?: mixed, //Filtre pour les index address et poi. Il permet de filtrer les résultats par code postal. Accepte plusieurs valeurs séparées par des virgules (maximum 50).
    *    "citycode"?: mixed, //Filtre pour les index address et poi. Il permet de filtrer les résultats par code INSEE. Accepte plusieurs valeurs séparées par des virgules (maximum 50).
    *    "type"?: string, //Filtre pour l'index address. Il permet de filtrer par type de données adresse : numéro de maison, rue, commune, ...
    *    "city"?: string, //Filtre pour les index address et parcel. Il permet de filtrer par nom de commune.
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
        return '/reverse';
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
        $optionsResolver->setDefined(['searchgeom', 'lon', 'lat', 'index', 'limit', 'returntruegeometry', 'postcode', 'citycode', 'type', 'city', 'category', 'departmentcode', 'municipalitycode', 'oldmunicipalitycode', 'districtcode', 'section', 'number', 'sheet']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['index' => 'address', 'limit' => 10, 'returntruegeometry' => false]);
        $optionsResolver->addAllowedTypes('searchgeom', ['string']);
        $optionsResolver->addAllowedTypes('lon', ['int']);
        $optionsResolver->addAllowedTypes('lat', ['int']);
        $optionsResolver->addAllowedTypes('index', ['string']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
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
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\ReverseBadRequestException
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
            throw new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\ReverseBadRequestException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}