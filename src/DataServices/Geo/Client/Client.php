<?php

namespace Ecourty\DataGouv\DataServices\Geo\Client;

class Client extends \Ecourty\DataGouv\DataServices\Geo\Client\Runtime\Client\Client
{
    /**
     * @param array $queryParameters {
     *     @var string $codePostal Code postal associé
     *     @var float $lat Latitude (en degrés)
     *     @var float $lon Longitude (en degrés)
     *     @var string $nom Nom de la commune
     *     @var string $boost Mode de boost de la recherche par nom
     *     @var string $code Code de la commune
     *     @var string $siren Code SIREN de la commune
     *     @var string $codeEpci Code de l'EPCI associé
     *     @var string $codeDepartement Code du département associé
     *     @var string $codeRegion Code de la région associée
     *     @var string $codeParent Code de la commune si on a un arrondissement
     *     @var string $ancienCode Code INSEE ancien de la commune
     *     @var array $zone Zone permettant de filtrer à la métropole, aux DROM et aux COM. Défaut à metro,drom sauf pour les communes à metro,drom,com pour conserver le comportement historique.
     *     @var array $type Type permettant de filtrer si on retourne les communes, les arrondissements ou les 2. Par défaut à commune-actuelle.
     *     @var array $fields Liste des champs souhaités dans la réponse
     *     @var string $format Format de réponse attendu
     *     @var string $geometry Géométrie à utiliser pour la sortie géographique
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetCommunesBadRequestException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Geo\Client\Model\Commune[] : \Psr\Http\Message\ResponseInterface)
     */
    public function getCommunes(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geo\Client\Endpoint\GetCommunes($queryParameters), $fetch);
    }
    /**
     * @param string $code Code INSEE de la commune
     * @param array $queryParameters {
     *     @var array $fields Liste des champs souhaités dans la réponse
     *     @var string $format Format de réponse attendu
     *     @var string $geometry Géométrie à utiliser pour la sortie géographique
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetCommunesByCodeBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetCommunesByCodeNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Geo\Client\Model\Commune : \Psr\Http\Message\ResponseInterface)
     */
    public function getCommunesByCode(string $code, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geo\Client\Endpoint\GetCommunesByCode($code, $queryParameters), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var float $lat Latitude (en degrés)
     *     @var float $lon Longitude (en degrés)
     *     @var string $nom Nom de la commune
     *     @var string $code Code de la commune
     *     @var string $codeEpci Code de l'EPCI associé
     *     @var string $codeDepartement Code du département associé
     *     @var string $codeRegion Code de la région associée
     *     @var array $type Type permettant de filtrer si on retourne les communes, les arrondissements ou les 2. Par défaut à commune-actuelle.
     *     @var array $fields Liste des champs souhaités dans la réponse
     *     @var string $format Format de réponse attendu
     *     @var string $geometry Géométrie à utiliser pour la sortie géographique
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetCommunesAssocieesDelegueesBadRequestException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Geo\Client\Model\Commune[] : \Psr\Http\Message\ResponseInterface)
     */
    public function getCommunesAssocieesDeleguees(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geo\Client\Endpoint\GetCommunesAssocieesDeleguees($queryParameters), $fetch);
    }
    /**
     * @param string $code Code INSEE de la commune associée ou déléguée
     * @param array $queryParameters {
     *     @var array $fields Liste des champs souhaités dans la réponse
     *     @var string $format Format de réponse attendu
     *     @var string $geometry Géométrie à utiliser pour la sortie géographique
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetCommunesAssocieesDelegueesByCodeBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetCommunesAssocieesDelegueesByCodeNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Geo\Client\Model\Commune : \Psr\Http\Message\ResponseInterface)
     */
    public function getCommunesAssocieesDelegueesByCode(string $code, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geo\Client\Endpoint\GetCommunesAssocieesDelegueesByCode($code, $queryParameters), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var string $nom Nom de l'EPCI
     *     @var string $boost Mode de boost de la recherche par nom
     *     @var string $codeEpci Code de l'EPCI associé
     *     @var string $codeDepartement Code du département associé
     *     @var string $codeRegion Code de la région associée
     *     @var array $zone Zone permettant de filtrer à la métropole, aux DROM et aux COM. Défaut à metro,drom sauf pour les communes à metro,drom,com pour conserver le comportement historique.
     *     @var array $fields Liste des champs souhaités dans la réponse
     *     @var string $format Format de réponse attendu
     *     @var string $geometry Géométrie à utiliser pour la sortie géographique
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetEpcisBadRequestException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Geo\Client\Model\Epci[] : \Psr\Http\Message\ResponseInterface)
     */
    public function getEpcis(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geo\Client\Endpoint\GetEpcis($queryParameters), $fetch);
    }
    /**
     * @param string $code Code INSEE de l'EPCI
     * @param array $queryParameters {
     *     @var array $fields Liste des champs souhaités dans la réponse
     *     @var string $format Format de réponse attendu
     *     @var string $geometry Géométrie à utiliser pour la sortie géographique
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetEpcisByCodeBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetEpcisByCodeNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Geo\Client\Model\Epci : \Psr\Http\Message\ResponseInterface)
     */
    public function getEpcisByCode(string $code, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geo\Client\Endpoint\GetEpcisByCode($code, $queryParameters), $fetch);
    }
    /**
     * @param string $code Code de l'EPCI
     * @param array $queryParameters {
     *     @var array $fields Liste des champs souhaités dans la réponse
     *     @var string $format Format de réponse attendu
     *     @var string $geometry Géométrie à utiliser pour la sortie géographique
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetEpcisByCodeCommunesBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetEpcisByCodeCommunesNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Geo\Client\Model\Commune[] : \Psr\Http\Message\ResponseInterface)
     */
    public function getEpcisByCodeCommunes(string $code, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geo\Client\Endpoint\GetEpcisByCodeCommunes($code, $queryParameters), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var string $code Code du département
     *     @var string $codeRegion Code région associé
     *     @var string $nom Nom du département
     *     @var array $zone Zone permettant de filtrer à la métropole, aux DROM et aux COM. Défaut à metro,drom sauf pour les communes à metro,drom,com pour conserver le comportement historique.
     *     @var array $fields Liste des champs souhaités dans la réponse
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetDepartementsBadRequestException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Geo\Client\Model\Departement[] : \Psr\Http\Message\ResponseInterface)
     */
    public function getDepartements(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geo\Client\Endpoint\GetDepartements($queryParameters), $fetch);
    }
    /**
     * @param string $code Code du département
     * @param array $queryParameters {
     *     @var array $fields Liste des champs souhaités dans la réponse
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetDepartementsByCodeBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetDepartementsByCodeNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Geo\Client\Model\Departement : \Psr\Http\Message\ResponseInterface)
     */
    public function getDepartementsByCode(string $code, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geo\Client\Endpoint\GetDepartementsByCode($code, $queryParameters), $fetch);
    }
    /**
     * @param string $code Code du département
     * @param array $queryParameters {
     *     @var array $fields Liste des champs souhaités dans la réponse
     *     @var string $format Format de réponse attendu
     *     @var string $geometry Géométrie à utiliser pour la sortie géographique
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetDepartementsByCodeCommunesBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetDepartementsByCodeCommunesNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Geo\Client\Model\Commune[] : \Psr\Http\Message\ResponseInterface)
     */
    public function getDepartementsByCodeCommunes(string $code, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geo\Client\Endpoint\GetDepartementsByCodeCommunes($code, $queryParameters), $fetch);
    }
    /**
     * @param array $queryParameters {
     *     @var string $code Code de la région
     *     @var string $nom Nom de la région
     *     @var array $zone Zone permettant de filtrer à la métropole, aux DROM et aux COM. Défaut à metro,drom sauf pour les communes à metro,drom,com pour conserver le comportement historique.
     *     @var array $fields Liste des champs souhaités dans la réponse
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetRegionsBadRequestException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Geo\Client\Model\Region[] : \Psr\Http\Message\ResponseInterface)
     */
    public function getRegions(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geo\Client\Endpoint\GetRegions($queryParameters), $fetch);
    }
    /**
     * @param string $code Code de la région
     * @param array $queryParameters {
     *     @var array $fields Liste des champs souhaités dans la réponse
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetRegionsByCodeBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetRegionsByCodeNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Geo\Client\Model\Region : \Psr\Http\Message\ResponseInterface)
     */
    public function getRegionsByCode(string $code, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geo\Client\Endpoint\GetRegionsByCode($code, $queryParameters), $fetch);
    }
    /**
     * @param string $code Code de la région
     * @param array $queryParameters {
     *     @var array $fields Liste des champs souhaités dans la réponse
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetRegionsByCodeDepartementsBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetRegionsByCodeDepartementsNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Geo\Client\Model\Departement[] : \Psr\Http\Message\ResponseInterface)
     */
    public function getRegionsByCodeDepartements(string $code, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geo\Client\Endpoint\GetRegionsByCodeDepartements($code, $queryParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://geo.api.gouv.fr');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Ecourty\DataGouv\DataServices\Geo\Client\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}