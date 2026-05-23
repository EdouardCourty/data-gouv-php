<?php

namespace Ecourty\DataGouv\DataServices\Entreprise\Client\Endpoint;

class GetNearPoint extends \Ecourty\DataGouv\DataServices\Entreprise\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\Entreprise\Client\Runtime\Client\Endpoint
{
    /**
    * Cet endpoint prend en paramètre une latitude (:lat) et une longitude (:long) et renvoie les unités légales et leurs établissements autour de ces coordonnées.
    * Vous pouvez également préciser un paramètre radius en km(défaut: 5 km).
    *
    * **Paramètres d'appel :** latitude, longitude, radius, activité principale et section d'activité principale de l'entreprise.
    * @param array{
    *    "lat": float, //Latitude de l’établissement (source : la majorité des SIRET utilisent le géocodage provenant de la base SIRENE géocodée par l’INSEE pour les études statistiques, à l’exception des entreprises créées au cours des derniers mois, pour lesquelles la géolocalisation est directement extraite de la base SIRENE).
    *    "long": float, //Longitude de l'établissement (source : la majorité des SIRET utilisent le géocodage provenant de la base SIRENE géocodée par l’INSEE pour les études statistiques, à l’exception des entreprises créées au cours des derniers mois, pour lesquelles la géolocalisation est directement extraite de la base SIRENE).
    *    "radius"?: float, //Radius de recherche, inférieur ou égal à 50km.
    *    "activite_principale"?: string, //<a https://www.insee.fr/fr/information/2406147>Le code NAF ou code APE, un code d'activité suivant la nomenclature de l'INSEE</a>. Ce paramètre accepte une valeur unique ou une liste de valeurs séparées par des virgules.
    *    "section_activite_principale"?: string, //<a href=https://www.insee.fr/fr/information/2120875>Section de
    l'activité principale :</a>
    
     * `A` - Agriculture, sylviculture et pêche
     * `B` - Industries extractives
     * `C` - Industrie manufacturière
     * `D` - Production et distribution d'électricité, de gaz, de vapeur et
    d'air conditionné
     * `E` - Production et distribution d'eau ; assainissement, gestion des
    déchets et dépollution
     * `F` -  Construction
     * `G` -  Commerce ; réparation d'automobiles et de motocycles
     * `H` -  Transports et entreposage
     * `I` -  Hébergement et restauration
     * `J` -  Information et communication
     * `K` -  Activités financières et d'assurance
     * `L` -  Activités immobilières
     * `M` -  Activités spécialisées, scientifiques et techniques
     * `N` -  Activités de services administratifs et de soutien
     * `O` -  Administration publique
     * `P` -  Enseignement
     * `Q` -  Santé humaine et action sociale
     * `R` -  Arts, spectacles et activités récréatives
     * `S` -  Autres activités de services
     * `T` -  Activités des ménages en tant qu'employeurs ; activités
    indifférenciées des ménages en tant que producteurs de biens et services pour usage propre
     * `U` -  Activités extra-territoriales
    
    Ce paramètre accepte une valeur unique ou une liste de valeurs séparées par des virgules.
    *    "limite_matching_etablissements"?: int, //Nombre d'établissements connexes inclus dans la réponse (matching_etablissements). Valeur entre 1 et 100.
    *    "minimal"?: bool, //Permet de retourner une réponse minmale, qui exclut les champs secondaires. Voir "include" pour en savoir plus.
    *    "include"?: string, //ATTENTION : Ce paramètre ne peut être appelé qu'avec le champ "minimal=True".
    
    Permet de ne demander que certains des champs secondaires.
    
    Valeurs possibles :
    
     * complements
     * dirigeants
     * finances
     * matching_etablissements
     * siege
     * score
    
    
    Par défaut tous les champs sont inclus sauf le score.
    
    Ce paramètre accepte une valeur unique ou une liste de valeurs séparées par des virgules.
    *    "page"?: int, //Le numéro de la page à retourner
    *    "per_page"?: int, //Le nombre de résultats par page, limité à 25
    *    "page_etablissements"?: int, //Numéro de page pour la pagination des établissements connexes (matching_etablissements).
    *    "sort_by_size"?: bool, //Permet de trier les résultats par taille d'entreprise (nombre d'établissements).
    * } $queryParameters
    */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Ecourty\DataGouv\DataServices\Entreprise\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/near_point';
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
        $optionsResolver->setDefined(['lat', 'long', 'radius', 'activite_principale', 'section_activite_principale', 'limite_matching_etablissements', 'minimal', 'include', 'page', 'per_page', 'page_etablissements', 'sort_by_size']);
        $optionsResolver->setRequired(['lat', 'long']);
        $optionsResolver->setDefaults(['radius' => 5, 'limite_matching_etablissements' => 10, 'page' => 1, 'per_page' => 10, 'page_etablissements' => 1]);
        $optionsResolver->addAllowedTypes('lat', ['float']);
        $optionsResolver->addAllowedTypes('long', ['float']);
        $optionsResolver->addAllowedTypes('radius', ['float']);
        $optionsResolver->addAllowedTypes('activite_principale', ['string']);
        $optionsResolver->addAllowedTypes('section_activite_principale', ['string']);
        $optionsResolver->addAllowedTypes('limite_matching_etablissements', ['int']);
        $optionsResolver->addAllowedTypes('minimal', ['bool']);
        $optionsResolver->addAllowedTypes('include', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('per_page', ['int']);
        $optionsResolver->addAllowedTypes('page_etablissements', ['int']);
        $optionsResolver->addAllowedTypes('sort_by_size', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\Entreprise\Client\Exception\GetNearPointBadRequestException
     *
     * @return null|\Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Payload
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Payload', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Entreprise\Client\Exception\GetNearPointBadRequestException($serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Entreprise\Client\Model\NearPointGetResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}