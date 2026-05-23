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
class ResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Result::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Result::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Result();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('siren', $data)) {
            $object->setSiren($data['siren']);
            unset($data['siren']);
        }
        if (\array_key_exists('nom_complet', $data)) {
            $object->setNomComplet($data['nom_complet']);
            unset($data['nom_complet']);
        }
        if (\array_key_exists('nom_raison_sociale', $data)) {
            $object->setNomRaisonSociale($data['nom_raison_sociale']);
            unset($data['nom_raison_sociale']);
        }
        if (\array_key_exists('sigle', $data) && $data['sigle'] !== null) {
            $object->setSigle($data['sigle']);
            unset($data['sigle']);
        }
        elseif (\array_key_exists('sigle', $data) && $data['sigle'] === null) {
            $object->setSigle(null);
        }
        if (\array_key_exists('nombre_etablissements', $data)) {
            $object->setNombreEtablissements($data['nombre_etablissements']);
            unset($data['nombre_etablissements']);
        }
        if (\array_key_exists('nombre_etablissements_ouverts', $data)) {
            $object->setNombreEtablissementsOuverts($data['nombre_etablissements_ouverts']);
            unset($data['nombre_etablissements_ouverts']);
        }
        if (\array_key_exists('siege', $data)) {
            $object->setSiege($this->denormalizer->denormalize($data['siege'], \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Siege::class, 'json', $context));
            unset($data['siege']);
        }
        if (\array_key_exists('activite_principale', $data)) {
            $object->setActivitePrincipale($data['activite_principale']);
            unset($data['activite_principale']);
        }
        if (\array_key_exists('activite_principale_naf25', $data)) {
            $object->setActivitePrincipaleNaf25($data['activite_principale_naf25']);
            unset($data['activite_principale_naf25']);
        }
        if (\array_key_exists('categorie_entreprise', $data)) {
            $object->setCategorieEntreprise($data['categorie_entreprise']);
            unset($data['categorie_entreprise']);
        }
        if (\array_key_exists('caractere_employeur', $data)) {
            $object->setCaractereEmployeur($data['caractere_employeur']);
            unset($data['caractere_employeur']);
        }
        if (\array_key_exists('annee_categorie_entreprise', $data)) {
            $object->setAnneeCategorieEntreprise($data['annee_categorie_entreprise']);
            unset($data['annee_categorie_entreprise']);
        }
        if (\array_key_exists('date_creation', $data)) {
            $object->setDateCreation((new \DateTime($data['date_creation']))->setTime(0, 0, 0));
            unset($data['date_creation']);
        }
        if (\array_key_exists('date_fermeture', $data)) {
            $object->setDateFermeture((new \DateTime($data['date_fermeture']))->setTime(0, 0, 0));
            unset($data['date_fermeture']);
        }
        if (\array_key_exists('date_mise_a_jour', $data)) {
            $object->setDateMiseAJour((new \DateTime($data['date_mise_a_jour'])));
            unset($data['date_mise_a_jour']);
        }
        if (\array_key_exists('date_mise_a_jour_insee', $data) && $data['date_mise_a_jour_insee'] !== null) {
            $object->setDateMiseAJourInsee((new \DateTime($data['date_mise_a_jour_insee'])));
            unset($data['date_mise_a_jour_insee']);
        }
        elseif (\array_key_exists('date_mise_a_jour_insee', $data) && $data['date_mise_a_jour_insee'] === null) {
            $object->setDateMiseAJourInsee(null);
        }
        if (\array_key_exists('date_mise_a_jour_rne', $data) && $data['date_mise_a_jour_rne'] !== null) {
            $object->setDateMiseAJourRne((new \DateTime($data['date_mise_a_jour_rne'])));
            unset($data['date_mise_a_jour_rne']);
        }
        elseif (\array_key_exists('date_mise_a_jour_rne', $data) && $data['date_mise_a_jour_rne'] === null) {
            $object->setDateMiseAJourRne(null);
        }
        if (\array_key_exists('dirigeants', $data)) {
            $values = [];
            foreach ($data['dirigeants'] as $value) {
                $values[] = $value;
            }
            $object->setDirigeants($values);
            unset($data['dirigeants']);
        }
        if (\array_key_exists('etat_administratif', $data)) {
            $object->setEtatAdministratif($data['etat_administratif']);
            unset($data['etat_administratif']);
        }
        if (\array_key_exists('nature_juridique', $data)) {
            $object->setNatureJuridique($data['nature_juridique']);
            unset($data['nature_juridique']);
        }
        if (\array_key_exists('section_activite_principale', $data)) {
            $object->setSectionActivitePrincipale($data['section_activite_principale']);
            unset($data['section_activite_principale']);
        }
        if (\array_key_exists('tranche_effectif_salarie', $data)) {
            $object->setTrancheEffectifSalarie($data['tranche_effectif_salarie']);
            unset($data['tranche_effectif_salarie']);
        }
        if (\array_key_exists('annee_tranche_effectif_salarie', $data)) {
            $object->setAnneeTrancheEffectifSalarie($data['annee_tranche_effectif_salarie']);
            unset($data['annee_tranche_effectif_salarie']);
        }
        if (\array_key_exists('statut_diffusion', $data)) {
            $object->setStatutDiffusion($data['statut_diffusion']);
            unset($data['statut_diffusion']);
        }
        if (\array_key_exists('matching_etablissements', $data)) {
            $values_1 = [];
            foreach ($data['matching_etablissements'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Etablissement::class, 'json', $context);
            }
            $object->setMatchingEtablissements($values_1);
            unset($data['matching_etablissements']);
        }
        if (\array_key_exists('finances', $data)) {
            $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['finances'] as $key => $value_2) {
                $values_2[$key] = $this->denormalizer->denormalize($value_2, \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\FinancesItem::class, 'json', $context);
            }
            $object->setFinances($values_2);
            unset($data['finances']);
        }
        if (\array_key_exists('complements', $data)) {
            $object->setComplements($this->denormalizer->denormalize($data['complements'], \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\ResultComplements::class, 'json', $context));
            unset($data['complements']);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('siren') && null !== $data->getSiren()) {
            $dataArray['siren'] = $data->getSiren();
        }
        if ($data->isInitialized('nomComplet') && null !== $data->getNomComplet()) {
            $dataArray['nom_complet'] = $data->getNomComplet();
        }
        if ($data->isInitialized('nomRaisonSociale') && null !== $data->getNomRaisonSociale()) {
            $dataArray['nom_raison_sociale'] = $data->getNomRaisonSociale();
        }
        if ($data->isInitialized('sigle')) {
            $dataArray['sigle'] = $data->getSigle();
        }
        if ($data->isInitialized('nombreEtablissements') && null !== $data->getNombreEtablissements()) {
            $dataArray['nombre_etablissements'] = $data->getNombreEtablissements();
        }
        if ($data->isInitialized('nombreEtablissementsOuverts') && null !== $data->getNombreEtablissementsOuverts()) {
            $dataArray['nombre_etablissements_ouverts'] = $data->getNombreEtablissementsOuverts();
        }
        if ($data->isInitialized('siege') && null !== $data->getSiege()) {
            $dataArray['siege'] = $this->normalizer->normalize($data->getSiege(), 'json', $context);
        }
        if ($data->isInitialized('activitePrincipale') && null !== $data->getActivitePrincipale()) {
            $dataArray['activite_principale'] = $data->getActivitePrincipale();
        }
        if ($data->isInitialized('activitePrincipaleNaf25') && null !== $data->getActivitePrincipaleNaf25()) {
            $dataArray['activite_principale_naf25'] = $data->getActivitePrincipaleNaf25();
        }
        if ($data->isInitialized('categorieEntreprise') && null !== $data->getCategorieEntreprise()) {
            $dataArray['categorie_entreprise'] = $data->getCategorieEntreprise();
        }
        if ($data->isInitialized('caractereEmployeur') && null !== $data->getCaractereEmployeur()) {
            $dataArray['caractere_employeur'] = $data->getCaractereEmployeur();
        }
        if ($data->isInitialized('anneeCategorieEntreprise') && null !== $data->getAnneeCategorieEntreprise()) {
            $dataArray['annee_categorie_entreprise'] = $data->getAnneeCategorieEntreprise();
        }
        if ($data->isInitialized('dateCreation') && null !== $data->getDateCreation()) {
            $dataArray['date_creation'] = $data->getDateCreation()->format('Y-m-d');
        }
        if ($data->isInitialized('dateFermeture') && null !== $data->getDateFermeture()) {
            $dataArray['date_fermeture'] = $data->getDateFermeture()->format('Y-m-d');
        }
        if ($data->isInitialized('dateMiseAJour') && null !== $data->getDateMiseAJour()) {
            $dataArray['date_mise_a_jour'] = $data->getDateMiseAJour()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('dateMiseAJourInsee')) {
            $dataArray['date_mise_a_jour_insee'] = $data->getDateMiseAJourInsee()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('dateMiseAJourRne')) {
            $dataArray['date_mise_a_jour_rne'] = $data->getDateMiseAJourRne()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('dirigeants') && null !== $data->getDirigeants()) {
            $values = [];
            foreach ($data->getDirigeants() as $value) {
                $values[] = $value;
            }
            $dataArray['dirigeants'] = $values;
        }
        if ($data->isInitialized('etatAdministratif') && null !== $data->getEtatAdministratif()) {
            $dataArray['etat_administratif'] = $data->getEtatAdministratif();
        }
        if ($data->isInitialized('natureJuridique') && null !== $data->getNatureJuridique()) {
            $dataArray['nature_juridique'] = $data->getNatureJuridique();
        }
        if ($data->isInitialized('sectionActivitePrincipale') && null !== $data->getSectionActivitePrincipale()) {
            $dataArray['section_activite_principale'] = $data->getSectionActivitePrincipale();
        }
        if ($data->isInitialized('trancheEffectifSalarie') && null !== $data->getTrancheEffectifSalarie()) {
            $dataArray['tranche_effectif_salarie'] = $data->getTrancheEffectifSalarie();
        }
        if ($data->isInitialized('anneeTrancheEffectifSalarie') && null !== $data->getAnneeTrancheEffectifSalarie()) {
            $dataArray['annee_tranche_effectif_salarie'] = $data->getAnneeTrancheEffectifSalarie();
        }
        if ($data->isInitialized('statutDiffusion') && null !== $data->getStatutDiffusion()) {
            $dataArray['statut_diffusion'] = $data->getStatutDiffusion();
        }
        if ($data->isInitialized('matchingEtablissements') && null !== $data->getMatchingEtablissements()) {
            $values_1 = [];
            foreach ($data->getMatchingEtablissements() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['matching_etablissements'] = $values_1;
        }
        if ($data->isInitialized('finances') && null !== $data->getFinances()) {
            $values_2 = [];
            foreach ($data->getFinances() as $key => $value_2) {
                $values_2[$key] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['finances'] = $values_2;
        }
        if ($data->isInitialized('complements') && null !== $data->getComplements()) {
            $dataArray['complements'] = $this->normalizer->normalize($data->getComplements(), 'json', $context);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Result::class => false];
    }
}