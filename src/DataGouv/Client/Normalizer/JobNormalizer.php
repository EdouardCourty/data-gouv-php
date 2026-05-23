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

class JobNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\Job::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\Job::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\Job();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('enabled', $data) && \is_int($data['enabled'])) {
            $data['enabled'] = (bool) $data['enabled'];
        }
        if (\array_key_exists('args', $data)) {
            $values = [];
            foreach ($data['args'] as $value) {
                $values[] = $value;
            }
            $object->setArgs($values);
        }
        if (\array_key_exists('crontab', $data)) {
            $object->setCrontab($this->denormalizer->denormalize($data['crontab'], \Ecourty\DataGouv\DataGouv\Client\Model\Crontab::class, 'json', $context));
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('enabled', $data) && $data['enabled'] !== null) {
            $object->setEnabled($data['enabled']);
        } elseif (\array_key_exists('enabled', $data) && $data['enabled'] === null) {
            $object->setEnabled(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('interval', $data)) {
            $object->setInterval($this->denormalizer->denormalize($data['interval'], \Ecourty\DataGouv\DataGouv\Client\Model\Interval::class, 'json', $context));
        }
        if (\array_key_exists('kwargs', $data)) {
            $object->setKwargs($data['kwargs']);
        }
        if (\array_key_exists('last_run_at', $data) && $data['last_run_at'] !== null) {
            $object->setLastRunAt(new \DateTime($data['last_run_at']));
        } elseif (\array_key_exists('last_run_at', $data) && $data['last_run_at'] === null) {
            $object->setLastRunAt(null);
        }
        if (\array_key_exists('last_run_id', $data) && $data['last_run_id'] !== null) {
            $object->setLastRunId($data['last_run_id']);
        } elseif (\array_key_exists('last_run_id', $data) && $data['last_run_id'] === null) {
            $object->setLastRunId(null);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('schedule', $data) && $data['schedule'] !== null) {
            $object->setSchedule($data['schedule']);
        } elseif (\array_key_exists('schedule', $data) && $data['schedule'] === null) {
            $object->setSchedule(null);
        }
        if (\array_key_exists('task', $data)) {
            $object->setTask($data['task']);
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
        if ($data->isInitialized('crontab') && null !== $data->getCrontab()) {
            $dataArray['crontab'] = $this->normalizer->normalize($data->getCrontab(), 'json', $context);
        }
        if ($data->isInitialized('description')) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('enabled')) {
            $dataArray['enabled'] = $data->getEnabled();
        }
        if ($data->isInitialized('interval') && null !== $data->getInterval()) {
            $dataArray['interval'] = $this->normalizer->normalize($data->getInterval(), 'json', $context);
        }
        if ($data->isInitialized('kwargs') && null !== $data->getKwargs()) {
            $dataArray['kwargs'] = $data->getKwargs();
        }
        $dataArray['name'] = $data->getName();
        $dataArray['task'] = $data->getTask();

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\Job::class => false];
    }
}
