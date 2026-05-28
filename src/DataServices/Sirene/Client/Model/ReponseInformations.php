<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Model;

class ReponseInformations
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Informations générales sur le résultat de la requête
     *
     * @var Header
     */
    protected $header;
    /**
     * État actuel du service
     *
     * @var string
     */
    protected $etatService;
    /**
     * Etats des services
     *
     * @var list<EtatCollection>
     */
    protected $etatsDesServices;
    /**
     * Numéro de la version
     *
     * @var string
     */
    protected $versionService;
    /**
     * Historique des versions de l'API Sirene
     *
     * @var string
     */
    protected $journalDesModifications;
    /**
     * Dates des dernières mises à jour de chaque collection de données
     *
     * @var list<DatesMiseAJourDonnees>
     */
    protected $datesDernieresMisesAJourDesDonnees;
    /**
     * Informations générales sur le résultat de la requête
     *
     * @return Header
     */
    public function getHeader(): Header
    {
        return $this->header;
    }
    /**
     * Informations générales sur le résultat de la requête
     *
     * @param Header $header
     *
     * @return self
     */
    public function setHeader(Header $header): self
    {
        $this->initialized['header'] = true;
        $this->header = $header;
        return $this;
    }
    /**
     * État actuel du service
     *
     * @return string
     */
    public function getEtatService(): string
    {
        return $this->etatService;
    }
    /**
     * État actuel du service
     *
     * @param string $etatService
     *
     * @return self
     */
    public function setEtatService(string $etatService): self
    {
        $this->initialized['etatService'] = true;
        $this->etatService = $etatService;
        return $this;
    }
    /**
     * Etats des services
     *
     * @return list<EtatCollection>
     */
    public function getEtatsDesServices(): array
    {
        return $this->etatsDesServices;
    }
    /**
     * Etats des services
     *
     * @param list<EtatCollection> $etatsDesServices
     *
     * @return self
     */
    public function setEtatsDesServices(array $etatsDesServices): self
    {
        $this->initialized['etatsDesServices'] = true;
        $this->etatsDesServices = $etatsDesServices;
        return $this;
    }
    /**
     * Numéro de la version
     *
     * @return string
     */
    public function getVersionService(): string
    {
        return $this->versionService;
    }
    /**
     * Numéro de la version
     *
     * @param string $versionService
     *
     * @return self
     */
    public function setVersionService(string $versionService): self
    {
        $this->initialized['versionService'] = true;
        $this->versionService = $versionService;
        return $this;
    }
    /**
     * Historique des versions de l'API Sirene
     *
     * @return string
     */
    public function getJournalDesModifications(): string
    {
        return $this->journalDesModifications;
    }
    /**
     * Historique des versions de l'API Sirene
     *
     * @param string $journalDesModifications
     *
     * @return self
     */
    public function setJournalDesModifications(string $journalDesModifications): self
    {
        $this->initialized['journalDesModifications'] = true;
        $this->journalDesModifications = $journalDesModifications;
        return $this;
    }
    /**
     * Dates des dernières mises à jour de chaque collection de données
     *
     * @return list<DatesMiseAJourDonnees>
     */
    public function getDatesDernieresMisesAJourDesDonnees(): array
    {
        return $this->datesDernieresMisesAJourDesDonnees;
    }
    /**
     * Dates des dernières mises à jour de chaque collection de données
     *
     * @param list<DatesMiseAJourDonnees> $datesDernieresMisesAJourDesDonnees
     *
     * @return self
     */
    public function setDatesDernieresMisesAJourDesDonnees(array $datesDernieresMisesAJourDesDonnees): self
    {
        $this->initialized['datesDernieresMisesAJourDesDonnees'] = true;
        $this->datesDernieresMisesAJourDesDonnees = $datesDernieresMisesAJourDesDonnees;
        return $this;
    }
}