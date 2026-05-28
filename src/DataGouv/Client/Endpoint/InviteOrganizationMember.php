<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class InviteOrganizationMember extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    protected $org;
    /**
     * @param string $org The organization ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\MembershipInvite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     */
    public function __construct(string $org, \Ecourty\DataGouv\DataGouv\Client\Model\MembershipInvite $payload, array $headerParameters = [])
    {
        $this->org = $org;
        $this->body = $payload;
        $this->headerParameters = $headerParameters;
    }
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{org}'], [$this->org], '/organizations/{org}/member/');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\InviteOrganizationMemberBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\InviteOrganizationMemberForbiddenException
     *
     * @return null|\Ecourty\DataGouv\DataGouv\Client\Model\MembershipRequest
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataGouv\Client\Model\MembershipRequest', 'json');
        }
        if (400 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\InviteOrganizationMemberBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\InviteOrganizationMemberForbiddenException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}