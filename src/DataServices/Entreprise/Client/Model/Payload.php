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
     * @var int
     */
    protected $totalResults;
    /**
     * @var int
     */
    protected $page = 1;
    /**
     * Nombre de résultats par page, limité à 25.
     *
     * @var int
     */
    protected $perPage = 10;
    /**
     * @var int
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
     * @return int
     */
    public function getTotalResults(): int
    {
        return $this->totalResults;
    }
    /**
     * @param int $totalResults
     *
     * @return self
     */
    public function setTotalResults(int $totalResults): self
    {
        $this->initialized['totalResults'] = true;
        $this->totalResults = $totalResults;
        return $this;
    }
    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }
    /**
     * @param int $page
     *
     * @return self
     */
    public function setPage(int $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;
        return $this;
    }
    /**
     * Nombre de résultats par page, limité à 25.
     *
     * @return int
     */
    public function getPerPage(): int
    {
        return $this->perPage;
    }
    /**
     * Nombre de résultats par page, limité à 25.
     *
     * @param int $perPage
     *
     * @return self
     */
    public function setPerPage(int $perPage): self
    {
        $this->initialized['perPage'] = true;
        $this->perPage = $perPage;
        return $this;
    }
    /**
     * @return int
     */
    public function getTotalPages(): int
    {
        return $this->totalPages;
    }
    /**
     * @param int $totalPages
     *
     * @return self
     */
    public function setTotalPages(int $totalPages): self
    {
        $this->initialized['totalPages'] = true;
        $this->totalPages = $totalPages;
        return $this;
    }
}