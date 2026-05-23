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
class ActivityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\Activity::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\Activity::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\Activity();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('actor', $data)) {
            $object->setActor($data['actor']);
        }
        if (\array_key_exists('changes', $data)) {
            $values = [];
            foreach ($data['changes'] as $value) {
                $values[] = $value;
            }
            $object->setChanges($values);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('extras', $data)) {
            $object->setExtras($data['extras']);
        }
        if (\array_key_exists('icon', $data)) {
            $object->setIcon($data['icon']);
        }
        if (\array_key_exists('key', $data)) {
            $object->setKey($data['key']);
        }
        if (\array_key_exists('label', $data)) {
            $object->setLabel($data['label']);
        }
        if (\array_key_exists('organization', $data)) {
            $object->setOrganization($data['organization']);
        }
        if (\array_key_exists('related_to', $data)) {
            $object->setRelatedTo($data['related_to']);
        }
        if (\array_key_exists('related_to_id', $data)) {
            $object->setRelatedToId($data['related_to_id']);
        }
        if (\array_key_exists('related_to_kind', $data)) {
            $object->setRelatedToKind($data['related_to_kind']);
        }
        if (\array_key_exists('related_to_url', $data)) {
            $object->setRelatedToUrl($data['related_to_url']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('changes') && null !== $data->getChanges()) {
            $values = [];
            foreach ($data->getChanges() as $value) {
                $values[] = $value;
            }
            $dataArray['changes'] = $values;
        }
        if ($data->isInitialized('extras') && null !== $data->getExtras()) {
            $dataArray['extras'] = $data->getExtras();
        }
        $dataArray['icon'] = $data->getIcon();
        $dataArray['key'] = $data->getKey();
        $dataArray['label'] = $data->getLabel();
        $dataArray['related_to'] = $data->getRelatedTo();
        $dataArray['related_to_id'] = $data->getRelatedToId();
        $dataArray['related_to_kind'] = $data->getRelatedToKind();
        $dataArray['related_to_url'] = $data->getRelatedToUrl();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\Activity::class => false];
    }
}