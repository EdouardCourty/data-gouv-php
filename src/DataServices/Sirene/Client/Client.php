<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client;

class Client extends \Ecourty\DataGouv\DataServices\Sirene\Client\Runtime\Client\Client
{
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleNotFoundException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleNotAcceptableException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleRequestUriTooLongException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleTooManyRequestsException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleInternalServerErrorException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleServiceUnavailableException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function findByGetUniteLegale(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Sirene\Client\Endpoint\FindByGetUniteLegale($queryParameters, $accept), $fetch);
    }
    /**
     * @param null|\Ecourty\DataGouv\DataServices\Sirene\Client\Model\UniteLegalePostMultiCriteres $requestBody
     * @param array $accept Accept content header application/json;charset=utf-8;qs=1|text/csv;charset=utf-8;qs=0.9|application/json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostUniteLegaleBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostUniteLegaleUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostUniteLegaleNotFoundException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostUniteLegaleNotAcceptableException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostUniteLegaleRequestUriTooLongException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostUniteLegaleTooManyRequestsException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostUniteLegaleInternalServerErrorException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostUniteLegaleServiceUnavailableException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function findByPostUniteLegale(?\Ecourty\DataGouv\DataServices\Sirene\Client\Model\UniteLegalePostMultiCriteres $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Sirene\Client\Endpoint\FindByPostUniteLegale($requestBody, $accept), $fetch);
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySirenBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySirenUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySirenForbiddenException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySirenNotFoundException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySirenNotAcceptableException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySirenTooManyRequestsException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySirenInternalServerErrorException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySirenServiceUnavailableException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseUniteLegale : \Psr\Http\Message\ResponseInterface)
     */
    public function findBySiren(string $siren, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Sirene\Client\Endpoint\FindBySiren($siren, $queryParameters, $accept), $fetch);
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetEtablissementBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetEtablissementUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetEtablissementNotFoundException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetEtablissementNotAcceptableException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetEtablissementRequestUriTooLongException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetEtablissementTooManyRequestsException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetEtablissementInternalServerErrorException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetEtablissementServiceUnavailableException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function findByGetEtablissement(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Sirene\Client\Endpoint\FindByGetEtablissement($queryParameters, $accept), $fetch);
    }
    /**
     * @param null|\Ecourty\DataGouv\DataServices\Sirene\Client\Model\EtablissementPostMultiCriteres $requestBody
     * @param array $accept Accept content header application/json;charset=utf-8;qs=1|text/csv;charset=utf-8;qs=0.9|application/json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementNotFoundException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementNotAcceptableException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementRequestUriTooLongException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementTooManyRequestsException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementInternalServerErrorException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementServiceUnavailableException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function findByPostEtablissement(?\Ecourty\DataGouv\DataServices\Sirene\Client\Model\EtablissementPostMultiCriteres $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Sirene\Client\Endpoint\FindByPostEtablissement($requestBody, $accept), $fetch);
    }
    /**
     * Recherche d'un établissement par son numéro Siret (14 chiffres)
     * @param string $siret Identifiant de l'établissement (14 chiffres)
     * @param array{
     *    "date"?: string, //Date à laquelle on veut obtenir les valeurs des données historisées
     *    "champs"?: string, //Liste des champs demandés, séparés par des virgules
     *    "masquerValeursNulles"?: string, //Masque (true) ou affiche (false, par défaut) les attributs qui n'ont pas de valeur
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretForbiddenException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretNotFoundException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretNotAcceptableException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretTooManyRequestsException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretInternalServerErrorException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretServiceUnavailableException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseEtablissement : \Psr\Http\Message\ResponseInterface)
     */
    public function findBySiret(string $siret, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Sirene\Client\Endpoint\FindBySiret($siret, $queryParameters), $fetch);
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionNotFoundException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionNotAcceptableException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionTooManyRequestsException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionInternalServerErrorException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionServiceUnavailableException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function findLienSuccession(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Sirene\Client\Endpoint\FindLienSuccession($queryParameters, $accept), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\InformationsServiceUnavailableException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseInformations : \Psr\Http\Message\ResponseInterface)
     */
    public function informations(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Sirene\Client\Endpoint\Informations(), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://api.insee.fr/api-sirene/3.11');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Ecourty\DataGouv\DataServices\Sirene\Client\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}