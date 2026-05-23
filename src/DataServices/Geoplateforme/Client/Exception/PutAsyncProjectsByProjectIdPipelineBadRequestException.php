<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Exception;

class PutAsyncProjectsByProjectIdPipelineBadRequestException extends BadRequestException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Paramètres invalides');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}