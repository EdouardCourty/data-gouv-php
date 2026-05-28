<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint;

class PostAsyncProjectsByProjectIdStart extends \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\Endpoint
{
    protected $projectId;
    /**
     * Permet de signifier à la plateforme que le géocodage est prêt à être effectué. Il faut au préalable que le fichier source ait été soumis, ainsi que les paramètres du traitement.
     *
     * L'opération peut être annulée via la requête adéquate.
     *
     * @param string $projectId Identifiant unique du projet
     */
    public function __construct(string $projectId)
    {
        $this->projectId = $projectId;
    }
    use \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{projectId}'], [$this->projectId], '/async/projects/{projectId}/start');
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
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectsByProjectIdStartUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectsByProjectIdStartForbiddenException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectsByProjectIdStartNotFoundException
     *
     * @return null|\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Project
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Project', 'json');
        }
        if (401 === $status) {
            throw new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectsByProjectIdStartUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectsByProjectIdStartForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectsByProjectIdStartNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['ProjectAuth'];
    }
}