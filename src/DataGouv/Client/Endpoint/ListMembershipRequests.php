<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class ListMembershipRequests extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    protected $org;
    /**
     * @param string $org The organization ID or slug
     * @param array $queryParameters {
     *     @var string $status If provided, only return requests in a given status
     *     @var string $user If provided, only return requests for this user
     * }
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     */
    public function __construct(string $org, array $queryParameters = [], array $headerParameters = [])
    {
        $this->org = $org;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{org}'], [$this->org], '/organizations/{org}/membership/');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['status', 'user']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('status', ['string']);
        $optionsResolver->addAllowedTypes('user', ['string']);
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['X-Fields']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('X-Fields', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\ListMembershipRequestsForbiddenException
     *
     * @return null|\Ecourty\DataGouv\DataGouv\Client\Model\MembershipRequest[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataGouv\Client\Model\MembershipRequest[]', 'json');
        }
        if (403 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\ListMembershipRequestsForbiddenException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}