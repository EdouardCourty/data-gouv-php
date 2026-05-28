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
class OrganizationReferenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReference::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReference::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReference();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('class', $data)) {
            $object->setClass($data['class']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('acronym', $data)) {
            $object->setAcronym($data['acronym']);
        }
        if (\array_key_exists('badges', $data)) {
            $values = [];
            foreach ($data['badges'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReferenceBadgesItem::class, 'json', $context);
            }
            $object->setBadges($values);
        }
        if (\array_key_exists('logo', $data)) {
            $object->setLogo($data['logo']);
        }
        if (\array_key_exists('logo_thumbnail', $data)) {
            $object->setLogoThumbnail($data['logo_thumbnail']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('page', $data)) {
            $object->setPage($data['page']);
        }
        if (\array_key_exists('permissions', $data)) {
            $object->setPermissions($this->denormalizer->denormalize($data['permissions'], \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReferencePermissions::class, 'json', $context));
        }
        if (\array_key_exists('slug', $data)) {
            $object->setSlug($data['slug']);
        }
        if (\array_key_exists('uri', $data)) {
            $object->setUri($data['uri']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['class'] = $data->getClass();
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('acronym') && null !== $data->getAcronym()) {
            $dataArray['acronym'] = $data->getAcronym();
        }
        if ($data->isInitialized('logo') && null !== $data->getLogo()) {
            $dataArray['logo'] = $data->getLogo();
        }
        if ($data->isInitialized('logoThumbnail') && null !== $data->getLogoThumbnail()) {
            $dataArray['logo_thumbnail'] = $data->getLogoThumbnail();
        }
        $dataArray['name'] = $data->getName();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReference::class => false];
    }
}