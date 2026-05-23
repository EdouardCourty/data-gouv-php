<?php

namespace Ecourty\DataGouv\DataServices\Geo\Client\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Ecourty\DataGouv\DataServices\Geo\Client\Runtime\Normalizer\CheckArray;
use Ecourty\DataGouv\DataServices\Geo\Client\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CommuneAssocieeDelegueeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Geo\Client\Model\CommuneAssocieeDeleguee::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Geo\Client\Model\CommuneAssocieeDeleguee::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Geo\Client\Model\CommuneAssocieeDeleguee();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('surface', $data) && \is_int($data['surface'])) {
            $data['surface'] = (double) $data['surface'];
        }
        if (\array_key_exists('code', $data)) {
            $object->setCode($data['code']);
        }
        if (\array_key_exists('nom', $data)) {
            $object->setNom($data['nom']);
        }
        if (\array_key_exists('codeEpci', $data)) {
            $object->setCodeEpci($data['codeEpci']);
        }
        if (\array_key_exists('codeDepartement', $data)) {
            $object->setCodeDepartement($data['codeDepartement']);
        }
        if (\array_key_exists('codeRegion', $data)) {
            $object->setCodeRegion($data['codeRegion']);
        }
        if (\array_key_exists('epci', $data)) {
            $object->setEpci($this->denormalizer->denormalize($data['epci'], \Ecourty\DataGouv\DataServices\Geo\Client\Model\Epci::class, 'json', $context));
        }
        if (\array_key_exists('departement', $data)) {
            $object->setDepartement($this->denormalizer->denormalize($data['departement'], \Ecourty\DataGouv\DataServices\Geo\Client\Model\Departement::class, 'json', $context));
        }
        if (\array_key_exists('region', $data)) {
            $object->setRegion($this->denormalizer->denormalize($data['region'], \Ecourty\DataGouv\DataServices\Geo\Client\Model\Region::class, 'json', $context));
        }
        if (\array_key_exists('surface', $data)) {
            $object->setSurface($data['surface']);
        }
        if (\array_key_exists('centre', $data)) {
            $object->setCentre($data['centre']);
        }
        if (\array_key_exists('contour', $data)) {
            $object->setContour($data['contour']);
        }
        if (\array_key_exists('bbox', $data)) {
            $object->setBbox($data['bbox']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('code') && null !== $data->getCode()) {
            $dataArray['code'] = $data->getCode();
        }
        if ($data->isInitialized('nom') && null !== $data->getNom()) {
            $dataArray['nom'] = $data->getNom();
        }
        if ($data->isInitialized('codeEpci') && null !== $data->getCodeEpci()) {
            $dataArray['codeEpci'] = $data->getCodeEpci();
        }
        if ($data->isInitialized('codeDepartement') && null !== $data->getCodeDepartement()) {
            $dataArray['codeDepartement'] = $data->getCodeDepartement();
        }
        if ($data->isInitialized('codeRegion') && null !== $data->getCodeRegion()) {
            $dataArray['codeRegion'] = $data->getCodeRegion();
        }
        if ($data->isInitialized('epci') && null !== $data->getEpci()) {
            $dataArray['epci'] = $this->normalizer->normalize($data->getEpci(), 'json', $context);
        }
        if ($data->isInitialized('departement') && null !== $data->getDepartement()) {
            $dataArray['departement'] = $this->normalizer->normalize($data->getDepartement(), 'json', $context);
        }
        if ($data->isInitialized('region') && null !== $data->getRegion()) {
            $dataArray['region'] = $this->normalizer->normalize($data->getRegion(), 'json', $context);
        }
        if ($data->isInitialized('surface') && null !== $data->getSurface()) {
            $dataArray['surface'] = $data->getSurface();
        }
        if ($data->isInitialized('centre') && null !== $data->getCentre()) {
            $dataArray['centre'] = $data->getCentre();
        }
        if ($data->isInitialized('contour') && null !== $data->getContour()) {
            $dataArray['contour'] = $data->getContour();
        }
        if ($data->isInitialized('bbox') && null !== $data->getBbox()) {
            $dataArray['bbox'] = $data->getBbox();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\Geo\Client\Model\CommuneAssocieeDeleguee::class => false];
    }
}