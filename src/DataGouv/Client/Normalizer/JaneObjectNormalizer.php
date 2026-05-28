<?php

namespace Ecourty\DataGouv\DataGouv\Client\Normalizer;

use Ecourty\DataGouv\DataGouv\Client\Runtime\Normalizer\CheckArray;
use Ecourty\DataGouv\DataGouv\Client\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \Ecourty\DataGouv\DataGouv\Client\Model\AccessAudienceRead::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\AccessAudienceReadNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\AccessAudienceWrite::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\AccessAudienceWriteNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\Activity::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ActivityNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ActivityPage::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ActivityPageNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ApiTokenRead::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ApiTokenReadNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ApiTokenWrite::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ApiTokenWriteNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ApiTokenCreated::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ApiTokenCreatedNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\AssignmentRead::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\AssignmentReadNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\BadgeRead::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\BadgeReadNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\BadgeWrite::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\BadgeWriteNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\BaseReference::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\BaseReferenceNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\CatalogSchema::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\CatalogSchemaNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\CatalogSchemaExample::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\CatalogSchemaExampleNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\CatalogSchemaVersion::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\CatalogSchemaVersionNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ChartRead::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ChartReadNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ChartReadPermissions::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ChartReadPermissionsNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ChartWrite::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ChartWriteNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ChartPage::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ChartPageNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\Checksum::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ChecksumNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\CommunityResource::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\CommunityResourceNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\CommunityResourcePage::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\CommunityResourcePageNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ContactPointRead::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ContactPointReadNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ContactPointWrite::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ContactPointWriteNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ContactPointPage::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ContactPointPageNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ContactPointReference::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ContactPointReferenceNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ContactPointRoles::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ContactPointRolesNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\Crontab::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\CrontabNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DataSeriesRead::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DataSeriesReadNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DataSeriesWrite::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DataSeriesWriteNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceRead::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DataserviceReadNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceReadBadgesItem::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DataserviceReadBadgesItemNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceReadHarvest::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DataserviceReadHarvestNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceReadPermissions::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DataserviceReadPermissionsNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceWrite::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DataserviceWriteNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceDatasetsAdd::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DataserviceDatasetsAddNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DataservicePage::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DataservicePageNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DataservicePermissions::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DataservicePermissionsNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DataservicePreview::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DataservicePreviewNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceReference::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DataserviceReferenceNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\Dataset::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DatasetNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetContactPointsItem::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DatasetContactPointsItemNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetHarvest::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DatasetHarvestNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetInternal::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DatasetInternalNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetResourcesItem::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DatasetResourcesItemNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetSchema::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DatasetSchemaNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetSpatial::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DatasetSpatialNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetTemporalCoverage::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DatasetTemporalCoverageNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetRead::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DatasetReadNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetReadBadgesItem::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DatasetReadBadgesItemNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetInternals::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DatasetInternalsNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPage::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DatasetPageNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPermissions::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DatasetPermissionsNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPreview::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DatasetPreviewNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPreviewContactPointsItem::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DatasetPreviewContactPointsItemNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPreviewHarvest::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DatasetPreviewHarvestNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPreviewInternal::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DatasetPreviewInternalNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPreviewResourcesItem::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DatasetPreviewResourcesItemNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPreviewSchema::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DatasetPreviewSchemaNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPreviewSpatial::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DatasetPreviewSpatialNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPreviewTemporalCoverage::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DatasetPreviewTemporalCoverageNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetReference::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DatasetReferenceNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetSuggestion::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DatasetSuggestionNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\Discussion::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DiscussionNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionSubject::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DiscussionSubjectNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionEditComment::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DiscussionEditCommentNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionMessage::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DiscussionMessageNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionMessagePermissions::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DiscussionMessagePermissionsNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionPage::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DiscussionPageNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionPermissions::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DiscussionPermissionsNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionResponse::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DiscussionResponseNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionStart::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DiscussionStartNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionStartSubject::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\DiscussionStartSubjectNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\Error::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ErrorNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\Follow::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\FollowNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\FollowPage::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\FollowPageNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\Frequency::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\FrequencyNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\GenericReference::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\GenericReferenceNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\GeoGranularity::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\GeoGranularityNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\GeoJSON::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\GeoJSONNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\GeoJSONFeature::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\GeoJSONFeatureNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\GeoJSONFeatureCollection::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\GeoJSONFeatureCollectionNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\GeoLevel::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\GeoLevelNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestBackend::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\HarvestBackendNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestDatasetMetadata::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\HarvestDatasetMetadataNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestDatasetMetadataRead::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\HarvestDatasetMetadataReadNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestError::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\HarvestErrorNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestExtraConfig::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\HarvestExtraConfigNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestFeature::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\HarvestFeatureNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestFilter::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\HarvestFilterNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestItem::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\HarvestItemNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestItemPreview::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\HarvestItemPreviewNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestItemPreviewDataservice::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\HarvestItemPreviewDataserviceNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestItemPreviewDataset::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\HarvestItemPreviewDatasetNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestJob::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\HarvestJobNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestJobPage::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\HarvestJobPageNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestJobPreview::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\HarvestJobPreviewNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestMetadataRead::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\HarvestMetadataReadNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestResourceMetadata::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\HarvestResourceMetadataNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\HarvestSourceNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSourceLastJob::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\HarvestSourceLastJobNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSourcePermissions::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\HarvestSourcePermissionsNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSourceValidation::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\HarvestSourceValidationNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSourcePage::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\HarvestSourcePageNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\Interval::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\IntervalNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\Job::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\JobNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\LazyReference::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\LazyReferenceNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\License::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\LicenseNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\MemberRead::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\MemberReadNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\MemberWrite::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\MemberWriteNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\MembershipInvite::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\MembershipInviteNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\MembershipRequest::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\MembershipRequestNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\MembershipRequestRead::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\MembershipRequestReadNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\MembershipRequestWrite::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\MembershipRequestWriteNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ModelReference::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ModelReferenceNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\MyMetrics::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\MyMetricsNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\NotificationRead::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\NotificationReadNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\NotificationPage::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\NotificationPageNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationRead::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\OrganizationReadNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReadBadgesItem::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\OrganizationReadBadgesItemNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReadMembersItem::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\OrganizationReadMembersItemNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReadPermissions::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\OrganizationReadPermissionsNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReadRequestsItem::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\OrganizationReadRequestsItemNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReadTeamsItem::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\OrganizationReadTeamsItemNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationWrite::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\OrganizationWriteNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationPage::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\OrganizationPageNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationPermissions::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\OrganizationPermissionsNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReference::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\OrganizationReferenceNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReferenceBadgesItem::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\OrganizationReferenceBadgesItemNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReferencePermissions::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\OrganizationReferencePermissionsNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationRole::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\OrganizationRoleNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationSuggestion::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\OrganizationSuggestionNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\PendingInvitation::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\PendingInvitationNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\PostRead::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\PostReadNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\PostReadDatasetsItem::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\PostReadDatasetsItemNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\PostWrite::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\PostWriteNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\PostPage::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\PostPageNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\RefuseMembership::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\RefuseMembershipNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ReportRead::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ReportReadNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ReportWrite::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ReportWriteNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ReportPage::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ReportPageNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\Resource::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ResourceNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ResourceChecksum::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ResourceChecksumNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ResourceHarvest::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ResourceHarvestNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ResourceInternal::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ResourceInternalNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ResourceSchema::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ResourceSchemaNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ResourceRead::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ResourceReadNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ResourceInternals::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ResourceInternalsNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ResourceType::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ResourceTypeNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ReuseRead::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ReuseReadNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ReuseReadBadgesItem::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ReuseReadBadgesItemNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ReuseReadPermissions::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ReuseReadPermissionsNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ReuseWrite::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ReuseWriteNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ReusePage::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ReusePageNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ReusePermissions::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ReusePermissionsNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ReuseReference::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ReuseReferenceNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ReuseSuggestion::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ReuseSuggestionNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ReuseTopic::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ReuseTopicNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ReuseType::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ReuseTypeNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\Schema::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\SchemaNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\SchemaRead::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\SchemaReadNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\SiteRead::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\SiteReadNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\SiteWrite::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\SiteWriteNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\SpatialCoverage::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\SpatialCoverageNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\SpatialCoverageGeom::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\SpatialCoverageGeomNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\Task::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\TaskNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\TeamRead::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\TeamReadNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\TemporalCoverage::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\TemporalCoverageNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\TerritorySuggestion::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\TerritorySuggestionNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\Transfer::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\TransferNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\TransferOwner::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\TransferOwnerNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\TransferRecipient::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\TransferRecipientNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\TransferSubject::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\TransferSubjectNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\TransferRequest::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\TransferRequestNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\TransferRequestRecipient::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\TransferRequestRecipientNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\TransferRequestSubject::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\TransferRequestSubjectNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\TransferResponse::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\TransferResponseNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\UploadStatus::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\UploadStatusNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\UploadedCommunityResource::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\UploadedCommunityResourceNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\UploadedImage::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\UploadedImageNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\UploadedResource::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\UploadedResourceNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\User::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\UserNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\UserPage::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\UserPageNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\UserReference::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\UserReferenceNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\UserRole::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\UserRoleNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\UserSuggestion::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\UserSuggestionNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\ValidationError::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\ValidationErrorNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\VisualizationPermissions::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\VisualizationPermissionsNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\XAxisRead::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\XAxisReadNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\XAxisWrite::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\XAxisWriteNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\YAxisRead::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\YAxisReadNormalizer::class,
        
        \Ecourty\DataGouv\DataGouv\Client\Model\YAxisWrite::class => \Ecourty\DataGouv\DataGouv\Client\Normalizer\YAxisWriteNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Ecourty\DataGouv\DataGouv\Client\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [
            
            \Ecourty\DataGouv\DataGouv\Client\Model\AccessAudienceRead::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\AccessAudienceWrite::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\Activity::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ActivityPage::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ApiTokenRead::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ApiTokenWrite::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ApiTokenCreated::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\AssignmentRead::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\BadgeRead::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\BadgeWrite::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\BaseReference::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\CatalogSchema::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\CatalogSchemaExample::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\CatalogSchemaVersion::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ChartRead::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ChartReadPermissions::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ChartWrite::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ChartPage::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\Checksum::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\CommunityResource::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\CommunityResourcePage::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ContactPointRead::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ContactPointWrite::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ContactPointPage::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ContactPointReference::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ContactPointRoles::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\Crontab::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DataSeriesRead::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DataSeriesWrite::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceRead::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceReadBadgesItem::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceReadHarvest::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceReadPermissions::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceWrite::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceDatasetsAdd::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DataservicePage::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DataservicePermissions::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DataservicePreview::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceReference::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\Dataset::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DatasetContactPointsItem::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DatasetHarvest::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DatasetInternal::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DatasetResourcesItem::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DatasetSchema::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DatasetSpatial::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DatasetTemporalCoverage::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DatasetRead::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DatasetReadBadgesItem::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DatasetInternals::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPage::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPermissions::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPreview::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPreviewContactPointsItem::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPreviewHarvest::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPreviewInternal::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPreviewResourcesItem::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPreviewSchema::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPreviewSpatial::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPreviewTemporalCoverage::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DatasetReference::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DatasetSuggestion::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\Discussion::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionSubject::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionEditComment::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionMessage::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionMessagePermissions::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionPage::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionPermissions::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionResponse::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionStart::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionStartSubject::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\Error::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\Follow::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\FollowPage::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\Frequency::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\GenericReference::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\GeoGranularity::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\GeoJSON::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\GeoJSONFeature::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\GeoJSONFeatureCollection::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\GeoLevel::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\HarvestBackend::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\HarvestDatasetMetadata::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\HarvestDatasetMetadataRead::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\HarvestError::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\HarvestExtraConfig::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\HarvestFeature::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\HarvestFilter::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\HarvestItem::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\HarvestItemPreview::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\HarvestItemPreviewDataservice::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\HarvestItemPreviewDataset::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\HarvestJob::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\HarvestJobPage::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\HarvestJobPreview::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\HarvestMetadataRead::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\HarvestResourceMetadata::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSourceLastJob::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSourcePermissions::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSourceValidation::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSourcePage::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\Interval::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\Job::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\LazyReference::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\License::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\MemberRead::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\MemberWrite::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\MembershipInvite::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\MembershipRequest::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\MembershipRequestRead::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\MembershipRequestWrite::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ModelReference::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\MyMetrics::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\NotificationRead::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\NotificationPage::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationRead::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReadBadgesItem::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReadMembersItem::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReadPermissions::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReadRequestsItem::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReadTeamsItem::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationWrite::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationPage::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationPermissions::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReference::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReferenceBadgesItem::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReferencePermissions::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationRole::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationSuggestion::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\PendingInvitation::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\PostRead::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\PostReadDatasetsItem::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\PostWrite::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\PostPage::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\RefuseMembership::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ReportRead::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ReportWrite::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ReportPage::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\Resource::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ResourceChecksum::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ResourceHarvest::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ResourceInternal::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ResourceSchema::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ResourceRead::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ResourceInternals::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ResourceType::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ReuseRead::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ReuseReadBadgesItem::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ReuseReadPermissions::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ReuseWrite::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ReusePage::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ReusePermissions::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ReuseReference::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ReuseSuggestion::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ReuseTopic::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ReuseType::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\Schema::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\SchemaRead::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\SiteRead::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\SiteWrite::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\SpatialCoverage::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\SpatialCoverageGeom::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\Task::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\TeamRead::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\TemporalCoverage::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\TerritorySuggestion::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\Transfer::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\TransferOwner::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\TransferRecipient::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\TransferSubject::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\TransferRequest::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\TransferRequestRecipient::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\TransferRequestSubject::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\TransferResponse::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\UploadStatus::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\UploadedCommunityResource::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\UploadedImage::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\UploadedResource::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\User::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\UserPage::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\UserReference::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\UserRole::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\UserSuggestion::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\ValidationError::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\VisualizationPermissions::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\XAxisRead::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\XAxisWrite::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\YAxisRead::class => false,
            \Ecourty\DataGouv\DataGouv\Client\Model\YAxisWrite::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}