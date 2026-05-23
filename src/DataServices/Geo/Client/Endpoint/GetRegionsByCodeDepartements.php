<?php

namespace Ecourty\DataGouv\DataServices\Geo\Client\Endpoint;

class GetRegionsByCodeDepartements extends \Ecourty\DataGouv\DataServices\Geo\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\Geo\Client\Runtime\Client\Endpoint
{
    protected $code;
    /**
     * @param string $code Code de la région
     * @param array $queryParameters {
     *     @var array $fields Liste des champs souhaités dans la réponse
     * }
     */
    public function __construct(string $code, array $queryParameters = [])
    {
        $this->code = $code;
        $this->queryParameters = $queryParameters;
    }
    use \Ecourty\DataGouv\DataServices\Geo\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{code}'], [$this->code], '/regions/{code}/departements');
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
        $optionsResolver->setDefined(['fields']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['fields' => array(0 => 'nom', 1 => 'code')]);
        $optionsResolver->addAllowedTypes('fields', ['array']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetRegionsByCodeDepartementsBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetRegionsByCodeDepartementsNotFoundException
     *
     * @return null|\Ecourty\DataGouv\DataServices\Geo\Client\Model\Departement[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Geo\Client\Model\Departement[]', 'json');
        }
        if (400 === $status) {
            throw new \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetRegionsByCodeDepartementsBadRequestException($serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Geo\Client\Model\Error', 'json'), $response);
        }
        if (404 === $status) {
            throw new \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetRegionsByCodeDepartementsNotFoundException($serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Geo\Client\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}