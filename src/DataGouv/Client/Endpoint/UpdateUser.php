<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class UpdateUser extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    protected $user;
    /**
     * @param string $user
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\User $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     */
    public function __construct(string $user, \Ecourty\DataGouv\DataGouv\Client\Model\User $payload, array $headerParameters = [])
    {
        $this->user = $user;
        $this->body = $payload;
        $this->headerParameters = $headerParameters;
    }
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{user}'], [$this->user], '/users/{user}/');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateUserBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateUserNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateUserGoneException
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
        if (400 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateUserBadRequestException($response);
        }
        if (404 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateUserNotFoundException($response);
        }
        if (410 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateUserGoneException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}