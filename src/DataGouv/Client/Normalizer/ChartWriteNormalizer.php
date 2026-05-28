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
class ChartWriteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\ChartWrite::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\ChartWrite::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\ChartWrite();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('private', $data) && \is_int($data['private'])) {
            $data['private'] = (bool) $data['private'];
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('extras', $data)) {
            $object->setExtras($data['extras']);
        }
        if (\array_key_exists('organization', $data) && $data['organization'] !== null) {
            $object->setOrganization($data['organization']);
        }
        elseif (\array_key_exists('organization', $data) && $data['organization'] === null) {
            $object->setOrganization(null);
        }
        if (\array_key_exists('owner', $data) && $data['owner'] !== null) {
            $object->setOwner($data['owner']);
        }
        elseif (\array_key_exists('owner', $data) && $data['owner'] === null) {
            $object->setOwner(null);
        }
        if (\array_key_exists('private', $data) && $data['private'] !== null) {
            $object->setPrivate($data['private']);
        }
        elseif (\array_key_exists('private', $data) && $data['private'] === null) {
            $object->setPrivate(null);
        }
        if (\array_key_exists('series', $data)) {
            $values = [];
            foreach ($data['series'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Ecourty\DataGouv\DataGouv\Client\Model\DataSeriesWrite::class, 'json', $context);
            }
            $object->setSeries($values);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('x_axis', $data)) {
            $object->setXAxis($this->denormalizer->denormalize($data['x_axis'], \Ecourty\DataGouv\DataGouv\Client\Model\XAxisWrite::class, 'json', $context));
        }
        if (\array_key_exists('y_axis', $data)) {
            $object->setYAxis($this->denormalizer->denormalize($data['y_axis'], \Ecourty\DataGouv\DataGouv\Client\Model\YAxisWrite::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['description'] = $data->getDescription();
        if ($data->isInitialized('extras') && null !== $data->getExtras()) {
            $dataArray['extras'] = $data->getExtras();
        }
        if ($data->isInitialized('organization')) {
            $dataArray['organization'] = $data->getOrganization();
        }
        if ($data->isInitialized('owner')) {
            $dataArray['owner'] = $data->getOwner();
        }
        if ($data->isInitialized('private')) {
            $dataArray['private'] = $data->getPrivate();
        }
        $values = [];
        foreach ($data->getSeries() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['series'] = $values;
        $dataArray['title'] = $data->getTitle();
        $dataArray['x_axis'] = $this->normalizer->normalize($data->getXAxis(), 'json', $context);
        if ($data->isInitialized('yAxis') && null !== $data->getYAxis()) {
            $dataArray['y_axis'] = $this->normalizer->normalize($data->getYAxis(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\ChartWrite::class => false];
    }
}