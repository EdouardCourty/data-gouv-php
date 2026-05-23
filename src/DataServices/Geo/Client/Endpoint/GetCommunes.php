<?php

namespace Ecourty\DataGouv\DataServices\Geo\Client\Endpoint;

class GetCommunes extends \Ecourty\DataGouv\DataServices\Geo\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\Geo\Client\Runtime\Client\Endpoint
{
    /**
     * @param array $queryParameters {
     *     @var string $codePostal Code postal associé
     *     @var float $lat Latitude (en degrés)
     *     @var float $lon Longitude (en degrés)
     *     @var string $nom Nom de la commune
     *     @var string $boost Mode de boost de la recherche par nom
     *     @var string $code Code de la commune
     *     @var string $siren Code SIREN de la commune
     *     @var string $codeEpci Code de l'EPCI associé
     *     @var string $codeDepartement Code du département associé
     *     @var string $codeRegion Code de la région associée
     *     @var string $codeParent Code de la commune si on a un arrondissement
     *     @var string $ancienCode Code INSEE ancien de la commune
     *     @var array $zone Zone permettant de filtrer à la métropole, aux DROM et aux COM. Défaut à metro,drom sauf pour les communes à metro,drom,com pour conserver le comportement historique.
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
        return '/communes';
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
        $optionsResolver->setDefined(['codePostal', 'lat', 'lon', 'nom', 'boost', 'code', 'siren', 'codeEpci', 'codeDepartement', 'codeRegion', 'codeParent', 'ancienCode', 'zone', 'type', 'fields', 'format', 'geometry']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['fields' => array(0 => 'nom', 1 => 'code', 2 => 'codesPostaux', 3 => 'siren', 4 => 'codeEpci', 5 => 'codeDepartement', 6 => 'codeRegion', 7 => 'population'), 'format' => 'json', 'geometry' => 'centre']);
        $optionsResolver->addAllowedTypes('codePostal', ['string']);
        $optionsResolver->addAllowedTypes('lat', ['float']);
        $optionsResolver->addAllowedTypes('lon', ['float']);
        $optionsResolver->addAllowedTypes('nom', ['string']);
        $optionsResolver->addAllowedTypes('boost', ['string']);
        $optionsResolver->addAllowedTypes('code', ['string']);
        $optionsResolver->addAllowedTypes('siren', ['string']);
        $optionsResolver->addAllowedTypes('codeEpci', ['string']);
        $optionsResolver->addAllowedTypes('codeDepartement', ['string']);
        $optionsResolver->addAllowedTypes('codeRegion', ['string']);
        $optionsResolver->addAllowedTypes('codeParent', ['string']);
        $optionsResolver->addAllowedTypes('ancienCode', ['string']);
        $optionsResolver->addAllowedTypes('zone', ['array']);
        $optionsResolver->addAllowedTypes('type', ['array']);
        $optionsResolver->addAllowedTypes('fields', ['array']);
        $optionsResolver->addAllowedTypes('format', ['string']);
        $optionsResolver->addAllowedTypes('geometry', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetCommunesBadRequestException
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
            throw new \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetCommunesBadRequestException($serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Geo\Client\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}