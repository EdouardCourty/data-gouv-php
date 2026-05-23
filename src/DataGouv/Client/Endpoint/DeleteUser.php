<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\DataGouv\Client\Endpoint;

class DeleteUser extends \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\Endpoint
{
    use \Ecourty\DataGouv\DataGouv\Client\Runtime\Client\EndpointTrait;
    protected $user;

    /**
     * @param array $queryParameters {
     *
     * @var bool $send_legal_notice Send formal legal notice with appeal information to owner (admin only)
     * @var bool $no_mail Do not send the simple deletion notification email. Note: automatically set to True when send_legal_notice=True to avoid sending duplicate emails.
     * @var bool $delete_comments Delete comments posted by the user upon user deletion
     *           }
     */
    public function __construct(string $user, array $queryParameters = [])
    {
        $this->user = $user;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'DELETE';
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

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['send_legal_notice', 'no_mail', 'delete_comments']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['send_legal_notice' => false, 'no_mail' => false, 'delete_comments' => false]);
        $optionsResolver->addAllowedTypes('send_legal_notice', ['bool']);
        $optionsResolver->addAllowedTypes('no_mail', ['bool']);
        $optionsResolver->addAllowedTypes('delete_comments', ['bool']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteUserForbiddenException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteUserNotFoundException
     * @throws \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteUserGoneException
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
        if (403 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteUserForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteUserNotFoundException($response);
        }
        if (410 === $status) {
            throw new \Ecourty\DataGouv\DataGouv\Client\Exception\DeleteUserGoneException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
