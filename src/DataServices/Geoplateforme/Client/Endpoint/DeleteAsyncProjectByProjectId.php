<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint;

class DeleteAsyncProjectByProjectId extends \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\Endpoint
{
    protected $projectId;
    /**
     * Permet la suppression d'un projet inactif (idle), terminé (completed) ou en erreur (failed).
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
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{projectId}'], [$this->projectId], '/async/projects/{projectId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\DeleteAsyncProjectByProjectIdUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\DeleteAsyncProjectByProjectIdForbiddenException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\DeleteAsyncProjectByProjectIdNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\DeleteAsyncProjectByProjectIdUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\DeleteAsyncProjectByProjectIdForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\DeleteAsyncProjectByProjectIdNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['ProjectAuth'];
    }
}