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
class FacetteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Sirene\Client\Model\Facette::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Sirene\Client\Model\Facette::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Sirene\Client\Model\Facette();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('nom', $data)) {
            $object->setNom($data['nom']);
        }
        if (\array_key_exists('manquants', $data)) {
            $object->setManquants($data['manquants']);
        }
        if (\array_key_exists('total', $data)) {
            $object->setTotal($data['total']);
        }
        if (\array_key_exists('modalites', $data)) {
            $object->setModalites($data['modalites']);
        }
        if (\array_key_exists('avant', $data)) {
            $object->setAvant($data['avant']);
        }
        if (\array_key_exists('apres', $data)) {
            $object->setApres($data['apres']);
        }
        if (\array_key_exists('entre', $data)) {
            $object->setEntre($data['entre']);
        }
        if (\array_key_exists('comptages', $data)) {
            $values = [];
            foreach ($data['comptages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Ecourty\DataGouv\DataServices\Sirene\Client\Model\Comptage::class, 'json', $context);
            }
            $object->setComptages($values);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('nom') && null !== $data->getNom()) {
            $dataArray['nom'] = $data->getNom();
        }
        if ($data->isInitialized('manquants') && null !== $data->getManquants()) {
            $dataArray['manquants'] = $data->getManquants();
        }
        if ($data->isInitialized('total') && null !== $data->getTotal()) {
            $dataArray['total'] = $data->getTotal();
        }
        if ($data->isInitialized('modalites') && null !== $data->getModalites()) {
            $dataArray['modalites'] = $data->getModalites();
        }
        if ($data->isInitialized('avant') && null !== $data->getAvant()) {
            $dataArray['avant'] = $data->getAvant();
        }
        if ($data->isInitialized('apres') && null !== $data->getApres()) {
            $dataArray['apres'] = $data->getApres();
        }
        if ($data->isInitialized('entre') && null !== $data->getEntre()) {
            $dataArray['entre'] = $data->getEntre();
        }
        if ($data->isInitialized('comptages') && null !== $data->getComptages()) {
            $values = [];
            foreach ($data->getComptages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['comptages'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\Sirene\Client\Model\Facette::class => false];
    }
}