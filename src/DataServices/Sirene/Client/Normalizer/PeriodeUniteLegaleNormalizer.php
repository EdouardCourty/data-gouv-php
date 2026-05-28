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
class PeriodeUniteLegaleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Sirene\Client\Model\PeriodeUniteLegale::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Sirene\Client\Model\PeriodeUniteLegale::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Sirene\Client\Model\PeriodeUniteLegale();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('changementEtatAdministratifUniteLegale', $data) && \is_int($data['changementEtatAdministratifUniteLegale'])) {
            $data['changementEtatAdministratifUniteLegale'] = (bool) $data['changementEtatAdministratifUniteLegale'];
        }
        if (\array_key_exists('changementNomUniteLegale', $data) && \is_int($data['changementNomUniteLegale'])) {
            $data['changementNomUniteLegale'] = (bool) $data['changementNomUniteLegale'];
        }
        if (\array_key_exists('changementNomUsageUniteLegale', $data) && \is_int($data['changementNomUsageUniteLegale'])) {
            $data['changementNomUsageUniteLegale'] = (bool) $data['changementNomUsageUniteLegale'];
        }
        if (\array_key_exists('changementDenominationUniteLegale', $data) && \is_int($data['changementDenominationUniteLegale'])) {
            $data['changementDenominationUniteLegale'] = (bool) $data['changementDenominationUniteLegale'];
        }
        if (\array_key_exists('changementCategorieJuridiqueUniteLegale', $data) && \is_int($data['changementCategorieJuridiqueUniteLegale'])) {
            $data['changementCategorieJuridiqueUniteLegale'] = (bool) $data['changementCategorieJuridiqueUniteLegale'];
        }
        if (\array_key_exists('changementActivitePrincipaleUniteLegale', $data) && \is_int($data['changementActivitePrincipaleUniteLegale'])) {
            $data['changementActivitePrincipaleUniteLegale'] = (bool) $data['changementActivitePrincipaleUniteLegale'];
        }
        if (\array_key_exists('changementNicSiegeUniteLegale', $data) && \is_int($data['changementNicSiegeUniteLegale'])) {
            $data['changementNicSiegeUniteLegale'] = (bool) $data['changementNicSiegeUniteLegale'];
        }
        if (\array_key_exists('changementEconomieSocialeSolidaireUniteLegale', $data) && \is_int($data['changementEconomieSocialeSolidaireUniteLegale'])) {
            $data['changementEconomieSocialeSolidaireUniteLegale'] = (bool) $data['changementEconomieSocialeSolidaireUniteLegale'];
        }
        if (\array_key_exists('changementSocieteMissionUniteLegale', $data) && \is_int($data['changementSocieteMissionUniteLegale'])) {
            $data['changementSocieteMissionUniteLegale'] = (bool) $data['changementSocieteMissionUniteLegale'];
        }
        if (\array_key_exists('changementCaractereEmployeurUniteLegale', $data) && \is_int($data['changementCaractereEmployeurUniteLegale'])) {
            $data['changementCaractereEmployeurUniteLegale'] = (bool) $data['changementCaractereEmployeurUniteLegale'];
        }
        if (\array_key_exists('changementDenominationUsuelleUniteLegale', $data) && \is_int($data['changementDenominationUsuelleUniteLegale'])) {
            $data['changementDenominationUsuelleUniteLegale'] = (bool) $data['changementDenominationUsuelleUniteLegale'];
        }
        if (\array_key_exists('dateFin', $data)) {
            $object->setDateFin((new \DateTime($data['dateFin']))->setTime(0, 0, 0));
        }
        if (\array_key_exists('dateDebut', $data)) {
            $object->setDateDebut((new \DateTime($data['dateDebut']))->setTime(0, 0, 0));
        }
        if (\array_key_exists('etatAdministratifUniteLegale', $data)) {
            $object->setEtatAdministratifUniteLegale($data['etatAdministratifUniteLegale']);
        }
        if (\array_key_exists('changementEtatAdministratifUniteLegale', $data)) {
            $object->setChangementEtatAdministratifUniteLegale($data['changementEtatAdministratifUniteLegale']);
        }
        if (\array_key_exists('nomUniteLegale', $data)) {
            $object->setNomUniteLegale($data['nomUniteLegale']);
        }
        if (\array_key_exists('changementNomUniteLegale', $data)) {
            $object->setChangementNomUniteLegale($data['changementNomUniteLegale']);
        }
        if (\array_key_exists('nomUsageUniteLegale', $data)) {
            $object->setNomUsageUniteLegale($data['nomUsageUniteLegale']);
        }
        if (\array_key_exists('changementNomUsageUniteLegale', $data)) {
            $object->setChangementNomUsageUniteLegale($data['changementNomUsageUniteLegale']);
        }
        if (\array_key_exists('denominationUniteLegale', $data)) {
            $object->setDenominationUniteLegale($data['denominationUniteLegale']);
        }
        if (\array_key_exists('changementDenominationUniteLegale', $data)) {
            $object->setChangementDenominationUniteLegale($data['changementDenominationUniteLegale']);
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
        if (\array_key_exists('categorieJuridiqueUniteLegale', $data)) {
            $object->setCategorieJuridiqueUniteLegale($data['categorieJuridiqueUniteLegale']);
        }
        if (\array_key_exists('changementCategorieJuridiqueUniteLegale', $data)) {
            $object->setChangementCategorieJuridiqueUniteLegale($data['changementCategorieJuridiqueUniteLegale']);
        }
        if (\array_key_exists('activitePrincipaleUniteLegale', $data)) {
            $object->setActivitePrincipaleUniteLegale($data['activitePrincipaleUniteLegale']);
        }
        if (\array_key_exists('nomenclatureActivitePrincipaleUniteLegale', $data)) {
            $object->setNomenclatureActivitePrincipaleUniteLegale($data['nomenclatureActivitePrincipaleUniteLegale']);
        }
        if (\array_key_exists('changementActivitePrincipaleUniteLegale', $data)) {
            $object->setChangementActivitePrincipaleUniteLegale($data['changementActivitePrincipaleUniteLegale']);
        }
        if (\array_key_exists('nicSiegeUniteLegale', $data)) {
            $object->setNicSiegeUniteLegale($data['nicSiegeUniteLegale']);
        }
        if (\array_key_exists('changementNicSiegeUniteLegale', $data)) {
            $object->setChangementNicSiegeUniteLegale($data['changementNicSiegeUniteLegale']);
        }
        if (\array_key_exists('economieSocialeSolidaireUniteLegale', $data)) {
            $object->setEconomieSocialeSolidaireUniteLegale($data['economieSocialeSolidaireUniteLegale']);
        }
        if (\array_key_exists('changementEconomieSocialeSolidaireUniteLegale', $data)) {
            $object->setChangementEconomieSocialeSolidaireUniteLegale($data['changementEconomieSocialeSolidaireUniteLegale']);
        }
        if (\array_key_exists('societeMissionUniteLegale', $data)) {
            $object->setSocieteMissionUniteLegale($data['societeMissionUniteLegale']);
        }
        if (\array_key_exists('changementSocieteMissionUniteLegale', $data)) {
            $object->setChangementSocieteMissionUniteLegale($data['changementSocieteMissionUniteLegale']);
        }
        if (\array_key_exists('caractereEmployeurUniteLegale', $data)) {
            $object->setCaractereEmployeurUniteLegale($data['caractereEmployeurUniteLegale']);
        }
        if (\array_key_exists('changementCaractereEmployeurUniteLegale', $data)) {
            $object->setChangementCaractereEmployeurUniteLegale($data['changementCaractereEmployeurUniteLegale']);
        }
        if (\array_key_exists('changementDenominationUsuelleUniteLegale', $data)) {
            $object->setChangementDenominationUsuelleUniteLegale($data['changementDenominationUsuelleUniteLegale']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dateFin') && null !== $data->getDateFin()) {
            $dataArray['dateFin'] = $data->getDateFin()?->format('Y-m-d');
        }
        if ($data->isInitialized('dateDebut') && null !== $data->getDateDebut()) {
            $dataArray['dateDebut'] = $data->getDateDebut()?->format('Y-m-d');
        }
        if ($data->isInitialized('etatAdministratifUniteLegale') && null !== $data->getEtatAdministratifUniteLegale()) {
            $dataArray['etatAdministratifUniteLegale'] = $data->getEtatAdministratifUniteLegale();
        }
        if ($data->isInitialized('changementEtatAdministratifUniteLegale') && null !== $data->getChangementEtatAdministratifUniteLegale()) {
            $dataArray['changementEtatAdministratifUniteLegale'] = $data->getChangementEtatAdministratifUniteLegale();
        }
        if ($data->isInitialized('nomUniteLegale') && null !== $data->getNomUniteLegale()) {
            $dataArray['nomUniteLegale'] = $data->getNomUniteLegale();
        }
        if ($data->isInitialized('changementNomUniteLegale') && null !== $data->getChangementNomUniteLegale()) {
            $dataArray['changementNomUniteLegale'] = $data->getChangementNomUniteLegale();
        }
        if ($data->isInitialized('nomUsageUniteLegale') && null !== $data->getNomUsageUniteLegale()) {
            $dataArray['nomUsageUniteLegale'] = $data->getNomUsageUniteLegale();
        }
        if ($data->isInitialized('changementNomUsageUniteLegale') && null !== $data->getChangementNomUsageUniteLegale()) {
            $dataArray['changementNomUsageUniteLegale'] = $data->getChangementNomUsageUniteLegale();
        }
        if ($data->isInitialized('denominationUniteLegale') && null !== $data->getDenominationUniteLegale()) {
            $dataArray['denominationUniteLegale'] = $data->getDenominationUniteLegale();
        }
        if ($data->isInitialized('changementDenominationUniteLegale') && null !== $data->getChangementDenominationUniteLegale()) {
            $dataArray['changementDenominationUniteLegale'] = $data->getChangementDenominationUniteLegale();
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
        if ($data->isInitialized('categorieJuridiqueUniteLegale') && null !== $data->getCategorieJuridiqueUniteLegale()) {
            $dataArray['categorieJuridiqueUniteLegale'] = $data->getCategorieJuridiqueUniteLegale();
        }
        if ($data->isInitialized('changementCategorieJuridiqueUniteLegale') && null !== $data->getChangementCategorieJuridiqueUniteLegale()) {
            $dataArray['changementCategorieJuridiqueUniteLegale'] = $data->getChangementCategorieJuridiqueUniteLegale();
        }
        if ($data->isInitialized('activitePrincipaleUniteLegale') && null !== $data->getActivitePrincipaleUniteLegale()) {
            $dataArray['activitePrincipaleUniteLegale'] = $data->getActivitePrincipaleUniteLegale();
        }
        if ($data->isInitialized('nomenclatureActivitePrincipaleUniteLegale') && null !== $data->getNomenclatureActivitePrincipaleUniteLegale()) {
            $dataArray['nomenclatureActivitePrincipaleUniteLegale'] = $data->getNomenclatureActivitePrincipaleUniteLegale();
        }
        if ($data->isInitialized('changementActivitePrincipaleUniteLegale') && null !== $data->getChangementActivitePrincipaleUniteLegale()) {
            $dataArray['changementActivitePrincipaleUniteLegale'] = $data->getChangementActivitePrincipaleUniteLegale();
        }
        if ($data->isInitialized('nicSiegeUniteLegale') && null !== $data->getNicSiegeUniteLegale()) {
            $dataArray['nicSiegeUniteLegale'] = $data->getNicSiegeUniteLegale();
        }
        if ($data->isInitialized('changementNicSiegeUniteLegale') && null !== $data->getChangementNicSiegeUniteLegale()) {
            $dataArray['changementNicSiegeUniteLegale'] = $data->getChangementNicSiegeUniteLegale();
        }
        if ($data->isInitialized('economieSocialeSolidaireUniteLegale') && null !== $data->getEconomieSocialeSolidaireUniteLegale()) {
            $dataArray['economieSocialeSolidaireUniteLegale'] = $data->getEconomieSocialeSolidaireUniteLegale();
        }
        if ($data->isInitialized('changementEconomieSocialeSolidaireUniteLegale') && null !== $data->getChangementEconomieSocialeSolidaireUniteLegale()) {
            $dataArray['changementEconomieSocialeSolidaireUniteLegale'] = $data->getChangementEconomieSocialeSolidaireUniteLegale();
        }
        if ($data->isInitialized('societeMissionUniteLegale') && null !== $data->getSocieteMissionUniteLegale()) {
            $dataArray['societeMissionUniteLegale'] = $data->getSocieteMissionUniteLegale();
        }
        if ($data->isInitialized('changementSocieteMissionUniteLegale') && null !== $data->getChangementSocieteMissionUniteLegale()) {
            $dataArray['changementSocieteMissionUniteLegale'] = $data->getChangementSocieteMissionUniteLegale();
        }
        if ($data->isInitialized('caractereEmployeurUniteLegale') && null !== $data->getCaractereEmployeurUniteLegale()) {
            $dataArray['caractereEmployeurUniteLegale'] = $data->getCaractereEmployeurUniteLegale();
        }
        if ($data->isInitialized('changementCaractereEmployeurUniteLegale') && null !== $data->getChangementCaractereEmployeurUniteLegale()) {
            $dataArray['changementCaractereEmployeurUniteLegale'] = $data->getChangementCaractereEmployeurUniteLegale();
        }
        if ($data->isInitialized('changementDenominationUsuelleUniteLegale') && null !== $data->getChangementDenominationUsuelleUniteLegale()) {
            $dataArray['changementDenominationUsuelleUniteLegale'] = $data->getChangementDenominationUsuelleUniteLegale();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\Sirene\Client\Model\PeriodeUniteLegale::class => false];
    }
}