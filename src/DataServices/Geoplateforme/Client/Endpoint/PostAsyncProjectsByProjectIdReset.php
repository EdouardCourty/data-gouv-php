<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint;

class PostAsyncProjectsByProjectIdReset extends \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\Endpoint
{
    protected $projectId;
    /**
     * Permet de ré-initialiser un géocodage terminé (completed) ou en erreur (failed). Dans ce cas il retourne à l'état inactif et peut être modifié ou supprimé.
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
        return str_replace(['{projectId}'], [$this->projectId], '/async/projects/{projectId}/reset');
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
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectsByProjectIdResetUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectsByProjectIdResetForbiddenException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectsByProjectIdResetNotFoundException
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
            throw new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectsByProjectIdResetUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectsByProjectIdResetForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PostAsyncProjectsByProjectIdResetNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['ProjectAuth'];
    }
}