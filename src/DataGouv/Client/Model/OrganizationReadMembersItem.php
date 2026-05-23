<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class OrganizationReadMembersItem
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
    protected $label;
    /**
     * @var string|null
     */
    protected $role;
    /**
     * @var \DateTime
     */
    protected $since;
    /**
     * @var mixed
     */
    protected $user;
    /**
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }
    /**
     * @param string|null $label
     *
     * @return self
     */
    public function setLabel(?string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
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
    /**
     * @return \DateTime
     */
    public function getSince(): \DateTime
    {
        return $this->since;
    }
    /**
     * @param \DateTime $since
     *
     * @return self
     */
    public function setSince(\DateTime $since): self
    {
        $this->initialized['since'] = true;
        $this->since = $since;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * @param mixed $user
     *
     * @return self
     */
    public function setUser($user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
}