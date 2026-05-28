<?php

namespace Ecourty\DataGouv\DataServices\Entreprise\Client\Normalizer;

use Ecourty\DataGouv\DataServices\Entreprise\Client\Runtime\Normalizer\CheckArray;
use Ecourty\DataGouv\DataServices\Entreprise\Client\Runtime\Normalizer\ValidatorTrait;
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
        
        \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\FinancesItem::class => \Ecourty\DataGouv\DataServices\Entreprise\Client\Normalizer\FinancesItemNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\DirigeantPp::class => \Ecourty\DataGouv\DataServices\Entreprise\Client\Normalizer\DirigeantPpNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\DirigeantPm::class => \Ecourty\DataGouv\DataServices\Entreprise\Client\Normalizer\DirigeantPmNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\CollectiviteTerritoriale::class => \Ecourty\DataGouv\DataServices\Entreprise\Client\Normalizer\CollectiviteTerritorialeNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Elu::class => \Ecourty\DataGouv\DataServices\Entreprise\Client\Normalizer\EluNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Etablissement::class => \Ecourty\DataGouv\DataServices\Entreprise\Client\Normalizer\EtablissementNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Siege::class => \Ecourty\DataGouv\DataServices\Entreprise\Client\Normalizer\SiegeNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Result::class => \Ecourty\DataGouv\DataServices\Entreprise\Client\Normalizer\ResultNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\ResultComplements::class => \Ecourty\DataGouv\DataServices\Entreprise\Client\Normalizer\ResultComplementsNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Payload::class => \Ecourty\DataGouv\DataServices\Entreprise\Client\Normalizer\PayloadNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\SearchGetResponse400::class => \Ecourty\DataGouv\DataServices\Entreprise\Client\Normalizer\SearchGetResponse400Normalizer::class,
        
        \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\NearPointGetResponse400::class => \Ecourty\DataGouv\DataServices\Entreprise\Client\Normalizer\NearPointGetResponse400Normalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Ecourty\DataGouv\DataServices\Entreprise\Client\Runtime\Normalizer\ReferenceNormalizer::class,
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
            
            \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\FinancesItem::class => false,
            \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\DirigeantPp::class => false,
            \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\DirigeantPm::class => false,
            \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\CollectiviteTerritoriale::class => false,
            \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Elu::class => false,
            \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Etablissement::class => false,
            \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Siege::class => false,
            \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Result::class => false,
            \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\ResultComplements::class => false,
            \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Payload::class => false,
            \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\SearchGetResponse400::class => false,
            \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\NearPointGetResponse400::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}