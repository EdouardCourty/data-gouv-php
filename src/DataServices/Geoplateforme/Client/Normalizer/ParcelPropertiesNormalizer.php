<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Normalizer\CheckArray;
use Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ParcelPropertiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\ParcelProperties::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\ParcelProperties::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\ParcelProperties();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('_score', $data) && \is_int($data['_score'])) {
            $data['_score'] = (double) $data['_score'];
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('departmentcode', $data)) {
            $object->setDepartmentcode($data['departmentcode']);
        }
        if (\array_key_exists('municipalitycode', $data)) {
            $object->setMunicipalitycode($data['municipalitycode']);
        }
        if (\array_key_exists('city', $data)) {
            $object->setCity($data['city']);
        }
        if (\array_key_exists('oldmunicipalitycode', $data)) {
            $object->setOldmunicipalitycode($data['oldmunicipalitycode']);
        }
        if (\array_key_exists('districtcode', $data)) {
            $object->setDistrictcode($data['districtcode']);
        }
        if (\array_key_exists('section', $data)) {
            $object->setSection($data['section']);
        }
        if (\array_key_exists('number', $data)) {
            $object->setNumber($data['number']);
        }
        if (\array_key_exists('sheet', $data)) {
            $object->setSheet($data['sheet']);
        }
        if (\array_key_exists('truegeometry', $data)) {
            $object->setTruegeometry($this->denormalizer->denormalize($data['truegeometry'], \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GeometryPolygon::class, 'json', $context));
        }
        if (\array_key_exists('_score', $data)) {
            $object->setScore($data['_score']);
        }
        if (\array_key_exists('_type', $data)) {
            $object->setType($data['_type']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('departmentcode') && null !== $data->getDepartmentcode()) {
            $dataArray['departmentcode'] = $data->getDepartmentcode();
        }
        if ($data->isInitialized('municipalitycode') && null !== $data->getMunicipalitycode()) {
            $dataArray['municipalitycode'] = $data->getMunicipalitycode();
        }
        if ($data->isInitialized('city') && null !== $data->getCity()) {
            $dataArray['city'] = $data->getCity();
        }
        if ($data->isInitialized('oldmunicipalitycode') && null !== $data->getOldmunicipalitycode()) {
            $dataArray['oldmunicipalitycode'] = $data->getOldmunicipalitycode();
        }
        if ($data->isInitialized('districtcode') && null !== $data->getDistrictcode()) {
            $dataArray['districtcode'] = $data->getDistrictcode();
        }
        if ($data->isInitialized('section') && null !== $data->getSection()) {
            $dataArray['section'] = $data->getSection();
        }
        if ($data->isInitialized('number') && null !== $data->getNumber()) {
            $dataArray['number'] = $data->getNumber();
        }
        if ($data->isInitialized('sheet') && null !== $data->getSheet()) {
            $dataArray['sheet'] = $data->getSheet();
        }
        if ($data->isInitialized('truegeometry') && null !== $data->getTruegeometry()) {
            $dataArray['truegeometry'] = $this->normalizer->normalize($data->getTruegeometry(), 'json', $context);
        }
        if ($data->isInitialized('score') && null !== $data->getScore()) {
            $dataArray['_score'] = $data->getScore();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['_type'] = $data->getType();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\ParcelProperties::class => false];
    }
}