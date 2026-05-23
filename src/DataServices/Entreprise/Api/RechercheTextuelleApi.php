<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataServices\Entreprise\Api;

use Ecourty\DataGouv\DataServices\Entreprise\Client\Client;
use Ecourty\DataGouv\DataServices\Entreprise\Client\Exception\ClientException;
use Ecourty\DataGouv\DataServices\Entreprise\Exception\ApiException;
use Ecourty\DataGouv\DataServices\Entreprise\Exception\AuthenticationException;
use Ecourty\DataGouv\DataServices\Entreprise\Exception\EntrepriseException;
use Ecourty\DataGouv\DataServices\Entreprise\Exception\ForbiddenException;
use Ecourty\DataGouv\DataServices\Entreprise\Exception\NotFoundException;

/**
 * Sub-client for the "Recherche textuelle" tag.
 */
final class RechercheTextuelleApi
{
    public function __construct(private readonly Client $client)
    {
    }

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
    
    * @throws \Ecourty\DataGouv\DataServices\Entreprise\Client\Exception\GetSearchBadRequestException
    *
    */
        public function getSearch(array $queryParameters = []): null|\Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Payload
    {
        try {
            return $this->client->getSearch($queryParameters, \Ecourty\DataGouv\DataServices\Entreprise\Client\Client::FETCH_OBJECT);
        } catch (\Ecourty\DataGouv\DataServices\Entreprise\Client\Exception\ClientException $e) {
            throw $this->convertException($e);
        }
    }

    private function convertException(ClientException $e): EntrepriseException
    {
        return match ($e->getCode()) {
            401 => new AuthenticationException($e->getMessage(), $e),
            403 => new ForbiddenException($e->getMessage(), $e),
            404, 410 => new NotFoundException($e->getMessage(), $e),
            default => new ApiException($e->getMessage(), $e->getCode(), $e),
        };
    }
}