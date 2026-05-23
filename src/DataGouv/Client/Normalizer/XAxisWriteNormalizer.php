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

class XAxisWriteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\XAxisWrite::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\XAxisWrite::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\XAxisWrite();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('column_x', $data)) {
            $object->setColumnX($data['column_x']);
        }
        if (\array_key_exists('sort_x_by', $data) && $data['sort_x_by'] !== null) {
            $object->setSortXBy($data['sort_x_by']);
        } elseif (\array_key_exists('sort_x_by', $data) && $data['sort_x_by'] === null) {
            $object->setSortXBy(null);
        }
        if (\array_key_exists('sort_x_direction', $data) && $data['sort_x_direction'] !== null) {
            $object->setSortXDirection($data['sort_x_direction']);
        } elseif (\array_key_exists('sort_x_direction', $data) && $data['sort_x_direction'] === null) {
            $object->setSortXDirection(null);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['column_x'] = $data->getColumnX();
        if ($data->isInitialized('sortXBy')) {
            $dataArray['sort_x_by'] = $data->getSortXBy();
        }
        if ($data->isInitialized('sortXDirection')) {
            $dataArray['sort_x_direction'] = $data->getSortXDirection();
        }
        $dataArray['type'] = $data->getType();

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\XAxisWrite::class => false];
    }
}
