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
class UniteLegalePostMultiCriteresNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Sirene\Client\Model\UniteLegalePostMultiCriteres::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Sirene\Client\Model\UniteLegalePostMultiCriteres::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Sirene\Client\Model\UniteLegalePostMultiCriteres();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('masquerValeursNulles', $data) && \is_int($data['masquerValeursNulles'])) {
            $data['masquerValeursNulles'] = (bool) $data['masquerValeursNulles'];
        }
        if (\array_key_exists('q', $data)) {
            $object->setQ($data['q']);
        }
        if (\array_key_exists('date', $data)) {
            $object->setDate($data['date']);
        }
        if (\array_key_exists('champs', $data)) {
            $object->setChamps($data['champs']);
        }
        if (\array_key_exists('nombre', $data)) {
            $object->setNombre($data['nombre']);
        }
        if (\array_key_exists('debut', $data)) {
            $object->setDebut($data['debut']);
        }
        if (\array_key_exists('masquerValeursNulles', $data)) {
            $object->setMasquerValeursNulles($data['masquerValeursNulles']);
        }
        if (\array_key_exists('tri', $data)) {
            $object->setTri($data['tri']);
        }
        if (\array_key_exists('curseur', $data)) {
            $object->setCurseur($data['curseur']);
        }
        if (\array_key_exists('facette.champ', $data)) {
            $object->setFacetteChamp($data['facette.champ']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('q') && null !== $data->getQ()) {
            $dataArray['q'] = $data->getQ();
        }
        if ($data->isInitialized('date') && null !== $data->getDate()) {
            $dataArray['date'] = $data->getDate();
        }
        if ($data->isInitialized('champs') && null !== $data->getChamps()) {
            $dataArray['champs'] = $data->getChamps();
        }
        if ($data->isInitialized('nombre') && null !== $data->getNombre()) {
            $dataArray['nombre'] = $data->getNombre();
        }
        if ($data->isInitialized('debut') && null !== $data->getDebut()) {
            $dataArray['debut'] = $data->getDebut();
        }
        if ($data->isInitialized('masquerValeursNulles') && null !== $data->getMasquerValeursNulles()) {
            $dataArray['masquerValeursNulles'] = $data->getMasquerValeursNulles();
        }
        if ($data->isInitialized('tri') && null !== $data->getTri()) {
            $dataArray['tri'] = $data->getTri();
        }
        if ($data->isInitialized('curseur') && null !== $data->getCurseur()) {
            $dataArray['curseur'] = $data->getCurseur();
        }
        if ($data->isInitialized('facetteChamp') && null !== $data->getFacetteChamp()) {
            $dataArray['facette.champ'] = $data->getFacetteChamp();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\Sirene\Client\Model\UniteLegalePostMultiCriteres::class => false];
    }
}