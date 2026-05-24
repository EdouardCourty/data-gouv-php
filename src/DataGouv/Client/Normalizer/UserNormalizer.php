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
class UserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\User::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\User::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\User();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('active', $data) && \is_int($data['active'])) {
            $data['active'] = (bool) $data['active'];
        }
        if (\array_key_exists('about', $data) && $data['about'] !== null) {
            $object->setAbout($data['about']);
        }
        elseif (\array_key_exists('about', $data) && $data['about'] === null) {
            $object->setAbout(null);
        }
        if (\array_key_exists('active', $data) && $data['active'] !== null) {
            $object->setActive($data['active']);
        }
        elseif (\array_key_exists('active', $data) && $data['active'] === null) {
            $object->setActive(null);
        }
        if (\array_key_exists('avatar', $data) && $data['avatar'] !== null) {
            $object->setAvatar($data['avatar']);
        }
        elseif (\array_key_exists('avatar', $data) && $data['avatar'] === null) {
            $object->setAvatar(null);
        }
        if (\array_key_exists('avatar_thumbnail', $data) && $data['avatar_thumbnail'] !== null) {
            $object->setAvatarThumbnail($data['avatar_thumbnail']);
        }
        elseif (\array_key_exists('avatar_thumbnail', $data) && $data['avatar_thumbnail'] === null) {
            $object->setAvatarThumbnail(null);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('first_name', $data)) {
            $object->setFirstName($data['first_name']);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('last_login_at', $data)) {
            $object->setLastLoginAt($data['last_login_at']);
        }
        if (\array_key_exists('last_name', $data)) {
            $object->setLastName($data['last_name']);
        }
        if (\array_key_exists('metrics', $data)) {
            $object->setMetrics($data['metrics']);
        }
        if (\array_key_exists('organizations', $data)) {
            $values = [];
            foreach ($data['organizations'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationReference::class, 'json', $context);
            }
            $object->setOrganizations($values);
        }
        if (\array_key_exists('page', $data) && $data['page'] !== null) {
            $object->setPage($data['page']);
        }
        elseif (\array_key_exists('page', $data) && $data['page'] === null) {
            $object->setPage(null);
        }
        if (\array_key_exists('password_rotation_demanded', $data)) {
            $object->setPasswordRotationDemanded($data['password_rotation_demanded']);
        }
        if (\array_key_exists('password_rotation_performed', $data)) {
            $object->setPasswordRotationPerformed($data['password_rotation_performed']);
        }
        if (\array_key_exists('roles', $data)) {
            $values_1 = [];
            foreach ($data['roles'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRoles($values_1);
        }
        if (\array_key_exists('since', $data)) {
            $object->setSince((new \DateTime($data['since'])));
        }
        if (\array_key_exists('slug', $data) && $data['slug'] !== null) {
            $object->setSlug($data['slug']);
        }
        elseif (\array_key_exists('slug', $data) && $data['slug'] === null) {
            $object->setSlug(null);
        }
        if (\array_key_exists('uri', $data) && $data['uri'] !== null) {
            $object->setUri($data['uri']);
        }
        elseif (\array_key_exists('uri', $data) && $data['uri'] === null) {
            $object->setUri(null);
        }
        if (\array_key_exists('website', $data) && $data['website'] !== null) {
            $object->setWebsite($data['website']);
        }
        elseif (\array_key_exists('website', $data) && $data['website'] === null) {
            $object->setWebsite(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('about')) {
            $dataArray['about'] = $data->getAbout();
        }
        if ($data->isInitialized('active')) {
            $dataArray['active'] = $data->getActive();
        }
        if ($data->isInitialized('avatar')) {
            $dataArray['avatar'] = $data->getAvatar();
        }
        if ($data->isInitialized('avatarThumbnail')) {
            $dataArray['avatar_thumbnail'] = $data->getAvatarThumbnail();
        }
        $dataArray['first_name'] = $data->getFirstName();
        $dataArray['last_name'] = $data->getLastName();
        if ($data->isInitialized('organizations') && null !== $data->getOrganizations()) {
            $values = [];
            foreach ($data->getOrganizations() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['organizations'] = $values;
        }
        if ($data->isInitialized('roles') && null !== $data->getRoles()) {
            $values_1 = [];
            foreach ($data->getRoles() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['roles'] = $values_1;
        }
        $dataArray['since'] = $data->getSince()->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('website')) {
            $dataArray['website'] = $data->getWebsite();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\User::class => false];
    }
}