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
class HarvestMetadataReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\HarvestMetadataRead::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\HarvestMetadataRead::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\HarvestMetadataRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('archived_at', $data) && $data['archived_at'] !== null) {
            $object->setArchivedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['archived_at']));
        }
        elseif (\array_key_exists('archived_at', $data) && $data['archived_at'] === null) {
            $object->setArchivedAt(null);
        }
        if (\array_key_exists('archived_reason', $data) && $data['archived_reason'] !== null) {
            $object->setArchivedReason($data['archived_reason']);
        }
        elseif (\array_key_exists('archived_reason', $data) && $data['archived_reason'] === null) {
            $object->setArchivedReason(null);
        }
        if (\array_key_exists('backend', $data) && $data['backend'] !== null) {
            $object->setBackend($data['backend']);
        }
        elseif (\array_key_exists('backend', $data) && $data['backend'] === null) {
            $object->setBackend(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('domain', $data) && $data['domain'] !== null) {
            $object->setDomain($data['domain']);
        }
        elseif (\array_key_exists('domain', $data) && $data['domain'] === null) {
            $object->setDomain(null);
        }
        if (\array_key_exists('issued_at', $data) && $data['issued_at'] !== null) {
            $object->setIssuedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['issued_at']));
        }
        elseif (\array_key_exists('issued_at', $data) && $data['issued_at'] === null) {
            $object->setIssuedAt(null);
        }
        if (\array_key_exists('last_update', $data) && $data['last_update'] !== null) {
            $object->setLastUpdate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['last_update']));
        }
        elseif (\array_key_exists('last_update', $data) && $data['last_update'] === null) {
            $object->setLastUpdate(null);
        }
        if (\array_key_exists('remote_id', $data) && $data['remote_id'] !== null) {
            $object->setRemoteId($data['remote_id']);
        }
        elseif (\array_key_exists('remote_id', $data) && $data['remote_id'] === null) {
            $object->setRemoteId(null);
        }
        if (\array_key_exists('remote_url', $data) && $data['remote_url'] !== null) {
            $object->setRemoteUrl($data['remote_url']);
        }
        elseif (\array_key_exists('remote_url', $data) && $data['remote_url'] === null) {
            $object->setRemoteUrl(null);
        }
        if (\array_key_exists('source_id', $data) && $data['source_id'] !== null) {
            $object->setSourceId($data['source_id']);
        }
        elseif (\array_key_exists('source_id', $data) && $data['source_id'] === null) {
            $object->setSourceId(null);
        }
        if (\array_key_exists('source_url', $data) && $data['source_url'] !== null) {
            $object->setSourceUrl($data['source_url']);
        }
        elseif (\array_key_exists('source_url', $data) && $data['source_url'] === null) {
            $object->setSourceUrl(null);
        }
        if (\array_key_exists('uri', $data) && $data['uri'] !== null) {
            $object->setUri($data['uri']);
        }
        elseif (\array_key_exists('uri', $data) && $data['uri'] === null) {
            $object->setUri(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('archivedAt')) {
            $dataArray['archived_at'] = $data->getArchivedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('archivedReason')) {
            $dataArray['archived_reason'] = $data->getArchivedReason();
        }
        if ($data->isInitialized('backend')) {
            $dataArray['backend'] = $data->getBackend();
        }
        if ($data->isInitialized('createdAt')) {
            $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('domain')) {
            $dataArray['domain'] = $data->getDomain();
        }
        if ($data->isInitialized('issuedAt')) {
            $dataArray['issued_at'] = $data->getIssuedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('lastUpdate')) {
            $dataArray['last_update'] = $data->getLastUpdate()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('remoteId')) {
            $dataArray['remote_id'] = $data->getRemoteId();
        }
        if ($data->isInitialized('remoteUrl')) {
            $dataArray['remote_url'] = $data->getRemoteUrl();
        }
        if ($data->isInitialized('sourceId')) {
            $dataArray['source_id'] = $data->getSourceId();
        }
        if ($data->isInitialized('sourceUrl')) {
            $dataArray['source_url'] = $data->getSourceUrl();
        }
        if ($data->isInitialized('uri')) {
            $dataArray['uri'] = $data->getUri();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\HarvestMetadataRead::class => false];
    }
}