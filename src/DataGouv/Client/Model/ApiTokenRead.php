<?php

namespace Ecourty\DataGouv\DataGouv\Client\Model;

class ApiTokenRead
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
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Token creation date
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * When this token expires
     *
     * @return \DateTime|null
     */
    public function getExpiresAt(): ?\DateTime
    {
        return $this->expiresAt;
    }
    /**
     * When this token expires
     *
     * @param \DateTime|null $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(?\DateTime $expiresAt): self
    {
        $this->initialized['expiresAt'] = true;
        $this->expiresAt = $expiresAt;
        return $this;
    }
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Token type
     *
     * @return string|null
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }
    /**
     * Token type
     *
     * @param string|null $kind
     *
     * @return self
     */
    public function setKind(?string $kind): self
    {
        $this->initialized['kind'] = true;
        $this->kind = $kind;
        return $this;
    }
    /**
     * Last time this token was used
     *
     * @return \DateTime|null
     */
    public function getLastUsedAt(): ?\DateTime
    {
        return $this->lastUsedAt;
    }
    /**
     * Last time this token was used
     *
     * @param \DateTime|null $lastUsedAt
     *
     * @return self
     */
    public function setLastUsedAt(?\DateTime $lastUsedAt): self
    {
        $this->initialized['lastUsedAt'] = true;
        $this->lastUsedAt = $lastUsedAt;
        return $this;
    }
    /**
     * User-given label for this token
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * User-given label for this token
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * When this token was revoked
     *
     * @return \DateTime|null
     */
    public function getRevokedAt(): ?\DateTime
    {
        return $this->revokedAt;
    }
    /**
     * When this token was revoked
     *
     * @param \DateTime|null $revokedAt
     *
     * @return self
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
     *
     * @return self
     */
    public function setScopes(array $scopes): self
    {
        $this->initialized['scopes'] = true;
        $this->scopes = $scopes;
        return $this;
    }
    /**
     * First characters of the token for identification
     *
     * @return string
     */
    public function getTokenPrefix(): string
    {
        return $this->tokenPrefix;
    }
    /**
     * First characters of the token for identification
     *
     * @param string $tokenPrefix
     *
     * @return self
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
     *
     * @return self
     */
    public function setUserAgents(array $userAgents): self
    {
        $this->initialized['userAgents'] = true;
        $this->userAgents = $userAgents;
        return $this;
    }
}