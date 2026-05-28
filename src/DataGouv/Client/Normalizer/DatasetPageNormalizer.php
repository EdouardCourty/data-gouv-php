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
class DatasetPageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPage::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPage::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataGouv\Client\Model\DatasetPage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('data', $data)) {
            $values = [];
            foreach ($data['data'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Ecourty\DataGouv\DataGouv\Client\Model\DatasetRead::class, 'json', $context);
            }
            $object->setData($values);
        }
        if (\array_key_exists('next_page', $data) && $data['next_page'] !== null) {
            $object->setNextPage($data['next_page']);
        }
        elseif (\array_key_exists('next_page', $data) && $data['next_page'] === null) {
            $object->setNextPage(null);
        }
        if (\array_key_exists('page', $data)) {
            $object->setPage($data['page']);
        }
        if (\array_key_exists('page_size', $data)) {
            $object->setPageSize($data['page_size']);
        }
        if (\array_key_exists('previous_page', $data) && $data['previous_page'] !== null) {
            $object->setPreviousPage($data['previous_page']);
        }
        elseif (\array_key_exists('previous_page', $data) && $data['previous_page'] === null) {
            $object->setPreviousPage(null);
        }
        if (\array_key_exists('total', $data)) {
            $object->setTotal($data['total']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('data') && null !== $data->getData()) {
            $values = [];
            foreach ($data->getData() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['data'] = $values;
        }
        if ($data->isInitialized('nextPage')) {
            $dataArray['next_page'] = $data->getNextPage();
        }
        $dataArray['page'] = $data->getPage();
        $dataArray['page_size'] = $data->getPageSize();
        if ($data->isInitialized('previousPage')) {
            $dataArray['previous_page'] = $data->getPreviousPage();
        }
        $dataArray['total'] = $data->getTotal();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataGouv\Client\Model\DatasetPage::class => false];
    }
}