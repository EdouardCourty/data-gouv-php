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
class ResultComplementsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\ResultComplements::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\ResultComplements::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\ResultComplements();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('convention_collective_renseignee', $data) && \is_int($data['convention_collective_renseignee'])) {
            $data['convention_collective_renseignee'] = (bool) $data['convention_collective_renseignee'];
        }
        if (\array_key_exists('egapro_renseignee', $data) && \is_int($data['egapro_renseignee'])) {
            $data['egapro_renseignee'] = (bool) $data['egapro_renseignee'];
        }
        if (\array_key_exists('est_achats_responsables', $data) && \is_int($data['est_achats_responsables'])) {
            $data['est_achats_responsables'] = (bool) $data['est_achats_responsables'];
        }
        if (\array_key_exists('est_alim_confiance', $data) && \is_int($data['est_alim_confiance'])) {
            $data['est_alim_confiance'] = (bool) $data['est_alim_confiance'];
        }
        if (\array_key_exists('est_association', $data) && \is_int($data['est_association'])) {
            $data['est_association'] = (bool) $data['est_association'];
        }
        if (\array_key_exists('est_avocat', $data) && \is_int($data['est_avocat'])) {
            $data['est_avocat'] = (bool) $data['est_avocat'];
        }
        if (\array_key_exists('est_bio', $data) && \is_int($data['est_bio'])) {
            $data['est_bio'] = (bool) $data['est_bio'];
        }
        if (\array_key_exists('est_entrepreneur_individuel', $data) && \is_int($data['est_entrepreneur_individuel'])) {
            $data['est_entrepreneur_individuel'] = (bool) $data['est_entrepreneur_individuel'];
        }
        if (\array_key_exists('est_entrepreneur_spectacle', $data) && \is_int($data['est_entrepreneur_spectacle'])) {
            $data['est_entrepreneur_spectacle'] = (bool) $data['est_entrepreneur_spectacle'];
        }
        if (\array_key_exists('est_ess', $data) && \is_int($data['est_ess'])) {
            $data['est_ess'] = (bool) $data['est_ess'];
        }
        if (\array_key_exists('est_finess', $data) && \is_int($data['est_finess'])) {
            $data['est_finess'] = (bool) $data['est_finess'];
        }
        if (\array_key_exists('est_organisme_formation', $data) && \is_int($data['est_organisme_formation'])) {
            $data['est_organisme_formation'] = (bool) $data['est_organisme_formation'];
        }
        if (\array_key_exists('est_qualiopi', $data) && \is_int($data['est_qualiopi'])) {
            $data['est_qualiopi'] = (bool) $data['est_qualiopi'];
        }
        if (\array_key_exists('est_rge', $data) && \is_int($data['est_rge'])) {
            $data['est_rge'] = (bool) $data['est_rge'];
        }
        if (\array_key_exists('est_service_public', $data) && \is_int($data['est_service_public'])) {
            $data['est_service_public'] = (bool) $data['est_service_public'];
        }
        if (\array_key_exists('est_administration', $data) && \is_int($data['est_administration'])) {
            $data['est_administration'] = (bool) $data['est_administration'];
        }
        if (\array_key_exists('est_l100_3', $data) && \is_int($data['est_l100_3'])) {
            $data['est_l100_3'] = (bool) $data['est_l100_3'];
        }
        if (\array_key_exists('est_siae', $data) && \is_int($data['est_siae'])) {
            $data['est_siae'] = (bool) $data['est_siae'];
        }
        if (\array_key_exists('est_societe_mission', $data) && \is_int($data['est_societe_mission'])) {
            $data['est_societe_mission'] = (bool) $data['est_societe_mission'];
        }
        if (\array_key_exists('est_uai', $data) && \is_int($data['est_uai'])) {
            $data['est_uai'] = (bool) $data['est_uai'];
        }
        if (\array_key_exists('est_patrimoine_vivant', $data) && \is_int($data['est_patrimoine_vivant'])) {
            $data['est_patrimoine_vivant'] = (bool) $data['est_patrimoine_vivant'];
        }
        if (\array_key_exists('bilan_ges_renseigne', $data) && \is_int($data['bilan_ges_renseigne'])) {
            $data['bilan_ges_renseigne'] = (bool) $data['bilan_ges_renseigne'];
        }
        if (\array_key_exists('collectivite_territoriale', $data)) {
            $object->setCollectiviteTerritoriale($this->denormalizer->denormalize($data['collectivite_territoriale'], \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\CollectiviteTerritoriale::class, 'json', $context));
            unset($data['collectivite_territoriale']);
        }
        if (\array_key_exists('convention_collective_renseignee', $data)) {
            $object->setConventionCollectiveRenseignee($data['convention_collective_renseignee']);
            unset($data['convention_collective_renseignee']);
        }
        if (\array_key_exists('liste_idcc', $data)) {
            $values = [];
            foreach ($data['liste_idcc'] as $value) {
                $values[] = $value;
            }
            $object->setListeIdcc($values);
            unset($data['liste_idcc']);
        }
        if (\array_key_exists('liste_finess_juridique', $data)) {
            $values_1 = [];
            foreach ($data['liste_finess_juridique'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setListeFinessJuridique($values_1);
            unset($data['liste_finess_juridique']);
        }
        if (\array_key_exists('egapro_renseignee', $data)) {
            $object->setEgaproRenseignee($data['egapro_renseignee']);
            unset($data['egapro_renseignee']);
        }
        if (\array_key_exists('est_achats_responsables', $data)) {
            $object->setEstAchatsResponsables($data['est_achats_responsables']);
            unset($data['est_achats_responsables']);
        }
        if (\array_key_exists('est_alim_confiance', $data)) {
            $object->setEstAlimConfiance($data['est_alim_confiance']);
            unset($data['est_alim_confiance']);
        }
        if (\array_key_exists('est_association', $data)) {
            $object->setEstAssociation($data['est_association']);
            unset($data['est_association']);
        }
        if (\array_key_exists('est_avocat', $data)) {
            $object->setEstAvocat($data['est_avocat']);
            unset($data['est_avocat']);
        }
        if (\array_key_exists('est_bio', $data)) {
            $object->setEstBio($data['est_bio']);
            unset($data['est_bio']);
        }
        if (\array_key_exists('est_entrepreneur_individuel', $data)) {
            $object->setEstEntrepreneurIndividuel($data['est_entrepreneur_individuel']);
            unset($data['est_entrepreneur_individuel']);
        }
        if (\array_key_exists('est_entrepreneur_spectacle', $data)) {
            $object->setEstEntrepreneurSpectacle($data['est_entrepreneur_spectacle']);
            unset($data['est_entrepreneur_spectacle']);
        }
        if (\array_key_exists('est_ess', $data)) {
            $object->setEstEss($data['est_ess']);
            unset($data['est_ess']);
        }
        if (\array_key_exists('est_finess', $data)) {
            $object->setEstFiness($data['est_finess']);
            unset($data['est_finess']);
        }
        if (\array_key_exists('est_organisme_formation', $data)) {
            $object->setEstOrganismeFormation($data['est_organisme_formation']);
            unset($data['est_organisme_formation']);
        }
        if (\array_key_exists('est_qualiopi', $data)) {
            $object->setEstQualiopi($data['est_qualiopi']);
            unset($data['est_qualiopi']);
        }
        if (\array_key_exists('liste_id_organisme_formation', $data)) {
            $values_2 = [];
            foreach ($data['liste_id_organisme_formation'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setListeIdOrganismeFormation($values_2);
            unset($data['liste_id_organisme_formation']);
        }
        if (\array_key_exists('est_rge', $data)) {
            $object->setEstRge($data['est_rge']);
            unset($data['est_rge']);
        }
        if (\array_key_exists('est_service_public', $data) && $data['est_service_public'] !== null) {
            $object->setEstServicePublic($data['est_service_public']);
            unset($data['est_service_public']);
        }
        elseif (\array_key_exists('est_service_public', $data) && $data['est_service_public'] === null) {
            $object->setEstServicePublic(null);
        }
        if (\array_key_exists('est_administration', $data)) {
            $object->setEstAdministration($data['est_administration']);
            unset($data['est_administration']);
        }
        if (\array_key_exists('est_l100_3', $data) && $data['est_l100_3'] !== null) {
            $object->setEstL1003($data['est_l100_3']);
            unset($data['est_l100_3']);
        }
        elseif (\array_key_exists('est_l100_3', $data) && $data['est_l100_3'] === null) {
            $object->setEstL1003(null);
        }
        if (\array_key_exists('est_siae', $data)) {
            $object->setEstSiae($data['est_siae']);
            unset($data['est_siae']);
        }
        if (\array_key_exists('est_societe_mission', $data)) {
            $object->setEstSocieteMission($data['est_societe_mission']);
            unset($data['est_societe_mission']);
        }
        if (\array_key_exists('est_uai', $data)) {
            $object->setEstUai($data['est_uai']);
            unset($data['est_uai']);
        }
        if (\array_key_exists('est_patrimoine_vivant', $data)) {
            $object->setEstPatrimoineVivant($data['est_patrimoine_vivant']);
            unset($data['est_patrimoine_vivant']);
        }
        if (\array_key_exists('bilan_ges_renseigne', $data)) {
            $object->setBilanGesRenseigne($data['bilan_ges_renseigne']);
            unset($data['bilan_ges_renseigne']);
        }
        if (\array_key_exists('identifiant_association', $data) && $data['identifiant_association'] !== null) {
            $object->setIdentifiantAssociation($data['identifiant_association']);
            unset($data['identifiant_association']);
        }
        elseif (\array_key_exists('identifiant_association', $data) && $data['identifiant_association'] === null) {
            $object->setIdentifiantAssociation(null);
        }
        if (\array_key_exists('statut_entrepreneur_spectacle', $data) && $data['statut_entrepreneur_spectacle'] !== null) {
            $object->setStatutEntrepreneurSpectacle($data['statut_entrepreneur_spectacle']);
            unset($data['statut_entrepreneur_spectacle']);
        }
        elseif (\array_key_exists('statut_entrepreneur_spectacle', $data) && $data['statut_entrepreneur_spectacle'] === null) {
            $object->setStatutEntrepreneurSpectacle(null);
        }
        if (\array_key_exists('type_siae', $data) && $data['type_siae'] !== null) {
            $object->setTypeSiae($data['type_siae']);
            unset($data['type_siae']);
        }
        elseif (\array_key_exists('type_siae', $data) && $data['type_siae'] === null) {
            $object->setTypeSiae(null);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('collectiviteTerritoriale') && null !== $data->getCollectiviteTerritoriale()) {
            $dataArray['collectivite_territoriale'] = $this->normalizer->normalize($data->getCollectiviteTerritoriale(), 'json', $context);
        }
        if ($data->isInitialized('conventionCollectiveRenseignee') && null !== $data->getConventionCollectiveRenseignee()) {
            $dataArray['convention_collective_renseignee'] = $data->getConventionCollectiveRenseignee();
        }
        if ($data->isInitialized('listeIdcc') && null !== $data->getListeIdcc()) {
            $values = [];
            foreach ($data->getListeIdcc() as $value) {
                $values[] = $value;
            }
            $dataArray['liste_idcc'] = $values;
        }
        if ($data->isInitialized('listeFinessJuridique') && null !== $data->getListeFinessJuridique()) {
            $values_1 = [];
            foreach ($data->getListeFinessJuridique() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['liste_finess_juridique'] = $values_1;
        }
        if ($data->isInitialized('egaproRenseignee') && null !== $data->getEgaproRenseignee()) {
            $dataArray['egapro_renseignee'] = $data->getEgaproRenseignee();
        }
        if ($data->isInitialized('estAchatsResponsables') && null !== $data->getEstAchatsResponsables()) {
            $dataArray['est_achats_responsables'] = $data->getEstAchatsResponsables();
        }
        if ($data->isInitialized('estAlimConfiance') && null !== $data->getEstAlimConfiance()) {
            $dataArray['est_alim_confiance'] = $data->getEstAlimConfiance();
        }
        if ($data->isInitialized('estAssociation') && null !== $data->getEstAssociation()) {
            $dataArray['est_association'] = $data->getEstAssociation();
        }
        if ($data->isInitialized('estAvocat') && null !== $data->getEstAvocat()) {
            $dataArray['est_avocat'] = $data->getEstAvocat();
        }
        if ($data->isInitialized('estBio') && null !== $data->getEstBio()) {
            $dataArray['est_bio'] = $data->getEstBio();
        }
        if ($data->isInitialized('estEntrepreneurIndividuel') && null !== $data->getEstEntrepreneurIndividuel()) {
            $dataArray['est_entrepreneur_individuel'] = $data->getEstEntrepreneurIndividuel();
        }
        if ($data->isInitialized('estEntrepreneurSpectacle') && null !== $data->getEstEntrepreneurSpectacle()) {
            $dataArray['est_entrepreneur_spectacle'] = $data->getEstEntrepreneurSpectacle();
        }
        if ($data->isInitialized('estEss') && null !== $data->getEstEss()) {
            $dataArray['est_ess'] = $data->getEstEss();
        }
        if ($data->isInitialized('estFiness') && null !== $data->getEstFiness()) {
            $dataArray['est_finess'] = $data->getEstFiness();
        }
        if ($data->isInitialized('estOrganismeFormation') && null !== $data->getEstOrganismeFormation()) {
            $dataArray['est_organisme_formation'] = $data->getEstOrganismeFormation();
        }
        if ($data->isInitialized('estQualiopi') && null !== $data->getEstQualiopi()) {
            $dataArray['est_qualiopi'] = $data->getEstQualiopi();
        }
        if ($data->isInitialized('listeIdOrganismeFormation') && null !== $data->getListeIdOrganismeFormation()) {
            $values_2 = [];
            foreach ($data->getListeIdOrganismeFormation() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['liste_id_organisme_formation'] = $values_2;
        }
        if ($data->isInitialized('estRge') && null !== $data->getEstRge()) {
            $dataArray['est_rge'] = $data->getEstRge();
        }
        if ($data->isInitialized('estServicePublic')) {
            $dataArray['est_service_public'] = $data->getEstServicePublic();
        }
        if ($data->isInitialized('estAdministration') && null !== $data->getEstAdministration()) {
            $dataArray['est_administration'] = $data->getEstAdministration();
        }
        if ($data->isInitialized('estL1003')) {
            $dataArray['est_l100_3'] = $data->getEstL1003();
        }
        if ($data->isInitialized('estSiae') && null !== $data->getEstSiae()) {
            $dataArray['est_siae'] = $data->getEstSiae();
        }
        if ($data->isInitialized('estSocieteMission') && null !== $data->getEstSocieteMission()) {
            $dataArray['est_societe_mission'] = $data->getEstSocieteMission();
        }
        if ($data->isInitialized('estUai') && null !== $data->getEstUai()) {
            $dataArray['est_uai'] = $data->getEstUai();
        }
        if ($data->isInitialized('estPatrimoineVivant') && null !== $data->getEstPatrimoineVivant()) {
            $dataArray['est_patrimoine_vivant'] = $data->getEstPatrimoineVivant();
        }
        if ($data->isInitialized('bilanGesRenseigne') && null !== $data->getBilanGesRenseigne()) {
            $dataArray['bilan_ges_renseigne'] = $data->getBilanGesRenseigne();
        }
        if ($data->isInitialized('identifiantAssociation')) {
            $dataArray['identifiant_association'] = $data->getIdentifiantAssociation();
        }
        if ($data->isInitialized('statutEntrepreneurSpectacle')) {
            $dataArray['statut_entrepreneur_spectacle'] = $data->getStatutEntrepreneurSpectacle();
        }
        if ($data->isInitialized('typeSiae')) {
            $dataArray['type_siae'] = $data->getTypeSiae();
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\Entreprise\Client\Model\ResultComplements::class => false];
    }
}