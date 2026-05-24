<?php

namespace Ecourty\DataGouv\DataServices\Entreprise\Client\Model;

class Payload extends \ArrayObject
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
     * @var list<Result>
     */
    protected $results;
    /**
     * @var int|null
     */
    protected $totalResults;
    /**
     * @var int|null
     */
    protected $page = 1;
    /**
     * Nombre de résultats par page, limité à 25.
     *
     * @var int|null
     */
    protected $perPage = 10;
    /**
     * @var int|null
     */
    protected $totalPages;
    /**
     * @return list<Result>
     */
    public function getResults(): array
    {
        return $this->results;
    }
    /**
     * @param list<Result> $results
     *
     * @return self
     */
    public function setResults(array $results): self
    {
        $this->initialized['results'] = true;
        $this->results = $results;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getTotalResults(): ?int
    {
        return $this->totalResults;
    }
    /**
     * @param int|null $totalResults
     *
     * @return self
     */
    public function setTotalResults(?int $totalResults): self
    {
        $this->initialized['totalResults'] = true;
        $this->totalResults = $totalResults;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getPage(): ?int
    {
        return $this->page;
    }
    /**
     * @param int|null $page
     *
     * @return self
     */
    public function setPage(?int $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;
        return $this;
    }
    /**
     * Nombre de résultats par page, limité à 25.
     *
     * @return int|null
     */
    public function getPerPage(): ?int
    {
        return $this->perPage;
    }
    /**
     * Nombre de résultats par page, limité à 25.
     *
     * @param int|null $perPage
     *
     * @return self
     */
    public function setPerPage(?int $perPage): self
    {
        $this->initialized['perPage'] = true;
        $this->perPage = $perPage;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getTotalPages(): ?int
    {
        return $this->totalPages;
    }
    /**
     * @param int|null $totalPages
     *
     * @return self
     */
    public function setTotalPages(?int $totalPages): self
    {
        $this->initialized['totalPages'] = true;
        $this->totalPages = $totalPages;
        return $this;
    }
}