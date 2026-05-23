<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class AccessAudienceRead
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
    protected $condition;
    /**
     * @var string|null
     */
    protected $role;
    /**
     * @return string|null
     */
    public function getCondition(): ?string
    {
        return $this->condition;
    }
    /**
     * @param string|null $condition
     *
     * @return self
     */
    public function setCondition(?string $condition): self
    {
        $this->initialized['condition'] = true;
        $this->condition = $condition;
        return $this;
    }
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