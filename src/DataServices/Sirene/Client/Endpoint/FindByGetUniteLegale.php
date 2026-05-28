<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Endpoint;

class FindByGetUniteLegale extends \Ecourty\DataGouv\DataServices\Sirene\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\Sirene\Client\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * @param array{
     *    "q"?: string, //Contenu de la requête multicritères, voir la documentation pour plus de précisions
     *    "date"?: string, //Date à laquelle on veut obtenir les valeurs des données historisées
     *    "champs"?: string, //Liste des champs demandés, séparés par des virgules
     *    "masquerValeursNulles"?: bool, //Masque (true) ou affiche (false, par défaut) les attributs qui n'ont pas de valeur
     *    "facette.champ"?: string, //Liste des champs sur lesquels des comptages seront effectués, séparés par des virgules
     *    "tri"?: string, //Champs sur lesquels des tris seront effectués, séparés par des virgules. Tri sur siren par défaut
     *    "nombre"?: int, //Nombre d'éléments demandés dans la réponse, défaut 20
     *    "debut"?: int, //Rang du premier élément demandé dans la réponse, défaut 0
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
        return '/siren';
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
        $optionsResolver->setDefined(['q', 'date', 'champs', 'masquerValeursNulles', 'facette.champ', 'tri', 'nombre', 'debut', 'curseur']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('q', ['string']);
        $optionsResolver->addAllowedTypes('date', ['string']);
        $optionsResolver->addAllowedTypes('champs', ['string']);
        $optionsResolver->addAllowedTypes('masquerValeursNulles', ['bool']);
        $optionsResolver->addAllowedTypes('facette.champ', ['string']);
        $optionsResolver->addAllowedTypes('tri', ['string']);
        $optionsResolver->addAllowedTypes('nombre', ['int']);
        $optionsResolver->addAllowedTypes('debut', ['int']);
        $optionsResolver->addAllowedTypes('curseur', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleBadRequestException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleNotFoundException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleNotAcceptableException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleRequestUriTooLongException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleTooManyRequestsException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleInternalServerErrorException
     * @throws \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleServiceUnavailableException
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
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleBadRequestException($response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleNotFoundException($serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseErreur', 'json'), $response);
        }
        if (is_null($contentType) === false && (406 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleNotAcceptableException($response);
        }
        if (is_null($contentType) === false && (414 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleRequestUriTooLongException($serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseErreur', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleTooManyRequestsException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleInternalServerErrorException($serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseErreur', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Sirene\Client\Exception\FindByGetUniteLegaleServiceUnavailableException($serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseErreur', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['ApiKeyAuth'];
    }
}