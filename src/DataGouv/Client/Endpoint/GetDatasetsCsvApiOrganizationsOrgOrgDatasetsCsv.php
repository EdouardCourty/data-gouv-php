<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class GetDatasetsCsvApiOrganizationsOrgOrgDatasetsCsv extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    protected $org;
    /**
     * @param string $org The organization ID or slug
     */
    public function __construct(string $org)
    {
        $this->org = $org;
    }
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{org}'], [$this->org], '/organizations/{org}/datasets.csv');
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetDatasetsCsvApiOrganizationsOrgOrgDatasetsCsvNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetDatasetsCsvApiOrganizationsOrgOrgDatasetsCsvGoneException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (404 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\GetDatasetsCsvApiOrganizationsOrgOrgDatasetsCsvNotFoundException($response);
        }
        if (410 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\GetDatasetsCsvApiOrganizationsOrgOrgDatasetsCsvGoneException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}