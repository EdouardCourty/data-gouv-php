<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class MemberWrite
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
     * @var string|null
     */
    protected $role;
    /**
     * @return string|null
     */
    public function getRole(): ?string
    {
        return $this->role;
    }
    /**
     * @param string|null $role
     *
     * @return self
     */
    public function setRole(?string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
}