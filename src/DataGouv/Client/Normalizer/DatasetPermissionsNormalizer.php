<?php

namespace Ecourty\DataGouv\DataGouv\Client\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Ecourty\DataGouv\DataGouv\Client\Runtime\Normalizer\CheckArray;
use Ecourty\DataGouv\DataGouv\Client\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DatasetPermissionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPermissions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPermissions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPermissions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('delete', $data) && \is_int($data['delete'])) {
            $data['delete'] = (bool) $data['delete'];
        }
        if (\array_key_exists('edit', $data) && \is_int($data['edit'])) {
            $data['edit'] = (bool) $data['edit'];
        }
        if (\array_key_exists('edit_resources', $data) && \is_int($data['edit_resources'])) {
            $data['edit_resources'] = (bool) $data['edit_resources'];
        }
        if (\array_key_exists('delete', $data) && $data['delete'] !== null) {
            $object->setDelete($data['delete']);
        }
        elseif (\array_key_exists('delete', $data) && $data['delete'] === null) {
            $object->setDelete(null);
        }
        if (\array_key_exists('edit', $data) && $data['edit'] !== null) {
            $object->setEdit($data['edit']);
        }
        elseif (\array_key_exists('edit', $data) && $data['edit'] === null) {
            $object->setEdit(null);
        }
        if (\array_key_exists('edit_resources', $data) && $data['edit_resources'] !== null) {
            $object->setEditResources($data['edit_resources']);
        }
        elseif (\array_key_exists('edit_resources', $data) && $data['edit_resources'] === null) {
            $object->setEditResources(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('delete')) {
            $dataArray['delete'] = $data->getDelete();
        }
        if ($data->isInitialized('edit')) {
            $dataArray['edit'] = $data->getEdit();
        }
        if ($data->isInitialized('editResources')) {
            $dataArray['edit_resources'] = $data->getEditResources();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\DatasetPermissions::class => false];
    }
}