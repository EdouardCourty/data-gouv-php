<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Normalizer;

use Ecourty\DataGouv\DataServices\Sirene\Client\Runtime\Normalizer\CheckArray;
use Ecourty\DataGouv\DataServices\Sirene\Client\Runtime\Normalizer\ValidatorTrait;
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
        
        \Ecourty\DataGouv\DataServices\Sirene\Client\Model\Adresse::class => \Ecourty\DataGouv\DataServices\Sirene\Client\Normalizer\AdresseNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Sirene\Client\Model\AdresseComplementaire::class => \Ecourty\DataGouv\DataServices\Sirene\Client\Normalizer\AdresseComplementaireNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Sirene\Client\Model\Comptage::class => \Ecourty\DataGouv\DataServices\Sirene\Client\Normalizer\ComptageNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Sirene\Client\Model\Etablissement::class => \Ecourty\DataGouv\DataServices\Sirene\Client\Normalizer\EtablissementNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Sirene\Client\Model\Facette::class => \Ecourty\DataGouv\DataServices\Sirene\Client\Normalizer\FacetteNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Sirene\Client\Model\Header::class => \Ecourty\DataGouv\DataServices\Sirene\Client\Normalizer\HeaderNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Sirene\Client\Model\PeriodeEtablissement::class => \Ecourty\DataGouv\DataServices\Sirene\Client\Normalizer\PeriodeEtablissementNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseEtablissements::class => \Ecourty\DataGouv\DataServices\Sirene\Client\Normalizer\ReponseEtablissementsNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Sirene\Client\Model\UniteLegaleEtablissement::class => \Ecourty\DataGouv\DataServices\Sirene\Client\Normalizer\UniteLegaleEtablissementNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseErreur::class => \Ecourty\DataGouv\DataServices\Sirene\Client\Normalizer\ReponseErreurNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Sirene\Client\Model\EtablissementPostMultiCriteres::class => \Ecourty\DataGouv\DataServices\Sirene\Client\Normalizer\EtablissementPostMultiCriteresNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Sirene\Client\Model\PeriodeUniteLegale::class => \Ecourty\DataGouv\DataServices\Sirene\Client\Normalizer\PeriodeUniteLegaleNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseUnitesLegales::class => \Ecourty\DataGouv\DataServices\Sirene\Client\Normalizer\ReponseUnitesLegalesNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Sirene\Client\Model\UniteLegale::class => \Ecourty\DataGouv\DataServices\Sirene\Client\Normalizer\UniteLegaleNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Sirene\Client\Model\UniteLegalePostMultiCriteres::class => \Ecourty\DataGouv\DataServices\Sirene\Client\Normalizer\UniteLegalePostMultiCriteresNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseEtablissement::class => \Ecourty\DataGouv\DataServices\Sirene\Client\Normalizer\ReponseEtablissementNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Sirene\Client\Model\LienSuccession::class => \Ecourty\DataGouv\DataServices\Sirene\Client\Normalizer\LienSuccessionNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseLienSuccession::class => \Ecourty\DataGouv\DataServices\Sirene\Client\Normalizer\ReponseLienSuccessionNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseUniteLegale::class => \Ecourty\DataGouv\DataServices\Sirene\Client\Normalizer\ReponseUniteLegaleNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Sirene\Client\Model\DatesMiseAJourDonnees::class => \Ecourty\DataGouv\DataServices\Sirene\Client\Normalizer\DatesMiseAJourDonneesNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Sirene\Client\Model\EtatCollection::class => \Ecourty\DataGouv\DataServices\Sirene\Client\Normalizer\EtatCollectionNormalizer::class,
        
        \Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseInformations::class => \Ecourty\DataGouv\DataServices\Sirene\Client\Normalizer\ReponseInformationsNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Ecourty\DataGouv\DataServices\Sirene\Client\Runtime\Normalizer\ReferenceNormalizer::class,
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
            
            \Ecourty\DataGouv\DataServices\Sirene\Client\Model\Adresse::class => false,
            \Ecourty\DataGouv\DataServices\Sirene\Client\Model\AdresseComplementaire::class => false,
            \Ecourty\DataGouv\DataServices\Sirene\Client\Model\Comptage::class => false,
            \Ecourty\DataGouv\DataServices\Sirene\Client\Model\Etablissement::class => false,
            \Ecourty\DataGouv\DataServices\Sirene\Client\Model\Facette::class => false,
            \Ecourty\DataGouv\DataServices\Sirene\Client\Model\Header::class => false,
            \Ecourty\DataGouv\DataServices\Sirene\Client\Model\PeriodeEtablissement::class => false,
            \Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseEtablissements::class => false,
            \Ecourty\DataGouv\DataServices\Sirene\Client\Model\UniteLegaleEtablissement::class => false,
            \Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseErreur::class => false,
            \Ecourty\DataGouv\DataServices\Sirene\Client\Model\EtablissementPostMultiCriteres::class => false,
            \Ecourty\DataGouv\DataServices\Sirene\Client\Model\PeriodeUniteLegale::class => false,
            \Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseUnitesLegales::class => false,
            \Ecourty\DataGouv\DataServices\Sirene\Client\Model\UniteLegale::class => false,
            \Ecourty\DataGouv\DataServices\Sirene\Client\Model\UniteLegalePostMultiCriteres::class => false,
            \Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseEtablissement::class => false,
            \Ecourty\DataGouv\DataServices\Sirene\Client\Model\LienSuccession::class => false,
            \Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseLienSuccession::class => false,
            \Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseUniteLegale::class => false,
            \Ecourty\DataGouv\DataServices\Sirene\Client\Model\DatesMiseAJourDonnees::class => false,
            \Ecourty\DataGouv\DataServices\Sirene\Client\Model\EtatCollection::class => false,
            \Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseInformations::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}