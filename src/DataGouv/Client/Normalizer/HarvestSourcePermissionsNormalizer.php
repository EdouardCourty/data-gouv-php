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
class HarvestSourcePermissionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSourcePermissions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSourcePermissions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSourcePermissions();
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
        if (\array_key_exists('preview', $data) && \is_int($data['preview'])) {
            $data['preview'] = (bool) $data['preview'];
        }
        if (\array_key_exists('run', $data) && \is_int($data['run'])) {
            $data['run'] = (bool) $data['run'];
        }
        if (\array_key_exists('schedule', $data) && \is_int($data['schedule'])) {
            $data['schedule'] = (bool) $data['schedule'];
        }
        if (\array_key_exists('validate', $data) && \is_int($data['validate'])) {
            $data['validate'] = (bool) $data['validate'];
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
        if (\array_key_exists('preview', $data) && $data['preview'] !== null) {
            $object->setPreview($data['preview']);
        }
        elseif (\array_key_exists('preview', $data) && $data['preview'] === null) {
            $object->setPreview(null);
        }
        if (\array_key_exists('run', $data) && $data['run'] !== null) {
            $object->setRun($data['run']);
        }
        elseif (\array_key_exists('run', $data) && $data['run'] === null) {
            $object->setRun(null);
        }
        if (\array_key_exists('schedule', $data) && $data['schedule'] !== null) {
            $object->setSchedule($data['schedule']);
        }
        elseif (\array_key_exists('schedule', $data) && $data['schedule'] === null) {
            $object->setSchedule(null);
        }
        if (\array_key_exists('validate', $data) && $data['validate'] !== null) {
            $object->setValidate($data['validate']);
        }
        elseif (\array_key_exists('validate', $data) && $data['validate'] === null) {
            $object->setValidate(null);
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
        if ($data->isInitialized('preview')) {
            $dataArray['preview'] = $data->getPreview();
        }
        if ($data->isInitialized('run')) {
            $dataArray['run'] = $data->getRun();
        }
        if ($data->isInitialized('schedule')) {
            $dataArray['schedule'] = $data->getSchedule();
        }
        if ($data->isInitialized('validate')) {
            $dataArray['validate'] = $data->getValidate();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\HarvestSourcePermissions::class => false];
    }
}