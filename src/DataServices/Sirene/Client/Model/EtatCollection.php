<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Model;

class EtatCollection
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
     * Collection
     *
     * @var string
     */
    protected $collection;
    /**
     * Etat du service
     *
     * @var string
     */
    protected $etatCollection;
    /**
     * Collection
     *
     * @return string
     */
    public function getCollection(): string
    {
        return $this->collection;
    }
    /**
     * Collection
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
     * Etat du service
     *
     * @return string
     */
    public function getEtatCollection(): string
    {
        return $this->etatCollection;
    }
    /**
     * Etat du service
     *
     * @param string $etatCollection
     *
     * @return self
     */
    public function setEtatCollection(string $etatCollection): self
    {
        $this->initialized['etatCollection'] = true;
        $this->etatCollection = $etatCollection;
        return $this;
    }
}