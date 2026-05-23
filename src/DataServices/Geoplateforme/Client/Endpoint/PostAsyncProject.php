<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint;

class PostAsyncProject extends \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\Endpoint
{
    /**
     * Cette requête permet de créer le projet de géocodage. Elle peut être réalisée de façon anonyme ou avec un jeton Géoplateforme valide.
     *
     * Si la requête est authentifiée avec l'en-tête Authorization alors il est possible de renseigner une communauté (Géoplateforme) de rattachement grâce à l'en-tête X-Community. Dans ce cas le projet hérite des quotas attribués à la communauté (taille max de fichier géocodage, niveau de parallélisation du géocodage). Par défaut un projet autorise un fichier de 50 Mo et ne propose pas de parallélisation (concurrency = 1).
     *
     * Lorsque le projet est créé avec un utilisateur authentifié, ce dernier recevra la notification de succès ou d'échec sur la boîte courriel renseignée avec son compte.
     *
     * À ce stade le projet est retourné avec un jeton qui doit être conservé pour les prochains appels du processus.
     *
     * @param array{
     *    "X-Community"?: string,
     * } $headerParameters
     */
    public function __construct(array $headerParameters = [])
    {
        $this->headerParameters = $headerParameters;
    }
    use \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/async/projects';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['X-Community']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('X-Community', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectForbiddenException
     *
     * @return null|\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Project
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Project', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectForbiddenException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth'];
    }
}