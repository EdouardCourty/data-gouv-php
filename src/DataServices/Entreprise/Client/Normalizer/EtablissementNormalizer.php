<?php

namespace Ecourty\DataGouv\DataServices\Entreprise\Client\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Ecourty\DataGouv\DataServices\Entreprise\Client\Runtime\Normalizer\CheckArray;
use Ecourty\DataGouv\DataServices\Entreprise\Client\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class EtablissementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Etablissement::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Etablissement::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Etablissement();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('ancien_siege', $data) && \is_int($data['ancien_siege'])) {
            $data['ancien_siege'] = (bool) $data['ancien_siege'];
        }
        if (\array_key_exists('est_siege', $data) && \is_int($data['est_siege'])) {
            $data['est_siege'] = (bool) $data['est_siege'];
        }
        if (\array_key_exists('activite_principale', $data) && $data['activite_principale'] !== null) {
            $object->setActivitePrincipale($data['activite_principale']);
            unset($data['activite_principale']);
        }
        elseif (\array_key_exists('activite_principale', $data) && $data['activite_principale'] === null) {
            $object->setActivitePrincipale(null);
        }
        if (\array_key_exists('activite_principale_naf25', $data) && $data['activite_principale_naf25'] !== null) {
            $object->setActivitePrincipaleNaf25($data['activite_principale_naf25']);
            unset($data['activite_principale_naf25']);
        }
        elseif (\array_key_exists('activite_principale_naf25', $data) && $data['activite_principale_naf25'] === null) {
            $object->setActivitePrincipaleNaf25(null);
        }
        if (\array_key_exists('ancien_siege', $data) && $data['ancien_siege'] !== null) {
            $object->setAncienSiege($data['ancien_siege']);
            unset($data['ancien_siege']);
        }
        elseif (\array_key_exists('ancien_siege', $data) && $data['ancien_siege'] === null) {
            $object->setAncienSiege(null);
        }
        if (\array_key_exists('annee_tranche_effectif_salarie', $data) && $data['annee_tranche_effectif_salarie'] !== null) {
            $object->setAnneeTrancheEffectifSalarie($data['annee_tranche_effectif_salarie']);
            unset($data['annee_tranche_effectif_salarie']);
        }
        elseif (\array_key_exists('annee_tranche_effectif_salarie', $data) && $data['annee_tranche_effectif_salarie'] === null) {
            $object->setAnneeTrancheEffectifSalarie(null);
        }
        if (\array_key_exists('adresse', $data) && $data['adresse'] !== null) {
            $object->setAdresse($data['adresse']);
            unset($data['adresse']);
        }
        elseif (\array_key_exists('adresse', $data) && $data['adresse'] === null) {
            $object->setAdresse(null);
        }
        if (\array_key_exists('caractere_employeur', $data) && $data['caractere_employeur'] !== null) {
            $object->setCaractereEmployeur($data['caractere_employeur']);
            unset($data['caractere_employeur']);
        }
        elseif (\array_key_exists('caractere_employeur', $data) && $data['caractere_employeur'] === null) {
            $object->setCaractereEmployeur(null);
        }
        if (\array_key_exists('code_postal', $data) && $data['code_postal'] !== null) {
            $object->setCodePostal($data['code_postal']);
            unset($data['code_postal']);
        }
        elseif (\array_key_exists('code_postal', $data) && $data['code_postal'] === null) {
            $object->setCodePostal(null);
        }
        if (\array_key_exists('commune', $data) && $data['commune'] !== null) {
            $object->setCommune($data['commune']);
            unset($data['commune']);
        }
        elseif (\array_key_exists('commune', $data) && $data['commune'] === null) {
            $object->setCommune(null);
        }
        if (\array_key_exists('date_creation', $data) && $data['date_creation'] !== null) {
            $object->setDateCreation((new \DateTime($data['date_creation']))->setTime(0, 0, 0));
            unset($data['date_creation']);
        }
        elseif (\array_key_exists('date_creation', $data) && $data['date_creation'] === null) {
            $object->setDateCreation(null);
        }
        if (\array_key_exists('date_debut_activite', $data) && $data['date_debut_activite'] !== null) {
            $object->setDateDebutActivite((new \DateTime($data['date_debut_activite']))->setTime(0, 0, 0));
            unset($data['date_debut_activite']);
        }
        elseif (\array_key_exists('date_debut_activite', $data) && $data['date_debut_activite'] === null) {
            $object->setDateDebutActivite(null);
        }
        if (\array_key_exists('date_fermeture', $data) && $data['date_fermeture'] !== null) {
            $object->setDateFermeture((new \DateTime($data['date_fermeture']))->setTime(0, 0, 0));
            unset($data['date_fermeture']);
        }
        elseif (\array_key_exists('date_fermeture', $data) && $data['date_fermeture'] === null) {
            $object->setDateFermeture(null);
        }
        if (\array_key_exists('epci', $data) && $data['epci'] !== null) {
            $object->setEpci($data['epci']);
            unset($data['epci']);
        }
        elseif (\array_key_exists('epci', $data) && $data['epci'] === null) {
            $object->setEpci(null);
        }
        if (\array_key_exists('est_siege', $data) && $data['est_siege'] !== null) {
            $object->setEstSiege($data['est_siege']);
            unset($data['est_siege']);
        }
        elseif (\array_key_exists('est_siege', $data) && $data['est_siege'] === null) {
            $object->setEstSiege(null);
        }
        if (\array_key_exists('etat_administratif', $data) && $data['etat_administratif'] !== null) {
            $object->setEtatAdministratif($data['etat_administratif']);
            unset($data['etat_administratif']);
        }
        elseif (\array_key_exists('etat_administratif', $data) && $data['etat_administratif'] === null) {
            $object->setEtatAdministratif(null);
        }
        if (\array_key_exists('geo_id', $data) && $data['geo_id'] !== null) {
            $object->setGeoId($data['geo_id']);
            unset($data['geo_id']);
        }
        elseif (\array_key_exists('geo_id', $data) && $data['geo_id'] === null) {
            $object->setGeoId(null);
        }
        if (\array_key_exists('latitude', $data) && $data['latitude'] !== null) {
            $object->setLatitude($data['latitude']);
            unset($data['latitude']);
        }
        elseif (\array_key_exists('latitude', $data) && $data['latitude'] === null) {
            $object->setLatitude(null);
        }
        if (\array_key_exists('libelle_commune', $data) && $data['libelle_commune'] !== null) {
            $object->setLibelleCommune($data['libelle_commune']);
            unset($data['libelle_commune']);
        }
        elseif (\array_key_exists('libelle_commune', $data) && $data['libelle_commune'] === null) {
            $object->setLibelleCommune(null);
        }
        if (\array_key_exists('liste_enseignes', $data) && $data['liste_enseignes'] !== null) {
            $values = [];
            foreach ($data['liste_enseignes'] as $value) {
                $values[] = $value;
            }
            $object->setListeEnseignes($values);
            unset($data['liste_enseignes']);
        }
        elseif (\array_key_exists('liste_enseignes', $data) && $data['liste_enseignes'] === null) {
            $object->setListeEnseignes(null);
        }
        if (\array_key_exists('liste_finess', $data) && $data['liste_finess'] !== null) {
            $values_1 = [];
            foreach ($data['liste_finess'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setListeFiness($values_1);
            unset($data['liste_finess']);
        }
        elseif (\array_key_exists('liste_finess', $data) && $data['liste_finess'] === null) {
            $object->setListeFiness(null);
        }
        if (\array_key_exists('liste_id_bio', $data)) {
            $values_2 = [];
            foreach ($data['liste_id_bio'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setListeIdBio($values_2);
            unset($data['liste_id_bio']);
        }
        if (\array_key_exists('liste_idcc', $data)) {
            $values_3 = [];
            foreach ($data['liste_idcc'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setListeIdcc($values_3);
            unset($data['liste_idcc']);
        }
        if (\array_key_exists('liste_id_organisme_formation', $data)) {
            $values_4 = [];
            foreach ($data['liste_id_organisme_formation'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setListeIdOrganismeFormation($values_4);
            unset($data['liste_id_organisme_formation']);
        }
        if (\array_key_exists('liste_rge', $data)) {
            $values_5 = [];
            foreach ($data['liste_rge'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setListeRge($values_5);
            unset($data['liste_rge']);
        }
        if (\array_key_exists('liste_uai', $data)) {
            $values_6 = [];
            foreach ($data['liste_uai'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setListeUai($values_6);
            unset($data['liste_uai']);
        }
        if (\array_key_exists('longitude', $data) && $data['longitude'] !== null) {
            $object->setLongitude($data['longitude']);
            unset($data['longitude']);
        }
        elseif (\array_key_exists('longitude', $data) && $data['longitude'] === null) {
            $object->setLongitude(null);
        }
        if (\array_key_exists('nom_commercial', $data) && $data['nom_commercial'] !== null) {
            $object->setNomCommercial($data['nom_commercial']);
            unset($data['nom_commercial']);
        }
        elseif (\array_key_exists('nom_commercial', $data) && $data['nom_commercial'] === null) {
            $object->setNomCommercial(null);
        }
        if (\array_key_exists('region', $data) && $data['region'] !== null) {
            $object->setRegion($data['region']);
            unset($data['region']);
        }
        elseif (\array_key_exists('region', $data) && $data['region'] === null) {
            $object->setRegion(null);
        }
        if (\array_key_exists('siret', $data) && $data['siret'] !== null) {
            $object->setSiret($data['siret']);
            unset($data['siret']);
        }
        elseif (\array_key_exists('siret', $data) && $data['siret'] === null) {
            $object->setSiret(null);
        }
        if (\array_key_exists('statut_diffusion_etablissement', $data) && $data['statut_diffusion_etablissement'] !== null) {
            $object->setStatutDiffusionEtablissement($data['statut_diffusion_etablissement']);
            unset($data['statut_diffusion_etablissement']);
        }
        elseif (\array_key_exists('statut_diffusion_etablissement', $data) && $data['statut_diffusion_etablissement'] === null) {
            $object->setStatutDiffusionEtablissement(null);
        }
        if (\array_key_exists('tranche_effectif_salarie', $data) && $data['tranche_effectif_salarie'] !== null) {
            $object->setTrancheEffectifSalarie($data['tranche_effectif_salarie']);
            unset($data['tranche_effectif_salarie']);
        }
        elseif (\array_key_exists('tranche_effectif_salarie', $data) && $data['tranche_effectif_salarie'] === null) {
            $object->setTrancheEffectifSalarie(null);
        }
        foreach ($data as $key => $value_7) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_7;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('activitePrincipale')) {
            $dataArray['activite_principale'] = $data->getActivitePrincipale();
        }
        if ($data->isInitialized('activitePrincipaleNaf25')) {
            $dataArray['activite_principale_naf25'] = $data->getActivitePrincipaleNaf25();
        }
        if ($data->isInitialized('ancienSiege')) {
            $dataArray['ancien_siege'] = $data->getAncienSiege();
        }
        if ($data->isInitialized('anneeTrancheEffectifSalarie')) {
            $dataArray['annee_tranche_effectif_salarie'] = $data->getAnneeTrancheEffectifSalarie();
        }
        if ($data->isInitialized('adresse')) {
            $dataArray['adresse'] = $data->getAdresse();
        }
        if ($data->isInitialized('caractereEmployeur')) {
            $dataArray['caractere_employeur'] = $data->getCaractereEmployeur();
        }
        if ($data->isInitialized('codePostal')) {
            $dataArray['code_postal'] = $data->getCodePostal();
        }
        if ($data->isInitialized('commune')) {
            $dataArray['commune'] = $data->getCommune();
        }
        if ($data->isInitialized('dateCreation')) {
            $dataArray['date_creation'] = $data->getDateCreation()?->format('Y-m-d');
        }
        if ($data->isInitialized('dateDebutActivite')) {
            $dataArray['date_debut_activite'] = $data->getDateDebutActivite()?->format('Y-m-d');
        }
        if ($data->isInitialized('dateFermeture')) {
            $dataArray['date_fermeture'] = $data->getDateFermeture()?->format('Y-m-d');
        }
        if ($data->isInitialized('epci')) {
            $dataArray['epci'] = $data->getEpci();
        }
        if ($data->isInitialized('estSiege')) {
            $dataArray['est_siege'] = $data->getEstSiege();
        }
        if ($data->isInitialized('etatAdministratif')) {
            $dataArray['etat_administratif'] = $data->getEtatAdministratif();
        }
        if ($data->isInitialized('geoId')) {
            $dataArray['geo_id'] = $data->getGeoId();
        }
        if ($data->isInitialized('latitude')) {
            $dataArray['latitude'] = $data->getLatitude();
        }
        if ($data->isInitialized('libelleCommune')) {
            $dataArray['libelle_commune'] = $data->getLibelleCommune();
        }
        if ($data->isInitialized('listeEnseignes')) {
            $values = [];
            foreach ($data->getListeEnseignes() as $value) {
                $values[] = $value;
            }
            $dataArray['liste_enseignes'] = $values;
        }
        if ($data->isInitialized('listeFiness')) {
            $values_1 = [];
            foreach ($data->getListeFiness() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['liste_finess'] = $values_1;
        }
        if ($data->isInitialized('listeIdBio') && null !== $data->getListeIdBio()) {
            $values_2 = [];
            foreach ($data->getListeIdBio() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['liste_id_bio'] = $values_2;
        }
        if ($data->isInitialized('listeIdcc') && null !== $data->getListeIdcc()) {
            $values_3 = [];
            foreach ($data->getListeIdcc() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['liste_idcc'] = $values_3;
        }
        if ($data->isInitialized('listeIdOrganismeFormation') && null !== $data->getListeIdOrganismeFormation()) {
            $values_4 = [];
            foreach ($data->getListeIdOrganismeFormation() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['liste_id_organisme_formation'] = $values_4;
        }
        if ($data->isInitialized('listeRge') && null !== $data->getListeRge()) {
            $values_5 = [];
            foreach ($data->getListeRge() as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['liste_rge'] = $values_5;
        }
        if ($data->isInitialized('listeUai') && null !== $data->getListeUai()) {
            $values_6 = [];
            foreach ($data->getListeUai() as $value_6) {
                $values_6[] = $value_6;
            }
            $dataArray['liste_uai'] = $values_6;
        }
        if ($data->isInitialized('longitude')) {
            $dataArray['longitude'] = $data->getLongitude();
        }
        if ($data->isInitialized('nomCommercial')) {
            $dataArray['nom_commercial'] = $data->getNomCommercial();
        }
        if ($data->isInitialized('region')) {
            $dataArray['region'] = $data->getRegion();
        }
        if ($data->isInitialized('siret')) {
            $dataArray['siret'] = $data->getSiret();
        }
        if ($data->isInitialized('statutDiffusionEtablissement')) {
            $dataArray['statut_diffusion_etablissement'] = $data->getStatutDiffusionEtablissement();
        }
        if ($data->isInitialized('trancheEffectifSalarie')) {
            $dataArray['tranche_effectif_salarie'] = $data->getTrancheEffectifSalarie();
        }
        foreach ($data as $key => $value_7) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_7;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Etablissement::class => false];
    }
}