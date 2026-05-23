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

class DatasetReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\DatasetRead::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\DatasetRead::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\DatasetRead();
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
        if (\array_key_exists('archived', $data) && $data['archived'] !== null) {
            $object->setArchived(new \DateTime($data['archived']));
        } elseif (\array_key_exists('archived', $data) && $data['archived'] === null) {
            $object->setArchived(null);
        }
        if (\array_key_exists('authorization_request_url', $data) && $data['authorization_request_url'] !== null) {
            $object->setAuthorizationRequestUrl($data['authorization_request_url']);
        } elseif (\array_key_exists('authorization_request_url', $data) && $data['authorization_request_url'] === null) {
            $object->setAuthorizationRequestUrl(null);
        }
        if (\array_key_exists('badges', $data)) {
            $values_1 = [];
            foreach ($data['badges'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Ecourty\DataGouv\DataGouv\Client\Model\DatasetReadBadgesItem::class, 'json', $context);
            }
            $object->setBadges($values_1);
        }
        if (\array_key_exists('contact_points', $data)) {
            $values_2 = [];
            foreach ($data['contact_points'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Ecourty\DataGouv\DataGouv\Client\Model\ContactPointReference::class, 'json', $context);
            }
            $object->setContactPoints($values_2);
        }
        if (\array_key_exists('created_at_internal', $data)) {
            $object->setCreatedAtInternal(new \DateTime($data['created_at_internal']));
        }
        if (\array_key_exists('deleted', $data) && $data['deleted'] !== null) {
            $object->setDeleted(new \DateTime($data['deleted']));
        } elseif (\array_key_exists('deleted', $data) && $data['deleted'] === null) {
            $object->setDeleted(null);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('description_short', $data) && $data['description_short'] !== null) {
            $object->setDescriptionShort($data['description_short']);
        } elseif (\array_key_exists('description_short', $data) && $data['description_short'] === null) {
            $object->setDescriptionShort(null);
        }
        if (\array_key_exists('ext', $data)) {
            $object->setExt($data['ext']);
        }
        if (\array_key_exists('extras', $data)) {
            $object->setExtras($data['extras']);
        }
        if (\array_key_exists('featured', $data)) {
            $object->setFeatured($data['featured']);
        }
        if (\array_key_exists('frequency', $data) && $data['frequency'] !== null) {
            $object->setFrequency($data['frequency']);
        } elseif (\array_key_exists('frequency', $data) && $data['frequency'] === null) {
            $object->setFrequency(null);
        }
        if (\array_key_exists('frequency_date', $data) && $data['frequency_date'] !== null) {
            $object->setFrequencyDate(new \DateTime($data['frequency_date']));
        } elseif (\array_key_exists('frequency_date', $data) && $data['frequency_date'] === null) {
            $object->setFrequencyDate(null);
        }
        if (\array_key_exists('harvest', $data)) {
            $object->setHarvest($this->denormalizer->denormalize($data['harvest'], \Ecourty\DataGouv\DataGouv\Client\Model\HarvestDatasetMetadataRead::class, 'json', $context));
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('last_modified_internal', $data)) {
            $object->setLastModifiedInternal(new \DateTime($data['last_modified_internal']));
        }
        if (\array_key_exists('last_update', $data)) {
            $object->setLastUpdate(new \DateTime($data['last_update']));
        }
        if (\array_key_exists('license', $data) && $data['license'] !== null) {
            $object->setLicense($data['license']);
        } elseif (\array_key_exists('license', $data) && $data['license'] === null) {
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
        if (\array_key_exists('private', $data) && $data['private'] !== null) {
            $object->setPrivate($data['private']);
        } elseif (\array_key_exists('private', $data) && $data['private'] === null) {
            $object->setPrivate(null);
        }
        if (\array_key_exists('quality_cached', $data)) {
            $object->setQualityCached($data['quality_cached']);
        }
        if (\array_key_exists('resources', $data)) {
            $values_3 = [];
            foreach ($data['resources'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Ecourty\DataGouv\DataGouv\Client\Model\ResourceRead::class, 'json', $context);
            }
            $object->setResources($values_3);
        }
        if (\array_key_exists('schema', $data)) {
            $object->setSchema($this->denormalizer->denormalize($data['schema'], \Ecourty\DataGouv\DataGouv\Client\Model\SchemaRead::class, 'json', $context));
        }
        if (\array_key_exists('slug', $data)) {
            $object->setSlug($data['slug']);
        }
        if (\array_key_exists('spatial', $data)) {
            $object->setSpatial($this->denormalizer->denormalize($data['spatial'], \Ecourty\DataGouv\DataGouv\Client\Model\SpatialCoverage::class, 'json', $context));
        }
        if (\array_key_exists('tags', $data)) {
            $values_4 = [];
            foreach ($data['tags'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setTags($values_4);
        }
        if (\array_key_exists('temporal_coverage', $data)) {
            $object->setTemporalCoverage($this->denormalizer->denormalize($data['temporal_coverage'], \Ecourty\DataGouv\DataGouv\Client\Model\TemporalCoverage::class, 'json', $context));
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
        if ($data->isInitialized('archived')) {
            $dataArray['archived'] = $data->getArchived()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('authorizationRequestUrl')) {
            $dataArray['authorization_request_url'] = $data->getAuthorizationRequestUrl();
        }
        if ($data->isInitialized('contactPoints') && null !== $data->getContactPoints()) {
            $values_1 = [];
            foreach ($data->getContactPoints() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['contact_points'] = $values_1;
        }
        $dataArray['created_at_internal'] = $data->getCreatedAtInternal()->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('deleted')) {
            $dataArray['deleted'] = $data->getDeleted()?->format('Y-m-d\TH:i:sP');
        }
        $dataArray['description'] = $data->getDescription();
        if ($data->isInitialized('descriptionShort')) {
            $dataArray['description_short'] = $data->getDescriptionShort();
        }
        if ($data->isInitialized('ext') && null !== $data->getExt()) {
            $dataArray['ext'] = $data->getExt();
        }
        if ($data->isInitialized('extras') && null !== $data->getExtras()) {
            $dataArray['extras'] = $data->getExtras();
        }
        $dataArray['featured'] = $data->getFeatured();
        if ($data->isInitialized('frequency')) {
            $dataArray['frequency'] = $data->getFrequency();
        }
        if ($data->isInitialized('frequencyDate')) {
            $dataArray['frequency_date'] = $data->getFrequencyDate()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('harvest') && null !== $data->getHarvest()) {
            $dataArray['harvest'] = $this->normalizer->normalize($data->getHarvest(), 'json', $context);
        }
        $dataArray['last_modified_internal'] = $data->getLastModifiedInternal()->format('Y-m-d\TH:i:sP');
        $dataArray['last_update'] = $data->getLastUpdate()->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('license')) {
            $dataArray['license'] = $data->getLicense();
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
        if ($data->isInitialized('qualityCached') && null !== $data->getQualityCached()) {
            $dataArray['quality_cached'] = $data->getQualityCached();
        }
        if ($data->isInitialized('resources') && null !== $data->getResources()) {
            $values_2 = [];
            foreach ($data->getResources() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['resources'] = $values_2;
        }
        if ($data->isInitialized('schema') && null !== $data->getSchema()) {
            $dataArray['schema'] = $this->normalizer->normalize($data->getSchema(), 'json', $context);
        }
        $dataArray['slug'] = $data->getSlug();
        if ($data->isInitialized('spatial') && null !== $data->getSpatial()) {
            $dataArray['spatial'] = $this->normalizer->normalize($data->getSpatial(), 'json', $context);
        }
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values_3 = [];
            foreach ($data->getTags() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['tags'] = $values_3;
        }
        if ($data->isInitialized('temporalCoverage') && null !== $data->getTemporalCoverage()) {
            $dataArray['temporal_coverage'] = $this->normalizer->normalize($data->getTemporalCoverage(), 'json', $context);
        }
        $dataArray['title'] = $data->getTitle();

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\DatasetRead::class => false];
    }
}
