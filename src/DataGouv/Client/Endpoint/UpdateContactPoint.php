<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class UpdateContactPoint extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    protected $contact_point;
    /**
     * @param string $contactPoint
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\ContactPointWrite $payload
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     */
    public function __construct(string $contactPoint, \Ecourty\DataGouv\DataGouv\Client\Model\ContactPointWrite $payload, array $headerParameters = [])
    {
        $this->contact_point = $contactPoint;
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
        return str_replace(['{contact_point}'], [$this->contact_point], '/contacts/{contact_point}/');
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateContactPointBadRequestException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateContactPointNotFoundException
     *
     * @return null|\Ecourty\DataGouv\DataGouv\Client\Model\ContactPointRead
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataGouv\Client\Model\ContactPointRead', 'json');
        }
        if (400 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateContactPointBadRequestException($response);
        }
        if (404 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateContactPointNotFoundException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}