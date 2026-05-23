<?php

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class ScheduleHarvestSource extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    protected $source;
    /**
     * @param string $source
     * @param string $payload A cron expression
     * @param array $headerParameters {
     *     @var string $X-Fields An optional fields mask
     * }
     */
    public function __construct(string $source, string $payload, array $headerParameters = [])
    {
        $this->source = $source;
        $this->body = $payload;
        $this->headerParameters = $headerParameters;
    }
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{source}'], [$this->source], '/harvest/source/{source}/schedule/');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], $this->body];
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
     *
     * @return null|\Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Ecourty\DataGouv\DataGouv\Client\Model\HarvestSource', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}