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

class LicenseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\License::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\License::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\License();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('alternate_titles', $data)) {
            $values = [];
            foreach ($data['alternate_titles'] as $value) {
                $values[] = $value;
            }
            $object->setAlternateTitles($values);
        }
        if (\array_key_exists('alternate_urls', $data)) {
            $values_1 = [];
            foreach ($data['alternate_urls'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAlternateUrls($values_1);
        }
        if (\array_key_exists('flags', $data)) {
            $values_2 = [];
            foreach ($data['flags'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setFlags($values_2);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('maintainer', $data) && $data['maintainer'] !== null) {
            $object->setMaintainer($data['maintainer']);
        } elseif (\array_key_exists('maintainer', $data) && $data['maintainer'] === null) {
            $object->setMaintainer(null);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('url', $data) && $data['url'] !== null) {
            $object->setUrl($data['url']);
        } elseif (\array_key_exists('url', $data) && $data['url'] === null) {
            $object->setUrl(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('alternateTitles') && null !== $data->getAlternateTitles()) {
            $values = [];
            foreach ($data->getAlternateTitles() as $value) {
                $values[] = $value;
            }
            $dataArray['alternate_titles'] = $values;
        }
        if ($data->isInitialized('alternateUrls') && null !== $data->getAlternateUrls()) {
            $values_1 = [];
            foreach ($data->getAlternateUrls() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['alternate_urls'] = $values_1;
        }
        if ($data->isInitialized('flags') && null !== $data->getFlags()) {
            $values_2 = [];
            foreach ($data->getFlags() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['flags'] = $values_2;
        }
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('maintainer')) {
            $dataArray['maintainer'] = $data->getMaintainer();
        }
        $dataArray['title'] = $data->getTitle();
        if ($data->isInitialized('url')) {
            $dataArray['url'] = $data->getUrl();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\License::class => false];
    }
}
