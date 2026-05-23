<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class ApiTokenRead
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
     * Token creation date
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * When this token expires
     *
     * @var \DateTime|null
     */
    protected $expiresAt;
    /**
     * @var string
     */
    protected $id;
    /**
     * Token type
     *
     * @var string|null
     */
    protected $kind;
    /**
     * Last time this token was used
     *
     * @var \DateTime|null
     */
    protected $lastUsedAt;
    /**
     * User-given label for this token
     *
     * @var string|null
     */
    protected $name;
    /**
     * When this token was revoked
     *
     * @var \DateTime|null
     */
    protected $revokedAt;
    /**
     * Token scopes
     *
     * @var list<string>
     */
    protected $scopes;
    /**
     * First characters of the token for identification
     *
     * @var string
     */
    protected $tokenPrefix;
    /**
     * User agents that have used this token
     *
     * @var list<string>
     */
    protected $userAgents;

    /**
     * Token creation date
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * Token creation date
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

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

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Token type
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * Token type
     */
    public function setKind(?string $kind): self
    {
        $this->initialized['kind'] = true;
        $this->kind = $kind;

        return $this;
    }

    /**
     * Last time this token was used
     */
    public function getLastUsedAt(): ?\DateTime
    {
        return $this->lastUsedAt;
    }

    /**
     * Last time this token was used
     */
    public function setLastUsedAt(?\DateTime $lastUsedAt): self
    {
        $this->initialized['lastUsedAt'] = true;
        $this->lastUsedAt = $lastUsedAt;

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
     * When this token was revoked
     */
    public function getRevokedAt(): ?\DateTime
    {
        return $this->revokedAt;
    }

    /**
     * When this token was revoked
     */
    public function setRevokedAt(?\DateTime $revokedAt): self
    {
        $this->initialized['revokedAt'] = true;
        $this->revokedAt = $revokedAt;

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

    /**
     * First characters of the token for identification
     */
    public function getTokenPrefix(): string
    {
        return $this->tokenPrefix;
    }

    /**
     * First characters of the token for identification
     */
    public function setTokenPrefix(string $tokenPrefix): self
    {
        $this->initialized['tokenPrefix'] = true;
        $this->tokenPrefix = $tokenPrefix;

        return $this;
    }

    /**
     * User agents that have used this token
     *
     * @return list<string>
     */
    public function getUserAgents(): array
    {
        return $this->userAgents;
    }

    /**
     * User agents that have used this token
     *
     * @param list<string> $userAgents
     */
    public function setUserAgents(array $userAgents): self
    {
        $this->initialized['userAgents'] = true;
        $this->userAgents = $userAgents;

        return $this;
    }
}
