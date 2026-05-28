<?php

namespace Ecourty\DataGouv\DataServices\Entreprise\Client\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Ecourty\DataGouv\DataServices\Entreprise\Client\Runtime\Normalizer\CheckArray;
use Ecourty\DataGouv\DataServices\Entreprise\Client\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CollectiviteTerritorialeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\CollectiviteTerritoriale::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\CollectiviteTerritoriale::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\CollectiviteTerritoriale();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('code', $data) && $data['code'] !== null) {
            $object->setCode($data['code']);
            unset($data['code']);
        }
        elseif (\array_key_exists('code', $data) && $data['code'] === null) {
            $object->setCode(null);
        }
        if (\array_key_exists('code_insee', $data) && $data['code_insee'] !== null) {
            $object->setCodeInsee($data['code_insee']);
            unset($data['code_insee']);
        }
        elseif (\array_key_exists('code_insee', $data) && $data['code_insee'] === null) {
            $object->setCodeInsee(null);
        }
        if (\array_key_exists('elus', $data)) {
            $values = [];
            foreach ($data['elus'] as $value) {
                $values[] = $value;
            }
            $object->setElus($values);
            unset($data['elus']);
        }
        if (\array_key_exists('niveau', $data) && $data['niveau'] !== null) {
            $object->setNiveau($data['niveau']);
            unset($data['niveau']);
        }
        elseif (\array_key_exists('niveau', $data) && $data['niveau'] === null) {
            $object->setNiveau(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('code')) {
            $dataArray['code'] = $data->getCode();
        }
        if ($data->isInitialized('codeInsee')) {
            $dataArray['code_insee'] = $data->getCodeInsee();
        }
        if ($data->isInitialized('elus') && null !== $data->getElus()) {
            $values = [];
            foreach ($data->getElus() as $value) {
                $values[] = $value;
            }
            $dataArray['elus'] = $values;
        }
        if ($data->isInitialized('niveau')) {
            $dataArray['niveau'] = $data->getNiveau();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\Entreprise\Client\Model\CollectiviteTerritoriale::class => false];
    }
}