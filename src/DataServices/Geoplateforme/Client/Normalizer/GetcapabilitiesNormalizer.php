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
class GetcapabilitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Getcapabilities::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Getcapabilities::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Getcapabilities();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('info', $data)) {
            $object->setInfo($this->denormalizer->denormalize($data['info'], \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GetcapabilitiesInfo::class, 'json', $context));
        }
        if (\array_key_exists('api', $data)) {
            $object->setApi($this->denormalizer->denormalize($data['api'], \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GetcapabilitiesApi::class, 'json', $context));
        }
        if (\array_key_exists('operations', $data)) {
            $values = [];
            foreach ($data['operations'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GetcapabilitiesOperationsItem::class, 'json', $context);
            }
            $object->setOperations($values);
        }
        if (\array_key_exists('indexes', $data)) {
            $values_1 = [];
            foreach ($data['indexes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GetcapabilitiesIndexesItem::class, 'json', $context);
            }
            $object->setIndexes($values_1);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('info') && null !== $data->getInfo()) {
            $dataArray['info'] = $this->normalizer->normalize($data->getInfo(), 'json', $context);
        }
        if ($data->isInitialized('api') && null !== $data->getApi()) {
            $dataArray['api'] = $this->normalizer->normalize($data->getApi(), 'json', $context);
        }
        if ($data->isInitialized('operations') && null !== $data->getOperations()) {
            $values = [];
            foreach ($data->getOperations() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['operations'] = $values;
        }
        if ($data->isInitialized('indexes') && null !== $data->getIndexes()) {
            $values_1 = [];
            foreach ($data->getIndexes() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['indexes'] = $values_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Getcapabilities::class => false];
    }
}