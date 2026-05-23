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
class SearchCsvPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\SearchCsvPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\SearchCsvPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\SearchCsvPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('data', $data)) {
            $object->setData($data['data']);
        }
        if (\array_key_exists('columns', $data)) {
            $values = [];
            foreach ($data['columns'] as $value) {
                $values[] = $value;
            }
            $object->setColumns($values);
        }
        if (\array_key_exists('indexes', $data)) {
            $values_1 = [];
            foreach ($data['indexes'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setIndexes($values_1);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('citycode', $data)) {
            $object->setCitycode($data['citycode']);
        }
        if (\array_key_exists('postcode', $data)) {
            $object->setPostcode($data['postcode']);
        }
        if (\array_key_exists('category', $data)) {
            $object->setCategory($data['category']);
        }
        if (\array_key_exists('lon', $data)) {
            $object->setLon($data['lon']);
        }
        if (\array_key_exists('lat', $data)) {
            $object->setLat($data['lat']);
        }
        if (\array_key_exists('departmentcode', $data)) {
            $object->setDepartmentcode($data['departmentcode']);
        }
        if (\array_key_exists('municipalitycode', $data)) {
            $object->setMunicipalitycode($data['municipalitycode']);
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
        if (\array_key_exists('sheet', $data)) {
            $object->setSheet($data['sheet']);
        }
        if (\array_key_exists('number', $data)) {
            $object->setNumber($data['number']);
        }
        if (\array_key_exists('result_columns', $data)) {
            $values_2 = [];
            foreach ($data['result_columns'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setResultColumns($values_2);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['data'] = $data->getData();
        if ($data->isInitialized('columns') && null !== $data->getColumns()) {
            $values = [];
            foreach ($data->getColumns() as $value) {
                $values[] = $value;
            }
            $dataArray['columns'] = $values;
        }
        if ($data->isInitialized('indexes') && null !== $data->getIndexes()) {
            $values_1 = [];
            foreach ($data->getIndexes() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['indexes'] = $values_1;
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('citycode') && null !== $data->getCitycode()) {
            $dataArray['citycode'] = $data->getCitycode();
        }
        if ($data->isInitialized('postcode') && null !== $data->getPostcode()) {
            $dataArray['postcode'] = $data->getPostcode();
        }
        if ($data->isInitialized('category') && null !== $data->getCategory()) {
            $dataArray['category'] = $data->getCategory();
        }
        if ($data->isInitialized('lon') && null !== $data->getLon()) {
            $dataArray['lon'] = $data->getLon();
        }
        if ($data->isInitialized('lat') && null !== $data->getLat()) {
            $dataArray['lat'] = $data->getLat();
        }
        if ($data->isInitialized('departmentcode') && null !== $data->getDepartmentcode()) {
            $dataArray['departmentcode'] = $data->getDepartmentcode();
        }
        if ($data->isInitialized('municipalitycode') && null !== $data->getMunicipalitycode()) {
            $dataArray['municipalitycode'] = $data->getMunicipalitycode();
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
        if ($data->isInitialized('sheet') && null !== $data->getSheet()) {
            $dataArray['sheet'] = $data->getSheet();
        }
        if ($data->isInitialized('number') && null !== $data->getNumber()) {
            $dataArray['number'] = $data->getNumber();
        }
        if ($data->isInitialized('resultColumns') && null !== $data->getResultColumns()) {
            $values_2 = [];
            foreach ($data->getResultColumns() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['result_columns'] = $values_2;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\SearchCsvPostBody::class => false];
    }
}