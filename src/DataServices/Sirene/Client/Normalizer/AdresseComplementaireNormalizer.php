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
class AdresseComplementaireNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Sirene\Client\Model\AdresseComplementaire::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Sirene\Client\Model\AdresseComplementaire::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Sirene\Client\Model\AdresseComplementaire();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('complementAdresse2Etablissement', $data)) {
            $object->setComplementAdresse2Etablissement($data['complementAdresse2Etablissement']);
        }
        if (\array_key_exists('numeroVoie2Etablissement', $data)) {
            $object->setNumeroVoie2Etablissement($data['numeroVoie2Etablissement']);
        }
        if (\array_key_exists('indiceRepetition2Etablissement', $data)) {
            $object->setIndiceRepetition2Etablissement($data['indiceRepetition2Etablissement']);
        }
        if (\array_key_exists('typeVoie2Etablissement', $data)) {
            $object->setTypeVoie2Etablissement($data['typeVoie2Etablissement']);
        }
        if (\array_key_exists('libelleVoie2Etablissement', $data)) {
            $object->setLibelleVoie2Etablissement($data['libelleVoie2Etablissement']);
        }
        if (\array_key_exists('codePostal2Etablissement', $data)) {
            $object->setCodePostal2Etablissement($data['codePostal2Etablissement']);
        }
        if (\array_key_exists('libelleCommune2Etablissement', $data)) {
            $object->setLibelleCommune2Etablissement($data['libelleCommune2Etablissement']);
        }
        if (\array_key_exists('libelleCommuneEtranger2Etablissement', $data)) {
            $object->setLibelleCommuneEtranger2Etablissement($data['libelleCommuneEtranger2Etablissement']);
        }
        if (\array_key_exists('distributionSpeciale2Etablissement', $data)) {
            $object->setDistributionSpeciale2Etablissement($data['distributionSpeciale2Etablissement']);
        }
        if (\array_key_exists('codeCommune2Etablissement', $data)) {
            $object->setCodeCommune2Etablissement($data['codeCommune2Etablissement']);
        }
        if (\array_key_exists('codeCedex2Etablissement', $data)) {
            $object->setCodeCedex2Etablissement($data['codeCedex2Etablissement']);
        }
        if (\array_key_exists('libelleCedex2Etablissement', $data)) {
            $object->setLibelleCedex2Etablissement($data['libelleCedex2Etablissement']);
        }
        if (\array_key_exists('codePaysEtranger2Etablissement', $data)) {
            $object->setCodePaysEtranger2Etablissement($data['codePaysEtranger2Etablissement']);
        }
        if (\array_key_exists('libellePaysEtranger2Etablissement', $data)) {
            $object->setLibellePaysEtranger2Etablissement($data['libellePaysEtranger2Etablissement']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('complementAdresse2Etablissement') && null !== $data->getComplementAdresse2Etablissement()) {
            $dataArray['complementAdresse2Etablissement'] = $data->getComplementAdresse2Etablissement();
        }
        if ($data->isInitialized('numeroVoie2Etablissement') && null !== $data->getNumeroVoie2Etablissement()) {
            $dataArray['numeroVoie2Etablissement'] = $data->getNumeroVoie2Etablissement();
        }
        if ($data->isInitialized('indiceRepetition2Etablissement') && null !== $data->getIndiceRepetition2Etablissement()) {
            $dataArray['indiceRepetition2Etablissement'] = $data->getIndiceRepetition2Etablissement();
        }
        if ($data->isInitialized('typeVoie2Etablissement') && null !== $data->getTypeVoie2Etablissement()) {
            $dataArray['typeVoie2Etablissement'] = $data->getTypeVoie2Etablissement();
        }
        if ($data->isInitialized('libelleVoie2Etablissement') && null !== $data->getLibelleVoie2Etablissement()) {
            $dataArray['libelleVoie2Etablissement'] = $data->getLibelleVoie2Etablissement();
        }
        if ($data->isInitialized('codePostal2Etablissement') && null !== $data->getCodePostal2Etablissement()) {
            $dataArray['codePostal2Etablissement'] = $data->getCodePostal2Etablissement();
        }
        if ($data->isInitialized('libelleCommune2Etablissement') && null !== $data->getLibelleCommune2Etablissement()) {
            $dataArray['libelleCommune2Etablissement'] = $data->getLibelleCommune2Etablissement();
        }
        if ($data->isInitialized('libelleCommuneEtranger2Etablissement') && null !== $data->getLibelleCommuneEtranger2Etablissement()) {
            $dataArray['libelleCommuneEtranger2Etablissement'] = $data->getLibelleCommuneEtranger2Etablissement();
        }
        if ($data->isInitialized('distributionSpeciale2Etablissement') && null !== $data->getDistributionSpeciale2Etablissement()) {
            $dataArray['distributionSpeciale2Etablissement'] = $data->getDistributionSpeciale2Etablissement();
        }
        if ($data->isInitialized('codeCommune2Etablissement') && null !== $data->getCodeCommune2Etablissement()) {
            $dataArray['codeCommune2Etablissement'] = $data->getCodeCommune2Etablissement();
        }
        if ($data->isInitialized('codeCedex2Etablissement') && null !== $data->getCodeCedex2Etablissement()) {
            $dataArray['codeCedex2Etablissement'] = $data->getCodeCedex2Etablissement();
        }
        if ($data->isInitialized('libelleCedex2Etablissement') && null !== $data->getLibelleCedex2Etablissement()) {
            $dataArray['libelleCedex2Etablissement'] = $data->getLibelleCedex2Etablissement();
        }
        if ($data->isInitialized('codePaysEtranger2Etablissement') && null !== $data->getCodePaysEtranger2Etablissement()) {
            $dataArray['codePaysEtranger2Etablissement'] = $data->getCodePaysEtranger2Etablissement();
        }
        if ($data->isInitialized('libellePaysEtranger2Etablissement') && null !== $data->getLibellePaysEtranger2Etablissement()) {
            $dataArray['libellePaysEtranger2Etablissement'] = $data->getLibellePaysEtranger2Etablissement();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\Sirene\Client\Model\AdresseComplementaire::class => false];
    }
}