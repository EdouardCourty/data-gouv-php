<?php

namespace Ecourty\DataGouv\DataServices\Geo\Client\Endpoint;

class GetCommunesByCode extends \Ecourty\DataGouv\DataServices\Geo\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\Geo\Client\Runtime\Client\Endpoint
{
    protected $code;
    /**
     * @param string $code Code INSEE de la commune
     * @param array $queryParameters {
     *     @var array $fields Liste des champs souhaités dans la réponse
     *     @var string $format Format de réponse attendu
     *     @var string $geometry Géométrie à utiliser pour la sortie géographique
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
        return str_replace(['{code}'], [$this->code], '/communes/{code}');
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
        $optionsResolver->setDefined(['fields', 'format', 'geometry']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['fields' => array(0 => 'nom', 1 => 'code', 2 => 'codesPostaux', 3 => 'siren', 4 => 'codeEpci', 5 => 'codeDepartement', 6 => 'codeRegion', 7 => 'population'), 'format' => 'json', 'geometry' => 'centre']);
        $optionsResolver->addAllowedTypes('fields', ['array']);
        $optionsResolver->addAllowedTypes('format', ['string']);
        $optionsResolver->addAllowedTypes('geometry', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetCommunesByCodeBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetCommunesByCodeNotFoundException
     *
     * @return null|\Ecourty\DataGouv\DataServices\Geo\Client\Model\Commune
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Geo\Client\Model\Commune', 'json');
        }
        if (400 === $status) {
            throw new \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetCommunesByCodeBadRequestException($serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Geo\Client\Model\Error', 'json'), $response);
        }
        if (404 === $status) {
            throw new \Ecourty\DataGouv\DataServices\Geo\Client\Exception\GetCommunesByCodeNotFoundException($serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Geo\Client\Model\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}