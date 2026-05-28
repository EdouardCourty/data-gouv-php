<?php

namespace Ecourty\DataGouv\DataServices\Education\Client\Model;

class DatasetMetas extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
}