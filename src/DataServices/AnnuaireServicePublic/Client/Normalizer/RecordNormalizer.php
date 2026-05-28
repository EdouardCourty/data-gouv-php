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
class RecordNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Model\Record::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Model\Record::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Model\Record();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('_id', $data)) {
            $object->setId($data['_id']);
            unset($data['_id']);
        }
        if (\array_key_exists('_timestamp', $data)) {
            $object->setTimestamp($data['_timestamp']);
            unset($data['_timestamp']);
        }
        if (\array_key_exists('_size', $data)) {
            $object->setSize($data['_size']);
            unset($data['_size']);
        }
        if (\array_key_exists('_links', $data)) {
            $values = [];
            foreach ($data['_links'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Model\Links::class, 'json', $context);
            }
            $object->setLinks($values);
            unset($data['_links']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['_id'] = $data->getId();
        }
        if ($data->isInitialized('timestamp') && null !== $data->getTimestamp()) {
            $dataArray['_timestamp'] = $data->getTimestamp();
        }
        if ($data->isInitialized('size') && null !== $data->getSize()) {
            $dataArray['_size'] = $data->getSize();
        }
        if ($data->isInitialized('links') && null !== $data->getLinks()) {
            $values = [];
            foreach ($data->getLinks() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['_links'] = $values;
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Model\Record::class => false];
    }
}