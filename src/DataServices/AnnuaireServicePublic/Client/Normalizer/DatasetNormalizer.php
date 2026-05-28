<?php

namespace Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Runtime\Normalizer\CheckArray;
use Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DatasetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Model\Dataset::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Model\Dataset::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Model\Dataset();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('has_records', $data) && \is_int($data['has_records'])) {
            $data['has_records'] = (bool) $data['has_records'];
        }
        if (\array_key_exists('data_visible', $data) && \is_int($data['data_visible'])) {
            $data['data_visible'] = (bool) $data['data_visible'];
        }
        if (\array_key_exists('_links', $data)) {
            $values = [];
            foreach ($data['_links'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Model\Links::class, 'json', $context);
            }
            $object->setLinks($values);
            unset($data['_links']);
        }
        if (\array_key_exists('dataset_id', $data)) {
            $object->setDatasetId($data['dataset_id']);
            unset($data['dataset_id']);
        }
        if (\array_key_exists('dataset_uid', $data)) {
            $object->setDatasetUid($data['dataset_uid']);
            unset($data['dataset_uid']);
        }
        if (\array_key_exists('attachments', $data)) {
            $values_1 = [];
            foreach ($data['attachments'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Model\DatasetAttachmentsItem::class, 'json', $context);
            }
            $object->setAttachments($values_1);
            unset($data['attachments']);
        }
        if (\array_key_exists('has_records', $data)) {
            $object->setHasRecords($data['has_records']);
            unset($data['has_records']);
        }
        if (\array_key_exists('data_visible', $data)) {
            $object->setDataVisible($data['data_visible']);
            unset($data['data_visible']);
        }
        if (\array_key_exists('features', $data)) {
            $values_2 = [];
            foreach ($data['features'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setFeatures($values_2);
            unset($data['features']);
        }
        if (\array_key_exists('metas', $data)) {
            $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metas'] as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $object->setMetas($values_3);
            unset($data['metas']);
        }
        if (\array_key_exists('fields', $data)) {
            $values_4 = [];
            foreach ($data['fields'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Model\DatasetFieldsItem::class, 'json', $context);
            }
            $object->setFields($values_4);
            unset($data['fields']);
        }
        foreach ($data as $key_1 => $value_5) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_5;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('links') && null !== $data->getLinks()) {
            $values = [];
            foreach ($data->getLinks() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['_links'] = $values;
        }
        if ($data->isInitialized('datasetId') && null !== $data->getDatasetId()) {
            $dataArray['dataset_id'] = $data->getDatasetId();
        }
        if ($data->isInitialized('attachments') && null !== $data->getAttachments()) {
            $values_1 = [];
            foreach ($data->getAttachments() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['attachments'] = $values_1;
        }
        if ($data->isInitialized('hasRecords') && null !== $data->getHasRecords()) {
            $dataArray['has_records'] = $data->getHasRecords();
        }
        if ($data->isInitialized('dataVisible') && null !== $data->getDataVisible()) {
            $dataArray['data_visible'] = $data->getDataVisible();
        }
        if ($data->isInitialized('features') && null !== $data->getFeatures()) {
            $values_2 = [];
            foreach ($data->getFeatures() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['features'] = $values_2;
        }
        if ($data->isInitialized('metas') && null !== $data->getMetas()) {
            $values_3 = [];
            foreach ($data->getMetas() as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $dataArray['metas'] = $values_3;
        }
        if ($data->isInitialized('fields') && null !== $data->getFields()) {
            $values_4 = [];
            foreach ($data->getFields() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['fields'] = $values_4;
        }
        foreach ($data as $key_1 => $value_5) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_5;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Model\Dataset::class => false];
    }
}