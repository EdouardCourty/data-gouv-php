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

class DataSeriesWriteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\DataSeriesWrite::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\DataSeriesWrite::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\DataSeriesWrite();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('aggregate_y', $data) && $data['aggregate_y'] !== null) {
            $object->setAggregateY($data['aggregate_y']);
        } elseif (\array_key_exists('aggregate_y', $data) && $data['aggregate_y'] === null) {
            $object->setAggregateY(null);
        }
        if (\array_key_exists('column_x_name_override', $data) && $data['column_x_name_override'] !== null) {
            $object->setColumnXNameOverride($data['column_x_name_override']);
        } elseif (\array_key_exists('column_x_name_override', $data) && $data['column_x_name_override'] === null) {
            $object->setColumnXNameOverride(null);
        }
        if (\array_key_exists('column_y', $data) && $data['column_y'] !== null) {
            $object->setColumnY($data['column_y']);
        } elseif (\array_key_exists('column_y', $data) && $data['column_y'] === null) {
            $object->setColumnY(null);
        }
        if (\array_key_exists('filters', $data)) {
            $object->setFilters($data['filters']);
        }
        if (\array_key_exists('resource_id', $data)) {
            $object->setResourceId($data['resource_id']);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('aggregateY')) {
            $dataArray['aggregate_y'] = $data->getAggregateY();
        }
        if ($data->isInitialized('columnXNameOverride')) {
            $dataArray['column_x_name_override'] = $data->getColumnXNameOverride();
        }
        if ($data->isInitialized('columnY')) {
            $dataArray['column_y'] = $data->getColumnY();
        }
        if ($data->isInitialized('filters') && null !== $data->getFilters()) {
            $dataArray['filters'] = $data->getFilters();
        }
        $dataArray['resource_id'] = $data->getResourceId();
        if ($data->isInitialized('type')) {
            $dataArray['type'] = $data->getType();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\DataSeriesWrite::class => false];
    }
}
