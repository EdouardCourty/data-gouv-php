<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Endpoint;

class ReverseCsv extends \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\BaseEndpoint implements \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Géocodage inversé en masse d’un fichier CSV. Les paramètres de la requête permettent de spécifier les colonnes à utiliser pour le géocodage, les index à utiliser, les filtres à appliquer et les colonnes à conserver dans le fichier CSV de sortie.
     *
     * Le fichier soumis doit faire une taille maximale de 50 Mo.
     *
     * @param \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\ReverseCsvPostBody $requestBody
     * @param array $accept Accept content header text/csv|application/json
     */
    public function __construct(\Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\ReverseCsvPostBody $requestBody, array $accept = [])
    {
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/reverse/csv';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model\ReverseCsvPostBody) {
            $bodyBuilder = new \Http\Message\MultipartStream\MultipartStreamBuilder($streamFactory);
            $formParameters = $serializer->normalize($this->body, 'json');
            foreach ($formParameters as $key => $value) {
                $value = is_int($value) ? (string) $value : $value;
                if (is_array($value)) {
                    $value = $serializer->serialize($value, 'json');
                }
                $bodyBuilder->addResource($key, $value);
            }
            return [['Content-Type' => ['multipart/form-data; boundary="' . ($bodyBuilder->getBoundary() . '"')]], $bodyBuilder->build()];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['text/csv', 'application/json']];
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\ReverseCsvBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception\ReverseCsvBadRequestException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}