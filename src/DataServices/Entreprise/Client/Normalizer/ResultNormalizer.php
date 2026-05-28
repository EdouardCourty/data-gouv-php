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
        if (\array_key_exists('siren', $data) && $data['siren'] !== null) {
            $object->setSiren($data['siren']);
            unset($data['siren']);
        }
        elseif (\array_key_exists('siren', $data) && $data['siren'] === null) {
            $object->setSiren(null);
        }
        if (\array_key_exists('nom_complet', $data) && $data['nom_complet'] !== null) {
            $object->setNomComplet($data['nom_complet']);
            unset($data['nom_complet']);
        }
        elseif (\array_key_exists('nom_complet', $data) && $data['nom_complet'] === null) {
            $object->setNomComplet(null);
        }
        if (\array_key_exists('nom_raison_sociale', $data) && $data['nom_raison_sociale'] !== null) {
            $object->setNomRaisonSociale($data['nom_raison_sociale']);
            unset($data['nom_raison_sociale']);
        }
        elseif (\array_key_exists('nom_raison_sociale', $data) && $data['nom_raison_sociale'] === null) {
            $object->setNomRaisonSociale(null);
        }
        if (\array_key_exists('sigle', $data) && $data['sigle'] !== null) {
            $object->setSigle($data['sigle']);
            unset($data['sigle']);
        }
        elseif (\array_key_exists('sigle', $data) && $data['sigle'] === null) {
            $object->setSigle(null);
        }
        if (\array_key_exists('nombre_etablissements', $data) && $data['nombre_etablissements'] !== null) {
            $object->setNombreEtablissements($data['nombre_etablissements']);
            unset($data['nombre_etablissements']);
        }
        elseif (\array_key_exists('nombre_etablissements', $data) && $data['nombre_etablissements'] === null) {
            $object->setNombreEtablissements(null);
        }
        if (\array_key_exists('nombre_etablissements_ouverts', $data) && $data['nombre_etablissements_ouverts'] !== null) {
            $object->setNombreEtablissementsOuverts($data['nombre_etablissements_ouverts']);
            unset($data['nombre_etablissements_ouverts']);
        }
        elseif (\array_key_exists('nombre_etablissements_ouverts', $data) && $data['nombre_etablissements_ouverts'] === null) {
            $object->setNombreEtablissementsOuverts(null);
        }
        if (\array_key_exists('siege', $data)) {
            $object->setSiege($this->denormalizer->denormalize($data['siege'], \Ecourty\DataGouv\DataServices\Entreprise\Client\Model\Siege::class, 'json', $context));
            unset($data['siege']);
        }
        if (\array_key_exists('activite_principale', $data) && $data['activite_principale'] !== null) {
            $object->setActivitePrincipale($data['activite_principale']);
            unset($data['activite_principale']);
        }
        elseif (\array_key_exists('activite_principale', $data) && $data['activite_principale'] === null) {
            $object->setActivitePrincipale(null);
        }
        if (\array_key_exists('activite_principale_naf25', $data) && $data['activite_principale_naf25'] !== null) {
            $object->setActivitePrincipaleNaf25($data['activite_principale_naf25']);
            unset($data['activite_principale_naf25']);
        }
        elseif (\array_key_exists('activite_principale_naf25', $data) && $data['activite_principale_naf25'] === null) {
            $object->setActivitePrincipaleNaf25(null);
        }
        if (\array_key_exists('categorie_entreprise', $data) && $data['categorie_entreprise'] !== null) {
            $object->setCategorieEntreprise($data['categorie_entreprise']);
            unset($data['categorie_entreprise']);
        }
        elseif (\array_key_exists('categorie_entreprise', $data) && $data['categorie_entreprise'] === null) {
            $object->setCategorieEntreprise(null);
        }
        if (\array_key_exists('caractere_employeur', $data) && $data['caractere_employeur'] !== null) {
            $object->setCaractereEmployeur($data['caractere_employeur']);
            unset($data['caractere_employeur']);
        }
        elseif (\array_key_exists('caractere_employeur', $data) && $data['caractere_employeur'] === null) {
            $object->setCaractereEmployeur(null);
        }
        if (\array_key_exists('annee_categorie_entreprise', $data) && $data['annee_categorie_entreprise'] !== null) {
            $object->setAnneeCategorieEntreprise($data['annee_categorie_entreprise']);
            unset($data['annee_categorie_entreprise']);
        }
        elseif (\array_key_exists('annee_categorie_entreprise', $data) && $data['annee_categorie_entreprise'] === null) {
            $object->setAnneeCategorieEntreprise(null);
        }
        if (\array_key_exists('date_creation', $data) && $data['date_creation'] !== null) {
            $object->setDateCreation((new \DateTime($data['date_creation']))->setTime(0, 0, 0));
            unset($data['date_creation']);
        }
        elseif (\array_key_exists('date_creation', $data) && $data['date_creation'] === null) {
            $object->setDateCreation(null);
        }
        if (\array_key_exists('date_fermeture', $data) && $data['date_fermeture'] !== null) {
            $object->setDateFermeture((new \DateTime($data['date_fermeture']))->setTime(0, 0, 0));
            unset($data['date_fermeture']);
        }
        elseif (\array_key_exists('date_fermeture', $data) && $data['date_fermeture'] === null) {
            $object->setDateFermeture(null);
        }
        if (\array_key_exists('date_mise_a_jour', $data) && $data['date_mise_a_jour'] !== null) {
            $object->setDateMiseAJour((new \DateTime($data['date_mise_a_jour'])));
            unset($data['date_mise_a_jour']);
        }
        elseif (\array_key_exists('date_mise_a_jour', $data) && $data['date_mise_a_jour'] === null) {
            $object->setDateMiseAJour(null);
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
        if (\array_key_exists('etat_administratif', $data) && $data['etat_administratif'] !== null) {
            $object->setEtatAdministratif($data['etat_administratif']);
            unset($data['etat_administratif']);
        }
        elseif (\array_key_exists('etat_administratif', $data) && $data['etat_administratif'] === null) {
            $object->setEtatAdministratif(null);
        }
        if (\array_key_exists('nature_juridique', $data) && $data['nature_juridique'] !== null) {
            $object->setNatureJuridique($data['nature_juridique']);
            unset($data['nature_juridique']);
        }
        elseif (\array_key_exists('nature_juridique', $data) && $data['nature_juridique'] === null) {
            $object->setNatureJuridique(null);
        }
        if (\array_key_exists('section_activite_principale', $data) && $data['section_activite_principale'] !== null) {
            $object->setSectionActivitePrincipale($data['section_activite_principale']);
            unset($data['section_activite_principale']);
        }
        elseif (\array_key_exists('section_activite_principale', $data) && $data['section_activite_principale'] === null) {
            $object->setSectionActivitePrincipale(null);
        }
        if (\array_key_exists('tranche_effectif_salarie', $data) && $data['tranche_effectif_salarie'] !== null) {
            $object->setTrancheEffectifSalarie($data['tranche_effectif_salarie']);
            unset($data['tranche_effectif_salarie']);
        }
        elseif (\array_key_exists('tranche_effectif_salarie', $data) && $data['tranche_effectif_salarie'] === null) {
            $object->setTrancheEffectifSalarie(null);
        }
        if (\array_key_exists('annee_tranche_effectif_salarie', $data) && $data['annee_tranche_effectif_salarie'] !== null) {
            $object->setAnneeTrancheEffectifSalarie($data['annee_tranche_effectif_salarie']);
            unset($data['annee_tranche_effectif_salarie']);
        }
        elseif (\array_key_exists('annee_tranche_effectif_salarie', $data) && $data['annee_tranche_effectif_salarie'] === null) {
            $object->setAnneeTrancheEffectifSalarie(null);
        }
        if (\array_key_exists('statut_diffusion', $data) && $data['statut_diffusion'] !== null) {
            $object->setStatutDiffusion($data['statut_diffusion']);
            unset($data['statut_diffusion']);
        }
        elseif (\array_key_exists('statut_diffusion', $data) && $data['statut_diffusion'] === null) {
            $object->setStatutDiffusion(null);
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
        if ($data->isInitialized('siren')) {
            $dataArray['siren'] = $data->getSiren();
        }
        if ($data->isInitialized('nomComplet')) {
            $dataArray['nom_complet'] = $data->getNomComplet();
        }
        if ($data->isInitialized('nomRaisonSociale')) {
            $dataArray['nom_raison_sociale'] = $data->getNomRaisonSociale();
        }
        if ($data->isInitialized('sigle')) {
            $dataArray['sigle'] = $data->getSigle();
        }
        if ($data->isInitialized('nombreEtablissements')) {
            $dataArray['nombre_etablissements'] = $data->getNombreEtablissements();
        }
        if ($data->isInitialized('nombreEtablissementsOuverts')) {
            $dataArray['nombre_etablissements_ouverts'] = $data->getNombreEtablissementsOuverts();
        }
        if ($data->isInitialized('siege') && null !== $data->getSiege()) {
            $dataArray['siege'] = $this->normalizer->normalize($data->getSiege(), 'json', $context);
        }
        if ($data->isInitialized('activitePrincipale')) {
            $dataArray['activite_principale'] = $data->getActivitePrincipale();
        }
        if ($data->isInitialized('activitePrincipaleNaf25')) {
            $dataArray['activite_principale_naf25'] = $data->getActivitePrincipaleNaf25();
        }
        if ($data->isInitialized('categorieEntreprise')) {
            $dataArray['categorie_entreprise'] = $data->getCategorieEntreprise();
        }
        if ($data->isInitialized('caractereEmployeur')) {
            $dataArray['caractere_employeur'] = $data->getCaractereEmployeur();
        }
        if ($data->isInitialized('anneeCategorieEntreprise')) {
            $dataArray['annee_categorie_entreprise'] = $data->getAnneeCategorieEntreprise();
        }
        if ($data->isInitialized('dateCreation')) {
            $dataArray['date_creation'] = $data->getDateCreation()?->format('Y-m-d');
        }
        if ($data->isInitialized('dateFermeture')) {
            $dataArray['date_fermeture'] = $data->getDateFermeture()?->format('Y-m-d');
        }
        if ($data->isInitialized('dateMiseAJour')) {
            $dataArray['date_mise_a_jour'] = $data->getDateMiseAJour()?->format('Y-m-d\TH:i:sP');
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
        if ($data->isInitialized('etatAdministratif')) {
            $dataArray['etat_administratif'] = $data->getEtatAdministratif();
        }
        if ($data->isInitialized('natureJuridique')) {
            $dataArray['nature_juridique'] = $data->getNatureJuridique();
        }
        if ($data->isInitialized('sectionActivitePrincipale')) {
            $dataArray['section_activite_principale'] = $data->getSectionActivitePrincipale();
        }
        if ($data->isInitialized('trancheEffectifSalarie')) {
            $dataArray['tranche_effectif_salarie'] = $data->getTrancheEffectifSalarie();
        }
        if ($data->isInitialized('anneeTrancheEffectifSalarie')) {
            $dataArray['annee_tranche_effectif_salarie'] = $data->getAnneeTrancheEffectifSalarie();
        }
        if ($data->isInitialized('statutDiffusion')) {
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