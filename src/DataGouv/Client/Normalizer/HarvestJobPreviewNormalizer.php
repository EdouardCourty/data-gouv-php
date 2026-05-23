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

class HarvestJobPreviewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\HarvestJobPreview::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\HarvestJobPreview::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\HarvestJobPreview();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('created', $data)) {
            $object->setCreated(new \DateTime($data['created']));
        }
        if (\array_key_exists('ended', $data) && $data['ended'] !== null) {
            $object->setEnded(new \DateTime($data['ended']));
        } elseif (\array_key_exists('ended', $data) && $data['ended'] === null) {
            $object->setEnded(null);
        }
        if (\array_key_exists('errors', $data)) {
            $values = [];
            foreach ($data['errors'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Ecourty\DataGouv\DataGouv\Client\Model\HarvestError::class, 'json', $context);
            }
            $object->setErrors($values);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('items', $data)) {
            $values_1 = [];
            foreach ($data['items'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Ecourty\DataGouv\DataGouv\Client\Model\HarvestItemPreview::class, 'json', $context);
            }
            $object->setItems($values_1);
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($data['source']);
        }
        if (\array_key_exists('started', $data) && $data['started'] !== null) {
            $object->setStarted(new \DateTime($data['started']));
        } elseif (\array_key_exists('started', $data) && $data['started'] === null) {
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
        $dataArray['created'] = $data->getCreated()->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('ended')) {
            $dataArray['ended'] = $data->getEnded()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('errors') && null !== $data->getErrors()) {
            $values = [];
            foreach ($data->getErrors() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['errors'] = $values;
        }
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('items') && null !== $data->getItems()) {
            $values_1 = [];
            foreach ($data->getItems() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['items'] = $values_1;
        }
        $dataArray['source'] = $data->getSource();
        if ($data->isInitialized('started')) {
            $dataArray['started'] = $data->getStarted()?->format('Y-m-d\TH:i:sP');
        }
        $dataArray['status'] = $data->getStatus();

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\HarvestJobPreview::class => false];
    }
}
