<?php

namespace Ecourty\DataGouv\DataServices\Geo\Client\Endpoint;

class GetEpcis extends \Ecourty\DataGouv\DataServices\Geo\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\Geo\Client\Runtime\Client\Endpoint
{
    /**
     * @param array $queryParameters {
     *     @var string $nom Nom de l'EPCI
     *     @var string $boost Mode de boost de la recherche par nom
     *     @var string $codeEpci Code de l'EPCI associé
     *     @var string $codeDepartement Code du département associé
     *     @var string $codeRegion Code de la région associée
     *     @var array $zone Zone permettant de filtrer à la métropole, aux DROM et aux COM. Défaut à metro,drom sauf pour les communes à metro,drom,com pour conserver le comportement historique.
     *     @var array $fields Liste des champs souhaités dans la réponse
     *     @var string $format Format de réponse attendu
     *     @var string $geometry Géométrie à utiliser pour la sortie géographique
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
        return '/epcis';
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
        $optionsResolver->setDefined(['nom', 'boost', 'codeEpci', 'codeDepartement', 'codeRegion', 'zone', 'fields', 'format', 'geometry']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['fields' => array(0 => 'nom', 1 => 'code', 2 => 'codesRegions', 3 => 'codesDepartements'), 'format' => 'json', 'geometry' => 'centre']);
        $optionsResolver->addAllowedTypes('nom', ['string']);
        $optionsResolver->addAllowedTypes('boost', ['string']);
        $optionsResolver->addAllowedTypes('codeEpci', ['string']);
        $optionsResolver->addAllowedTypes('codeDepartement', ['string']);
        $optionsResolver->addAllowedTypes('codeRegion', ['string']);
        $optionsResolver->addAllowedTypes('zone', ['array']);
        $optionsResolver->addAllowedTypes('fields', ['array']);
        $optionsResolver->addAllowedTypes('format', ['string']);
        $optionsResolver->addAllowedTypes('geometry', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetEpcisBadRequestException
     *
     * @return null|\Ecourty\DataGouv\DataServices\Geo\Client\Model\Epci[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Geo\Client\Model\Epci[]', 'json');
        }
        if (400 === $status) {
            throw new \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetEpcisBadRequestException($serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Geo\Client\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}