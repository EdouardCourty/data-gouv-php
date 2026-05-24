<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Normalizer\CheckArray;
use Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GeocodeProcessingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GeocodeProcessing::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GeocodeProcessing::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GeocodeProcessing();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('step', $data)) {
            $object->setStep($data['step']);
        }
        if (\array_key_exists('validationProgress', $data)) {
            $object->setValidationProgress($data['validationProgress']);
        }
        if (\array_key_exists('validationError', $data)) {
            $object->setValidationError($data['validationError']);
        }
        if (\array_key_exists('geocodingProgress', $data)) {
            $object->setGeocodingProgress($data['geocodingProgress']);
        }
        if (\array_key_exists('geocodingError', $data)) {
            $object->setGeocodingError($data['geocodingError']);
        }
        if (\array_key_exists('globalError', $data)) {
            $object->setGlobalError($data['globalError']);
        }
        if (\array_key_exists('startedAt', $data)) {
            $object->setStartedAt((new \DateTime($data['startedAt'])));
        }
        if (\array_key_exists('finishedAt', $data)) {
            $object->setFinishedAt((new \DateTime($data['finishedAt'])));
        }
        if (\array_key_exists('heartbeat', $data)) {
            $object->setHeartbeat((new \DateTime($data['heartbeat'])));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('step') && null !== $data->getStep()) {
            $dataArray['step'] = $data->getStep();
        }
        if ($data->isInitialized('validationProgress') && null !== $data->getValidationProgress()) {
            $dataArray['validationProgress'] = $data->getValidationProgress();
        }
        if ($data->isInitialized('validationError') && null !== $data->getValidationError()) {
            $dataArray['validationError'] = $data->getValidationError();
        }
        if ($data->isInitialized('geocodingProgress') && null !== $data->getGeocodingProgress()) {
            $dataArray['geocodingProgress'] = $data->getGeocodingProgress();
        }
        if ($data->isInitialized('geocodingError') && null !== $data->getGeocodingError()) {
            $dataArray['geocodingError'] = $data->getGeocodingError();
        }
        if ($data->isInitialized('globalError') && null !== $data->getGlobalError()) {
            $dataArray['globalError'] = $data->getGlobalError();
        }
        if ($data->isInitialized('startedAt') && null !== $data->getStartedAt()) {
            $dataArray['startedAt'] = $data->getStartedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('finishedAt') && null !== $data->getFinishedAt()) {
            $dataArray['finishedAt'] = $data->getFinishedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('heartbeat') && null !== $data->getHeartbeat()) {
            $dataArray['heartbeat'] = $data->getHeartbeat()?->format('Y-m-d\TH:i:sP');
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GeocodeProcessing::class => false];
    }
}