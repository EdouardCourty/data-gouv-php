<?php

namespace Ecourty\DataGouv\DataServices\Entreprise\Client\Model;

class CollectiviteTerritoriale extends \ArrayObject
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
     * Code de la collectivité territoriale
     *
     * @var string|null
     */
    protected $code;
    /**
     * Code INSEE de la collectivité territoriale
     *
     * @var string|null
     */
    protected $codeInsee;
    /**
     * @var list<mixed>
     */
    protected $elus;
    /**
     * Niveau de la collectivité territoriale
     *
     * @var string|null
     */
    protected $niveau;
    /**
     * Code de la collectivité territoriale
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Code de la collectivité territoriale
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Code INSEE de la collectivité territoriale
     *
     * @return string|null
     */
    public function getCodeInsee(): ?string
    {
        return $this->codeInsee;
    }
    /**
     * Code INSEE de la collectivité territoriale
     *
     * @param string|null $codeInsee
     *
     * @return self
     */
    public function setCodeInsee(?string $codeInsee): self
    {
        $this->initialized['codeInsee'] = true;
        $this->codeInsee = $codeInsee;
        return $this;
    }
    /**
     * @return list<mixed>
     */
    public function getElus(): array
    {
        return $this->elus;
    }
    /**
     * @param list<mixed> $elus
     *
     * @return self
     */
    public function setElus(array $elus): self
    {
        $this->initialized['elus'] = true;
        $this->elus = $elus;
        return $this;
    }
    /**
     * Niveau de la collectivité territoriale
     *
     * @return string|null
     */
    public function getNiveau(): ?string
    {
        return $this->niveau;
    }
    /**
     * Niveau de la collectivité territoriale
     *
     * @param string|null $niveau
     *
     * @return self
     */
    public function setNiveau(?string $niveau): self
    {
        $this->initialized['niveau'] = true;
        $this->niveau = $niveau;
        return $this;
    }
}