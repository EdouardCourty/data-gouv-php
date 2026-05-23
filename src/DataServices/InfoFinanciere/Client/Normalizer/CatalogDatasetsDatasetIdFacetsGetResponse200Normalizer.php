<?php

namespace Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Runtime\Normalizer\CheckArray;
use Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CatalogDatasetsDatasetIdFacetsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\CatalogDatasetsDatasetIdFacetsGetResponse200::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\CatalogDatasetsDatasetIdFacetsGetResponse200::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\CatalogDatasetsDatasetIdFacetsGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('links', $data)) {
            $values = [];
            foreach ($data['links'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\Links::class, 'json', $context);
            }
            $object->setLinks($values);
            unset($data['links']);
        }
        if (\array_key_exists('facets', $data)) {
            $values_1 = [];
            foreach ($data['facets'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\FacetEnumeration::class, 'json', $context);
            }
            $object->setFacets($values_1);
            unset($data['facets']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('links') && null !== $data->getLinks()) {
            $values = [];
            foreach ($data->getLinks() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['links'] = $values;
        }
        if ($data->isInitialized('facets') && null !== $data->getFacets()) {
            $values_1 = [];
            foreach ($data->getFacets() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['facets'] = $values_1;
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\CatalogDatasetsDatasetIdFacetsGetResponse200::class => false];
    }
}