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
class ApiTokenReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\ApiTokenRead::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\ApiTokenRead::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\ApiTokenRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt((new \DateTime($data['created_at'])));
        }
        if (\array_key_exists('expires_at', $data) && $data['expires_at'] !== null) {
            $object->setExpiresAt((new \DateTime($data['expires_at'])));
        }
        elseif (\array_key_exists('expires_at', $data) && $data['expires_at'] === null) {
            $object->setExpiresAt(null);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('kind', $data) && $data['kind'] !== null) {
            $object->setKind($data['kind']);
        }
        elseif (\array_key_exists('kind', $data) && $data['kind'] === null) {
            $object->setKind(null);
        }
        if (\array_key_exists('last_used_at', $data) && $data['last_used_at'] !== null) {
            $object->setLastUsedAt((new \DateTime($data['last_used_at'])));
        }
        elseif (\array_key_exists('last_used_at', $data) && $data['last_used_at'] === null) {
            $object->setLastUsedAt(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('revoked_at', $data) && $data['revoked_at'] !== null) {
            $object->setRevokedAt((new \DateTime($data['revoked_at'])));
        }
        elseif (\array_key_exists('revoked_at', $data) && $data['revoked_at'] === null) {
            $object->setRevokedAt(null);
        }
        if (\array_key_exists('scopes', $data)) {
            $values = [];
            foreach ($data['scopes'] as $value) {
                $values[] = $value;
            }
            $object->setScopes($values);
        }
        if (\array_key_exists('token_prefix', $data)) {
            $object->setTokenPrefix($data['token_prefix']);
        }
        if (\array_key_exists('user_agents', $data)) {
            $values_1 = [];
            foreach ($data['user_agents'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setUserAgents($values_1);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('expiresAt')) {
            $dataArray['expires_at'] = $data->getExpiresAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('name')) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('scopes') && null !== $data->getScopes()) {
            $values = [];
            foreach ($data->getScopes() as $value) {
                $values[] = $value;
            }
            $dataArray['scopes'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\ApiTokenRead::class => false];
    }
}