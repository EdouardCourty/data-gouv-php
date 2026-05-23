<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class TeamRead
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