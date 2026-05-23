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
class PeriodeEtablissementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Sirene\Client\Model\PeriodeEtablissement::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Sirene\Client\Model\PeriodeEtablissement::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Sirene\Client\Model\PeriodeEtablissement();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('changementEtatAdministratifEtablissement', $data) && \is_int($data['changementEtatAdministratifEtablissement'])) {
            $data['changementEtatAdministratifEtablissement'] = (bool) $data['changementEtatAdministratifEtablissement'];
        }
        if (\array_key_exists('changementEnseigneEtablissement', $data) && \is_int($data['changementEnseigneEtablissement'])) {
            $data['changementEnseigneEtablissement'] = (bool) $data['changementEnseigneEtablissement'];
        }
        if (\array_key_exists('changementDenominationUsuelleEtablissement', $data) && \is_int($data['changementDenominationUsuelleEtablissement'])) {
            $data['changementDenominationUsuelleEtablissement'] = (bool) $data['changementDenominationUsuelleEtablissement'];
        }
        if (\array_key_exists('changementActivitePrincipaleEtablissement', $data) && \is_int($data['changementActivitePrincipaleEtablissement'])) {
            $data['changementActivitePrincipaleEtablissement'] = (bool) $data['changementActivitePrincipaleEtablissement'];
        }
        if (\array_key_exists('changementCaractereEmployeurEtablissement', $data) && \is_int($data['changementCaractereEmployeurEtablissement'])) {
            $data['changementCaractereEmployeurEtablissement'] = (bool) $data['changementCaractereEmployeurEtablissement'];
        }
        if (\array_key_exists('dateFin', $data)) {
            $object->setDateFin(\DateTime::createFromFormat('Y-m-d', $data['dateFin'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('dateDebut', $data)) {
            $object->setDateDebut(\DateTime::createFromFormat('Y-m-d', $data['dateDebut'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('etatAdministratifEtablissement', $data)) {
            $object->setEtatAdministratifEtablissement($data['etatAdministratifEtablissement']);
        }
        if (\array_key_exists('changementEtatAdministratifEtablissement', $data)) {
            $object->setChangementEtatAdministratifEtablissement($data['changementEtatAdministratifEtablissement']);
        }
        if (\array_key_exists('enseigne1Etablissement', $data)) {
            $object->setEnseigne1Etablissement($data['enseigne1Etablissement']);
        }
        if (\array_key_exists('enseigne2Etablissement', $data)) {
            $object->setEnseigne2Etablissement($data['enseigne2Etablissement']);
        }
        if (\array_key_exists('enseigne3Etablissement', $data)) {
            $object->setEnseigne3Etablissement($data['enseigne3Etablissement']);
        }
        if (\array_key_exists('changementEnseigneEtablissement', $data)) {
            $object->setChangementEnseigneEtablissement($data['changementEnseigneEtablissement']);
        }
        if (\array_key_exists('denominationUsuelleEtablissement', $data)) {
            $object->setDenominationUsuelleEtablissement($data['denominationUsuelleEtablissement']);
        }
        if (\array_key_exists('changementDenominationUsuelleEtablissement', $data)) {
            $object->setChangementDenominationUsuelleEtablissement($data['changementDenominationUsuelleEtablissement']);
        }
        if (\array_key_exists('activitePrincipaleEtablissement', $data)) {
            $object->setActivitePrincipaleEtablissement($data['activitePrincipaleEtablissement']);
        }
        if (\array_key_exists('nomenclatureActivitePrincipaleEtablissement', $data)) {
            $object->setNomenclatureActivitePrincipaleEtablissement($data['nomenclatureActivitePrincipaleEtablissement']);
        }
        if (\array_key_exists('changementActivitePrincipaleEtablissement', $data)) {
            $object->setChangementActivitePrincipaleEtablissement($data['changementActivitePrincipaleEtablissement']);
        }
        if (\array_key_exists('caractereEmployeurEtablissement', $data)) {
            $object->setCaractereEmployeurEtablissement($data['caractereEmployeurEtablissement']);
        }
        if (\array_key_exists('changementCaractereEmployeurEtablissement', $data)) {
            $object->setChangementCaractereEmployeurEtablissement($data['changementCaractereEmployeurEtablissement']);
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
        if ($data->isInitialized('etatAdministratifEtablissement') && null !== $data->getEtatAdministratifEtablissement()) {
            $dataArray['etatAdministratifEtablissement'] = $data->getEtatAdministratifEtablissement();
        }
        if ($data->isInitialized('changementEtatAdministratifEtablissement') && null !== $data->getChangementEtatAdministratifEtablissement()) {
            $dataArray['changementEtatAdministratifEtablissement'] = $data->getChangementEtatAdministratifEtablissement();
        }
        if ($data->isInitialized('enseigne1Etablissement') && null !== $data->getEnseigne1Etablissement()) {
            $dataArray['enseigne1Etablissement'] = $data->getEnseigne1Etablissement();
        }
        if ($data->isInitialized('enseigne2Etablissement') && null !== $data->getEnseigne2Etablissement()) {
            $dataArray['enseigne2Etablissement'] = $data->getEnseigne2Etablissement();
        }
        if ($data->isInitialized('enseigne3Etablissement') && null !== $data->getEnseigne3Etablissement()) {
            $dataArray['enseigne3Etablissement'] = $data->getEnseigne3Etablissement();
        }
        if ($data->isInitialized('changementEnseigneEtablissement') && null !== $data->getChangementEnseigneEtablissement()) {
            $dataArray['changementEnseigneEtablissement'] = $data->getChangementEnseigneEtablissement();
        }
        if ($data->isInitialized('denominationUsuelleEtablissement') && null !== $data->getDenominationUsuelleEtablissement()) {
            $dataArray['denominationUsuelleEtablissement'] = $data->getDenominationUsuelleEtablissement();
        }
        if ($data->isInitialized('changementDenominationUsuelleEtablissement') && null !== $data->getChangementDenominationUsuelleEtablissement()) {
            $dataArray['changementDenominationUsuelleEtablissement'] = $data->getChangementDenominationUsuelleEtablissement();
        }
        if ($data->isInitialized('activitePrincipaleEtablissement') && null !== $data->getActivitePrincipaleEtablissement()) {
            $dataArray['activitePrincipaleEtablissement'] = $data->getActivitePrincipaleEtablissement();
        }
        if ($data->isInitialized('nomenclatureActivitePrincipaleEtablissement') && null !== $data->getNomenclatureActivitePrincipaleEtablissement()) {
            $dataArray['nomenclatureActivitePrincipaleEtablissement'] = $data->getNomenclatureActivitePrincipaleEtablissement();
        }
        if ($data->isInitialized('changementActivitePrincipaleEtablissement') && null !== $data->getChangementActivitePrincipaleEtablissement()) {
            $dataArray['changementActivitePrincipaleEtablissement'] = $data->getChangementActivitePrincipaleEtablissement();
        }
        if ($data->isInitialized('caractereEmployeurEtablissement') && null !== $data->getCaractereEmployeurEtablissement()) {
            $dataArray['caractereEmployeurEtablissement'] = $data->getCaractereEmployeurEtablissement();
        }
        if ($data->isInitialized('changementCaractereEmployeurEtablissement') && null !== $data->getChangementCaractereEmployeurEtablissement()) {
            $dataArray['changementCaractereEmployeurEtablissement'] = $data->getChangementCaractereEmployeurEtablissement();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\Sirene\Client\Model\PeriodeEtablissement::class => false];
    }
}