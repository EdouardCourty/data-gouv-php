<?php

namespace Ecourty\DataGouv\DataServices\Education\Client\Endpoint;

class GetRecords extends \Ecourty\DataGouv\DataServices\Education\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\Education\Client\Runtime\Client\Endpoint
{
    /**
    * Réalise une requête sur l'annuaire pour récupérer les établissements.
    *
    * @param array{
    *    "select"?: string, //Permet d'ajouter, de supprimer et de modifier les champs retournés.
    Une expression peut être:
     - un joker `*` : retourne l'ensemble des champs
     - un nom de champ: retourne seulement ce champ
     - une expression complexe : retourne le resultat de l'expression. Un label peut être positionné pour cette expression. Par exemple : `count(*) as compte` retournera un nouveau champ nommé `compte` contenant le nombre d'établissements présents dans la requête.
    *    "where"?: array, //Une expression pour filtrer les résultats, qui peut inclure des opérateurs logiques
    (`NOT`, `AND`, `OR`...) ainsi que d'autres fonctions pour effectuer des opérations complexes.
    
    Consultez [la documentation de référence](https://help.opendatasoft.com/apis/ods-search-v2) pour plus de détails.
    
    Par exemple : `statut_public_prive="Public"` pour ne garder que les établissements publics.
    *    "order_by"?: array, //Liste de champs séparées par des virgules, suivi par une indication d'ordre (`asc` ou `desc`).
    
    Tri les résultats selon les valeurs des champs par ordre croissant par défaut.
    Pour trier par ordre décroissant, vous pouvez utiliser le mot clé `desc`.
    
    Par exemple : `nombre_d_eleves desc` pour trier les établissements du plus grand nombre d'élèves au plus petit.
    *    "group_by"?: string, //Permet de grouper les resultats selon les valeurs d'un champ.
    
    Par exemple : `group_by=statut_public_prive` groupe les résultats en fonction du statut de l'établissement.
    *    "limit"?: int, //Nombre d'établissements à retourner.
    
    A utiliser avec `offset` pour la pagination.
    
    La valeur maximale de `limit` est 100. Pour récupérer plus de données, vous pouvez utiliser les exports.
    La valeur par défaut est 10.
    *    "offset"?: int, //Indice du premier établissement à retourner (commence à 0).
    
    A utiliser avec `limit` pour la pagination.
    * } $queryParameters
    */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Ecourty\DataGouv\DataServices\Education\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/catalog/datasets/fr-en-annuaire-education/records';
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
        $optionsResolver->setDefined(['select', 'where', 'order_by', 'group_by', 'limit', 'offset']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 10, 'offset' => 0]);
        $optionsResolver->addAllowedTypes('select', ['string']);
        $optionsResolver->addAllowedTypes('where', ['array']);
        $optionsResolver->addAllowedTypes('order_by', ['array']);
        $optionsResolver->addAllowedTypes('group_by', ['string']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Ecourty\DataGouv\DataServices\Education\Client\Model\Record[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Education\Client\Model\Record[]', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['api_key'];
    }
}