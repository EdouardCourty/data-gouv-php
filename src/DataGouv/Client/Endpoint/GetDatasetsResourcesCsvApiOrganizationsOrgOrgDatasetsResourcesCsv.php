<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class GetDatasetsResourcesCsvApiOrganizationsOrgOrgDatasetsResourcesCsv extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    protected $org;

    /**
     * @param string $org The organization ID or slug
     */
    public function __construct(string $org)
    {
        $this->org = $org;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{org}'], [$this->org], '/organizations/{org}/datasets-resources.csv');
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetDatasetsResourcesCsvApiOrganizationsOrgOrgDatasetsResourcesCsvNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetDatasetsResourcesCsvApiOrganizationsOrgOrgDatasetsResourcesCsvGoneException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (404 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\GetDatasetsResourcesCsvApiOrganizationsOrgOrgDatasetsResourcesCsvNotFoundException($response);
        }
        if (410 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\GetDatasetsResourcesCsvApiOrganizationsOrgOrgDatasetsResourcesCsvGoneException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
