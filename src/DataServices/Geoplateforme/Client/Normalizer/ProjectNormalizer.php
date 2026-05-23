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
class ProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Project::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Project::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Project();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdAt']));
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updatedAt']));
        }
        if (\array_key_exists('params', $data)) {
            $object->setParams($this->denormalizer->denormalize($data['params'], \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\ProjectParams::class, 'json', $context));
        }
        if (\array_key_exists('pipeline', $data)) {
            $object->setPipeline($this->denormalizer->denormalize($data['pipeline'], \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Pipeline::class, 'json', $context));
        }
        if (\array_key_exists('inputFile', $data)) {
            $object->setInputFile($data['inputFile']);
        }
        if (\array_key_exists('outputFile', $data)) {
            $object->setOutputFile($data['outputFile']);
        }
        if (\array_key_exists('processing', $data)) {
            $object->setProcessing($this->denormalizer->denormalize($data['processing'], \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\GeocodeProcessing::class, 'json', $context));
        }
        if (\array_key_exists('token', $data)) {
            $object->setToken($data['token']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['createdAt'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updatedAt'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('params') && null !== $data->getParams()) {
            $dataArray['params'] = $this->normalizer->normalize($data->getParams(), 'json', $context);
        }
        if ($data->isInitialized('pipeline') && null !== $data->getPipeline()) {
            $dataArray['pipeline'] = $this->normalizer->normalize($data->getPipeline(), 'json', $context);
        }
        if ($data->isInitialized('inputFile') && null !== $data->getInputFile()) {
            $dataArray['inputFile'] = $data->getInputFile();
        }
        if ($data->isInitialized('outputFile') && null !== $data->getOutputFile()) {
            $dataArray['outputFile'] = $data->getOutputFile();
        }
        if ($data->isInitialized('processing') && null !== $data->getProcessing()) {
            $dataArray['processing'] = $this->normalizer->normalize($data->getProcessing(), 'json', $context);
        }
        if ($data->isInitialized('token') && null !== $data->getToken()) {
            $dataArray['token'] = $data->getToken();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Project::class => false];
    }
}