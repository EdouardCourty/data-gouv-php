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
class EluNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Elu::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Elu::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Elu();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('nom', $data) && $data['nom'] !== null) {
            $object->setNom($data['nom']);
            unset($data['nom']);
        }
        elseif (\array_key_exists('nom', $data) && $data['nom'] === null) {
            $object->setNom(null);
        }
        if (\array_key_exists('prenoms', $data) && $data['prenoms'] !== null) {
            $object->setPrenoms($data['prenoms']);
            unset($data['prenoms']);
        }
        elseif (\array_key_exists('prenoms', $data) && $data['prenoms'] === null) {
            $object->setPrenoms(null);
        }
        if (\array_key_exists('annee_de_naissance', $data) && $data['annee_de_naissance'] !== null) {
            $object->setAnneeDeNaissance($data['annee_de_naissance']);
            unset($data['annee_de_naissance']);
        }
        elseif (\array_key_exists('annee_de_naissance', $data) && $data['annee_de_naissance'] === null) {
            $object->setAnneeDeNaissance(null);
        }
        if (\array_key_exists('fonction', $data) && $data['fonction'] !== null) {
            $object->setFonction($data['fonction']);
            unset($data['fonction']);
        }
        elseif (\array_key_exists('fonction', $data) && $data['fonction'] === null) {
            $object->setFonction(null);
        }
        if (\array_key_exists('sexe', $data) && $data['sexe'] !== null) {
            $object->setSexe($data['sexe']);
            unset($data['sexe']);
        }
        elseif (\array_key_exists('sexe', $data) && $data['sexe'] === null) {
            $object->setSexe(null);
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
        if ($data->isInitialized('nom')) {
            $dataArray['nom'] = $data->getNom();
        }
        if ($data->isInitialized('prenoms')) {
            $dataArray['prenoms'] = $data->getPrenoms();
        }
        if ($data->isInitialized('anneeDeNaissance')) {
            $dataArray['annee_de_naissance'] = $data->getAnneeDeNaissance();
        }
        if ($data->isInitialized('fonction')) {
            $dataArray['fonction'] = $data->getFonction();
        }
        if ($data->isInitialized('sexe')) {
            $dataArray['sexe'] = $data->getSexe();
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
        return [\Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Elu::class => false];
    }
}