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
 * Sub-client for the "UniteLegale" tag.
 */
final class UniteLegaleApi
{
    public function __construct(private readonly Client $client)
    {
    }

    /**
     * @param array{
     *    "q"?: string, //Contenu de la requête multicritères, voir la documentation pour plus de précisions
     *    "date"?: string, //Date à laquelle on veut obtenir les valeurs des données historisées
     *    "champs"?: string, //Liste des champs demandés, séparés par des virgules
     *    "masquerValeursNulles"?: bool, //Masque (true) ou affiche (false, par défaut) les attributs qui n'ont pas de valeur
     *    "facette.champ"?: string, //Liste des champs sur lesquels des comptages seront effectués, séparés par des virgules
     *    "tri"?: string, //Champs sur lesquels des tris seront effectués, séparés par des virgules. Tri sur siren par défaut
     *    "nombre"?: int, //Nombre d'éléments demandés dans la réponse, défaut 20
     *    "debut"?: int, //Rang du premier élément demandé dans la réponse, défaut 0
     *    "curseur"?: string, //Paramètre utilisé pour la pagination profonde, voir la documentation pour plus de précisions
     * } $queryParameters
     * @param array $accept Accept content header application/json;charset=utf-8;qs=1|text/csv;charset=utf-8;qs=0.9|application/json
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleNotFoundException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleNotAcceptableException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleRequestUriTooLongException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleTooManyRequestsException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleInternalServerErrorException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleServiceUnavailableException
     *
     */
        public function findByGetUniteLegale(array $queryParameters = [], array $accept = []): null
    {
        try {
            return $this->client->findByGetUniteLegale($queryParameters, $accept, \Ecourty\DataGouv\DataServices\Sirene\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataServices\Sirene\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * @param null|\Ecourty\DataGouv\DataServices\Sirene\Client\Model\UniteLegalePostMultiCriteres $requestBody
     * @param array $accept Accept content header application/json;charset=utf-8;qs=1|text/csv;charset=utf-8;qs=0.9|application/json
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostUniteLegaleBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostUniteLegaleUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostUniteLegaleNotFoundException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostUniteLegaleNotAcceptableException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostUniteLegaleRequestUriTooLongException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostUniteLegaleTooManyRequestsException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostUniteLegaleInternalServerErrorException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostUniteLegaleServiceUnavailableException
     *
     */
        public function findByPostUniteLegale(?\Ecourty\DataGouv\DataServices\Sirene\Client\Model\UniteLegalePostMultiCriteres $requestBody = null, array $accept = []): null
    {
        try {
            return $this->client->findByPostUniteLegale($requestBody, $accept, \Ecourty\DataGouv\DataServices\Sirene\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataServices\Sirene\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    /**
     * Recherche d'une unité légale par son numéro Siren (9 chiffres)
     * @param string $siren Identifiant de l'unité légale (9 chiffres)
     * @param array{
     *    "date"?: string, //Date à laquelle on veut obtenir les valeurs des données historisées
     *    "champs"?: string, //Liste des champs demandés, séparés par des virgules
     *    "masquerValeursNulles"?: bool, //Masque (true) ou affiche (false, par défaut) les attributs qui n'ont pas de valeur
     * } $queryParameters
     * @param array $accept Accept content header application/json|application/json;charset=utf-8;qs=1
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySirenBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySirenUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySirenForbiddenException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySirenNotFoundException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySirenNotAcceptableException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySirenTooManyRequestsException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySirenInternalServerErrorException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySirenServiceUnavailableException
     *
     */
        public function findBySiren(string $siren, array $queryParameters = [], array $accept = []): null|\Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseUniteLegale
    {
        try {
            return $this->client->findBySiren($siren, $queryParameters, $accept, \Ecourty\DataGouv\DataServices\Sirene\Client\Client::FETCH_OBJECT);
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