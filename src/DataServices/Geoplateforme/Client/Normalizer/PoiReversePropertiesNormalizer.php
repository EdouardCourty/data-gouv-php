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
class PoiReversePropertiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\PoiReverseProperties::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\PoiReverseProperties::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\PoiReverseProperties();
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
        if (\array_key_exists('distance', $data) && \is_int($data['distance'])) {
            $data['distance'] = (double) $data['distance'];
        }
        if (\array_key_exists('toponym', $data)) {
            $object->setToponym($data['toponym']);
        }
        if (\array_key_exists('postcode', $data)) {
            $values = [];
            foreach ($data['postcode'] as $value) {
                $values[] = $value;
            }
            $object->setPostcode($values);
        }
        if (\array_key_exists('citycode', $data)) {
            $values_1 = [];
            foreach ($data['citycode'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setCitycode($values_1);
        }
        if (\array_key_exists('city', $data)) {
            $values_2 = [];
            foreach ($data['city'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setCity($values_2);
        }
        if (\array_key_exists('category', $data)) {
            $values_3 = [];
            foreach ($data['category'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setCategory($values_3);
        }
        if (\array_key_exists('extrafields', $data)) {
            $object->setExtrafields($data['extrafields']);
        }
        if (\array_key_exists('truegeometry', $data)) {
            $object->setTruegeometry($this->denormalizer->denormalize($data['truegeometry'], \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Geometry::class, 'json', $context));
        }
        if (\array_key_exists('_score', $data)) {
            $object->setScore($data['_score']);
        }
        if (\array_key_exists('_type', $data)) {
            $object->setType($data['_type']);
        }
        if (\array_key_exists('distance', $data)) {
            $object->setDistance($data['distance']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('toponym') && null !== $data->getToponym()) {
            $dataArray['toponym'] = $data->getToponym();
        }
        if ($data->isInitialized('postcode') && null !== $data->getPostcode()) {
            $values = [];
            foreach ($data->getPostcode() as $value) {
                $values[] = $value;
            }
            $dataArray['postcode'] = $values;
        }
        if ($data->isInitialized('citycode') && null !== $data->getCitycode()) {
            $values_1 = [];
            foreach ($data->getCitycode() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['citycode'] = $values_1;
        }
        if ($data->isInitialized('city') && null !== $data->getCity()) {
            $values_2 = [];
            foreach ($data->getCity() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['city'] = $values_2;
        }
        if ($data->isInitialized('category') && null !== $data->getCategory()) {
            $values_3 = [];
            foreach ($data->getCategory() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['category'] = $values_3;
        }
        if ($data->isInitialized('extrafields') && null !== $data->getExtrafields()) {
            $dataArray['extrafields'] = $data->getExtrafields();
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
        if ($data->isInitialized('distance') && null !== $data->getDistance()) {
            $dataArray['distance'] = $data->getDistance();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\PoiReverseProperties::class => false];
    }
}