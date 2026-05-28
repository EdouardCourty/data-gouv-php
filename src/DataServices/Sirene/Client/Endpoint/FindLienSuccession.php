<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Endpoint;

class FindLienSuccession extends \Ecourty\DataGouv\DataServices\Sirene\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\Sirene\Client\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * @param array{
     *    "q"?: string, //Contenu de la requête multicritères, voir la documentation pour plus de précisions
     *    "tri"?: string, //Permet de trier sur la variable siretEtablissementSuccesseur au lieu de siretEtablissementPredecesseur
     *    "nombre"?: string, //Nombre d'éléments demandés dans la réponse, défaut 20
     *    "debut"?: string, //Rang du premier élément demandé dans la réponse, défaut 0
     *    "curseur"?: string, //Paramètre utilisé pour la pagination profonde, voir la documentation pour plus de précisions
     * } $queryParameters
     * @param array $accept Accept content header application/json;charset=utf-8;qs=1|text/csv;charset=utf-8;qs=0.9|application/json
     */
    public function __construct(array $queryParameters = [], array $accept = [])
    {
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \Ecourty\DataGouv\DataServices\Sirene\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/siret/liensSuccession';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json;charset=utf-8;qs=1', 'text/csv;charset=utf-8;qs=0.9', 'application/json']];
        }
        return $this->accept;
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['q', 'tri', 'nombre', 'debut', 'curseur']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('q', ['string']);
        $optionsResolver->addAllowedTypes('tri', ['string']);
        $optionsResolver->addAllowedTypes('nombre', ['string']);
        $optionsResolver->addAllowedTypes('debut', ['string']);
        $optionsResolver->addAllowedTypes('curseur', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionNotFoundException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionNotAcceptableException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionTooManyRequestsException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionInternalServerErrorException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionServiceUnavailableException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionBadRequestException($response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionNotFoundException($serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseErreur', 'json'), $response);
        }
        if (is_null($contentType) === false && (406 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionNotAcceptableException($response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionTooManyRequestsException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionInternalServerErrorException($serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseErreur', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindLienSuccessionServiceUnavailableException($serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseErreur', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['ApiKeyAuth'];
    }
}