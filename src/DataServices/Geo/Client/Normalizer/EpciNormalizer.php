<?php

namespace Ecourty\DataGouv\DataServices\Geo\Client\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Ecourty\DataGouv\DataServices\Geo\Client\Runtime\Normalizer\CheckArray;
use Ecourty\DataGouv\DataServices\Geo\Client\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class EpciNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Geo\Client\Model\Epci::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Geo\Client\Model\Epci::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Geo\Client\Model\Epci();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('surface', $data) && \is_int($data['surface'])) {
            $data['surface'] = (double) $data['surface'];
        }
        if (\array_key_exists('code', $data)) {
            $object->setCode($data['code']);
        }
        if (\array_key_exists('nom', $data)) {
            $object->setNom($data['nom']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('financement', $data)) {
            $object->setFinancement($data['financement']);
        }
        if (\array_key_exists('codesDepartements', $data)) {
            $values = [];
            foreach ($data['codesDepartements'] as $value) {
                $values[] = $value;
            }
            $object->setCodesDepartements($values);
        }
        if (\array_key_exists('codesRegions', $data)) {
            $values_1 = [];
            foreach ($data['codesRegions'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setCodesRegions($values_1);
        }
        if (\array_key_exists('population', $data)) {
            $object->setPopulation($data['population']);
        }
        if (\array_key_exists('surface', $data)) {
            $object->setSurface($data['surface']);
        }
        if (\array_key_exists('centre', $data)) {
            $object->setCentre($data['centre']);
        }
        if (\array_key_exists('contour', $data)) {
            $object->setContour($data['contour']);
        }
        if (\array_key_exists('bbox', $data)) {
            $object->setBbox($data['bbox']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('code') && null !== $data->getCode()) {
            $dataArray['code'] = $data->getCode();
        }
        if ($data->isInitialized('nom') && null !== $data->getNom()) {
            $dataArray['nom'] = $data->getNom();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('financement') && null !== $data->getFinancement()) {
            $dataArray['financement'] = $data->getFinancement();
        }
        if ($data->isInitialized('codesDepartements') && null !== $data->getCodesDepartements()) {
            $values = [];
            foreach ($data->getCodesDepartements() as $value) {
                $values[] = $value;
            }
            $dataArray['codesDepartements'] = $values;
        }
        if ($data->isInitialized('codesRegions') && null !== $data->getCodesRegions()) {
            $values_1 = [];
            foreach ($data->getCodesRegions() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['codesRegions'] = $values_1;
        }
        if ($data->isInitialized('population') && null !== $data->getPopulation()) {
            $dataArray['population'] = $data->getPopulation();
        }
        if ($data->isInitialized('surface') && null !== $data->getSurface()) {
            $dataArray['surface'] = $data->getSurface();
        }
        if ($data->isInitialized('centre') && null !== $data->getCentre()) {
            $dataArray['centre'] = $data->getCentre();
        }
        if ($data->isInitialized('contour') && null !== $data->getContour()) {
            $dataArray['contour'] = $data->getContour();
        }
        if ($data->isInitialized('bbox') && null !== $data->getBbox()) {
            $dataArray['bbox'] = $data->getBbox();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\Geo\Client\Model\Epci::class => false];
    }
}