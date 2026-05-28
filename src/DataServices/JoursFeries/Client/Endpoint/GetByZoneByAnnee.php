<?php

namespace Ecourty\DataGouv\DataServices\JoursFeries\Client\Endpoint;

class GetByZoneByAnnee extends \Ecourty\DataGouv\DataServices\JoursFeries\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\JoursFeries\Client\Runtime\Client\Endpoint
{
    protected $zone;
    protected $annee;
    /**
     * @param string $zone Le nom de la zone
     * @param int $annee L'année pour les jours fériés
     */
    public function __construct(string $zone, int $annee)
    {
        $this->zone = $zone;
        $this->annee = $annee;
    }
    use \Ecourty\DataGouv\DataServices\JoursFeries\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{zone}', '{annee}'], [$this->zone, $this->annee], '/{zone}/{annee}.json');
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