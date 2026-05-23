<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint;

class GetAsyncProjectsByProjectIdInputFileByToken extends \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\Endpoint
{
    protected $projectId;
    protected $token;
    protected $accept;
    /**
     * @param string $projectId Identifiant unique du projet
     * @param string $token Jeton de sécurité du fichier accessible dans les métadonnées du projet (inputFile.token)
     * @param array $accept Accept content header text/csv|application/json
     */
    public function __construct(string $projectId, string $token, array $accept = [])
    {
        $this->projectId = $projectId;
        $this->token = $token;
        $this->accept = $accept;
    }
    use \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{projectId}', '{token}'], [$this->projectId, $this->token], '/async/projects/{projectId}/input-file/{token}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['text/csv', 'application/json']];
        }
        return $this->accept;
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
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return json_decode($body);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}