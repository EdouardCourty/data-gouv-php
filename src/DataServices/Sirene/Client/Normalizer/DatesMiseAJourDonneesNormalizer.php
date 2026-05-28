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
class DatesMiseAJourDonneesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Sirene\Client\Model\DatesMiseAJourDonnees::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Sirene\Client\Model\DatesMiseAJourDonnees::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Sirene\Client\Model\DatesMiseAJourDonnees();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('collection', $data)) {
            $object->setCollection($data['collection']);
        }
        if (\array_key_exists('dateDerniereMiseADisposition', $data)) {
            $object->setDateDerniereMiseADisposition((new \DateTime($data['dateDerniereMiseADisposition'])));
        }
        if (\array_key_exists('dateDernierTraitementMaximum', $data)) {
            $object->setDateDernierTraitementMaximum((new \DateTime($data['dateDernierTraitementMaximum'])));
        }
        if (\array_key_exists('dateDernierTraitementDeMasse', $data)) {
            $object->setDateDernierTraitementDeMasse((new \DateTime($data['dateDernierTraitementDeMasse'])));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('collection') && null !== $data->getCollection()) {
            $dataArray['collection'] = $data->getCollection();
        }
        if ($data->isInitialized('dateDerniereMiseADisposition') && null !== $data->getDateDerniereMiseADisposition()) {
            $dataArray['dateDerniereMiseADisposition'] = $data->getDateDerniereMiseADisposition()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('dateDernierTraitementMaximum') && null !== $data->getDateDernierTraitementMaximum()) {
            $dataArray['dateDernierTraitementMaximum'] = $data->getDateDernierTraitementMaximum()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('dateDernierTraitementDeMasse') && null !== $data->getDateDernierTraitementDeMasse()) {
            $dataArray['dateDernierTraitementDeMasse'] = $data->getDateDernierTraitementDeMasse()?->format('Y-m-d\TH:i:sP');
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\Sirene\Client\Model\DatesMiseAJourDonnees::class => false];
    }
}