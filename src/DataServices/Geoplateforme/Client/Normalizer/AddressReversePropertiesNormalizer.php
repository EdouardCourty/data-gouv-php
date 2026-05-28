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
class AddressReversePropertiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\AddressReverseProperties::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\AddressReverseProperties::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\AddressReverseProperties();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('x', $data) && \is_int($data['x'])) {
            $data['x'] = (double) $data['x'];
        }
        if (\array_key_exists('y', $data) && \is_int($data['y'])) {
            $data['y'] = (double) $data['y'];
        }
        if (\array_key_exists('score', $data) && \is_int($data['score'])) {
            $data['score'] = (double) $data['score'];
        }
        if (\array_key_exists('_score', $data) && \is_int($data['_score'])) {
            $data['_score'] = (double) $data['_score'];
        }
        if (\array_key_exists('importance', $data) && \is_int($data['importance'])) {
            $data['importance'] = (double) $data['importance'];
        }
        if (\array_key_exists('distance', $data) && \is_int($data['distance'])) {
            $data['distance'] = (double) $data['distance'];
        }
        if (\array_key_exists('label', $data)) {
            $object->setLabel($data['label']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('postcode', $data)) {
            $object->setPostcode($data['postcode']);
        }
        if (\array_key_exists('city', $data)) {
            $object->setCity($data['city']);
        }
        if (\array_key_exists('district', $data)) {
            $object->setDistrict($data['district']);
        }
        if (\array_key_exists('street', $data)) {
            $object->setStreet($data['street']);
        }
        if (\array_key_exists('housenumber', $data)) {
            $object->setHousenumber($data['housenumber']);
        }
        if (\array_key_exists('citycode', $data)) {
            $object->setCitycode($data['citycode']);
        }
        if (\array_key_exists('x', $data)) {
            $object->setX($data['x']);
        }
        if (\array_key_exists('y', $data)) {
            $object->setY($data['y']);
        }
        if (\array_key_exists('score', $data)) {
            $object->setScore($data['score']);
        }
        if (\array_key_exists('_score', $data)) {
            $object->setScore2($data['_score']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('_type', $data)) {
            $object->setType2($data['_type']);
        }
        if (\array_key_exists('context', $data)) {
            $object->setContext($data['context']);
        }
        if (\array_key_exists('importance', $data)) {
            $object->setImportance($data['importance']);
        }
        if (\array_key_exists('distance', $data)) {
            $object->setDistance($data['distance']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('label') && null !== $data->getLabel()) {
            $dataArray['label'] = $data->getLabel();
        }
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('postcode') && null !== $data->getPostcode()) {
            $dataArray['postcode'] = $data->getPostcode();
        }
        if ($data->isInitialized('city') && null !== $data->getCity()) {
            $dataArray['city'] = $data->getCity();
        }
        if ($data->isInitialized('district') && null !== $data->getDistrict()) {
            $dataArray['district'] = $data->getDistrict();
        }
        if ($data->isInitialized('street') && null !== $data->getStreet()) {
            $dataArray['street'] = $data->getStreet();
        }
        if ($data->isInitialized('housenumber') && null !== $data->getHousenumber()) {
            $dataArray['housenumber'] = $data->getHousenumber();
        }
        if ($data->isInitialized('citycode') && null !== $data->getCitycode()) {
            $dataArray['citycode'] = $data->getCitycode();
        }
        if ($data->isInitialized('x') && null !== $data->getX()) {
            $dataArray['x'] = $data->getX();
        }
        if ($data->isInitialized('y') && null !== $data->getY()) {
            $dataArray['y'] = $data->getY();
        }
        if ($data->isInitialized('score') && null !== $data->getScore()) {
            $dataArray['score'] = $data->getScore();
        }
        if ($data->isInitialized('score2') && null !== $data->getScore2()) {
            $dataArray['_score'] = $data->getScore2();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('type2') && null !== $data->getType2()) {
            $dataArray['_type'] = $data->getType2();
        }
        if ($data->isInitialized('context') && null !== $data->getContext()) {
            $dataArray['context'] = $data->getContext();
        }
        if ($data->isInitialized('importance') && null !== $data->getImportance()) {
            $dataArray['importance'] = $data->getImportance();
        }
        if ($data->isInitialized('distance') && null !== $data->getDistance()) {
            $dataArray['distance'] = $data->getDistance();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\AddressReverseProperties::class => false];
    }
}