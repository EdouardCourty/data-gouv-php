<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class DeleteDiscussionComment extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    protected $id;
    protected $cidx;

    /**
     * @param array $queryParameters {
     *
     * @var bool $send_legal_notice Send formal legal notice with appeal information to owner (admin only)
     *           }
     */
    public function __construct(string $id, string $cidx, array $queryParameters = [])
    {
        $this->id = $id;
        $this->cidx = $cidx;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{id}', '{cidx}'], [$this->id, $this->cidx], '/discussions/{id}/comments/{cidx}/');
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
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteDiscussionCommentForbiddenException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (403 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteDiscussionCommentForbiddenException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
