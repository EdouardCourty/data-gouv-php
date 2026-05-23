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

class PostReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\PostRead::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\PostRead::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\PostRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('blocs', $data)) {
            $values = [];
            foreach ($data['blocs'] as $value) {
                $values[] = $value;
            }
            $object->setBlocs($values);
        }
        if (\array_key_exists('body_type', $data) && $data['body_type'] !== null) {
            $object->setBodyType($data['body_type']);
        } elseif (\array_key_exists('body_type', $data) && $data['body_type'] === null) {
            $object->setBodyType(null);
        }
        if (\array_key_exists('content', $data) && $data['content'] !== null) {
            $object->setContent($data['content']);
        } elseif (\array_key_exists('content', $data) && $data['content'] === null) {
            $object->setContent(null);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(new \DateTime($data['created_at']));
        }
        if (\array_key_exists('credit_to', $data) && $data['credit_to'] !== null) {
            $object->setCreditTo($data['credit_to']);
        } elseif (\array_key_exists('credit_to', $data) && $data['credit_to'] === null) {
            $object->setCreditTo(null);
        }
        if (\array_key_exists('credit_url', $data) && $data['credit_url'] !== null) {
            $object->setCreditUrl($data['credit_url']);
        } elseif (\array_key_exists('credit_url', $data) && $data['credit_url'] === null) {
            $object->setCreditUrl(null);
        }
        if (\array_key_exists('datasets', $data)) {
            $values_1 = [];
            foreach ($data['datasets'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Ecourty\DataGouv\DataGouv\Client\Model\PostReadDatasetsItem::class, 'json', $context);
            }
            $object->setDatasets($values_1);
        }
        if (\array_key_exists('headline', $data) && $data['headline'] !== null) {
            $object->setHeadline($data['headline']);
        } elseif (\array_key_exists('headline', $data) && $data['headline'] === null) {
            $object->setHeadline(null);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('image', $data) && $data['image'] !== null) {
            $object->setImage($data['image']);
        } elseif (\array_key_exists('image', $data) && $data['image'] === null) {
            $object->setImage(null);
        }
        if (\array_key_exists('image_thumbnail', $data) && $data['image_thumbnail'] !== null) {
            $object->setImageThumbnail($data['image_thumbnail']);
        } elseif (\array_key_exists('image_thumbnail', $data) && $data['image_thumbnail'] === null) {
            $object->setImageThumbnail(null);
        }
        if (\array_key_exists('image_url', $data) && $data['image_url'] !== null) {
            $object->setImageUrl($data['image_url']);
        } elseif (\array_key_exists('image_url', $data) && $data['image_url'] === null) {
            $object->setImageUrl(null);
        }
        if (\array_key_exists('kind', $data) && $data['kind'] !== null) {
            $object->setKind($data['kind']);
        } elseif (\array_key_exists('kind', $data) && $data['kind'] === null) {
            $object->setKind(null);
        }
        if (\array_key_exists('last_modified', $data)) {
            $object->setLastModified(new \DateTime($data['last_modified']));
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('owner', $data)) {
            $object->setOwner($data['owner']);
        }
        if (\array_key_exists('page', $data) && $data['page'] !== null) {
            $object->setPage($data['page']);
        } elseif (\array_key_exists('page', $data) && $data['page'] === null) {
            $object->setPage(null);
        }
        if (\array_key_exists('published', $data) && $data['published'] !== null) {
            $object->setPublished(new \DateTime($data['published']));
        } elseif (\array_key_exists('published', $data) && $data['published'] === null) {
            $object->setPublished(null);
        }
        if (\array_key_exists('reuses', $data)) {
            $values_2 = [];
            foreach ($data['reuses'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setReuses($values_2);
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
        if (\array_key_exists('uri', $data) && $data['uri'] !== null) {
            $object->setUri($data['uri']);
        } elseif (\array_key_exists('uri', $data) && $data['uri'] === null) {
            $object->setUri(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('blocs') && null !== $data->getBlocs()) {
            $values = [];
            foreach ($data->getBlocs() as $value) {
                $values[] = $value;
            }
            $dataArray['blocs'] = $values;
        }
        if ($data->isInitialized('bodyType')) {
            $dataArray['body_type'] = $data->getBodyType();
        }
        if ($data->isInitialized('content')) {
            $dataArray['content'] = $data->getContent();
        }
        if ($data->isInitialized('creditTo')) {
            $dataArray['credit_to'] = $data->getCreditTo();
        }
        if ($data->isInitialized('creditUrl')) {
            $dataArray['credit_url'] = $data->getCreditUrl();
        }
        if ($data->isInitialized('datasets') && null !== $data->getDatasets()) {
            $values_1 = [];
            foreach ($data->getDatasets() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['datasets'] = $values_1;
        }
        if ($data->isInitialized('headline')) {
            $dataArray['headline'] = $data->getHeadline();
        }
        if ($data->isInitialized('imageUrl')) {
            $dataArray['image_url'] = $data->getImageUrl();
        }
        if ($data->isInitialized('kind')) {
            $dataArray['kind'] = $data->getKind();
        }
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('reuses') && null !== $data->getReuses()) {
            $values_2 = [];
            foreach ($data->getReuses() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['reuses'] = $values_2;
        }
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values_3 = [];
            foreach ($data->getTags() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['tags'] = $values_3;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\PostRead::class => false];
    }
}
