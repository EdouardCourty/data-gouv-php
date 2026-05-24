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
class LienSuccessionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Sirene\Client\Model\LienSuccession::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Sirene\Client\Model\LienSuccession::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Sirene\Client\Model\LienSuccession();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('transfertSiege', $data) && \is_int($data['transfertSiege'])) {
            $data['transfertSiege'] = (bool) $data['transfertSiege'];
        }
        if (\array_key_exists('continuiteEconomique', $data) && \is_int($data['continuiteEconomique'])) {
            $data['continuiteEconomique'] = (bool) $data['continuiteEconomique'];
        }
        if (\array_key_exists('siretEtablissementPredecesseur', $data)) {
            $object->setSiretEtablissementPredecesseur($data['siretEtablissementPredecesseur']);
        }
        if (\array_key_exists('siretEtablissementSuccesseur', $data)) {
            $object->setSiretEtablissementSuccesseur($data['siretEtablissementSuccesseur']);
        }
        if (\array_key_exists('dateLienSuccession', $data)) {
            $object->setDateLienSuccession((new \DateTime($data['dateLienSuccession']))->setTime(0, 0, 0));
        }
        if (\array_key_exists('transfertSiege', $data)) {
            $object->setTransfertSiege($data['transfertSiege']);
        }
        if (\array_key_exists('continuiteEconomique', $data)) {
            $object->setContinuiteEconomique($data['continuiteEconomique']);
        }
        if (\array_key_exists('dateDernierTraitementLienSuccession', $data)) {
            $object->setDateDernierTraitementLienSuccession((new \DateTime($data['dateDernierTraitementLienSuccession'])));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('siretEtablissementPredecesseur') && null !== $data->getSiretEtablissementPredecesseur()) {
            $dataArray['siretEtablissementPredecesseur'] = $data->getSiretEtablissementPredecesseur();
        }
        if ($data->isInitialized('siretEtablissementSuccesseur') && null !== $data->getSiretEtablissementSuccesseur()) {
            $dataArray['siretEtablissementSuccesseur'] = $data->getSiretEtablissementSuccesseur();
        }
        if ($data->isInitialized('dateLienSuccession') && null !== $data->getDateLienSuccession()) {
            $dataArray['dateLienSuccession'] = $data->getDateLienSuccession()?->format('Y-m-d');
        }
        if ($data->isInitialized('transfertSiege') && null !== $data->getTransfertSiege()) {
            $dataArray['transfertSiege'] = $data->getTransfertSiege();
        }
        if ($data->isInitialized('continuiteEconomique') && null !== $data->getContinuiteEconomique()) {
            $dataArray['continuiteEconomique'] = $data->getContinuiteEconomique();
        }
        if ($data->isInitialized('dateDernierTraitementLienSuccession') && null !== $data->getDateDernierTraitementLienSuccession()) {
            $dataArray['dateDernierTraitementLienSuccession'] = $data->getDateDernierTraitementLienSuccession()?->format('Y-m-d\TH:i:sP');
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\Sirene\Client\Model\LienSuccession::class => false];
    }
}