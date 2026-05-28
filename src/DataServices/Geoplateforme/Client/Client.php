<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client;

class Client extends \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\GetCapabilitiesNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Getcapabilities : \Psr\Http\Message\ResponseInterface)
     */
    public function getCapabilities(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint\GetCapabilities(), $fetch);
    }
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
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\SearchBadRequestException
    *
    * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
    */
    public function search(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint\Search($queryParameters), $fetch);
    }
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
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\ReverseBadRequestException
    *
    * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
    */
    public function reverse(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint\Reverse($queryParameters), $fetch);
    }
    /**
     * Géocodage direct en masse d’un fichier CSV. Les paramètres de la requête permettent de spécifier les colonnes à utiliser pour le géocodage, les index à utiliser, les filtres à appliquer et les colonnes à conserver dans le fichier CSV de sortie.
     *
     * Le fichier soumis doit faire une taille maximale de 50 Mo.
     *
     * @param \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\SearchCsvPostBody $requestBody
     * @param array $accept Accept content header text/csv|application/json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\SearchCsvBadRequestException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function searchCsv(\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\SearchCsvPostBody $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint\SearchCsv($requestBody, $accept), $fetch);
    }
    /**
     * Géocodage inversé en masse d’un fichier CSV. Les paramètres de la requête permettent de spécifier les colonnes à utiliser pour le géocodage, les index à utiliser, les filtres à appliquer et les colonnes à conserver dans le fichier CSV de sortie.
     *
     * Le fichier soumis doit faire une taille maximale de 50 Mo.
     *
     * @param \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\ReverseCsvPostBody $requestBody
     * @param array $accept Accept content header text/csv|application/json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\ReverseCsvBadRequestException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function reverseCsv(\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\ReverseCsvPostBody $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint\ReverseCsv($requestBody, $accept), $fetch);
    }
    /**
     * Cette requête permet de créer le projet de géocodage. Elle peut être réalisée de façon anonyme ou avec un jeton Géoplateforme valide.
     *
     * Si la requête est authentifiée avec l'en-tête Authorization alors il est possible de renseigner une communauté (Géoplateforme) de rattachement grâce à l'en-tête X-Community. Dans ce cas le projet hérite des quotas attribués à la communauté (taille max de fichier géocodage, niveau de parallélisation du géocodage). Par défaut un projet autorise un fichier de 50 Mo et ne propose pas de parallélisation (concurrency = 1).
     *
     * Lorsque le projet est créé avec un utilisateur authentifié, ce dernier recevra la notification de succès ou d'échec sur la boîte courriel renseignée avec son compte.
     *
     * À ce stade le projet est retourné avec un jeton qui doit être conservé pour les prochains appels du processus.
     *
     * @param array{
     *    "X-Community"?: string,
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectForbiddenException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Project : \Psr\Http\Message\ResponseInterface)
     */
    public function postAsyncProject(array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint\PostAsyncProject($headerParameters), $fetch);
    }
    /**
     * Permet la suppression d'un projet inactif (idle), terminé (completed) ou en erreur (failed).
     *
     * @param string $projectId Identifiant unique du projet
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\DeleteAsyncProjectByProjectIdUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\DeleteAsyncProjectByProjectIdForbiddenException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\DeleteAsyncProjectByProjectIdNotFoundException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteAsyncProjectByProjectId(string $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint\DeleteAsyncProjectByProjectId($projectId), $fetch);
    }
    /**
     * Permet la récupération des informations d'un projet :
     * - métadonnées
     * - état et progression du géocodage
     * - fichier source et fichier résultat (notamment le jeton d'accès)
     *
     * @param string $projectId Identifiant unique du projet
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\GetAsyncProjectByProjectIdUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\GetAsyncProjectByProjectIdNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Project : \Psr\Http\Message\ResponseInterface)
     */
    public function getAsyncProjectByProjectId(string $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint\GetAsyncProjectByProjectId($projectId), $fetch);
    }
    /**
     * Permet de définir les paramètres de géocodage mais aussi le format de sortie (CSV ou GeoJSON).
     *
     * Dans le cas du CSV, les paramètres du fichier d'entrée sont conservés à l'exception de l'encodage qui sera toujours de l'UTF-8.
     *
     * Attention : l'adéquation des paramètres de géocodage avec le fichier fourni n'est vérifiée qu'au moment du géocodage.
     *
     * @param string $projectId Identifiant unique du projet
     * @param null|\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Pipeline $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PutAsyncProjectsByProjectIdPipelineBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PutAsyncProjectsByProjectIdPipelineUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PutAsyncProjectsByProjectIdPipelineForbiddenException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PutAsyncProjectsByProjectIdPipelineNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Project : \Psr\Http\Message\ResponseInterface)
     */
    public function putAsyncProjectsByProjectIdPipeline(string $projectId, ?\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Pipeline $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint\PutAsyncProjectsByProjectIdPipeline($projectId, $requestBody), $fetch);
    }
    /**
     * @param string $projectId Identifiant unique du projet
     * @param null|string|resource|\Psr\Http\Message\StreamInterface $requestBody
     * @param array{
     *    "Content-Length"?: int, //La taille du fichier peut être transmise pour s'assurer du transfert complet du fichier.
     *    "Content-Disposition"?: string, //Le nom du fichier à géocoder peut être transmis pour faciliter le suivi. Le fichier résultat reprendra en partie ce nom. Par défaut le fichier sera nommé input.csv.
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PutAsyncProjectsByProjectIdInputFileBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PutAsyncProjectsByProjectIdInputFileUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PutAsyncProjectsByProjectIdInputFileForbiddenException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PutAsyncProjectsByProjectIdInputFileNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Project : \Psr\Http\Message\ResponseInterface)
     */
    public function putAsyncProjectsByProjectIdInputFile(string $projectId, $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint\PutAsyncProjectsByProjectIdInputFile($projectId, $requestBody, $headerParameters), $fetch);
    }
    /**
     * Permet de signifier à la plateforme que le géocodage est prêt à être effectué. Il faut au préalable que le fichier source ait été soumis, ainsi que les paramètres du traitement.
     *
     * L'opération peut être annulée via la requête adéquate.
     *
     * @param string $projectId Identifiant unique du projet
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectsByProjectIdStartUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectsByProjectIdStartForbiddenException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectsByProjectIdStartNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Project : \Psr\Http\Message\ResponseInterface)
     */
    public function postAsyncProjectsByProjectIdStart(string $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint\PostAsyncProjectsByProjectIdStart($projectId), $fetch);
    }
    /**
     * Permet d'annuler un géocodage en attente (waiting) ou en cours (processing). Dans ce cas il retourne à l'état inactif et peut être modifié ou supprimé.
     *
     * @param string $projectId Identifiant unique du projet
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectsByProjectIdAbortUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectsByProjectIdAbortForbiddenException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectsByProjectIdAbortNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Project : \Psr\Http\Message\ResponseInterface)
     */
    public function postAsyncProjectsByProjectIdAbort(string $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint\PostAsyncProjectsByProjectIdAbort($projectId), $fetch);
    }
    /**
     * Permet de ré-initialiser un géocodage terminé (completed) ou en erreur (failed). Dans ce cas il retourne à l'état inactif et peut être modifié ou supprimé.
     *
     * @param string $projectId Identifiant unique du projet
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectsByProjectIdResetUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectsByProjectIdResetForbiddenException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectsByProjectIdResetNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Project : \Psr\Http\Message\ResponseInterface)
     */
    public function postAsyncProjectsByProjectIdReset(string $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint\PostAsyncProjectsByProjectIdReset($projectId), $fetch);
    }
    /**
     * @param string $projectId Identifiant unique du projet
     * @param string $token Jeton de sécurité du fichier accessible dans les métadonnées du projet (inputFile.token)
     * @param array $accept Accept content header text/csv|application/json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getAsyncProjectsByProjectIdInputFileByToken(string $projectId, string $token, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint\GetAsyncProjectsByProjectIdInputFileByToken($projectId, $token, $accept), $fetch);
    }
    /**
     * @param string $projectId Identifiant unique du projet
     * @param string $token Jeton de sécurité du fichier accessible dans les métadonnées du projet (outputFile.token)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getAsyncProjectsByProjectIdOutputFileByToken(string $projectId, string $token, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint\GetAsyncProjectsByProjectIdOutputFileByToken($projectId, $token), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://data.geopf.fr/geocodage');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}