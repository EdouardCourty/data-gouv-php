<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint;

class GetAsyncProjectByProjectId extends \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\Endpoint
{
    protected $projectId;
    /**
     * Permet la récupération des informations d'un projet :
     * - métadonnées
     * - état et progression du géocodage
     * - fichier source et fichier résultat (notamment le jeton d'accès)
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
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{projectId}'], [$this->projectId], '/async/projects/{projectId}');
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
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\GetAsyncProjectByProjectIdUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\GetAsyncProjectByProjectIdNotFoundException
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
            throw new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\GetAsyncProjectByProjectIdUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\GetAsyncProjectByProjectIdNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['ProjectAuth'];
    }
}