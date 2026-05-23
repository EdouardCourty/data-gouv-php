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
class DiscussionMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionMessage::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionMessage::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionMessage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('content', $data) && $data['content'] !== null) {
            $object->setContent($data['content']);
        }
        elseif (\array_key_exists('content', $data) && $data['content'] === null) {
            $object->setContent(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('last_modified_at', $data) && $data['last_modified_at'] !== null) {
            $object->setLastModifiedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['last_modified_at']));
        }
        elseif (\array_key_exists('last_modified_at', $data) && $data['last_modified_at'] === null) {
            $object->setLastModifiedAt(null);
        }
        if (\array_key_exists('permissions', $data)) {
            $object->setPermissions($this->denormalizer->denormalize($data['permissions'], \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionMessagePermissions::class, 'json', $context));
        }
        if (\array_key_exists('posted_by', $data)) {
            $object->setPostedBy($data['posted_by']);
        }
        if (\array_key_exists('posted_by_organization', $data)) {
            $object->setPostedByOrganization($data['posted_by_organization']);
        }
        if (\array_key_exists('posted_on', $data) && $data['posted_on'] !== null) {
            $object->setPostedOn(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['posted_on']));
        }
        elseif (\array_key_exists('posted_on', $data) && $data['posted_on'] === null) {
            $object->setPostedOn(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('content')) {
            $dataArray['content'] = $data->getContent();
        }
        if ($data->isInitialized('id')) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('lastModifiedAt')) {
            $dataArray['last_modified_at'] = $data->getLastModifiedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('permissions') && null !== $data->getPermissions()) {
            $dataArray['permissions'] = $this->normalizer->normalize($data->getPermissions(), 'json', $context);
        }
        if ($data->isInitialized('postedBy') && null !== $data->getPostedBy()) {
            $dataArray['posted_by'] = $data->getPostedBy();
        }
        if ($data->isInitialized('postedByOrganization') && null !== $data->getPostedByOrganization()) {
            $dataArray['posted_by_organization'] = $data->getPostedByOrganization();
        }
        if ($data->isInitialized('postedOn')) {
            $dataArray['posted_on'] = $data->getPostedOn()?->format('Y-m-d\TH:i:sP');
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\DiscussionMessage::class => false];
    }
}