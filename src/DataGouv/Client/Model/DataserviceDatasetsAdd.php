<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class DataserviceDatasetsAdd
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * Id of the dataset to add
     *
     * @var string
     */
    protected $id;

    /**
     * Id of the dataset to add
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Id of the dataset to add
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }
}
