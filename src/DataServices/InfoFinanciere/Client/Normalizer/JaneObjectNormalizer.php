<?php

namespace Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Normalizer;

use Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Runtime\Normalizer\CheckArray;
use Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\Links::class => \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Normalizer\LinksNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\Dataset::class => \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Normalizer\DatasetNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\DatasetDataset::class => \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Normalizer\DatasetDatasetNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\DatasetDatasetAttachmentsItem::class => \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Normalizer\DatasetDatasetAttachmentsItemNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\DatasetDatasetFieldsItem::class => \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Normalizer\DatasetDatasetFieldsItemNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\Datasets::class => \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Normalizer\DatasetsNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\FacetValueEnumeration::class => \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Normalizer\FacetValueEnumerationNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\FacetEnumeration::class => \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Normalizer\FacetEnumerationNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\Aggregation::class => \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Normalizer\AggregationNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\Record::class => \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Normalizer\RecordNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\RecordRecord::class => \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Normalizer\RecordRecordNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\Records::class => \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Normalizer\RecordsNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\Attachment::class => \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Normalizer\AttachmentNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\AttachmentMetas::class => \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Normalizer\AttachmentMetasNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\ResponseBadRequest::class => \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Normalizer\ResponseBadRequestNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\ResponseQuota::class => \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Normalizer\ResponseQuotaNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\CatalogExportsGetResponse200::class => \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Normalizer\CatalogExportsGetResponse200Normalizer::class,
        
        \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\CatalogFacetsGetResponse200::class => \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Normalizer\CatalogFacetsGetResponse200Normalizer::class,
        
        \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\CatalogDatasetsDatasetIdExportsGetResponse200::class => \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Normalizer\CatalogDatasetsDatasetIdExportsGetResponse200Normalizer::class,
        
        \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\CatalogDatasetsDatasetIdFacetsGetResponse200::class => \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Normalizer\CatalogDatasetsDatasetIdFacetsGetResponse200Normalizer::class,
        
        \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\CatalogDatasetsDatasetIdAttachmentsGetResponse200::class => \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Normalizer\CatalogDatasetsDatasetIdAttachmentsGetResponse200Normalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [
            
            \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\Links::class => false,
            \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\Dataset::class => false,
            \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\DatasetDataset::class => false,
            \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\DatasetDatasetAttachmentsItem::class => false,
            \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\DatasetDatasetFieldsItem::class => false,
            \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\Datasets::class => false,
            \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\FacetValueEnumeration::class => false,
            \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\FacetEnumeration::class => false,
            \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\Aggregation::class => false,
            \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\Record::class => false,
            \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\RecordRecord::class => false,
            \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\Records::class => false,
            \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\Attachment::class => false,
            \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\AttachmentMetas::class => false,
            \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\ResponseBadRequest::class => false,
            \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\ResponseQuota::class => false,
            \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\CatalogExportsGetResponse200::class => false,
            \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\CatalogFacetsGetResponse200::class => false,
            \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\CatalogDatasetsDatasetIdExportsGetResponse200::class => false,
            \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\CatalogDatasetsDatasetIdFacetsGetResponse200::class => false,
            \Ecourty\DataGouv\DataServices\InfoFinanciere\Client\Model\CatalogDatasetsDatasetIdAttachmentsGetResponse200::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}