<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class UpdateOrganization extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    protected $org;

    /**
     * @param string $org              The organization ID or slug
     * @param array  $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     */
    public function __construct(string $org, \Ecourty\DataGouv\DataGouv\Client\Model\OrganizationWrite $payload, array $headerParameters = [])
    {
        $this->org = $org;
        $this->body = $payload;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{org}'], [$this->org], '/organizations/{org}/');
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateOrganizationBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateOrganizationForbiddenException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateOrganizationNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateOrganizationGoneException
     *
     * @return null|\Ecourty\DataGouv\DataGouv\Client\Model\OrganizationRead
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataGouv\Client\Model\OrganizationRead', 'json');
        }
        if (400 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateOrganizationBadRequestException($response);
        }
        if (403 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateOrganizationForbiddenException($serializer->deserialize($body, 'Ecourty\DataGouv\DataGouv\Client\Model\Error', 'json'), $response);
        }
        if (404 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateOrganizationNotFoundException($response);
        }
        if (410 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateOrganizationGoneException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
