<?php

namespace Ecourty\DataGouv\DataServices\Education\Client\Endpoint;

class GetDataset extends \Ecourty\DataGouv\DataServices\Education\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\Education\Client\Runtime\Client\Endpoint
{
    /**
    * Retourne les métadonnées de l'API et les différents points d'entrées disponibles.
    *
    * @param array{
    *    "select"?: string, //Permet d'ajouter, de supprimer et de modifier les champs retournés.
    Une expression peut être:
     - un joker `*` : retourne l'ensemble des champs
     - un nom de champ: retourne seulement ce champ
     - une expression complexe : retourne le resultat de l'expression. Un label peut être positionné pour cette expression. Par exemple : `count(*) as compte` retournera un nouveau champ nommé `compte` contenant le nombre d'établissements présents dans la requête.
    * } $queryParameters
    */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Ecourty\DataGouv\DataServices\Education\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/catalog/datasets/fr-en-annuaire-education';
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
        $optionsResolver->setDefined(['select']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('select', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Ecourty\DataGouv\DataServices\Education\Client\Model\Dataset
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataServices\Education\Client\Model\Dataset', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['api_key'];
    }
}