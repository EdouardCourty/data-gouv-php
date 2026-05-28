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
class CommunityResourceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\CommunityResource::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\CommunityResource::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\CommunityResource();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('checksum', $data)) {
            $object->setChecksum($this->denormalizer->denormalize($data['checksum'], \Ecourty\DataGouv\DataGouv\Client\Model\ResourceChecksum::class, 'json', $context));
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt((new \DateTime($data['created_at'])));
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('extras', $data)) {
            $object->setExtras($data['extras']);
        }
        if (\array_key_exists('filesize', $data) && $data['filesize'] !== null) {
            $object->setFilesize($data['filesize']);
        }
        elseif (\array_key_exists('filesize', $data) && $data['filesize'] === null) {
            $object->setFilesize(null);
        }
        if (\array_key_exists('filetype', $data)) {
            $object->setFiletype($data['filetype']);
        }
        if (\array_key_exists('format', $data)) {
            $object->setFormat($data['format']);
        }
        if (\array_key_exists('harvest', $data)) {
            $object->setHarvest($this->denormalizer->denormalize($data['harvest'], \Ecourty\DataGouv\DataGouv\Client\Model\ResourceHarvest::class, 'json', $context));
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('internal', $data)) {
            $object->setInternal($this->denormalizer->denormalize($data['internal'], \Ecourty\DataGouv\DataGouv\Client\Model\ResourceInternal::class, 'json', $context));
        }
        if (\array_key_exists('last_modified', $data) && $data['last_modified'] !== null) {
            $object->setLastModified((new \DateTime($data['last_modified'])));
        }
        elseif (\array_key_exists('last_modified', $data) && $data['last_modified'] === null) {
            $object->setLastModified(null);
        }
        if (\array_key_exists('latest', $data) && $data['latest'] !== null) {
            $object->setLatest($data['latest']);
        }
        elseif (\array_key_exists('latest', $data) && $data['latest'] === null) {
            $object->setLatest(null);
        }
        if (\array_key_exists('metrics', $data)) {
            $object->setMetrics($data['metrics']);
        }
        if (\array_key_exists('mime', $data) && $data['mime'] !== null) {
            $object->setMime($data['mime']);
        }
        elseif (\array_key_exists('mime', $data) && $data['mime'] === null) {
            $object->setMime(null);
        }
        if (\array_key_exists('preview_url', $data) && $data['preview_url'] !== null) {
            $object->setPreviewUrl($data['preview_url']);
        }
        elseif (\array_key_exists('preview_url', $data) && $data['preview_url'] === null) {
            $object->setPreviewUrl(null);
        }
        if (\array_key_exists('schema', $data)) {
            $object->setSchema($this->denormalizer->denormalize($data['schema'], \Ecourty\DataGouv\DataGouv\Client\Model\ResourceSchema::class, 'json', $context));
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('dataset', $data)) {
            $object->setDataset($data['dataset']);
        }
        if (\array_key_exists('organization', $data)) {
            $object->setOrganization($data['organization']);
        }
        if (\array_key_exists('owner', $data)) {
            $object->setOwner($data['owner']);
        }
        if (\array_key_exists('permissions', $data)) {
            $object->setPermissions($this->denormalizer->denormalize($data['permissions'], \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPermissions::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('checksum') && null !== $data->getChecksum()) {
            $dataArray['checksum'] = $this->normalizer->normalize($data->getChecksum(), 'json', $context);
        }
        if ($data->isInitialized('description')) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('extras') && null !== $data->getExtras()) {
            $dataArray['extras'] = $data->getExtras();
        }
        if ($data->isInitialized('filesize')) {
            $dataArray['filesize'] = $data->getFilesize();
        }
        $dataArray['filetype'] = $data->getFiletype();
        $dataArray['format'] = $data->getFormat();
        if ($data->isInitialized('mime')) {
            $dataArray['mime'] = $data->getMime();
        }
        if ($data->isInitialized('schema') && null !== $data->getSchema()) {
            $dataArray['schema'] = $this->normalizer->normalize($data->getSchema(), 'json', $context);
        }
        $dataArray['title'] = $data->getTitle();
        $dataArray['type'] = $data->getType();
        $dataArray['url'] = $data->getUrl();
        if ($data->isInitialized('dataset') && null !== $data->getDataset()) {
            $dataArray['dataset'] = $data->getDataset();
        }
        if ($data->isInitialized('organization') && null !== $data->getOrganization()) {
            $dataArray['organization'] = $data->getOrganization();
        }
        if ($data->isInitialized('owner') && null !== $data->getOwner()) {
            $dataArray['owner'] = $data->getOwner();
        }
        if ($data->isInitialized('permissions') && null !== $data->getPermissions()) {
            $dataArray['permissions'] = $this->normalizer->normalize($data->getPermissions(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\CommunityResource::class => false];
    }
}