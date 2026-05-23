<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Ecourty\DataGouv\DataServices\Sirene\Client\Runtime\Normalizer\CheckArray;
use Ecourty\DataGouv\DataServices\Sirene\Client\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class UniteLegaleEtablissementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Sirene\Client\Model\UniteLegaleEtablissement::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Sirene\Client\Model\UniteLegaleEtablissement::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Sirene\Client\Model\UniteLegaleEtablissement();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('unitePurgeeUniteLegale', $data) && \is_int($data['unitePurgeeUniteLegale'])) {
            $data['unitePurgeeUniteLegale'] = (bool) $data['unitePurgeeUniteLegale'];
        }
        if (\array_key_exists('statutDiffusionUniteLegale', $data)) {
            $object->setStatutDiffusionUniteLegale($data['statutDiffusionUniteLegale']);
        }
        if (\array_key_exists('unitePurgeeUniteLegale', $data)) {
            $object->setUnitePurgeeUniteLegale($data['unitePurgeeUniteLegale']);
        }
        if (\array_key_exists('dateCreationUniteLegale', $data)) {
            $object->setDateCreationUniteLegale(\DateTime::createFromFormat('Y-m-d', $data['dateCreationUniteLegale'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('dateNaissanceUniteLegale', $data)) {
            $object->setDateNaissanceUniteLegale($data['dateNaissanceUniteLegale']);
        }
        if (\array_key_exists('codeCommuneNaissanceUniteLegale', $data)) {
            $object->setCodeCommuneNaissanceUniteLegale($data['codeCommuneNaissanceUniteLegale']);
        }
        if (\array_key_exists('codePaysNaissanceUniteLegale', $data)) {
            $object->setCodePaysNaissanceUniteLegale($data['codePaysNaissanceUniteLegale']);
        }
        if (\array_key_exists('libelleNationaliteUniteLegale', $data)) {
            $object->setLibelleNationaliteUniteLegale($data['libelleNationaliteUniteLegale']);
        }
        if (\array_key_exists('identifiantAssociationUniteLegale', $data)) {
            $object->setIdentifiantAssociationUniteLegale($data['identifiantAssociationUniteLegale']);
        }
        if (\array_key_exists('trancheEffectifsUniteLegale', $data)) {
            $object->setTrancheEffectifsUniteLegale($data['trancheEffectifsUniteLegale']);
        }
        if (\array_key_exists('anneeEffectifsUniteLegale', $data)) {
            $object->setAnneeEffectifsUniteLegale($data['anneeEffectifsUniteLegale']);
        }
        if (\array_key_exists('dateDernierTraitementUniteLegale', $data)) {
            $object->setDateDernierTraitementUniteLegale($data['dateDernierTraitementUniteLegale']);
        }
        if (\array_key_exists('categorieEntreprise', $data)) {
            $object->setCategorieEntreprise($data['categorieEntreprise']);
        }
        if (\array_key_exists('anneeCategorieEntreprise', $data)) {
            $object->setAnneeCategorieEntreprise($data['anneeCategorieEntreprise']);
        }
        if (\array_key_exists('sigleUniteLegale', $data)) {
            $object->setSigleUniteLegale($data['sigleUniteLegale']);
        }
        if (\array_key_exists('sexeUniteLegale', $data)) {
            $object->setSexeUniteLegale($data['sexeUniteLegale']);
        }
        if (\array_key_exists('prenom1UniteLegale', $data)) {
            $object->setPrenom1UniteLegale($data['prenom1UniteLegale']);
        }
        if (\array_key_exists('prenom2UniteLegale', $data)) {
            $object->setPrenom2UniteLegale($data['prenom2UniteLegale']);
        }
        if (\array_key_exists('prenom3UniteLegale', $data)) {
            $object->setPrenom3UniteLegale($data['prenom3UniteLegale']);
        }
        if (\array_key_exists('prenom4UniteLegale', $data)) {
            $object->setPrenom4UniteLegale($data['prenom4UniteLegale']);
        }
        if (\array_key_exists('prenomUsuelUniteLegale', $data)) {
            $object->setPrenomUsuelUniteLegale($data['prenomUsuelUniteLegale']);
        }
        if (\array_key_exists('pseudonymeUniteLegale', $data)) {
            $object->setPseudonymeUniteLegale($data['pseudonymeUniteLegale']);
        }
        if (\array_key_exists('etatAdministratifUniteLegale', $data)) {
            $object->setEtatAdministratifUniteLegale($data['etatAdministratifUniteLegale']);
        }
        if (\array_key_exists('nomUniteLegale', $data)) {
            $object->setNomUniteLegale($data['nomUniteLegale']);
        }
        if (\array_key_exists('denominationUniteLegale', $data)) {
            $object->setDenominationUniteLegale($data['denominationUniteLegale']);
        }
        if (\array_key_exists('denominationUsuelle1UniteLegale', $data)) {
            $object->setDenominationUsuelle1UniteLegale($data['denominationUsuelle1UniteLegale']);
        }
        if (\array_key_exists('denominationUsuelle2UniteLegale', $data)) {
            $object->setDenominationUsuelle2UniteLegale($data['denominationUsuelle2UniteLegale']);
        }
        if (\array_key_exists('denominationUsuelle3UniteLegale', $data)) {
            $object->setDenominationUsuelle3UniteLegale($data['denominationUsuelle3UniteLegale']);
        }
        if (\array_key_exists('activitePrincipaleUniteLegale', $data)) {
            $object->setActivitePrincipaleUniteLegale($data['activitePrincipaleUniteLegale']);
        }
        if (\array_key_exists('categorieJuridiqueUniteLegale', $data)) {
            $object->setCategorieJuridiqueUniteLegale($data['categorieJuridiqueUniteLegale']);
        }
        if (\array_key_exists('nicSiegeUniteLegale', $data)) {
            $object->setNicSiegeUniteLegale($data['nicSiegeUniteLegale']);
        }
        if (\array_key_exists('nomenclatureActivitePrincipaleUniteLegale', $data)) {
            $object->setNomenclatureActivitePrincipaleUniteLegale($data['nomenclatureActivitePrincipaleUniteLegale']);
        }
        if (\array_key_exists('nomUsageUniteLegale', $data)) {
            $object->setNomUsageUniteLegale($data['nomUsageUniteLegale']);
        }
        if (\array_key_exists('economieSocialeSolidaireUniteLegale', $data)) {
            $object->setEconomieSocialeSolidaireUniteLegale($data['economieSocialeSolidaireUniteLegale']);
        }
        if (\array_key_exists('societeMissionUniteLegale', $data)) {
            $object->setSocieteMissionUniteLegale($data['societeMissionUniteLegale']);
        }
        if (\array_key_exists('caractereEmployeurUniteLegale', $data)) {
            $object->setCaractereEmployeurUniteLegale($data['caractereEmployeurUniteLegale']);
        }
        if (\array_key_exists('activitePrincipaleNAF25UniteLegale', $data)) {
            $object->setActivitePrincipaleNAF25UniteLegale($data['activitePrincipaleNAF25UniteLegale']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('statutDiffusionUniteLegale') && null !== $data->getStatutDiffusionUniteLegale()) {
            $dataArray['statutDiffusionUniteLegale'] = $data->getStatutDiffusionUniteLegale();
        }
        if ($data->isInitialized('unitePurgeeUniteLegale') && null !== $data->getUnitePurgeeUniteLegale()) {
            $dataArray['unitePurgeeUniteLegale'] = $data->getUnitePurgeeUniteLegale();
        }
        if ($data->isInitialized('dateCreationUniteLegale') && null !== $data->getDateCreationUniteLegale()) {
            $dataArray['dateCreationUniteLegale'] = $data->getDateCreationUniteLegale()?->format('Y-m-d');
        }
        if ($data->isInitialized('dateNaissanceUniteLegale') && null !== $data->getDateNaissanceUniteLegale()) {
            $dataArray['dateNaissanceUniteLegale'] = $data->getDateNaissanceUniteLegale();
        }
        if ($data->isInitialized('codeCommuneNaissanceUniteLegale') && null !== $data->getCodeCommuneNaissanceUniteLegale()) {
            $dataArray['codeCommuneNaissanceUniteLegale'] = $data->getCodeCommuneNaissanceUniteLegale();
        }
        if ($data->isInitialized('codePaysNaissanceUniteLegale') && null !== $data->getCodePaysNaissanceUniteLegale()) {
            $dataArray['codePaysNaissanceUniteLegale'] = $data->getCodePaysNaissanceUniteLegale();
        }
        if ($data->isInitialized('libelleNationaliteUniteLegale') && null !== $data->getLibelleNationaliteUniteLegale()) {
            $dataArray['libelleNationaliteUniteLegale'] = $data->getLibelleNationaliteUniteLegale();
        }
        if ($data->isInitialized('identifiantAssociationUniteLegale') && null !== $data->getIdentifiantAssociationUniteLegale()) {
            $dataArray['identifiantAssociationUniteLegale'] = $data->getIdentifiantAssociationUniteLegale();
        }
        if ($data->isInitialized('trancheEffectifsUniteLegale') && null !== $data->getTrancheEffectifsUniteLegale()) {
            $dataArray['trancheEffectifsUniteLegale'] = $data->getTrancheEffectifsUniteLegale();
        }
        if ($data->isInitialized('anneeEffectifsUniteLegale') && null !== $data->getAnneeEffectifsUniteLegale()) {
            $dataArray['anneeEffectifsUniteLegale'] = $data->getAnneeEffectifsUniteLegale();
        }
        if ($data->isInitialized('dateDernierTraitementUniteLegale') && null !== $data->getDateDernierTraitementUniteLegale()) {
            $dataArray['dateDernierTraitementUniteLegale'] = $data->getDateDernierTraitementUniteLegale();
        }
        if ($data->isInitialized('categorieEntreprise') && null !== $data->getCategorieEntreprise()) {
            $dataArray['categorieEntreprise'] = $data->getCategorieEntreprise();
        }
        if ($data->isInitialized('anneeCategorieEntreprise') && null !== $data->getAnneeCategorieEntreprise()) {
            $dataArray['anneeCategorieEntreprise'] = $data->getAnneeCategorieEntreprise();
        }
        if ($data->isInitialized('sigleUniteLegale') && null !== $data->getSigleUniteLegale()) {
            $dataArray['sigleUniteLegale'] = $data->getSigleUniteLegale();
        }
        if ($data->isInitialized('sexeUniteLegale') && null !== $data->getSexeUniteLegale()) {
            $dataArray['sexeUniteLegale'] = $data->getSexeUniteLegale();
        }
        if ($data->isInitialized('prenom1UniteLegale') && null !== $data->getPrenom1UniteLegale()) {
            $dataArray['prenom1UniteLegale'] = $data->getPrenom1UniteLegale();
        }
        if ($data->isInitialized('prenom2UniteLegale') && null !== $data->getPrenom2UniteLegale()) {
            $dataArray['prenom2UniteLegale'] = $data->getPrenom2UniteLegale();
        }
        if ($data->isInitialized('prenom3UniteLegale') && null !== $data->getPrenom3UniteLegale()) {
            $dataArray['prenom3UniteLegale'] = $data->getPrenom3UniteLegale();
        }
        if ($data->isInitialized('prenom4UniteLegale') && null !== $data->getPrenom4UniteLegale()) {
            $dataArray['prenom4UniteLegale'] = $data->getPrenom4UniteLegale();
        }
        if ($data->isInitialized('prenomUsuelUniteLegale') && null !== $data->getPrenomUsuelUniteLegale()) {
            $dataArray['prenomUsuelUniteLegale'] = $data->getPrenomUsuelUniteLegale();
        }
        if ($data->isInitialized('pseudonymeUniteLegale') && null !== $data->getPseudonymeUniteLegale()) {
            $dataArray['pseudonymeUniteLegale'] = $data->getPseudonymeUniteLegale();
        }
        if ($data->isInitialized('etatAdministratifUniteLegale') && null !== $data->getEtatAdministratifUniteLegale()) {
            $dataArray['etatAdministratifUniteLegale'] = $data->getEtatAdministratifUniteLegale();
        }
        if ($data->isInitialized('nomUniteLegale') && null !== $data->getNomUniteLegale()) {
            $dataArray['nomUniteLegale'] = $data->getNomUniteLegale();
        }
        if ($data->isInitialized('denominationUniteLegale') && null !== $data->getDenominationUniteLegale()) {
            $dataArray['denominationUniteLegale'] = $data->getDenominationUniteLegale();
        }
        if ($data->isInitialized('denominationUsuelle1UniteLegale') && null !== $data->getDenominationUsuelle1UniteLegale()) {
            $dataArray['denominationUsuelle1UniteLegale'] = $data->getDenominationUsuelle1UniteLegale();
        }
        if ($data->isInitialized('denominationUsuelle2UniteLegale') && null !== $data->getDenominationUsuelle2UniteLegale()) {
            $dataArray['denominationUsuelle2UniteLegale'] = $data->getDenominationUsuelle2UniteLegale();
        }
        if ($data->isInitialized('denominationUsuelle3UniteLegale') && null !== $data->getDenominationUsuelle3UniteLegale()) {
            $dataArray['denominationUsuelle3UniteLegale'] = $data->getDenominationUsuelle3UniteLegale();
        }
        if ($data->isInitialized('activitePrincipaleUniteLegale') && null !== $data->getActivitePrincipaleUniteLegale()) {
            $dataArray['activitePrincipaleUniteLegale'] = $data->getActivitePrincipaleUniteLegale();
        }
        if ($data->isInitialized('categorieJuridiqueUniteLegale') && null !== $data->getCategorieJuridiqueUniteLegale()) {
            $dataArray['categorieJuridiqueUniteLegale'] = $data->getCategorieJuridiqueUniteLegale();
        }
        if ($data->isInitialized('nicSiegeUniteLegale') && null !== $data->getNicSiegeUniteLegale()) {
            $dataArray['nicSiegeUniteLegale'] = $data->getNicSiegeUniteLegale();
        }
        if ($data->isInitialized('nomenclatureActivitePrincipaleUniteLegale') && null !== $data->getNomenclatureActivitePrincipaleUniteLegale()) {
            $dataArray['nomenclatureActivitePrincipaleUniteLegale'] = $data->getNomenclatureActivitePrincipaleUniteLegale();
        }
        if ($data->isInitialized('nomUsageUniteLegale') && null !== $data->getNomUsageUniteLegale()) {
            $dataArray['nomUsageUniteLegale'] = $data->getNomUsageUniteLegale();
        }
        if ($data->isInitialized('economieSocialeSolidaireUniteLegale') && null !== $data->getEconomieSocialeSolidaireUniteLegale()) {
            $dataArray['economieSocialeSolidaireUniteLegale'] = $data->getEconomieSocialeSolidaireUniteLegale();
        }
        if ($data->isInitialized('societeMissionUniteLegale') && null !== $data->getSocieteMissionUniteLegale()) {
            $dataArray['societeMissionUniteLegale'] = $data->getSocieteMissionUniteLegale();
        }
        if ($data->isInitialized('caractereEmployeurUniteLegale') && null !== $data->getCaractereEmployeurUniteLegale()) {
            $dataArray['caractereEmployeurUniteLegale'] = $data->getCaractereEmployeurUniteLegale();
        }
        if ($data->isInitialized('activitePrincipaleNAF25UniteLegale') && null !== $data->getActivitePrincipaleNAF25UniteLegale()) {
            $dataArray['activitePrincipaleNAF25UniteLegale'] = $data->getActivitePrincipaleNAF25UniteLegale();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\Sirene\Client\Model\UniteLegaleEtablissement::class => false];
    }
}