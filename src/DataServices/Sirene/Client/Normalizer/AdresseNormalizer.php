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
class AdresseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Sirene\Client\Model\Adresse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Sirene\Client\Model\Adresse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Sirene\Client\Model\Adresse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('complementAdresseEtablissement', $data)) {
            $object->setComplementAdresseEtablissement($data['complementAdresseEtablissement']);
        }
        if (\array_key_exists('numeroVoieEtablissement', $data)) {
            $object->setNumeroVoieEtablissement($data['numeroVoieEtablissement']);
        }
        if (\array_key_exists('indiceRepetitionEtablissement', $data)) {
            $object->setIndiceRepetitionEtablissement($data['indiceRepetitionEtablissement']);
        }
        if (\array_key_exists('dernierNumeroVoieEtablissement', $data)) {
            $object->setDernierNumeroVoieEtablissement($data['dernierNumeroVoieEtablissement']);
        }
        if (\array_key_exists('indiceRepetitionDernierNumeroVoieEtablissement', $data)) {
            $object->setIndiceRepetitionDernierNumeroVoieEtablissement($data['indiceRepetitionDernierNumeroVoieEtablissement']);
        }
        if (\array_key_exists('typeVoieEtablissement', $data)) {
            $object->setTypeVoieEtablissement($data['typeVoieEtablissement']);
        }
        if (\array_key_exists('libelleVoieEtablissement', $data)) {
            $object->setLibelleVoieEtablissement($data['libelleVoieEtablissement']);
        }
        if (\array_key_exists('codePostalEtablissement', $data)) {
            $object->setCodePostalEtablissement($data['codePostalEtablissement']);
        }
        if (\array_key_exists('libelleCommuneEtablissement', $data)) {
            $object->setLibelleCommuneEtablissement($data['libelleCommuneEtablissement']);
        }
        if (\array_key_exists('libelleCommuneEtrangerEtablissement', $data)) {
            $object->setLibelleCommuneEtrangerEtablissement($data['libelleCommuneEtrangerEtablissement']);
        }
        if (\array_key_exists('distributionSpecialeEtablissement', $data)) {
            $object->setDistributionSpecialeEtablissement($data['distributionSpecialeEtablissement']);
        }
        if (\array_key_exists('codeCommuneEtablissement', $data)) {
            $object->setCodeCommuneEtablissement($data['codeCommuneEtablissement']);
        }
        if (\array_key_exists('codeCedexEtablissement', $data)) {
            $object->setCodeCedexEtablissement($data['codeCedexEtablissement']);
        }
        if (\array_key_exists('libelleCedexEtablissement', $data)) {
            $object->setLibelleCedexEtablissement($data['libelleCedexEtablissement']);
        }
        if (\array_key_exists('codePaysEtrangerEtablissement', $data)) {
            $object->setCodePaysEtrangerEtablissement($data['codePaysEtrangerEtablissement']);
        }
        if (\array_key_exists('libellePaysEtrangerEtablissement', $data)) {
            $object->setLibellePaysEtrangerEtablissement($data['libellePaysEtrangerEtablissement']);
        }
        if (\array_key_exists('identifiantAdresseEtablissement', $data)) {
            $object->setIdentifiantAdresseEtablissement($data['identifiantAdresseEtablissement']);
        }
        if (\array_key_exists('coordonneeLambertAbscisseEtablissement', $data)) {
            $object->setCoordonneeLambertAbscisseEtablissement($data['coordonneeLambertAbscisseEtablissement']);
        }
        if (\array_key_exists('coordonneeLambertOrdonneeEtablissement', $data)) {
            $object->setCoordonneeLambertOrdonneeEtablissement($data['coordonneeLambertOrdonneeEtablissement']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('complementAdresseEtablissement') && null !== $data->getComplementAdresseEtablissement()) {
            $dataArray['complementAdresseEtablissement'] = $data->getComplementAdresseEtablissement();
        }
        if ($data->isInitialized('numeroVoieEtablissement') && null !== $data->getNumeroVoieEtablissement()) {
            $dataArray['numeroVoieEtablissement'] = $data->getNumeroVoieEtablissement();
        }
        if ($data->isInitialized('indiceRepetitionEtablissement') && null !== $data->getIndiceRepetitionEtablissement()) {
            $dataArray['indiceRepetitionEtablissement'] = $data->getIndiceRepetitionEtablissement();
        }
        if ($data->isInitialized('dernierNumeroVoieEtablissement') && null !== $data->getDernierNumeroVoieEtablissement()) {
            $dataArray['dernierNumeroVoieEtablissement'] = $data->getDernierNumeroVoieEtablissement();
        }
        if ($data->isInitialized('indiceRepetitionDernierNumeroVoieEtablissement') && null !== $data->getIndiceRepetitionDernierNumeroVoieEtablissement()) {
            $dataArray['indiceRepetitionDernierNumeroVoieEtablissement'] = $data->getIndiceRepetitionDernierNumeroVoieEtablissement();
        }
        if ($data->isInitialized('typeVoieEtablissement') && null !== $data->getTypeVoieEtablissement()) {
            $dataArray['typeVoieEtablissement'] = $data->getTypeVoieEtablissement();
        }
        if ($data->isInitialized('libelleVoieEtablissement') && null !== $data->getLibelleVoieEtablissement()) {
            $dataArray['libelleVoieEtablissement'] = $data->getLibelleVoieEtablissement();
        }
        if ($data->isInitialized('codePostalEtablissement') && null !== $data->getCodePostalEtablissement()) {
            $dataArray['codePostalEtablissement'] = $data->getCodePostalEtablissement();
        }
        if ($data->isInitialized('libelleCommuneEtablissement') && null !== $data->getLibelleCommuneEtablissement()) {
            $dataArray['libelleCommuneEtablissement'] = $data->getLibelleCommuneEtablissement();
        }
        if ($data->isInitialized('libelleCommuneEtrangerEtablissement') && null !== $data->getLibelleCommuneEtrangerEtablissement()) {
            $dataArray['libelleCommuneEtrangerEtablissement'] = $data->getLibelleCommuneEtrangerEtablissement();
        }
        if ($data->isInitialized('distributionSpecialeEtablissement') && null !== $data->getDistributionSpecialeEtablissement()) {
            $dataArray['distributionSpecialeEtablissement'] = $data->getDistributionSpecialeEtablissement();
        }
        if ($data->isInitialized('codeCommuneEtablissement') && null !== $data->getCodeCommuneEtablissement()) {
            $dataArray['codeCommuneEtablissement'] = $data->getCodeCommuneEtablissement();
        }
        if ($data->isInitialized('codeCedexEtablissement') && null !== $data->getCodeCedexEtablissement()) {
            $dataArray['codeCedexEtablissement'] = $data->getCodeCedexEtablissement();
        }
        if ($data->isInitialized('libelleCedexEtablissement') && null !== $data->getLibelleCedexEtablissement()) {
            $dataArray['libelleCedexEtablissement'] = $data->getLibelleCedexEtablissement();
        }
        if ($data->isInitialized('codePaysEtrangerEtablissement') && null !== $data->getCodePaysEtrangerEtablissement()) {
            $dataArray['codePaysEtrangerEtablissement'] = $data->getCodePaysEtrangerEtablissement();
        }
        if ($data->isInitialized('libellePaysEtrangerEtablissement') && null !== $data->getLibellePaysEtrangerEtablissement()) {
            $dataArray['libellePaysEtrangerEtablissement'] = $data->getLibellePaysEtrangerEtablissement();
        }
        if ($data->isInitialized('identifiantAdresseEtablissement') && null !== $data->getIdentifiantAdresseEtablissement()) {
            $dataArray['identifiantAdresseEtablissement'] = $data->getIdentifiantAdresseEtablissement();
        }
        if ($data->isInitialized('coordonneeLambertAbscisseEtablissement') && null !== $data->getCoordonneeLambertAbscisseEtablissement()) {
            $dataArray['coordonneeLambertAbscisseEtablissement'] = $data->getCoordonneeLambertAbscisseEtablissement();
        }
        if ($data->isInitialized('coordonneeLambertOrdonneeEtablissement') && null !== $data->getCoordonneeLambertOrdonneeEtablissement()) {
            $dataArray['coordonneeLambertOrdonneeEtablissement'] = $data->getCoordonneeLambertOrdonneeEtablissement();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\Sirene\Client\Model\Adresse::class => false];
    }
}