<?php

namespace Ecourty\DataGouv\DataServices\Entreprise\Client\Endpoint;

class GetSearch extends \Ecourty\DataGouv\DataServices\Entreprise\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\Entreprise\Client\Runtime\Client\Endpoint
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
        return '/search';
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
        $optionsResolver->setDefined(['q', 'activite_principale', 'categorie_entreprise', 'code_collectivite_territoriale', 'convention_collective_renseignee', 'code_postal', 'code_commune', 'departement', 'region', 'epci', 'egapro_renseignee', 'est_achats_responsables', 'est_alim_confiance', 'est_association', 'est_bio', 'est_collectivite_territoriale', 'est_entrepreneur_individuel', 'est_entrepreneur_spectacle', 'est_ess', 'est_finess', 'est_organisme_formation', 'est_patrimoine_vivant', 'est_qualiopi', 'est_rge', 'est_siae', 'est_administration', 'est_societe_mission', 'est_uai', 'etat_administratif', 'id_convention_collective', 'id_finess', 'id_rge', 'id_uai', 'nature_juridique', 'section_activite_principale', 'tranche_effectif_salarie', 'nom_personne', 'prenoms_personne', 'date_naissance_personne_min', 'date_naissance_personne_max', 'type_personne', 'ca_min', 'ca_max', 'resultat_net_min', 'resultat_net_max', 'limite_matching_etablissements', 'minimal', 'include', 'page', 'per_page', 'page_etablissements', 'sort_by_size']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limite_matching_etablissements' => 10, 'page' => 1, 'per_page' => 10, 'page_etablissements' => 1]);
        $optionsResolver->addAllowedTypes('q', ['string']);
        $optionsResolver->addAllowedTypes('activite_principale', ['string']);
        $optionsResolver->addAllowedTypes('categorie_entreprise', ['string']);
        $optionsResolver->addAllowedTypes('code_collectivite_territoriale', ['string']);
        $optionsResolver->addAllowedTypes('convention_collective_renseignee', ['bool']);
        $optionsResolver->addAllowedTypes('code_postal', ['string']);
        $optionsResolver->addAllowedTypes('code_commune', ['string']);
        $optionsResolver->addAllowedTypes('departement', ['string']);
        $optionsResolver->addAllowedTypes('region', ['string']);
        $optionsResolver->addAllowedTypes('epci', ['string']);
        $optionsResolver->addAllowedTypes('egapro_renseignee', ['bool']);
        $optionsResolver->addAllowedTypes('est_achats_responsables', ['bool']);
        $optionsResolver->addAllowedTypes('est_alim_confiance', ['bool']);
        $optionsResolver->addAllowedTypes('est_association', ['bool']);
        $optionsResolver->addAllowedTypes('est_bio', ['bool']);
        $optionsResolver->addAllowedTypes('est_collectivite_territoriale', ['bool']);
        $optionsResolver->addAllowedTypes('est_entrepreneur_individuel', ['bool']);
        $optionsResolver->addAllowedTypes('est_entrepreneur_spectacle', ['bool']);
        $optionsResolver->addAllowedTypes('est_ess', ['bool']);
        $optionsResolver->addAllowedTypes('est_finess', ['bool']);
        $optionsResolver->addAllowedTypes('est_organisme_formation', ['bool']);
        $optionsResolver->addAllowedTypes('est_patrimoine_vivant', ['bool']);
        $optionsResolver->addAllowedTypes('est_qualiopi', ['bool']);
        $optionsResolver->addAllowedTypes('est_rge', ['bool']);
        $optionsResolver->addAllowedTypes('est_siae', ['bool']);
        $optionsResolver->addAllowedTypes('est_administration', ['bool']);
        $optionsResolver->addAllowedTypes('est_societe_mission', ['bool']);
        $optionsResolver->addAllowedTypes('est_uai', ['bool']);
        $optionsResolver->addAllowedTypes('etat_administratif', ['string']);
        $optionsResolver->addAllowedTypes('id_convention_collective', ['string']);
        $optionsResolver->addAllowedTypes('id_finess', ['string']);
        $optionsResolver->addAllowedTypes('id_rge', ['string']);
        $optionsResolver->addAllowedTypes('id_uai', ['string']);
        $optionsResolver->addAllowedTypes('nature_juridique', ['string']);
        $optionsResolver->addAllowedTypes('section_activite_principale', ['string']);
        $optionsResolver->addAllowedTypes('tranche_effectif_salarie', ['string']);
        $optionsResolver->addAllowedTypes('nom_personne', ['string']);
        $optionsResolver->addAllowedTypes('prenoms_personne', ['string']);
        $optionsResolver->addAllowedTypes('date_naissance_personne_min', ['string']);
        $optionsResolver->addAllowedTypes('date_naissance_personne_max', ['string']);
        $optionsResolver->addAllowedTypes('type_personne', ['string']);
        $optionsResolver->addAllowedTypes('ca_min', ['int']);
        $optionsResolver->addAllowedTypes('ca_max', ['int']);
        $optionsResolver->addAllowedTypes('resultat_net_min', ['int']);
        $optionsResolver->addAllowedTypes('resultat_net_max', ['int']);
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
     * @throws \Ecourty\DataGouv\DataServices\Entreprise\Client\Exception\GetSearchBadRequestException
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
            throw new \Ecourty\DataGouv\DataServices\Entreprise\Client\Exception\GetSearchBadRequestException($serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Entreprise\Client\Model\SearchGetResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}