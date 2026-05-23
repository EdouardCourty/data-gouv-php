<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class DeleteReuse extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    protected $reuse;

    /**
     * @param string $reuse           The reuse ID or slug
     * @param array  $queryParameters {
     *
     * @var bool $send_legal_notice Send formal legal notice with appeal information to owner (admin only)
     *           }
     */
    public function __construct(string $reuse, array $queryParameters = [])
    {
        $this->reuse = $reuse;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{reuse}'], [$this->reuse], '/reuses/{reuse}/');
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
        $optionsResolver->setDefined(['send_legal_notice']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['send_legal_notice' => false]);
        $optionsResolver->addAllowedTypes('send_legal_notice', ['bool']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteReuseNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteReuseGoneException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteReuseNotFoundException($response);
        }
        if (410 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteReuseGoneException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
