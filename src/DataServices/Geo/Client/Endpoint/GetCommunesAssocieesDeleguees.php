<?php

namespace Ecourty\DataGouv\DataServices\Geo\Client\Endpoint;

class GetCommunesAssocieesDeleguees extends \Ecourty\DataGouv\DataServices\Geo\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\Geo\Client\Runtime\Client\Endpoint
{
    /**
     * @param array $queryParameters {
     *     @var float $lat Latitude (en degrés)
     *     @var float $lon Longitude (en degrés)
     *     @var string $nom Nom de la commune
     *     @var string $code Code de la commune
     *     @var string $codeEpci Code de l'EPCI associé
     *     @var string $codeDepartement Code du département associé
     *     @var string $codeRegion Code de la région associée
     *     @var array $type Type permettant de filtrer si on retourne les communes, les arrondissements ou les 2. Par défaut à commune-actuelle.
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
        return '/communes_associees_deleguees';
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
        $optionsResolver->setDefined(['lat', 'lon', 'nom', 'code', 'codeEpci', 'codeDepartement', 'codeRegion', 'type', 'fields', 'format', 'geometry']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['fields' => array(0 => 'nom', 1 => 'code', 2 => 'type', 3 => 'chefLieu', 4 => 'codeEpci', 5 => 'codeDepartement', 6 => 'codeRegion'), 'format' => 'json', 'geometry' => 'centre']);
        $optionsResolver->addAllowedTypes('lat', ['float']);
        $optionsResolver->addAllowedTypes('lon', ['float']);
        $optionsResolver->addAllowedTypes('nom', ['string']);
        $optionsResolver->addAllowedTypes('code', ['string']);
        $optionsResolver->addAllowedTypes('codeEpci', ['string']);
        $optionsResolver->addAllowedTypes('codeDepartement', ['string']);
        $optionsResolver->addAllowedTypes('codeRegion', ['string']);
        $optionsResolver->addAllowedTypes('type', ['array']);
        $optionsResolver->addAllowedTypes('fields', ['array']);
        $optionsResolver->addAllowedTypes('format', ['string']);
        $optionsResolver->addAllowedTypes('geometry', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetCommunesAssocieesDelegueesBadRequestException
     *
     * @return null|\Ecourty\DataGouv\DataServices\Geo\Client\Model\Commune[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Geo\Client\Model\Commune[]', 'json');
        }
        if (400 === $status) {
            throw new \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetCommunesAssocieesDelegueesBadRequestException($serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Geo\Client\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}