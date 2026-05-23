<?php

namespace Ecourty\DataGouv\DataServices\Education\Client;

class Client extends \Ecourty\DataGouv\DataServices\Education\Client\Runtime\Client\Client
{
    /**
    * Retourne les métadonnées de l'API et les différents points d'entrées disponibles.
    *
    * @param array{
    *    "select"?: string, //Permet d'ajouter, de supprimer et de modifier les champs retournés.
    Une expression peut être:
     - un joker `*` : retourne l'ensemble des champs
     - un nom de champ: retourne seulement ce champ
     - une expression complexe : retourne le resultat de l'expression. Un label peut être positionné pour cette expression. Par exemple : `count(*) as compte` retournera un nouveau champ nommé `compte` contenant le nombre d'établissements présents dans la requête.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Education\Client\Model\Dataset : \Psr\Http\Message\ResponseInterface)
    */
    public function getDataset(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Education\Client\Endpoint\GetDataset($queryParameters), $fetch);
    }
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
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Education\Client\Model\Record[] : \Psr\Http\Message\ResponseInterface)
    */
    public function getRecords(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Education\Client\Endpoint\GetRecords($queryParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://data.education.gouv.fr/api/v2');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Ecourty\DataGouv\DataServices\Education\Client\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}