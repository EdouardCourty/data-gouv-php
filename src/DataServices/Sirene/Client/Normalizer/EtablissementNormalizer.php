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
class EtablissementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Sirene\Client\Model\Etablissement::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Sirene\Client\Model\Etablissement::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Sirene\Client\Model\Etablissement();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('score', $data) && \is_int($data['score'])) {
            $data['score'] = (double) $data['score'];
        }
        if (\array_key_exists('etablissementSiege', $data) && \is_int($data['etablissementSiege'])) {
            $data['etablissementSiege'] = (bool) $data['etablissementSiege'];
        }
        if (\array_key_exists('score', $data)) {
            $object->setScore($data['score']);
        }
        if (\array_key_exists('siren', $data)) {
            $object->setSiren($data['siren']);
        }
        if (\array_key_exists('nic', $data)) {
            $object->setNic($data['nic']);
        }
        if (\array_key_exists('siret', $data)) {
            $object->setSiret($data['siret']);
        }
        if (\array_key_exists('statutDiffusionEtablissement', $data)) {
            $object->setStatutDiffusionEtablissement($data['statutDiffusionEtablissement']);
        }
        if (\array_key_exists('dateCreationEtablissement', $data)) {
            $object->setDateCreationEtablissement((new \DateTime($data['dateCreationEtablissement']))->setTime(0, 0, 0));
        }
        if (\array_key_exists('trancheEffectifsEtablissement', $data)) {
            $object->setTrancheEffectifsEtablissement($data['trancheEffectifsEtablissement']);
        }
        if (\array_key_exists('anneeEffectifsEtablissement', $data)) {
            $object->setAnneeEffectifsEtablissement($data['anneeEffectifsEtablissement']);
        }
        if (\array_key_exists('activitePrincipaleRegistreMetiersEtablissement', $data)) {
            $object->setActivitePrincipaleRegistreMetiersEtablissement($data['activitePrincipaleRegistreMetiersEtablissement']);
        }
        if (\array_key_exists('dateDernierTraitementEtablissement', $data)) {
            $object->setDateDernierTraitementEtablissement((new \DateTime($data['dateDernierTraitementEtablissement'])));
        }
        if (\array_key_exists('etablissementSiege', $data)) {
            $object->setEtablissementSiege($data['etablissementSiege']);
        }
        if (\array_key_exists('nombrePeriodesEtablissement', $data)) {
            $object->setNombrePeriodesEtablissement($data['nombrePeriodesEtablissement']);
        }
        if (\array_key_exists('activitePrincipaleNAF25Etablissement', $data)) {
            $object->setActivitePrincipaleNAF25Etablissement($data['activitePrincipaleNAF25Etablissement']);
        }
        if (\array_key_exists('uniteLegale', $data)) {
            $object->setUniteLegale($this->denormalizer->denormalize($data['uniteLegale'], \Ecourty\DataGouv\DataServices\Sirene\Client\Model\UniteLegaleEtablissement::class, 'json', $context));
        }
        if (\array_key_exists('adresseEtablissement', $data)) {
            $object->setAdresseEtablissement($this->denormalizer->denormalize($data['adresseEtablissement'], \Ecourty\DataGouv\DataServices\Sirene\Client\Model\Adresse::class, 'json', $context));
        }
        if (\array_key_exists('adresse2Etablissement', $data)) {
            $object->setAdresse2Etablissement($this->denormalizer->denormalize($data['adresse2Etablissement'], \Ecourty\DataGouv\DataServices\Sirene\Client\Model\AdresseComplementaire::class, 'json', $context));
        }
        if (\array_key_exists('periodesEtablissement', $data)) {
            $values = [];
            foreach ($data['periodesEtablissement'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Ecourty\DataGouv\DataServices\Sirene\Client\Model\PeriodeEtablissement::class, 'json', $context);
            }
            $object->setPeriodesEtablissement($values);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('score') && null !== $data->getScore()) {
            $dataArray['score'] = $data->getScore();
        }
        if ($data->isInitialized('siren') && null !== $data->getSiren()) {
            $dataArray['siren'] = $data->getSiren();
        }
        if ($data->isInitialized('nic') && null !== $data->getNic()) {
            $dataArray['nic'] = $data->getNic();
        }
        if ($data->isInitialized('siret') && null !== $data->getSiret()) {
            $dataArray['siret'] = $data->getSiret();
        }
        if ($data->isInitialized('statutDiffusionEtablissement') && null !== $data->getStatutDiffusionEtablissement()) {
            $dataArray['statutDiffusionEtablissement'] = $data->getStatutDiffusionEtablissement();
        }
        if ($data->isInitialized('dateCreationEtablissement') && null !== $data->getDateCreationEtablissement()) {
            $dataArray['dateCreationEtablissement'] = $data->getDateCreationEtablissement()?->format('Y-m-d');
        }
        if ($data->isInitialized('trancheEffectifsEtablissement') && null !== $data->getTrancheEffectifsEtablissement()) {
            $dataArray['trancheEffectifsEtablissement'] = $data->getTrancheEffectifsEtablissement();
        }
        if ($data->isInitialized('anneeEffectifsEtablissement') && null !== $data->getAnneeEffectifsEtablissement()) {
            $dataArray['anneeEffectifsEtablissement'] = $data->getAnneeEffectifsEtablissement();
        }
        if ($data->isInitialized('activitePrincipaleRegistreMetiersEtablissement') && null !== $data->getActivitePrincipaleRegistreMetiersEtablissement()) {
            $dataArray['activitePrincipaleRegistreMetiersEtablissement'] = $data->getActivitePrincipaleRegistreMetiersEtablissement();
        }
        if ($data->isInitialized('dateDernierTraitementEtablissement') && null !== $data->getDateDernierTraitementEtablissement()) {
            $dataArray['dateDernierTraitementEtablissement'] = $data->getDateDernierTraitementEtablissement()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('etablissementSiege') && null !== $data->getEtablissementSiege()) {
            $dataArray['etablissementSiege'] = $data->getEtablissementSiege();
        }
        if ($data->isInitialized('nombrePeriodesEtablissement') && null !== $data->getNombrePeriodesEtablissement()) {
            $dataArray['nombrePeriodesEtablissement'] = $data->getNombrePeriodesEtablissement();
        }
        if ($data->isInitialized('activitePrincipaleNAF25Etablissement') && null !== $data->getActivitePrincipaleNAF25Etablissement()) {
            $dataArray['activitePrincipaleNAF25Etablissement'] = $data->getActivitePrincipaleNAF25Etablissement();
        }
        if ($data->isInitialized('uniteLegale') && null !== $data->getUniteLegale()) {
            $dataArray['uniteLegale'] = $this->normalizer->normalize($data->getUniteLegale(), 'json', $context);
        }
        if ($data->isInitialized('adresseEtablissement') && null !== $data->getAdresseEtablissement()) {
            $dataArray['adresseEtablissement'] = $this->normalizer->normalize($data->getAdresseEtablissement(), 'json', $context);
        }
        if ($data->isInitialized('adresse2Etablissement') && null !== $data->getAdresse2Etablissement()) {
            $dataArray['adresse2Etablissement'] = $this->normalizer->normalize($data->getAdresse2Etablissement(), 'json', $context);
        }
        if ($data->isInitialized('periodesEtablissement') && null !== $data->getPeriodesEtablissement()) {
            $values = [];
            foreach ($data->getPeriodesEtablissement() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['periodesEtablissement'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\Sirene\Client\Model\Etablissement::class => false];
    }
}