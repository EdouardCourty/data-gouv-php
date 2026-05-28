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
class DiscussionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\Discussion::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\Discussion::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\Discussion();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('class', $data)) {
            $object->setClass($data['class']);
        }
        if (\array_key_exists('closed', $data) && $data['closed'] !== null) {
            $object->setClosed((new \DateTime($data['closed'])));
        }
        elseif (\array_key_exists('closed', $data) && $data['closed'] === null) {
            $object->setClosed(null);
        }
        if (\array_key_exists('closed_by', $data)) {
            $object->setClosedBy($data['closed_by']);
        }
        if (\array_key_exists('closed_by_organization', $data)) {
            $object->setClosedByOrganization($data['closed_by_organization']);
        }
        if (\array_key_exists('created', $data) && $data['created'] !== null) {
            $object->setCreated((new \DateTime($data['created'])));
        }
        elseif (\array_key_exists('created', $data) && $data['created'] === null) {
            $object->setCreated(null);
        }
        if (\array_key_exists('discussion', $data)) {
            $object->setDiscussion($this->denormalizer->denormalize($data['discussion'], \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionMessage::class, 'json', $context));
        }
        if (\array_key_exists('extras', $data)) {
            $object->setExtras($data['extras']);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('organization', $data)) {
            $object->setOrganization($data['organization']);
        }
        if (\array_key_exists('permissions', $data)) {
            $object->setPermissions($this->denormalizer->denormalize($data['permissions'], \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionPermissions::class, 'json', $context));
        }
        if (\array_key_exists('self_web_url', $data) && $data['self_web_url'] !== null) {
            $object->setSelfWebUrl($data['self_web_url']);
        }
        elseif (\array_key_exists('self_web_url', $data) && $data['self_web_url'] === null) {
            $object->setSelfWebUrl(null);
        }
        if (\array_key_exists('subject', $data)) {
            $object->setSubject($this->denormalizer->denormalize($data['subject'], \Ecourty\DataGouv\DataGouv\Client\Model\DiscussionSubject::class, 'json', $context));
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
        }
        elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        if (\array_key_exists('url', $data) && $data['url'] !== null) {
            $object->setUrl($data['url']);
        }
        elseif (\array_key_exists('url', $data) && $data['url'] === null) {
            $object->setUrl(null);
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($data['user']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['class'] = $data->getClass();
        if ($data->isInitialized('closed')) {
            $dataArray['closed'] = $data->getClosed()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('closedBy') && null !== $data->getClosedBy()) {
            $dataArray['closed_by'] = $data->getClosedBy();
        }
        if ($data->isInitialized('closedByOrganization') && null !== $data->getClosedByOrganization()) {
            $dataArray['closed_by_organization'] = $data->getClosedByOrganization();
        }
        if ($data->isInitialized('created')) {
            $dataArray['created'] = $data->getCreated()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('discussion') && null !== $data->getDiscussion()) {
            $dataArray['discussion'] = $this->normalizer->normalize($data->getDiscussion(), 'json', $context);
        }
        if ($data->isInitialized('extras') && null !== $data->getExtras()) {
            $dataArray['extras'] = $data->getExtras();
        }
        if ($data->isInitialized('id')) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('organization') && null !== $data->getOrganization()) {
            $dataArray['organization'] = $data->getOrganization();
        }
        if ($data->isInitialized('permissions') && null !== $data->getPermissions()) {
            $dataArray['permissions'] = $this->normalizer->normalize($data->getPermissions(), 'json', $context);
        }
        if ($data->isInitialized('selfWebUrl')) {
            $dataArray['self_web_url'] = $data->getSelfWebUrl();
        }
        if ($data->isInitialized('subject') && null !== $data->getSubject()) {
            $dataArray['subject'] = $this->normalizer->normalize($data->getSubject(), 'json', $context);
        }
        if ($data->isInitialized('title')) {
            $dataArray['title'] = $data->getTitle();
        }
        if ($data->isInitialized('url')) {
            $dataArray['url'] = $data->getUrl();
        }
        if ($data->isInitialized('user') && null !== $data->getUser()) {
            $dataArray['user'] = $data->getUser();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\Discussion::class => false];
    }
}