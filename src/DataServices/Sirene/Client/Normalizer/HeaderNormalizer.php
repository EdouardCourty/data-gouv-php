<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Ecourty\DataGouv\DataServices\Sirene\Client\Runtime\Normalizer\CheckArray;
use Ecourty\DataGouv\DataServices\Sirene\Client\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class HeaderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Sirene\Client\Model\Header::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Sirene\Client\Model\Header::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Sirene\Client\Model\Header();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('statut', $data)) {
            $object->setStatut($data['statut']);
        }
        if (\array_key_exists('message', $data)) {
            $object->setMessage($data['message']);
        }
        if (\array_key_exists('total', $data)) {
            $object->setTotal($data['total']);
        }
        if (\array_key_exists('debut', $data)) {
            $object->setDebut($data['debut']);
        }
        if (\array_key_exists('nombre', $data)) {
            $object->setNombre($data['nombre']);
        }
        if (\array_key_exists('curseur', $data)) {
            $object->setCurseur($data['curseur']);
        }
        if (\array_key_exists('curseurSuivant', $data)) {
            $object->setCurseurSuivant($data['curseurSuivant']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('statut') && null !== $data->getStatut()) {
            $dataArray['statut'] = $data->getStatut();
        }
        if ($data->isInitialized('message') && null !== $data->getMessage()) {
            $dataArray['message'] = $data->getMessage();
        }
        if ($data->isInitialized('total') && null !== $data->getTotal()) {
            $dataArray['total'] = $data->getTotal();
        }
        if ($data->isInitialized('debut') && null !== $data->getDebut()) {
            $dataArray['debut'] = $data->getDebut();
        }
        if ($data->isInitialized('nombre') && null !== $data->getNombre()) {
            $dataArray['nombre'] = $data->getNombre();
        }
        if ($data->isInitialized('curseur') && null !== $data->getCurseur()) {
            $dataArray['curseur'] = $data->getCurseur();
        }
        if ($data->isInitialized('curseurSuivant') && null !== $data->getCurseurSuivant()) {
            $dataArray['curseurSuivant'] = $data->getCurseurSuivant();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\Sirene\Client\Model\Header::class => false];
    }
}