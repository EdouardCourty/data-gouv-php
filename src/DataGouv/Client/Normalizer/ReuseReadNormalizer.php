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
class ReuseReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\ReuseRead::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\ReuseRead::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\ReuseRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('featured', $data) && \is_int($data['featured'])) {
            $data['featured'] = (bool) $data['featured'];
        }
        if (\array_key_exists('private', $data) && \is_int($data['private'])) {
            $data['private'] = (bool) $data['private'];
        }
        if (\array_key_exists('archived', $data) && $data['archived'] !== null) {
            $object->setArchived(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['archived']));
        }
        elseif (\array_key_exists('archived', $data) && $data['archived'] === null) {
            $object->setArchived(null);
        }
        if (\array_key_exists('badges', $data)) {
            $values = [];
            foreach ($data['badges'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Ecourty\DataGouv\DataGouv\Client\Model\ReuseReadBadgesItem::class, 'json', $context);
            }
            $object->setBadges($values);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
        }
        if (\array_key_exists('dataservices', $data)) {
            $values_1 = [];
            foreach ($data['dataservices'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceReference::class, 'json', $context);
            }
            $object->setDataservices($values_1);
        }
        if (\array_key_exists('datasets', $data)) {
            $values_2 = [];
            foreach ($data['datasets'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Ecourty\DataGouv\DataGouv\Client\Model\Dataset::class, 'json', $context);
            }
            $object->setDatasets($values_2);
        }
        if (\array_key_exists('deleted', $data) && $data['deleted'] !== null) {
            $object->setDeleted(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['deleted']));
        }
        elseif (\array_key_exists('deleted', $data) && $data['deleted'] === null) {
            $object->setDeleted(null);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('extras', $data)) {
            $object->setExtras($data['extras']);
        }
        if (\array_key_exists('featured', $data) && $data['featured'] !== null) {
            $object->setFeatured($data['featured']);
        }
        elseif (\array_key_exists('featured', $data) && $data['featured'] === null) {
            $object->setFeatured(null);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('image', $data) && $data['image'] !== null) {
            $object->setImage($data['image']);
        }
        elseif (\array_key_exists('image', $data) && $data['image'] === null) {
            $object->setImage(null);
        }
        if (\array_key_exists('image_thumbnail', $data) && $data['image_thumbnail'] !== null) {
            $object->setImageThumbnail($data['image_thumbnail']);
        }
        elseif (\array_key_exists('image_thumbnail', $data) && $data['image_thumbnail'] === null) {
            $object->setImageThumbnail(null);
        }
        if (\array_key_exists('last_modified', $data)) {
            $object->setLastModified(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['last_modified']));
        }
        if (\array_key_exists('metrics', $data)) {
            $object->setMetrics($data['metrics']);
        }
        if (\array_key_exists('organization', $data)) {
            $object->setOrganization($data['organization']);
        }
        if (\array_key_exists('owner', $data)) {
            $object->setOwner($data['owner']);
        }
        if (\array_key_exists('page', $data) && $data['page'] !== null) {
            $object->setPage($data['page']);
        }
        elseif (\array_key_exists('page', $data) && $data['page'] === null) {
            $object->setPage(null);
        }
        if (\array_key_exists('permissions', $data)) {
            $object->setPermissions($this->denormalizer->denormalize($data['permissions'], \Ecourty\DataGouv\DataGouv\Client\Model\ReuseReadPermissions::class, 'json', $context));
        }
        if (\array_key_exists('private', $data) && $data['private'] !== null) {
            $object->setPrivate($data['private']);
        }
        elseif (\array_key_exists('private', $data) && $data['private'] === null) {
            $object->setPrivate(null);
        }
        if (\array_key_exists('slug', $data)) {
            $object->setSlug($data['slug']);
        }
        if (\array_key_exists('tags', $data)) {
            $values_3 = [];
            foreach ($data['tags'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setTags($values_3);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('topic', $data)) {
            $object->setTopic($data['topic']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('uri', $data) && $data['uri'] !== null) {
            $object->setUri($data['uri']);
        }
        elseif (\array_key_exists('uri', $data) && $data['uri'] === null) {
            $object->setUri(null);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('archived')) {
            $dataArray['archived'] = $data->getArchived()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('dataservices') && null !== $data->getDataservices()) {
            $values = [];
            foreach ($data->getDataservices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['dataservices'] = $values;
        }
        if ($data->isInitialized('datasets') && null !== $data->getDatasets()) {
            $values_1 = [];
            foreach ($data->getDatasets() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['datasets'] = $values_1;
        }
        if ($data->isInitialized('deleted')) {
            $dataArray['deleted'] = $data->getDeleted()?->format('Y-m-d\TH:i:sP');
        }
        $dataArray['description'] = $data->getDescription();
        if ($data->isInitialized('extras') && null !== $data->getExtras()) {
            $dataArray['extras'] = $data->getExtras();
        }
        if ($data->isInitialized('organization') && null !== $data->getOrganization()) {
            $dataArray['organization'] = $data->getOrganization();
        }
        if ($data->isInitialized('owner') && null !== $data->getOwner()) {
            $dataArray['owner'] = $data->getOwner();
        }
        if ($data->isInitialized('private')) {
            $dataArray['private'] = $data->getPrivate();
        }
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values_2 = [];
            foreach ($data->getTags() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['tags'] = $values_2;
        }
        $dataArray['title'] = $data->getTitle();
        $dataArray['topic'] = $data->getTopic();
        $dataArray['type'] = $data->getType();
        $dataArray['url'] = $data->getUrl();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\ReuseRead::class => false];
    }
}