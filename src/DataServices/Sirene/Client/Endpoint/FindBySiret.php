<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Endpoint;

class FindBySiret extends \Ecourty\DataGouv\DataServices\Sirene\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\Sirene\Client\Runtime\Client\Endpoint
{
    protected $siret;
    /**
     * Recherche d'un établissement par son numéro Siret (14 chiffres)
     * @param string $siret Identifiant de l'établissement (14 chiffres)
     * @param array{
     *    "date"?: string, //Date à laquelle on veut obtenir les valeurs des données historisées
     *    "champs"?: string, //Liste des champs demandés, séparés par des virgules
     *    "masquerValeursNulles"?: string, //Masque (true) ou affiche (false, par défaut) les attributs qui n'ont pas de valeur
     * } $queryParameters
     */
    public function __construct(string $siret, array $queryParameters = [])
    {
        $this->siret = $siret;
        $this->queryParameters = $queryParameters;
    }
    use \Ecourty\DataGouv\DataServices\Sirene\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{siret}'], [$this->siret], '/siret/{siret}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['date', 'champs', 'masquerValeursNulles']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('date', ['string']);
        $optionsResolver->addAllowedTypes('champs', ['string']);
        $optionsResolver->addAllowedTypes('masquerValeursNulles', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretForbiddenException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretNotFoundException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretNotAcceptableException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretTooManyRequestsException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretInternalServerErrorException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretServiceUnavailableException
     *
     * @return null|\Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseEtablissement
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseEtablissement', 'json');
        }
        if (is_null($contentType) === false && (301 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretBadRequestException($response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretNotFoundException($serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseErreur', 'json'), $response);
        }
        if (is_null($contentType) === false && (406 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretNotAcceptableException($response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretTooManyRequestsException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretInternalServerErrorException($serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseErreur', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindBySiretServiceUnavailableException($serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseErreur', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['ApiKeyAuth'];
    }
}