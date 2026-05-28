<?php

namespace Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Endpoint;

class ListExportFormats extends \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Runtime\Client\Endpoint
{
    use \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/catalog/exports';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json; charset=utf-8']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Exception\ListExportFormatsUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Exception\ListExportFormatsInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (400 === $status) {
        }
        if (401 === $status) {
            throw new \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Exception\ListExportFormatsUnauthorizedException($response);
        }
        if (429 === $status) {
        }
        if (500 === $status) {
            throw new \Ecourty\DataGouv\DataServices\AnnuaireServicePublic\Client\Exception\ListExportFormatsInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['apikey'];
    }
}