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

class OrganizationReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationRead::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationRead::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationRead();
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
        } elseif (\array_key_exists('acronym', $data) && $data['acronym'] === null) {
            $object->setAcronym(null);
        }
        if (\array_key_exists('badges', $data)) {
            $values = [];
            foreach ($data['badges'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReadBadgesItem::class, 'json', $context);
            }
            $object->setBadges($values);
        }
        if (\array_key_exists('business_number_id', $data) && $data['business_number_id'] !== null) {
            $object->setBusinessNumberId($data['business_number_id']);
        } elseif (\array_key_exists('business_number_id', $data) && $data['business_number_id'] === null) {
            $object->setBusinessNumberId(null);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(new \DateTime($data['created_at']));
        }
        if (\array_key_exists('deleted', $data) && $data['deleted'] !== null) {
            $object->setDeleted(new \DateTime($data['deleted']));
        } elseif (\array_key_exists('deleted', $data) && $data['deleted'] === null) {
            $object->setDeleted(null);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('ext', $data)) {
            $object->setExt($data['ext']);
        }
        if (\array_key_exists('extras', $data)) {
            $object->setExtras($data['extras']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('image_url', $data) && $data['image_url'] !== null) {
            $object->setImageUrl($data['image_url']);
        } elseif (\array_key_exists('image_url', $data) && $data['image_url'] === null) {
            $object->setImageUrl(null);
        }
        if (\array_key_exists('last_modified', $data)) {
            $object->setLastModified(new \DateTime($data['last_modified']));
        }
        if (\array_key_exists('logo', $data) && $data['logo'] !== null) {
            $object->setLogo($data['logo']);
        } elseif (\array_key_exists('logo', $data) && $data['logo'] === null) {
            $object->setLogo(null);
        }
        if (\array_key_exists('logo_thumbnail', $data) && $data['logo_thumbnail'] !== null) {
            $object->setLogoThumbnail($data['logo_thumbnail']);
        } elseif (\array_key_exists('logo_thumbnail', $data) && $data['logo_thumbnail'] === null) {
            $object->setLogoThumbnail(null);
        }
        if (\array_key_exists('members', $data)) {
            $values_1 = [];
            foreach ($data['members'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReadMembersItem::class, 'json', $context);
            }
            $object->setMembers($values_1);
        }
        if (\array_key_exists('metrics', $data)) {
            $object->setMetrics($data['metrics']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('page', $data) && $data['page'] !== null) {
            $object->setPage($data['page']);
        } elseif (\array_key_exists('page', $data) && $data['page'] === null) {
            $object->setPage(null);
        }
        if (\array_key_exists('permissions', $data)) {
            $object->setPermissions($this->denormalizer->denormalize($data['permissions'], \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReadPermissions::class, 'json', $context));
        }
        if (\array_key_exists('requests', $data)) {
            $values_2 = [];
            foreach ($data['requests'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReadRequestsItem::class, 'json', $context);
            }
            $object->setRequests($values_2);
        }
        if (\array_key_exists('slug', $data)) {
            $object->setSlug($data['slug']);
        }
        if (\array_key_exists('teams', $data)) {
            $values_3 = [];
            foreach ($data['teams'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReadTeamsItem::class, 'json', $context);
            }
            $object->setTeams($values_3);
        }
        if (\array_key_exists('uri', $data) && $data['uri'] !== null) {
            $object->setUri($data['uri']);
        } elseif (\array_key_exists('uri', $data) && $data['uri'] === null) {
            $object->setUri(null);
        }
        if (\array_key_exists('url', $data) && $data['url'] !== null) {
            $object->setUrl($data['url']);
        } elseif (\array_key_exists('url', $data) && $data['url'] === null) {
            $object->setUrl(null);
        }
        if (\array_key_exists('zone', $data) && $data['zone'] !== null) {
            $object->setZone($data['zone']);
        } elseif (\array_key_exists('zone', $data) && $data['zone'] === null) {
            $object->setZone(null);
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
        if ($data->isInitialized('logoThumbnail')) {
            $dataArray['logo_thumbnail'] = $data->getLogoThumbnail();
        }
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('url')) {
            $dataArray['url'] = $data->getUrl();
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\OrganizationRead::class => false];
    }
}
