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
class OrganizationWriteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationWrite::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationWrite::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationWrite();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('acronym', $data) && $data['acronym'] !== null) {
            $object->setAcronym($data['acronym']);
        }
        elseif (\array_key_exists('acronym', $data) && $data['acronym'] === null) {
            $object->setAcronym(null);
        }
        if (\array_key_exists('business_number_id', $data) && $data['business_number_id'] !== null) {
            $object->setBusinessNumberId($data['business_number_id']);
        }
        elseif (\array_key_exists('business_number_id', $data) && $data['business_number_id'] === null) {
            $object->setBusinessNumberId(null);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('extras', $data)) {
            $object->setExtras($data['extras']);
        }
        if (\array_key_exists('image_url', $data) && $data['image_url'] !== null) {
            $object->setImageUrl($data['image_url']);
        }
        elseif (\array_key_exists('image_url', $data) && $data['image_url'] === null) {
            $object->setImageUrl(null);
        }
        if (\array_key_exists('logo', $data) && $data['logo'] !== null) {
            $object->setLogo($data['logo']);
        }
        elseif (\array_key_exists('logo', $data) && $data['logo'] === null) {
            $object->setLogo(null);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('url', $data) && $data['url'] !== null) {
            $object->setUrl($data['url']);
        }
        elseif (\array_key_exists('url', $data) && $data['url'] === null) {
            $object->setUrl(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('acronym')) {
            $dataArray['acronym'] = $data->getAcronym();
        }
        if ($data->isInitialized('businessNumberId')) {
            $dataArray['business_number_id'] = $data->getBusinessNumberId();
        }
        $dataArray['description'] = $data->getDescription();
        if ($data->isInitialized('extras') && null !== $data->getExtras()) {
            $dataArray['extras'] = $data->getExtras();
        }
        if ($data->isInitialized('imageUrl')) {
            $dataArray['image_url'] = $data->getImageUrl();
        }
        if ($data->isInitialized('logo')) {
            $dataArray['logo'] = $data->getLogo();
        }
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('url')) {
            $dataArray['url'] = $data->getUrl();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\OrganizationWrite::class => false];
    }
}