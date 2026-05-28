<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataServices\Education\Api;

use Ecourty\DataGouv\DataServices\Education\Client\Client;
use Ecourty\DataGouv\DataServices\Education\Client\Exception\ClientException;
use Ecourty\DataGouv\DataServices\Education\Exception\ApiException;
use Ecourty\DataGouv\DataServices\Education\Exception\AuthenticationException;
use Ecourty\DataGouv\DataServices\Education\Exception\EducationException;
use Ecourty\DataGouv\DataServices\Education\Exception\ForbiddenException;
use Ecourty\DataGouv\DataServices\Education\Exception\NotFoundException;

/**
 * Sub-client for the "Dataset" tag.
 */
final class DatasetApi
{
    public function __construct(private readonly Client $client)
    {
    }

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
    
    *
    */
        public function getDataset(array $queryParameters = []): null|\Ecourty\DataGouv\DataServices\Education\Client\Model\Dataset
    {
        try {
            return $this->client->getDataset($queryParameters, \Ecourty\DataGouv\DataServices\Education\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataServices\Education\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
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
    
    *
    */
        public function getRecords(array $queryParameters = []): null|array
    {
        try {
            return $this->client->getRecords($queryParameters, \Ecourty\DataGouv\DataServices\Education\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataServices\Education\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    private function convertException(ClientException $e): EducationException
    {
        return match ($e->getCode()) {
            401 => new AuthenticationException($e->getMessage(), $e),
            403 => new ForbiddenException($e->getMessage(), $e),
            404, 410 => new NotFoundException($e->getMessage(), $e),
            default => new ApiException($e->getMessage(), $e->getCode(), $e),
        };
    }
}