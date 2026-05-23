<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Normalizer;

use Ecourty\DataGouv\DataGouv\Client\Runtime\Normalizer\CheckArray;
use Ecourty\DataGouv\DataGouv\Client\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class YAxisWriteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\YAxisWrite::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\YAxisWrite::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\YAxisWrite();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('max', $data) && \is_int($data['max'])) {
            $data['max'] = (float) $data['max'];
        }
        if (\array_key_exists('min', $data) && \is_int($data['min'])) {
            $data['min'] = (float) $data['min'];
        }
        if (\array_key_exists('label', $data) && $data['label'] !== null) {
            $object->setLabel($data['label']);
        } elseif (\array_key_exists('label', $data) && $data['label'] === null) {
            $object->setLabel(null);
        }
        if (\array_key_exists('max', $data) && $data['max'] !== null) {
            $object->setMax($data['max']);
        } elseif (\array_key_exists('max', $data) && $data['max'] === null) {
            $object->setMax(null);
        }
        if (\array_key_exists('min', $data) && $data['min'] !== null) {
            $object->setMin($data['min']);
        } elseif (\array_key_exists('min', $data) && $data['min'] === null) {
            $object->setMin(null);
        }
        if (\array_key_exists('unit', $data) && $data['unit'] !== null) {
            $object->setUnit($data['unit']);
        } elseif (\array_key_exists('unit', $data) && $data['unit'] === null) {
            $object->setUnit(null);
        }
        if (\array_key_exists('unit_position', $data) && $data['unit_position'] !== null) {
            $object->setUnitPosition($data['unit_position']);
        } elseif (\array_key_exists('unit_position', $data) && $data['unit_position'] === null) {
            $object->setUnitPosition(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('label')) {
            $dataArray['label'] = $data->getLabel();
        }
        if ($data->isInitialized('max')) {
            $dataArray['max'] = $data->getMax();
        }
        if ($data->isInitialized('min')) {
            $dataArray['min'] = $data->getMin();
        }
        if ($data->isInitialized('unit')) {
            $dataArray['unit'] = $data->getUnit();
        }
        if ($data->isInitialized('unitPosition')) {
            $dataArray['unit_position'] = $data->getUnitPosition();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\YAxisWrite::class => false];
    }
}
