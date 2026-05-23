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
class PendingInvitationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\PendingInvitation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\PendingInvitation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\PendingInvitation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('assignments', $data)) {
            $values = [];
            foreach ($data['assignments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Ecourty\DataGouv\DataGouv\Client\Model\GenericReference::class, 'json', $context);
            }
            $object->setAssignments($values);
        }
        if (\array_key_exists('comment', $data) && $data['comment'] !== null) {
            $object->setComment($data['comment']);
        }
        elseif (\array_key_exists('comment', $data) && $data['comment'] === null) {
            $object->setComment(null);
        }
        if (\array_key_exists('created', $data) && $data['created'] !== null) {
            $object->setCreated(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created']));
        }
        elseif (\array_key_exists('created', $data) && $data['created'] === null) {
            $object->setCreated(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('organization', $data)) {
            $object->setOrganization($this->denormalizer->denormalize($data['organization'], \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReference::class, 'json', $context));
        }
        if (\array_key_exists('role', $data) && $data['role'] !== null) {
            $object->setRole($data['role']);
        }
        elseif (\array_key_exists('role', $data) && $data['role'] === null) {
            $object->setRole(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('assignments') && null !== $data->getAssignments()) {
            $values = [];
            foreach ($data->getAssignments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['assignments'] = $values;
        }
        if ($data->isInitialized('comment')) {
            $dataArray['comment'] = $data->getComment();
        }
        if ($data->isInitialized('organization') && null !== $data->getOrganization()) {
            $dataArray['organization'] = $this->normalizer->normalize($data->getOrganization(), 'json', $context);
        }
        if ($data->isInitialized('role')) {
            $dataArray['role'] = $data->getRole();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\PendingInvitation::class => false];
    }
}