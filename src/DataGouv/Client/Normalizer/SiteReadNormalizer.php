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

class SiteReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\SiteRead::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\SiteRead::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\SiteRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('dataservices_blocs', $data)) {
            $values = [];
            foreach ($data['dataservices_blocs'] as $value) {
                $values[] = $value;
            }
            $object->setDataservicesBlocs($values);
        }
        if (\array_key_exists('datasets_blocs', $data)) {
            $values_1 = [];
            foreach ($data['datasets_blocs'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setDatasetsBlocs($values_1);
        }
        if (\array_key_exists('feed_size', $data)) {
            $object->setFeedSize($data['feed_size']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('keywords', $data)) {
            $values_2 = [];
            foreach ($data['keywords'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setKeywords($values_2);
        }
        if (\array_key_exists('metrics', $data)) {
            $object->setMetrics($data['metrics']);
        }
        if (\array_key_exists('reuses_blocs', $data)) {
            $values_3 = [];
            foreach ($data['reuses_blocs'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setReusesBlocs($values_3);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
        } elseif (\array_key_exists('version', $data) && $data['version'] === null) {
            $object->setVersion(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dataservicesBlocs') && null !== $data->getDataservicesBlocs()) {
            $values = [];
            foreach ($data->getDataservicesBlocs() as $value) {
                $values[] = $value;
            }
            $dataArray['dataservices_blocs'] = $values;
        }
        if ($data->isInitialized('datasetsBlocs') && null !== $data->getDatasetsBlocs()) {
            $values_1 = [];
            foreach ($data->getDatasetsBlocs() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['datasets_blocs'] = $values_1;
        }
        $dataArray['feed_size'] = $data->getFeedSize();
        if ($data->isInitialized('keywords') && null !== $data->getKeywords()) {
            $values_2 = [];
            foreach ($data->getKeywords() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['keywords'] = $values_2;
        }
        if ($data->isInitialized('reusesBlocs') && null !== $data->getReusesBlocs()) {
            $values_3 = [];
            foreach ($data->getReusesBlocs() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['reuses_blocs'] = $values_3;
        }
        $dataArray['title'] = $data->getTitle();

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\SiteRead::class => false];
    }
}
