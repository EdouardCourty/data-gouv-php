<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer;

use Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Normalizer\CheckArray;
use Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Normalizer\ValidatorTrait;
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
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Getcapabilities::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\GetcapabilitiesNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GetcapabilitiesInfo::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\GetcapabilitiesInfoNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GetcapabilitiesApi::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\GetcapabilitiesApiNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GetcapabilitiesOperationsItem::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\GetcapabilitiesOperationsItemNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GetcapabilitiesOperationsItemParametersItem::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\GetcapabilitiesOperationsItemParametersItemNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GetcapabilitiesOperationsItemParametersItemSchema::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\GetcapabilitiesOperationsItemParametersItemSchemaNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GetcapabilitiesIndexesItem::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\GetcapabilitiesIndexesItemNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GetcapabilitiesIndexesItemFieldsItem::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\GetcapabilitiesIndexesItemFieldsItemNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Parcel::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\ParcelNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\ParcelProperties::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\ParcelPropertiesNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\ParcelReverse::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\ParcelReverseNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\ParcelReverseProperties::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\ParcelReversePropertiesNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Address::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\AddressNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\AddressProperties::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\AddressPropertiesNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\AddressReverse::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\AddressReverseNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\AddressReverseProperties::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\AddressReversePropertiesNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Poi::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\PoiNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\PoiProperties::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\PoiPropertiesNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\PoiReverse::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\PoiReverseNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\PoiReverseProperties::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\PoiReversePropertiesNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Geometry::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\GeometryNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GeometryPoint::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\GeometryPointNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GeometryCircle::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\GeometryCircleNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GeometryLineString::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\GeometryLineStringNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GeometryPolygon::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\GeometryPolygonNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GeometryMultiPolygon::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\GeometryMultiPolygonNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\HouseNumberInfos::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\HouseNumberInfosNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Project::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\ProjectNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GeocodeProcessing::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\GeocodeProcessingNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Pipeline::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\PipelineNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\PipelineGeocodeOptions::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\PipelineGeocodeOptionsNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\ProjectParams::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\ProjectParamsNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\SearchCsvPostBody::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\SearchCsvPostBodyNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\ReverseCsvPostBody::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer\ReverseCsvPostBodyNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Normalizer\ReferenceNormalizer::class,
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
            
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Getcapabilities::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GetcapabilitiesInfo::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GetcapabilitiesApi::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GetcapabilitiesOperationsItem::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GetcapabilitiesOperationsItemParametersItem::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GetcapabilitiesOperationsItemParametersItemSchema::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GetcapabilitiesIndexesItem::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GetcapabilitiesIndexesItemFieldsItem::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Parcel::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\ParcelProperties::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\ParcelReverse::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\ParcelReverseProperties::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Address::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\AddressProperties::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\AddressReverse::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\AddressReverseProperties::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Poi::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\PoiProperties::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\PoiReverse::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\PoiReverseProperties::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Geometry::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GeometryPoint::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GeometryCircle::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GeometryLineString::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GeometryPolygon::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GeometryMultiPolygon::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\HouseNumberInfos::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Project::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GeocodeProcessing::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Pipeline::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\PipelineGeocodeOptions::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\ProjectParams::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\SearchCsvPostBody::class => false,
            \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\ReverseCsvPostBody::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}