<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Model;

class DatesMiseAJourDonnees
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
     * Nom de la collection
     *
     * @var string
     */
    protected $collection;
    /**
     * Date et heure (yyyy-MM-ddTHH:mm:ss.SSS) de la dernière mise à disposition des données de la collection
     *
     * @var \DateTime
     */
    protected $dateDerniereMiseADisposition;
    /**
     * Date (yyyy-MM-ddTHH:mm:ss.SSS) correspondant à la date de validité des données consultées
     *
     * @var \DateTime
     */
    protected $dateDernierTraitementMaximum;
    /**
     * Date (yyyy-MM-ddTHH:mm:ss.SSS) du dernier traitement de masse sur la collection. À cette date plusieurs centaines de milliers de documents ont pu être mis à jour. Il est conseillé de traiter cette date d'une manière spécifique
     *
     * @var \DateTime
     */
    protected $dateDernierTraitementDeMasse;
    /**
     * Nom de la collection
     *
     * @return string
     */
    public function getCollection(): string
    {
        return $this->collection;
    }
    /**
     * Nom de la collection
     *
     * @param string $collection
     *
     * @return self
     */
    public function setCollection(string $collection): self
    {
        $this->initialized['collection'] = true;
        $this->collection = $collection;
        return $this;
    }
    /**
     * Date et heure (yyyy-MM-ddTHH:mm:ss.SSS) de la dernière mise à disposition des données de la collection
     *
     * @return \DateTime
     */
    public function getDateDerniereMiseADisposition(): \DateTime
    {
        return $this->dateDerniereMiseADisposition;
    }
    /**
     * Date et heure (yyyy-MM-ddTHH:mm:ss.SSS) de la dernière mise à disposition des données de la collection
     *
     * @param \DateTime $dateDerniereMiseADisposition
     *
     * @return self
     */
    public function setDateDerniereMiseADisposition(\DateTime $dateDerniereMiseADisposition): self
    {
        $this->initialized['dateDerniereMiseADisposition'] = true;
        $this->dateDerniereMiseADisposition = $dateDerniereMiseADisposition;
        return $this;
    }
    /**
     * Date (yyyy-MM-ddTHH:mm:ss.SSS) correspondant à la date de validité des données consultées
     *
     * @return \DateTime
     */
    public function getDateDernierTraitementMaximum(): \DateTime
    {
        return $this->dateDernierTraitementMaximum;
    }
    /**
     * Date (yyyy-MM-ddTHH:mm:ss.SSS) correspondant à la date de validité des données consultées
     *
     * @param \DateTime $dateDernierTraitementMaximum
     *
     * @return self
     */
    public function setDateDernierTraitementMaximum(\DateTime $dateDernierTraitementMaximum): self
    {
        $this->initialized['dateDernierTraitementMaximum'] = true;
        $this->dateDernierTraitementMaximum = $dateDernierTraitementMaximum;
        return $this;
    }
    /**
     * Date (yyyy-MM-ddTHH:mm:ss.SSS) du dernier traitement de masse sur la collection. À cette date plusieurs centaines de milliers de documents ont pu être mis à jour. Il est conseillé de traiter cette date d'une manière spécifique
     *
     * @return \DateTime
     */
    public function getDateDernierTraitementDeMasse(): \DateTime
    {
        return $this->dateDernierTraitementDeMasse;
    }
    /**
     * Date (yyyy-MM-ddTHH:mm:ss.SSS) du dernier traitement de masse sur la collection. À cette date plusieurs centaines de milliers de documents ont pu être mis à jour. Il est conseillé de traiter cette date d'une manière spécifique
     *
     * @param \DateTime $dateDernierTraitementDeMasse
     *
     * @return self
     */
    public function setDateDernierTraitementDeMasse(\DateTime $dateDernierTraitementDeMasse): self
    {
        $this->initialized['dateDernierTraitementDeMasse'] = true;
        $this->dateDernierTraitementDeMasse = $dateDernierTraitementDeMasse;
        return $this;
    }
}