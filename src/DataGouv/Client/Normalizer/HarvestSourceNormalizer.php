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
class HarvestSourceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('active', $data) && \is_int($data['active'])) {
            $data['active'] = (bool) $data['active'];
        }
        if (\array_key_exists('autoarchive', $data) && \is_int($data['autoarchive'])) {
            $data['autoarchive'] = (bool) $data['autoarchive'];
        }
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
        }
        if (\array_key_exists('autoarchive', $data)) {
            $object->setAutoarchive($data['autoarchive']);
        }
        if (\array_key_exists('backend', $data)) {
            $object->setBackend($data['backend']);
        }
        if (\array_key_exists('config', $data)) {
            $object->setConfig($data['config']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
        }
        if (\array_key_exists('deleted', $data) && $data['deleted'] !== null) {
            $object->setDeleted(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['deleted']));
        }
        elseif (\array_key_exists('deleted', $data) && $data['deleted'] === null) {
            $object->setDeleted(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('last_job', $data)) {
            $object->setLastJob($this->denormalizer->denormalize($data['last_job'], \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSourceLastJob::class, 'json', $context));
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('organization', $data)) {
            $object->setOrganization($data['organization']);
        }
        if (\array_key_exists('owner', $data)) {
            $object->setOwner($data['owner']);
        }
        if (\array_key_exists('permissions', $data)) {
            $object->setPermissions($this->denormalizer->denormalize($data['permissions'], \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSourcePermissions::class, 'json', $context));
        }
        if (\array_key_exists('schedule', $data) && $data['schedule'] !== null) {
            $object->setSchedule($data['schedule']);
        }
        elseif (\array_key_exists('schedule', $data) && $data['schedule'] === null) {
            $object->setSchedule(null);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('validation', $data)) {
            $object->setValidation($this->denormalizer->denormalize($data['validation'], \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSourceValidation::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['active'] = $data->getActive();
        $dataArray['autoarchive'] = $data->getAutoarchive();
        $dataArray['backend'] = $data->getBackend();
        if ($data->isInitialized('config') && null !== $data->getConfig()) {
            $dataArray['config'] = $data->getConfig();
        }
        if ($data->isInitialized('description')) {
            $dataArray['description'] = $data->getDescription();
        }
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('organization') && null !== $data->getOrganization()) {
            $dataArray['organization'] = $data->getOrganization();
        }
        if ($data->isInitialized('owner') && null !== $data->getOwner()) {
            $dataArray['owner'] = $data->getOwner();
        }
        $dataArray['url'] = $data->getUrl();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource::class => false];
    }
}