<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Authentication;

class ApiKeyAuthAuthentication implements \Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin
{
    private $apiKey;
    public function __construct(string $apiKey)
    {
        $this->{'apiKey'} = $apiKey;
    }
    public function authentication(\Psr\Http\Message\RequestInterface $request): \Psr\Http\Message\RequestInterface
    {
        $request = $request->withHeader('X-INSEE-Api-Key-Integration', $this->{'apiKey'});
        return $request;
    }
    public function getScope(): string
    {
        return 'ApiKeyAuth';
    }
}