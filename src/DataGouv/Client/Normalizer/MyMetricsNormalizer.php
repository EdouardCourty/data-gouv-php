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

class MyMetricsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\MyMetrics::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\MyMetrics::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\MyMetrics();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('resources_availability', $data) && \is_int($data['resources_availability'])) {
            $data['resources_availability'] = (float) $data['resources_availability'];
        }
        if (\array_key_exists('datasets_count', $data) && $data['datasets_count'] !== null) {
            $object->setDatasetsCount($data['datasets_count']);
        } elseif (\array_key_exists('datasets_count', $data) && $data['datasets_count'] === null) {
            $object->setDatasetsCount(null);
        }
        if (\array_key_exists('datasets_org_count', $data) && $data['datasets_org_count'] !== null) {
            $object->setDatasetsOrgCount($data['datasets_org_count']);
        } elseif (\array_key_exists('datasets_org_count', $data) && $data['datasets_org_count'] === null) {
            $object->setDatasetsOrgCount(null);
        }
        if (\array_key_exists('followers_count', $data) && $data['followers_count'] !== null) {
            $object->setFollowersCount($data['followers_count']);
        } elseif (\array_key_exists('followers_count', $data) && $data['followers_count'] === null) {
            $object->setFollowersCount(null);
        }
        if (\array_key_exists('followers_org_count', $data) && $data['followers_org_count'] !== null) {
            $object->setFollowersOrgCount($data['followers_org_count']);
        } elseif (\array_key_exists('followers_org_count', $data) && $data['followers_org_count'] === null) {
            $object->setFollowersOrgCount(null);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('resources_availability', $data) && $data['resources_availability'] !== null) {
            $object->setResourcesAvailability($data['resources_availability']);
        } elseif (\array_key_exists('resources_availability', $data) && $data['resources_availability'] === null) {
            $object->setResourcesAvailability(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\MyMetrics::class => false];
    }
}
