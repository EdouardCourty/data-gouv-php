<?php

namespace Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Runtime\Normalizer\CheckArray;
use Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DatasetDatasetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Model\DatasetDataset::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Model\DatasetDataset::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Model\DatasetDataset();
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
        if (\array_key_exists('dataset_id', $data)) {
            $object->setDatasetId($data['dataset_id']);
            unset($data['dataset_id']);
        }
        if (\array_key_exists('dataset_uid', $data)) {
            $object->setDatasetUid($data['dataset_uid']);
            unset($data['dataset_uid']);
        }
        if (\array_key_exists('attachments', $data)) {
            $values = [];
            foreach ($data['attachments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Model\DatasetDatasetAttachmentsItem::class, 'json', $context);
            }
            $object->setAttachments($values);
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
            $values_1 = [];
            foreach ($data['features'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setFeatures($values_1);
            unset($data['features']);
        }
        if (\array_key_exists('metas', $data)) {
            $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metas'] as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->setMetas($values_2);
            unset($data['metas']);
        }
        if (\array_key_exists('fields', $data)) {
            $values_3 = [];
            foreach ($data['fields'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Model\DatasetDatasetFieldsItem::class, 'json', $context);
            }
            $object->setFields($values_3);
            unset($data['fields']);
        }
        foreach ($data as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('datasetId') && null !== $data->getDatasetId()) {
            $dataArray['dataset_id'] = $data->getDatasetId();
        }
        if ($data->isInitialized('attachments') && null !== $data->getAttachments()) {
            $values = [];
            foreach ($data->getAttachments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['attachments'] = $values;
        }
        if ($data->isInitialized('hasRecords') && null !== $data->getHasRecords()) {
            $dataArray['has_records'] = $data->getHasRecords();
        }
        if ($data->isInitialized('dataVisible') && null !== $data->getDataVisible()) {
            $dataArray['data_visible'] = $data->getDataVisible();
        }
        if ($data->isInitialized('features') && null !== $data->getFeatures()) {
            $values_1 = [];
            foreach ($data->getFeatures() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['features'] = $values_1;
        }
        if ($data->isInitialized('metas') && null !== $data->getMetas()) {
            $values_2 = [];
            foreach ($data->getMetas() as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $dataArray['metas'] = $values_2;
        }
        if ($data->isInitialized('fields') && null !== $data->getFields()) {
            $values_3 = [];
            foreach ($data->getFields() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['fields'] = $values_3;
        }
        foreach ($data as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Model\DatasetDataset::class => false];
    }
}