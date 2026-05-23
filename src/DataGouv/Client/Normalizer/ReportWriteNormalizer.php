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
class ReportWriteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\ReportWrite::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\ReportWrite::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\ReportWrite();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('dismissed_at', $data) && $data['dismissed_at'] !== null) {
            $object->setDismissedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['dismissed_at']));
        }
        elseif (\array_key_exists('dismissed_at', $data) && $data['dismissed_at'] === null) {
            $object->setDismissedAt(null);
        }
        if (\array_key_exists('dismissed_by', $data) && $data['dismissed_by'] !== null) {
            $object->setDismissedBy($data['dismissed_by']);
        }
        elseif (\array_key_exists('dismissed_by', $data) && $data['dismissed_by'] === null) {
            $object->setDismissedBy(null);
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
        if (\array_key_exists('subject', $data)) {
            $object->setSubject($this->denormalizer->denormalize($data['subject'], \Ecourty\DataGouv\DataGouv\Client\Model\LazyReference::class, 'json', $context));
        }
        if (\array_key_exists('subject_embed_id', $data) && $data['subject_embed_id'] !== null) {
            $object->setSubjectEmbedId($data['subject_embed_id']);
        }
        elseif (\array_key_exists('subject_embed_id', $data) && $data['subject_embed_id'] === null) {
            $object->setSubjectEmbedId(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dismissedAt')) {
            $dataArray['dismissed_at'] = $data->getDismissedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('dismissedBy')) {
            $dataArray['dismissed_by'] = $data->getDismissedBy();
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
        return [\Ecourty\DataGouv\DataGouv\Client\Model\ReportWrite::class => false];
    }
}