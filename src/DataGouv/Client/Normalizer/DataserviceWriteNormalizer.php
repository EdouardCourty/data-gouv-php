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
class DataserviceWriteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceWrite::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceWrite::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceWrite();
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
            $data['availability'] = (double) $data['availability'];
        }
        if (\array_key_exists('private', $data) && \is_int($data['private'])) {
            $data['private'] = (bool) $data['private'];
        }
        if (\array_key_exists('access_audiences', $data)) {
            $values = [];
            foreach ($data['access_audiences'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Ecourty\DataGouv\DataGouv\Client\Model\AccessAudienceWrite::class, 'json', $context);
            }
            $object->setAccessAudiences($values);
        }
        if (\array_key_exists('access_type', $data) && $data['access_type'] !== null) {
            $object->setAccessType($data['access_type']);
        }
        elseif (\array_key_exists('access_type', $data) && $data['access_type'] === null) {
            $object->setAccessType(null);
        }
        if (\array_key_exists('access_type_reason', $data) && $data['access_type_reason'] !== null) {
            $object->setAccessTypeReason($data['access_type_reason']);
        }
        elseif (\array_key_exists('access_type_reason', $data) && $data['access_type_reason'] === null) {
            $object->setAccessTypeReason(null);
        }
        if (\array_key_exists('access_type_reason_category', $data) && $data['access_type_reason_category'] !== null) {
            $object->setAccessTypeReasonCategory($data['access_type_reason_category']);
        }
        elseif (\array_key_exists('access_type_reason_category', $data) && $data['access_type_reason_category'] === null) {
            $object->setAccessTypeReasonCategory(null);
        }
        if (\array_key_exists('acronym', $data) && $data['acronym'] !== null) {
            $object->setAcronym($data['acronym']);
        }
        elseif (\array_key_exists('acronym', $data) && $data['acronym'] === null) {
            $object->setAcronym(null);
        }
        if (\array_key_exists('archived_at', $data) && $data['archived_at'] !== null) {
            $object->setArchivedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['archived_at']));
        }
        elseif (\array_key_exists('archived_at', $data) && $data['archived_at'] === null) {
            $object->setArchivedAt(null);
        }
        if (\array_key_exists('authorization_request_url', $data) && $data['authorization_request_url'] !== null) {
            $object->setAuthorizationRequestUrl($data['authorization_request_url']);
        }
        elseif (\array_key_exists('authorization_request_url', $data) && $data['authorization_request_url'] === null) {
            $object->setAuthorizationRequestUrl(null);
        }
        if (\array_key_exists('availability', $data) && $data['availability'] !== null) {
            $object->setAvailability($data['availability']);
        }
        elseif (\array_key_exists('availability', $data) && $data['availability'] === null) {
            $object->setAvailability(null);
        }
        if (\array_key_exists('availability_url', $data) && $data['availability_url'] !== null) {
            $object->setAvailabilityUrl($data['availability_url']);
        }
        elseif (\array_key_exists('availability_url', $data) && $data['availability_url'] === null) {
            $object->setAvailabilityUrl(null);
        }
        if (\array_key_exists('base_api_url', $data) && $data['base_api_url'] !== null) {
            $object->setBaseApiUrl($data['base_api_url']);
        }
        elseif (\array_key_exists('base_api_url', $data) && $data['base_api_url'] === null) {
            $object->setBaseApiUrl(null);
        }
        if (\array_key_exists('business_documentation_url', $data) && $data['business_documentation_url'] !== null) {
            $object->setBusinessDocumentationUrl($data['business_documentation_url']);
        }
        elseif (\array_key_exists('business_documentation_url', $data) && $data['business_documentation_url'] === null) {
            $object->setBusinessDocumentationUrl(null);
        }
        if (\array_key_exists('contact_points', $data)) {
            $values_1 = [];
            foreach ($data['contact_points'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setContactPoints($values_1);
        }
        if (\array_key_exists('datasets', $data)) {
            $values_2 = [];
            foreach ($data['datasets'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setDatasets($values_2);
        }
        if (\array_key_exists('deleted_at', $data) && $data['deleted_at'] !== null) {
            $object->setDeletedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['deleted_at']));
        }
        elseif (\array_key_exists('deleted_at', $data) && $data['deleted_at'] === null) {
            $object->setDeletedAt(null);
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
        if (\array_key_exists('format', $data) && $data['format'] !== null) {
            $object->setFormat($data['format']);
        }
        elseif (\array_key_exists('format', $data) && $data['format'] === null) {
            $object->setFormat(null);
        }
        if (\array_key_exists('license', $data) && $data['license'] !== null) {
            $object->setLicense($data['license']);
        }
        elseif (\array_key_exists('license', $data) && $data['license'] === null) {
            $object->setLicense(null);
        }
        if (\array_key_exists('machine_documentation_url', $data) && $data['machine_documentation_url'] !== null) {
            $object->setMachineDocumentationUrl($data['machine_documentation_url']);
        }
        elseif (\array_key_exists('machine_documentation_url', $data) && $data['machine_documentation_url'] === null) {
            $object->setMachineDocumentationUrl(null);
        }
        if (\array_key_exists('organization', $data) && $data['organization'] !== null) {
            $object->setOrganization($data['organization']);
        }
        elseif (\array_key_exists('organization', $data) && $data['organization'] === null) {
            $object->setOrganization(null);
        }
        if (\array_key_exists('owner', $data) && $data['owner'] !== null) {
            $object->setOwner($data['owner']);
        }
        elseif (\array_key_exists('owner', $data) && $data['owner'] === null) {
            $object->setOwner(null);
        }
        if (\array_key_exists('private', $data) && $data['private'] !== null) {
            $object->setPrivate($data['private']);
        }
        elseif (\array_key_exists('private', $data) && $data['private'] === null) {
            $object->setPrivate(null);
        }
        if (\array_key_exists('rate_limiting', $data) && $data['rate_limiting'] !== null) {
            $object->setRateLimiting($data['rate_limiting']);
        }
        elseif (\array_key_exists('rate_limiting', $data) && $data['rate_limiting'] === null) {
            $object->setRateLimiting(null);
        }
        if (\array_key_exists('rate_limiting_url', $data) && $data['rate_limiting_url'] !== null) {
            $object->setRateLimitingUrl($data['rate_limiting_url']);
        }
        elseif (\array_key_exists('rate_limiting_url', $data) && $data['rate_limiting_url'] === null) {
            $object->setRateLimitingUrl(null);
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
        }
        elseif (\array_key_exists('technical_documentation_url', $data) && $data['technical_documentation_url'] === null) {
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
                $values_1[] = $value_1;
            }
            $dataArray['contact_points'] = $values_1;
        }
        if ($data->isInitialized('datasets') && null !== $data->getDatasets()) {
            $values_2 = [];
            foreach ($data->getDatasets() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['datasets'] = $values_2;
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
        if ($data->isInitialized('organization')) {
            $dataArray['organization'] = $data->getOrganization();
        }
        if ($data->isInitialized('owner')) {
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
            $values_3 = [];
            foreach ($data->getTags() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['tags'] = $values_3;
        }
        if ($data->isInitialized('technicalDocumentationUrl')) {
            $dataArray['technical_documentation_url'] = $data->getTechnicalDocumentationUrl();
        }
        $dataArray['title'] = $data->getTitle();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\DataserviceWrite::class => false];
    }
}