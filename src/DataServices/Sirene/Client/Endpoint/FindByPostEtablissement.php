<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Endpoint;

class FindByPostEtablissement extends \Ecourty\DataGouv\DataServices\Sirene\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\Sirene\Client\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * @param null|\Ecourty\DataGouv\DataServices\Sirene\Client\Model\EtablissementPostMultiCriteres $requestBody
     * @param array $accept Accept content header application/json;charset=utf-8;qs=1|text/csv;charset=utf-8;qs=0.9|application/json
     */
    public function __construct(?\Ecourty\DataGouv\DataServices\Sirene\Client\Model\EtablissementPostMultiCriteres $requestBody = null, array $accept = [])
    {
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \Ecourty\DataGouv\DataServices\Sirene\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/siret';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Ecourty\DataGouv\DataServices\Sirene\Client\Model\EtablissementPostMultiCriteres) {
            return [['Content-Type' => ['application/x-www-form-urlencoded']], http_build_query($serializer->normalize($this->body, 'json'))];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json;charset=utf-8;qs=1', 'text/csv;charset=utf-8;qs=0.9', 'application/json']];
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementNotFoundException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementNotAcceptableException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementRequestUriTooLongException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementTooManyRequestsException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementInternalServerErrorException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementServiceUnavailableException
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
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementBadRequestException($response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementNotFoundException($serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseErreur', 'json'), $response);
        }
        if (is_null($contentType) === false && (406 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementNotAcceptableException($response);
        }
        if (is_null($contentType) === false && (414 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementRequestUriTooLongException($serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseErreur', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementTooManyRequestsException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementInternalServerErrorException($serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseErreur', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByPostEtablissementServiceUnavailableException($serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseErreur', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['ApiKeyAuth'];
    }
}