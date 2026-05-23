<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class UserPage
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
     * The page data
     *
     * @var list<User>
     */
    protected $data;
    /**
     * The next page URL if exists
     *
     * @var string|null
     */
    protected $nextPage;
    /**
     * The current page
     *
     * @var int
     */
    protected $page;
    /**
     * The page size used for pagination
     *
     * @var int
     */
    protected $pageSize;
    /**
     * The previous page URL if exists
     *
     * @var string|null
     */
    protected $previousPage;
    /**
     * The total paginated items
     *
     * @var int
     */
    protected $total;
    /**
     * The page data
     *
     * @return list<User>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * The page data
     *
     * @param list<User> $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * The next page URL if exists
     *
     * @return string|null
     */
    public function getNextPage(): ?string
    {
        return $this->nextPage;
    }
    /**
     * The next page URL if exists
     *
     * @param string|null $nextPage
     *
     * @return self
     */
    public function setNextPage(?string $nextPage): self
    {
        $this->initialized['nextPage'] = true;
        $this->nextPage = $nextPage;
        return $this;
    }
    /**
     * The current page
     *
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }
    /**
     * The current page
     *
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
     * The page size used for pagination
     *
     * @return int
     */
    public function getPageSize(): int
    {
        return $this->pageSize;
    }
    /**
     * The page size used for pagination
     *
     * @param int $pageSize
     *
     * @return self
     */
    public function setPageSize(int $pageSize): self
    {
        $this->initialized['pageSize'] = true;
        $this->pageSize = $pageSize;
        return $this;
    }
    /**
     * The previous page URL if exists
     *
     * @return string|null
     */
    public function getPreviousPage(): ?string
    {
        return $this->previousPage;
    }
    /**
     * The previous page URL if exists
     *
     * @param string|null $previousPage
     *
     * @return self
     */
    public function setPreviousPage(?string $previousPage): self
    {
        $this->initialized['previousPage'] = true;
        $this->previousPage = $previousPage;
        return $this;
    }
    /**
     * The total paginated items
     *
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }
    /**
     * The total paginated items
     *
     * @param int $total
     *
     * @return self
     */
    public function setTotal(int $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
}