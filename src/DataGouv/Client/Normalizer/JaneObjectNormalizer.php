<?php

declare(strict_types=1);

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
        \Ecourty\DataGouv\DataGouv\Client\Model\AccessAudienceRead::class => AccessAudienceReadNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\AccessAudienceWrite::class => AccessAudienceWriteNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\Activity::class => ActivityNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ActivityPage::class => ActivityPageNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ApiTokenRead::class => ApiTokenReadNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ApiTokenWrite::class => ApiTokenWriteNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ApiTokenCreated::class => ApiTokenCreatedNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\AssignmentRead::class => AssignmentReadNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\BadgeRead::class => BadgeReadNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\BadgeWrite::class => BadgeWriteNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\BaseReference::class => BaseReferenceNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\CatalogSchema::class => CatalogSchemaNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\CatalogSchemaExample::class => CatalogSchemaExampleNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\CatalogSchemaVersion::class => CatalogSchemaVersionNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ChartRead::class => ChartReadNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ChartReadPermissions::class => ChartReadPermissionsNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ChartWrite::class => ChartWriteNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ChartPage::class => ChartPageNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\Checksum::class => ChecksumNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\CommunityResource::class => CommunityResourceNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\CommunityResourcePage::class => CommunityResourcePageNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ContactPointRead::class => ContactPointReadNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ContactPointWrite::class => ContactPointWriteNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ContactPointPage::class => ContactPointPageNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ContactPointReference::class => ContactPointReferenceNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ContactPointRoles::class => ContactPointRolesNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\Crontab::class => CrontabNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DataSeriesRead::class => DataSeriesReadNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DataSeriesWrite::class => DataSeriesWriteNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceRead::class => DataserviceReadNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceReadBadgesItem::class => DataserviceReadBadgesItemNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceReadHarvest::class => DataserviceReadHarvestNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceReadPermissions::class => DataserviceReadPermissionsNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceWrite::class => DataserviceWriteNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceDatasetsAdd::class => DataserviceDatasetsAddNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DataservicePage::class => DataservicePageNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DataservicePermissions::class => DataservicePermissionsNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DataservicePreview::class => DataservicePreviewNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DataserviceReference::class => DataserviceReferenceNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\Dataset::class => DatasetNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetContactPointsItem::class => DatasetContactPointsItemNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetHarvest::class => DatasetHarvestNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetInternal::class => DatasetInternalNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetResourcesItem::class => DatasetResourcesItemNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetSchema::class => DatasetSchemaNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetSpatial::class => DatasetSpatialNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetTemporalCoverage::class => DatasetTemporalCoverageNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetRead::class => DatasetReadNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetReadBadgesItem::class => DatasetReadBadgesItemNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetInternals::class => DatasetInternalsNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPage::class => DatasetPageNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPermissions::class => DatasetPermissionsNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPreview::class => DatasetPreviewNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPreviewContactPointsItem::class => DatasetPreviewContactPointsItemNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPreviewHarvest::class => DatasetPreviewHarvestNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPreviewInternal::class => DatasetPreviewInternalNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPreviewResourcesItem::class => DatasetPreviewResourcesItemNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPreviewSchema::class => DatasetPreviewSchemaNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPreviewSpatial::class => DatasetPreviewSpatialNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPreviewTemporalCoverage::class => DatasetPreviewTemporalCoverageNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetReference::class => DatasetReferenceNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DatasetSuggestion::class => DatasetSuggestionNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\Discussion::class => DiscussionNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionSubject::class => DiscussionSubjectNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionEditComment::class => DiscussionEditCommentNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionMessage::class => DiscussionMessageNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionMessagePermissions::class => DiscussionMessagePermissionsNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionPage::class => DiscussionPageNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionPermissions::class => DiscussionPermissionsNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionResponse::class => DiscussionResponseNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionStart::class => DiscussionStartNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionStartSubject::class => DiscussionStartSubjectNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\Error::class => ErrorNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\Follow::class => FollowNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\FollowPage::class => FollowPageNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\Frequency::class => FrequencyNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\GenericReference::class => GenericReferenceNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\GeoGranularity::class => GeoGranularityNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\GeoJSON::class => GeoJSONNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\GeoJSONFeature::class => GeoJSONFeatureNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\GeoJSONFeatureCollection::class => GeoJSONFeatureCollectionNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\GeoLevel::class => GeoLevelNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestBackend::class => HarvestBackendNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestDatasetMetadata::class => HarvestDatasetMetadataNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestDatasetMetadataRead::class => HarvestDatasetMetadataReadNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestError::class => HarvestErrorNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestExtraConfig::class => HarvestExtraConfigNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestFeature::class => HarvestFeatureNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestFilter::class => HarvestFilterNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestItem::class => HarvestItemNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestItemPreview::class => HarvestItemPreviewNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestItemPreviewDataservice::class => HarvestItemPreviewDataserviceNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestItemPreviewDataset::class => HarvestItemPreviewDatasetNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestJob::class => HarvestJobNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestJobPage::class => HarvestJobPageNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestJobPreview::class => HarvestJobPreviewNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestMetadataRead::class => HarvestMetadataReadNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestResourceMetadata::class => HarvestResourceMetadataNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource::class => HarvestSourceNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSourceLastJob::class => HarvestSourceLastJobNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSourcePermissions::class => HarvestSourcePermissionsNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSourceValidation::class => HarvestSourceValidationNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\HarvestSourcePage::class => HarvestSourcePageNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\Interval::class => IntervalNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\Job::class => JobNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\LazyReference::class => LazyReferenceNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\License::class => LicenseNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\MemberRead::class => MemberReadNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\MemberWrite::class => MemberWriteNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\MembershipInvite::class => MembershipInviteNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\MembershipRequest::class => MembershipRequestNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\MembershipRequestRead::class => MembershipRequestReadNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\MembershipRequestWrite::class => MembershipRequestWriteNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ModelReference::class => ModelReferenceNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\MyMetrics::class => MyMetricsNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\NotificationRead::class => NotificationReadNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\NotificationPage::class => NotificationPageNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationRead::class => OrganizationReadNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReadBadgesItem::class => OrganizationReadBadgesItemNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReadMembersItem::class => OrganizationReadMembersItemNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReadPermissions::class => OrganizationReadPermissionsNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReadRequestsItem::class => OrganizationReadRequestsItemNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReadTeamsItem::class => OrganizationReadTeamsItemNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationWrite::class => OrganizationWriteNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationPage::class => OrganizationPageNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationPermissions::class => OrganizationPermissionsNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReference::class => OrganizationReferenceNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReferenceBadgesItem::class => OrganizationReferenceBadgesItemNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReferencePermissions::class => OrganizationReferencePermissionsNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationRole::class => OrganizationRoleNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationSuggestion::class => OrganizationSuggestionNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\PendingInvitation::class => PendingInvitationNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\PostRead::class => PostReadNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\PostReadDatasetsItem::class => PostReadDatasetsItemNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\PostWrite::class => PostWriteNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\PostPage::class => PostPageNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\RefuseMembership::class => RefuseMembershipNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ReportRead::class => ReportReadNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ReportWrite::class => ReportWriteNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ReportPage::class => ReportPageNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\Resource::class => ResourceNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ResourceChecksum::class => ResourceChecksumNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ResourceHarvest::class => ResourceHarvestNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ResourceInternal::class => ResourceInternalNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ResourceSchema::class => ResourceSchemaNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ResourceRead::class => ResourceReadNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ResourceInternals::class => ResourceInternalsNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ResourceType::class => ResourceTypeNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ReuseRead::class => ReuseReadNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ReuseReadBadgesItem::class => ReuseReadBadgesItemNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ReuseReadPermissions::class => ReuseReadPermissionsNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ReuseWrite::class => ReuseWriteNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ReusePage::class => ReusePageNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ReusePermissions::class => ReusePermissionsNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ReuseReference::class => ReuseReferenceNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ReuseSuggestion::class => ReuseSuggestionNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ReuseTopic::class => ReuseTopicNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ReuseType::class => ReuseTypeNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\Schema::class => SchemaNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\SchemaRead::class => SchemaReadNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\SiteRead::class => SiteReadNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\SiteWrite::class => SiteWriteNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\SpatialCoverage::class => SpatialCoverageNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\SpatialCoverageGeom::class => SpatialCoverageGeomNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\Task::class => TaskNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\TeamRead::class => TeamReadNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\TemporalCoverage::class => TemporalCoverageNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\TerritorySuggestion::class => TerritorySuggestionNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\Transfer::class => TransferNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\TransferOwner::class => TransferOwnerNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\TransferRecipient::class => TransferRecipientNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\TransferSubject::class => TransferSubjectNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\TransferRequest::class => TransferRequestNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\TransferRequestRecipient::class => TransferRequestRecipientNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\TransferRequestSubject::class => TransferRequestSubjectNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\TransferResponse::class => TransferResponseNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\UploadStatus::class => UploadStatusNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\UploadedCommunityResource::class => UploadedCommunityResourceNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\UploadedImage::class => UploadedImageNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\UploadedResource::class => UploadedResourceNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\User::class => UserNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\UserPage::class => UserPageNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\UserReference::class => UserReferenceNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\UserRole::class => UserRoleNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\UserSuggestion::class => UserSuggestionNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\ValidationError::class => ValidationErrorNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\VisualizationPermissions::class => VisualizationPermissionsNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\XAxisRead::class => XAxisReadNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\XAxisWrite::class => XAxisWriteNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\YAxisRead::class => YAxisReadNormalizer::class,

        \Ecourty\DataGouv\DataGouv\Client\Model\YAxisWrite::class => YAxisWriteNormalizer::class,

        \Jane\Component\JsonSchemaRuntime\Reference::class => \Ecourty\DataGouv\DataGouv\Client\Runtime\Normalizer\ReferenceNormalizer::class,
    ];
    protected $normalizersCache = [];

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \array_key_exists($type, $this->normalizers);
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \array_key_exists(\get_class($data), $this->normalizers);
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[\get_class($data)];
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
