<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class UpdateResources extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    protected $dataset;

    /**
     * @param string                                             $dataset          The dataset ID or slug
     * @param \Ecourty\DataGouv\DataGouv\Client\Model\Resource[] $payload
     * @param array                                              $headerParameters {
     *
     * @var string $X-Fields An optional fields mask
     *             }
     */
    public function __construct(string $dataset, array $payload, array $headerParameters = [])
    {
        $this->dataset = $dataset;
        $this->body = $payload;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{dataset}'], [$this->dataset], '/datasets/{dataset}/resources/');
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateResourcesBadRequestException
     *
     * @return null|\Ecourty\DataGouv\DataGouv\Client\Model\Resource[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataGouv\Client\Model\Resource[]', 'json');
        }
        if (400 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\UpdateResourcesBadRequestException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
