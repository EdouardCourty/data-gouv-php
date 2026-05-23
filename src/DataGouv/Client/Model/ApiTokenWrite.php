<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class ApiTokenWrite
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
     * When this token expires
     *
     * @var \DateTime|null
     */
    protected $expiresAt;
    /**
     * User-given label for this token
     *
     * @var string|null
     */
    protected $name;
    /**
     * Token scopes
     *
     * @var list<string>
     */
    protected $scopes;

    /**
     * When this token expires
     */
    public function getExpiresAt(): ?\DateTime
    {
        return $this->expiresAt;
    }

    /**
     * When this token expires
     */
    public function setExpiresAt(?\DateTime $expiresAt): self
    {
        $this->initialized['expiresAt'] = true;
        $this->expiresAt = $expiresAt;

        return $this;
    }

    /**
     * User-given label for this token
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * User-given label for this token
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Token scopes
     *
     * @return list<string>
     */
    public function getScopes(): array
    {
        return $this->scopes;
    }

    /**
     * Token scopes
     *
     * @param list<string> $scopes
     */
    public function setScopes(array $scopes): self
    {
        $this->initialized['scopes'] = true;
        $this->scopes = $scopes;

        return $this;
    }
}
