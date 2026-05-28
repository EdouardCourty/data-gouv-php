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
class ResponseQuotaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Model\ResponseQuota::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Model\ResponseQuota::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Model\ResponseQuota();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('errorcode', $data) && \is_int($data['errorcode'])) {
            $data['errorcode'] = (double) $data['errorcode'];
        }
        if (\array_key_exists('call_limit', $data) && \is_int($data['call_limit'])) {
            $data['call_limit'] = (double) $data['call_limit'];
        }
        if (\array_key_exists('errorcode', $data)) {
            $object->setErrorcode($data['errorcode']);
            unset($data['errorcode']);
        }
        if (\array_key_exists('reset_time', $data)) {
            $object->setResetTime($data['reset_time']);
            unset($data['reset_time']);
        }
        if (\array_key_exists('limit_time_unit', $data)) {
            $object->setLimitTimeUnit($data['limit_time_unit']);
            unset($data['limit_time_unit']);
        }
        if (\array_key_exists('call_limit', $data)) {
            $object->setCallLimit($data['call_limit']);
            unset($data['call_limit']);
        }
        if (\array_key_exists('error', $data)) {
            $object->setError($data['error']);
            unset($data['error']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['errorcode'] = $data->getErrorcode();
        $dataArray['reset_time'] = $data->getResetTime();
        $dataArray['limit_time_unit'] = $data->getLimitTimeUnit();
        $dataArray['call_limit'] = $data->getCallLimit();
        $dataArray['error'] = $data->getError();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Model\ResponseQuota::class => false];
    }
}