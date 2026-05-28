<?php

namespace Ecourty\DataGouv\DataServices\Education\Client\Normalizer;

use Ecourty\DataGouv\DataServices\Education\Client\Runtime\Normalizer\CheckArray;
use Ecourty\DataGouv\DataServices\Education\Client\Runtime\Normalizer\ValidatorTrait;
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
        
        \Ecourty\DataGouv\DataServices\Education\Client\Model\Dataset::class => \Ecourty\DataGouv\DataServices\Education\Client\Normalizer\DatasetNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Education\Client\Model\DatasetAttachmentsItem::class => \Ecourty\DataGouv\DataServices\Education\Client\Normalizer\DatasetAttachmentsItemNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Education\Client\Model\DatasetMetas::class => \Ecourty\DataGouv\DataServices\Education\Client\Normalizer\DatasetMetasNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Education\Client\Model\DatasetFieldsItem::class => \Ecourty\DataGouv\DataServices\Education\Client\Normalizer\DatasetFieldsItemNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Education\Client\Model\DatasetFieldsItemAnnotations::class => \Ecourty\DataGouv\DataServices\Education\Client\Normalizer\DatasetFieldsItemAnnotationsNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Education\Client\Model\Record::class => \Ecourty\DataGouv\DataServices\Education\Client\Normalizer\RecordNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Education\Client\Model\RecordFields::class => \Ecourty\DataGouv\DataServices\Education\Client\Normalizer\RecordFieldsNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Ecourty\DataGouv\DataServices\Education\Client\Runtime\Normalizer\ReferenceNormalizer::class,
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
            
            \Ecourty\DataGouv\DataServices\Education\Client\Model\Dataset::class => false,
            \Ecourty\DataGouv\DataServices\Education\Client\Model\DatasetAttachmentsItem::class => false,
            \Ecourty\DataGouv\DataServices\Education\Client\Model\DatasetMetas::class => false,
            \Ecourty\DataGouv\DataServices\Education\Client\Model\DatasetFieldsItem::class => false,
            \Ecourty\DataGouv\DataServices\Education\Client\Model\DatasetFieldsItemAnnotations::class => false,
            \Ecourty\DataGouv\DataServices\Education\Client\Model\Record::class => false,
            \Ecourty\DataGouv\DataServices\Education\Client\Model\RecordFields::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}