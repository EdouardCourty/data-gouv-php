<?php

namespace Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Endpoint;

class GetDatasetAttachments extends \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Runtime\Client\Endpoint
{
    protected $dataset_id;
    /**
    * Returns a list of all available attachments for a dataset.
    *
    * @param string $datasetId The identifier of the dataset to be queried.
    
    You can find it in the "Information" tab of the dataset page or in the dataset URL, right after `/datasets/`.
    */
    public function __construct(string $datasetId)
    {
        $this->dataset_id = $datasetId;
    }
    use \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{dataset_id}'], [$this->dataset_id], '/catalog/datasets/{dataset_id}/attachments');
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
     * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\GetDatasetAttachmentsUnauthorizedException
     * @throws \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\GetDatasetAttachmentsInternalServerErrorException
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
            throw new \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\GetDatasetAttachmentsUnauthorizedException($response);
        }
        if (429 === $status) {
        }
        if (500 === $status) {
            throw new \Ecourty\DataGouv\DataServices\CalendrierScolaire\Client\Exception\GetDatasetAttachmentsInternalServerErrorException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['apikey'];
    }
}