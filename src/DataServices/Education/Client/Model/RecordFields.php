<?php

namespace Ecourty\DataGouv\DataServices\Education\Client\Model;

class RecordFields extends \ArrayObject
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