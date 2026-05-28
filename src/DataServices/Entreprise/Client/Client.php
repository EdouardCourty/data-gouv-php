<?php

namespace Ecourty\DataGouv\DataServices\Entreprise\Client;

class Client extends \Ecourty\DataGouv\DataServices\Entreprise\Client\Runtime\Client\Client
{
    /**
    * Cet endpoint permet de récupérer les unités légales et les établissements correspondants à la recherche effectuée sur la dénomination, l'adresse, les dirigeants et les élus. Ou bien par numéro SIREN / SIRET.
    *
    * **Deux modes de recherche selon la valeur du paramètre `q` :**
    * - **Recherche textuelle classique** (dénomination, adresse, dirigeants, élus) : tous les filtres optionnels (`code_commune`, `code_postal`, `departement`, `region`, `epci`, etc.) sont appliqués en combinaison avec la recherche.
    * - **Recherche directe par SIREN ou SIRET** : si `q` contient exactement 9 chiffres (SIREN) ou 14 chiffres (SIRET), l'API effectue une recherche directe et **ignore tous les autres filtres**. Combiner un SIREN ou SIRET avec des filtres géographiques ou thématiques ne produira pas d'erreur, mais ces filtres seront silencieusement ignorés.
    *
    * @param array{
    *    "q"?: string, //Termes pour une recherche textuelle (dénomination et/ou adresse, dirigeants, élus) ou recherche directe (SIREN, SIRET).
    *    "activite_principale"?: string, //<a href=https://www.insee.fr/fr/information/2406147>Le code NAF ou code APE, un code d'activité suivant la nomenclature de l'INSEE</a>. Ce paramètre accepte une valeur unique ou une liste de valeurs séparées par des virgules. Il ne s'applique qu'à l'unité légale, et non à ses établissements.
    *    "categorie_entreprise"?: string, //<a href=https://www.insee.fr/fr/metadonnees/definition/c1057>Catégorie
    d'entreprise de l'unité légale</a>.
    Ce paramètre accepte une valeur unique ou une liste de valeurs
    séparées par des virgules.
    *    "code_collectivite_territoriale"?: string, //Code affilié à une collectivité territoriale (Commune - code INSEE, EPCI - n° SIREN, Département - Code INSEE + "D" (sauf cas particulier), Région - Code INSEE)
    *    "convention_collective_renseignee"?: bool, //Entreprises ayant au moins un établissement dont la convention collective est renseignée.
    *    "code_postal"?: string, //Code postal en 5 chiffres. Ce paramètre filtre sur les établissements et accepte une valeur unique ou une liste de valeurs séparées par des virgules.
    *    "code_commune"?: string, //<a href=https://www.insee.fr/fr/information/8377162>Code commune (INSEE) en 5 caractères</a>. Ce paramètre filtre sur les établissements et accepte une valeur unique ou une liste de valeurs séparées par des virgules.
    *    "departement"?: string, //<a href=https://www.insee.fr/fr/information/6051727> Code de département en deux ou trois chiffres</a>. Ce paramètre filtre sur les établissements et accepte une valeur unique ou une liste de valeurs séparées par des virgules.
    *    "region"?: string, //<a href=https://www.insee.fr/fr/information/6051727> Code de région en deux chiffres</a>. Ce paramètre filtre sur les établissements et accepte une valeur unique ou une liste de valeurs séparées par des virgules.
    *    "epci"?: string, //<a href=https://www.insee.fr/fr/information/2510634> Liste des epci valides</a>. Ce paramètre filtre sur les établissements et accepte une valeur unique ou une liste de valeurs séparées par des virgules.
    *    "egapro_renseignee"?: bool, //Uniquement les entreprises ayant un index égapro renseigné
    *    "est_achats_responsables"?: bool, //Uniquemement les entreprises ayant le label Relations Fournisseurs et Achats Responsables (RFAR).
    *    "est_alim_confiance"?: bool, //Uniquement les entreprises ayant au moins un établissement avec un résultat de contrôle sanitaire Alim'Confiance.
    *    "est_association"?: bool, //Uniquement les entreprises ayant un identifiant d'association ou une nature juridique avec mention "association" (5195, 9210, 9220, 9221, 9222, 9223, 9224, 9230, 9240, 9260).
    *    "est_bio"?: bool, //Uniquement les entreprises ayant un établissement certifié par l'agence bio
    *    "est_collectivite_territoriale"?: bool, //Uniquement les collectivités territoriales.
    *    "est_entrepreneur_individuel"?: bool, //Uniquement les entreprises individuelles.
    *    "est_entrepreneur_spectacle"?: bool, //Uniquement les entreprises ayant une licence d'entrepreneur du spectacle.
    *    "est_ess"?: bool, //Uniquement les entreprises appartenant au champ de l'économie sociale et solidaire.
    *    "est_finess"?: bool, //Uniquement les entreprises du domaine sanitaire et social (FINESS). Recherche à la fois dans les identifiants FINESS Géographiques des établissements et FINESS Juridiques des entreprises.
    *    "est_organisme_formation"?: bool, //Uniquement les entreprises ayant un établissement organisme de formation
    *    "est_patrimoine_vivant"?: bool, //Uniquement les entreprises ayant le label Entreprise du Patrimoine Vivant (EPV)
    *    "est_qualiopi"?: bool, //Uniquement les entreprises ayant ayant une certification de la marque « Qualiopi »
    *    "est_rge"?: bool, //Uniquement les entreprises reconnues garantes de l'Environnement (RGE).
    *    "est_siae"?: bool, //Uniquement les structures d'insertion par l'activité économique (SIAE).
    *    "est_administration"?: bool, //Uniquement les structures reconnues comme administration.
    Attention : Ce filtre se base sur cette liste <a href=https://www.data.gouv.fr/datasets/liste-des-administrations-ayant-acces-a-lespace-agent-de-lannuaire-des-entreprises/>ici</a>.
    Ce filtre n'est pas exhaustif et peut retourner des faux positifs.
    *    "est_societe_mission"?: bool, //Uniquement les sociétés qui appartiennent au champ des sociétés à mission.
    *    "est_uai"?: bool, //Uniquement les entreprises ayant un établissement UAI (Unité Administrative Immatriculée).
    *    "etat_administratif"?: string, //État administratif de l'unité légale. "A" pour Active, "C" pour Cessée.
    *    "id_convention_collective"?: string, //Identifiant de Convention Collective d'un établissement d'une entreprise.
    *    "id_finess"?: string, //Identifiant FINESS Géographique d'un établissement (9 chiffres). Cette recherche interroge uniquement les FINESS Géographiques des établissements.
    *    "id_rge"?: string, //Identifiant RGE (reconnues garantes de l'Environnement) d'un établissement d'une entreprise.
    *    "id_uai"?: string, //Identifiant UAI d'un établissement d'une entreprise.
    *    "nature_juridique"?: string, //<a href=https://www.insee.fr/fr/information/2028129> Catégorie juridique de l'unité légale.</a> Ce paramètre accepte une valeur unique ou une liste de valeurs séparées par des virgules.
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
    *    "tranche_effectif_salarie"?: string, //<a href=https://github.com/annuaire-entreprises-data-gouv-fr/search-api/blob/main/app/labels/tranches-effectifs.json>Tranche d'effectif salarié de l'entreprise</a>. Ce paramètre accepte une valeur unique ou une liste de valeurs séparées par des virgules.
    *    "nom_personne"?: string, //Nom d'une personne partie prenante de l'entreprise (dirigeant ou élu).
    *    "prenoms_personne"?: string, //Prenom(s) d'une personne partie prenante de l'entreprise (dirigeant ou élu).
    *    "date_naissance_personne_min"?: string, //Valeur minimale de la date de naissance d'une personne partie prenante de l'entreprise (dirigeant ou élu).
    *    "date_naissance_personne_max"?: string, //Valeur maximale de la date de naissance d'une personne partie prenante de l'entreprise (dirigeant ou élu).
    *    "type_personne"?: string, //Type de la partie prenante de l'entreprise, dirigeant ou élu.
    *    "ca_min"?: int, //Valeur minimale du chiffre d'affaire de l'entreprise
    *    "ca_max"?: int, //Valeur maximale du chiffre d'affaire de l'entreprise
    *    "resultat_net_min"?: int, //Valeur minimale du résultat net de l'entreprise
    *    "resultat_net_max"?: int, //Valeur maximale du résultat net de l'entreprise
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
    *    "page"?: int, //Le numéro de la page à retourner.
    *    "per_page"?: int, //Le nombre de résultats par page, limité à 25.
    *    "page_etablissements"?: int, //Numéro de page pour la pagination des établissements connexes (matching_etablissements).
    *    "sort_by_size"?: bool, //Permet de trier les résultats par taille d'entreprise (nombre d'établissements).
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Ecourty\DataGouv\DataServices\Entreprise\Client\Exception\GetSearchBadRequestException
    *
    * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Payload : \Psr\Http\Message\ResponseInterface)
    */
    public function getSearch(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Entreprise\Client\Endpoint\GetSearch($queryParameters), $fetch);
    }
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
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Ecourty\DataGouv\DataServices\Entreprise\Client\Exception\GetNearPointBadRequestException
    *
    * @return ($fetch is 'object' ? null|\Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Payload : \Psr\Http\Message\ResponseInterface)
    */
    public function getNearPoint(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Ecourty\DataGouv\DataServices\Entreprise\Client\Endpoint\GetNearPoint($queryParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://recherche-entreprises.api.gouv.fr');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Ecourty\DataGouv\DataServices\Entreprise\Client\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}