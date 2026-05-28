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
class ReportReadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\ReportRead::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\ReportRead::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\ReportRead();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('by', $data)) {
            $object->setBy($data['by']);
        }
        if (\array_key_exists('callbacks_count', $data) && $data['callbacks_count'] !== null) {
            $object->setCallbacksCount($data['callbacks_count']);
        }
        elseif (\array_key_exists('callbacks_count', $data) && $data['callbacks_count'] === null) {
            $object->setCallbacksCount(null);
        }
        if (\array_key_exists('dismissed_at', $data) && $data['dismissed_at'] !== null) {
            $object->setDismissedAt((new \DateTime($data['dismissed_at'])));
        }
        elseif (\array_key_exists('dismissed_at', $data) && $data['dismissed_at'] === null) {
            $object->setDismissedAt(null);
        }
        if (\array_key_exists('dismissed_by', $data)) {
            $object->setDismissedBy($this->denormalizer->denormalize($data['dismissed_by'], \Ecourty\DataGouv\DataGouv\Client\Model\UserReference::class, 'json', $context));
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('message', $data) && $data['message'] !== null) {
            $object->setMessage($data['message']);
        }
        elseif (\array_key_exists('message', $data) && $data['message'] === null) {
            $object->setMessage(null);
        }
        if (\array_key_exists('reason', $data)) {
            $object->setReason($data['reason']);
        }
        if (\array_key_exists('reported_at', $data)) {
            $object->setReportedAt((new \DateTime($data['reported_at'])));
        }
        if (\array_key_exists('self_api_url', $data) && $data['self_api_url'] !== null) {
            $object->setSelfApiUrl($data['self_api_url']);
        }
        elseif (\array_key_exists('self_api_url', $data) && $data['self_api_url'] === null) {
            $object->setSelfApiUrl(null);
        }
        if (\array_key_exists('subject', $data)) {
            $object->setSubject($this->denormalizer->denormalize($data['subject'], \Ecourty\DataGouv\DataGouv\Client\Model\LazyReference::class, 'json', $context));
        }
        if (\array_key_exists('subject_deleted_at', $data) && $data['subject_deleted_at'] !== null) {
            $object->setSubjectDeletedAt((new \DateTime($data['subject_deleted_at'])));
        }
        elseif (\array_key_exists('subject_deleted_at', $data) && $data['subject_deleted_at'] === null) {
            $object->setSubjectDeletedAt(null);
        }
        if (\array_key_exists('subject_deleted_by', $data)) {
            $object->setSubjectDeletedBy($data['subject_deleted_by']);
        }
        if (\array_key_exists('subject_embed_id', $data) && $data['subject_embed_id'] !== null) {
            $object->setSubjectEmbedId($data['subject_embed_id']);
        }
        elseif (\array_key_exists('subject_embed_id', $data) && $data['subject_embed_id'] === null) {
            $object->setSubjectEmbedId(null);
        }
        if (\array_key_exists('subject_label', $data) && $data['subject_label'] !== null) {
            $object->setSubjectLabel($data['subject_label']);
        }
        elseif (\array_key_exists('subject_label', $data) && $data['subject_label'] === null) {
            $object->setSubjectLabel(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dismissedAt')) {
            $dataArray['dismissed_at'] = $data->getDismissedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('dismissedBy') && null !== $data->getDismissedBy()) {
            $dataArray['dismissed_by'] = $this->normalizer->normalize($data->getDismissedBy(), 'json', $context);
        }
        if ($data->isInitialized('message')) {
            $dataArray['message'] = $data->getMessage();
        }
        $dataArray['reason'] = $data->getReason();
        if ($data->isInitialized('subject') && null !== $data->getSubject()) {
            $dataArray['subject'] = $this->normalizer->normalize($data->getSubject(), 'json', $context);
        }
        if ($data->isInitialized('subjectEmbedId')) {
            $dataArray['subject_embed_id'] = $data->getSubjectEmbedId();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\ReportRead::class => false];
    }
}