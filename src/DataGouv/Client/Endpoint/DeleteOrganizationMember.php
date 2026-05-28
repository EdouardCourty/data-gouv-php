<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class DeleteOrganizationMember extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    protected $org;
    protected $user;
    /**
     * @param string $org The organization ID or slug
     * @param string $user
     */
    public function __construct(string $org, string $user)
    {
        $this->org = $org;
        $this->user = $user;
    }
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{org}', '{user}'], [$this->org, $this->user], '/organizations/{org}/member/{user}/');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteOrganizationMemberForbiddenException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (403 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteOrganizationMemberForbiddenException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}