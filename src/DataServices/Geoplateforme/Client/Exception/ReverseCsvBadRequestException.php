<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception;

class ReverseCsvBadRequestException extends BadRequestException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Échec du géocodage suite à une erreur dans la requête ou dans le fichier CSV');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}