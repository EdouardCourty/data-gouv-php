<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class DeleteOrganization extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    protected $org;
    /**
     * @param string $org The organization ID or slug
     * @param array $queryParameters {
     *     @var bool $send_legal_notice Send formal legal notice with appeal information to owner (admin only)
     * }
     */
    public function __construct(string $org, array $queryParameters = [])
    {
        $this->org = $org;
        $this->queryParameters = $queryParameters;
    }
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{org}'], [$this->org], '/organizations/{org}/');
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
        $optionsResolver->setDefined(['send_legal_notice']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['send_legal_notice' => false]);
        $optionsResolver->addAllowedTypes('send_legal_notice', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteOrganizationNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteOrganizationGoneException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteOrganizationNotFoundException($response);
        }
        if (410 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteOrganizationGoneException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}