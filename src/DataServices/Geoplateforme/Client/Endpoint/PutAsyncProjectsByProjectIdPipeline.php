<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint;

class PutAsyncProjectsByProjectIdPipeline extends \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\Endpoint
{
    protected $projectId;
    /**
     * Permet de définir les paramètres de géocodage mais aussi le format de sortie (CSV ou GeoJSON).
     *
     * Dans le cas du CSV, les paramètres du fichier d'entrée sont conservés à l'exception de l'encodage qui sera toujours de l'UTF-8.
     *
     * Attention : l'adéquation des paramètres de géocodage avec le fichier fourni n'est vérifiée qu'au moment du géocodage.
     *
     * @param string $projectId Identifiant unique du projet
     * @param null|\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Pipeline $requestBody
     */
    public function __construct(string $projectId, ?\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Pipeline $requestBody = null)
    {
        $this->projectId = $projectId;
        $this->body = $requestBody;
    }
    use \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{projectId}'], [$this->projectId], '/async/projects/{projectId}/pipeline');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\Pipeline) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PutAsyncProjectsByProjectIdPipelineBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PutAsyncProjectsByProjectIdPipelineUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PutAsyncProjectsByProjectIdPipelineForbiddenException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PutAsyncProjectsByProjectIdPipelineNotFoundException
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
        if (400 === $status) {
            throw new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PutAsyncProjectsByProjectIdPipelineBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PutAsyncProjectsByProjectIdPipelineUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PutAsyncProjectsByProjectIdPipelineForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PutAsyncProjectsByProjectIdPipelineNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['ProjectAuth'];
    }
}