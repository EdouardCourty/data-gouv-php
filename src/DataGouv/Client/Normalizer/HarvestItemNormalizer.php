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
class HarvestItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\HarvestItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\HarvestItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\HarvestItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('args', $data)) {
            $values = [];
            foreach ($data['args'] as $value) {
                $values[] = $value;
            }
            $object->setArgs($values);
        }
        if (\array_key_exists('created', $data)) {
            $object->setCreated((new \DateTime($data['created'])));
        }
        if (\array_key_exists('dataservice', $data)) {
            $object->setDataservice($data['dataservice']);
        }
        if (\array_key_exists('dataset', $data)) {
            $object->setDataset($data['dataset']);
        }
        if (\array_key_exists('ended', $data) && $data['ended'] !== null) {
            $object->setEnded((new \DateTime($data['ended'])));
        }
        elseif (\array_key_exists('ended', $data) && $data['ended'] === null) {
            $object->setEnded(null);
        }
        if (\array_key_exists('errors', $data)) {
            $values_1 = [];
            foreach ($data['errors'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Ecourty\DataGouv\DataGouv\Client\Model\HarvestError::class, 'json', $context);
            }
            $object->setErrors($values_1);
        }
        if (\array_key_exists('kwargs', $data)) {
            $object->setKwargs($data['kwargs']);
        }
        if (\array_key_exists('logs', $data)) {
            $values_2 = [];
            foreach ($data['logs'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Ecourty\DataGouv\DataGouv\Client\Model\HarvestError::class, 'json', $context);
            }
            $object->setLogs($values_2);
        }
        if (\array_key_exists('remote_id', $data)) {
            $object->setRemoteId($data['remote_id']);
        }
        if (\array_key_exists('remote_url', $data) && $data['remote_url'] !== null) {
            $object->setRemoteUrl($data['remote_url']);
        }
        elseif (\array_key_exists('remote_url', $data) && $data['remote_url'] === null) {
            $object->setRemoteUrl(null);
        }
        if (\array_key_exists('started', $data) && $data['started'] !== null) {
            $object->setStarted((new \DateTime($data['started'])));
        }
        elseif (\array_key_exists('started', $data) && $data['started'] === null) {
            $object->setStarted(null);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('args') && null !== $data->getArgs()) {
            $values = [];
            foreach ($data->getArgs() as $value) {
                $values[] = $value;
            }
            $dataArray['args'] = $values;
        }
        $dataArray['created'] = $data->getCreated()->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('dataservice') && null !== $data->getDataservice()) {
            $dataArray['dataservice'] = $data->getDataservice();
        }
        if ($data->isInitialized('dataset') && null !== $data->getDataset()) {
            $dataArray['dataset'] = $data->getDataset();
        }
        if ($data->isInitialized('ended')) {
            $dataArray['ended'] = $data->getEnded()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('errors') && null !== $data->getErrors()) {
            $values_1 = [];
            foreach ($data->getErrors() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['errors'] = $values_1;
        }
        if ($data->isInitialized('kwargs') && null !== $data->getKwargs()) {
            $dataArray['kwargs'] = $data->getKwargs();
        }
        if ($data->isInitialized('logs') && null !== $data->getLogs()) {
            $values_2 = [];
            foreach ($data->getLogs() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['logs'] = $values_2;
        }
        $dataArray['remote_id'] = $data->getRemoteId();
        if ($data->isInitialized('remoteUrl')) {
            $dataArray['remote_url'] = $data->getRemoteUrl();
        }
        if ($data->isInitialized('started')) {
            $dataArray['started'] = $data->getStarted()?->format('Y-m-d\TH:i:sP');
        }
        $dataArray['status'] = $data->getStatus();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\HarvestItem::class => false];
    }
}