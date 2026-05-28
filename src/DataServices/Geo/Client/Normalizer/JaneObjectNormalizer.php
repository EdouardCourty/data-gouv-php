<?php

namespace Ecourty\DataGouv\DataServices\Geo\Client\Normalizer;

use Ecourty\DataGouv\DataServices\Geo\Client\Runtime\Normalizer\CheckArray;
use Ecourty\DataGouv\DataServices\Geo\Client\Runtime\Normalizer\ValidatorTrait;
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
        
        \Ecourty\DataGouv\DataServices\Geo\Client\Model\Error::class => \Ecourty\DataGouv\DataServices\Geo\Client\Normalizer\ErrorNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geo\Client\Model\Commune::class => \Ecourty\DataGouv\DataServices\Geo\Client\Normalizer\CommuneNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geo\Client\Model\CommuneAssocieesItem::class => \Ecourty\DataGouv\DataServices\Geo\Client\Normalizer\CommuneAssocieesItemNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geo\Client\Model\CommuneDelegueesItem::class => \Ecourty\DataGouv\DataServices\Geo\Client\Normalizer\CommuneDelegueesItemNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geo\Client\Model\CommuneAssocieeDeleguee::class => \Ecourty\DataGouv\DataServices\Geo\Client\Normalizer\CommuneAssocieeDelegueeNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geo\Client\Model\Epci::class => \Ecourty\DataGouv\DataServices\Geo\Client\Normalizer\EpciNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geo\Client\Model\Departement::class => \Ecourty\DataGouv\DataServices\Geo\Client\Normalizer\DepartementNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geo\Client\Model\Region::class => \Ecourty\DataGouv\DataServices\Geo\Client\Normalizer\RegionNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Ecourty\DataGouv\DataServices\Geo\Client\Runtime\Normalizer\ReferenceNormalizer::class,
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
            
            \Ecourty\DataGouv\DataServices\Geo\Client\Model\Error::class => false,
            \Ecourty\DataGouv\DataServices\Geo\Client\Model\Commune::class => false,
            \Ecourty\DataGouv\DataServices\Geo\Client\Model\CommuneAssocieesItem::class => false,
            \Ecourty\DataGouv\DataServices\Geo\Client\Model\CommuneDelegueesItem::class => false,
            \Ecourty\DataGouv\DataServices\Geo\Client\Model\CommuneAssocieeDeleguee::class => false,
            \Ecourty\DataGouv\DataServices\Geo\Client\Model\Epci::class => false,
            \Ecourty\DataGouv\DataServices\Geo\Client\Model\Departement::class => false,
            \Ecourty\DataGouv\DataServices\Geo\Client\Model\Region::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}