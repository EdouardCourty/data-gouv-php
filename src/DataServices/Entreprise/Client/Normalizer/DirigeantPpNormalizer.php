<?php

namespace Ecourty\DataGouv\DataServices\Entreprise\Client\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Ecourty\DataGouv\DataServices\Entreprise\Client\Runtime\Normalizer\CheckArray;
use Ecourty\DataGouv\DataServices\Entreprise\Client\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DirigeantPpNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\DirigeantPp::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\DirigeantPp::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\DirigeantPp();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('nom', $data)) {
            $object->setNom($data['nom']);
            unset($data['nom']);
        }
        if (\array_key_exists('prenoms', $data)) {
            $object->setPrenoms($data['prenoms']);
            unset($data['prenoms']);
        }
        if (\array_key_exists('annee_de_naissance', $data)) {
            $object->setAnneeDeNaissance($data['annee_de_naissance']);
            unset($data['annee_de_naissance']);
        }
        if (\array_key_exists('date_de_naissance', $data)) {
            $object->setDateDeNaissance($data['date_de_naissance']);
            unset($data['date_de_naissance']);
        }
        if (\array_key_exists('qualite', $data)) {
            $object->setQualite($data['qualite']);
            unset($data['qualite']);
        }
        if (\array_key_exists('nationalite', $data)) {
            $object->setNationalite($data['nationalite']);
            unset($data['nationalite']);
        }
        if (\array_key_exists('type_dirigeant', $data)) {
            $object->setTypeDirigeant($data['type_dirigeant']);
            unset($data['type_dirigeant']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('nom') && null !== $data->getNom()) {
            $dataArray['nom'] = $data->getNom();
        }
        if ($data->isInitialized('prenoms') && null !== $data->getPrenoms()) {
            $dataArray['prenoms'] = $data->getPrenoms();
        }
        if ($data->isInitialized('anneeDeNaissance') && null !== $data->getAnneeDeNaissance()) {
            $dataArray['annee_de_naissance'] = $data->getAnneeDeNaissance();
        }
        if ($data->isInitialized('dateDeNaissance') && null !== $data->getDateDeNaissance()) {
            $dataArray['date_de_naissance'] = $data->getDateDeNaissance();
        }
        if ($data->isInitialized('qualite') && null !== $data->getQualite()) {
            $dataArray['qualite'] = $data->getQualite();
        }
        if ($data->isInitialized('nationalite') && null !== $data->getNationalite()) {
            $dataArray['nationalite'] = $data->getNationalite();
        }
        if ($data->isInitialized('typeDirigeant') && null !== $data->getTypeDirigeant()) {
            $dataArray['type_dirigeant'] = $data->getTypeDirigeant();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\Entreprise\Client\Model\DirigeantPp::class => false];
    }
}