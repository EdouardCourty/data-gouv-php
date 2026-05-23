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
class ReponseUnitesLegalesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseUnitesLegales::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseUnitesLegales::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseUnitesLegales();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('header', $data)) {
            $object->setHeader($this->denormalizer->denormalize($data['header'], \Ecourty\DataGouv\DataServices\Sirene\Client\Model\Header::class, 'json', $context));
        }
        if (\array_key_exists('unitesLegales', $data)) {
            $values = [];
            foreach ($data['unitesLegales'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Ecourty\DataGouv\DataServices\Sirene\Client\Model\UniteLegale::class, 'json', $context);
            }
            $object->setUnitesLegales($values);
        }
        if (\array_key_exists('facettes', $data)) {
            $values_1 = [];
            foreach ($data['facettes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Ecourty\DataGouv\DataServices\Sirene\Client\Model\Facette::class, 'json', $context);
            }
            $object->setFacettes($values_1);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('header') && null !== $data->getHeader()) {
            $dataArray['header'] = $this->normalizer->normalize($data->getHeader(), 'json', $context);
        }
        if ($data->isInitialized('unitesLegales') && null !== $data->getUnitesLegales()) {
            $values = [];
            foreach ($data->getUnitesLegales() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['unitesLegales'] = $values;
        }
        if ($data->isInitialized('facettes') && null !== $data->getFacettes()) {
            $values_1 = [];
            foreach ($data->getFacettes() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['facettes'] = $values_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseUnitesLegales::class => false];
    }
}