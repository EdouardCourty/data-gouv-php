<?php

namespace Ecourty\DataGouv\DataServices\Geo\Client\Endpoint;

class GetRegions extends \Ecourty\DataGouv\DataServices\Geo\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\Geo\Client\Runtime\Client\Endpoint
{
    /**
     * @param array $queryParameters {
     *     @var string $code Code de la région
     *     @var string $nom Nom de la région
     *     @var array $zone Zone permettant de filtrer à la métropole, aux DROM et aux COM. Défaut à metro,drom sauf pour les communes à metro,drom,com pour conserver le comportement historique.
     *     @var array $fields Liste des champs souhaités dans la réponse
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Ecourty\DataGouv\DataServices\Geo\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/regions';
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
        $optionsResolver->setDefined(['code', 'nom', 'zone', 'fields']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['fields' => array(0 => 'nom', 1 => 'code')]);
        $optionsResolver->addAllowedTypes('code', ['string']);
        $optionsResolver->addAllowedTypes('nom', ['string']);
        $optionsResolver->addAllowedTypes('zone', ['array']);
        $optionsResolver->addAllowedTypes('fields', ['array']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetRegionsBadRequestException
     *
     * @return null|\Ecourty\DataGouv\DataServices\Geo\Client\Model\Region[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Geo\Client\Model\Region[]', 'json');
        }
        if (400 === $status) {
            throw new \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetRegionsBadRequestException($serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Geo\Client\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}