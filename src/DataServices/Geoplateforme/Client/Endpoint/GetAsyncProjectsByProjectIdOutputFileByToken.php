<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint;

class GetAsyncProjectsByProjectIdOutputFileByToken extends \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\Endpoint
{
    protected $projectId;
    protected $token;
    /**
     * @param string $projectId Identifiant unique du projet
     * @param string $token Jeton de sécurité du fichier accessible dans les métadonnées du projet (outputFile.token)
     */
    public function __construct(string $projectId, string $token)
    {
        $this->projectId = $projectId;
        $this->token = $token;
    }
    use \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{projectId}', '{token}'], [$this->projectId, $this->token], '/async/projects/{projectId}/output-file/{token}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/octet-stream']];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}