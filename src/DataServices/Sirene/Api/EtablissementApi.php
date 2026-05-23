<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataServices\Sirene\Api;

use Ecourty\DataGouv\DataServices\Sirene\Client\Client;
use Ecourty\DataGouv\DataServices\Sirene\Client\Exception\ClientException;
use Ecourty\DataGouv\DataServices\Sirene\Exception\ApiException;
use Ecourty\DataGouv\DataServices\Sirene\Exception\AuthenticationException;
use Ecourty\DataGouv\DataServices\Sirene\Exception\SireneException;
use Ecourty\DataGouv\DataServices\Sirene\Exception\ForbiddenException;
use Ecourty\DataGouv\DataServices\Sirene\Exception\NotFoundException;

/**
 * Sub-client for the "Etablissement" tag.
 */
final class EtablissementApi
{
    public function __construct(private readonly Client $client)
    {
    }

    /**
     * @param array{
     *    "q"?: string, //Contenu de la requête multicritères, voir la documentation pour plus de précisions
     *    "date"?: string, //Date à laquelle on veut obtenir les valeurs des données historisées
     *    "champs"?: string, //Liste des champs demandés, séparés par des virgules
     *    "masquerValeursNulles"?: string, //Masque (true) ou affiche (false, par défaut) les attributs qui n'ont pas de valeur
     *    "facette.champ"?: string, //Liste des champs sur lesquels des comptages seront effectués, séparés par des virgules
     *    "tri"?: string, //Champs sur lesquels des tris seront effectués, séparés par des virgules. Tri sur siren par défaut
     *    "nombre"?: string, //Nombre d'éléments demandés dans la réponse, défaut 20
     *    "debut"?: string, //Rang du premier élément demandé dans la réponse, défaut 0
     *    "curseur"?: string, //Paramètre utilisé pour la pagination profonde, voir la documentation pour plus de précisions
     * } $queryParameters
     * @param array $accept Accept content header application/json;charset=utf-8;qs=1|text/csv;charset=utf-8;qs=0.9|application/json
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetEtablissementBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetEtablissementUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetEtablissementNotFoundException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetEtablissementNotAcceptableException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetEtablissementRequestUriTooLongException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetEtablissementTooManyRequestsException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetEtablissementInternalServerErrorException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetEtablissementServiceUnavailableException
     *
     */
        public function findByGetEtablissement(array $queryParameters = [], array $accept = []): null
    {
        try {
            return $this->client->findByGetEtablissement($queryParameters, $accept, \Ecourty\DataGouv\DataServices\Sirene\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataServices\Sirene\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param null|\Ecourty\DataGouv\DataServices\Sirene\Client\Model\EtablissementPostMultiCriteres $requestBody
     * @param array $accept Accept content header application/json;charset=utf-8;qs=1|text/csv;charset=utf-8;qs=0.9|application/json
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementNotFoundException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementNotAcceptableException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementRequestUriTooLongException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementTooManyRequestsException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementInternalServerErrorException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementServiceUnavailableException
     *
     */
        public function findByPostEtablissement(?\Ecourty\DataGouv\DataServices\Sirene\Client\Model\EtablissementPostMultiCriteres $requestBody = null, array $accept = []): null
    {
        try {
            return $this->client->findByPostEtablissement($requestBody, $accept, \Ecourty\DataGouv\DataServices\Sirene\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataServices\Sirene\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * Recherche d'un établissement par son numéro Siret (14 chiffres)
     * @param string $siret Identifiant de l'établissement (14 chiffres)
     * @param array{
     *    "date"?: string, //Date à laquelle on veut obtenir les valeurs des données historisées
     *    "champs"?: string, //Liste des champs demandés, séparés par des virgules
     *    "masquerValeursNulles"?: string, //Masque (true) ou affiche (false, par défaut) les attributs qui n'ont pas de valeur
     * } $queryParameters
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretForbiddenException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretNotFoundException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretNotAcceptableException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretTooManyRequestsException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretInternalServerErrorException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretServiceUnavailableException
     *
     */
        public function findBySiret(string $siret, array $queryParameters = []): null|\Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseEtablissement
    {
        try {
            return $this->client->findBySiret($siret, $queryParameters, \Ecourty\DataGouv\DataServices\Sirene\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataServices\Sirene\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param array{
     *    "q"?: string, //Contenu de la requête multicritères, voir la documentation pour plus de précisions
     *    "tri"?: string, //Permet de trier sur la variable siretEtablissementSuccesseur au lieu de siretEtablissementPredecesseur
     *    "nombre"?: string, //Nombre d'éléments demandés dans la réponse, défaut 20
     *    "debut"?: string, //Rang du premier élément demandé dans la réponse, défaut 0
     *    "curseur"?: string, //Paramètre utilisé pour la pagination profonde, voir la documentation pour plus de précisions
     * } $queryParameters
     * @param array $accept Accept content header application/json;charset=utf-8;qs=1|text/csv;charset=utf-8;qs=0.9|application/json
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionNotFoundException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionNotAcceptableException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionTooManyRequestsException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionInternalServerErrorException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionServiceUnavailableException
     *
     */
        public function findLienSuccession(array $queryParameters = [], array $accept = []): null
    {
        try {
            return $this->client->findLienSuccession($queryParameters, $accept, \Ecourty\DataGouv\DataServices\Sirene\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataServices\Sirene\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    private function convertException(ClientException $e): SireneException
    {
        return match ($e->getCode()) {
            401 => new AuthenticationException($e->getMessage(), $e),
            403 => new ForbiddenException($e->getMessage(), $e),
            404, 410 => new NotFoundException($e->getMessage(), $e),
            default => new ApiException($e->getMessage(), $e->getCode(), $e),
        };
    }
}