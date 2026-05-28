<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint;

class PutAsyncProjectsByProjectIdInputFile extends \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\Endpoint
{
    protected $projectId;
    /**
     * @param string $projectId Identifiant unique du projet
     * @param null|string|resource|\Psr\Http\Message\StreamInterface $requestBody
     * @param array{
     *    "Content-Length"?: int, //La taille du fichier peut être transmise pour s'assurer du transfert complet du fichier.
     *    "Content-Disposition"?: string, //Le nom du fichier à géocoder peut être transmis pour faciliter le suivi. Le fichier résultat reprendra en partie ce nom. Par défaut le fichier sera nommé input.csv.
     * } $headerParameters
     */
    public function __construct(string $projectId, $requestBody = null, array $headerParameters = [])
    {
        $this->projectId = $projectId;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{projectId}'], [$this->projectId], '/async/projects/{projectId}/input-file');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if (is_string($this->body) or is_resource($this->body) or $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['application/octet-stream']], $this->body];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Content-Length', 'Content-Disposition']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Content-Length', ['int']);
        $optionsResolver->addAllowedTypes('Content-Disposition', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PutAsyncProjectsByProjectIdInputFileBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PutAsyncProjectsByProjectIdInputFileUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PutAsyncProjectsByProjectIdInputFileForbiddenException
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PutAsyncProjectsByProjectIdInputFileNotFoundException
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
            throw new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PutAsyncProjectsByProjectIdInputFileBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PutAsyncProjectsByProjectIdInputFileUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PutAsyncProjectsByProjectIdInputFileForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\PutAsyncProjectsByProjectIdInputFileNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['ProjectAuth'];
    }
}