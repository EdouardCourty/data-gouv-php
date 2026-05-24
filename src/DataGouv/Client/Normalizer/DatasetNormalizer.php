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
class DatasetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\Dataset::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\Dataset::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\Dataset();
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
        if (\array_key_exists('access_audiences', $data)) {
            $values = [];
            foreach ($data['access_audiences'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Ecourty\DataGouv\DataGouv\Client\Model\AccessAudienceRead::class, 'json', $context);
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
        if (\array_key_exists('archived', $data) && $data['archived'] !== null) {
            $object->setArchived((new \DateTime($data['archived'])));
        }
        elseif (\array_key_exists('archived', $data) && $data['archived'] === null) {
            $object->setArchived(null);
        }
        if (\array_key_exists('authorization_request_url', $data) && $data['authorization_request_url'] !== null) {
            $object->setAuthorizationRequestUrl($data['authorization_request_url']);
        }
        elseif (\array_key_exists('authorization_request_url', $data) && $data['authorization_request_url'] === null) {
            $object->setAuthorizationRequestUrl(null);
        }
        if (\array_key_exists('badges', $data)) {
            $values_1 = [];
            foreach ($data['badges'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Ecourty\DataGouv\DataGouv\Client\Model\BadgeRead::class, 'json', $context);
            }
            $object->setBadges($values_1);
        }
        if (\array_key_exists('community_resources', $data)) {
            $values_2 = [];
            foreach ($data['community_resources'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setCommunityResources($values_2);
        }
        if (\array_key_exists('contact_points', $data)) {
            $values_3 = [];
            foreach ($data['contact_points'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Ecourty\DataGouv\DataGouv\Client\Model\DatasetContactPointsItem::class, 'json', $context);
            }
            $object->setContactPoints($values_3);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt((new \DateTime($data['created_at'])));
        }
        if (\array_key_exists('deleted', $data) && $data['deleted'] !== null) {
            $object->setDeleted((new \DateTime($data['deleted'])));
        }
        elseif (\array_key_exists('deleted', $data) && $data['deleted'] === null) {
            $object->setDeleted(null);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('description_short', $data) && $data['description_short'] !== null) {
            $object->setDescriptionShort($data['description_short']);
        }
        elseif (\array_key_exists('description_short', $data) && $data['description_short'] === null) {
            $object->setDescriptionShort(null);
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
        if (\array_key_exists('frequency', $data)) {
            $object->setFrequency($data['frequency']);
        }
        if (\array_key_exists('frequency_date', $data) && $data['frequency_date'] !== null) {
            $object->setFrequencyDate((new \DateTime($data['frequency_date'])));
        }
        elseif (\array_key_exists('frequency_date', $data) && $data['frequency_date'] === null) {
            $object->setFrequencyDate(null);
        }
        if (\array_key_exists('harvest', $data)) {
            $object->setHarvest($this->denormalizer->denormalize($data['harvest'], \Ecourty\DataGouv\DataGouv\Client\Model\DatasetHarvest::class, 'json', $context));
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('internal', $data)) {
            $object->setInternal($this->denormalizer->denormalize($data['internal'], \Ecourty\DataGouv\DataGouv\Client\Model\DatasetInternal::class, 'json', $context));
        }
        if (\array_key_exists('last_modified', $data)) {
            $object->setLastModified((new \DateTime($data['last_modified'])));
        }
        if (\array_key_exists('last_update', $data)) {
            $object->setLastUpdate((new \DateTime($data['last_update'])));
        }
        if (\array_key_exists('license', $data) && $data['license'] !== null) {
            $object->setLicense($data['license']);
        }
        elseif (\array_key_exists('license', $data) && $data['license'] === null) {
            $object->setLicense(null);
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
            $object->setPermissions($this->denormalizer->denormalize($data['permissions'], \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPermissions::class, 'json', $context));
        }
        if (\array_key_exists('private', $data) && $data['private'] !== null) {
            $object->setPrivate($data['private']);
        }
        elseif (\array_key_exists('private', $data) && $data['private'] === null) {
            $object->setPrivate(null);
        }
        if (\array_key_exists('quality', $data)) {
            $object->setQuality($data['quality']);
        }
        if (\array_key_exists('resources', $data)) {
            $values_4 = [];
            foreach ($data['resources'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Ecourty\DataGouv\DataGouv\Client\Model\DatasetResourcesItem::class, 'json', $context);
            }
            $object->setResources($values_4);
        }
        if (\array_key_exists('schema', $data)) {
            $object->setSchema($this->denormalizer->denormalize($data['schema'], \Ecourty\DataGouv\DataGouv\Client\Model\DatasetSchema::class, 'json', $context));
        }
        if (\array_key_exists('slug', $data) && $data['slug'] !== null) {
            $object->setSlug($data['slug']);
        }
        elseif (\array_key_exists('slug', $data) && $data['slug'] === null) {
            $object->setSlug(null);
        }
        if (\array_key_exists('spatial', $data)) {
            $object->setSpatial($this->denormalizer->denormalize($data['spatial'], \Ecourty\DataGouv\DataGouv\Client\Model\DatasetSpatial::class, 'json', $context));
        }
        if (\array_key_exists('tags', $data)) {
            $values_5 = [];
            foreach ($data['tags'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setTags($values_5);
        }
        if (\array_key_exists('temporal_coverage', $data)) {
            $object->setTemporalCoverage($this->denormalizer->denormalize($data['temporal_coverage'], \Ecourty\DataGouv\DataGouv\Client\Model\DatasetTemporalCoverage::class, 'json', $context));
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
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
        if ($data->isInitialized('archived')) {
            $dataArray['archived'] = $data->getArchived()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('authorizationRequestUrl')) {
            $dataArray['authorization_request_url'] = $data->getAuthorizationRequestUrl();
        }
        if ($data->isInitialized('communityResources') && null !== $data->getCommunityResources()) {
            $values_1 = [];
            foreach ($data->getCommunityResources() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['community_resources'] = $values_1;
        }
        if ($data->isInitialized('contactPoints') && null !== $data->getContactPoints()) {
            $values_2 = [];
            foreach ($data->getContactPoints() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['contact_points'] = $values_2;
        }
        $dataArray['description'] = $data->getDescription();
        if ($data->isInitialized('descriptionShort')) {
            $dataArray['description_short'] = $data->getDescriptionShort();
        }
        if ($data->isInitialized('extras') && null !== $data->getExtras()) {
            $dataArray['extras'] = $data->getExtras();
        }
        if ($data->isInitialized('featured')) {
            $dataArray['featured'] = $data->getFeatured();
        }
        $dataArray['frequency'] = $data->getFrequency();
        if ($data->isInitialized('frequencyDate')) {
            $dataArray['frequency_date'] = $data->getFrequencyDate()?->format('Y-m-d\TH:i:sP');
        }
        $dataArray['last_update'] = $data->getLastUpdate()->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('license')) {
            $dataArray['license'] = $data->getLicense();
        }
        if ($data->isInitialized('metrics') && null !== $data->getMetrics()) {
            $dataArray['metrics'] = $data->getMetrics();
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
        if ($data->isInitialized('private')) {
            $dataArray['private'] = $data->getPrivate();
        }
        if ($data->isInitialized('resources') && null !== $data->getResources()) {
            $values_3 = [];
            foreach ($data->getResources() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['resources'] = $values_3;
        }
        if ($data->isInitialized('schema') && null !== $data->getSchema()) {
            $dataArray['schema'] = $this->normalizer->normalize($data->getSchema(), 'json', $context);
        }
        if ($data->isInitialized('spatial') && null !== $data->getSpatial()) {
            $dataArray['spatial'] = $this->normalizer->normalize($data->getSpatial(), 'json', $context);
        }
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values_4 = [];
            foreach ($data->getTags() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['tags'] = $values_4;
        }
        if ($data->isInitialized('temporalCoverage') && null !== $data->getTemporalCoverage()) {
            $dataArray['temporal_coverage'] = $this->normalizer->normalize($data->getTemporalCoverage(), 'json', $context);
        }
        $dataArray['title'] = $data->getTitle();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\Dataset::class => false];
    }
}