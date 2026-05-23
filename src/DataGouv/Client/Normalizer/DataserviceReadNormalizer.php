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

class DataserviceReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceRead::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceRead::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('availability', $data) && \is_int($data['availability'])) {
            $data['availability'] = (float) $data['availability'];
        }
        if (\array_key_exists('featured', $data) && \is_int($data['featured'])) {
            $data['featured'] = (bool) $data['featured'];
        }
        if (\array_key_exists('private', $data) && \is_int($data['private'])) {
            $data['private'] = (bool) $data['private'];
        }
        if (\array_key_exists('access_audiences', $data)) {
            $values = [];
            foreach ($data['access_audiences'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Ecourty\DataGouv\DataGouv\Client\Model\AccessAudienceRead::class, 'json', $context);
            }
            $object->setAccessAudiences($values);
        }
        if (\array_key_exists('access_type', $data) && $data['access_type'] !== null) {
            $object->setAccessType($data['access_type']);
        } elseif (\array_key_exists('access_type', $data) && $data['access_type'] === null) {
            $object->setAccessType(null);
        }
        if (\array_key_exists('access_type_reason', $data) && $data['access_type_reason'] !== null) {
            $object->setAccessTypeReason($data['access_type_reason']);
        } elseif (\array_key_exists('access_type_reason', $data) && $data['access_type_reason'] === null) {
            $object->setAccessTypeReason(null);
        }
        if (\array_key_exists('access_type_reason_category', $data) && $data['access_type_reason_category'] !== null) {
            $object->setAccessTypeReasonCategory($data['access_type_reason_category']);
        } elseif (\array_key_exists('access_type_reason_category', $data) && $data['access_type_reason_category'] === null) {
            $object->setAccessTypeReasonCategory(null);
        }
        if (\array_key_exists('acronym', $data) && $data['acronym'] !== null) {
            $object->setAcronym($data['acronym']);
        } elseif (\array_key_exists('acronym', $data) && $data['acronym'] === null) {
            $object->setAcronym(null);
        }
        if (\array_key_exists('archived_at', $data) && $data['archived_at'] !== null) {
            $object->setArchivedAt(new \DateTime($data['archived_at']));
        } elseif (\array_key_exists('archived_at', $data) && $data['archived_at'] === null) {
            $object->setArchivedAt(null);
        }
        if (\array_key_exists('authorization_request_url', $data) && $data['authorization_request_url'] !== null) {
            $object->setAuthorizationRequestUrl($data['authorization_request_url']);
        } elseif (\array_key_exists('authorization_request_url', $data) && $data['authorization_request_url'] === null) {
            $object->setAuthorizationRequestUrl(null);
        }
        if (\array_key_exists('availability', $data) && $data['availability'] !== null) {
            $object->setAvailability($data['availability']);
        } elseif (\array_key_exists('availability', $data) && $data['availability'] === null) {
            $object->setAvailability(null);
        }
        if (\array_key_exists('availability_url', $data) && $data['availability_url'] !== null) {
            $object->setAvailabilityUrl($data['availability_url']);
        } elseif (\array_key_exists('availability_url', $data) && $data['availability_url'] === null) {
            $object->setAvailabilityUrl(null);
        }
        if (\array_key_exists('badges', $data)) {
            $values_1 = [];
            foreach ($data['badges'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceReadBadgesItem::class, 'json', $context);
            }
            $object->setBadges($values_1);
        }
        if (\array_key_exists('base_api_url', $data) && $data['base_api_url'] !== null) {
            $object->setBaseApiUrl($data['base_api_url']);
        } elseif (\array_key_exists('base_api_url', $data) && $data['base_api_url'] === null) {
            $object->setBaseApiUrl(null);
        }
        if (\array_key_exists('business_documentation_url', $data) && $data['business_documentation_url'] !== null) {
            $object->setBusinessDocumentationUrl($data['business_documentation_url']);
        } elseif (\array_key_exists('business_documentation_url', $data) && $data['business_documentation_url'] === null) {
            $object->setBusinessDocumentationUrl(null);
        }
        if (\array_key_exists('contact_points', $data)) {
            $values_2 = [];
            foreach ($data['contact_points'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Ecourty\DataGouv\DataGouv\Client\Model\ContactPointRead::class, 'json', $context);
            }
            $object->setContactPoints($values_2);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(new \DateTime($data['created_at']));
        }
        if (\array_key_exists('datasets', $data)) {
            $object->setDatasets($data['datasets']);
        }
        if (\array_key_exists('deleted_at', $data) && $data['deleted_at'] !== null) {
            $object->setDeletedAt(new \DateTime($data['deleted_at']));
        } elseif (\array_key_exists('deleted_at', $data) && $data['deleted_at'] === null) {
            $object->setDeletedAt(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('extras', $data)) {
            $object->setExtras($data['extras']);
        }
        if (\array_key_exists('featured', $data) && $data['featured'] !== null) {
            $object->setFeatured($data['featured']);
        } elseif (\array_key_exists('featured', $data) && $data['featured'] === null) {
            $object->setFeatured(null);
        }
        if (\array_key_exists('format', $data) && $data['format'] !== null) {
            $object->setFormat($data['format']);
        } elseif (\array_key_exists('format', $data) && $data['format'] === null) {
            $object->setFormat(null);
        }
        if (\array_key_exists('harvest', $data)) {
            $object->setHarvest($this->denormalizer->denormalize($data['harvest'], \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceReadHarvest::class, 'json', $context));
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('license', $data) && $data['license'] !== null) {
            $object->setLicense($data['license']);
        } elseif (\array_key_exists('license', $data) && $data['license'] === null) {
            $object->setLicense(null);
        }
        if (\array_key_exists('machine_documentation_url', $data) && $data['machine_documentation_url'] !== null) {
            $object->setMachineDocumentationUrl($data['machine_documentation_url']);
        } elseif (\array_key_exists('machine_documentation_url', $data) && $data['machine_documentation_url'] === null) {
            $object->setMachineDocumentationUrl(null);
        }
        if (\array_key_exists('metadata_modified_at', $data)) {
            $object->setMetadataModifiedAt(new \DateTime($data['metadata_modified_at']));
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
        if (\array_key_exists('permissions', $data)) {
            $object->setPermissions($this->denormalizer->denormalize($data['permissions'], \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceReadPermissions::class, 'json', $context));
        }
        if (\array_key_exists('private', $data) && $data['private'] !== null) {
            $object->setPrivate($data['private']);
        } elseif (\array_key_exists('private', $data) && $data['private'] === null) {
            $object->setPrivate(null);
        }
        if (\array_key_exists('rate_limiting', $data) && $data['rate_limiting'] !== null) {
            $object->setRateLimiting($data['rate_limiting']);
        } elseif (\array_key_exists('rate_limiting', $data) && $data['rate_limiting'] === null) {
            $object->setRateLimiting(null);
        }
        if (\array_key_exists('rate_limiting_url', $data) && $data['rate_limiting_url'] !== null) {
            $object->setRateLimitingUrl($data['rate_limiting_url']);
        } elseif (\array_key_exists('rate_limiting_url', $data) && $data['rate_limiting_url'] === null) {
            $object->setRateLimitingUrl(null);
        }
        if (\array_key_exists('self_api_url', $data) && $data['self_api_url'] !== null) {
            $object->setSelfApiUrl($data['self_api_url']);
        } elseif (\array_key_exists('self_api_url', $data) && $data['self_api_url'] === null) {
            $object->setSelfApiUrl(null);
        }
        if (\array_key_exists('self_web_url', $data) && $data['self_web_url'] !== null) {
            $object->setSelfWebUrl($data['self_web_url']);
        } elseif (\array_key_exists('self_web_url', $data) && $data['self_web_url'] === null) {
            $object->setSelfWebUrl(null);
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
        if (\array_key_exists('technical_documentation_url', $data) && $data['technical_documentation_url'] !== null) {
            $object->setTechnicalDocumentationUrl($data['technical_documentation_url']);
        } elseif (\array_key_exists('technical_documentation_url', $data) && $data['technical_documentation_url'] === null) {
            $object->setTechnicalDocumentationUrl(null);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('accessAudiences') && null !== $data->getAccessAudiences()) {
            $values = [];
            foreach ($data->getAccessAudiences() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['access_audiences'] = $values;
        }
        if ($data->isInitialized('accessType')) {
            $dataArray['access_type'] = $data->getAccessType();
        }
        if ($data->isInitialized('accessTypeReason')) {
            $dataArray['access_type_reason'] = $data->getAccessTypeReason();
        }
        if ($data->isInitialized('accessTypeReasonCategory')) {
            $dataArray['access_type_reason_category'] = $data->getAccessTypeReasonCategory();
        }
        if ($data->isInitialized('acronym')) {
            $dataArray['acronym'] = $data->getAcronym();
        }
        if ($data->isInitialized('archivedAt')) {
            $dataArray['archived_at'] = $data->getArchivedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('authorizationRequestUrl')) {
            $dataArray['authorization_request_url'] = $data->getAuthorizationRequestUrl();
        }
        if ($data->isInitialized('availability')) {
            $dataArray['availability'] = $data->getAvailability();
        }
        if ($data->isInitialized('availabilityUrl')) {
            $dataArray['availability_url'] = $data->getAvailabilityUrl();
        }
        if ($data->isInitialized('baseApiUrl')) {
            $dataArray['base_api_url'] = $data->getBaseApiUrl();
        }
        if ($data->isInitialized('businessDocumentationUrl')) {
            $dataArray['business_documentation_url'] = $data->getBusinessDocumentationUrl();
        }
        if ($data->isInitialized('contactPoints') && null !== $data->getContactPoints()) {
            $values_1 = [];
            foreach ($data->getContactPoints() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['contact_points'] = $values_1;
        }
        if ($data->isInitialized('datasets') && null !== $data->getDatasets()) {
            $dataArray['datasets'] = $data->getDatasets();
        }
        if ($data->isInitialized('deletedAt')) {
            $dataArray['deleted_at'] = $data->getDeletedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('description')) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('extras') && null !== $data->getExtras()) {
            $dataArray['extras'] = $data->getExtras();
        }
        if ($data->isInitialized('format')) {
            $dataArray['format'] = $data->getFormat();
        }
        if ($data->isInitialized('license')) {
            $dataArray['license'] = $data->getLicense();
        }
        if ($data->isInitialized('machineDocumentationUrl')) {
            $dataArray['machine_documentation_url'] = $data->getMachineDocumentationUrl();
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
        if ($data->isInitialized('rateLimiting')) {
            $dataArray['rate_limiting'] = $data->getRateLimiting();
        }
        if ($data->isInitialized('rateLimitingUrl')) {
            $dataArray['rate_limiting_url'] = $data->getRateLimitingUrl();
        }
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values_2 = [];
            foreach ($data->getTags() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['tags'] = $values_2;
        }
        if ($data->isInitialized('technicalDocumentationUrl')) {
            $dataArray['technical_documentation_url'] = $data->getTechnicalDocumentationUrl();
        }
        $dataArray['title'] = $data->getTitle();

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\DataserviceRead::class => false];
    }
}
