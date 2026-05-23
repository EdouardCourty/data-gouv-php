<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class GetUser extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    protected $user;
    /**
     * @param string $user
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     */
    public function __construct(string $user, array $headerParameters = [])
    {
        $this->user = $user;
        $this->headerParameters = $headerParameters;
    }
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{user}'], [$this->user], '/users/{user}/');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['X-Fields']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('X-Fields', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetUserNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\GetUserGoneException
     *
     * @return null|\Ecourty\DataGouv\DataGouv\Client\Model\User
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataGouv\Client\Model\User', 'json');
        }
        if (404 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\GetUserNotFoundException($response);
        }
        if (410 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\GetUserGoneException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}